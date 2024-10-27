<?php



$conn = mysqli_connect(hostname:'localhost', username:'root', password:'',database:'Cst');
if($conn){

    if(isset($_POST['submit'])){
        $name = $_POST['user_name'];
        $id = $_POST['user_id'];
        $dept = $_POST['dept'];
        $email = $_POST['user_email'];


        $insert = mysqli_query($conn, "INSERT INTO `cst_6` (`Id`, `name`, `department`, `email`) VALUES 
        ('$id', '$name', '$dept', '$email')");

if($insert){
    header("Location: show.php");
}
        
    }
    

}







?>
