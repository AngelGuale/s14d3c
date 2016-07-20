<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Input;
use App\User as User;
use Auth;
use Redirect;
use Session;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/
	protected $loginPath = '/login';
	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'signout']);
	}

	public function iniciarSesion(){
		error_log("INICIANDO SESION");
        $userdata = array(
            'username' => Input::get('email'),
            'password'=> Input::get('password')
        );
        error_log("validating request " . Input::get('email'));
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata)){
        	$user=User::where('username', Input::get('email'))->first();
        	Session::put('user_id', $user->id);
        	return Redirect::to('/');
    	}else{
    		error_log("GG FALLO");
    		return Redirect::to('/login');
    	}

    	return Redirect::to('/login');
	}


	public function signout(){
        Auth::logout();
        Session::flush();
        error_log("DESLOGEANDO");
        return Redirect::to('/');
    }

}
