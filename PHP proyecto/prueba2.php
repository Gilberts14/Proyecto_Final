<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "insert into registro(mail,clave) values
('$_REQUEST[mail]',$_REQUEST[clave])")
        or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El usario a iniciado sesión.";
    ?>
</body>

</html>