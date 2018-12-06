

 <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/stil.css">
  
  <html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tablica.css">
</head>
<body>
<div class="wrap">
<h1>Projektni zadatak</h1>
			
				<p><i>Infomedia</i></p>
				<p><i>Ivana Jankovic</i></p>
				
				<hr>
				<table border="2px" solid black class="table">
   <tr>  

    </td>
   </tr> 

factor1: <input type= "text" name= "factor1" id= "factor1" ><br><br>
factor2: <input type= "text" name= "factor2" id= "factor2" ><br><br>
operation: <input type= "text" name= "operation" id= "operation" ><br><br>
result: <input type= "text" name= "result" id= "result" ><br><br>
operation_date: <input type= "text" name= "operation_date" id= "operation_date" ><br><br>





<?php

print("<TR>");
print("<TH>*</TH>");


for($i=1;$i<=10;$i++)
{
print("<TH>$i</TH>");
}
print("</TR>");

for($j=1;$j<=10;$j++)
{
print("<tr><th>$j</th>");

for($k=1;$k<=10;$k++)
{
$result=$j * $k;

print("<td>$j * $k=$result</td>");
}
print("</tr>\n");

}

?>

