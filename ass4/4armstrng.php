<html>
<body>
    <h1><form method="post">        
Enter a Number: <input type="text" name="num"/><br></h1>  <br>
<button type="submit">Check</button>  
</form> <h2>

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $total=0;  
        $x=$num;  
        while($x!=0)  
        {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
        }  
        echo "The given number is $num"; 
        echo "</br>";
        echo "The sum of the digits is $total"; 
        echo "</br>";
        if($num==$total)  
        {  
        echo "It is an Armstrong number";  
        }  
        else  
        {  
        echo "It is not an armstrong number";  
        }  
    }     
?> </h2>
</body>
</html>


