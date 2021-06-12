<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ config('blog.meta.keywords') }}">
    <meta name="description" content="{{ config('blog.meta.description') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ config('blog.default_icon') }}">

    <title>Trung tâm ngoại ngữ TOEIC LN - Luyện thi TOEIC và anh văn giao tiếp</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/starter-template.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/carousel.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109210255-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109210255-1');
    </script>
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '149061489050717');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=149061489050717&ev=PageView&noscript=1"
	/></noscript>
<!-- End Facebook Pixel Code -->


  </head>

  <body>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1489585647793006";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
    <div class="container wrapper">
      <div class="row header">
        <div class="col-md-2">
            <img class="logo" src="{{ config('blog.default_logo') }}" alt="Logo">
        </div>
        <div class="col-md-6">
            <img class="top-banner-img" src="{{ config('blog.default_banner') }}" alt="Banner">
        </div>
        <div class="col-md-4 hotline">
          <span class="slogan">{{ config('blog.default_slogan') }}</span>
          @if(SettingHelper::setting('hot_line'))
            <span class="hot-line">Hotline: {{ SettingHelper::setting('hot_line') }}</span>
          @endif
        </div>
      </div>

    
    <nav class="navbar navbar-expand-lg navbar-dark bd-navbar navbar-custom">
      <a class="navbar-brand" href="{{ route('frontend_home') }}">Trang chủ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        {{ Menuhelper::menu() }}
        <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('frontend_search') }}">
          <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    @yield('content')
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/dist/js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('frontend/assets/js/vendor/holder.min.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('frontend/assets/js/ie10-viewport-bug-workaround.js') }}"></script>
	
	<script>
		$(document).ready(function(){
			if (!localStorage.getItem("popup_showed")) {
				localStorage.setItem("popup_showed", true);
				$('#myModal').modal('show');
			}
		    
		});
	</script>
  </body>
</html>
