<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="imagens\favicon.ico">
        <title> iCollege - Home </title>
        
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div class="div1"> 
            <form name="formBusca" method="POST" action="busca.php">
                <div id="divBusca">
                    <input type="text" name="txtBusca" class="txtBusca" placeholder="Pesquisar"/>
                    <input type="submit" value="Buscar"/>
                </div>
            </form>

        </div>

        <div class="div2"> </div>

        <div class="div3"> 
            <nav id="menu">
                <ul type="1" start="3">
                    <li><a href=""> Home </a></li>
                    <li><a href=""> Áreas </a></li>
                    <li><a href=""> Cursos </a></li>
                    <li><a href="" target=""> Vestibulares </a></li>
                    <li><a href=""> Calendário </a></li>
                    <br/><br/>
                    <li><a href="create.php"> Cadastro </a></li>     
                    <li><a href="verificacao.php"> Verificar </a></li>        
                    <li><a href="login.php"> Login </a></li>
                </ul>
            </nav>
        </div>

        <div class="div4">
            <div class="div5"> 

            </div> 
        </div>

    </body>
</html>
