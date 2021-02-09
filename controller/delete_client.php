<?php

    include_once "../model/conexao.class.php";
    include_once "../model/manager.class.php";

    $manager = new Manager();

    $id = $_POST['id'];

    if (isset($id) && !empty($id)) {
        $manager->deleteClient("registros", $id);
    
       header("Location: ../index.php?client_deleted");
    }

?>