<?php

    $con = mysqli_connect('localhost', 'root', 'admin', 'adsi1132816');

    if(mysqli_connect_errno()) {
        echo "<div class='alert alert-danger'>Error al conectar a MySQL: ".mysqli_connect_error()."</div>";
    }