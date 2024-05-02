<?php
global $dbPDO;
require('pdo.php');
$post = $_POST;
if (isset($post['email']) && isset($post['password']) && isset($post['confirm-password']) && $post['password'] === $post['confirm-password']) {
    echo "ok";
    try {


        $resultat = $dbPDO->prepare("INSERT INTO `utilisateurs` (`id`, `email`, `password`) VALUES (NULL, :email, SHA1(:password));");
        $req = $resultat->execute([
            'email' => $post['email'],
            'password' => $post['password']
        ]);
    } catch (PDOException $e) {

    }

    $rows = $resultat->rowCount();

    if ($rows > 0) {
        echo "register ok";
        //header('Location: login.php'); /* pour l'instant en commentaire */
        exit();
    } else {
        echo "register ko";
        header('Location: register.php'); /* pour l'instant en commentaire */
        exit();
    }

    //header('Location: login.php'); /* pour l'instant en commentaire */
    exit();

} else {
    echo "ko";
    header('Location: register.php'); /* pour l'instant en commentaire */
    exit();
}
?>