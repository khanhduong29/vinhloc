<main> 
	<section class="content-contact pb-5 space-title">
		<div class="container">
			<h2 class="text-center">
				<span class="title-big">Đăng nhập</span>
			</h2>
			<section class="s-content">
				<div class="row">
					<div class="d-none d-md-block col-md-6 col-lg-6 pt-lg-5 pt-4">
						<div class="border-2">
							<img src="<?php echo public_url() ?>images/img-ctnw.png"  alt="error" />
						</div>
					</div>
					<div class="col-md-6 col-lg-6 pt-lg-5 pt-4">
						<form action="<?php echo base_url('login') ?>" method="POST" role="form">
							<div class="row border-2 m-0 pt-5 pb-5">
								<div class="col-12 form-group">
									<label for="" >Email</label>
									<input type="email" name="email" class="form-control" id="" placeholder="Email">
									<span class="error_message"><?php echo form_error('email'); ?></span>
								</div>
								<div class="col-12  form-group">
									<label for="">Mật khẩu	</label>
									<input type="password" name="password" class="form-control" id="" placeholder="Password">
									<span class="error_message"><?php echo form_error('email'); ?></span>
								</div>
								<div class="col-12  form-group">
									<button type="submit" name="submit" class="btn btn-lg btn-primary btn-lg-feb">Đăng nhập</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</div>
	</section>
</main>
