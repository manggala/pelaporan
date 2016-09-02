@extends("Main.template")
@section("content")
<div class="container">
	<div class="section">
    <!--   Icon Section   -->
    	<center style="padding-top: 5%">
        	<h3>FTP List </h3>
        </center>
	    <div class="row">
	    	<table class="bordered highlight">
		        <thead>
		          <tr>
		              <th data-field="id">No</th>
		              <th data-field="name">Subdomain</th>
		              <th data-field="name">FTP User</th>
		              <th data-field="name">FTP Password</th>
		              <th data-field="name">Status</th>
		              <th data-field="name">Action</th>
		          </tr>
		        </thead>
		        <tbody>
		        	<?php
		        	$no = 0;
		        	foreach ($ftp as $f) {
		        		$no++;
		        		?>
		        		<tr>
				            <td>{{ $no}}</td>
				            <td>{{$f->ALAMAT_SUBDOMAIN}}.manggala12.com</td>
				            <td>{{$f->USERNAME_FTP}}</td>
				            <td>{{$f->PASSWORD_FTP}}</td>
				            <td>{{$f->NAMA_PROCESS}}</td>
				            <td><a class="waves-effect waves-light btn btn-small red lighten-1"><i class="material-icons left">delete</i>Delete</a></td>
				        </tr>
		        		<?php
		        	}
		        	?>
		        </tbody>
		    </table>
	    </div>
	    <div class="row">
		    <a class="btn-floating btn-large waves-effect waves-light red right"><i class="material-icons">add</i></a>
	    </div>
	</div>
</div>
@endsection