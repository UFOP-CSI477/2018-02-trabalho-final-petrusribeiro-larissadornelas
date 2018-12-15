<?php if(!class_exists('Rain\Tpl')){exit;}?>

    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background:#b9b9b9;margin-bottom: 40px;">
        <h2 class="l-text2 t-center" style="color:#555555;">
            Autenticação
        </h2>
    </section>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-6">
                <form action="/login" method="post">
                    <h2 class="text-center" style="margin-bottom: 50px;">Acessar</h2>
                    <div class="form-group">
                        <label for="login">E-mail <span class="required">*</span>
                        </label>
                        <input style="border: 1px solid #9a9898 !important;" class="form-control" type="text" id="login" name="login">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha <span class="required">*</span>
                        </label>
                        <input  style="border: 1px solid #9a9898 !important;"class="form-control" type="password" id="senha" name="password" >
                    </div>
                    <div class="clear"></div>
                    <div class="form-row">
                        <input class="btn btn-dark mb-2" type="submit" value="Login" class="button">
                    </div>
                    <div class="form-row">
                    <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Manter conectado </label>
                    </div>
                    <p class="lost_password">
                        <a href="/forgot">Esqueceu a senha?</a>
                    </p>

                    <div class="clear"></div>
                </form>   
                 <?php if( $error != '' ){ ?>

                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>                 
            </div>
            <div class="col-md-6">
                
                <?php if( $errorRegister != '' ){ ?>

                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $errorRegister, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>


                <form  action="/register" method="post">
                    <h2 class="text-center" style="margin-bottom: 50px;">Criar conta</h2>
                    <div class="form-group">
                        <div class="form-row">
                        <label for="nome">Nome Completo <span class="required">*</span>
                        </label>
                        <input style="border: 1px solid #9a9898 !important;"class="form-control type="text" id="nome" name="name" class="input-text" value="<?php echo htmlspecialchars( $registerValues["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div>
                        <label for="email">E-mail <span class="required">*</span>
                        </label>
                        <input style="border: 1px solid #9a9898 !important;" class="form-control" type="email" id="email" name="email" class="input-text" value="<?php echo htmlspecialchars( $registerValues["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </p>
                    <div class="form-group">
                        <label for="phone">Telefone
                        </label>
                        <input style="border: 1px solid #9a9898 !important;" class="form-control" type="text" id="phone" name="phone" class="input-text" value="<?php echo htmlspecialchars( $registerValues["phone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha <span class="required">*</span>
                        </label>
                        <input style="border: 1px solid #9a9898 !important;" class="form-control" type="password" id="senha" name="password" class="input-text">
                    </div>
                    <div class="form-row">
                        <input type="submit" value="Criar Conta" name="login" class="btn btn-dark mb-2">
                    </div>

                </form>               
            </div>
        </div>
    </div>
</div>