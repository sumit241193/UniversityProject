$(document).ready(
function()
	{

	$('#sem').change(function(){

	$.getJSON('/university/index.php/subjectController/getSubject',{ajax:true,semester:$('#sem').val(),branchid:$('#branchid').val()},function(data){
	   $('#sname').empty();
	   $('#sname').append($('<option>').text('Subjects'));

	   $.each(data,function(i,item){
		      $('#sname').append($('<option>').text(item.subjectname).val(item.subjectid));
		   });
	    });

	});
	});