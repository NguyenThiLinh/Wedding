<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>No Sidebar - Escape Velocity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<link href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<section id="header" class="wrapper">

					<!-- Logo -->
						<div id="logo">
							<h1><a href="#">Sweet Bouquet</a></h1>
							<p>A free responsive site template by HTML5 UP</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="{{route('index')}}" >Home</a></li>
								<li>
									<a href="#">Services</a>
									<ul>
										<li><a href="#">Lorem ipsum</a></li>
										<li><a href="#">Magna veroeros</a></li>
										<li><a href="#">Etiam nisl</a></li>
									</ul>
								</li>
								<li><a href="{{route('leftSlidebar')}}">Dresses</a></li>
								<li><a href="{{route('rightSlidebar')}}">Album</a></li>
								<li><a href="{{route('noSlidebar')}}">Contact</a></li>
							</ul>
						</nav>

				</section>

			<!-- Main -->
				<div id="main" class="wrapper style2">
					<div class="title">No Sidebar</div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Lorem ipsum dolor sit amet magna egestas<br class="mobile-hide" />
										morbi bibendum sed malesuada</h2>
										<p>Tempus feugiat veroeros sed nullam dolore</p>
									</header>
									<a href="#" class="image featured">
										<img src="{{asset('css/images/photos-by-lanty-568676-unsplash.jpg')}}" alt="ava-image" />
									</a>
									<p>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
									odio eleifend. Duis commodo fringilla commodo. Aliquam erat volutpat. Vestibulum
									facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
									tempus euismod. Vestibulum ante ipsum primis in faucibus.</p>
									<div class="card-columns">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title that wraps to a new line</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
								</article>
							</div>

					</div>
				</div>

			<!-- Highlights -->
			<section id="highlights" class="wrapper style3">
					<div class="title">Services</div>
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="{{asset('css/images/charisse-kenion-340543-unsplash.jpg')}}" alt="" /></a>
									<h3><a href="#">Dresses</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="{{route('leftSlidebar')}}" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="{{asset('css/images/drew-coffman-100876-unsplash.jpg')}}" alt="" /></a>
									<h3><a href="#">Photography</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="{{route('rightSlidebar')}}" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<a href="#" class="image featured"><img src="{{asset('css/images/photos-by-lanty-568676-unsplash.jpg')}}" alt="" /></a>
									<h3><a href="#">Wedding Services</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="{{route('noSlidebar')}}" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer" class="wrapper">
					<div class="title">The Rest Of It</div>
					<div class="container">
						<header class="style1">
							<h2>Dễ dàng book chụp hình cưới với MÃ ƯU ĐÃI để được giá tốt hơn</h2>
							<p>
							Nhiều ưu đãi hơn dành cho bạn. Cam kết giá rẻ hơn & dễ dàng lựa chọn gói chụp và số tờ album.
							</p>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">

								<!-- Contact Form -->
									<section>
										<form method="post" action="{{route('order.store')}}">
										<input type="hidden" name="_method" value="post" /> {{csrf_field()}}
											<div class="row gtr-50">
												<div class="col-6 col-12-small">
													<input type="text" name="customer_name" id="contact-name" placeholder="Name" />
												</div>
												<div class="col-6 col-12-small">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
												<div class="col-6 col-12-small">
													<input type="text" name="address" id="contact-address" placeholder="Address" />
												</div>
												<div class="col-6 col-12-small">
													<input type="text" name="phone" id="contact-Phone" placeholder="Phone number" />
												</div>
												<div class="col-12">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send"/></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="col-6 col-12-medium">

								<!-- Contact -->
									<section class="feature-list small">
										<div class="row">
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon fa-home">Mailing Address</h3>
													<p>
														Untitled Corp<br />
														1234 Somewhere Rd<br />
														Nashville, TN 00000
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon fa-comment">Social</h3>
													<p>
														<a href="#">@untitled-corp</a><br />
														<a href="#">linkedin.com/untitled</a><br />
														<a href="#">facebook.com/untitled</a>
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon fa-envelope">Email</h3>
													<p>
														<a href="#">nhutbui2903@gmail.com</a>
													</p>
												</section>
											</div>
											<div class="col-6 col-12-small">
												<section>
													<h3 class="icon fa-phone">Phone</h3>
													<p>
														(84) 2363-78-79-78 
													</p>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
						<div id="copyright">
							<ul>
								<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">Tử Lam</a></li>
							</ul>
						</div>
					</div>
				</section>

		</div>


		<!-- Scripts -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('js/browser.min.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
			<script src="{{asset('js/breakpoints.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>

	</body>
	<script lang="javascript">var _vc_data = {id : 3399264, secret : 'ad8a9d11805afe3a7b5c293bc71a48c2'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//live.vnpgroup.net/client/tracking.js?id=3399264';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
</html>