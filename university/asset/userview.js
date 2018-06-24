$(document).ready(

function()
{
	$("#udialog").dialog({
	            modal: true, 
	            autoOpen: false,
	            title: "University Information",
	            width:375,

        });


	$('#pat').keyup(function()
		{
			$.getJSON('/university/index.php/UserViewController/displayAllUniversitiesByName',{ajax:true,pat:$('#pat').val()}, function(data)
			{ htm="<table border='1' cellspacing=10 cellpadding=7>";
			  c=1;
			$.each(data,function(i,item){
				//alert('Hello'+item);
				if(c==1)
				{htm+="<tr>";}

				htm+="<td align='center'><img src='/university/image/university/"+item.logo+"' width=120 height=120><br><b>"+item.uni_name+"<br>"+item.state+","+item.city+"</b><br><input type='button' class='btnv'  ur='"+JSON.stringify(item)+"' value='View More'><input type='button' class='btnbrnh'  ub='"+JSON.stringify(item)+"' value='View Branches'></td>";
				c++;
				if(c==5)
				{htm+="</tr>";
				  c=1;}

				});
				htm+="</table>";
				$('#ul').html(htm);

				});
		});

		 $('#ul').on('click','.btnv',function()
    { //alert($(this).attr('uname')+","+$(this).attr('cperson'));
        rec=$.parseJSON($(this).attr('ur'));
		//alert(rec.uname);
		htm="<table cellspacing=3 cellpadding=2 width=100%>";
		htm+="<tr><td><img src='/university/image/university/"+rec.logo+"' width=70 height=70></td><td>"+rec.description+"</td></tr></table><br>";


		htm+="<table cellspacing=3 cellpadding=2 width=100%>";
		htm+="<tr><td><b><i>University Name:</i></b></td><td>"+rec.uni_name+"</td></tr>";
		htm+="<tr valign='top'><td><b><i>Address:</i></b></td><td>"+rec.address+"<br>"+rec.city+","+rec.state+"</td></tr>";
 
		htm+="<tr><td><b><i>Contact Person:</i></b></td><td>"+rec.contect_person+"</td></tr>";

		htm+="<tr><td><b><i>Email Id:</i></b></td><td>"+rec.email+"</td></tr>";
		htm+="<tr><td><b><i>Mobile:</i></b></td><td>"+rec.mobile+"</td></tr>";

		htm+="</table>";

      $('#udialog').html(htm);
       $('#udialog').dialog('open');

		});

 $('#ul').on('click','.btnbrnh',function()
    {
    	item=$.parseJSON($(this).attr('ub'));
		window.location='/university/index.php/UserviewController/displayAllBranchesByUniversityId?uni_id='+item.uni_id+"&uni_name="+item.uni_name+"&city="+item.city+"&state="+item.state+"&logo="+item.logo;
	});



		});