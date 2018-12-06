<?

if(isset($_POST['insert_post'])){
	
		
		$factor1 = $_POST['factor1'];
		$factor2= $_POST['factor2'];
		$operation = $_POST['operation'];
		$result = $_POST['result'];
		$operation_date = $_POST['operation_date'];
		
			
		
		$query= "INSERT INTO infomedia (factor1, factor2, operation, result, operation_date) 
		VALUES (?,?,?,?,?)";

		 $stmt = $mysqli->prepare($query);
		 $stmt->bind_param("sssss", $val1,$val2,$val3,$val4,$val5);

		 $val1 = $factor1;
		 $val2 = $factor2; 
		 $val3 = $operation;
		 $val4 = $result;
		 $val5 = $operation_date;
		 

		 $stmt->execute();
		 $stmt->close();
				
		 }
		
?>