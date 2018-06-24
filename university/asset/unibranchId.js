$(document).ready(
	function(){

	$.getJSON('/university/index.php/branchController/getuid',{ajax:true},function(data){
   $('#uid').empty();
   $('#uid').append($('<option>').text('-Universities-'));
   $('#branchid').append($('<option>').text('Branches'));
   $('#sem').append($('<option>').text('Semesters'));
   $('#sname').append($('<option>').text('Subjects'));
  

   $.each(data,function(i,item){
	      $('#uid').append($('<option>').text(item.uni_name).val(item.uni_id));
	   });

	});

$('#uid').change(function(){
	$.getJSON('/university/index.php/branchController/getbranch',{ajax:true,uid:$('#uid').val()},function(data){
	   $('#branchid').empty();
	   $('#branchid').append($('<option>').text('-Branches-'));

	   $.each(data,function(i,item){
		      $('#branchid').append($('<option>').text(item.branchname).val(item.branchid));
		   });

	});

	$('#branchid').change(function(){
	$.getJSON('/university/index.php/branchController/getSemester',{ajax:true,branchid:$('#branchid').val()},function(data){
		$('#sem').empty();
	   $('#sem').append($('<option>').text('-Semester-'));
	   	for(i=1;i<=data.totalsem;i++)
             {$('#sem').append($('<option>').text(i+""));
				 }
		});

	
	
	   		 });

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
 });

	


		