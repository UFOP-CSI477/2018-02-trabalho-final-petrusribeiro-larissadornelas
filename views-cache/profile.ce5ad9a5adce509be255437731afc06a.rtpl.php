<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background:#b9b9b9;margin-bottom: 40px;">
        <h2 class="l-text2 t-center" style="color:#555555;">
            Minha Conta
        </h2>
    </section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30" style="background: #5f6465;">
					<div class="p-r-20 p-r-0-lg">
						<h4 class="m-text26 p-b-36 p-t-15">
							<?php require $this->checkTemplate("profile-menu");?>
						</h4>
						<?php if( $profileMsg != '' ){ ?>
               			 <div class="alert alert-success">
                 	   <?php echo htmlspecialchars( $profileMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>
              			  </div>
              			  <?php } ?>
               			 <?php if( $profileError != '' ){ ?>
               			 <div class="alert alert-danger">
                   			 <?php echo htmlspecialchars( $profileError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
               			 </div>
               			 <?php } ?>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							Dados da Conta
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" id="desperson" name="desperson" placeholder="Nome Completo">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="desemail" name="desemail" placeholder="Email">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text"  id="nrphone" name="nrphone" placeholder="Telefone">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

						<div class="w-size25">
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Salvar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

</html>
