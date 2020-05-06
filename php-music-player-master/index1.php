<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        
        /* Showing list start */

        #list_back{
                position: absolute;
                top: 0;
                left: 0;
                height: 1400px;
                width: 100%;
                background:linear-gradient(
                    rgba(0,0,0,0.7),
                    rgba(0,0,0,0.7)),url(mus.jpg) 0% 0%;
          
            }
            .box{
                width: 65%;
                height: 802px;
                background: transparent;
                margin: auto; 
            }
             .song_box{
               
                height:65px;
                transition: 1s;
                background: white;
            }
            .song_pic{
                width: 70px;
                height: 55px;
            }
            .song_img{
                width: 70px;
                height: 55px;
                margin-left: 20px;
                margin-top: 4px;
                float: left;
            }
            .song_name{
                width: 590px;
                height: 55px;
                margin-left:15px;
                margin-top: 4px;
                float: left;
                font-size: 24px;
                display: flex;
                align-items: center;
            }
            .ply_icon{
                margin-top: 3px;
                width: 50px;
                height: 50px;
            }
           .ply_song{
                width: 60px;
                height: 55px;
                margin-left:730px;
                margin-top: 2px;
            }
         .del_icon{
                margin-top: 3px;
                width: 35px;
                height: 35px;
            }
           .del_song{
                width: 60px;
                height: 55px;
                margin-left:810px;
                margin-top: -50px;
            }
             .song_box:hover{
               transform: scale(1.1);
               
            }
            p{
                margin-left: 20px;
                font-family: sans-serif
            }
        /* Showing list end */
        
        
            /*Song box */   
        #song_show{
            display: none;
        }
        
        #outer{
            height: 790px;
            width:100%;
            position: absolute;
            overflow: hidden;
            
        }
        #outer img{
            height: 790px;
            width:100%;
            -webkit-filter:blur(9px);
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index: 1;
        }
        #backlayer{
            height:790px;
            width:100%;
            background-color: rgba(0,0,0,.2);
            position: absolute;
            z-index: 99;
    
        }
        #main{
            width: 500px;
            background-color: #fff;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index: 999;
        }
        #image img{
            height: 500px;
            width: 100%;
            margin-top: -5px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        #player{
            border-radius: 15px;
            padding: 45px;
            background: white;
        }
        
        #song_title{
            font-family: monospace;
            font-size:22px; 
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #buttons{
            height: 50px;
            width: 140%;
            margin-left:0px;
            margin-top: 55px;
            position: relative;
        }
       .btn{
            outline: none;
            border: none;
            background: transparent;
        }
        #buttons img{
            height: 50px;
            width: 50px;
            position: relative;
        }
        #bar{
            width:400px;
            height:7px;
            background: gray;
            display: flex;
            border-radius: 50px;
           cursor: pointer;
        }
        #fill{
            height: 7px;
            background: rgb(239,97,144);
            border-radius: 50px;
        }
        #cir{
            width: 10px;
            height:10px;
            background: rgb(239,97,144);
            border-radius: 50px;
            margin-left: -5px;
            transform: scale(2);
        }
        #like{
              position:absolute;
            font-size:45px;
        }
        
        #stm{
            font-family: monospace;
            font-size:17px; 
            position: absolute;
            left:15px;
             top:617px;
            font-weight: 700;
        }
        #etm{
            font-family: monospace;
            font-size:17px; 
            position: absolute;
            right:20px;
             top:617px;
            font-weight: 700;
        }
        .menu{
                height: 50px;
                width: 50px;
                background-color:white;
                border-radius: 50%;
                position: absolute;
                margin: auto;
                top: 300px;
                bottom:0;
                left: 370px;
                right: 0;
                z-index: 2;
            }
        .items{
                height: 45px;
                width: 45px;
                position: absolute;
                margin: auto;
                top: 297px;
                bottom:0;
                left: 370px;
                right: 0;
            }
            .items>div{
                height: 44px;
                width: 44px;
                position: relative;
                background: white;
                border: 1px solid black;
                border-radius: 50%;
                transition: 0.5s linear;
            }
            .items img{
                height: 35px;
                width: 35px;
                
            }
            .item2{
                bottom:45px;
            }
            .item3{
                bottom:90px;
            }
        
        .back_to_list{
            margin-left: 10px;
            position: fixed;
            width: 50px;
            height: 50px;
            z-index: 999;
        }
/*song box end*/
/* trash */
        #trash_back{
                position: absolute;
                top: 0;
                left: 0;
                height: 1400px;
                width: 100%;
                background:linear-gradient(
                    rgba(0,0,0,0.7),
                    rgba(0,0,0,0.7)),url(mus.jpg) 0% 0%;
                display: none;
            }
        
/* trash end */
        /* like */
        #like_back{
                position: absolute;
                top: 0;
                left: 0;
                height: 1400px;
                width: 100%;
                background:linear-gradient(
                    rgba(0,0,0,0.7),
                    rgba(0,0,0,0.7)),url(mus.jpg) 0% 0%;
                display: none;
            }
        
/* trash end */
        </style>
    </head>
    <body>
        <!-- Showing list start -->
         <div id="list_back">
            <i style="font-size:35px;color: white;float: right;margin-right:30px;margin-top: 10px" onclick="toliked()" class="fas fa-heart"></i>
             
             <i style="font-size:35px;color: white;float: right;margin-right:-35px;margin-top: 65px" onclick="totrash()" class="fas fa-trash-alt"></i>

            <h1 style="color:white;font-size: 38px;font-family: sans-serif"><center>Music Player</center></h1>
            <br>
       <div class="box">
  
        <?php

// Create connection
$conn = new mysqli("localhost", "root", "", "audio");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM song_db";
$result = $conn->query($sql);
    $i = 0;
    $row;
	$result;
	$pic;
	$name1;
    $real;
    $artist;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $id=$row['ID'];
        $artist =$row["Artist"];
        if(strpos($artist, "return") !== false){
        $pic = $row['Image'];
        } else{
        $pic = base64_encode($row['Image']);
        }
		//$pic = base64_encode($row['Image']);
		
		$name1 =$row["File_name"];
		$real =$row["real_name"];
		$song = "songg";
        $ids[$i] = $id;
        $imgs[$i] = $pic;
        $song_name[$i] = $name1;
        $real_song[$i] = $real;
        $artists[$i] = $artist;
        $i=$i+1;
        echo '<div style="width: 100%" class="song_box">';
        echo '<div class="song_img"><img class="song_pic" src="data:image/jpeg;base64,'.$pic.'"></div>';
        echo '<div class="song_name"><p>'.$name1.'</p></div>'; 
        echo '<div class="ply_song">
               <img class="ply_icon" src="ply.png" onclick="dis('.$id.')">
               </div>';
        echo '<div class="del_song">
               <a href=del.php?id='.$id.'real=' . $real . '><img class="del_icon" src="del.png"></a>
               </div>';
        echo '</div><br>';
	}
}

 else {
    echo "0 results";
}

$conn->close();
?>
</div>
</div>
       
 <!-- Showing list end -->         
        
    <!-- song box show start -->    
      <div id="song_show">
        <div id="outer">
            <div id="backlayer"></div>
         <img id="bk" src="piku.jpg">   
        </div>
            <br>
        <div class="back_to_list">
            <i class="fa fa-reorder" style="font-size:36px;margin-left:1430px;color: white" onclick="back_list()"></i><br><br>
            <i class="fas fa-heart" style="font-size:36px;margin-left:1430px;color: white" onclick="toliked()"></i>
            
            <br><br>
            <i class="fas fa-trash-alt" style="font-size:36px;margin-left:1430px;color: white" onclick="totrash()"></i>
             
            </div>    
        
        <div id="main">
            <div id="image">
         <img id="pstr" src="piku.jpg">   
        </div>
        
        
        <div id="player">
            <br><br>
            <div id="song_title">Bezuban</div>
             <div class="menu">
            <i onclick="opens()" class='fas fa-music' style="font-size: 20px;margin-top: 15px;margin-left: 13px;color:#323462"></i>
        </div>
            <div class="items">
            <div class="item1" id="item1">
            <center>
                
                    <img onclick="vol_low()" style="margin-top: 5px;
                margin-left: 10px" src="low.png">
               
                </center>
            </div>
            
             <div class="item2" id="item2">
            <center>
                
                    <img id="sound" onclick="mutee()" style="margin-top: 5px;
                margin-left:0px" src="volume.png">
                
                </center>
            </div>
            
             <div class="item3" id="item3">
            <center>
                
                    <img onclick="vol_high()" style="margin-top: 5px;
                margin-left: 8px" src="high.png">
                
                </center>
            </div>
            
        </div>
            <br>
            <div id="bar"> 
            <div id="fill"></div>
            <div id="cir"></div>
                <div id="stm">00:00</div>
                <div id="etm">04:23</div>
            </div>
            
            <div id="buttons">
                
                <button class="btn" id="prev" onclick="prevs()" style=" margin-left:18px"><img src="previous.png"></button>
                
                <button class="btn" id="pl" onclick="plmusic()" style=" margin-left: 36px"><img src="play.png"></button>
                
                <button class="btn" id="next" onclick="nxt()" style=" margin-left: 36px"><img src="next.png"></button>
                
                <!--<i id="like" style="margin-left:47px;color:black" onclick="liked()" class="fas fa-heart"></i>-->
                <a id = "lk" href=""><i id="like" class="fas fa-heart" style="margin-left:47px;color:black" onclick="liked()"></i></a>
                
            </div>
        
        </div>
        </div>
        </div>
<!-- song box show end -->  
            
 <!-- trash list start -->
         <div id="trash_back">
             
            <i style="font-size:35px;color: white;float: right;margin-right:30px;margin-top: 10px" onclick="back_list()" class="fa fa-reorder"></i>
             
            <i style="font-size:35px;color: white;float: right;margin-right:-30px;margin-top: 65px" onclick="toliked()" class="fas fa-trash-al"></i>

            <h1 style="color:white;font-size: 38px;font-family: sans-serif"><center>Trash</center></h1>
            <br>
       <div class="box">
  
        <?php

// Create connection
	       
	       
require "config.php";
require "common.php";
	       
	$host = '127.0.0.1';
    $dbname = 'audio';
    $username = 'root';
    $password = '12345';          
    $conn = new PDO('mysql:host='.$host.'; dbname='.$dbname,$username, $password);
    
//$conn = new mysqli("localhost", "root", "", "audio");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM trash_db";
$result = $conn->query($sql);
    $i = 0;
    $row;
	$result;
	$pic;     
	$name1;
    $real;
    $artist;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $id=$row['ID'];
		$pic =$row['Image'];
		$name1 =$row["File_name"];
		$real =$row["real_name"];
		$artist =$row["Artist"];
		$song = "songg";
        echo '<div style="width: 100%" class="song_box">';
        echo '<div class="song_img"><img class="song_pic" src="data:image/jpeg;base64,'.$pic.'"></div>';
        echo '<div class="song_name"><p>'.$name1.'</p></div>'; 
        echo '<div class="ply_song">
        <a href=del2.php?id='.$id.'real=' . $real . '><img style="margin-top:10px" class="del_icon" src="undo.png"></a>
               </div>';
        echo '<div class="del_song">
               <a href=delete.php?id='.$id.'real=' . $real . '><img class="del_icon" src="del.png"></a>
               </div>';
        echo '</div><br>';
	}
}

 else {
    echo "0 results";
}

$conn->close();
?>
</div>
</div>
       
 <!-- trash list end -->         

       
 <!-- like list start -->
         <div id="like_back">
             
            <i style="font-size:35px;color: white;float: right;margin-right:30px;margin-top: 10px" onclick="back_list()" class="fa fa-reorder"></i>
             
            <i style="font-size:35px;color: white;float: right;margin-right:-30px;margin-top: 65px" onclick="totrash()" class="fas fa-heart"></i>

             <h1 style="color:white;font-size: 38px;font-family: sans-serif"><center>Favourites</center></h1>
            <br>
       <div class="box">
  
        <?php

// Create connection
//$conn = new mysqli("localhost", "root", "", "audio");
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}
	       
$connection = new PDO($dsn, $username, $password, $options);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM like_db";
$result = $conn->query($sql);
    $i = 0;
    $row;
	$result;
	$pic;     
	$name1;
    $real;
    $artist;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $id=$row['ID'];
		$pic =$row['Image'];
		$name1 =$row["File_name"];
		$real =$row["real_name"];
		$artist =$row["Artist"];
		$song = "songg";
        echo '<div style="width: 100%" class="song_box">';
        echo '<div class="song_img"><img class="song_pic" src="data:image/jpeg;base64,'.$pic.'"></div>';
        echo '<div class="song_name"><p>'.$name1.'</p></div>'; 
        echo '<div class="ply_song"></div>';
        echo '<div class="del_song">
               <a href=del_like2.php?id='.$id.'real=' . $real . '><img class="del_icon" src="del.png"></a>
               </div>';
        echo '</div><br>';
	}
}

 else {
    echo "0 results";
}

$conn->close();
?>
</div>
</div>
       
 <!-- like list end -->   
        

    <script>
        
        var pl=false;
        var song_src=<?php echo '["' . implode('","',$real_song) . '"]' ?>;
        var song_name=<?php echo '["' . implode('","',$song_name) . '"]' ?>;
        var song_img=<?php echo '["' . implode('","',$imgs) . '"]' ?>;
        var id_song=<?php echo '["' . implode('","',$ids) . '"]' ?>;
        var artists=<?php echo '["' . implode('","',$artists) . '"]' ?>;
        
        var startt=document.getElementById("stm");
             var endt=document.getElementById("etm");
            var song_title=document.getElementById("song_title");
            var song_bk=document.getElementById("bk");
            var song_pstr=document.getElementById("pstr");
            var fillbar=document.getElementById("fill");
            var circ=document.getElementById("cir");
            var song=new Audio();
            var current=0;
            var like_song=new Array();
            var like_index = Array(song_name.length).fill(0);
            var rgh=new Array();
            /*fill the time bar */
            
             song.addEventListener('timeupdate',function(){
                var position=song.currentTime/song.duration;
                fillbar.style.width=position*100+'%';
                 timebar(Math.round(song.currentTime));
            });
        
        function timebar(secnd)
            {
                var min=Math.floor(secnd/60);
                var sec=secnd%60;
                min=(min < 10)? "0" + min : min;
                sec=(sec < 10)? "0" + sec : sec;
                
                startt.textContent=min + ":" + sec;
              
                timeEnd(Math.round(song.duration));
                
                
            }
            
             function timeEnd(secnd)
            {
               
                var min=Math.floor(secnd/60);
                var sec=secnd%60;
                min=(min < 10)? "0" + min : min;
                sec=(sec < 10)? "0" + sec : sec;
               
               
                endt.textContent=min + ":" + sec;
                
                
            }
        
        
         function chng(){
             
                if(like_index[current]==1){
                   document.getElementById("like").style.color="red"; 
                   }
                   else{
                document.getElementById("like").style.color="black"; 
            }
                song.src="songs/"+song_src[current];
                song_title.textContent=song_name[current];
                song_pstr.src = "data:image/jpeg;base64,"+song_img[current];
                song_bk.src = "data:image/jpeg;base64,"+song_img[current];
                song.play();
                $("#pl img").attr("src" ,"stop.png");
                pl=true;
            }
        
        function plmusic()
            {
              
                if(pl==false)
               { 
                        chng();    
                      }
                else{
                
                   $("#pl img").attr("src" ,"play.png");
                 song.pause();
                         pl=false;
                }
            }
            
            
            function nxt()
            { 
               
                   
                if(current>=song_name.length-1){
                    current=0;
                }
                else{ 
                    current++;
                }
                
                chng();
            }
            
            function prevs()
            {
                
                if(current==0){
                    current=song_name.length-1;
                }
               else{ 
                   current--;
               }
               chng();
               
            }
        
        
        function liked()
            {
               
                if(document.getElementById("like").style.color=="black")
                    {
                        
                        document.getElementById("like").style.color="red";
                        if(like_index[current]==0){
                        like_song.push(song_name[current]);
                        like_index[current]=1;
                        document.getElementById("lk").href="del_like.php?id="+id_song[current];
                        }
                        
                    }
                else
                {
                  document.getElementById("like").style.color="black";   
                    var str=song_name[current];
                    delete like_song[like_song.indexOf(str)];
                    like_index[current]=0;
                   // document.getElementsByClassName(song_name[current]).remove(); 
                    //const Div = document.querySelector('.'+song_name[current]+'');
                    //Div.remove(); 
                }
            
            }
        
        
       function dis(n){
           var poss;
               for(var j=0;j<id_song.length;j++){
                   if(id_song[j]==n){
                        poss = j;
                      }
               }
           
               //alert(poss+""+n);
               document.getElementById("list_back").style.display="none";
               document.getElementById("song_show").style.display="block";
              // document.getElementById("like_back").style.display="none";
               
               current=poss;
               chng();
           }
        
         function back_list(){
               document.getElementById("song_show").style.display="none";
                document.getElementById("trash_back").style.display="none";
                document.getElementById("like_back").style.display="none";
                document.getElementById("list_back").style.display="block";           
         }
        
         function toliked(){
               document.getElementById("song_show").style.display="none";
                document.getElementById("trash_back").style.display="none";
                document.getElementById("like_back").style.display="block";
                document.getElementById("list_back").style.display="none";           
         }
        
        function totrash(){
                document.getElementById("song_show").style.display="none";
                document.getElementById("trash_back").style.display="block";
                document.getElementById("like_back").style.display="none";
                document.getElementById("list_back").style.display="none";
            }
         var mut=0;
            var i=0;
            function opens()
            {
                if(i==0)
                   {
 document.getElementById("item1").style.transform='translateX(-56px)';
                       
document.getElementById("item2").style.transform='translateY(-56px)';
                       
document.getElementById("item3").style.transform='translateX(56px)';
                       
                       i=1;
                   }
                else{
document.getElementById("item1").style.transform='translate(0)';
                       
document.getElementById("item2").style.transform='translate(0)';
                       
document.getElementById("item3").style.transform='translate(0)';
                       i=0;
                }
            }
            function vol_high(){
                song.volume+=0.20;
            }
            
             function vol_low(){
                song.volume-=0.20;
            }
            
            function mutee(){
                if(mut==0){
                song.volume=0;
                 $("#sound").attr("src" ,"mute.png");
                    mut=1;
                }
                else{
                    song.volume=1;
                    $("#sound").attr("src" ,"volume.png");
                    mut=0;
                }
            }
        </script>
     
    
    
    </body>
</html>
