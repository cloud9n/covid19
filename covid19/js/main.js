$(document).ready(function () {
	globalfun();
	countryfun();
})

function globalfun()
{
	$.ajax(
		{

			url: 'global1.php',
			type: 'GET',
			dataType: 'JSON',
			//data:JSON.stringify({ }), 
			success: function (data) {
				$('#table').html(data);
			}
		})
}


function countryfun()
{
	$.ajax(
		{

			url: 'include/global.php',
			method: 'GET',
			//dataType: 'JSON',
			success: function (data) {
				$('#country').html(data);
			}
		})
}
