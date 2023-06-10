<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$array = [

[
    'id' => 1,
    'nome' => 'Alessandro',
    'idade' => 17
],
[
    'id' => 2,
    'nome' => 'M.Heloisa',
    'idade' => 18
],
[
    'id' => 3,
    'nome' => 'Luna',
    'idade' => 15
],
[
    'id' => 4,
    'nome' => 'Mauricio',
    'idade' => 57
],
[
    'id' => 5,
    'nome' => 'Raissa',
    'idade' => 18
],

];
echo '<pre>';
print_r($array);
echo '</pre>';

uasort($array, function($a, $b)
{
if($a['nome'] == $b['nome']) return 0;
return $a['idade'] < $b['idade'] ? -1 : 1;

});

echo '<pre>';
print_r($array);
echo '</pre>';

echo '<h2>Forech</h2>';

foreach($array as $chave => $value){
echo $chave;
echo '<pre>';
print_r($alunos);
echo '</pre>';

}
echo '<h2>Forech Aninhado</h2>';

foreach($array as $chave => $value){
foreach($value as $Nchave => $Nvalue){
echo $Nchave;
echo '<pre>';
 echo $Nvalue;
echo '<br>';
echo '</pre>';
}
}
    ?>
    
</body>
</html>