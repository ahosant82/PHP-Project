<!DOCTYPE html>
<html>
    <body >
        <?php
        // print a messege
        echo "Welcome TO Web Development Project.";
        // php variables ($ variable_name= value;)
        $a=10;
        $b=6;
        $txt="The sumetion is = ";
        //output of variables
        echo("</br>".$txt.($a+$b)."</br>");
        /*PHP has three different variable scopes:
            1.local
            2.global
            3.static*/
        //global and local variables decleartion\]

        $global_var=100;//global variables
        echo"This is Global Variables = $global_var </br>";
        //php functions
        function local_var(){
            $local_var= "true";//local variable 
            global $global_var,$a,$b;//using global keyword
            echo"This is Local Variables = $local_var </br>";
            echo"This is global Variables = $global_var </br>";
            echo"This is global Variables = ".($global_var+$a);

        }
        local_var();// function calling
        // static keyword incom
        function myTest() {
            static $x = 0;
            echo $x;
            $x++;
          }
          echo "</br>";
          myTest();
          echo "<br>";
          myTest();
          echo "<br>";
          myTest();
        
        ?>
    </body>
</html>