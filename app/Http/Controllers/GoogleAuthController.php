<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;


class GoogleAuthController extends Controller {
  public function redirectToProvider() {
    return Socialite::driver('google')->redirect();
  }
  
  public function handleProviderCallback() {
    try {
      $googleUser = Socialite::driver('google')->user();
      
      $user = User::updateOrCreate([
        'email' => $googleUser->email,
      ], [
        'name'     => $googleUser->name,
        'email'    => $googleUser->email,
        'password' => bcrypt($googleUser->id),
      ]);
      
      Auth::login($user);
      
      return redirect()->to('/home');
    } catch (Exception $e) {
      @dump($e);
    }
  }
}
