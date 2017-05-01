<?php 
     session_start();

     error_reporting(E_ALL);
     ini_set('display_errors',1);
?>
<html>
<head>
   <title>GUI</title> 
</head>
    <link rel="stylesheet" href="style.css"/>
<body>
    <div id="body">
    
        <div id= "title_bar">
            <table>
                <tr>
                     <td align="center"><a href="index.php">Home</a></td>
                </tr>
            </table>
        </div>
            
        <div id="DisplayPics">
            <h3> Display Image</h3>
                
            <?php 
              
                $dir2= "/circle/";
                $dir= "circle";
               $images = scandir($dir);
                $size= count($images);
               
                echo $size;
                $counter= 3;
                //this should print an image.
                //echo '<img src="'.getcwd().$dir2.$images[3].'" alt="Random image"/> <br />';
           
            ?>  
        <script type="application/javascript" src="display.js"></script>
        <form  id="f1" method="post">
             
        <input type="button" value="Previous" onclick="getImage(<?php echo $counter-1; ?>,<?php echo '["' . implode('", "', $images) . '"]'; ?>)"/>
        <input type="button" value="Next" onclick="getImage(<?php echo $counter+1; ?>,<?php echo '["' . implode('", "', $images) . '"]'; ?>)"/>
        <input type="button" value="Classify" onclick="process(image)"/>
        </form>
        </div>
     
    </div>
</body>
</html>