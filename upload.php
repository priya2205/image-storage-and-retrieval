<?php

  if(isset($_POST["submit"])){
       $content = getimagesize($_FILES['image']['tmp_name']);
       if($content!==false){
        if(isset($_FILES['image'])){
           $image =$_FILES['image']['tmp_name'];
           $imgcontent = addslashes(file_get_contents($image));
          $dataTime = date("Y-m-d H:i:s");
       $servername="localhost";
       $username = "root";
       $password="";
       $dbname="my_db";
   
       // create connection
       $conn = new mysqli($servername,$username,$password,$dbname);
       //check connection
       if($conn->connect_error){
       die("connection failed :" .$conn->connect_error);
       }
       else{
        // echo 'succcess';
       }
       $sql = $conn->query("INSERT into upload_image(image) VALUES ('$imgcontent')");
       if($sql){
           echo"file upload";
         }
       else{
           echo"failed";
       }  
       $conn->close ;
}
 }
}
  ?>