


<?php
        $host = 'webapp-sql1';  //the name of the mysql service inside the docker file.
        $user = 'devuser';
        $password = 'devpass';
        $db = 'audio';

            
// Create connection
        $conn = new mysqli($host,$user,$password,$db);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
    $nm=$_GET['id'];
    
   

	$sql = "select * from song_db WHERE ID=".$nm;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $real = $row["real_name"];
    $img = base64_encode($row['Image']);
    $f_name = $row["File_name"];
    $artist = $row["Artist"];
    $file = "songs/".$real;
    $f = "like/".$real;

    $sql = "INSERT INTO like_db (Image,File_name,real_name,Artist) VALUES ('$img','$f_name','$real','$artist')";
    if(mysqli_query($conn,$sql))
    {
	   header("Location:Music_player.php");
    }
    


   $copy = copy($file,$f);
    if($copy){
    header("Location:Music_player.php");
    }  
   
	//

	/*if(mysqli_query($conn,$sql))
    {
	echo "deleted";
    if(unlink($file)){
        echo "deleted";
    }
    }
    else
	echo "NOt deleted";
*/

?>







