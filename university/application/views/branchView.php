<script src='/university/asset/jquery-2.2.1.min.js'></script>
<script src='/university/asset/universityId.js'></script>


<html>

<form action="insert_branch" method="post" enctype="multipart/form-data">
	<table>
		<caption>Branches Information</caption>
		<tr>
		<td>University Id:</td>
		<td><select name="uid" id="uid"></select></td>
		</tr>
		
		<tr>
		<td></td>
		<td><input type="hidden" name="bid"/></td>
		</tr>
		
		<tr>
		<td>Branch Name:</td>
		<td><input type="text" name="bname"/></td>
		</tr>
		
		<tr>
		<td>Branch Icon:</td>
		<td><input type="file" name="bicon"/></td>
		</tr>
		
		<tr>
		<td>Total Semester:</td>
		<td><input type="text" name="sem"/></td>
		</tr>
		
		<tr>
		<td><input type="submit" /></td>
		<td><input type="reset" /></td>
		</tr>
	
	</table>
	<br>
	<br>
	
</form>

<form action="Show_Branch" method="post">
	
	<input type="submit" value="Show Branch">

</form>
<?php echo $msg ;?>

</html>