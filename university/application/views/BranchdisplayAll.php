<html>

<body>
<table border=1>
<caption>List of Branches</caption>
<tr>
<th>University Id</th>
<th>Branch Id</th>
<th>Branch Name</th>
<th>Branch Icon</th>
<th>Total Semester</th>
<th>Operations</th>
</tr>

<?php
foreach($result as $row)
{ 
	echo "<tr><td>$row->uid</td><td>$row->branchid</td><td>$row->branchname</td><td><img src=/university/image/branch/$row->branchicon width=60 height=60></td><td>$row->totalsem</td><td><a href=branchDisplayById?branchid=$row->branchid><buttonUpdateand Delete</button></a><a href=../subjectController/subjectview?branchid=$row->branchid><button>Insert Subjects</button></a></td></tr>";
}
?>
</table>
</body>
</html>