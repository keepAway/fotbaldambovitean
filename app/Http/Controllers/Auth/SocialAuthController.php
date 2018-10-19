<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;

use App\User;

class SocialAuthController extends Controller
{
  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function handleFacebookCallback()
    {
		try {
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
		
        $authUser = $this->findOrCreateUser($user, 'facebook');
		Auth::login($authUser, true);
		return redirect()->to('/');
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        
        $authUser = $this->findOrCreateUser($user, 'google');
        Auth::login($authUser, true);
        return redirect()->to('/');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        $email = ($user->email != '' ? $user->email : 'noemail@fotbaldambovitean.ro');

        return User::create([
            'name'            => $user->name,
            'email'           => $email,
            'provider'        => $provider,
            'provider_id'     => $user->id,
            'avatar'          => $user->avatar,
            'avatar_original' => $user->avatar_original
        ]);
    }
}