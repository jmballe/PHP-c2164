<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>TP PHP 1</h1>
    <hr size="2">
    <div class="personaphp">
        <?php
            $persona = [
                'nombre'=> 'Juan Manuel',
                'apellido' => 'Bailleres',
                'edad' => '32',
                'hobbie' => 'Programar, andar en bici',
                'editor preferido' => 'VSCode',
                'sistema operativo' => 'Windows 10'
            ];
            echo 'Nombre: ';
            echo $persona['nombre'];
            echo '<br>';
            echo 'Apellido: ';
            echo $persona['apellido'];
            echo '<br>';
            echo 'Edad: ';
            echo $persona['edad'];
            echo '<br>';
            echo 'Hobbies: ';
            echo $persona['hobbie'];
            echo '<br>';
            echo 'Editor: ';
            echo $persona['editor preferido'];
            echo '<br>';
            echo 'Sistema operativo: ';
            echo $persona['sistema operativo'];
        ?>
    </div>
    
</body>
</html>