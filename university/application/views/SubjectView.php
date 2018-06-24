<script src='/university/asset/jquery-2.2.1.min.js'></script>
<script src='/university/asset/unibranchId.js'></script>

<html>

<body>
<form action="subjectInsert" method="POST">
<table border=0>
<caption>Subject Details</caption>
<tr><td>University ID:</td><td><select name="uid" id="uid">-Select University-</select></td></tr>
<tr><td>Branch ID:</td><td><select name="branchid"  id="branchid">-Select Branch-</select></td></tr>
<tr><td>Semester:</td><td><select name="sem"  id="sem">-Select semester-</select></tr>
<tr><td>Subject Name:</td><td><input type="text" name="subname"></td></tr>
<tr><td>Description:</td><td><textarea name="subdesc" rows="5" cols="25"></textarea></td></tr>
<tr><td>Status:</td><td><input type="radio" name="status" value="Theory">Theory<input type="radio" name="status" value="Practical">Practical</td></tr>
<tr><td><input type="submit">&nbsp;&nbsp;<input type="reset"></td><td><button formaction='subjectDisplayAll'>Display Subjects</button></td></tr>
</table>
</form>
<?php echo $msg;?>
</body>
</html>