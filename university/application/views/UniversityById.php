<script src='/university/asset/jquery-2.2.1.min.js'></script>
<script src='/university/asset/statecity1.js'></script>
<?php
extract($result);
?>
<html>

<table border="1">
<tr>
<td valign='top'>
<form action='update' method='post'>
<input type="hidden" name='uid' value='<?php echo $uni_id; ?>'>
<table>
<caption><b><i>University Register [Update]</i></b></caption>
<tr>
<td><b><i>University Name:</i></b></td>
<td><input type='text' name='uname' value='<?php echo $uni_name; ?>'>
</td>
</tr>

<tr>
<td><b><i>Email Id:</i></b></td>
<td><input type='email' name='uemail' value='<?php echo $email; ?>'>
</td>
</tr>

<tr>
<td><b><i>Contact Person:</i></b></td>
<td><input type='text' name='uperson' value='<?php echo $contect_person; ?>'>
</td>
</tr>

<tr>
<td><b><i>Mobile:</i></b></td>
<td><input type='text' name='umbl' value='<?php echo $mobile; ?>'>
</td>
</tr>

<tr>
<td><b><i>Phone No:</i></b></td>
<td><input type='text' name='uph' value='<?php echo $phone; ?>'>
</td>
</tr>

<tr>
<td><b><i>Address:</i></b></td>
<td><textarea name='uaddress' rows='3' cols='25'>
<?php echo $address; ?></textarea>
</td>
</tr>


<tr>
<td><b><i>State:</i></b></td>
<td><input type='hidden' name='pstate' value='<?php echo $state; ?>'><?php echo $state; ?><br><select id='state' name='state'></select>
</td>
</tr>

<tr>
<td><b><i>City:</i></b></td>
<td><input type='hidden' name='pcity' value='<?php echo $city; ?>'><?php echo $city; ?><br><select id='city' name='city'></select>
</td>
</tr>



<tr>
<td><b><i>Pincode:</i></b></td>
<td><input type='text' name='upin' value='<?php echo $pincode; ?>'>
</td>
</tr>


<tr>
<td><b><i>Description:</i></b></td>
<td><input type='text' name='des' value='<?php echo $description; ?>'>
</td>
</tr>




<tr>
<td><input type='submit' value='Edit' name='btn'></td>
<td><input type='submit' value='Delete' name='btn'>
</td>
</tr>

</table>
</form>
</td>
<td valign='top'>
<img src='/university/image/university/<?php echo $logo;?>' width='200' height='200'><br>
<form action='editpicture' method='post' enctype='multipart/form-data'>
<input type='hidden' name='uid' value='<?php echo $uni_id; ?>'><br><br>
<b><i>Edit Above Picture:</i></b><br><br>
<input type='file' name='logo'><br><br>
<input type="submit" value='Edit Picture' >
</form>



</td>

</tr>
<br>
<br>
<?php echo $msg; ?>

</table>
</html>

