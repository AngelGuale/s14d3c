<?php namespace App\Http\Controllers;
use Input;
use App\User as User;
use Auth;
use Redirect;
use Session;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(){
		return view('guest_home');
	}

	public function login(){
		return view('login');
	}

	public function signup(){
		return view('signup');
	}

	public function register(){
		error_log("EN REGISTRO");
		if (Session::get('user_id')){
			return Redirect::to('/');
		}

		$name = Input::get('name');
		$lastname = Input::get('lastname');
		$username = Input::get('email');
		$password = Input::get('pass');
		$repeat_password = Input::get('repeat_pass');

		if($password != $repeat_password){
			return Redirect::back();
		}

     	$user_id=User::insertGetId(
        	$arrayName = array(
                'nombre' => $name,
                'apellido' => $lastname,
                'username' => $username,
                'password' =>\Hash::make($password) ,
            )
        );

        return Redirect::to('/login');

	}

}
