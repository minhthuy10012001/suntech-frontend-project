var str = "";
var n = str.search("");


let paymenPrice = 0;
//tinh tong tien 
$("#btn-payment").click(() => {
	var oldPrice = parseInt($("#tt").html() == ""? 0 : $("#tt").html() );
	var nums = parseInt($("#inp_nums").val());
	var price = parseInt($("#sl_price").val());

	//alert(nums * price);
	$("#tt").html(oldPrice + nums * price);
	paymenPrice = oldPrice + nums * price;
	$("#list_order").append(` 
		<tr>
			<td>${$("#sp").val()}</td>
			<td>${price}</td>
			<td>${nums}</td>
		</tr>

	`)
})

$("#access-payment").click(() => {
	var name = $("#inpName").val();
	var address = $("#inpAddress").val();
	var phone = $("#inpPhone").val();

	$("#order-name").html(name);
	$("#order-address").html(address);
	$("#order-phone").html(phone);
	$("#order-price").html(paymenPrice);
});
