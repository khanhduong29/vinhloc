<main>
	<section class="container cart space-title">
		<h2 class="text-center title-cart mb-5">
			<span class="title-big">Giỏ Hàng</span>
		</h2>
		<div class="cart-table table-responsive">
			<div class="panel-body">
				<!-- <div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Your cart is empty!</strong>
			</div> -->
			</div>
			<table class="table-bordered">
				<thead>
					<tr>
						<th>IMAGE</th>
						<th>PRODUCT NAME</th>
						<th>PRICE</th>
						<th>QUANTINY</th>
						<th>TOTAL</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($listCart as $list) { ?>
					<tr>
						<td class="cart-pic">
							<a href="">
								<img src="<?php echo base_url() ?>Uploads/<?php echo $list['pro_image'] ?>" alt="error">
							</a>
						</td>
						<td class="">
							<a href="">
								<p><?php echo $list['pro_name'] ?></p>
							</a>
						</td>
						<td class="price-root"><?php echo $list['price'] ?></td>
						<td>
							<div class="quantity">
								<div class="pro-qty">
									<input type="number" value="<?php echo $list['quantity'] ?>" min="0" class="qty" id="" placeholder="Quantity">
								</div>
							</div>
						</td>
						<td class="price">100.000 VND</td>
						<td>
							<a href=""><i class="fas fa-times"></i></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="discount-coupon">
					<div class="cart-buttons">
						<a href="product" class="primary-btn continue-shop text-center">Continue shopping</a>
						<a href="#" class="btn-danger text-center clear-cart">Clear cart</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 offset-lg-4">
				<div class="proceed-checkout">
					<ul>
						<li class="subtotal">Số lượng sản phẩm <span class="sumCa">10</span></li>
						<li class="cart-total">Tổng tiền <span class="sumCa">1.000.000 VND</span></li>
					</ul>
					<a href="checkout.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
				</div>
			</div>
		</div>
	</section>
</main>
