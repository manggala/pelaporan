@extends("Main.template")
@section("content")
<div class="container">
	<div class="section">
    <!--   Icon Section   -->
    	<center style="padding-top: 5%">
        	<h3>MySQL List </h3>
        </center>
	    <div class="row">
	    	<table class="bordered highlight">
		        <thead>
		          <tr>
		              <th data-field="id">No</th>
		              <th data-field="name">Database Name</th>
		              <th data-field="name">Database Username</th>
		              <th data-field="name">Database Password</th>
		              <th data-field="name">Status</th>
		              <th data-field="name">Action</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php $no = 0?>
		        	@foreach($mysql as $m)
		        	<tr>
			            <td>{{++$no}}</td>
			            <td>{{$m->DBNAME_MYSQL}}</td>
			            <td>{{$m->USERNAME_MYSQL}}</td>
			            <td>{{$m->PASSWORD_MYSQL}}</td>
			            <td>{{$m->NAMA_PROCESS}}</td>
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