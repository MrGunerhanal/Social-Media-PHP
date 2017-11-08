<html>
<head>
</head>
<body>
    <table>
        <tr>
            <td>picture</td>
        </tr>
        <tr>           
        <td><?php echo $description?></td>
        </tr>
    </table>
    <form action="" method="post">
                        <label>Name<br><input type="text" name="name"><br></label>
                        <label>Comment<br><textarea cols="35" rows="5" name="mes"></textarea></label><br>
                        <input type="submit" name="post" value="Post">
    </form> 
</body>
</html>
<?php
$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];
if($post)
{
    #WRITE DOWN COMMENTS#  
    $write = fopen("com.txt", "a+");
    fwrite($write, "<u><b> $name </b></u><br>$text<br>");
    fclose($write);
    
    #DISPLAY COMMENTS#
    $read = fopen("com.txt" , "r+t");
    echo "All comments:<br>";
    
    while(!feof($read))
    {
        echo fread($read, 1024);
    } 
    fclose($read);
}
else
{
    $read = fopen("com.txt" , "r+t");
    echo "All comments:<br>";
    while(!feof($read))
    {
        echo fread($read, 1024);
    } 
    fclose($read);
}
?>