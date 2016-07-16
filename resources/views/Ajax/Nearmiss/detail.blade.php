@if($Nearmiss[0]->status_nearmiss > 0)
<div class="row">
	<a class="btn btn-flat col-offset-1 btn-md btn-warning" href="{{URL::to('/nearmiss/download/report-nearmiss-'.$Nearmiss[0]->id_nearmiss.'.pdf')}}">
		Download Laporan
	</a>
</div>
@endif
<div class="row">
	<div class="col-sm-12">
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Id Form Nearmiss</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->id_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Tanggal Nearmiss</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->tanggal_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Lokasi Nearmiss</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->lokasi_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Nama Operator</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->nama}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Nama Supervisi</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->nama_supervisi}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Nama Saksi</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->nama_saksi_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Perbuatan yang dilakukan</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->perbuatan_dilakukan_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Tahapan Kejadian</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->tahapan_kejadian_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Penyebab</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->penyebab_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Penjelasan Penyebab</b></div>
			<div class="col-sm-4">{{ $Nearmiss[0]->penjelasan_penyebab_nearmiss}}</div>
		</div>
		<div class="row" style="border-bottom: solid #ddd 0.1px; padding: 3px">
			<div class="col-sm-4"><b>Bukti</b></div>
		</div>
		<div class="row">
			<div class="col-sm-4">{{ $Nearmiss[0]->bukti_1}}</div>
			<div class="col-sm-4">{{ $Nearmiss[0]->bukti_2}}</div>
		</div>
	</div>
</div>
<div class="row">
	<button style="background-color: none; border: none" class="col-md-12" onclick="ShowHidden(this)">Lihat Keterangan</button>
	<div class="col-md-12" style="display: none">
		
	</div>
</div>