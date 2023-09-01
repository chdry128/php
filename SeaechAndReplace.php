<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program To Search And Replace The Element Number</title>
</head>
<body>
    
    <form  method="post" action="">
   
        <label for="number">Enter The Number To Search:</label>
        <input type="number" name="search" id="search" required><br>
        <label for="number">Enter The Number That Will be Used To Replace:</label>
        <input type="number" name ="replace" id="replace" required><br>
        <input type="submit" value= "search and replace">
    </form>
    <?php
    $number=array(1,2,3,4,5,5);
 
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $search= $_POST["search"];
        $replace=$_POST["replace"];
        
        for($i=0;$i<count($number);$i++)
        {
            if($number[$i]==$search)
            {
                $number[$i]=$replace;
            }
        }
        echo "<pre>";
        print_r($number);
        echo"<pre>";
        
    }
    ?>

</body> 
</html>