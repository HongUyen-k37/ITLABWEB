<!DOCTYPE html>
<html lang="en">

<head>

    <link href="css/full-slider.css" rel="stylesheet">


</head>

<body>

    <header id="myCarousel" class="carousel slide" style="padding-top: 0px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
            	<div class="fill" style="background-image:url('img/sl6.jpg'); opacity: 1; "></div>
            	<div class="carousel-caption">
                    <h2>Khách hàng là <strong style="color: #44c767;">ÔNG CHỦ!</strong></h2>
                    <p style="font-family: open-sans;">Giá cả phù hợp với mọi đối tượng khách hàng!</p>
                    <div>
						<a href="#sanpham" class="myButton" style="color:  white; margin-top: 25px;">Xem ngay</a>
					</div>
                </div>
                
                
               
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/sl5.jpg'); opacity: 1;"></div>
                <div class="carousel-caption">
                    <h2>Đạt tiêu chuẩn quốc tế về <strong style="color: red;">CHẤT LƯỢNG</strong></h2>
                	<div class="tieuchuan">
                   					<img src="img/tieuchuan1.jpg" />
                                    <img src="img/tieuchuan2.jpg" />
                                     <img src="img/tieuchuan3.png" />
                                     <img src="img/tieuchuan4.jpg" />
                    </div>
                </div>
            </div>
            <div class="item">
                 <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/sl4.jpg'); opacity: 1"></div>
                <div class="carousel-caption">
                    <h2>Các <strong style="color: rgb(255, 153, 0);">ĐỐI TÁC</strong> uy tín!</h2>
                    <p></p>
                    <div>
						<a href="#doitac" class="myButton" style="color:  white; margin-top: 25px;">Xem thêm</a>
					</div>
                </div>
                
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 8000 //changes the speed
    })
    </script>

</body>

</html>
