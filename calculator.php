<html>
<head>
     <h1> this is the calculator for simple calculation</h1>
     
   
</head>


<body>
<form>

    <input type ="text" name ="num1" placeholder="enter the first number" ></br>
    <input type ="text" name ="num2" placeholder="enter the second number"></br>
    <select name = "operator">
         <option>none</option>
         <option>add</option>
	 <option>sub</option>
	 <option>mul</option>
	 <option>div</option>
	<option> modulo</option>
    </select>
     </br>
 <button type ="submit" name="submit" value="submit">Calulate</button>
</form>

<p> the answer is :</p>

<?php

	if( isset ($_GET['submit'] ) ){
                         		$res1=$_GET['num1'];
                                        $res2=$_GET['num2'];
                                        $op=$_GET['operator'];
		                        switch($op)
		                        {
					                        

			                        case "none": echo"you need to select a method";
			                        break;
			                        case "add":echo $res1+$res2;
		                                break;
			                        case "sub":echo $res1-$res2;
		                                break;
			                        case "mul":echo $res1*$res2;
		                                break;
			                        case "div":echo $res1/$res2;
		                                break;
			                  	case "modulo":echo $res1%$res2;
                                                break;      
                                         }
                                     }
else
{
   echo " this is error";
}

                              
?>
</body>
</html>
