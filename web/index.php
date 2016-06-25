<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jqueryEasing.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="style.css" >
<title>Demo Website</title>
</head>
<div id="container">

	<div class="header">
			<div class="logo">
            <a href="index.php"><img src="logo.png" alt="Vat lieu xay dung" title="Vat lieu xay dung" style="margin-left: 30px;"></a></div>
    
  
    
            <div id="menu">
                   <ul class="navigation ">
                    <li><a class="menu" href="index.php">Trang chủ</a></li>
                    <li><a href="#dichvu" class="menu" >Dịch vụ</a></li>
                    <li><a href="#sanpham" class="menu">Sản phẩm</a></li>
                    <li><a href="#doitac" class="menu" >Đối tác</a></li>
                    <li><a href="#lienhe" class="menu">Liên hệ</a></li>
                    <div class="socials">
						<ul id="menu-social-menu" class=""><li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#" onclick="__gaTracker('send', 'event', 'outbound-widget', '#', '');"><i class="fa fa-twitter"></i></a></li>
<li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#" onclick="__gaTracker('send', 'event', 'outbound-widget', '#', '');"><i class="fa fa-dribbble"></i></a></li>
<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#" onclick="__gaTracker('send', 'event', 'outbound-widget', '#', '');"><i class="fa fa-facebook"></i></a></li>
</ul>					</div>
<li class="rtca">
			    		<a class="active1" href="login" target="_self" data-trackingid="Log-In-Top">LOG IN</a>
			    	</li>
					<div id="search">
					<form>
					  <input type="text" name="search" placeholder="Tìm kiếm..." style="float:  right; margin-right: 20px; padding-top: 5px; padding-bottom: 5px; margin-top: 7px;">
					</form>
					</div>
					<li class="icon">
				<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
					</li>
                  </ul>
				
             </div> 
             <progress value="0" id="progressBar" style="margin-top: 46px;">
  <div class="progress-container">
    <span class="progress-bar"></span>
  </div>
</progress>
 
              </div>
        
             <div id="content"><?php include 'full/full.php'; ?>
             
             
             </div>
                             
                             
            <br/>
			
			<div id="dichvu" style="margin-top: 70px; margin-bottom: 30px;"><h2>DỊCH VỤ</h2></div>
			
			<div class="row">
				  <div class="col-xs-6 col-sm-4 dichvu" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">
				
				  <div class="service-icon"> 
				  
				  <i class="fa fa-clock-o fa-5" aria-hidden="true"></i>
				  
				  </div>
				  <h3 class="red-border-bottom">Hỗ trợ quý khách 24/7</h3>
				  <p>Chúng tôi luôn sẵn sàng hỗ trợ khi bạn cần</p>
				  
				  </div>
				  <div class="col-xs-6 col-sm-4 dichvu">
				  
				  
				  <div class="service-icon"> 
				  
				  <i class="fa fa-bus fa-5" aria-hidden="true" style="margin-top: 7px;"></i>
				  
				  </div>
				  <h3 class="red-border-bottom">Giao hàng nhanh nhất</h3>
				  <p>Giao hàng đúng thời gian và địa điểm quý khách yêu cầu.</p>
				  
				  
				  </div>
				  <!-- Optional: clear the XS cols if their content doesn't match in height -->
				  <div class="clearfix visible-xs-block"></div>
				  <div class="col-xs-6 col-sm-4 dichvu">
				  
				  
				  <div class="service-icon"> 
				  
				  <i class="fa fa-money fa-5" aria-hidden="true"></i>
				  
				  </div>
				  <h3 class="red-border-bottom">Hoàn tiền 100%</h3>
				  <p>Chúng tôi có chính sách hoàn tiền lại 100% với các sản phẩm không đạt chất lượng</p>
				  
				  </div>
				</div>
			</div>	
                             
                             
        <div class="contentfull" ><h2 style="margin-top: 10px;">Danh mục sản phẩm</h2>
           			<?php include 'menu.php'; ?>
			<div id="sanpham">
			<div class="sp"> 
				<!--<div class="sanpham" style="margin-top: 10px; margin-bottom: 15px;text-align:center">
					<h2>Danh mục sản phẩm</h2>
				</div>-->
				
				<div class="tosp" style="margin-left: 15px;">
					<div class="sanpham1">
						<h3> Sản phẩm bán chạy</h3>
					</div>
					<div class="div1" style="text-align:center;">
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
					</div><!-- end div 1 -->
				 </div> <!-- end tosp -->
				 <div class="tosp" style="margin-left: 15px;">
					<div class="sanpham1">
						<h3> Sản phẩm mới</h3>
					</div>
					<div class="div1" style="text-align:center;">
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
						</a>
					</div><!-- end div 1 -->
				 </div> <!-- end tosp -->
				 <div class="tosp" style="margin-left: 15px;">
					<div class="sanpham1">
						<h3> Sản phẩm đang giảm giá</h3>
					</div>
					<div class="div1" style="text-align:center;">
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img  class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
							<span class="product-sale"> 
								<img id="image2" src="http://bizweb.dktcdn.net/100/053/973/themes/69529/assets/sale.png?1464942703735" alt="sale" />
							</span>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img  class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
							<span class="product-sale"> 
								<img id="image2" src="http://bizweb.dktcdn.net/100/053/973/themes/69529/assets/sale.png?1464942703735" alt="sale" />
							</span>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img  class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
							<span class="product-sale"> 
								<img id="image2" src="http://bizweb.dktcdn.net/100/053/973/themes/69529/assets/sale.png?1464942703735" alt="sale" />
							</span>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img  class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
							<span class="product-sale"> 
								<img id="image2" src="http://bizweb.dktcdn.net/100/053/973/themes/69529/assets/sale.png?1464942703735" alt="sale" />
							</span>
						</a>
						<a class="product" style="text-decoration: none;" href="#" alt="" title="" >
							<img  class="img" src="img/anh1.jpg" />
							<p class="goods">Còn hàng</p>
							<h3 class="namesp" style="margin-top: 0px;">Thép 10</h3>
							<h4 class="price">1.000.000 ₫</h4>
							<span class="product-sale"> 
								<img id="image2" src="http://bizweb.dktcdn.net/100/053/973/themes/69529/assets/sale.png?1464942703735" alt="sale" />
							</span>
						</a>
					</div><!-- end div 1 -->
				 </div> <!-- end tosp -->
            </div><!-- end sp --> 
        </div>      <!-- end sanpham -->
               
         </div>
		  
		  
		  

          <div id="doitac" style="margin-top: 70px; margin-bottom: 30px;"><h2>Đối tác của chúng tôi</h2></div>
				<div class="doitac">
                                      <img class="images" src="img/b2.jpg" alt="" >
                                      <img class="images" src="img/b3.jpg" alt="" >
                                      <img class="images" src="img/b4.jpg" alt="" >
                                      <img class="images" src="img/donglam.png" alt="">      	
									  <img class="images" src="img/xmkd.png" alt=""> 	
                                      <img class="images" src="img/b9.jpg" alt=""> 	
									  <img class="images" src="img/b10.jpg" alt=""> 	
									<div class="mask"></div>  
            
                      		</div>
							
			<div class="customers " style="margin-bottom: 5px;">
			<div class="review">
				<h2 style="margin-top: 60px;"><span>Nhận xét của khách hàng về chất lượng sản phẩm</span></h2>
				<div class="tomlai" style="width: 100%;">
				<div class="boxcus boxcus_1">
					<div class="bolai">
						<div class="img">
						<img src="img/cus1.jpg">
						</div>
						<div class="text" style="margin-top: 30px;">
							<p>Sản phẩm gạch ốp tường có chất lượng tốt, tôi đã dùng được 3 năm nhưng vẫn chưa có dấu hiệu hỏng hóc.</p>
							<p style="margin-top:5px; font-weight:bold; color:yellow">Khách hàng</p>
						</div>
						<div class="name">
							<p>Trần Thị Hồng Uyên</p>
						</div>
					</div>
	            </div>
				
				<div class="boxcus boxcus_2">
	            	<div class="img">
					<img src="img/cus2.jpg">
					</div>
	                <div class="text" style="margin-top: 30px;">
	                	<p>Chúng tôi rất hài lòng về chất lượng gạch của đại lý, chúng tôi tin sẽ được hợp tác trong thời gian dài. Xin cảm ơn các bạn!</p>
						<p style="margin-top:5px; font-weight:bold; color:yellow">Khách hàng</p>
	                </div>
	                <div class="name">
	                    <p>Trần Nữ Như Quỳnh</p>
	                </div>
	            </div>
				
				<div class="boxcus boxcus_3">
	            	<div class="img">
					<img src="img/cus3.jpg">
					</div>
	                <div class="text" style="margin-top: 30px;">
	                	<p>Đúng là hàng Việt Nam chất lượng cao, nếu có dịp, tôi sẽ quay lại ủng hộ đại lý nhiều hơn nữa, chúc đại lý làm ăn phát đạt! </p>
						<p style="margin-top:5px; font-weight:bold;color:yellow">Khách hàng</p>
	                </div>
	                <div class="name">
	                    <p>Phạm Như Ngọc Tuấn</p>
	                    <a href=""></a>
	                </div>
	            </div>
				</div>	
			</div>
		</div>				
					
			<div id="lienhe" style="text-decoration:none; overflow:hidden; height:300px; width:100%; max-width:100%;">
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:100;'><div id='gmap_canvas' style='height:440px;width:100%;'></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				<script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(16.4586468,107.59227650000003),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(16.4586468,107.59227650000003)});infowindow = new google.maps.InfoWindow({content:'<strong>Cty TNHH Vật Liệu  Xây Dựng 3 Thành Viên</strong><br><p><b style="font-size: 20px; color: red;"><center>Tuấn Uyên Quỳnh</center></b></p><br><p style="text-align:center;">77 Nguyễn Huệ, TP. Huế<p>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				
            </div></div>
			
			<div><?php include 'footer.php'; ?></div>
</div>      


</div>      
 
    <script src="js/jquery.js"></script>
 
    <script src="js/bootstrap.min.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 7000 //changes the speed
    })
    </script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=588246501322788";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
$(document).ready(function(){
    
    var getMax = function(){
        return $(document).height() - $(window).height();
    }
    
    var getValue = function(){
        return $(window).scrollTop();
    }
    
    if('max' in document.createElement('progress')){
        // Browser supports progress element
        var progressBar = $('progress');
        
        // Set the Max attr for the first time
        progressBar.attr({ max: getMax() });

        $(document).on('scroll', function(){
            // On scroll only Value attr needs to be calculated
            progressBar.attr({ value: getValue() });
        });
      
        $(window).resize(function(){
            // On resize, both Max/Value attr needs to be calculated
            progressBar.attr({ max: getMax(), value: getValue() });
        });   
    }
    else {
        var progressBar = $('.progress-bar'), 
            max = getMax(), 
            value, width;
        
        var getWidth = function(){
            // Calculate width in percentage
            value = getValue();            
            width = (value/max) * 100;
            width = width + '%';
            return width;
        }
        
        var setWidth = function(){
            progressBar.css({ width: getWidth() });
        }
        
        $(document).on('scroll', setWidth);
        $(window).on('resize', function(){
            // Need to reset the Max attr
            max = getMax();
            setWidth();
        });
    }
});















$(document).ready(function(){
  
  $('#flat').addClass("active");
  $('#progressBar').addClass('flat');
    
  $('#flat').on('click', function(){
    $('#progressBar').removeClass().addClass('flat');
    $('a').removeClass();
    $(this).addClass('active');
    $(this).preventDefault();
  });

  $('#single').on('click', function(){
    $('#progressBar').removeClass().addClass('single');
    $('a').removeClass();    
    $(this).addClass('active');
    $(this).preventDefault();    
  });

  $('#multiple').on('click', function(){
    $('#progressBar').removeClass().addClass('multiple');
    $('a').removeClass();    
    $(this).addClass('active');
    $(this).preventDefault();    
  });

  $('#semantic').on('click', function(){
    $('#progressBar').removeClass().addClass('semantic');
    $('a').removeClass();    
    $(this).addClass('active');
    $(this).preventDefault();
    alert('hello');
  });

  $(document).on('scroll', function(){

      maxAttr = $('#progressBar').attr('max');
      valueAttr = $('#progressBar').attr('value');
      percentage = (valueAttr/maxAttr) * 100;
      
      
  });
  
});
</script>
<script>
$('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
});
</script>

<script>
function myFunction() {
    document.getElementsByClassName("navigation")[0].classList.toggle("responsive");
}
</script>





        
<body>
</body>
</html>