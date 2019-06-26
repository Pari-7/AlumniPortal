<html>
    <body>
    <style>
        body{background-image:url(fav2.jpg);
        }
        label{font-size: 30px;
        color: red;
        }
        p{
            font-family: monospace;
            font-style:normal;
            color:darkred;
            font-size: 60px;
            text-align: center;
        }
        .form{align-self: center;
        text-align: center;}

        
        </style>
        <p>WRITE ANY QUERY</p>
    <div class="form">
    <form action="" method="post">
        
        <label>Name:<input type="text" name="name"><br><br></label>
        <br>
        <label>To:<input type="text" name="person"><br></label>
        <br><br>
        
        <label>Message:<br><textarea cols="45" rows="5"name="mes"></textarea></label><br>
        <input type="submit" name="post" value="Post">
    </form>
    </div>
    </body>
</html>
<?php
if(isset($_POST['post'])){
$name=$_POST["name"];
$To=$_POST["person"];    
$text=$_POST["mes"];
$post=$_POST["post"];

if($post)
{
#Write down comments#
$write=fopen("com.txt","a+");
fwrite($write,"<b>$name</b> : <b>$To</b><br>$text<br><br>");
fclose($write);

    
$read=fopen("com.txt","r+t");
 echo"ALL COMMENTS:<br><br>"; 
while(!feof($read)){
echo fread($read,1024);
}
fclose($read);
}
else{
$read=fopen("com.txt","r+t");
echo"All comments:<br>";
    while(!feof($read))
    {
echo fread($read,1024);
    }
    fclose($read);
}}
?>