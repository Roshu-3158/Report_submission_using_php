
<?php
$db = mysqli_connect('localhost','root','','register');

// if($conn){
//     echo"The Databsae has been connected";
// }
// else{

//     die("Database Not Connected !");
// }

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$project_id = $_POST['project_id'];
$project_title = $_POST['tname'];
$report = $_POST['report'];

if(isset($_POST['submit'])){
    $con = "INSERT INTO `report_submission`(`id`, `first_name`, `last_name`, `email`, `project_id`, `project_title`, `report`) VALUES (' ','$first_name','$last_name','$email','$project_id','$project_title','$report')";

    $query = mysqli_query($db,$con);

    echo"The data is submited successfully";
}
    

?>