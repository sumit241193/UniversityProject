$(document).ready(
	function(){
$.getJSON('/university/index.php/StateCityController/GetAllState',{ajax:true},function(data){
   $('#state').empty();
   $('#state').append($('<option>').text('-States-'));
   $('#city').append($('<option>').text('-City-'));

   $.each(data,function(i,item){
	      $('#state').append($('<option>').text(item.statename).val(item.state_id));
	   });

	});

$('#state').change(function(){
	$.getJSON('/university/index.php/StateCityController/GetAllCity',{ajax:true,state:$('#state').val()},function(data){

	   $('#city').empty();
	   $('#city').append($('<option>').text('-City-'));

	   $.each(data,function(i,item){
		      $('#city').append($('<option>').text(item.cityname).val(item.city_id));
		   });

	});





	});

		});