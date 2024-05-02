<?php

global $dbPDO;
require('pdo.php');
$post = $_POST;
if (isset($post['email']) && isset($post['password'])) {
    $resultat = $dbPDO->prepare("SELECT * FROM `utilisateurs` WHERE `email` = :email");
    $req = $resultat ->execute([
        'email' => $post['email'],
    ]);
    $rows = $resultat->rowCount();
    if ($rows>0){
        echo "<pre>L'utilisateur a bien été trouvé</pre>";
        $user = $resultat->fetch();
        header('Location: dashboard.php');
	if($user['password']===sha1($post['password'])){
		echo "<pre>le password est ok !</pre>";
	}
        
    }else{
        echo "<pre>Aucun user trouvé</pre>";
    }
   
     exit();
} else {
    echo "ko";
    header('Location: login.php');
    exit();
}
?>