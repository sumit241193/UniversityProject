<html>

	<table border="1" cellpadding="5" cellspacing="5">
		<caption><i><b><h1>All Universities Record</h1></b></i></caption>
		<tr>
			<th>University </th>
			<th>Address</th>
			<th>Contact<br>Person</th>
			<th>Contact<br>Detail</th>
			<th>Description</th>
			<th>Update</th>
			
		</tr>		
	




<?php
	foreach($result as $row)
	{
		echo "<tr><td><img src='/university/image/university/$row->logo' width=60 height=60><br>$row->uni_name</td><td>$row->address, $row->state<br>$row->city<br>Pincode:$row->pincode</td><td>$row->contect_person</td><td><img src='\university\image\university\mobile_phone.png' width='20' height='20'>$row->mobile<br><img src='\university\image\university\landline.png' width='20' height='20'>$row->phone</td><td>$row->description</td><td><a href=displayById?uni_id=$row->uni_id><button>Edit/Delete</button></a><a href=../BranchController/BranchView?uid=$row->uni_id><button>Insert Branch</button></a></td></tr>";
	}

?>

</table>	
</html>

