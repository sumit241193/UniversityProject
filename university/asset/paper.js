$(document).ready(
function()
	{

	$('#year').change(function()
		{
			$.getJSON('/university/index.php/UserviewController/getPaperBySemAndBranch',{ajax:true,sname:$('#sname').val(),year:$('#year').val()}, function(data)
			{ htm="<table width=80% border='1' cellspacing=7 cellpadding=7>";

			$.each(data,function(i,item){
				 htm+="<tr>";

				htm+="<td valign=top>"+item.qno+"<td valign=top>"+item.q1+"<br>Or<br>"+item.q2+"</td>";


				htm+="</tr>";


				});
				htm+="</table>";
				$('#result').html(htm);

				});
		});

	});