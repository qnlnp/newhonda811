<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];
          
    $con = mysqli_connect("localhost", "root", "NTSMYSQL", "nts");

    $sql = "update members set pass='$pass', name='$name', email='$email'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'start2.php';
	      </script>
	  ";
?>