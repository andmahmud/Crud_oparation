<?php 
$conn = mysqli_connect('localhost', 'root', '', 'Cst');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `cst_6` WHERE Si=$id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result); // Fetch the row data
        $name = $row['name'];
        $user_id = $row['Id'];
        $dept = $row['department'];
        $email = $row['email'];
    } else {
    }
} else {
    echo "ID not set in URL";
}




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = $_POST['user_name'];
    $user_id = $_POST['user_id'];
    $dept = $_POST['user_dept'];
    $email = $_POST['user_email'];
    $record_id = $_POST['id']; // Hidden field to identify the record

    // Update query
    $update_query = "UPDATE `cst_6` SET `name`='$name', `department`='$dept', `email`='$email' WHERE `Si`=$record_id";
    $update = mysqli_query($conn, $update_query);

    if ($update) {
        header("Location: show.php"); // Redirect after successful update
        
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Hidden field for ID -->

        <label for="user_name">Name: </label>
        <input type="text" name="user_name" value="<?php echo isset($name) ? $name : ''; ?>">

        <br><br>
        <label for="user_id">Id: </label>
        <input type="text" name="user_id" value="<?php echo isset($user_id) ? $user_id : ''; ?>">

        <br><br>
        <label for="user_dept">Department: </label>
        <input type="text" name="user_dept" value="<?php echo isset($dept) ? $dept : ''; ?>">

        <br><br>
        <label for="user_email">Email: </label>
        <input type="email" name="user_email" value="<?php echo isset($email) ? $email : ''; ?>">

        <br><br>
        <input type="submit" name="submit" value="Update">
        
    </form>

</body>
</html>




<?php 




?>