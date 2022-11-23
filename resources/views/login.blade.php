<!doctype html>
<html lang="en">
	<head>
		<title>Posyandu EMomma</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/x-icon" href="https://spesialis1.ikf.fk.unair.ac.id/wp-content/uploads/2019/02/logo-unair.png" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				{{-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login EMomma</h2>
				</div> --}}
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/mama.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
								{{-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> --}}
							</div>
							@if(Session::has('success'))
								<div class="alert alert-success">{{Session::get('success')}}</div>
							@endif
							@if(Session::has('error'))
								<div class="alert alert-danger">{{Session::get('error')}}</div>
							@endif
							<form action="{{ route('user.login')}}" method="post" class="signin-form">
								@csrf
								<div class="form-group mt-3">
									<input type="text" name="email" class="form-control" required>
									<label class="form-control-placeholder" for="email">Email</label>
									<span class="text-danger">@error('email'){{$message}}@enderror</span>
								</div>
								<div class="form-group">
									<input id="password-field" name="password" type="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									<span class="text-danger">@error('password'){{$message}}@enderror</span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Ingat Saya
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
								</div>
							</form>
		          			<p class="text-center">Belum Punya Akun? <a href="{{ route('user.register') }}">Register</a></p>
		        		</div>
		      		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

