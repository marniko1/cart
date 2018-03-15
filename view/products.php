
				<content class="col-6 content">
					<ol class="">
						<?php
						foreach ($this->data['content'] as $value) {
						?>
							<li>
								<div class="row">
									<div class="col-6">
										<h5><?php echo $value['title']; ?></h5>
										<img src="<?php echo $value['image']; ?>">
									</div>
									<div class="col-6">
										<p class="description"><?php echo $value['description']; ?></p>
										<?php if(!isset($this->data['session'])) { ?>
											<form method="post" class="products">
												<span>&dollar;<?php echo $value['price']; ?></span>
												<button class="add_to_cart">Add to cart</button>
												<input type="hidden" name="reserve" value="<?php echo $value['id']; ?>">
											</form>
										<?php 
										}
										if(isset($this->data['session'])) { ?>
											<form method="post" class="products_admin row justify-content-center">
												<button class="remove_product">Remove</button>
												<input type="hidden" name="remove_product" value="<?php echo $value['id']; ?>">
											</form>
											<form method="post" class="products_admin">
												<span>&dollar;<?php echo $value['price']; ?></span>
												<button class="add_to_cart_admin">Add to cart</button>
												<input type="hidden" name="reserve" value="<?php echo $value['id']; ?>">
											</form>
										<?php } ?>
									</div>
								</div>
							</li>
						<?php
						}
						?>
					</ol>
				</content>