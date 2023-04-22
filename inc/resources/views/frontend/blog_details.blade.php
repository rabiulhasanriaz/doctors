
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>{{ $detail->title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/frontend/details/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{asset('assets/frontend/details/blog.css')}}" rel="stylesheet">
    <style>
        .blog-image {
          position: relative;
          text-align: center;
          color: white;
        }
        
        .bottom-left {
          position: absolute;
          bottom: 8px;
          left: 16px;
        }
        
        </style>
  </head>

  <body>

    <div class="container">
      

        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
              <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>BLOGS</strong>
              </a>
            </div>
          </div>
    <div class="blog-image">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <img src="{{ $detail->image }}" style="width:100%;">
            <div class="bottom-left">
                <h2>{{ $detail->title }}</h2>
            </div>
          </div>
    </div>
      

      
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">{{ $detail->title }}</h2>
            <p class="blog-post-meta">{{ date('d-M-Y ', strtotime($detail->created_at)) }}</p>

            <p>{{ $detail->context }}</p>
          </div><!-- /.blog-post -->

          

          

          

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">

          <div class="p-3">
            <h4 class="font-italic">Blogs</h4>
            <ol class="list-unstyled mb-0">
                @foreach ($blogs as $blog)
                <li>
                    <a href="{{ route('frontend.blog-details', $blog->id) }}">{{ $blog->title }}</a>
                </li>
                @endforeach
              
            </ol>
          </div>
          <div class="p-3">
            <h4 class="font-italic">
                <a href="{{ route('frontend.blogs') }}">Back to Main Blog Page</a>
            </h4>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Dr-Sumiya Islam Tonni</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{asset('assets/frontend/details/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/details/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/details/holder.min.js')}}"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
