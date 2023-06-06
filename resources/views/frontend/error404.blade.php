
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nookx - eCommerce Website</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    </head>
    <body class="error-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
			<div class="error-box">
				<div class="error-box-img">
					<img src="{{ asset('frontend/assets/img/error-01.png') }}" alt="" class="img-fluid" >
				</div>
				<h3 class="h2 mb-3">Oops! This Page is Not Found.</h3>
				<p class="h4 font-weight-normal">The requested page dose not exist.</p>
				<a href="{{ url('/') }}" class="btn btn-primary">Back to Home</a>
			</div>
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

	</body>
</html>