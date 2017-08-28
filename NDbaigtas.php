
<!DOCTYPE html>
<html>
<head>
	<title>9 Paskaita (PHP)</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
    	<table>
        <tr>
            <th colspan="4">Baseinas</th>
            <th colspan="2">Autocisternu kiekis</th> 
          </tr>
          <tr>
            <th>Ilgis (m.)</th>
            <th>Plotis (m.)</th> 
            <th>Gylis (m.)</th>
            <th>Turis (m3)</th>
            <th>10 (m3)</th>
            <th>30 (m3)</th>
          </tr>
<?php
    
        $p = 3;
        $g = 1.5;

        for ($i = 1; $i <= 10 ; $i++) { 
            $t = $i * $p * $g;
            echo ("<tr><td>");
            echo ($i);
            echo ("</td><td>");
            echo ($p);
            echo ("</td><td>");
            echo ($g);
            echo ("</td><td>");
            echo ($t);
            echo ("</td><td>");
            echo getTrucks(10);
            echo ("</td><td>");
            echo getTrucks(30);
            echo ("</td></tr>");
        }      
        function getTrucks($talpa) {
        global $t;
        $trucks = $t / $talpa;
        return ceil($trucks);
    }
?>
        </table>
    </div>
</body>
</html>

