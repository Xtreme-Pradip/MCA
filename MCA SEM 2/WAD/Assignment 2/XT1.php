<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 XT1</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="box">
        <form method="POST">
            <div>
                <input type="text" name="pcode" placeholder="Product Code" required> 
            </div>
            <div>
                <input type="text" name="pname" placeholder="Product Name" required>
            </div>
            <div>
                <input type="number" name="price" min="1" placeholder="Product Price" required>
            </div>
            <div>
                <input type="number" name="discount" min="0" max="100" placeholder="Product Discount" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Calculate" class="submit"> 
            </div>
        </form>
        <?php
            function calculate($pr,$d)
            {
                $netpay = ($pr*$d)/100;
                $netpay = $pr - $netpay;
                
                echo "<br> PRODUCT PRICE : $pr";
                echo "<br> DISCOUNT : $d%";
                echo "<br> NET BILL : $netpay";
            }
            
            if(isset($_POST['submit']))
            {
                $pc = $_POST['pcode'];
                $pn = $_POST['pname'];
                $pr = $_POST['price'];
                $d = $_POST['discount'];
                echo "<br> PRODUCT CODE : $pc";
                echo "<br> PRODUCT NAME : $pn";
                calculate($pr,$d);
            }
        ?>
    </div>    
</body>
</html>