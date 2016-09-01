@extends("Main.template")
@section("content")
<div class="container">
  	<div class="section">
    	<!--   Icon Section   -->
    	<div class="row">
    		<form class="col s6 offset-s3" style="padding-top: 5%" method="post" action="doregist">
		        <center>
		        <h3>Profile Edit</h3>
		        </center>
		        <div class="row">
		        	<div class="col s12">
		        		<img src="" style="height: 175px; width: 175px">
		        		<div class="file-field input-field">
					      <div class="btn">
					        <span>Upload Picture</span>
					        <input type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
		        	</div>
		        </div>
		        <div class="row">
		          <div class="input-field col s6">
		            <input id="first_name" type="text" class="validate" required name="first_name" value="">
		            <label for="first_name">First Name</label>
		          </div>
		          <div class="input-field col s6">
		            <input id="last_name" type="text" class="validate" required name="last_name" value="">
		            <label for="last_name">Last Name</label>
		          </div>
		        </div>
		        <div class="row">
		          <div class="input-field col s12">
		            <input id="username" type="text" class="validate" required name="username" value="{{ $sessionData['USERNAME_USER']}}" disabled>
		            <label for="username">Username </label>
		            <label for="username" data-error="wrong" data-success="right">Username</label>
		          </div>
		        </div>
		        <div class="row">
		          <div class="input-field col s12">
		            <input id="email" type="email" class="validate" required name="email" value="{{ $sessionData['EMAIL_USER']}}" disabled>
		            <label for="email">Email </label>
		            <label for="email" data-error="wrong" data-success="right">Email</label>
		          </div>
		        </div>
		        <div class="row">
		          <div class="input-field col s12">
		            <input id="nohp" type="number" class="validate" required name="nohp" value="{{ $sessionData['HP_USER']}}">
		            <label for="nohp">Phone</label>
		            <label for="nohp" data-error="wrong" data-success="right">Phone</label>
		          </div>
		        </div>
		        <div class="row">
		          <div class="input-field col s12">
		            <input id="password" type="password" class="validate" required name="password">
		            <label for="password">Konfirmasi dengan Password</label>
		          </div>
		        </div>
		        <div class="row">
		          <button class="btn waves-effect waves-light right col s3 offset-s6" type="submit" name="action">Save
		            <i class="material-icons right">send</i>
		          </button>
		        </div>
		      </form>
    	</div>
	</div>
</div>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
  <a class="btn-floating btn-large red">
    <i class="material-icons">library_add</i>
  </a>
  <ul>
    <li><a class="btn-floating red" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">language</i></a></li>
    <li><a class="btn-floating yellow darken-1" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">open_in_browser</i></a></li>
    <li><a class="btn-floating green" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="material-icons">dns</i></a></li>
  </ul>
</div>
@endsection