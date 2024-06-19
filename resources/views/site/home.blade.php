<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.1/examples/album/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Who's Afraid of little old me?</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="./Album example for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Album example for Bootstrap_files/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">The Eras Tour</h4>
              <p class="text-muted">A cantora e ícone pop Taylor Swift faz um show que mostra por que ela é um fenômeno cultural. No espetáculo, a artista apresenta canções de todas as fases de sua carreira. </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="/quemsomos" class="text-white">Follow on Twitter</a></li>
                <li><a href="https://getbootstrap.com/docs/4.1/examples/album/#" class="text-white">Like on Facebook</a></li>
                <li><a href="https://getbootstrap.com/docs/4.1/examples/album/#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="https://getbootstrap.com/docs/4.1/examples/album/#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Profile</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">The Eras Tour</h1>
          <p class="lead text-muted">A cantora e ícone pop Taylor Swift faz um show que mostra por que ela é um fenômeno cultural. No espetáculo, a artista apresenta canções de todas as fases de sua carreira.</p>
          <p>
            <a href="/ttpd" class="btn btn-primary my-2">Login</a>
            <a href="/quemsomos" class="btn btn-secondary my-2">Quem Somos?</a>
          </p>
        </div>
      </section>

                      <!---DEBUT--->

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/tay.jpeg') }}" alt="debut" style="width: 100%">
                    <br>
                    <br>
                  <p class="card-text"> Debut - Taylor's Version </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <!---FEARLESS--->

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/fearless.jpeg') }}" alt="fearless tv" style="width: 90%; height: 50%;">
                    <br>
                    <br>
                  <p class="card-text">Fearless - Taylor's Version</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>

                <!---SPEAK NOW--->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/SpeaKnow.jpeg') }}" alt="Speak Now tv" style="width: 100%;">
                    <br>
                    <br>
                  <p class="card-text">Speak Now - Taylor's Version</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <!--RED-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/RedTV.jpeg') }}" alt="fearless tv" style="width: 100%;">
                    <br>
                    <br>
                  <p class="card-text">RED - Taylor's Version</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <!--1989-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/1989.jpeg') }}" alt="fearless tv" style="width: 100%;">
                    <br>
                    <br>
                  <p class="card-text">1989 - Taylor's Version</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <!--REPUTATION-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/rep.jpeg') }}" alt="fearless tv" style="width: 100%;">
                    <br>
                    <br>
                  <p class="card-text">reputation - Taylor's Versionss</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <!--Lover-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/lover.jpeg') }}" alt="lover" style="width: 100%;">
                        <br>
                        <br>
                  <p class="card-text">Lover - Taylor's Version</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/folklore.jpeg') }}" alt="fearless tv" style="width: 100%;">
                        <br>
                        <br>
                  <p class="card-text">Folklore - Taylor's Version</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <!--EVERMORE--->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <img src="{{ asset('img/evermore.jpeg') }}" alt="fearless tv" style="width: 100%;">
                    <br>
                    <br>
                  <p class="card-text">Evermore - Taylor's Version</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">13 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="https://getbootstrap.com/docs/4.1/examples/album/#">Back to top</a>
        </p>
        <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="https://getbootstrap.com/docs/4.1/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/4.1/getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Album example for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Album example for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Album example for Bootstrap_files/bootstrap.min.js.download"></script>
    <script src="./Album example for Bootstrap_files/holder.min.js.download"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body></html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
