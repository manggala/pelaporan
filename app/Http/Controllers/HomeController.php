<?php namespace App\Http\Controllers;
use Input;
use Session;
use App\Models\Users;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
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
	 * Show the application welcome screen to the supervisi.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('Main.home');
	}

	public function login(){
		return view('Main.login');
	}
	public function register(){
		$registFail = Session::pull('registFail');
		if (!empty($registFail)){
			Session::flush();
			return view('Main.register', ['registFail' => $registFail]);
		}
		return view('Main.register');
	}

	public function dologin(){
		$user = Users::where('EMAIL_USER', Input::get('email'))->where('PASSWORD_USER', Input::get('password'))->first();
		if (!empty($user)){
			Session::set('sessionData', $user);
			$sessionData = Session::get('sessionData');
			return redirect()->route('profil.edit');
		} else {
			return redirect()->route('login');
		}
	}

	public function doregist(){
		$userEmail = Users::where('EMAIL_USER', Input::get('email'))->first();
		$userName = Users::where('USERNAME_USER', Input::get('username'))->first();
		$insertData = [
				'USERNAME_USER' => Input::get('username'),
				'PASSWORD_USER' => Input::get('password'),
				'EMAIL_USER' => Input::get('email'),
				'NAMA_USER' => Input::get('first_name')." ".Input::get('last_name'),
				'HP_USER' => Input::get('nohp')
			];
		$registFail = array();

		if (!empty($userEmail)){
			$emailFail = ['status' => 105, 'er105' => 'Email has been used'];
			//array_push($registFail, $emailFail);
			$registFail['er105'] = 'Email has been used';
		} 
		if (!empty($username)){
			$nameFail = ['status' => 205, 'er205' => 'Username has been used'];
			$registFail['er205'] = 'Username has been used';
			//array_push($registFail, $nameFail);
		}
		if (Input::get('password') != Input::get('repassword')){
			$passFail = ['status' => 305, 'er305' => 'Password doesnt match, type again'];
			$registFail['er305'] = 'Password doesnt match';
			//array_push($registFail, $passFail);
		}
		if (count($registFail) > 0){
			$insertData['FIRST_NAME'] = Input::get('first_name');
			$insertData['LAST_NAME'] = Input::get('last_name');
			Session::push('registFail', ['registMessage' => $registFail, 'insertData' => $insertData]);

			return redirect()->route('register');
		} else{
			$user = Users::insert($insertData);
			Session::set('sessionData', $user);
			return redirect()->route('profil.edit');
		}
	}
}
