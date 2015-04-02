<?php

	require_once('../mysqli_connect.php');
	
	$query = "SELECT first_name, last_name, ID";
	
	$response = @mysqli_query($mysqli, $query);
	
	if($response){
		echo '<table align="left" cellspacing="5" cellpadding="8">
	
		<tr>
			<th align="left"`><b>First Name</b></th>
			<th align="left"`><b>Last Name</b></th>
			<th align="left"`><b>ID</b></th>
		</tr>';	
	
		while($row = mysqli_fetch_array($response)){
		
			echo'<tr><td align=left">' . $row[first_name] . '</td>' .
					'<td align=left">' . $row[last_name] . '</td>' .
					'<td align=left">' . $row[first_name] . '</td>' ;
					
			echo '</tr>';
			
		}
		
		echo '</table>';
	
	
	} else{
	
		echo "Couldn't issue database query";
		
		echo mysqli_error($mysqli);
		
	}
	
	mysqli_close($mysqli);

	
	
?>