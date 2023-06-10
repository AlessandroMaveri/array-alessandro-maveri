<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>arrays-Exercicios</h1>
    
<?php
    
    echo '<h2> Exercicios de arrays - nome do aluno</h2>';

    echo '<hr>';


  echo '<h2> Valor: 1 ponto - deve ser entregue no Github na pasta: "Atividades-para-casa"</h2>';

 echo '<h2> crie um array para armazenar todas as disciplinas cursadas com suas respectivas notas de um aluno';
 echo 'exemplo do que deve ser armazenado no array: psw1 
                                                           | avaliação = 5
                                                           |  teste =  7
                                                  
                                                    BD     | nota 1  = 0,7
                                                           | av1     = 10.0';
 
 echo '<hr>';
 
 $arraydisciplina = [
    'disciplina'=>[
        'BANCO DE DADOS' =>[
        'id'=> 0,
        'nome' =>'Banco de dados',
        'nota1' => 8,
        'teste' => 4
    ],
    'BIOLOGIA' =>
    [
        'id'=> 1,
        'nome' =>'Biologia',
        'nota1' => 10,
        'teste' => 6,
    ],
    'ASW' =>
    [
        'id'=> 2,
        'nome' =>'ASW',
        'nota1' => 40,
        'teste' => 25 
    ],
    'FÍSICA' =>
    [
        'id'=> 3,
        'nome' =>'Física',
        'nota1' => 98,
        'teste' => 38 
    ],
    
]

];
echo '<pre>';
print_r($arraydisciplina );
echo '</pre>';

echo '<pre>';
echo 'Soma das notas em ASW = ' ;
print_r($arraydisciplina ['disciplina'] ['ASW'] ['nota1'] + $arraydisciplina ['disciplina'] ['ASW'] ['teste']);
echo '</pre>';
echo '<pre>';
echo 'Soma das notas em BIOLOGIA = ' ;
print_r($arraydisciplina ['disciplina'] ['BIOLOGIA'] ['nota1'] + $arraydisciplina ['disciplina'] ['BIOLOGIA'] ['teste']);
echo '</pre>';
echo '<pre>';
echo 'Soma das notas em BANCO DE DADOS = ' ;
print_r($arraydisciplina ['disciplina'] ['BANCO DE DADOS'] ['nota1'] + $arraydisciplina ['disciplina'] ['BANCO DE DADOS'] ['teste']);
echo '</pre>';
echo '<pre>';
echo 'Soma das notas em FÍSICA = ' ;
print_r($arraydisciplina ['disciplina'] ['FÍSICA'] ['nota1'] + $arraydisciplina ['disciplina'] ['FÍSICA'] ['teste']);
echo '</pre>';



?>



</body>
</html>