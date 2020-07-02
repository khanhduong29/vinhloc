		<main> 
			<section class="content-contact pb-5 space-title">
				<div class="container">
					<h2 class="text-center">
						<span class="title-big">Đăng ký</span>
					</h2>
					<section class="s-content">
						<div class="row">
							<div class="col-md-6 col-lg-6 pt-lg-5 pt-4">
								<form action="" method="POST" role="form">
									<div class="row border-2 m-0 pt-5 pb-5">
										<div class="col-12 form-group">
											<label for="" >Họ và tên</label>
											<input type="text" name="name" class="form-control" value="<?php echo set_value('name') ?>"  id="" placeholder="Họ và tên">
											<span name="name_error" ><?php echo form_error('name') ?></span>
										</div>
										<div class="col-12 form-group">
											<label for="" >Email</label>
											<input type="email" name="email" class="form-control" value="<?php echo set_value('email') ?>" id="" placeholder="Email">
											<span name="name_error" ><?php echo form_error('email') ?></span>
										</div>
										<div class="col-12 form-group">
											<label for="" >Số điện thoại</label>
											<input type="text" name="phone" class="form-control" value="<?php echo set_value('phone') ?>" id="" placeholder="Số điện thoại">
											<span name="name_error" ><?php echo form_error('phone') ?></span>
										</div>
										<div class="col-12  form-group">
											<label for="">Mật khẩu	</label>
											<input type="password" name="password" class="form-control" id="" placeholder="Password">
											<span name="name_error" ><?php echo form_error('password') ?></span>
										</div>
										<div class="col-12  form-group">
											<label for="">Nhập lại mật khẩu	</label>
											<input type="password" name="confirm_password" class="form-control" id="" placeholder="Confirm password">
											<span name="name_error" ><?php echo form_error('confirm_password') ?></span>
										</div>

										<div class="col-12  form-group">
											<button type="submit" name="submit" class="btn btn-lg btn-primary btn-lg-feb">Đăng ký </button>
										</div>
									</div>
								</form>
							</div>
							<div class="d-none d-md-block col-md-6 col-lg-6 pt-lg-5 pt-4">
								<div class="border-2">
									<img src="<?php echo public_url() ?>images/den-nom-2.jpg"  alt="error" />
								</div>
							</div>
						</div>
					</section>
				</div>
			</section>
		</main>
