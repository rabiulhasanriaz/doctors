<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Blog List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/frontend/blog/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('assets/frontend/blog/album.css')}}" type="text/css" media="all" />
	<!-- Style-CSS -->
	
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">DR. SUMIYA TONNI</h4>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
                <li><a href="{{ route('index') }}" class="text-white">Home</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>BLOGS</strong>
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
          <h1 class="jumbotron-heading">BLOG LIST</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
            @if ($blogs->isEmpty())
               <span class="text-danger"><h4><i>No Blogs Avaialble Right Now!</i></h4></span> 
            @endif
          <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="{{ $blog->image }}" height="250px" alt="Card image cap">
                  <div class="card-body">
                    <span><b>{{ $blog->title }}</b></span>
                    <p class="card-text">{{ $blog->context }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="{{ route('frontend.blog-details', $blog->id) }}" class="btn btn-info btn-sm">View</a>
                      </div>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Copyright &copy; <a href="https://drsumiya.me">Dr-Sumiya Islam Tonni</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('assets/frontend/blog/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/blog/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/blog/holder.min.js')}}"></script>
  </body>
</html>
