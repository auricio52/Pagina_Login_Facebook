<!doctype html>

<html>
    <head>
        <title>Facebook</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width: device-width, initial-scale=1.0, maximum-scale=1.0'>
        <meta name='description' content='descrição do site'/>
        <meta name='author' content='Aurício'/>
        <meta name='keywords' content='palavras, chave, separadas, por, virgula'/>

        <link rel='stylesheet' type='text/css' href='css/style.css'/>
    </head>

    <body>

        <header>
            <div class="center">
                <div class="logo"><h2>Facebook</h2></div>
                
                <form action="acao" method='POST' class='form-login'>
                    <div class="form-element">
                        <p>E-mail ou telefone:</p>
                        <input type='email' name='email'/>
                    </div>

                    <div class="form-element">
                        <p>Senha:</p>
                        <input type='password' name='password'>
                    </div>

                    <div class="form-element">
                        <input type='submit' name='acao' value='Enviar'>
                    </div>
                </form>

                <div class="clear"></div>
            </div>
        </header>

        <section class="main">
            <div class='center'>
                <div class='img-pessoas'>
                    <img src="images/img-person.jpg">
                </div>

                <div class="abrir-conta">
                    <h2>Abra a sua conta</h2>
                    <h3>É gratuito e sempre será.</h3>
    
                    <form action="acao" class='criar-conta'>
                        <div class="w50">
                            <input type="text" placeholder="Nome" name='nome'>
                        </div>
    
                        <div class="w50">
                            <input type="text" placeholder='Sobrenome' name='sobrenome'>
                        </div>
    
                        <div class="w100">
                            <input type="email" name='email' placeholder="Email">
                        </div>
    
                        <div class="w100">
                            <input type="text" placeholder="Senha">
                        </div>
                        
                        <div class="w100">
                            <h3>Data de nascimento</h3>

                            <select name="nascimento-dia" id="nascimento" class="nascimento">
                                <?php
                                for($i = 1; $i <= 31; $i ++){
                                    ?>
                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                <?php } ?>
                            </select>

                            <select name="nascimento-mes" id="nascimento" class="nascimento">
                                <option value='1'>Janeiro</option>
                                <option value='2'>Fevereiro</option>
                                <option value='3'>Março</option>
                                <option value='4'>Abril</option>
                                <option value='5'>Maio</option>
                                <option value='6'>Junho</option>
                                <option value='7'>Julho</option>
                                <option value='8'>Agosto</option>
                                <option value='9'>Setembro</option>
                                <option value='10'>Outubro</option>
                                <option value='11'>Novembro</option>
                                <option value='12'>Dezembro</option>
                            </select>

                            <select name="nascimento-ano" id="nascimento" class="nascimento">
                                <?php
                                for($i = 1960; $i <= 2020; $i ++){
                                    ?>
                                    <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                <?php } ?>    
                            </select>
                            <div class="clear"></div>    
                        </div>

                        <div class="w100">
                            <div class="input-radio">
                                <input type="radio" value='Masculino' name='sexo'>
                                <p>Masculino</p>
                            </div>

                            <div class="input-radio">
                                <input type="radio" value='Feminino' name='sexo'>
                                <p>Feminino</p>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="w100">
                            <input type="submit" name='acao' value='Cadastrar'>
                        </div>
                    </form>
                </div>

                <div class="clear"></div>    
            </div>
        </section>

        <section class="linguas">
            <div class="center">
                <a class='selected-lingua' href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
            </div>

            <div class="center">
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
            </div>
        </section>
        
    </body>
</html>