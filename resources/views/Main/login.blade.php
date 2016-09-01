@extends("Main.template")
@section('content')
<div class="container">
  <div class="section">
    <!--   Icon Section   -->
    <div class="row">
      <form class="col s6 offset-s3" style="padding-top: 5%" method="post" action="dologin">
        <center>
        <h3>Login </h3>
        </center>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email">
            <label for="email">Email</label>
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s6 offset-s3">
            dont have an account? <a href="register">Register</a>
          </div>
          <button class="btn waves-effect waves-light right col s3" type="submit" name="action">Login
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection