<?php
//  $sql2="SELECT * FROM `fillblanks`";
//     $result2=mysqli_query($conn,$sql2);
//     $num=mysqli_num_rows($result2);
//     if($num>0){
//     while($row=mysqli_fetch_assoc($result2)){
//          echo var_dump($row);
//      }
//  }    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions Page</title>
</head>
<body>

<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration-quiz";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check the connection
if (!$conn) {
    die("Connection failed: ");
}

// Query to retrieve questions
$sql="SELECT * FROM `fillblanks`";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
        echo "<p>Question # : " . $row["fillQuestion"]. "</p>";
    }
} else {
    echo "0 results";
}
exit();
?>

</body>
</html>
