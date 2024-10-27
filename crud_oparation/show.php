<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<button onclick="location.href='index.php'"> Inset </button>
<br><br>


</body>
</html>




<?php




$conn = mysqli_connect(hostname:'localhost', username:'root', password:'',database:'Cst');

    $query = "SELECT * FROM `cst_6`";
    $result = mysqli_query($conn, $query);
   


   


        echo "<table border='1'>
                <tr>
                    <th>Serial</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>action</th>
                </tr>";
       


 
   
        while($row = mysqli_fetch_assoc($result)) {


            echo "<tr>
            <td>" . $row['Si'] . "</td>
            <td>" . $row['Id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['department'] . "</td>
            <td>" . $row['email'] . "</td>
            <td><a href='?id=" . $row['Si'] . "'>Delete</a></td>
            <td><a href='update.php?id=" . $row["Si"] . "'>Edit</a></td>

            </tr>";
    
        }
        echo "</table>";
 



        if(isset(($_GET['id']))){
 
            $id = $_GET['id'];

            $delete = mysqli_query($conn,"DELETE FROM cst_6 WHERE `cst_6`.`Si` = $id");
            header("location: show.php");

        }
   


?>
