<?php if(!class_exists('Rain\Tpl')){exit;}?>


	<!-- Title Page -->
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background:#b9b9b9;margin-bottom: 40px;">
		<h2 class="l-text2 t-center" style="color:#555555;">
			<?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

		</h2>
	</section>

                    <div class="container">
					<div class="row">
                         <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							
							<div class="block2">
                               
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img style="max-width: 70%; "src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add"><button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												comprar
											</button></a>
										</div>
									</div>
								</div>
								<div class="block2-txt p-t-20">
									<a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

									</a>

									<span class="block2-price m-text6 p-r-5">
										R$<?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

									</span>
								</div>
                                
							</div>
							
						</div>
                        <?php } ?>

					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>

						<a href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="item-pagination flex-c-m trans-0-4"><?php echo htmlspecialchars( $value1["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
						<?php } ?>

				</div>
			</div>
		</div>
	</section>

</div>
	