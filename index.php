<?php

/*
 * 1 - Uniquement pour la pratique, reproduisez via mysql workbench le schémas proposé.
 * 2 - Exportez le résultat de manière à créer les tables en base de données.
 * 3 - Ajoutez des utilisateurs, des rôles et ajoutez des données dans la table user_role ( attention, au moins un utilisateur doit avoir deux rôles au moins ).
 * 4 - A l'aide d'un simple print_r, afficher les rôles de chaque utilisateur.
 * 5 - FIN !
 */

    require_once "DB/DB.php";

$sql = DB::getInstance()->prepare("SELECT * FROM user_role INNER JOIN user ON user.id = user_role.user_fk INNER JOIN role ON role.id = user_role.role_fk");
$result = $sql->execute();

if($result) {
    foreach ($sql->fetchAll() as $value) {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }
}