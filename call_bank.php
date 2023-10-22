<?php
     session_start();



       $titulo = str_replace('#', '-', $_POST['titulo']);

      $categoria = str_replace('#', '-', $_POST['categoria']);

      $descricao = str_replace('#', '-', $_POST['descricao']);

      $texto = $_SESSION['id'] . ' # ' . $titulo . ' # ' . $categoria . ' # ' .  $descricao . PHP_EOL;


      $bank = fopen('././POST/CallBank.hd', 'a');

      fwrite($bank, $texto);

      fclose($bank);

      header('Location: abrir_chamado.php');
      

?>