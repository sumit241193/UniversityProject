$(document).ready(
	function(){
$.getJSON('/university/index.php/branchController/getuid',{ajax:true},function(data){
   $('#uid').empty();
   $('#uid').append($('<option>').text('Universities'));
  // $('#city').append($('<option>').text('-City-'));

   $.each(data,function(i,item){
	      $('#uid').append($('<option>').text(item.uni_name).val(item.uni_id));
	   });

	});

//$('#state').change(function(){
	//$.getJSON('/university/index.php/StateCityController/GetAllCity',{ajax:true,state:$('#state').val()},function(data){

	   //$('#city').empty();
	  // $('#city').append($('<option>').text('-City-'));

	  // $.each(data,function(i,item){
		   //   $('#city').append($('<option>').text(item.cityname).val(item.city_id));
		   //});

	});





	//});

		//});