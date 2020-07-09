		<main> 
			<section class="contain-pro-detail">
				<div class="container">
					<h2 class="text-center">
						<span class="title-big c-fff">Sản phẩm</span>
					</h2>
					<form action="" method="get" accept-charset="utf-8" class="filter-pro d-lg-flex d-md-flex justify-content-center mt-5">
						<select class="js-example-basic-single m-2">
							<?php foreach($category as $value){ ?>
						  	<option value="AL"><?php echo $value['name']  ?></option>
						  <?php } ?>
						</select>
						<select class="js-example-basic-single m-2">
							<?php foreach($category as $value){ ?>
						  	<option value="AL"><?php echo $value['name'] ?></option>
						  	 <?php } ?>
						</select>
						<select class="js-example-basic-single m-2">
							<?php foreach($category as $value){ ?>
						  	<option value="AL"><?php echo $value['name'] ?></option>
						  	<?php } ?>
						</select>
					</form>
		            <section class="show-pro pt-lg-5 pt-4">
						<div class="row">
						<?php foreach($list_data as $value){ ?>
							<div class="col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="pt-4">
		                            <div class="thumbnail pb-4">
		                            	<a href="" class="hv-scale p-3 b-ra-30">
		                            	<a href="product_detail" class="hv-scale p-3 b-ra-30">
		                            		<img src="<?php echo base_url() ?>Uploads/<?php echo $value['image']?>" class="img-fluid"  alt="a" />
		                            	</a>
		                            	<div class="desc text-center">
		                            		<h3>
		                            			<a href="product_detail" title="" class="c-fff text-uppercase f-16"><?php echo $value['name'] ?></a>
		                            		</h3>
											<span class="c-feb f-16 text-uppercase"><?php echo $value['price'] ?> $</span>
											<form action="" method="post">
												<input type="hidden" name="user_id" value="<?php if($this->session->has_userdata('login')) echo $this->session->userdata('login')->id ?>">
												<input type="hidden" name="pro_name" value="<?php echo $value['name'] ?>">
												<input type="hidden" name="pro_image" value="<?php echo $value['image'] ?>">
												<input type="hidden" name="pro_price" value="<?php echo $value['price'] ?>">
												<button type="submit" name="add-Cart" class="add-cart"><img src="<?php echo public_url() ?>images/icon/ic-cart-feb.png" alt=""></button>
											</form>
		                            	</div>
		                            </div>
			                    </div>
							</div>
						<?php } ?>
						</div>
		            	<div class="pagination">
		            		<?php echo $this->pagination->create_links();?>
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
                            	<a href="product_detail" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/8b1b1592df0d3953601c.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="product_detail" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            		</h3>
                            		<span class="c-feb f-16 text-uppercase">Liên hệ</span>
                            	</div>
                            </div>
	                    </div>
	                    <div class="pt-2">
                            <div class="thumbnail pb-4">
                            	<a href="product_detail" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/9717852538bddee387ac.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="product_detail" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            		</h3>
                            		<span class="c-feb f-16 text-uppercase">Liên hệ</span>
                            	</div>
                            </div>
	                    </div>
	                    <div class="pt-2">
                            <div class="thumbnail pb-4">
                            	<a href="product_detail" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/bc7a454119fdffa3a6ec.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="product_detail" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
                            		</h3>
                            		<span class="c-feb f-16 text-uppercase">Liên hệ</span>
                            	</div>
                            </div>
	                    </div>
	                    <div class="pt-2">
                            <div class="thumbnail pb-4">
                            	<a href="product_detail" class="hv-scale p-3 b-ra-30">
                            		<img src="<?php echo public_url() ?>images/product/feb2ffd14249a417fd581.jpg" class="img-fluid"  alt="a" />
                            	</a>
                            	<div class="desc text-center">
                            		<h3>
                            			<a href="product_detail" title="" class="c-fff text-uppercase f-16">Đèn chùm pha lê</a>
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
