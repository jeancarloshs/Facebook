<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Facebook - entre ou cadastre-se</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200&display=swap" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div><!--logo-->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone</p>
                    <input type="email" require />
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                    <input type="password" require />
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar" />
                </div><!--form-element-->
            </form><!--form-login-->
        <div class="clear"></div><!--clear-->       
        </div><!--center-->
    </header>
    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="../Facebook/images/world_conected.png" />
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <= 31; $i++){                                
                                ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php  } ?>
                        </select>
                        <select name="nasacimento-mes" class="nascimento">  
                            <option value="0">Janeiro</option>
                            <option value="0">Fevereiro</option>
                            <option value="0">Março</option>
                            <option value="0">Abril</option>
                            <option value="0">Maio</option>
                            <option value="0">Junho</option>
                            <option value="0">Julho</option>
                            <option value="0">Agosto</option>
                            <option value="0">Setembro</option>
                            <option value="0">Outubro</option>
                            <option value="0">Novembro</option>
                            <option value="0">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <?php
                                for($i = 1900; $i <= 2021; $i++){ 
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php  } ?>
                        </select>
                        <div class="clear"></div><!--clear-->
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                       </div><!--radio-->
                       <div class="input-radio">
                           <input type="radio" name="sexo" value="feminino">
                           <h2>Feminino</h2>
                       </div><!--radio-->
                       <div class="clear"></div><!--clear-->
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!">
                    </div><!--w100-->

                <div class="clear"></div><!--clear-->
                </form><!--criar-conta-->

            </div><!--abrir-conta-->

            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
        </div><!--center-->

        <div style="border:0;padding-top:20px;" class="center">
        <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>            
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
        </div>
    </section><!--linguas-->

    </body>
</html>