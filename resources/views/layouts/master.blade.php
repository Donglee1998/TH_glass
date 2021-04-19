
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <title>TH glass</title>
  <link rel="shorcut icon" type="image/png" href="images/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="css/slick.css"/>
  <link rel="stylesheet" href="css/slick-theme.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Wow CSS -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
  <!-- Global CSS -->
  <link rel="stylesheet" href="css/global.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Header -->
  <link rel="stylesheet" href="css/header.css">
  <!-- Footer CSS -->
  <link rel="stylesheet" href="css/footer.css">
  <!-- Menu CSS -->
  <link rel="stylesheet" href="css/menu.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto:400,500&display=swap&subset=vietnamese" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <div id="header">
  <div class="header">
   <!-- Menu -->
   <div class="container-fluid menu-wrap">
    <div class="container mx-auto menu">
      <div class="logo"> <a href="index.html"><img src="images/logo1.svg" alt="logo" title="Logo"></a></div>
      <nav>
        <ul>
          <li><a href="index.html" title="Trang chủ">Trang chủ</a></li>
          <li><a href="about.html" title="Về chúng tôi">Về chúng tôi</a></li>
          <li><a href="product.html" title="Sản phẩm">Sản phẩm </a></li>
          <li><a href="news.html" title="Tin tức">Tin tức</a></li>
          <li><a href="contact.html" title="Liên hệ">Liên hệ</a></li>
          <li title="Tìm kiếm"><a id="icon-search" href="#"><i class="fas fa-search"></i></a></li>
          <li title="Giỏ hàng"><a id="icon-shopping-cart" href="#" class="cart-icon"><i class="bi bi-box-arrow-right"></i></a></li>

          <!-- Cart -->
          <div class="cart-overlay">
            <div class="cart">
              <span class="close-cart"><i class="far fa-window-close fa-2x" title="Ẩn giỏ hàng"></i></span>
              <h5 class="cart-heading">Giỏ hàng của bạn</h5>
              <div class="cart-content">
                <div class="row cart-title">
                  <div class="col-4 cart-title-item">Sản phẩm</div>
                  <div class="col-2 cart-title-item">Giá tiền</div>
                  <div class="col-2 cart-title-item">Số lượng</div>
                  <div class="col-2 cart-title-item">Thành tiền</div>
                  <div class="col-2 cart-title-item"></div>
                </div>

                <div class="cart-items"></div>

                <div class="cart-total">
                 <strong class="cart-total__title">Tổng tiền:  <span class="cart-total__price">0.000 đ</span></strong>
                </div>

               <div class="cart-btn">
                 <a href="product.html" class="btn-continue-shopping">Tiếp tục mua hàng</a>  
                 <a href="checkout.html" class="btn-pay">Tiến hành thanh toán</a>  
               </div>
             </div>
           </div> 
         </div>
          <!-- cart -->
       <!-- </div> -->
     </ul>
   </nav>
   <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
 </div>
</div>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="product.html"><img src="images/banner/banner1.png" class="d-block w-100" alt=""></a>
    </div>
    <div class="carousel-item">
      <a href="product.html"><img src="images/banner/banner3.png" class="d-block w-100" alt=""></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>







<!-- Hộp tìm kiếm -->
<div class=" search-box" style="display: none;">
  <span class="close-search-box"><i class="far fa-window-close fa-2x" title="Đóng tìm kiếm"></i></span>
  <form class="container" role="form">
    <div class="form-group">
      <input type="input" class="form-control input-lg" id="search" placeholder="Nhập tên sản phẩm">
    </div>
  </form>
  <div id="results"></div>
</div>
<!-- Hộp tìm kiếm -->







</div>

  <!-- Main -->
@yield('content')

<!-- Footer -->
<div id="footer">
	<link rel="stylesheet" href="css/responsive.css">


	<footer>
		<div class="page-footer font-small blue-grey lighten-5">
			

			<!-- Footer Links -->
			<div class="footer">
				<div class="container text-center text-md-left">
					<div class="row dark-grey-text">
						<div class="col-md-3 col-lg-4 col-xl-3 mb-4">
							<!-- Content -->
							<p class="footer-logo"><img src="images/logo-footer.svg" alt="Logo" title="Logo"></p>
							<!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
							<p class="footer-text"><i class="fas fa-map-marker-alt text-white"></i> Số 1, ngõ 148 Phúc Diễn, Nam Từ Liêm, Hà Nội</p>
							<p class="footer-text"><i class="fas fa-phone-alt text-white"></i> 0973863894</p>
							<p class="footer-text"><i class="fas fa-envelope text-white"></i> khuatducthien.94@gmail.com</p>
						</div>

						<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer-links">
							<!-- Links -->
							<h6 class="list-title">Liên kết nhanh</h6>
							<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto bg-white" style="width: 80px;">
							<p>
								<a class="text-white footer-link" href="index.html">Trang chủ</a>
							</p>
							<p>
								<a class="text-white footer-link" href="about.html">Về chúng tôi</a>
							</p>
							<p>
								<a class="text-white footer-link" href="product.html">Sản phẩm</a>
							</p>
							<p>
								<a class="text-white footer-link" href="news.html">Tin tức</a>
							</p>
						</div>

						<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 footer-info">
							<!-- Links -->
							<h6 class="list-title">Thông tin</h6>
							<hr class="teal accent-3 mb-4 mt-0 d-inline-block bg-white" style="width: 60px;">
							<p>
								<a class="text-white footer-link" href="shopping-guide.html">Hướng dẫn mua hàng</a>
							</p>
							<p>
								<a class="text-white footer-link" href="transfer-info.html">Thông tin chuyển khoản</a>
							</p>
							<p>
								<a class="text-white footer-link" href="#!">Chính sách đổi trả</a>
							</p>
							<p>
								<a class="text-white footer-link" href="contact.html#map-container-section">Bản đồ</a>
							</p>
						</div>

						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
							<h6 class="list-title">Bản tin</h6>
							<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto bg-white" style="width: 40px;">
							<p class="footer-link">Đăng ký để nhận tin tức mới nhất</p>
							<form>
								<input class="form__email" type="email" name="email" placeholder="Vui lòng điền email của bạn ở đây" required="">
								<input class="form__submit" type="submit" name="submit" value="Đăng ký">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v4.0'
    });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat"
  attribution=setup_tool
  page_id="2071419156449295"
  logged_in_greeting="Xin chào,  hãy gửi tin nhắn cho chúng tôi."
  logged_out_greeting="Xin chào,  hãy gửi tin nhắn cho chúng tôi.">
</div>


<!-- jQuery -->
<script src="js/jquery-3.4.1.js"></script>
<!-- Popper.js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Slick JS -->
<script src="js/slick.min.js"></script>
<!-- Wow JS -->
<script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
<!-- JS -->
<script src="js/script.js"></script>


</body>
</html>

