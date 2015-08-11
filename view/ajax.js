
$(document).ready(function(){
	$("#panel").click(function(){
		$("#panel").hide().fadeIn();
		id= .getElementById("id").value
		qty=documendocumentt.getElementById("qty").value
		add= document.getElementById("add").value
		app="Mua Hàng";
		$.ajax({
			url:"get.php",
			type:"post",
			data:"id="+id+"&qty="+qty+"&add="+add,
			async:true,
			success:function(result){// biến result lấy dữ liệu trả về từ get.php
				$("#panel").html(result);
			setTimeout(function(){$("#panel").html(app).hide().fadeIn();},2000);				

				
			}	
		});
	});
});
