<html>
	<?php

echo "<h4>Id:".$_SESSION["SADMINID"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION["SADMINNAME"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='".base_url()."logout.php'>Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='".base_url()."image/userimage/dheeraj.jpg' height='30' width='30'></h4><hr color=red>";

?>
<body>
	<audio src="\university\sound\glass.mp3" autoplay></audio>
		<table border="0">
			<tr>
				<td valign="top">
					<a href="/university/index.php/UniversityAll/form" target="mn">University Information</a><br>
					<a href="/university/index.php/UniversityAll/displayAll" target="mn">Display Universities</a><br>
					<a href="/university/index.php/BranchController/displayAllBranch" target="mn">Display Branches</a><br>
					<a href="/university/index.php/subjectController/subjectDisplayAll" target="mn">Display subjects</a><br>
					<a href="/university/index.php/paperController/paperView" target="mn">Insert Questions</a>
					
				</td>
				
				<td>
					<iframe  frameborder="0" width="700" height="700" name="mn" ></iframe>
				</td>
			</tr>
		</table>
</body>
</html>