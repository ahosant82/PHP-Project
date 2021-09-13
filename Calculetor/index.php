<!DOCTYPE html>
<html>
    <head>
        <title>Calculetor</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <!----Main content----->
        <div class="content">
            <!-----main program----->
            <div class="mechine">
                <!--------left side-------->
                <div class="left">
                    <h1>Php Calculetor</h1>
                </div>
                <!------right side------->
                <div class="right">
                    <form class="input" method="POST">
                        <!------input veriable------>
                        <input type="number" name="1stNum" placeholder="input a number" class="f">
                        <input type="number" name="2ndNum" placeholder="input a number" class="">
                        <select name="oparetor">
                            <option>choice any oparetors</option>
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                        <button type="submit" name="submit" value="input">SUBMIT</button>
                    </form>
                    
                </div>
            </div>
            <div class="output">
                <h1>calculetion :</h1>
                <!----php develop----->
                <div id="dev">
                    <?php
                    if(isset($_POST['submit'])){
                        $input1= $_POST['1stNum'];
                        $input2= $_POST['2ndNum'];
                        $sing= $_POST['oparetor'];
                        echo 'First Number : '. $input1. '<br>';
                        echo 'Secend Number : '. $input2. '<br>';

                        switch($sing){
                            case'+':
                                echo "The Addition of two No . = ". ($input1 + $input2);
                              break;
                            case'-':
                                echo "The Subtraction of two No . = ". ($input1 - $input2);
                              break;
                            case'*':
                                echo "The Multiplicetion of two No . = ". ($input1 * $input2);
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