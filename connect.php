<?php


$conn = new mysqli('localhost','root','','userform');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        if(isset($_POST['submit']))
        {
            if(!empty($_POST['email']) && ($_POST['password'])){
                
                $email= $_POST['email'];
                $password= $_POST['password'];
               // mysqli_query($conn, "INSERT INTO 'sigin' (email, password) values('$email','$password')");
                $sql = "INSERT INTO signin (password, email)
                 VALUES ('$password', '$email')";
                //mysqli_query($conn, $sql);
                 print("welcome $email you have successfully log in");
                  
            }

            
        }
		
       
    }
  
    
   
   if(isset($_POST["email"], $_POST["password"])) 
       {     
       // "SELECT DISTINCT `password` FROM `signin` WHERE `password`= "lxgiwyl01""
            $name = $_POST["email"]; 
           $password = $_POST["password"]; 
            $sql3=("SELECT  DISTINCT `email` FROM `signin` WHERE `email` = '".$name."'");
            $sql2=("SELECT  DISTINCT `password` FROM `signin` WHERE `password` = '".$password."'");
            $result1 = mysqli_query($conn, $sql3);
          // echo "$sql3";
            $result2 = mysqli_query( $conn, $sql2);
           
          if( mysqli_num_rows($result1)==1) 
            { 
             echo "U have loged in successfully";
            }
        else  
           {
              echo"The username or password are incorrect! please login again";
           }
    } 
   // 
 
   // if(isset($_POST['email'])){
    
   // $uname=$_POST['email'];
  //  $password=$_POST['password'];
    
  // $sql2="select * from signin where 'email' = '$uname'";
  // echo "$sql2";
  // $result=mysqli_query($conn, $sql2);
   // echo " $result ";
   //$row    = mysqli_fetch_assoc($result);
  // echo "$row";
  //  if($row['password'] == $password){ // if you are using encryption like md5 or anything else then you have to add in this line accordingly
       // echo "Good, Logged In!";
  // }//else{
       // echo "Oh No, password not correct!";
  //  }
//}else{
  //  echo "Please enter correct email!";
//}


?>




        



