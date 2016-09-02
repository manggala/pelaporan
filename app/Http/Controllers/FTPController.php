<?php namespace App\Http\Controllers;
use DB;
use Input;
use Session;
use App\Models\Users;
class FTPController extends Controller {

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
		$sessionData = Session::get('sessionData');
		/*print_r($sessionData['ID_USER']);*/
		if (!empty($sessionData)){
			$ftp = DB::table('ftps')
					->where('ftps.ID_USER', '=', $sessionData['ID_USER'])
					->join('subdomains', 'ftps.ID_SUBDOMAIN', '=', 'subdomains.ID_SUBDOMAIN')
					->join('process', 'ftps.ID_PROCESS', '=', 'process.ID_PROCESS')
					->get();
			return view('FTP.index', ['sessionData' => $sessionData, 'ftp' => $ftp]);
		}
		return view('FTP.index', ['sessionData' => $sessionData]);
	}
}