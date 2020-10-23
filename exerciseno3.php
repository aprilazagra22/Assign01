<form action="exerciseno3.php" method="post">
    <h2>Finding GCD</h2>
    Input first number: <br><br>
    <input type="text" name="n1"><br><br>
    Input second number: <br><br>
    <input type="text" name="n2"><br><br>
    <input type="submit" name="submit" value="Submit"> 
</form>

<?php
     if(isset ($_POST['submit']))
     {
         $n1 = $_POST['n1'];
         $n2 = $_POST['n2'];

         if ($n1 > $n2)
         {
             $temp = $n1;
             $n1 = $n2;
             $n2 = $temp;
         }
         for($i = 1; $i < $n1 + 1; $i++)
         {
             if($n1 % $i == 0 and $n2 % $i == 0)
                $GCD = $i;
         }
         echo "GCD: ". $GCD;
     }
?>
