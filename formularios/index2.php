<?php 

// if(isset($_POST['idade']) && isset($_POST['email'])){
//     $idade = $_POST['idade'];
//     $email = $_POST['email'];
    
//     echo "Idade: $idade e E-mail: $email  <br>";
// }


/* Validaçoes

Funçoes (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
FILTER_VALIDATE_REGEXP
FILTER_VALIDATE_BOOLEAN
FILTER_VALIDATE_IP
------------------

-> Sanitizaçao
Funcoes (filter_input - filter_var)
FILTER_SANITIZE_STRING
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
FILTER_SANITIZE_ENCODED
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_NUMBER_FLOAT


*/





if(isset($_POST['enviar-formulario'])):
    // Array de erros
    $erros = array();


    // Sanitize 
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome;

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade deve ser um número INTEIRO";
        endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "E-mail inválido";
    endif;

    $url = filter_input(INPUT_POST, 'URL', FILTER_SANITIZE_URL);
     if(filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = "URL inválida";
    endif;


    // if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)): // se não existir o campo idade
    //     $erros[] = "Idade precisa ser um número inteiro";
    // endif;

    //  if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)): // se não existir o campo EMAIL
    //     $erros[] = "E-mail invalido";
    // endif;

    //  if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)): // se não existir o campo peso
    //     $erros[] = "Peso precisa ser um número float";
    // endif;

    //  if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)): // se não existir o campo IP
    //     $erros[] = "Ip invalido";
    // endif;

    // if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)): // se não existir o campo URL
    //     $erros[] = "URL invalida";
    // endif;
   
   // EXIBINDO MENSAGENS DE ERRO
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li>$erro</li>";
        endforeach;
    else:
        echo "Parabéns, seus dados estão corretos!";
    endif;

endif;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"">

Nome<input type="text" name="nome"><br>
Idade<input type="number" name="idade"><br>
E-mail<input type="email" name="email"><br>
Peso<input type="text" name="peso"><br>
IP: <input type="text" name="ip"><br>
url<input type="text" name="url">
<button type="submit" name="enviar-formulario">Enviar</button><br>

</form>


</body>
</html>