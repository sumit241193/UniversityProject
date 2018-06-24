<html>

<table border=1 cellspacing="2" cellpadding="5">
<caption> List of Subjects</caption>
<tr>
<th>Branch ID</th>
<th>Subject ID</th>
<th>Semester</th>
<th>Subject Name</th>
<th>Description</th>
<th>Status</th>
<th>Operations</th>


</tr>
<?php
foreach ($result as $row)
{ 
	echo "
<tr>
<td>$row->branchid</td><td>$row->subjectid</td><td>$row->semester</td><td>$row->subjectname</td><td>$row->description</td><td>$row->status</td><td><button><a href=subjectDisplayById?subjectid=$row->subjectid>Update/Delete</a></button></td>

</tr>";
}
?>
</table>

</html>