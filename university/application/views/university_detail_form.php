<script src='/university/asset/jquery-2.2.1.min.js'></script>
<script src='/university/asset/statecity1.js'></script>


<html>

<center>
<form action="insert_value" method="post" enctype="multipart/form-data">

<table>
	<caption>University Detail</caption>
	
	<tr>
		<td>University Name :</td>
		<td><input type="text" name="uname"/></td>
	</tr>
	
	<tr>

		<td>University Email :</td>
		<td><input type="text" name="uemail"/></td>
	</tr>
	
	<tr>
		<td>Contect Person :</td>
		<td><input type="text" name="uperson"/></td>
	</tr>
	
	<tr>
		<td>MobilE No : :</td>
		<td><input type="text" name="umbl"/></td>
	</tr>
	
	<tr>
		<td>Phone Name :</td>
		<td><input type="text" name="uph"/></td>
	</tr>
	
	<tr>
		<td>Address :</td>
		<td><textarea name="uaddress" cols="25" rows="3">This is example</textarea></td>
	</tr>
	
	<tr>
		<td>State :</td>
		<td><select id='state' name='state'></select></td>
	</tr>
	
	<tr>
		<td>City :</td>
		<td><select id='city' name='city'></select></td>
	</tr>
	
	<tr>
		<td>Pincode :</td>
		<td><input type="text" name="pincode"/></td>
	</tr>
	
	<tr>
		<td>Description :</td>
		<td><textarea name="des" cols="25" rows="5">This is exampleThis is exampleThis is exampleThis is example</textarea></td>
	</tr>
	
	<tr>
		<td>Logo :</td>
		<td><input type="file" name="logo"/></td>
	</tr>
	
	
	<tr>
		<td><input type="submit" /></td>
		<td><input type="reset" />&nbsp;&nbsp;&nbsp;<button formaction="displayAll">All Record</button></td>
		
	</tr>
	
	
</table>
<br />
<br />
<?php echo $msg ;?>

</form>
</center>


</html>