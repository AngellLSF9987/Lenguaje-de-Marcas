
<!DOCTYPE html>
<head>
    <title>CALCULADORA</title>
</head>
    <body>
        <?php
            if(isset($_POST["calcular"])){
                $op1 = $_POST["op1"];
                $op2 = $_POST["op2"];
                $op = $_POST["op"];

                if(strtolower($op) == "suma"){
                    echo "La suma es: " . ($op1 + $op2);
                }
                elseif(strtolower($op) == "resta"){
                    echo "La resta es: " . ($op1 - $op2);
                }
                elseif(strtolower($op) == "multiplicacion"){
                    echo "La multiplicacion es: " . ($op1 * $op2);
                }
                elseif(strtolower($op) == "division"){
                    echo "La division es: " . ($op1 / $op2);
                }             
            }
         ?>
   </body>
</html>