
<script src='/university/asset/jquery-2.2.1.min.js'></script>
<script src='/university/asset/unibranchId.js'></script>
<html>

<body>
<?php
extract($result);
?>
<form action="subjectUpdate" method="POST">
<input type="hidden" name="subjectid" value='<?php echo $subjectid; ?>'>
<table border=0>
<caption>Subject Details</caption>
<tr><td>University ID:</td><td><select name="uid" id="uid">-Select University-</select></td></tr>
<tr><td>Branch ID:</td><td><select name="branchid" id="branchid">-Select Branch-</select></td></tr>
<tr><td>Semester:</td><td><select name="sem" id="sem">-Select Semester-</select></td></tr>
<tr><td>Subject Name:</td><td><input type="text" name="subname" value='<?php echo $subjectname; ?>'></td></tr>
<tr><td>Description:</td><td><textarea name="subdesc" rows="5" cols="25" ><?php echo $description; ?></textarea></td></tr>
<tr><td>Status:</td><td>
<?php

if ( $status=="Theory")
{
echo "<input type=radio name=status value=Theory checked>Theory<input type=radio name=status value=Practical>Practical";
}
else
{
	echo "<input type=radio name=status value=Theory >Theory<input type=radio name=status value=Practical checked>Practical";

}
?>
</td>
</tr>
<tr><td><input type="submit" value="Update">&nbsp;&nbsp;<button formaction="subjectDelete">Delete</button></td></tr>
</table>
</form>
<?php echo $msg;?>
</body>
</html>