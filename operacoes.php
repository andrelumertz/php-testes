<?php


// $nome = "André Martins";

// $idade= 7;

// echo "O $nome  tem $idade  anos de idade" .PHP_EOL;   // concatenando strings e variaveis

// $idadeDaquiHaDezAnos = $idade + 10;

// echo $idadeDaquiHaDezAnos;

// if($idadeDaquiHaDezAnos >= 18){
//     echo "Pode entrar";
// }else{
//     echo "Não pode entrar";
// }


// // + (soma), - (subtração), * (multiplicação), / (divisão), ** (exponenciação), % (módulo ou resto da divisão)


// $velocidademedia = 80;

// $velocidadeAtual = 50;


// function controlevel($velocidadeAtual){

//     $velocidadeMaxima = 100;

//     if($velocidadeAtual > $velocidadeMaxima){
//         echo "Você ultrapassou a velocidade máxima permitida com $velocidadeAtual Km/h";
//     }else{
//         echo "Você está dentro da velocidade permitida com $velocidadeAtual Km/h";
//     }
// }

// echo controlevel(150);

// // tabuada

// function tabuada($contador,$numero){

//     for($i = 1; $i <= $contador; $i++){
//         echo "$numero x $i = " .$numero * $i .PHP_EOL;
//     }
// }

// tabuada(10,2);


// $contador1 = 1;


// while($contador1 <= 15){
//     echo $contador1 .PHP_EOL;
//     $contador1++;
// }

// // imprime so numero impares
// for($i = 1; $i < 100; $i++){
//     if($i % 2 !=0){
//         echo $i .PHP_EOL;
//     }
// }


// $idadesAlunos = array(
//     "André" => 7,
//     "Maria" => 12,
//     "José" => 15,
//     "João" => 10
// ); 


// foreach($idadesAlunos as $nome => $idade){
//     echo "O aluno $nome tem $idade anos" .PHP_EOL;
// }

// // Loops em Listas (array)
// $idadeList = [21,24,27,29,30];

// for($i=0; $i <= count($idadeList); $i++){
//     echo $idadeList[$i] .PHP_EOL;
// }

// $nomesAlunos =  ["André", "Maria", "José", "João", "Rubel"];

// for($i=0; $i <= count($nomesAlunos); $i++) {
    
//     if($nomesAlunos[$i] == "Rubel"){
//         echo "Rubel encontrado";
//         break;
//     } else {
//         echo $nomesAlunos[$i] .PHP_EOL;
//     }
// }


// CONSTANTES
define("NOME", "André");
echo NOME;

$motos= [
    "Yamaha",
    "Honda",
    "Suzuki",
    "Kawasaki",
    "Ducati"
];

// removendo um elemento do array
unset($motos[0]);


foreach($motos as $moto){
    echo $moto .PHP_EOL;
}