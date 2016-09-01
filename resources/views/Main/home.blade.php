@extends("Main.template")
@section('content')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Free Subdomain, FTP, and MySQL</h1>
        <div class="row center">
          <h5 class="header col s12 light">Student Pack Free Subdomain, FTP, and MySQL. Free features for Informatic's ITS Students</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{URL::to('assets/bg2.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">language</i></h2>
            <h5 class="center">Free Sub Domain</h5>

            <p class="light">With this feature, you can use your project world wide. Just type your manggala12.com subdomain and you are ready to go</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">open_in_browser</i></h2>
            <h5 class="center">Free FTP Access</h5>

            <p class="light">Upload your project to FTP server. So, anybody can see your project world wide. Psst!!! you can store any data there*</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">dns</i></h2>
            <h5 class="center">Free MySQL Database</h5>

            <p class="light">Have an access to PHPmyAdmin and store your data right there. </p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h2 class="header col s12 light">Let the world know you</h2>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{URL::to('assets/bg4.jpg')}}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Just in 4 ways</h4>
          <div class="row">
            <div class="col s12 m2">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">perm_identity</i></h2>
                <h5 class="center">Register</h5>
              </div>
            </div>
            <div class="col s12 m1">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">trending_flat</i></h2>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="icon-block">
                  <h2 class="center brown-text"><i class="material-icons">playlist_add</i></h2>
                  <h5 class="center">Create Subdomain/FTP/MySql</h5>
              </div>
            </div>
            <div class="col s12 m1">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">trending_flat</i></h2>
              </div>
            </div>
            <div class="col s12 m2">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">av_timer</i></h2>
                <h5 class="center">Wait for Verification</h5>
              </div>
            </div>
            <div class="col s12 m1">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">trending_flat</i></h2>
              </div>
            </div>
            <div class="col s12 m2">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">verified_user</i></h2>
                <h5 class="center">Ready to Go</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h2 class="header col s12 light">Create now?</h2>
          <a class="waves-effect waves-light btn">Login</a>
          or
          <a class="waves-effect waves-light btn">Register</a>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{URL::to('assets/bg3.jpg')}}" alt="Unsplashed background img 3"></div>
  </div>

@endsection