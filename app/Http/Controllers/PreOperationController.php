<?php 
namespace App\Http\Controllers;
use DB;
use App\PreOperation;
use App\Operator;

class PreOperationController extends Controller {
	protected $layout = 'template';

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index(){
		$daftarPreOperation = DB::table('PreOperation')
								->join("operator", "preoperation.id_operator" , "=", "operator.id_operator")
								->join("head_truck", "preoperation.id_headtruck", "=", "head_truck.id_head_truck")
								->get();
		return View('PreOperation.index', ["daftarPreOperation" => $daftarPreOperation]);
	}

	public function tolakKonfirmasi($id){
		$preoperation = PreOperation::where("id_preOperation","=",$id)->get();
		if (count($preoperation) > 0){
			PreOperation::where("id_preOperation","=",$id)->update(["status_preOperation" => -1]);
			return Redirect()->to("preoperation");
		}
		echo "<h2>Data Tidak Ditemukan</h2>";
	}

	public function izinkanKonfirmasi($id){
		$preoperation = PreOperation::where("id_preOperation","=",$id)->get();
		if (count($preoperation) > 0){
			PreOperation::where("id_preOperation","=",$id)->update(["status_preOperation" => 1]);
			return Redirect()->to("preoperation");
		}
		echo "<h2>Data Tidak Ditemukan</h2>";
	}

	public function grafik(){
		$head_truck = DB::table("head_truck")->get();
		return View('PreOperation.grafik', ['head_truck' => $head_truck]);
	}
}