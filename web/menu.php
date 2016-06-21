<?php require_once('Connections/conn.php'); ?>

          <?php echo'<div class="menuphai" style="z-index: 100; margin-top: 20px;">
				<div class="title-left">Gạch</div>
				<div class="menu-content-1">
					<div class="title-content-1">
						<h1> gạch nhập </h1>
					</div>
					<div id="menu-left">
						<ul>'; ?>
						
							<?php 
								mysql_select_db($database_conn, $conn);
								mysql_set_charset('utf8',$conn);
								$list= "SELECT * FROM danhmuc";
								$result = mysql_query($list) or die($list);
								$row=mysql_fetch_assoc($result);
								do
								{	
								
								?>
									<?php
									echo
									'<li> 
										<a href="product.php?id=';?><?php echo $row['iddanhmuc'];?> <?php echo '">';?><?php echo $row['name']; ?><?php echo'</a>
										<ul class="sub-menu">
										<li> <a href="?danhmuccon=1"> Ốp Bộ </a></li>
										<li> <a href="?danhmuccon=2"> Gạch Trang Trí </a></li>
										<li> <a href="?danhmuccon=3"> Gạch Trang Trí </a></li>
									</ul>
									</li>';?>

								<?php }while($row=mysql_fetch_array($result));
							?>	
							 <?php 
										$id=isset($_GET['id'])==true?$_GET['id']:1;
							?>
							<?php echo '</ul>
						
							</div>
				</div><!-- end menu-content -->';?>
				
				<div class="menu-content-2">
					<div class="title-content-1">
						<h1> gạch nội </h1>
					</div>
					<div id="menu-left">
						<ul>
							<li> 
								<a href="#"> Gạch Ốp </a>
								<ul class="sub-menu">
									<li> <a href="#"> 25 x 45cm </a></li>
									<li> <a href="#"> 30 x 45cm </a></li>
									<li> <a href="#"> 30 x 60cm </a></li>
								</ul>
							</li>
							<li> 
								<a href="#"> Gạch Nền </a>
								<ul class="sub-menu">
									<li> <a href="#"> 15 x 60cm </a></li>
									<li> <a href="#"> 40 x 40cm </a></li>
									<li> <a href="#"> 50 x 50cm </a></li>
									<li> <a href="#"> 60 x 60cm </a></li>
								</ul>
							</li>
							<li> 
								<a href="#"> Gạch Lót Sân </a>
								<ul class="sub-menu">
									<li> <a href="#"> Gạch Tàu </a></li>
									<li> <a href="#"> Gạch Sân Caramic </a></li>
									<li> <a href="#"> Gạch Sỏi </a></li>
								</ul>
							</li>
							<li> 
								<a href="#"> Gạch Trang Trí </a>
								<ul class="sub-menu">
									<li> <a href="#"> Đá Trang Trí </a></li>
									<li> <a href="#"> Gốm Trang Trí </a></li>
									<li> <a href="#"> Gốm Nghệ Thuật </a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div> <!-- end menu 2-->
				<div class="title-left">Khác</div>
				<div class="menu-content-3">
						<ul>
							<li> 
								<a href="#"> Sơn </a>
								<ul class="sub-menu">
									<li> <a href="#"> Sơn ICI </a></li>
									<li> <a href="#"> Sơn TOA</a></li>
									<li> <a href="#"> Sơn KOVA </a></li>
								</ul>
							</li>
							<li> 
								<a href="#"> Ngói </a>
								<ul class="sub-menu">
									<li> <a href="#"> Ngói Mỹ Xuân</a></li>
									<li> <a href="#"> Ngói Đồng Nai</a></li>
								</ul>
							</li>
							<li> 
								<a href="#"> Vật Liệu Thô </a>
								<ul class="sub-menu">
									<li> <a href="#"> Cát</a></li>
									<li> <a href="#"> Đá-Xi Măng </a></li>
									<li> <a href="#"> Sắt Thép </a></li>
								</ul>
							</li>
							<li> 
								<a href="#"> Thiết Bị Điện </a>
								<ul class="sub-menu">
									<li> <a href="#"> Phụ Kiện Điện </a></li>
									<li> <a href="#"> Thiết Bị Điện Gia Dụng </a></li>
									<li> <a href="#"> Thiết Bị Điện </a></li>
								</ul>
							</li>
						</ul>
					
				</div><!-- end menu-content-3 -->
			</div><!-- end menuphai -->
			
             
  