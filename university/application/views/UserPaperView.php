<script src="/university/asset/jquery-2.2.1.min.js"></script>
<script src="/university/asset/ss.js"></script>
<script src="/university/asset/paper.js"></script>
<html>
<center>
<table>
<tr>
<td><img src="/university/image/university/<?php echo $_SESSION['logo'];?>" width=80 height=80></td>
<td>
<h3><font color='green'><?php echo $_SESSION['uni_name']; ?></font></h3>
<h4><?php echo $_SESSION['state'].",".$_SESSION['city']; ?>
</td>
</tr>
</table>
<h3><?php  echo $_SESSION['branchname'];?></h3><br>
<input type='text' id='branchid' value="<?php echo $_SESSION['branchid'];?>">
<table cellspacing='20'>
<tr>
<td><select id='sem'><option>-Semester-</option>
<?php
  for($i=1;$i<=$_SESSION['totalsem'];$i++)
  {
  echo "<option>$i</option>";
  }
?>
</select></td>
<td><select id='sname'><option>-Subject-</option></select></td>
<td><select id='year'><option>-Year-</option>
<?php

  for($i=2012;$i<=date('Y');$i++)
  {
  echo "<option>$i</option>";
  }
?>
</select></td>
</tr>
</table>
<div id='result'></div>
</center>
</html>