
  <?php
    // Récupérez le message envoyé par l'utilisateur
    $message = $_POST['message'];
    // Ouvrez le fichier de messages en mode d'écriture
    $file = fopen('messages.txt', 'a');
    // Écrivez le message dans le fichier
    fwrite($file, $message . "\n");
    // Fermez le fichier
    fclose($file);
    // Redirigez l'utilisateur vers la page de chat
    header('Location: chat.php');
  
    // Ouvrez le fichier de messages en mode lecture
    $file = fopen('messages.txt', 'r');
    // Lis chaque ligne du fichier
    while (!feof($file)) {
      $line = fgets($file);
      // Affiche chaque message
      echo $line . "<br>";
    }
    // Fermez le fichier
    fclose($file);
  ?>