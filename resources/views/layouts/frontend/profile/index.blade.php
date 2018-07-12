<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Franchi-es</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--

Template 2076 Zentro

http://www.tooplate.com/view/2076-zentro

-->
	<link rel="stylesheet" href="{{asset('2076_zentro/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('2076_zentro/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('2076_zentro/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('2076_zentro/css/nivo-lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('2076_zentro/css/nivo_themes/default/default.css')}}">
	<link rel="stylesheet" href="{{asset('2076_zentro/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/profile.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<!-- navigation section -->
@include('layouts/frontend/menu/navbar')


<!-- gallery section -->
<section id="gallery" class="parallax-section">
	<div class="container-fluid">
		  <!--<profile></profile>-->
			<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			<!------ Include the above in your HEAD tag ---------->

			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
			    	 <div class="well profile">
			            <div class="col-sm-12">
			                <div class="col-xs-12 col-sm-8">
			                    <h2>Nicole Pearson</h2>
			                    <p><strong>About: </strong> Web Designer / UI. </p>
			                    <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
			                    <p><strong>Skills: </strong>
			                        <span class="tags">html5</span>
			                        <span class="tags">css3</span>
			                        <span class="tags">jquery</span>
			                        <span class="tags">bootstrap3</span>
			                    </p>
			                </div>
			                <div class="col-xs-12 col-sm-4 text-center">
			                    <figure>
			                        <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
			                        <figcaption class="ratings">
			                            <p>Ratings
			                            <a href="#">
			                                <span class="fa fa-star"></span>
			                            </a>
			                            <a href="#">
			                                <span class="fa fa-star"></span>
			                            </a>
			                            <a href="#">
			                                <span class="fa fa-star"></span>
			                            </a>
			                            <a href="#">
			                                <span class="fa fa-star"></span>
			                            </a>
			                            <a href="#">
			                                 <span class="fa fa-star-o"></span>
			                            </a>
			                            </p>
			                        </figcaption>
			                    </figure>
			                </div>
			            </div>
			            <div class="col-xs-12 divider text-center">
			                <div class="col-xs-12 col-sm-4 emphasis">
			                    <h2><strong> 20,7K </strong></h2>
			                    <p><small>Followers</small></p>
			                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
			                </div>
			                <div class="col-xs-12 col-sm-4 emphasis">
			                    <h2><strong>245</strong></h2>
			                    <p><small>Following</small></p>
			                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
			                </div>
			                <div class="col-xs-12 col-sm-4 emphasis">
			                    <h2><strong>43</strong></h2>
			                    <p><small>Snippets</small></p>
			                    <div class="btn-group dropup btn-block">
			                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
			                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			                        <span class="caret"></span>
			                        <span class="sr-only">Toggle Dropdown</span>
			                      </button>
			                      <ul class="dropdown-menu text-left" role="menu">
			                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
			                        <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
			                        <li class="divider"></li>
			                        <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
			                        <li class="divider"></li>
			                        <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
			                      </ul>
			                    </div>
			                </div>
			            </div>
			    	 </div>
					</div>
				</div>
			</div>

	</div>
</section>


<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>ZENTRO</h3>
				<p>Copyright Â© Zentro Restaurant and Cafe

                | Design: <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
			</div>
		</div>
	</div>
</section>

<!-- JAVASCRIPT JS FILES -->
<script src="{{asset('2076_zentro/js/jquery.js')}}"></script>
<script src="{{asset('2076_zentro/js/bootstrap.min.js')}}"></script>
<script src="{{asset('2076_zentro/js/jquery.parallax.js')}}"></script>
<script src="{{asset('2076_zentro/js/smoothscroll.js')}}"></script>
<script src="{{asset('2076_zentro/js/nivo-lightbox.min.js')}}"></script>
<script src="{{asset('2076_zentro/js/wow.min.js')}}"></script>
<script src="{{asset('2076_zentro/js/custom.js')}}"></script>
{{-- <script src="{{asset('js/app.js')}}"></script> --}}

</body>
</html>
