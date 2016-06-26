<?php namespace App\Http\Controllers;
use DB;
use App\Operator;
use App\PreOperation;
class AjaxController extends Controller {

	public function detail($tipe, $id){ 
		if ($tipe == "po"){
			$daftarPreOperation = DB::table('PreOperation')
						->where("preoperation.id_preOperation", "=", $id)
						->join("operator", "preoperation.id_operator" , "=", "operator.id_operator")
						->join("head_truck", "preoperation.id_headtruck", "=", "head_truck.id_head_truck")
						->get();
			if (count($daftarPreOperation) > 0)
				return View('Ajax.PreOperation.detail', ["daftarPreOperation" => $daftarPreOperation]);
			else 
				return "Gagal Memuat";
		} else if ($tipe == "nm"){
			$Nearmiss = DB::table('Nearmiss')
						->where("nearmiss.id_nearmiss", "=", $id)
						->join("operator", "nearmiss.id_operator" , "=", "operator.id_operator")
						->join("supervisi", "nearmiss.id_supervisi", "=", "supervisi.id_supervisi")
						->get();
			if (count($Nearmiss) > 0)
				return View('Ajax.Nearmiss.detail', ["Nearmiss" => $Nearmiss]);
		}
		return "Gagal Memuat";
	}

	public function konfirmasi($tipe, $id){
		if ($tipe == "po"){
			$preOperation = PreOperation::where("id_preOperation", "=", $id)->get();
			if (count($preOperation) > 0)
				return View('Ajax.PreOperation.konfirmasi', ["preOperation" => $preOperation]);
		} else if ($tipe == "nm"){
			return View('Ajax.Nearmiss.konfirmasi');
		}
	}

	public function getData($id){
		$listOfAnswer = array();
		$answer = array(
				"label" => "",
				"count" => 0
			);
		$preoperation = DB::table("preoperation")->get();
		$preoperationArray = array();
		$preoperationArray = json_decode(json_encode($preoperation), True);
		foreach ($preoperationArray as $po) {
			if (count($listOfAnswer) == 0){
				$answer = array(
					"label" => $po["pertanyaan_$id"],
					"count" => 1
				);
				array_push($listOfAnswer, $answer);
			} else {
				$counter = 0;
				for ($a = 0; $a < count($listOfAnswer); $a++){
					if ($listOfAnswer[$a]["label"] == $po["pertanyaan_$id"]){
						$listOfAnswer[$a]["count"] = $listOfAnswer[$a]["count"] + 1;
						$counter++;
					}
				}
				if ($counter == 0){
					$answer = array(
						"label" => $po["pertanyaan_$id"],
						"count" => 1
					);
					array_push($listOfAnswer, $answer);
				}
			}
		}
		$label = array();
		$count = array();
		foreach ($listOfAnswer as $loa) {
			array_push($label, $loa["label"]);
			array_push($count, $loa["count"]);
		}
		return ["label" => $label, "count" => $count];
	}
}