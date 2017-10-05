<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD - PHP & MYSQL</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="public/css/custom.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">Editar Avatar</h1>
            <hr>
            <ol class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Editar Avatar</li>
            </ol>
            <?php if (isset($_GET['id'])): ?>
            <?php
                include 'includes/db.php';
                $id  = $_GET['id'];
                $sql = "SELECT * FROM avatars WHERE id=$id";
                $rs  = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($rs)) {
            ?>
            <form id="add" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text"
                           class="form-control"
                           name="name" 
                           data-validation="required"
                           value="<?=$row['name']?>"
                           placeholder="Nombre">
                </div>
                <div class="form-group">
                    <select name="gender" class="form-control" data-validation="required">
                        <option value="">Genero...</option>
                        <option value="Femenino" <?php if($row['gender'] == 'Femenino') echo 'selected'; ?> >Femenino</option>
                        <option value="Masculino" <?php if($row['gender'] == 'Masculino') echo 'selected'; ?> >Masculino</option>
                    </select>
                </div>
                <div class="form-group">
                    <img id="avatar" src="<?=$row['image']?>">
                    <button type="button" class="btn btn-default btn-upload">
                        <i class="glyphicon glyphicon-user"></i>
                        Cargar Foto
                    </button>
                    <input type="file" id="upload" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <input type="color" 
                           name="color" 
                           class="form-control" 
                           data-validation="required" 
                           value="<?=$row['color']?>"
                           placeholder="Color en Hexadecimal">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="glyphicon glyphicon-pencil"></i>
                        Modificar
                    </button>
                    <button type="reset" class="btn btn-default">
                        <i class="glyphicon glyphicon-trash"></i>
                        Limpiar
                    </button>
                </div>
            </form>
            <?php
                }
                mysqli_close($con);
            ?>
            <?php endif ?>

            <?php
                include 'includes/db.php';
                if ($_FILES) {
                    // Recolectar Datos
                    $nimage    = time();
                    $path      = $_FILES['image']['name'];
                    $extension = pathinfo($path, PATHINFO_EXTENSION);
                    $name      = $_POST['name'];
                    $gender    = $_POST['gender'];
                    $image     = 'public/imgs/avatars/'.$nimage.'.'.$extension;
                    $color     = $_POST['color'];
                    if(!empty($_FILES['image']['name'])) {
                        // Subir Avatar
                        move_uploaded_file($_FILES['image']['tmp_name'] , $image);
                        $sql = "UPDATE avatars SET name = '$name', gender = '$gender', image = '$image', color = '$color' WHERE id=$id";
                    } else {
                        $sql = "UPDATE avatars SET name = '$name', gender = '$gender', color = '$color' WHERE id=$id";
                    }
                    
                    // Ejecutas SQL
                    if (mysqli_query($con, $sql)) {
                        $_SESSION['action'] = 'Edit';
                        echo "<script>window.location.replace('index.php');</script>";
                    }
                }
                mysqli_close($con);
            ?>
        </div>
    </div>
</div>


<script src="public/js/jquery-3.1.1.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.form-validator.min.js"></script>
<script src="public/js/jquery.form-validator.es.js"></script>
<script>
    $(document).ready(function() {
        /* - - - - - - - - - - - - - - - - - */
        $('#upload').hide();
        $('.btn-upload').click(function() {
            $('#upload').click();
        });
        /* - - - - - - - - - - - - - - - - - */
        $.validate({ 
            form: '#add', 
            language: es 
        });
        /* - - - - - - - - - - - - - - - - - */
        $('#upload').change(function(event) {
            previewAvatar();
        });
    });
    /* - - - - - - - - - - - - - - - - - */
    function previewAvatar() {
        var fr = new FileReader();
        fr.readAsDataURL(document.getElementById("upload").files[0]);
        fr.onload = function (frevent) {
            document.getElementById("avatar").src = frevent.target.result;
        }
    }
</script>
</body>
</html>