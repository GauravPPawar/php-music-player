<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<head>
<style>
    
a{
        
        text-decoration: none;
        font-size: 18px;
    }
    h1{
      font-size:40px;
    margin-left:160px;
        
    }
       .back{
                width: 100%;
                height: 700px;
                margin-top: 25px;
            }
            #output{
                width: 90%;
                height: 400px;
                background-color: white;
                margin-left: 25px;
                border: 1px solid black;
            }
            .bx{
                width:70%;
                height:650px;
                background-color:white;
                margin-left: 180px;
            }
            .up{
                padding: 23px 20px 15px 20px;
                margin-left: 400px;
                font-size:28px;
                background-color: green;
                border-radius: 50%;
            }
            input{
                width: 89%;
                margin-left: 25px;
                height: 35px;
                font-size: 18px;
                padding:0 0 0 10px;
                outline: none;
                border: 1px solid black;
            }
            .bt1{
                width: 100px;
                height: 38px;
                border: none;
                outline: none;
                color: white;
                background-color:cadetblue;
                font-size: 22px;
                margin-left: 140px;
            }
            
             @media screen and (min-width:900px){
                 .back{
                width: 96%;
                height: 700px;
                margin-left:40px; 
                margin-top: 25px;
            }
                 
                .bx{
                width:60%;
                height:650px;
                margin:auto;
            }
                 #output{
                width: 80%;
                height: 400px;
                background-color: white;
                margin-left: 90px;
                     border: 1px solid black;
            }
                  .up{
                padding: 15px 15px 15px 15px;
                margin-left: 670px;
                font-size:30px;
               background-color: green;
                border-radius: 50%;
            }
                 input{
                width: 79%;
                margin-left:90px;
                height: 35px;
                font-size: 18px;
                padding:0 0 0 10px;
                outline: none;
                border: 1px solid black;
            }
                  .bt1{
                width: 100px;
                height: 38px;
                border: none;
                outline: none;
                color: white;
                background-color:cadetblue;
                font-size: 22px;
                margin-left: 350px;
            }
                 
    }
    
   </style> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    
    
  

    <h1> <center>&nbsp;Add Placement Records</center></h1> 
    
    <div class="back">
            <br>
            <div class="bx">
        <form action="save_data.php" enctype="multipart/form-data" accept="image/gif, image/jpeg, audio/mpeg3" method="POST" >
            <br>
        <input  type="file"  accept="image/*" id="file" onchange="loadFile(event)" style="display: none; padding-left: auto" placeholder="Photo" autocomplete="off" name='photo' required>
        <img id="output" width="200"/>
            <label for="file" style="cursor:pointer; text-align: left;color:white" class="up"><b>&nbsp;+&nbsp;</b></label>
            <br><br>
             <input  type="file" accept="mpeg3/*" id="song" placeholder="Add .mp3 file" autocomplete="off" name='add_song' required>
            <br><br>
    <input type="text" placeholder="Name" name="name" autocomplete="off" required>
            <br><br>
            <input type="text" placeholder="Artist" name="artist" autocomplete="off" required>
            <br><br>
        <button type="submit" value="done" name="ok" class="bt1">Save</button>
           
            </form>
        </div>
        </div>
        

 <script>
             
            var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
            </script>
    </body>
</html>