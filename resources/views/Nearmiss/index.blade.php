@extends("template")
@section("content")
<div class="col-md-12">

	<div class="box box-success">
	    <div class="box-header">
	      <i class="fa fa-warning"></i>
	      <h3 class="box-title">Daftar Nearmiss</h3>
	    </div>
	    <div class="box-body">
	    	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Pelapor</th>
                  <th>Penanggung Jawab</th>
                  <th>Lokasi</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $counter = 1;
                	?>
                	@foreach($Nearmiss as $data)
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
	                  <td>{{ $data->lokasi_nearmiss}}</td>
	                  <td>{{ $data->tanggal_nearmiss}}</td>
	                  <td>
	                  	<button class="btn btn-sm btn-flat btn-success" data-toggle="modal" data-target="#detailModal" onclick="detailModal(this)" tipe="nm" idTipe="{{ $data->id_nearmiss}}">Lihat Hasil</button>
	                  	<button class="btn btn-sm btn-flat btn-warning" data-toggle="modal" data-target="#konfirmasiModal" onclick="konfirmasiModal(this)" tipe="nm" idTipe="{{ $data->id_nearmiss}}">Konfirmasi</button>
	                  </td>
	                </tr>
	                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Pelapor</th>
                  <th>Penanggung Jawab</th>
                  <th>Lokasi</th>
                  <th>Tanggal</th>
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