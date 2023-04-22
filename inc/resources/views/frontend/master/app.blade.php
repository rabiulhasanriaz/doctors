<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Online Resume Personal Category Bootstrap Responsive website Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Online Resume Services Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<!-- Bootstrap-Core-CSS -->
	{{-- <link rel="stylesheet" href="{{asset('assets/css/animation-aos.css')}}"> --}}
	<link href='{{asset('assets/css/aos.css')}}' rel='stylesheet prefetch' type="text/css" media="all" />
	<!-- animation css -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<div class="mian-content">
		<!-- header -->
		@include('frontend.master.header')
		<!-- //header -->

		<!--  particles  -->
		<div id="particles-js"></div>
		<!-- //particles -->

		<!-- banner -->
		@include('frontend.master.banner')
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- banner bottom -->
	@include('frontend.about')
	<!-- //banner bottom -->

	<!-- services -->
	{{-- @include('frontend.service') --}}
	<!-- //services -->

	<!-- skills -->
	{{-- @include('frontend.skills') --}}
	<!-- //skills -->

	<!-- education -->
	@include('frontend.education')
	<!-- //education -->

	<!-- clients -->
	
	<!-- //clients -->

	<!-- facts -->
	{{-- @include('frontend.interesting_facts') --}}
	<!-- //facts -->

	<!-- projects -->
	{{-- @include('frontend.tips') --}}
	<!--//gallery-->

	<!-- awards -->
	{{-- @include('frontend.awards') --}}
	<!-- //awards -->

	<!-- footer -->
	@include('frontend.master.footer')
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{asset('assets/js/jquery-2.2.3.min.js')}}"></script>
	<!-- Default-JavaScript-File -->

	<!-- scripts required  for particle effect -->
	<script src='{{asset('assets/js/particles.min.js')}}'></script>
	<script src="{{asset('assets/js/particles.js')}}"></script>
	<!-- //scripts required for particle effect -->

	<!-- chart -->
	<script src='{{asset('assets/js/amcharts.js')}}'></script>
	<script src='{{asset('assets/js/chart.js')}}'></script>
	<!-- //chart -->
	<!-- //gallery-js -->

	<!-- stats -->
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}" type="text/css" media="screen" property="" />
	<script defer src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- animation js -->
	{{-- <script src='{{asset('assets/js/aos.js')}}'></script> --}}
	{{-- <script>
		AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });

    </script> --}}
	<!-- //animation js -->

	<!-- smooth scrolling -->
	<script src="{{asset('assets/js/SmoothScroll.min.js')}}"></script>
	<!-- move-top -->
	<script src="{{asset('assets/js/move-top.js')}}"></script>
	<!-- easing -->
	<script src="{{asset('assets/js/easing.js')}}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{asset('assets/js/online-resume.js')}}"></script>

	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- gallery -->
	<script src="{{asset('assets/js/jquery.chocolat.js')}}"></script>
	{{-- <link rel="stylesheet" href="{{asset('assets/css/chocolat.css')}}" type="text/css" media="screen"> --}}
	<!-- light-box -->
	{{-- <script>
		$(function () {
			$('.gallery a').Chocolat();
		});
	</script> --}}
	<!-- //light-box -->
	<!-- //gallery -->
	<!-- //Js files -->

</body>

</html>