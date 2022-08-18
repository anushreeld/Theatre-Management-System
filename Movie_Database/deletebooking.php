<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id=$_GET['id'];
        $sql="delete from book where sea='$id'";
         include 'dbconfigg.php';
         if(mysqli_query($conn,$sql))
            {
               echo '<script>alert("booking cancelled Successful")</script>';
        echo '<meta http-equiv="refresh" content="0;adminhome.php"/>';;
            }
            else
            {
                echo "cancel unsuccessfull";
            }
        ?>
    </body>
</html>