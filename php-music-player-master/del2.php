<?php
// Create connection
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
    //echo "".$nm;
    $splited = explode("real=",$nm);
    $ids = $splited[0];
    $name = $splited[1];
    //echo "id = ".$ids;
    //echo "name = ".$name;
    $file = "songs/".$name;
    $f = "trash/".$name;

	$sql = "select * from trash_db WHERE ID=".$ids;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $img = $row['Image'];
    $f_name = $row["File_name"];
    $artist = $row["Artist"]."return";
    

    $sql = "INSERT INTO song_db (Image,File_name,real_name,Artist) VALUES ('$img','$f_name','$name','$artist')";
    if(mysqli_query($conn,$sql))
    {
	   header("Location:Music_player.php");
    }
    


    $sql = "DELETE from trash_db WHERE ID=".$ids;
    if(mysqli_query($conn,$sql))
    {
	header("Location:Music_player.php");
    }
    

    

   $move = rename($f,$file);
    if($move){
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