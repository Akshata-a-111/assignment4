<html>
    <body><h1>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br></h1>  <br>
<button type="submit">Check</button>
</form> <h2>

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $ori_num = $num;
        $rev_num = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev_num = $rev_num * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "The sum of the digits of $ori_num is $sum"; 
        echo "</br>";
        if($ori_num == $rev_num){  
            echo "The number $ori_num is Palindrome";     
        }else{  
            echo "The number $ori_num is not a Palindrome";   
        }  
}     
      ?> </h2>
</body>
</html>


