<!-- <?php

namespace App\Http\Controllers;
namespace Illuminate\Foundation\Auth;


use Illuminate\Http\Request;

class AuthenticatesAndRegistersUsers extends Controller
{
	trait AuthenticatesAndRegistersUsers
	{
		use AuthenticatesUsers, RegistersUsers {
			AuthenticatesUsers::redirectPath insteadof RegistersUsers;


/**
 * Show the application registration form.
 *
 * @return \Illuminate\Http\Response
 */
public function getRegister()
{
	return view('auth.register');
}

/**
 * Handle a registration request for the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function postRegister(Request $request)
{
	$validator = $this->validator($request->all());

	if ($validator->fails()) {
		$this->throwValidationException(
			$request, $validator
			);
	}

	Auth::login($this->create($request->all()));

	return redirect($this->redirectPath());
}public function redirectPath()
{
	if (property_exists($this, 'redirectPath'))
	{
		return $this->redirectPath;
	}

	return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
}

} -->