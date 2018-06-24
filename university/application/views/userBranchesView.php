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
<br>
<br>
<table border=1 cellspacing=5 cellpadding=5>
<?php
$c=1;
foreach($result as $row)
{if($c==1)
  {
  	echo "<tr>";
  }
 	 $bn=str_replace(" ","+",$row->branchname);
	echo "<td><a href=/university/index.php/userviewcontroller/UserPaperView?semester=$row->totalsem&branchid=$row->branchid&branchname=$bn><b>$row->branchname</b><br><img src=/university/image/branch/$row->branchicon width=60 height=60><br>Total Semester:$row->totalsem</a></td>";
/* echo "<tr>";}
  $bn=str_replace(" ","+",$row->branchname);
echo "<td><a href=/induni/index.php/userviewcontroller/UserPaperView?semester=$row->totalsem&branchid=$row->branchid&branchname=$bn><b> <b>$row->branchname</b><br><img src=/induni/images/branch/$row->branchicon width=60 height=60><br>Total Semester:$row->totalsem</a></td>";*/

$c++;
 if($c==4)
 {$c=1;
 echo "</tr>";
 }
}
?>
</table>
