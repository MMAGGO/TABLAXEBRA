  <?php
   $f=10;
   $col=10;
   $num=1;
   $grey=true;
   $pr='';
  ?> 
<!DOCTYPE html PUBLIC >
<html>
<head>
<title>tablas zebra</title>
</head>
  <style>
  tr{
  background-color: pink;
   }
  tr:nth-child(2n+1){
  background-color: purple;
   }
  </style>

<body aling="center">
	<div>
		
	<table border="1px">
		   <?php
	for($t=0;$t<$f;$t++){
			echo "<tr>";
		if ($t%2==0){
		$alfa='alfa=par';
			}
		else{
		$alfa='alfa=impar';
			} 
	for($y=0;$y<$col;$y++){
		if($grey){
		echo "<td style=padding:10px;.$alfa;>".$num."</td>";
		$grey=false;
			$num++;
						}
		else{
			echo "<td style=padding:10px;>".$num."</td>";
				$grey=true;
				$num++;
					}
				}
			echo "</tr>";
		}
	   ?>
	  </table>
	</div>
 </body>                                                                 
</html>
