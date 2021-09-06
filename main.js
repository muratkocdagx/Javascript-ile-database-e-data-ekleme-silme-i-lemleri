$(document).ready(function(){
	$(".send").click(function(){
		
		var data={
			full_name : $(".full_name").val(),
			email : $(".email").val(),
			phone : $(".phone").val()

		}

		$.post("http://localhost/javascript/js_database/insert.php", data, function(response){
			if (response == "1") {
				alert("Bilgiler başarılı bir şekilde eklendi.");
				$(".update_btn").click();
			}
			else{
				alert("Bilgiler eklenemedi.");
			}
		});

	});

	$(".number_list").on( "click", ".data_delete", function(response) {
		var index = $(this).attr('id');
  		var delete_data ={ id : index };
		$.post("http://localhost/javascript/js_database/delete.php", delete_data, function(response){
			if (response == "1") {
				alert("Silme İşlemi Başarısız.");
				$(".update_btn").click();
			}
			else{
				alert("Silme İşlemi Başarısız!");
			}
		});
	});

	$(".update_btn").click(function(){
		
		$.get("http://localhost/javascript/js_database/select.php", {}, function(response){
			
			var jsonData = JSON.parse(response);
			$(".number_list").html('');
			$(jsonData).each(function(index, item){
				$(".number_list").append("<li>" + item.full_name + " [ " + item.email + " ] [ " + item.phone + " ] <a href='javascript:;' class='data_delete' id='"+ item.directory_id + "'>Sil</a> </li>")
			});

		});

	});


	




});