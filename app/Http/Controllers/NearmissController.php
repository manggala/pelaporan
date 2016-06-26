<?php 
namespace App\Http\Controllers;
use DB;
use PreOperation;
use Operator;

class NearmissController extends Controller {
	protected $layout = 'template';

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index(){
		$Nearmiss = DB::table('Nearmiss')->join("operator", "nearmiss.id_operator" , "=", "operator.id_operator")->get();
		return View('Nearmiss.index', ["Nearmiss" => $Nearmiss]);
	}
}