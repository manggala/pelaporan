@extends("Main.template")
@section('content')
<?php
$first_name = "";
$last_name = "";
$username = "";
$email = "";
$nohp = "";
if (isset($registFail)){
  $registFail = $registFail[0];
  $first_name = $registFail['insertData']['FIRST_NAME'];
  $last_name = $registFail['insertData']['LAST_NAME'];
  if (!isset($registFail['registMessage']['er205']))
    $username = $registFail['insertData']['USERNAME_USER'];
  if (!isset($registFail['registMessage']['er105']))
    $email = $registFail['insertData']['EMAIL_USER'];
  $nohp = $registFail['insertData']['HP_USER'];
}

?>
<div class="container">
  <div class="section">
    <!--   Icon Section   -->
    <div class="row">
      <form class="col s6 offset-s3" style="padding-top: 5%" method="post" action="doregist">
        <center>
        <h3>Register </h3>
        </center>
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate" required name="first_name" value="{{$first_name}}">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" required name="last_name" value="{{$last_name}}">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="username" type="text" class="validate" required name="username" value="{{$username}}">
            <label for="username">Username <?php if (isset($registFail['registMessage']['er205'])) echo "(".$registFail['registMessage']['er205'].")"?></label>
            <label for="username" data-error="wrong" data-success="right">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" required name="email" value="{{$email}}">
            <label for="email">Email <?php if (isset($registFail['registMessage']['er105'])) echo "(".$registFail['registMessage']['er105'].")"?></label>
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="nohp" type="number" class="validate" required name="nohp" value="{{$nohp}}">
            <label for="nohp">Phone</label>
            <label for="nohp" data-error="wrong" data-success="right">Phone</label>
          </div>
        </div>
        @if (isset($registFail['registMessage']['er305']))
          <div class="row">
            <p>Password tidak cocok</p>
          </div>
        @endif
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" required name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="repassword" type="password" class="validate" required name="repassword">
            <label for="repassword">Re-type Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s6">
            <input type="checkbox" id="agreement" required/>
            <label for="agreement">i have read and agreed the <a href=""> User Agreement</a></label>
          </div>
          <button class="btn waves-effect waves-light right col s3" type="submit" name="action">Register
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection