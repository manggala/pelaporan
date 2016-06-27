@extends("template")
@section("content")
<div class="col-md-6">
	<div class="box box-success">
	    <div class="box-header">
	      <i class="fa fa-question-circle"></i>
	      <h3 class="box-title">Grafik Berdasarkan Headtruck dan Pertanyaan</h3>
	    </div>
	    <div class="box-body">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<label for="headtruck">Pilih Head Truck</label>
	    			<select class="form-control" id="head_truck">
	    				@foreach($head_truck as $ht)
	    					<option>{{ $ht->id_head_truck}}</option>
	    				@endforeach
	    			</select>
	    		</div>
	    	</div>
	    	<hr>
	    	<h5>Pilih Pertanyaan</h5>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="1">
	    				 1.	Periksa level oli mesin</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="2">
	    				 2.	Periksa level air pendingin (coolant)</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="3">
	    				 3.	Periksa level minyak kopling</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="4">
	    				 4.	Periksa isi air pencuci kaca</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="5">
	    				 5.	Periksa kekencangan terminal battery</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="6">
	    				 6.	Periksa lampu-lampu indikator</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="7">
	    				 7.	Periksa meteran pengukur (gauge)</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="8">
	    				 8.	Periksa fungsi klakson</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="9">
	    				 9.	Periksa vehicle massage / error code</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="10">
	    				 10.	Periksa indikator tekanan oli mesin</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="11">
	    				 11.	Periksa indikator pengisian battery</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="12">
	    				 12.	Periksa fungsi power steering</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="13">
	    				 13.	Periksa indikator sistem tekanan udara</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="14">
	    				 14.	Periksa bunyi tidak normal pada Engine dan Gearbox</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="15">
	    				 15.	Periksa asap knalpot</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="16">
	    				 16.	Periksa kebocoran oli dan coolant</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="17">
	    				 17.	Periksa fungsi dan kondisi lampu-lampu</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="18">
	    				 18.	Periksa / buangkandungan air di tangki udara</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="19">
	    				 19.	Periksa kondisi dan tekanan ban</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="20">
	    				 20.	Periksa posisi dan kondisi kaca spion</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="21">
	    				 21.	Setel posisi jok dan steering</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="22">
	    				 22.	Pakai sabuk pengaman</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="23">
	    				 23.	Periksa kerja rem kaki dan rem parkir</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="24">
	    				 24.	Periksa kondisi APAR</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="25">
	    				 25.	Periksa indikator level bahan bakar</button>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-12 ">
	    			<button class="btn btn-flat btn-default col-sm-12" style="text-align: left" onclick="GetData(this)" idPertanyaan="26">
	    				 26.	Pengecekan Rotary Lamp</button>
	    		</div>
	    	</div>
	    	
	    </div>
	</div>
</div>
<div class="col-md-6">
	<div class="box box-success">
	    <div class="box-header">
	      <i class="fa fa-line-chart"></i>
	      <h3 class="box-title">Grafik</h3>
	    </div>
	    <div class="box-body">
	    	<h5 id="headerChart">Pilih salah satu head truck dan pertanyaan</h5>
	    	<div class="col-sm-12">
	    		<canvas id="barChart" style="height:230px"></canvas>
	    	</div>
    	</div>
    </div>
</div>
@endsection("content")