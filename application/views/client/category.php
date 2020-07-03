		<main> 
			<section class="hot-pro space-title">
				<div class="container">
					<h2 class="text-center">
						<span class="title-big">Đèn mâm ốp trần</span>
					</h2>
		            <section class="show-pro pt-lg-5 pt-4">
						<div class="row">
						<?php foreach($product as $pro){ ?>
							<div class="col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="pt-4">
		                            <div class="thumbnail pb-4">
		                            	<a href="" class="hv-scale p-3 b-ra-30">
		                            		<img src="<?php echo base_url() ?>Uploads/<?php echo $pro['image'] ?>" class="img-fluid"  alt="a" />
		                            	</a>
		                            	<div class="desc text-center">
		                            		<h3>
		                            			<a href="" title="" class="c-fff text-uppercase f-16"><?php echo $pro['name'] ?></a>
		                            		</h3>
		                            		<span class="c-feb f-16 text-uppercase"><?php echo $pro['price'] ?></span>
		                            	</div>
		                            </div>
			                    </div>
							</div>
						<?php } ?>
						</div>
		            	<div class="pagination">
		            		<strong>1</strong>
		            		<a href="">2</a>
		            		<a href="">3</a>
		            		<a href=""><i class="fas fa-angle-right"></i></a>
		            		<a href=""><i class="fas fa-angle-double-right"></i></a>
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
