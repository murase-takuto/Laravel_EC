<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Socialite;

class OAuthLoginController extends Controller
{
	public function socialLogin($social) {
		return Socialite::driver($social)->redirect();
	}

	public function handleProviderCallback($social) {
		try {
			$userSocial = Socialite::driver($social)->user();
			$twitter_id = $userSocial->id;

			$user = User::where('twitter_id', $twitter_id)->first();

			if (is_null($user)) {
				if (is_null($userSocial->getNickname())) {
					$userSocialNickName = $userSocial->getName();
				} else {
					$userSocialNickName = $userSocial->getNickname();
				}

				$user_info = User::create([
					'name' => $userSocialNickName,
					//デベロッパーアカウントに利用規約のURｌを入力しないといけないためメールアドレスの取得は保留
					//'email' => $userSocial->getMail(),
				]);
			} else {
				$user_info = User::find($user->id);
			}

			if (is_null($user_info->twitter_id)) {
				$user_info->twitter_id = $userSocial->getId();
				if (is_null($userSocial->getNickname())) {
					$user_info->name = $userSocial->getName();
				} else {
					$user_info->name = $userSocial->getNickname();
				}
			}

			$twitter_config = config('twitter');
			//$twitter_config = config('twitter');
			$user_info->access_token = $twitter_config["access_token"];
			$user_info->access_token_secret = $twitter_config["access_token_secret"];

			$user_info->save();
			auth()->login($user_info, true);
			return redirect()->to('/item/index');

		} catch (Exception $e) {
			return redirect()->route('/item/index')->withErrors('ユーザー情報の取得に失敗しました。');
		}
	}
}
