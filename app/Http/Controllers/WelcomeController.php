<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Supervisi;
use Session;
use Input;
class WelcomeController extends Controller {

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
		return view('welcome');
	}
	
	public function dashboard(){
		return View("Main.dashboard");
	}

	public function login(){
		return View("Main.login");
	}

	public function logout(){
		Session::forget("supervisiSession");
		return redirect()->route("login");
	}

	public function doLogin(){
		$supervisi = Supervisi::where('username', Input::get('username'))->where('password', Input::get('password'))->first();
		
		if (count($supervisi) > 0){
			Session::set('supervisiSession', $supervisi);
			$sessionData = Session::get('supervisiSession');
			
			return redirect()->route('home');
		} else {
			return redirect()->route('login');
		}
	}
}
