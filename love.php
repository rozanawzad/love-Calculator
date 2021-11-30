<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: pink;
    font-family: poppins;
}
.container{
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    height: 80vh;
    width: 60vw;
    box-shadow: inset -8px -8px 12px rgb(185,103,117),
                inset 8px 8px 12px rgb(201,95,114);
                border-radius: 50px;
}
.content{
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
}
.content h1{
    text-transform: uppercase;
    text-align: center;
    color: #d7385c;
}

.inputarea input{
    width: 200px;
    height: 30px;
    text-align: center;
    margin: 5px;
    margin-left: 25px;
    outline: none;
    border: 2px solid #d7385c;
    padding: 20px 30px;
    font-size: 20px;
}
.input{
    display: flex;
    justify-content: center;
    text-decoration: none;
    background-color: #d7385c;
    padding: 20px;
    margin: 0px 6px;
    color: #fff;
    text-transform: uppercase;
    font-size: 20px;
    font-weight: bold;
}
#print{
    display: flex;
    justify-content: center;
    background-color: #d7385c;
    margin: 20px;
    padding: 20px 50px;
    color: #fff;
    text-transform: uppercase;
    font-size: 20px;
    text-align: center;
}
	</style>
</head>
<body>
 <div class="container">
        <div class="content">
            <h1>Love Calculator</h1>
            <div class="inputarea">
            	<form action="love.php" method="GET">
               		 <input type="text" placeholder="Your Name" id="NameOne" name="name_1" required>
                	<input type="text" placeholder="Your Partner" id="NameTwo" name="name_2" required>
               		 <input type="submit" name="submit" class="input">
    		    </form> 
    	</div>
            <p id="print">result: <?php 
         if(isset($_GET['submit'])){
	
	
	 $rand = rand(1,100);  
	 echo   $_GET["name_1"] . "+" . $_GET["name_2"] . "=" . $rand . "%";
	

	$filename = "file.txt";
	$content = $_GET["name_1"] . "+ " . $_GET["name_2"] . "= " . $rand . "% \n" ;

	$fp = fopen($filename, 'a+');
	fwrite($fp, $content);
	fclose($fp);
                            }
else {
	"please sumbit the form";
}

?> </p>
        </div>
    </div>
</body>
</html>




