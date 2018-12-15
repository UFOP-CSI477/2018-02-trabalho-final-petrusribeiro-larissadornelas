<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background:#b9b9b9;margin-bottom: 40px;">
        <h2 class="l-text2 t-center" style="color:#555555;">
            Pagamento
        </h2>
    </section>
<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-content-right">
					<form action="/checkout" class="checkout" method="post" name="checkout">
						<div id="customer_details" class="col2-set">
							<div class="row">
								<div class="col-md-12">

									<?php if( $error != '' ){ ?>

									<div class="alert alert-danger">
										<?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

									</div>
									<?php } ?>


									<div class="woocommerce-billing-fields">
										<h3 id="order_review_heading" style="margin-top:30px; margin-bottom: 25px;">Endereço de entrega</h3>
										<div id="billing_address_1_field" class="form-group">
											<label class="" for="billing_address_1">Cep <abbr title="required" class="required">*</abbr>
											</label>
											<div class="form-row"> 
											<input type="text" value="<?php echo htmlspecialchars( $cart["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="00000-000" id="billing_address_1" name="zipcode" class="form-control" style="border: solid 1px #9a9898 !important; width: 20%;">
										</div>
										</div>
										<div id="billing_address_1_field" class="form-group form-row-wide address-field validate-required">
											<label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
											</label>
											<input  class="form-control" style="border: solid 1px #9a9898 !important;    width: 70%;" type="text" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Logradouro, número e bairro" id="billing_address_1" name="desaddress" >
										</div>
										<div id="billing_address_2_field" class="form-group form-row-wide address-field">
												<label class="" for="billing_address_1">Complemento</label>
											</label>
											<input  class="form-control" style="border: solid 1px #9a9898 !important;    width: 70%;" type="text" value="<?php echo htmlspecialchars( $address["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Complemento (opcional)" id="billing_address_2" name="descomplement">
                                        </div>
                                        <div id="billing_district_field" class="form-group form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_district">Bairro <abbr title="required" class="required">*</abbr>
											</label>
											<input  style="border: solid 1px #9a9898 !important; width: 70%;" type="text" value="<?php echo htmlspecialchars( $address["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Bairro" id="billing_district" name="desdistrict" class="form-control">
										</div>
                                        <div id="billing_district_field" class="form-group form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_city">Cidade <abbr title="required" class="required">*</abbr>
											</label>
											<input  style="border: solid 1px #9a9898 !important; width: 70%;" type="text" value="<?php echo htmlspecialchars( $address["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Cidade" id="billing_district" name="descity" class="form-control">
										</div>										
                                        <div id="billing_district_field" class="form-group form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_state">Estado <abbr title="required" class="required">*</abbr>
											</label>
											<input  style="border: solid 1px #9a9898 !important; width: 70%;" type="text" value="<?php echo htmlspecialchars( $address["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Estado" id="billing_district" name="desstate" class="form-control">
										</div>
                                        <div id="billing_district_field" class="form-group form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
											<label class="" for="billing_country">País <abbr title="required" class="required">*</abbr>
											</label>
											<input  style="border: solid 1px #9a9898 !important; width: 70%;" type="text" value="<?php echo htmlspecialchars( $address["descountry"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="País" id="billing_district" name="descountry" class="form-control">
										</div>																				
										<div class="clear"></div>
										<h3 id="order_review_heading" style="margin-top:60px; margin-bottom: 25px;">Detalhes do Pedido</h3>
										<div id="order_review" style="position: relative;">
											<table class="table">
												<thead>
													<tr>
														<th class="product-name">Produto</th>
														<th class="product-total">Total</th>
													</tr>
												</thead>
												<tbody>

													<?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

													<tr class="cart_item">
														<td class="product-name">
															<?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?> x<strong class="product-quantity"><?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong> 
														</td>
														<td class="product-total">
															<span class="amount">R$<?php echo htmlspecialchars( $value1["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
														</td>
                                                    </tr>
                                                    <?php } ?>


                                                    
												</tbody>
												<tfoot>
													<tr class="cart-subtotal">
														<th>Subtotal</th>
														<td><span class="amount">R$<?php echo htmlspecialchars( $cart["vlsubtotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
														</td>
													</tr>
													<tr class="shipping">
														<th>Frete</th>
														<td>
															R$0.00
															<input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
														</td>
													</tr>
													<tr class="order-total">
														<th>Total do Pedido</th>
														<td><strong><span class="amount">R$<?php echo htmlspecialchars( $cart["vlsubtotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span></strong> </td>
													</tr>
												</tfoot>
											</table>
											<div id="payment">
												<div class="form-row place-order">
													<input type="submit" data-value="Place order" value="Continuar" id="place_order" name="woocommerce_checkout_place_order" class="btn btn-dark">
												</div>
												<div style="margin-bottom: 60px;" class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

