<?php


$conn = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['email']) && ($_POST['firstname']) && ($_POST['lastname']) &&($_POST['username'])){
                $firstname=$_POST['firstname'];
				$lastname=$_POST['lastname'];
				$username=$_POST['username'];
                $email= $_POST['email'];
                $date= $_POST['date'];
				$appt=$_POST['appt'];
               // mysqli_query($conn, "INSERT INTO 'sigin' (email, password) values('$email','$password')");
               // $sql2 = "INSERT INTO psignup (firstname, lastname, username, , email, date, appt)
              //  VALUES ('$firstname','$lastname','$username','$email', '$date', '$appt')";
              // mysqli_query($conn, $sql2);
              //  print($sql2);
            $sql3="INSERT INTO `psignup`(`firstname`, `lastname`, `username`, `email`, `date`, `appt`) VALUES ('$firstname','$lastname','$username','$email', '$date', '$appt')";
            mysqli_query($conn, $sql3);
                print($sql3);
                
                  
            }

            
        }
       }

?>