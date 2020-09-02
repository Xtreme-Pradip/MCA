
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT1</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
		<h1>PRN FINDER</h1>
		<form method="POST" name="form1">
			<div>
				<input type="number" name="p" placeholder="Enter Amount">
			</div>
			<div>
				<input type="number" name="r" placeholder="Enter Rate Of Interest">
			</div>
			<div>
				<input type="number" name="n" placeholder="Enter No of years">
			</div>
			<div>
				<button class="submit" name="submit"> Submit </button>
			</div>
		</form>
	</div>
	<?php
		if(isset($_POST['submit'])){
			echo "<center>";	
			$prn = ($_POST['p'] * $_POST['r'] * $_POST['n']) / 100;
			echo "<h2> $prn </h2>";
			echo "</center>";
		}
	?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT2</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
		<form method="POST" name="form1">
			<div>
				<input type="text" name="fname" autocomplete="off" placeholder="First Name">
			</div>
			<div>
				<input type="text" name="lname" autocomplete="off" placeholder="Last Name">
			</div>
			<div>
				<button class="submit" name="submit"> Submit </button>
			</div>
		</form>
	
		<?php
		if(isset($_POST['submit']))
		{
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				echo "<br>Method is POST";
				if($_REQUEST['fname']) {
					echo "<br>Using Request";
					echo "<br> Your First name : " . $_REQUEST['fname'];
				}
				if($_REQUEST['fname']) {
					echo "<br> Your First name : " . $_REQUEST['lname'];
				}
			}


			else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
				echo "<br>Method is GET";	
				if($_REQUEST['fname']) {
					echo "<br>Using Request";
					echo "<br> Your First name : " . $_REQUEST['fname'];
				}
				if($_REQUEST['fname']) {
					echo "<br> Your First name : " . $_REQUEST['lname'];
				}
			}
		}
		?>
	</div>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT3</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
		<form method="POST">
			<div>
				<input type="number" name="min" autocomplete="off" placeholder="Minimum">
			</div>
			<div>
				<input type="number" name="max" autocomplete="off" placeholder="Maximum">
			</div>
			<div>
				<button class="submit" name="submit"> Submit </button>
			</div>
		</form>
	
		<?php
		if (isset($_POST['submit'])) {
			$min = $_POST['min'];
			$max = $_POST['max'];	
			if($min < 1) {
				echo "<br>Minimum Value must be greater than 0";
				die();
			}	
			else if($min > $max){
				echo "<br>Maximum value must be greater than mininum value";
				die();
			}

			for ($i = $min; $i <= $max ; $i++) { 
				echo "<br> The radius of " .$i. " is " . (3.14 * $i * $i);
			}
		}
		?>
	</div>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT4</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
		<form method="POST">
			<div>
				<input type="number" name="rno" required placeholder="Student Roll No">
			</div>
			<div>
				<input type="text" name="sname" autocomplete="off" placeholder="Enter Student Name">
			</div>
			<div>
				<input type="number" name="m1" autocomplete="off" placeholder="Marks 1">
			</div>
			<div>
				<input type="number" name="m2" autocomplete="off" placeholder="Marks 2">
			</div>
			<div>
				<input type="number" name="m3" autocomplete="off" placeholder="Marks 3">
			</div>
			<div>
				<button class="submit" name="submit"> Submit </button>
			</div>
		</form>
	
		<?php
		if(isset($_POST['submit'])){
			if($_POST['rno'] == '' || is_nan($_POST['rno'])) {
				echo "Invalid Student Roll No.";
			}
			else if ($_POST['sname'] == '') {
				echo "Fill Student Name.";
			}
			else {
				$m1 = $_POST['m1'];
				$m2 = $_POST['m2'];
				$m3 = $_POST['m3'];
				if($m1 < 0 || $m1 > 100 || $m2 < 0 || $m2 > 100 || $m3 < 0 || $m3 > 100) {
					echo "<br>Marks Must be btween 0 to 100";
				} else {
					$tot = $m1 + $m2 + $m3;
					$per = $tot / 3;
					echo "<br>Total: " . number_format((float)$tot, 2, '.', ',');
					echo "<br>Percentage: " . number_format((float)$per, 2, '.', '');

					switch(1) {
						case ($per > 80): echo "<br>Distinction"; break;
						case ($per > 70): echo "<br>First Class"; break;
						case ($per > 60): echo "<br>Second Class"; break;
						case ($per > 50): echo "<br>Third Class"; break;
						case ($per > 35): echo "<br>Pass"; break;
						default: echo "<br>Fail"; break;
					}
				}
			}
		}
		?>
	</div>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT5</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
		<form method="POST">
			<div>
				<input type="text" name="sname" autocomplete="off" placeholder="Enter The Name" required>
			</div>
			<div>
				<button class="submit" name="submit"> Submit </button>
			</div>
		</form>
	
		<?php
		if(isset($_POST['submit'])) {
			if ($_POST['sname'] == '') 
			{ 
				echo "Fill The Name"; 
			} 
			else {
				$f1 = @fopen('files/studinfo.txt', 'a+b');
				$sname = "\r\n" . $_POST['sname'];
				$fwrite = fwrite($f1, $sname);
				if($fwrite === false) {
					echo "Fail To Register Name."; 
				} else {
					echo "Name Registered Successfully. " . $fwrite . " bytes written.";
				}
				fclose($f1); 
			} 
		}
		?>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT6</title>
</head>
<body>
<?php
	if(file_exists("files/studinfo.txt")) {
		$f1Handle = @fopen("files/studinfo.txt", "rb");
		echo fread($f1Handle, filesize('files/studinfo.txt'));
		$fn = fopen("files/studinfo.txt","r");
		while(! feof($fn))  {
			$result = fgets($fn);
			echo "<br>" . $result;
		}
		fclose($fn);
		fclose($f1Handle);
	} 
	else {
		echo "No such File Exists";
	}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignmnet 1 XT7</title>
</head>
<body>
	<?php
	$file = 'files/7.txt';

	$fReadHandle = fopen("files/studinfo.txt", 'r+');
	$currentPosition = fgets($fReadHandle, 4);
	echo "<br> Reading from Start <br>" . $currentPosition;

	$currentPosition = fgets($fReadHandle, 5);
	echo "<br> Reading from the last read <br>" . $currentPosition;
	fseek($fReadHandle, 0);
	
	$currentPosition = fgets($fReadHandle, 4);
	echo "<br> Again Reading from Start <br>" . $currentPosition;
	
	$ftell = ftell($fReadHandle);
	echo '<br> $ftell' . " $ftell ";
	?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT8</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
		<h2>Hobby Selector</h2>
		<form method="POST">
			<div>
				<input type="checkbox" id="h1" name="hobby[]" value="Gaming"> Gaming
				<input type="checkbox" id="h2" name="hobby[]" value="Study"> Study
				<input type="checkbox" id="h3" name="hobby[]" value="Sleeping"> Sleeping
				<input type="checkbox" id="h3" name="hobby[]" value="Riding"> Riding
				<input type="checkbox" id="h3" name="hobby[]" value="Travelling"> Travelling
			</div>
			<div>
				<button class="submit" name="submit"> Submit </button>
			</div>
		</form>
		<?php
			if(isset($_POST['submit'])){
				if(!empty($_POST['hobby'])){
					foreach($_POST['hobby'] as $selected){
						echo $selected."</br>";
					}
				}
			}
		?>
	</div>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT9</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
	<?php
		$arr = array("1. Chana Masala","2. Dal Makhani","3. Chole Bhature","4. Kadai Paneer","5. Aloo Paratha","6. Chicken Leg Piece");
		$i = 2;
		foreach ($arr as $value) {
			if($i % 2) {
				echo "<br>" . $value;
			}
			$i++;
		} 
		?>
	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT10</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
	<?php

		$milk = array ("Tazza" => 26, "Shakti" => 22, "Gold" => 30);
		echo "Sort by Price<br>";
		$pricesort = $procuct =  $milk;
		asort($pricesort);
		foreach($pricesort as $key=>$value)
		{
			echo $key . " : " . $value . "<br>"; 
		}

		echo "<br> Sort By Name <br>";

		ksort($procuct);
		foreach($procuct as $key=>$value)
		{
			echo $key . " : " . $value . "<br>"; 
		}
	?>
	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT11</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="box">
      <form method="POST">
        <div>
          <select name = "cityA">
              <option value = 0>Navsari</option>
              <option value = 1>Surat</option>
              <option value = 2>Ahmedabad</option>
              <option value = 3>Kutchh</option>
              <option value = 4>Mumbai</option>
            </select>
          
            <select name = "cityB">
              <option value = 0>Navsari</option>
              <option value = 1>Surat</option>
              <option value = 2>Ahmedabada</option>
              <option value = 3>Kutchh</option>
              <option value = 4>Mumbai</option>
            </select>
          </div>
          <div>
              <input type="submit" value="Submit" name="submit" class="submit">
          </div>
      </form>
      <?php
        if(isset($_POST['submit'])) {
          $cityA = $_POST['cityA'];
          $cityB = $_POST['cityB'];
          $city = array (
            "Navsari",
            "Surat",
            "Ahmedabad",
            "Kutchh",
            "Mumbai"
          );

          $distance = array (
            array (0, 40, 398, 733, 426),
            array (40, 0, 358, 693, 466),
            array (398, 358, 0, 362, 850),
            array (733, 693, 362, 0, 1162),
            array (426, 466, 850, 1162, 0)
          );

          $result = $distance[$cityA][$cityB];
          print "<h3>The distance between ";
          print "$city[$cityA] to $city[$cityB]";
          print " is $result Kms.</h3>";
        }
        ?>
	</div>
</body>
</html><?php
    $cards = array( array("C_A","C_K","C_Q","C_J","C_10","C_9","C_8","C_7","C_6","C_5","C_4","C_3","C_2"),
                    array("H_A","H_K","H_Q","H_J","H_10","H_9","H_8","H_7","H_6","H_5","H_4","H_3","H_2"),
                    array("D_A","D_K","D_Q","D_J","D_10","D_9","D_8","D_7","D_6","D_5","D_4","D_3","D_2"),
                    array("S_A","S_K","S_Q","S_J","S_10","S_9","S_8","S_7","S_6","S_5","S_4","S_3","S_2")
    );
    echo "Decending Order";
    echo "<table border='1px'>";
    for( $i = 0; $i < 4; $i++ )
    {
        echo "<tr>";
        for( $j = 0; $j < 13; $j++ )
        {
            echo "<td>";
            echo $cards[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table> <br>";

    echo "Accending Order";
    echo "<table border='1px'>";
    for( $i = 3; $i >= 0; $i-- )
    {
        echo "<tr>";
        for( $j = 12; $j >= 0; $j-- )
        {
            echo "<td>";
            echo $cards[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table> <br>";

    echo "After Shuffle";
    echo "<table border='1px'>";
    shuffle($cards);
    for( $i = 0; $i < 4; $i++ )
    { 
        echo "<tr>";
       for( $j = 0; $j < 13; $j++ )
       {
            shuffle($cards);
            shuffle($cards[0]);
            while( $cards[$i][$j] == "" )
            {
                shuffle($cards);
                shuffle($cards[0]);
            }
            echo "<td>";
            echo $cards[$i][$j];
            echo "</td>";
            $cards[$i][$j] = "";
       }
       echo "</tr>";
    }
    echo "</table>";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 1 XT13</title>
</head>
<body>
	<?php
	$i = 0;
	if(file_exists("files/studinfo.txt")) {
		$f1Handle = @fopen("files/studinfo.txt", "rb");
		
		$fn = fopen("files/studinfo.txt","r");
		while(! feof($fn))  {
			$array[$i++] = fgets($fn);
		}
		fclose($fn);
		echo '<table border="1" style="border: solid 3px #808080;">';
		while($i--) {
			echo "<tr>";
			echo "<td>";
			echo $array[$i];
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
		fclose($f1Handle);
	} else {
		echo "No such File Exists";
	}
	?>
</body>
</html>	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 XT14</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="box">
    <?php
        function number($value,$key)
        {
            echo "<br>The $key called $value ";
        }
            $arr = array("1"=>"one","2" => "two","3" => "three","4" => "four","5" => "five");
            $temp = "hello";
            $temparr = array("temp" => "Morning", "temp2" => "Night", "temp3" => "Evening");

            echo "<table border = '1'>";
            echo "<tr><td>Each : </td><td>";
            print_r (each($arr));

            echo "</td></tr> <br> <tr><td>Current : </td><td>" . current($arr) . "</td></tr>";

            echo "<br> <tr><td> Reset : </td><td>" . reset($arr). "</td></tr>";

            echo "<br> <tr><td> End : </td><td>" . end($arr). "</td></tr>";

            echo "<br> <tr><td> POS : </td><td>" . pos($arr). "</td></tr>";

            echo "<br> <tr><td> Prev : </td><td>" . prev($arr) . "<br><tr><td>Array_Walk : </td><td>";

            echo "</td></tr> <br> <tr><td> Array_walk Return : </td><td>" . array_walk($temparr,"number"). "</td></tr>";

            echo "<br> <tr><td> Count : </td><td>" . count($arr). "</td></tr>";

            echo "<br> <tr><td>Sizeof : </td><td>" . sizeof($arr) . "</td></tr> <br> <tr><td>Array_count_values : </td><td>";
            
            print_r  (array_count_values($arr));
            echo "</td></tr>";

            extract($temparr);
            echo "<br> <tr><td>Extract : </td><td>" . $temp . "</td></tr></table>";
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 XT15</title>
</head>
<body>
<?php

$str = "pradip karmakar";
echo "<center>";
echo '<table border = 1 >';

echo "<tr><td>";
echo "trim ";
echo "</td><td>";
echo trim($str,"kar"); 
echo "</td></tr>";

echo "<tr><td>";
echo "rtrim ";
echo "</td><td>";
echo rtrim($str,"kar"); 
echo "</td></tr>";

echo "<tr><td>";
echo "ltrim ";
echo "</td><td>";
echo ltrim($str,"pra"); 
echo "</td></tr>";

echo "<tr><td>";
echo "STR_PAD_LEFT ";
echo "</td><td>";
echo str_pad($str, 30, "*", STR_PAD_LEFT); 
echo "</td></tr>";

echo "<tr><td>";
echo "STR_PAD_BOTH ";
echo "</td><td>";
echo str_pad($str, 30, "*", STR_PAD_BOTH); 
echo "</td></tr>";

echo "<tr><td>";
echo "STR_PAD";
echo "</td><td>";
echo str_pad($str, 30, "*"); 
echo "</td></tr>";

echo "<tr><td>";
echo "lcfirst(Lower case)";
echo "</td><td>"; 
echo lcfirst("Hey siri!");
echo "</td></tr>";

echo "<tr><td>";
echo "ucfirst(Upper case)";
echo "</td><td>"; 
echo ucfirst("hey siri !");
echo "</td></tr>";

echo "<tr><td>";
echo "ucwords";
echo "</td><td>"; 
echo ucwords("Hey siri !");
echo "</td></tr>";


echo "<tr><td>";
echo "Strtolower";
echo "</td><td>"; 
echo Strtolower($str);
echo "</td></tr>";


echo "<tr><td>";
echo "strtoupper";
echo "</td><td>"; 
echo strtoupper($str);
echo "</td></tr>";


echo "<tr><td>";
echo "strrev";
echo "</td><td>"; 
echo strrev($str);
echo "</td></tr>";

echo "<tr><td>";
echo "str_shuffle (ymmv)";
echo "</td><td>"; 
echo str_shuffle($str);
echo "</td></tr>";

echo "<tr><td>";
echo "str_repeat";
echo "</td><td>"; 
echo str_repeat(" P.J.D.A ", 5);
echo "</td></tr>";

$str2 = "Hello World Its Pradip Karmakar";
echo "<tr><td>";
echo "explode";
echo "</td><td>"; 
print_r(explode(' ', $str2, 1));
echo "</td></tr>";

$arr = array('Hello','Wolrd','Its','Pradip','Karmakar');
echo "<tr><td>";
echo "implode";
echo "</td><td>"; 
echo implode("<b>+</b>", $arr);
echo "</td></tr>";

echo "<tr><td>";
echo "strcmp";
echo "</td><td>"; 
echo strcmp("Pradip","pradip");
echo "</td></tr>";

echo "<tr><td>";
echo "strcasecmp";
echo "</td><td>"; 
echo strcasecmp("Pradip","pradip");
echo "</td></tr>";

echo "<tr><td>";
echo "strlen";
echo "</td><td>"; 
echo strlen("Pradip Karmakar");
echo "</td></tr>";

echo "<tr><td>";
echo "strstr";
echo "</td><td>"; 
echo strstr("Pradip Karmakar", " ");
echo "</td></tr>";

echo "<tr><td>";
echo "stristr";
echo "</td><td>"; 
echo stristr("Pradip Karmakar", " K");
echo "</td></tr>";

echo "<tr><td>";
echo "strrstr(true)";
echo "</td><td>"; 
echo strchr("Hello world world!","world",true);
echo "</td></tr>";

echo "<tr><td>";
echo "strchr";
echo "</td><td>"; 
echo strchr("Hello world world!","world");
echo "</td></tr>";

echo "<tr><td>";
echo "strrchr";
echo "</td><td>"; 
echo strrchr("Hello world world!","world");
echo "</td></tr>";


echo "<tr><td>";
echo "strpos";
echo "</td><td>"; 
echo strpos("Ajinkya php, php","php");
echo "</td></tr>";

echo "<tr><td>";
echo "strrpos";
echo "</td><td>"; 
echo strrpos("Ajinkya php, php","php") . "<br>";
echo "</td></tr>";


echo "<tr><td>";
echo "substr_replace";
echo "</td><td>"; 
echo substr_replace("Bobby", 'bob', 0) . "<br>";
echo "</td></tr>";



echo "<tr><td>";
echo "str_replace";
echo "</td><td>"; 
echo str_replace("Pradip", "Supriya", "Pradip Karmakar") . "<br>";
echo "</td></tr>";

echo "</table>";
echo "</center>";

?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 XT16</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="box">
        <form method="POST">
            <div>
                <input type="text" placeholder="Enter Your Name" name="uname" autocomplete="off" required>
            </div>
            <div>
                <input type="text" placeholder="Enter Your Password" name="pass" autocomplete="off" required>
            </div>
            <div>
                <input type="submit" name="submit" class="submit" value="check">   
            </div>
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                if(preg_match("/^[A-Za-z]+[A-Za-z0-9]/", $_POST["uname"]) === 0)
                {
                    echo"Invalid format in UserName";
                    die();
                }
                else{
                    if(preg_match("/[a-zA-Z0-9]+[?!0-9]/", $_POST['pass']) == 0)
                    {
                        echo"Invalid format Of password";
                        die();
                    }
                    else{
                        echo "Username = " . $_POST['uname'] . "<br> Password = " .  $_POST['pass'] ;
                    }
                }
            }
        ?>
    </div>
</body>
</html>
