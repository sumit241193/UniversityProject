<script src='/university/asset/jquery-2.2.1.min.js'></script>
<script src='/university/asset/unibranchId.js'></script>

<html>


<form action="insert_paper" method="post">
<table border="1" cellspacing="5">
	<tr>
		<td>University :</td>
		<td><select name="uid" id="uid"></select></td>
		
	</tr>
	
	<tr>
		<td>Branch :</td>
		<td><select name="branchid" id="branchid"></select></td>
		
	</tr>
	
	<tr>
		<td>Semester :</td>
		<td><select name="sem" id="sem"></select></td>
		
	</tr>
	
	<tr>
		<td>Subject id :</td>
		<td><select name="sname" id="sname"></select></td>
		
	</tr>
	
	<tr>
		<td>Year :</td>
		<td><input type="text" name="year" id="year"/></td>
		
	</tr>
	
	<tr>
		<td>Unit :</td>
		<td><input type="text" name="unit" id="unit"/></select></td>
		
	</tr>
	
	<tr>
		<td>Question No. :</td>
		<td><input type="text" name="qn" id="qn"/></td>
		
	</tr>
	
	<tr>
		<td>Question 1 :</td>
		<td><textarea cols="30" rows="5" name="q1"></textarea></td>
	</tr>
	
	<tr>
		<td>Question 2 :</td>
		<td><textarea cols="30" rows="5" name="q2"></textarea></td>
	</tr>
	<tr>
		<td><input type="submit"/></td>
		<td><input type="reset"/></td>
		
	</tr>
	
</table>
</form>
<?php echo $msg ;?>

</html>