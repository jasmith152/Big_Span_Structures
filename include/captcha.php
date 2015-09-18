<?php
// destroy the session
function captcha(){ 
	//connect to database
	include ('dbconn.php');
	//Set Query
	$sql1 = "SELECT COUNT(id) FROM captcha";
	//Set Query to get total number of coordinates in DB - sql1
	if($result = @mysql_query($sql1))
	{
		//$max = mysql_num_rows($result);
		$max = 5;
		$min = 1;
		//create table
		echo "<table id='table_format' align='left' width='100%' border='0' cellspacing='3' cellpadding='3' style='color:#000'>";
		echo "<tr>";
		echo "<td colspan='2 align='left'><em><font color='red'>*</font> To reduce SPAM, please answer the question below.</em></td>";
		echo "</tr>";
		//get a random number
		$id_number = rand($min,$max);
		//Set Query to get coordinates - sql2
		$sql2 = "SELECT id,question,answer FROM captcha WHERE id=".$id_number."";
		if($result2 = @mysql_query($sql2))
		{
			//display results
			$row = mysql_fetch_array($result2);
			if(empty($row)){
				echo "query pulled no info";
			}else{
			echo "<tr align='left'>";
			echo "<td colspan='2' width='80%'>".$row['question']."&nbsp;&nbsp;&nbsp;";
			echo "<input type='text' size='10' name='user_answer' /></td>";
			echo "<input type='hidden' name='answer' value=".$row['answer'].">";
			echo "</tr>";	
			}
		}
		else
		{
			echo "problem with query: $sql2 = 'SELECT id,question,answer FROM captcha WHERE id='.$id_number.';";
		}
		echo "</table>";
	}
	else
	{
		echo "problem with query: $sql1 = 'SELECT COUNT(*) FROM captcha';";
	}
}
?>