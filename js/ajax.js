
$(document).ready(function(){
	$("#panel").click(function(){
		$("#panel").hide().fadeIn();
		product_id= document.getElementById("product_id").value
		product_qty=document.getElementById("product_qty").value
		add= document.getElementById("add").value
		app="THÊM VÀO GIỎ HÀNG";
				

		$.ajax({
			url:"../cart/index.php",
			type:"post",
			data:"product_id="+product_id+"&product_qty="+product_qty+"&add="+add,
			async:true,
			success:function(result){// biến result lấy dữ liệu trả về từ get.php
				$("#panel1").html(result);
				
			setTimeout(function(){				

				$("#panel").html(app).hide().fadeIn();},2000);				
				document.getElementById("panel").innerHTML="ĐÃ THÊM VÀO";
			}	
		});
	});
});
