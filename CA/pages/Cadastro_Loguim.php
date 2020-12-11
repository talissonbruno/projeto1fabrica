<link href="folder/css/loguim.css" rel="stylesheet" type="text/css"/>
<link href="folder/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<div class="container-fluid " >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paracadastro2"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
        <!--FORMULÁRIO DE LOGIN-->
        <div id="login">
            <form method="post" action=""> 
                <h1>Login</h1> 
                <p> 
                    <label for="email_login">Seu e-mail</label>
                    <input id="email_login" name="email" required="required" type="text" placeholder="contato@gmail.com"/>
                </p>

                <p> 
                    <label for="senha_login">Sua senha</label>
                    <input id="senha_login" name="senha" required="required" type="password" placeholder="1234" /> 
                </p>

                <p> 
                    <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
                    <label for="manterlogado">Manter-me logado</label>
                </p>

                <p> 
                    <input type="submit" value="Logar" /> 
                </p>

                <p class="link">
                    Ainda não tem conta?
                    <a href="#paracadastro">Cadastre-se</a>
                </p>
            </form>
        </div>

        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
            <form method="post" action=""> 
                <h1>Cadastro de Usuario</h1> 
                <p class="dest">  
                    você é cliente?
                    <a href="#paracadastro2"> Ir para Cadastro do Cliente </a>
                </p>
                <p> 
                    <label for="nome_cad">Seu nome Completo</label>
                    <input id="nome_cad" name="nome" required="required" type="text" placeholder="Luiz Augusto" />
                </p>

                <p> 
                    <label for="email_cad">Seu e-mail</label>
                    <input id="email_cad" name="email" required="required" type="email" placeholder="contato@gmail.com"/> 
                </p>

                <p> 
                    <label for="senha_cad">Sua senha</label>
                    <input id="senha_cad" name="senha" required="required" type="password" placeholder="12345678"/>
                </p>

                <p> 
                    <label for="endereço_cad">Endereço</label>
                    <input id="cidade_cad" name="endereço" required="required" type="text" placeholder="São Paulo "/> 
                </p>
       
                <p> 
                    <input type="submit" value="Cadastrar"/> 
                </p>

                <p class="link">  
                    Já tem conta?
                    <a href="#paralogin"> Ir para Login </a>
                </p>
            </form>
        </div>
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro2">
            <form method="post" action=""> 
                <h1>Cadastro do Cliente</h1> 

                <p class="dest">  
                    você é Usuario?
                    <a href="#paracadastro"> Ir para Cadastro do Usuario </a>
                </p>

                <p> 
                    <label for="nome_cad">Digite o seu nome</label>
                    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto" />
                </p>

                <p> 
                    <label for="email_cad">Digite o seu e-mail</label>
                    <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@gmail.com"/> 
                </p>
                <p> 
                    <label for="senha_cad">Digite a sua senha</label>
                    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
                </p>

                <p> 
                    <label for="cidade_cad">Digite o Endereço</label>
                    <input id="cidade_cad" name="cidade_cad" required="required" type="text" placeholder="São Paulo"/> 
                </p>
              
                <p> 
                    <label for="tipo_cad">Digite o nome da organização</label>
                    <input id="tipo_cad" name="organizacao" required="required" type="text" placeholder="IFNMG"/> 
                </p>

                <p> 
                    <input type="submit" value="Cadastrar"/> 
                </p>

        <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
        </p>
            </form>        

        </div>         

    </div>
</div> 