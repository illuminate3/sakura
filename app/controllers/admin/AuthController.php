<?php namespace App\Admin\Controllers;
 
class AuthController extends \BaseController {

	/**
	 * Show Login action.
	 * POST /auth
	 *
	 * @return Response
	 */
	public function loginAction()
	{
		$rules = [
			'email'		=>	'required|email',
			'password'	=>	'required|alphaNum|min:8'
		];

		$validator = \Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			foreach($validator->messages()->all() as $message)
	        {
				Notification::error($message);
			}
			return Redirect::back()->withInput(Input::except('password'));
//			return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));

		}
		else {

			$credentials = [
				'email'		=>	Input::get('email'),
				'password'	=>	Input::get('password')
			];

			// Authenticate user and log them in.
			try {
				$user = Sentry::authenticate($credentials, false);

				if ($user) {
					Notification::success('Welcome back!');
					return Redirect::to('');
				}
			}
			catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
			{

				Notification::error('Username and/or password is incorrect.');
//				return Redirect::route('user.login')->with(Input::except('password'));
				return Redirect::route('login')->withErrors($validator)->withInput(Input::except('password'));
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				Notification::error('No users found with those credentials.');
//				return Redirect::route('user.login')->with(Input::except('password'));
				return Redirect::route('login')->withErrors($validator)->withInput(Input::except('password'));
			}
			catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
			{
				Notification::error('This user has not been activated.');
//				return Redirect::route('user.login')->with(Input::except('password'));
				return Redirect::route('login')->withErrors($validator)->withInput(Input::except('password'));
			}

			// The following is only required if throttling is enabled
			catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
			{
				$sTime = Sentry::findThrottlerByUserLogin($credentials['email'])->getSuspensionTime();
				Notification::error('That user has been suspended for: ' . $sTime);
//				return Redirect::route('user.login')->with(Input::except('password'));
				return Redirect::route('login')->withErrors($validator)->withInput(Input::except('password'));
			}
			catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
			{
				Notification::error('This account has been banned. Permanently.');
				return Redirect::route('login')->with(Input::except('password'));
//				return Redirect::route('login')->withErrors($validator)->withInput(Input::except('password'));
			}
		}
	}

	public function logoutAction() {
		Sentry::logout();
		return Redirect::to('');
	}

}