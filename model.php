<html>
<head>
    <title>
        <?php echo $title ?>
    </title>
</head>
<body>
    <?php echo $content ?>
</body>
</html>


<?php
//model.php
function open_database_connection()
{
    $link = mysqli_connect("localhost", "root", "", "Farmacia");
    /* verificar la conexi�n */
    if (mysqli_connect_errno()) {
        printf("Conexi�n fallida: %s\n", mysqli_connect_error());
        exit();
    }
    return $link;
}
function close_database_connection($link)
{
    mysql_close($link);
}
function get_all_posts()
{
    $link =open_database_connection();
    $consulta = "SELECT codigo, nombre,precio from post";
    $result = mysqli_query($link, $consulta);
    $posts = array();
    while($row = mysqli_fetch_assoc($result)){
        $posts[] = $row;
    }
    close_database_connection($link);
    return $posts;
}
