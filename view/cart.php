
				<?php
				if(!isset($this->data['cart_session'])) {
				?>
					<content class="col-12 row justify-content-center content">
						<p class="col-6 d-flex justify-content-center">Your cart is empty.</p>
				<?php
				} else {
				?>
					<content class="col-12 row justify-content-end content cart">
						<form method="post" class="cart">
							<button>Clear cart</button>
							<input type="hidden" name="clear_session">
						</form>
						<table class="table table-bordered table-sm">
							<thead class="thead-light">
								<tr>
									<th scope="col">Redni broj</th>
									<th scope="col">Naziv</th>
									<th scope="col">Opis</th>
									<th scope="col">Slika</th>
									<th scope="col">Cena</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($this->data['products'] as $key => $product) {
								?>
									<tr>
										<th scope="row">
											<span><?php echo $key+1; ?></span>
											<form method="post">
												<button>Remove</button>
												<input type="hidden" name="clear_single_session" value="<?php echo $key; ?>">
											</form>
										</th>
										<td><span><?php echo $product['title']; ?></span></td>
										<td><p><?php echo $product['description']; ?></p></td>
										<td><img src="<?php echo $product['image']; ?>"></td>
										<td><span>&dollar;<?php echo $product['price']; ?></span></td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					<?php
						echo '<span class="total_info">Total items: '.$this->data['total_items'].' Total price: &dollar;'.$this->data['total_price'].'</span>';
					}
					?>
				</content>