@extends("Main.template")
@section("content")
<div class="container">
	<div class="section">
    <!--   Icon Section   -->
    	<center style="padding-top: 5%">
        	<h3>Subdomain List </h3>
        </center>
	    <div class="row">
	    	<table class="bordered highlight">
		        <thead>
		          <tr>
		              <th data-field="id">No</th>
		              <th data-field="name">Name</th>
		              <th data-field="name">Status</th>
		              <th data-field="name">Action</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php $no = 0?>
		        	@foreach($subdomain as $s)
		        	<tr>
			            <td>{{++$no}}</td>
			            <td>{{$s->ALAMAT_SUBDOMAIN}}.manggala12.com</td>
			            <td>{{$s->NAMA_PROCESS}}</td>
			            <td><a class="waves-effect waves-light btn btn-small red lighten-1"><i class="material-icons left">delete</i>Delete</a></td>
			        </tr>
		        	@endforeach
		        </tbody>
		    </table>
	    </div>
	    <div class="row">
		    <a class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
	    </div>
	</div>
</div>
@endsection