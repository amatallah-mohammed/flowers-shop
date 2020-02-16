<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link href="css/bootstrap-rtl.css" rel="stylesheet">-->
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="css/style.css">
<style>
    #navber{
        position: fixed;
        width:100% ;
		z-index: 1;
    }
	.bg-light {
    background-color: white !important;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navber" style="background:white;">
    <a class="navbar-brand" style="color: #9837b1;font-size: 20px;  font-weight: bold;padding-right: 60px;font-family: 'Dancing Script', cursive;">Flower Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php" style="color: #9837b1;font-size: 20px; font-family: none; font-weight: bold;padding-right: 30px;"><i class="fa fa-fw fa-home"></i>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product.php" style="color: #9837b1;font-size: 20px; font-family: none; font-weight: bold;padding-right: 30px;">Product</a>
            </li>
			 <li class="nav-item">
                <a class="nav-link" href="contact.php" tabindex="-1" style="color: #9837b1;font-size: 20px; font-family: none; font-weight: bold;padding-right: 60px;"><i class="fa fa-fw fa-envelope"></i>Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color: #9837b1;font-size: 20px; font-family: none; font-weight: bold;padding-right: 30px;">
                    Dropdown
                </a>
                <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
           
			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #9837b1;font-size: 20px; font-family: none; font-weight: bold;padding-right: 30px;">
                   <i class="fa fa-fw fa-user"></i> Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;background: transparent;color: #9837b1;font-weight: bold;border: none;">LogIn</button></a>
					<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">SignUp</a>
                    
                </div>
            </li>
			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #9837b1;font-size: 20px; font-family: none; font-weight: bold;padding-right: 30px;">
                   <i class="fa fa-fw fa-user"></i> Language
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="my site - ar/product.php">Arabic</a>
					<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">English</a>
                    
                </div>
            </li>
        </ul>
		<div style="">
        <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
        <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
		
    </div>
</nav>


<script src="js/bootstrap.min.js"></script>
  <!--<script src="js/jquery-3.3.1.min.js"></script> <script  src="js/jquery-3.2.1.min.js"></script>-->
   <script src="js/jquery-2.2.3.min.js"></script>
  
<script src="js/bootstrap.js"></script>

<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navber").style.top = "0";
        } else {
            document.getElementById("navber").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    };
</script>