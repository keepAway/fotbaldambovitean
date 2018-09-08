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
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function handleProviderCallback()
    {
		$user = Socialite::driver('facebook')->user();
		$authUser = $this->findOrCreateUser($user, 'facebook');
		Auth::login($authUser, true);
		return view('home');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        $email = ($user->email != '' ? $user->email : 'noemail@fotbaldambovitean.ro');

        return User::create([
            'name'     => $user->name,
            'email'    => $email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }
}