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
    <?php
    
    $listaordenada = [ 
        
        'casa',
        'bola',
        'zebra',
        'arvore'
   ];
   $matriz = [
'Aluno' => 'Alessandro',
'turma' => '2AII',
'idade' => '17'
   ];
   echo '<pre>';
print_r($listaordenada);
   echo '</pre>';
   echo '<pre>';
print_r($matriz);
   echo '</pre>';

echo '<hr>';
   echo '<h2>  Count </h2>';
      
   echo '<pre>';
      echo (count($listaordenada));
   echo '</pre>';
   echo '<pre>';
      echo (count($matriz));
   echo '</pre>';  
   echo '<hr>';
   echo '<h2> Array keys </h2>';
   
   echo '<pre>';
      print_r(array_keys($listaordenada));
   echo '</pre>';
   echo '<hr>';
   echo '<h2> Array values </h2>';

    echo '<pre>';
         print_r(array_values($listaordenada));
    echo '</pre>';
    echo '<hr>';
    echo '<h2> in array </h2>';

    echo '<pre>';
         print_r(in_array('casa',$listaordenada));
    echo '</pre>';

    echo '<pre>';
         var_dump(in_array('2AII',$matriz));
    echo '</pre>';
    echo '<hr>';

    echo '<h2> isset -  verifica se posiçao existe no array </h2>';

    echo '<pre>';
         var_dump(array_search(isset($listaordenada['casa'])));
    echo '</pre>';

    echo '<h2> isset -  verifica se posiçao existe no array -  inclusao null</h2>';

    echo '<pre>';
         var_dump(array_search(isset($matriz["nome"])));
    echo '</pre>';

?>
</body>
</html>