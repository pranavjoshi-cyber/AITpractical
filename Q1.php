<!DOCTYPE html>
<html>
    <head>
        <title> Calculator </title>
        <script>
            function calculate(){
                var num1 = parseFloat(document.getElementById('num1').value);
                var num2 = parseFloat(document.getElementById('num2').value);

                var sum = num1 + num2;
                var difference = num1 - num2;
                var product = num1*num2;
                var quotient = num1/num2;

                document.getElementById("sum").innerHTML = sum;
                document.getElementById("difference").innerHTML = difference;
                document.getElementById("product").innerHTML = product;
                document.getElementById("quotient").innerHTML = quotient;



            }
            </script>
    </head>
</html>