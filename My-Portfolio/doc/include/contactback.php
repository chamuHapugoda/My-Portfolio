<?php
    
    if(isset($_REQUEST['submit'])){
        include('connection.php');

        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $email=$_REQUEST['email'];
        $subject=$_REQUEST['subject'];
        $comment=$_REQUEST['comment'];

        $query1="SELECT * from contact ";
        $result1=mysqli_query($conn,$query1);

        if(mysqli_num_rows($result1)>0){
            header("location:../index.html?");
             
            }else {
            $query="INSERT INTO contact (fname,lname,email,subject,comment) VALUES ('$fname','$lname','$email','$subject','$comment')";
            $result=mysqli_query($conn,$query);
            header("location:../index.html");
    }
        }
            
    ?>