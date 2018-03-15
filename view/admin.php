				<content class="content col-12">
					<?php if(!isset($this->data['session'])) { ?>
					<form action="" method="post" class="justify-content-center row">
						<fieldset class="form-group row col-5">
							<legend>Login</legend>
							<div class="form-group row">
								<label for="username" class="col-2 col-form-label">Username:</label>
								<div class="col-10">
									<input type="text" name="username" id="username" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="password" class="col-2 col-form-label">Password:</label>
								<div class="col-10">
									<input type="password" name="password" id="password" class="form-control">
								</div>
							</div>
							<div>
								<input type="submit" name="login" value="Login" class="btn btn-primary col-3">
							</div>
							<?php
							if (isset($this->data['message'])) {
								echo $this->data['message'];
							}
							?>
						</fieldset>
					</form>
					<?php
					} else {
					?>
					<div class="row">
						<nav class="navbar col-12 row">
							<ul class="nav col-12 justify-content-center">
								<li class="nav-item"><a class="nav-link" href="<?php echo INCL_PATH; ?>products/index">All Products List/Remove Products</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo INCL_PATH; ?>admin/index">Upload New Product</a></li>
							</ul>
						</nav>
					</div>
					<form action="" method="post" class="justify-content-center row">
						<fieldset class="form-group row col-5">
							<legend>Upload product</legend>
							<div class="form-group row">
								<label for="title" class="col-2 col-form-label">Title:</label>
								<div class="col-10">
									<input type="text" name="title" id="title" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="image-link" class="col-2 col-form-label">Image(url):</label>
								<div class="col-10">
									<input type="text" name="image-link" id="image-link" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="price" class="col-2 col-form-label">Price:</label>
								<div class="col-10">
									<input type="text" name="price" id="price" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="description" class="col-2 col-form-label">Description:</label>
							</div>
							<div class="form-group row">
								<textarea name="description" id="description" class="form-control"></textarea>
							</div>
							<div class="form-group row">
								<input type="submit" name="upload" value="Upload" class="btn btn-primary col-3">
								<div class="col-1"></div>
								<input type="reset" value="Reset" class="btn btn-primary col-3">
							</div>
							<?php
							if (isset($this->data['message'])) {
								echo $this->data['message'];
							}
							?>
						</fieldset>
					</form>
					<?php } ?>					
				</content>