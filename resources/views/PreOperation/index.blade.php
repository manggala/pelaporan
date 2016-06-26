@extends("template")
@section("content")
<div class="col-md-12">
	<div class="box box-success">
	    <div class="box-header">
	      <i class="fa fa-truck"></i>
	      <h3 class="box-title">Daftar Pre-Operation</h3>
	    </div>
	    <div class="box-body">
	    	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Operator</th>
                  <th>Kerusakan/Trouble</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $counter = 1?>
                	@foreach($daftarPreOperation as $data)
	                <tr>
	                  <td>
	                  	<?php 
	                  	echo $counter;
	                  	$counter++;
	                  	?>
	                  </td>
	                  <td>{{ $data->nama }}
	                  </td>
	                  <td> - </td>
	                  <td>{{ $data->keterangan_preOperation}}</td>
	                  <td>
	                  	<button class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#detailModal" onclick="detailModal(this)" tipe="po" idTipe="{{ $data->id_preOperation}}">Lihat Hasil</button>
	                  	<button class="btn btn-sm btn-flat btn-warning" data-toggle="modal" data-target="#konfirmasiModal" onclick="konfirmasiModal(this)" tipe="po" idTipe="{{ $data->id_preOperation}}">Konfirmasi</button>
	                  </td>
	                </tr>
	                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Operator</th>
                  <th>Kerusakan/Trouble</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
	    </div>
	    <!-- /.chat -->
	    <div class="box-footer">
	  </div>
</div>
@endsection