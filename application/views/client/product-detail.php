		<main> 
			<section class="contain-pro-detail">
				<div class="container">
					<h2 class="text-center">
						<span class="title-big c-fff">Chi tiết sản phẩm</span>
					</h2>
		            <section class="pro-detail pt-4">
		            	<div class="row">
		            		<?php foreach($list_data as $value){ ?>
		            		<div class="col-12 col-sm-12 col-md-6 col-lg-6"> 
		            			<div class="border-1 mt-2 mb-4">
		            				
		            				<a href="" title="" class="img-detail">
		            					<img src="<?php echo base_url() ?>Uploads/<?php echo $value['image']?>" class=""  alt="a" />
		            				</a>
		            				
		            			</div>
		            		</div>
		            		<div class="col-12 col-sm-12 col-md-6 col-lg-6">
		            			<div class="s-content">
		            				<h1 class="c-fff f-24"><?php echo $value['name'] ?></h1>
		            				<span class="c-feb font-weight-bold f-18">
		            					Giá : <?php echo $value['price'] ?>
		            				</span>
		            				<ul> 
		            					<li> 
		            						<span class="tb1">Mã sản phẩm: </span> 
		            						<span class="tb2">MT8137D-10+5+5</span> 
		            					</li> 
		            					<li> 
		            						<span class="tb1">Xuất xứ: </span> 
		            						<span class="tb2">Đài Loan</span> 
		            					</li> 
		            					<li> 
		            						<span class="tb1">Thương hiệu: </span> 
		            						<span class="tb2">Vĩnh Lộc Luxury</span> 
		            					</li> 
		            					<li>
		            					 	<span class="tb1">Chất liệu : </span> 
		            					 	<span class="tb2">Đồng nguyên chất</span> 
		            					 </li> 
		            					 <li> 
		            					 	<span class="tb1">Kích thước : </span> 
		            					 	<span class="tb2">Ø450 mm</span> 
		            					 </li> 
		            					 <li> 
		            					 	<span class="tb1">Công suất : </span> 
		            					 	<span class="tb2">8W</span> 
		            					 </li> 
		            					 <li> 
		            					 	<span class="tb1">Ứng dụng : </span> 
		            					 	<span class="tb2">Trang trí chung cư, biệt thự, penthouse theo phong cách Cổ Điển</span> 
		            					 </li> 
		            					 <li> 
		            					 	<span class="tb1">Bảo hành : </span> 
		            					 	<span class="tb2">24 tháng</span> 
		            					 </li> 
		            				</ul>

		            				<a href="checkout.html" title="" class="btn btn-lg-feb btn-cart">Thêm vào giỏ hàng</a>
		            			</div>
		            		</div>
		            		<?php } ?>
		            	</div>
		            </section>
				</div>
			</section>
			<section class="hot-pro space-title">
				<div class="container">
					<h2 class="text-center">
						<span class="title-big">Sản phẩm tương tự</span>
					</h2>
		            <section class="slick3 pt-lg-5 pt-4 wow fadeInUp">
	                    <div class="pt-2">
                            <div class="thumbnail pb-4">
                            	<a href="" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/8b1b1592df0d3953601c.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            		</h3>
                            		<span class="c-feb f-16 text-uppercase">Liên hệ</span>
                            	</div>
                            </div>
	                    </div>
	                    <div class="pt-2">
                            <div class="thumbnail pb-4">
                            	<a href="" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/9717852538bddee387ac.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            		</h3>
                            		<span class="c-feb f-16 text-uppercase">Liên hệ</span>
                            	</div>
                            </div>
	                    </div>
	                    <div class="pt-2">
                            <div class="thumbnail pb-4">
                            	<a href="" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/bc7a454119fdffa3a6ec.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            		</h3>
                            		<span class="c-feb f-16 text-uppercase">Liên hệ</span>
                            	</div>
                            </div>
	                    </div>
	                    <div class="pt-2">
                            <div class="thumbnail pb-4">
                            	<a href="" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/feb2ffd14249a417fd581.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            		</h3>
                            		<span class="c-feb f-16 text-uppercase">Liên hệ</span>
                            	</div>
                            </div>
	                    </div>
		            </section>
				</div>
			</section>
			<section class="thumbs-cus space-title">
				<div class="container">
					<h2 class="text-center">
						<span class="title-big">Khách hàng tiêu biểu</span>
					</h2>
		            <section class="slick5 pt-lg-5 pt-4 pb-5 wow zoomIn">
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/02fe85320661ff3fa670.jpg" alt="">
	            			</a>
	            		</div>
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/dabaco-logo.jpg" alt="">
	            			</a>
	            		</div>
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/logo-phuthai.jpg" alt="">
	            			</a>
	            		</div>
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/single-logo.png" alt="">
	            			</a>
	            		</div>
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/tai-xuong-1.jpg" alt="">
	            			</a>
	            		</div>
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/tai-xuong.jpg" alt="">
	            			</a>
	            		</div>
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/tai-xuong.png" alt="">
	            			</a>
	            		</div>
	            		<div>
	            			<a href="" title="" class="avt">
	            				<img src="<?php echo public_url() ?>images/thumbs/thong-tu-quy-dinh-ve-cac-bieu-mau-su-dung-de-xu-phat-vi-pham-hanh-chinh-thuoc-tham-quyen-cua-cong-an-nhan-dan-2.png" alt="">
	            			</a>
	            		</div>
		            </section>
				</div>
			</section>
		</main>
