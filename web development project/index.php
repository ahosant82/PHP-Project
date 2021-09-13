<!DOCTYPE html>
<html>
    <head>
        <title>Celculetor Design</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="Wepper_area">
            <div class="content_area">
                <div class="content">
                    <div class="content_left"><h1>PHP CaLCULETOR</h1></div>
                    <div class="content_right">
                        <form class="calcu" method="POST">
                            <input type="text" name="1st_number" placeholder="First Number" ><br>
                            <input type="text" name="2nd_number" placeholder="Secend Number" ><br>
                            <select name="oparetors" >
                                <option>None</option>
                                <option>+</option>
                                <option>-</option>
                                <option>x</option>
                                <option>/</option>
                            </select><br>
                            <button type="submit" name="submit" value="calcu">Submit</button>
                            
                        </form>
                    </div>  
                </div>
                <div class="result">
                  <?php
                    if(isset($_POST['submit'])){
                        $input1 = $_POST['1st_number'];
                        $input2 = $_POST['2nd_number'];
                        $sing = $_POST['oparetors'];

                        switch($sing)
                        {

                            case'+':
                              echo "The Addition of two No . = ". ($input1 + $input2);
                            break;

                            case'-':
                                echo "The Subtraction of two No . = ".($input1 - $input2);
                            
                            break;

                            case'x':
                                echo"The Maltiplecetion of two No . = ".( $input1 * $input2);
                            break;

                            case'/':
                                echo "The Divition of two No . = ". ($input1 / $input2);
                            break;
                            
                            
                        }

                    }
                    ?>
                </div>
                     
            </div>
        </div>
    </body>
</html>