//LEAD
$("#create_lead_form").submit(function() {
	$( "#tabs_lead" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/lead/create_lead.php",
		data: $(this).serialize()
	}).done(function() {
		
		let lead_name = $("#lead_name_create").val();
		let lead_phone = $("#lead_phone_create").val();
		let lead_email = $("#lead_email_create").val();
		$('#lead_table').append('<tr><td class="btn btn-success">НОВИЙ</td><td>'+lead_name+'</td><td>'+lead_phone+'</td><td>'+lead_email+'</td></tr>');
	});
	return false;
});

$("#update_lead_form").submit(function() {
	$( "#tabs_lead" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/lead/update_lead.php",
		data: $(this).serialize()
	}).done(function() {
		let lead_id = $("#lead_id_update").val();
		let lead_name = $("#lead_name_update").val();
		let lead_phone = $("#lead_phone_update").val();
		let lead_email = $("#lead_email_update").val();
		$("#"+lead_id+"lead_tr").attr("bgcolor", "FAF0BE");
		$("#"+lead_id+"lead_name").html(lead_name);
		$("#"+lead_id+"lead_phone").html(lead_phone);
		$("#"+lead_id+"lead_email").html(lead_email);
		//$('#lead_table').append('<tr><td>'+lead_id+'</td><td>'+lead_name+'</td><td>'+lead_phone+'</td><td>'+lead_email+'</td><td class="btn btn-info">ЗМІНЕНО</td></tr>');
	});
	return false;
});




$("#delete_lead_form").submit(function() {
	$( "#tabs_lead" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/lead/delete_lead.php",
		data: $(this).serialize()
		}).done( function () {
			let lead_id = $("#lead_id_delete").val();
			$("#"+lead_id+"lead_tr").attr("bgcolor", "FF7F50");
			setTimeout(function(){
				$("#"+lead_id+"lead_tr").remove();
			}, 1000);	
		});
	return false;
});

//SHOP
$("#create_shop_form").submit(function() {
	$( "#tabs_shop" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/shop/create_shop.php",
		data: $(this).serialize()
	}).done(function() {
		
		let shop_lead = $("#shop_lead_create").val();
		let shop_address = $("#shop_address_create").val();
		let shop_sold = $("#shop_sold_create").val();
		let shop_bought = $("#shop_bought_create").val();
		let shop_rent = $("#shop_rent_create").val();
		
		$('#shop_table').append('<tr><td class="btn btn-success">НОВИЙ</td><td>'+shop_lead+'</td><td>'+shop_address+'</td><td>'+shop_sold+'</td><td>'+shop_bought+'</td><td>'+shop_rent+'</td></tr>');
	});
	return false;
});

$("#update_shop_form").submit(function() {
	$( "#tabs_shop" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/shop/update_shop.php",
		data: $(this).serialize()
	}).done(function() {
		let shop_id = $("#shop_id_update").val();
		let shop_lead = $("#shop_lead_update").val();
		let shop_address = $("#shop_address_update").val();
		let shop_sold = $("#shop_sold_update").val();
		let shop_bought = $("#shop_bought_update").val();
		let shop_rent = $("#shop_rent_update").val();
		$("#"+shop_id+"shop_tr").attr("bgcolor", "FAF0BE");
		$("#"+shop_id+"shop_lead").html(shop_lead);
		$("#"+shop_id+"shop_address").html(shop_address);
		$("#"+shop_id+"shop_sold").html(shop_sold);
		$("#"+shop_id+"shop_bought").html(shop_bought);
		$("#"+shop_id+"shop_rent").html(shop_rent);
		//$('#lead_table').append('<tr><td>'+lead_id+'</td><td>'+lead_name+'</td><td>'+lead_phone+'</td><td>'+lead_email+'</td><td class="btn btn-info">ЗМІНЕНО</td></tr>');
	});
	return false;
});

$("#delete_shop_form").submit(function() {
	$( "#tabs_shop" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/shop/delete_shop.php",
		data: $(this).serialize()
		}).done( function () {
			let shop_id = $("#shop_id_delete").val();
			$("#"+shop_id+"shop_tr").attr("bgcolor", "FF7F50");
			setTimeout(function(){
				$("#"+shop_id+"shop_tr").remove();
			}, 1000);	
		});
	return false;
});


//SELLER
$("#create_seller_form").submit(function() {
	$( "#tabs_seller" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/seller/create_seller.php",
		data: $(this).serialize()
	}).done(function() {
		let seller_shop = $("#seller_shop_create").val();
		let seller_name = $("#seller_name_create").val();
		let seller_phone = $("#seller_phone_create").val();
		let seller_email = $("#seller_email_create").val();
		$('#seller_table').append('<tr><td class="btn btn-success">НОВИЙ</td><td>'+seller_shop+'</td><td>'+seller_name+'</td><td>'+seller_phone+'</td><td>'+seller_email+'</td></tr>');
	});
	return false;
});

$("#update_seller_form").submit(function() {
	$( "#tabs_seller" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/seller/update_seller.php",
		data: $(this).serialize()
	}).done(function() {
		let seller_id = $("#seller_id_update").val();
		let seller_shop = $("#seller_shop_update").val();
		let seller_name = $("#seller_name_update").val();
		let seller_phone = $("#seller_phone_update").val();
		let seller_email = $("#seller_email_update").val();
		$("#"+seller_id+"seller_tr").attr("bgcolor", "FAF0BE");
		$("#"+seller_id+"seller_shop").html(seller_shop);
		$("#"+seller_id+"seller_name").html(seller_name);
		$("#"+seller_id+"seller_phone").html(seller_phone);
		$("#"+seller_id+"seller_email").html(seller_email);
	});
	return false;
});

$("#delete_seller_form").submit(function() {
	$( "#tabs_seller" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/seller/delete_seller.php",
		data: $(this).serialize()
		}).done( function () {
			let seller_id = $("#seller_id_delete").val();
			$("#"+seller_id+"seller_tr").attr("bgcolor", "FF7F50");
			setTimeout(function(){
				$("#"+seller_id+"seller_tr").remove();
			}, 1000);	
		});
	return false;
});

//CLIENT
$("#create_client_form").submit(function() {
	$( "#tabs_client" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/client/create_client.php",
		data: $(this).serialize()
	}).done(function() {
		
		let client_name = $("#client_name_create").val();
		let client_phone = $("#client_phone_create").val();
		let client_email = $("#client_email_create").val();
		$('#client_table').append('<tr><td class="btn btn-success">НОВИЙ</td><td>'+client_name+'</td><td>'+client_phone+'</td><td>'+client_email+'</td></tr>');
	});
	return false;
});

$("#update_client_form").submit(function() {
	$( "#tabs_client" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/client/update_client.php",
		data: $(this).serialize()
	}).done(function() {
		let client_id = $("#client_id_update").val();
		let client_name = $("#client_name_update").val();
		let client_phone = $("#client_phone_update").val();
		let client_email = $("#client_email_update").val();
		$("#"+client_id+"client_tr").attr("bgcolor", "FAF0BE");
		$("#"+client_id+"client_name").html(client_name);
		$("#"+client_id+"client_phone").html(client_phone);
		$("#"+client_id+"client_email").html(client_email);
	});
	return false;
});

$("#delete_client_form").submit(function() {
	$( "#tabs_client" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/client/delete_client.php",
		data: $(this).serialize()
		}).done( function () {
			let client_id = $("#client_id_delete").val();
			$("#"+client_id+"client_tr").attr("bgcolor", "FF7F50");
			setTimeout(function(){
				$("#"+client_id+"client_tr").remove();
			}, 1000);	
		});
	return false;
});

//GOODS
$("#create_goods_form").submit(function() {
	$( "#tabs_goods" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/goods/create_goods.php",
		data: $(this).serialize()
	}).done(function() {
		let goods_id = $("#goods_id_create").val();
		let goods_shop = $("#goods_shop_create").val();
		let goods_name = $("#goods_name_create").val();
		let goods_price = $("#goods_price_create").val();
		let goods_counter = $("#goods_counter_create").val();
		$('#goods_table').append('<tr><td>'+goods_id+'</td><td>'+goods_shop+'</td><td>'+goods_name+'</td><td>'+goods_price+'</td><td>'+goods_counter+'</td></tr>');
	});
	return false;
});

$("#update_goods_form").submit(function() {
	$( "#tabs_goods" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/goods/update_goods.php",
		data: $(this).serialize()
	}).done(function() {
		let goods_id = $("#goods_id_update").val();
		let goods_shop = $("#goods_shop_update").val();
		let goods_name = $("#goods_name_update").val();
		let goods_price = $("#goods_price_update").val();
		let goods_counter = $("#goods_counter_update").val();
		$("#"+goods_id+"goods_tr").attr("bgcolor", "FAF0BE");
		$("#"+goods_id+"goods_shop").html(goods_shop);
		$("#"+goods_id+"goods_name").html(goods_name);
		$("#"+goods_id+"goods_price").html(goods_price);
		$("#"+goods_id+"goods_counter").html(goods_counter);
	});
	return false;
});

$("#delete_goods_form").submit(function() {
	$( "#tabs_goods" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/goods/delete_goods.php",
		data: $(this).serialize()
		}).done( function () {
			alert($("#goods_id_delete").val());
			let goods_id = $("#goods_id_delete").val();
			$("#"+goods_id+"goods_tr").attr("bgcolor", "FF7F50");
			setTimeout(function(){
				$("#"+goods_id+"goods_tr").remove();
			}, 1000);	
		});
	return false;
});


//ORDER_STR
function makeObjArr( globalObjArr ){
	let currentObject = [];
	let order_str_article = $("#order_str_article_create").val();
	let order_str_client = $("#order_str_client_create").val();

	let order_str_price = $("#order_str_price_create").val();
	let order_sum = $("#order_sum").text();
	$("#order_sum").text(Number(order_str_price)+Number(order_sum));
	console.log(order_sum);

	let order_str_counter = $("#order_str_counter_create").val();
	let order_str_date = $("#order_str_date_create").val();
	$('#current_order').append('<tr><td>'+order_str_article+'</td><td>'+order_str_client+'</td><td>'+order_str_price+'</td><td>'+order_str_counter+'</td><td>'+order_str_date+'</td></tr>');
	currentObject = [order_str_article, order_str_client, order_str_price, order_str_counter, order_str_date];
	globalObjArr.push(currentObject);
	currentObject = [];
}

function buyHandler(globalObjArr){
	
	console.log(globalObjArr);
	$.ajax({
		type: "POST",
		url: "forms/order_str/create_order_str.php",
		data: {objArr: globalObjArr},
		success:function(data) {console.log(data);}
	}).done(function() {
		
		globalObjArr.forEach(element => {
			let order_str_article = element[0];
		let order_str_client = element[1];
		let order_str_price = element[2];
		let order_str_counter = element[3];
		let order_str_date = element[4];
		$('#order_str_table').append('<tr><td class="btn btn-success">НОВИЙ</td><td>'+order_str_article+'</td><td>'+order_str_client+'</td><td>'+order_str_price+'</td><td>'+order_str_counter+'</td><td>'+order_str_date+'</td></tr>');
		});
	});
	return false;
}

// function buyHandler(globalObjArr){
// 	alert(globalObjArr[0][0]);
// 	$.ajax({
// 		type: "POST",
// 		url: "forms/order_str/create_order_str.php",
// 		data: $("#create_order_str_form").serialize()
// 	}).done(function() {
		
// 		let order_str_article = $("#order_str_article_create").val();
// 		let order_str_client = $("#order_str_client_create").val();
// 		let order_str_price = $("#order_str_price_create").val();
// 		let order_str_counter = $("#order_str_counter_create").val();
// 		let order_str_date = $("#order_str_date_create").val();
// 		$('#order_str_table').append('<tr><td class="btn btn-success">НОВИЙ</td><td>'+order_str_article+'</td><td>'+order_str_client+'</td><td>'+order_str_price+'</td><td>'+order_str_counter+'</td><td>'+order_str_date+'</td></tr>');
// 	});
// 	return false;
// }

$("#update_order_str_form").submit(function() {
	$( "#tabs_order_str" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/order_str/update_order_str.php",
		data: $(this).serialize()
	}).done(function() {
		let order_str_id = $("#order_str_id_update").val();
		let order_str_shop = $("#order_str_shop_update").val();
		let order_str_name = $("#order_str_name_update").val();
		let order_str_price = $("#order_str_price_update").val();
		let order_str_counter = $("#order_str_counter_update").val();
		let order_str_date = $("#order_str_date_update").val();
		$("#"+order_str_id+"order_str_tr").attr("bgcolor", "FAF0BE");
		$("#"+order_str_id+"order_str_shop").html(order_str_shop);
		$("#"+order_str_id+"order_str_name").html(order_str_name);
		$("#"+order_str_id+"order_str_price").html(order_str_price);
		$("#"+order_str_id+"order_str_counter").html(order_str_counter);
		$("#"+order_str_id+"order_str_date").html(order_str_date);
	});
	return false;
});




$("#delete_order_str_form").submit(function() {
	$( "#tabs_order_str" ).tabs({
        active: 3
      });
	$.ajax({
		type: "POST",
		url: "forms/order_str/delete_order_str.php",
		data: $(this).serialize()
		}).done( function () {
			alert($("#order_str_id_delete").val());
			let order_str_id = $("#order_str_id_delete").val();
			$("#"+order_str_id+"order_str_tr").attr("bgcolor", "FF7F50");
			setTimeout(function(){
				$("#"+order_str_id+"order_str_tr").remove();
			}, 1000);	
		});
	return false;
});
