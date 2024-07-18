<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
			<title>DARS</title>
	

   <link rel="icon" href="image/288962599_408601677857494_1395590741157851249_n.jpg" type="image/x-icon">
   <link rel="apple-touch-icon" sizes="180x180" href="image/288962599_408601677857494_1395590741157851249_n.jpg">

	<link rel="stylesheet" href="assets/frontend/default-new/css/all.min.css">

    <link rel="stylesheet" href="assets/frontend/default-new/css/bootstrap.min.css">



    <link rel="stylesheet" href="assets/frontend/default-new/css/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/h-2-carousel.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/nice-select.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/slick-theme.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/slick.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/style.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/new-style.css">
    <link rel="stylesheet" href="assets/frontend/default-new/css/responsive.css">
    <link rel="stylesheet" href="assets/frontend/default-new/summernote-0.8.20-dist/summernote-lite.min.css">
    <link rel="stylesheet" href="assets/global/tagify/tagify.css">
    <link rel="stylesheet" href="assets/global/toastr/toastr.css">


<link rel="stylesheet" href="assets/frontend/default-new/css/custom.css">


<script src="assets/global/js/jquery-3.6.1.min.js"></script>
	<style type="text/css">
			</style>

</head>
<body class="">


 <!-- Include the navbar -->
 <?php include 'header.php'; ?>

<!---------- Header Section End  ---------->
<section class="sign-up my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 text-center">
                <img loading="lazy" width="65%" src="image/siu.svg">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12 ">
                <div class="sing-up-right">
                    <h3>Sign up<span>!</span></h3>
                    

                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <h5>Full Name</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="first_name" type="text" name="first_name" placeholder="Enter your Full Name" required>
                            </div>
                        </div>

                       

                        <div class="mb-4">
                            <h5>Email</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-user"></i>
                                <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>

                        <div class="mb-4">
                                    <h5>Phone Number</h5>
                                    <div class="position-relative">
                                        <i class="fas fa-phone"></i>
                                        <input class="form-control" id="phone" type="phone" name="phone" placeholder="Enter your phone number">
                                    </div>
                                </div>


                                <div class="mb-4">
                                    <h5>User Image <small>( pdf,  png, jpg)</small></h5>
                                    <div class="position-relative">
                                        <input class="form-control" id="document" type="file" name="document">
                                       
                                    </div>
                                </div>



                        <div class="mb-4">
                            <h5>Password</h5>
                            <div class="position-relative">
                                <i class="fa-solid fa-key"></i>
                                <i class="fa-solid fas fa-eye cursor-pointer" onclick="if($('#password').attr('type') == 'text'){$('#password').attr('type', 'password');}else{$('#password').attr('type', 'text');} $(this).toggleClass('fa-eye'); $(this).toggleClass('fa-eye-slash') " style="right: 20px; left: unset;"></i>
                                <input class="form-control" id="password" type="password" name="password" placeholder=" Enter your password" required>
                            </div>
                        </div>

                                                   

                          
                        
                                                
                        <div class="log-in">
                            <button type="submit" class="btn btn-primary">
                                Sign up                            </button>
                        </div>
                    </form>

                    <div class="another text-center">
                        <p>
                            Already you have an account?                            <a href="login.php">login</a>
                        </p>
                        <h5></h5>
                    </div>
                    
</div>                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


  <!-- Include the navbar -->
  <?php include 'footer.php'; ?>

	</body>
</html>
