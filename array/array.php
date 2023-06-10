<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Arrays-Revisão</h1>
    <h2>array - como lista ordenada</h2>
    <?php
$arrayaluno = [
    'alunos'=>[
        'id'=>0,
        'nome' =>'Alessandro',
        'idade' =>25
    ],
    'professores' => [
        'id' =>3,
        'nome' => 'pedro'
    ],
];
echo '<pre>';
print_r($arrayaluno['professores'][1][nome]);
echo '</pre>';
    ?>
</body>
</html>





