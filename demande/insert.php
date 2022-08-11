<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "elearning");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $firstname =  $_REQUEST['firstname'];
        $username = $_REQUEST['username'];
        $email =  $_REQUEST['email'];
        $tel = $_REQUEST['tel'];
        $establishment = $_REQUEST['establishment'];
        $descrption = $_REQUEST['descrption'];
		 
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO demande  VALUES ('','$firstname',
            '$username','$email','$tel','$establishment','$descrption')";
        if(mysqli_query($conn, $sql)){
            header('location:index.php');
 
            echo nl2br("\n$firstname\n $username\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        } 
        
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>