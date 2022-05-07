<?php
	include 'header.php';
?>

		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<!-- MAIN-SLIDER-AREA START -->
					<div class="main-slider-area">
						<!-- SLIDER-AREA START -->
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="slider-area">
								<div id="wrapper">
									<div class="slider-wrapper">
										<div id="mainSlider" class="nivoSlider">
											<img src="https://image-us.eva.vn/upload/1-2020/images/2020-03-05/1583399959-31e56afbfb377da742a1aeb09bea5551.jpg " style="width: 870px; height: 432px; " alt="main slider" title="#htmlcaption"/>
											<img src="https://viettinlaw.com/wp-content/uploads/2020/05/Ki%E1%BB%83m-nghi%E1%BB%87m-rau-c%E1%BB%A7-qu%E1%BA%A3-2.png" style="width: 870px; height: 432px; " alt="main slider" title="#htmlcaption2"/>
										
										</div>
										<div id="htmlcaption" class="nivo-html-caption slider-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text1">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown">CÔNG TY THỰC PHẨM VSHIP</h2>
												<p class="animated bounceInUp" style="font-weight: bold;color: #990;"></p>
													<a class="wow zoomInDown" data-wow-duration="0.5s" data-wow-delay="1s" href="shop-gird.php?maLoai=23">XEM NGAY <i class="fa fa-caret-right"></i></a>						
												</div>
											</div>
										</div>
										<div id="htmlcaption2" class="nivo-html-caption slider-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text2">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown">NÔNG SẢN VIETGAB CHO GIA ĐÌNH BẠN</h2>
													<p class="animated bounceInUp" style="font-weight: bold;color: #fff;"></p>
													<a class="wow zoomInDown" data-wow-duration="0.5s" data-wow-delay="1s" href="shop-gird.php?maLoai=23">XEM NGAY <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>							
						</div>
						<!-- SLIDER-AREA END -->
						<!-- SLIDER-RIGHT START -->
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="slider-right zoom-img m-top">
								<a href="single-product.php?maSanPham=27"><img class="img-responsive" src="https://thumbs.dreamstime.com/z/fruits-vegetables-collection-food-background-portrait-format-apples-oranges-tomatoes-fresh-fruit-vegetable-fruits-158349115.jpg" alt="sidebar left" /></a>
							</div>
						</div>
						<!-- SLIDER-RIGHT END -->
					</div>
					<!-- MAIN-SLIDER-AREA END -->
				</div>
				<!-- TOW-COLUMN-PRODUCT START -->
				<div class="row tow-column-product">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- NEW-PRODUCT-AREA START -->
						<div class="new-product-area">
							<div class="left-title-area">
								<h2 class="left-title">Sản phẩm mới</h2>
							</div>						
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<!-- NEW-PRO-CAROUSEL START -->
										<div class="new-pro-carousel">
											<?php 
												$prodList = $prod->show_productLimit14New();
												if ($prodList){
													while ($resultProd = $prodList->fetch_assoc()){
														if ($resultProd['trangThaiSanPham'] == '1' ){

											?>
											<!-- NEW-PRODUCT-SINGLE-ITEM START -->
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>"><img src="<?php echo $resultProd['hinhAnhSanPham']; ?>" alt="product-image" width="800px" /></a>
															<a href="#" class="new-mark-box">mới</a>
															<!--div class="overlay-content">
																<ul>
																	<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div-->
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>2 Đánh giá</span>
																</div>
															</div>
															<div>
															<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>" ><span style="text-transform: uppercase;"><?php echo $resultProd['tenSanPham']; ?></span></a>
															</div>
															<div class="price-box" >
																<span class="price"><?php echo ($resultProd['giaSanPham']); ?> VNĐ</span>
															</div>
														</div>
													</div>
												</div>
											</div>

											<?php 
												}
											}
										}
										?>
											<!-- NEW-PRODUCT-SINGLE-ITEM END -->
										</div>									
										
									</div>
								</div>
							</div>
						</div>
						<!-- NEW-PRODUCT-AREA END -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- SALE-PRODUCTS START -->
						<div class="Sale-Products">
							<div class="left-title-area">
								<h2 class="left-title">SẢN PHẨM KHUYẾN MÃI</h2>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<!-- SALE-CAROUSEL START -->
										<div class="sale-carousel">
											<!-- SALE-PRODUCTS-SINGLE-ITEM START -->
												<?php 
														$querySPLimit8 = mysqli_query($conn, "SELECT * FROM tbl_sanpham LIMIT 8");
													
														while ($resultKM = mysqli_fetch_array($querySPLimit8)) {
														
											?>
											<div class="item">
											
												<div class="new-product">
													
													<div class="single-product-item">
														<div class="product-image">
															<a href="single-product.php?maSanPham=<?php echo $resultKM['maSanPham'] ?>"><img src="<?php echo $resultKM['hinhAnhSanPham'] ?>" alt="product-image" /></a>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>2 Đánh giá</span>
																</div>
															</div>
															<a href="single-product.php?maSanPham=<?php echo $resultKM['maSanPham'] ?>"><?php echo $resultKM['tenSanPham'] ?></a>
															<div class="price-box">
																<span class="price"><?php echo ($resultKM['giaSanPham']) ?> VNĐ</span>
																
															</div>
														</div>
													</div>
													
												</div>
													
											</div>
											<!-- SALE-PRODUCTS-SINGLE-ITEM END -->
													<?php 
														}
												?>						
										</div>
										
										<!-- SALE-CAROUSEL END -->
									</div>
								</div>
							</div>
						</div>
						<!-- SALE-PRODUCTS END -->
					</div>
				</div>
				<!-- TOW-COLUMN-PRODUCT END -->
				<div class="row">
					<!-- ADD-TWO-BY-ONE-COLUMN START -->
					<div class="add-two-by-one-column">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="tow-column-add zoom-img">
								<a href="shop-gird.php?maLoai=20"><img src="https://frutamallorca.es/c/16-category_default/boxes.jpg" alt="shope-add" /></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="one-column-add zoom-img">
								<a href="shop-gird.php?maLoai=16"><img src="http://baokhanhhoa.vn/dataimages/201205/original/images692962_images683242_rau_cu.jpg" alt="shope-add" /></a>
							</div>								
						</div>
					</div>
					<!-- ADD-TWO-BY-ONE-COLUMN END -->
				</div>
			
				
				<div class="row">	
					<!-- BESTSELLER-PRODUCTS-AREA START -->
					<div class="bestseller-products-area">
						<div class="center-title-area">
							<h2 class="center-title">SẢN PHẨM NỔI BẬT</h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- BESTSELLER-CAROUSEL START -->
								<div class="bestseller-carousel">
									<!-- BESTSELLER-SINGLE-ITEM START -->
									<?php 
										$prodList = $prod->show_productLimit14Asc();
											if ($prodList){
												while ($resultProd = $prodList->fetch_assoc()){
													if ($resultProd['trangThaiSanPham'] == '1' ){

									?>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>"><img src="<?php echo $resultProd['hinhAnhSanPham']; ?>" alt="product-image" /></a>
												<!-- <a href="#" class="new-mark-box" style="background-color: rgb(66, 139, 202);">-30%</a> -->
												<!--div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div-->
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="review-box">
														<span>1 Đánh giá</span>
													</div>
												</div>
												<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>"><span style="text-transform: uppercase;"><?php echo $resultProd['tenSanPham']; ?></span></a>
												<div class="price-box">
													<span class="price"><?php echo ($resultProd['giaSanPham']); ?> VNĐ</span>
														<!-- <span class="old-price">1,400,000 VND</span> -->
												</div>
											</div>
										</div>							
									</div>
									<?php
										}}}
									?>
									<!-- BESTSELLER-SINGLE-ITEM END -->
								</div>	
								<!-- BESTSELLER-CAROUSEL END -->	
							</div>
						</div>								
					</div>
					<!-- BESTSELLER-PRODUCTS-AREA END -->
				</div>
				<!-- Adidas product start -->
				<div class="row">	

					<!-- BESTSELLER-PRODUCTS-AREA START -->
					<div class="bestseller-products-area">
						<div class="center-title-area">	
							<h2 class="center-title">CỦ QUẢ</h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- BESTSELLER-CAROUSEL START -->
								<div class="bestseller-carousel">
									<!-- BESTSELLER-SINGLE-ITEM START -->
									<?php
										$prodList = $prod->show_product();
											if ($prodList){
												while ($resultProd = $prodList->fetch_assoc()){
													if (($resultProd['trangThaiSanPham'] == '1' && $resultProd['maLoai'] == '16')  ){

									?>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>"><img src="<?php echo $resultProd['hinhAnhSanPham']; ?>" alt="product-image" /></a>

												<!-- <a href="#" class="new-mark-box" style="background-color: rgb(66, 139, 202);">-30%</a> -->
												<!--div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div-->
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="review-box">
														<span>1 Đánh giá</span>
													</div>
												</div>
												<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>"><span style="text-transform: uppercase;"><?php echo $resultProd['tenSanPham']; ?></span></a>
												<div class="price-box">
													<span class="price"><?php echo ($resultProd['giaSanPham']); ?> VNĐ</span>
														<!-- <span class="old-price">1,400,000 VND</span> -->
												</div>
											</div>
										</div>							
									</div>
									<?php
										}}
									}
									?>
									<!-- BESTSELLER-SINGLE-ITEM END -->
								</div>	
								<!-- BESTSELLER-CAROUSEL END -->	
							</div>
						</div>								
					</div>
					<!-- BESTSELLER-PRODUCTS-AREA END -->
					<!-- Adidas product end -->
				</div>

				<!-- Adidas product start -->
				<div class="row">	
					<!-- BESTSELLER-PRODUCTS-AREA START -->
					<div class="bestseller-products-area">
						<div class="center-title-area">
							<h2 class="center-title">THỊT GÀ</h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- BESTSELLER-CAROUSEL START -->
								<div class="bestseller-carousel">
									<!-- BESTSELLER-SINGLE-ITEM START -->
									<?php
										$prodList = $prod->show_product();
											if ($prodList){
												while ($resultProd = $prodList->fetch_assoc()){
													if (($resultProd['trangThaiSanPham'] == '1') && ($resultProd['maLoai'] == '26') ){

									?>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>"><img src="<?php echo $resultProd['hinhAnhSanPham']; ?>" alt="product-image" /></a>
												<!-- <a href="#" class="new-mark-box" style="background-color: rgb(66, 139, 202);">-30%</a> -->
												<!--div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div-->
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="review-box">
														<span>1 Đánh giá</span>
													</div>
												</div>
												<a href="single-product.php?maSanPham=<?php echo $resultProd['maSanPham']; ?>"><span style="text-transform: uppercase;"><?php echo $resultProd['tenSanPham']; ?></span></a>
												<div class="price-box">
													<span class="price"><?php echo ($resultProd['giaSanPham']); ?> VNĐ</span>
														<!-- <span class="old-price">1,400,000 VND</span> -->
												</div>
											</div>
										</div>							
									</div>
									<?php
										}}}
									?>
									<!-- BESTSELLER-SINGLE-ITEM END -->
								</div>	
								<!-- BESTSELLER-CAROUSEL END -->	
							</div>
						</div>								
					</div>
					<!-- BESTSELLER-PRODUCTS-AREA END -->
					<!-- Adidas product end -->



				<div class="row">
					<!-- IMAGE-ADD-AREA START -->
					<div class="image-add-area">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- ONEHALF-ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="#"><img src="img/product/one-helf11.jpg" alt="shope-add" /></a>
							</div>
							<!-- ONEHALF-ADD END -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- ONEHALF-ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="#"><img src="img/product/one-helf22.jpg" alt="shope-add" /></a>
							</div>
							<!-- ONEHALF-ADD END -->
						</div>						
					</div>
					<!-- IMAGE-ADD-AREA END -->
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
		<!-- LATEST-NEWS-AREA START -->
							</div>
						</div>
					</div>
					<!-- BRAND-CLIENT-ROW END -->
				</div>
			</div>
		</section>
		<!-- BRAND-CLIENT-AREA END -->
<?php
	include 'footer.php';
?>

		<!-- JS 
		===============================================-->
		<!-- jquery js -->
		<script src="js/vendor/jquery-1.11.3.min.js"></script>
		
		<!-- fancybox js -->
        <script src="js/jquery.fancybox.js"></script>
		
		<!-- bxslider js -->
        <script src="js/jquery.bxslider.min.js"></script>
		
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		
		<!-- owl carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		
		<!-- nivo slider js -->
        <script src="js/jquery.nivo.slider.js"></script>
		
		<!-- jqueryui js -->
        <script src="js/jqueryui.js"></script>
		
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		
		<!-- wow js -->
        <script src="js/wow.js"></script>		
		<script>
			new WOW().init();
		</script>

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>	
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 8,
				scrollwheel: false,
				center: new google.maps.LatLng(35.149868, -90.046678)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		</script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>


</html>