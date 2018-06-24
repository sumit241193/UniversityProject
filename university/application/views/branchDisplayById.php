<html>

<body>
<?php
extract($result);

?>
<form action="branchUpdate" method="POST" enctype="multipart/form-data">
<input type="hidden" name="branchid" value="<?php echo $branchid; ?>">
<table border=1>
<caption>Branch Details</caption>
<tr>
<tr><td>Branch icon:</td><td><img src="/university/image/branch/<?php echo $branchicon; ?>" width=200 height=200><br><br><input type="file" name="bicon" ><br><br> <button formaction="branchUpdateImage">Update image</button></td></tr>
</tr>

<tr>
<tr><td>University ID:</td><td><input type="text" name="uid" value="<?php echo $uid; ?>" ></td></tr>
<tr><td>Branch Name:</td><td><input type="text" name="bname" value="<?php echo $branchname;?>"></td></tr>


<tr><td>Total Semester:</td><td><input type="text" name="totalsem" value=<?php echo $totalsem;?>></td></tr>
<tr><td><input type="submit" value="Edit">&nbsp;&nbsp;<button formaction="branchDelete">Delete</button></td><td><button formaction="displayAllBranch">Display Branches</button></td></tr>
</tr>

</table>
</form>
<?php echo $msg;?>
</body>
</html>