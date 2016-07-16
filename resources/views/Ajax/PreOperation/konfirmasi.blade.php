@if($preOperation[0]->status_preOperation != 0)
	<p>PreOperation telah dikonfirmasi</p>
@else
<div class="row">
	<div class="col-md-12">
		<h4>Apakah Anda ingin Mengizinkan ID PreOperation untuk Beroperasi?</h4>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<a href="{{ URL::to('/preoperation/izinkanKonfirmasi/'.$preOperation[0]->id_preOperation)}}" class="btn btn-flat btn-success btn-sm pull-right">Izinkan</a>
		<a href="{{ URL::to('/preoperation/tolakKonfirmasi/'.$preOperation[0]->id_preOperation)}}" class="btn btn-flat btn-danger btn-sm">Tolak</a>
	</div>
</div>
@endif