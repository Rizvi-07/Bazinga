$(document).ready(function(){
	$("#suggest").keyup(function(){
		$.get("autocomplete.php", {company: $(this).val()}, function(data){
			$("datalist").empty();
			$("datalist").html(data);
		});
	});
});