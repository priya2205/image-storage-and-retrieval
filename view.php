<?php
$servername="localhost";
$username = "root";
$password="";
$dbname="my_db";

echo "hello";

// create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){
die("connection failed :" .$conn->connect_error);
}
else{
 echo 'succcess';
}

// retrieve image
$query ="SELECT * FROM `upload_image`";
// $sql=$conn->query($result);
// while($sql->num_rows > 0){
//     $row = $sql->fetch_array();
//     $img = $row['image'];

//     header("Content-type : image/png");
//     echo $img;
//     echo "hello";
// }
$result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
?> 
