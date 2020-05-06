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
    /*Song box */        
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
            background: DarkGoldenRod;
            border-radius: 50px;
        }
        #cir{
            width: 10px;
            height:10px;
            background: DarkGoldenRod;
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

    
    </style>
        
</head>
<body>
    
    <div id="song_show">
        <div id="outer">
            <div id="backlayer"></div>
         <img id="bk" src="piku.jpg">   
        </div>
            <br>
        <div class="back_to_list">
            <i class="fa fa-reorder" style="font-size:36px;color: black" onclick="back_list()"></i><br><br>
            <i class="fas fa-heart" style="font-size:36px;color: black" onclick="toliked()"></i>
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
        <script>
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
                
                <i id="like" style="margin-left:47px;color:black" onclick="liked()" class="fas fa-heart"></i>
            </div>
        
        </div>
        </div>
        </div>
    
    </body>
</html>