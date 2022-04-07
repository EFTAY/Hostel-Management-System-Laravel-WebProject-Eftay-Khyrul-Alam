<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>HMS - Registration</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('vendors/images/login_icon.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('src/plugins/jquery-steps/jquery.steps.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}">
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{route('login')}}">
					<img src="{{asset('vendors/images/baiust_logo.png')}}" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{ route('login')}}">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
            </div>
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{asset('vendors/images/register-page-img.png')}}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <h3>Input Your Data</h3>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Name:</label>
                                <input type="text" placeholder="Name" name="name" class="form-control" required id="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Email:</label>
                                <input type="email" placeholder="Email" name="email" class="form-control" required id="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Password:</label>
                                <input type="password" placeholder="Password" name="password" class="form-control" required id="">

                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Confirm Password:</label>
                                <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control" required id="">

                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-lg float-right">Submit</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<!-- js -->
	<script src="{{asset('vendors/scripts/core.js')}}"></script>
	<script src="{{asset('vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('vendors/scripts/process.js')}}"></script>
	<script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('src/plugins/jquery-rosteps/jquery.steps.js')}}"></script>
	<script src="{{asset('vendors/scripts/steps-setting.js')}}"></script>
</body>

</html>