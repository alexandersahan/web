$('.out-tr').hover(function() {
  $(this).attr('bgcolor', 'FFE5B4');
}, function() {
  $(this).attr('bgcolor', "white");
});

// $('.out-tr td').hover(function() {
//   alert($(this).attr('id'));
// });

//LEAD
$(".lead_editor").on('click', function () {
  $( "#tabs_lead" ).tabs({
      active: 1
    });
    let lead_id = parseInt ( $(this).attr("id") );
    let lead_name = $("#"+lead_id+"lead_name").html();
    let lead_phone = $("#"+lead_id+"lead_phone").html();
    let lead_email = $("#"+lead_id+"lead_email").html();
    $("#lead_id_update").val(lead_id);
    $("#lead_name_update").val(lead_name);
    $("#lead_phone_update").val(lead_phone);
    $("#lead_email_update").val(lead_email);
});


$(".lead_deleter").on('click', function () {
$( "#tabs_lead" ).tabs({
    active: 2
  });
  let lead_id = parseInt ( $(this).attr("id") );
  let lead_name = $("#"+lead_id+"lead_name").html();
  let lead_phone = $("#"+lead_id+"lead_phone").html();
  let lead_email = $("#"+lead_id+"lead_email").html();
  $("#lead_id_delete").val(lead_id);
  $("#lead_name_delete").val(lead_name);
  $("#lead_phone_delete").val(lead_phone);
  $("#lead_email_delete").val(lead_email);
});

//SHOP
$(".shop_editor").on('click', function () {
  $( "#tabs_shop" ).tabs({
      active: 1
    });
    let shop_id = parseInt ( $(this).attr("id") );
    let shop_lead = $("#"+shop_id+"shop_lead").html();
    let shop_address = $("#"+shop_id+"shop_address").html();
    let shop_sold = $("#"+shop_id+"shop_sold").html();
    let shop_bought = $("#"+shop_id+"shop_bought").html();
    let shop_rent = $("#"+shop_id+"shop_rent").html();
    
    $("#shop_id_update").val(shop_id);
    $("#shop_lead_update").val(shop_lead);
    $("#shop_address_update").val(shop_address);
    $("#shop_sold_update").val(shop_sold);
    $("#shop_bought_update").val(shop_bought);
    $("#shop_rent_update").val(shop_rent);
});

$(".shop_deleter").on('click', function () {
$( "#tabs_shop" ).tabs({
    active: 2
  });
  let shop_id = parseInt ( $(this).attr("id") );
  let shop_lead = $("#"+shop_id+"shop_lead").html();
  let shop_address = $("#"+shop_id+"shop_address").html();
  let shop_sold = $("#"+shop_id+"shop_sold").html();
  let shop_bought = $("#"+shop_id+"shop_bought").html();
  let shop_rent = $("#"+shop_id+"shop_rent").html();
  
  $("#shop_id_delete").val(shop_id);
  $("#shop_lead_delete").val(shop_lead);
  $("#shop_address_delete").val(shop_address);
  $("#shop_sold_delete").val(shop_sold);
  $("#shop_bought_delete").val(shop_bought);
  $("#shop_rent_delete").val(shop_rent);
});

//SELLER
$(".seller_editor").on('click', function () {
  $( "#tabs_seller" ).tabs({
      active: 1
    });
    let seller_id = parseInt ( $(this).attr("id") );
    let seller_shop = $("#"+seller_id+"seller_shop").html();
    let seller_name = $("#"+seller_id+"seller_name").html();
    let seller_phone = $("#"+seller_id+"seller_phone").html();
    let seller_email = $("#"+seller_id+"seller_email").html();
    $("#seller_id_update").val(seller_id);
    $("#seller_shop_update").val(seller_shop);
    $("#seller_name_update").val(seller_name);
    $("#seller_phone_update").val(seller_phone);
    $("#seller_email_update").val(seller_email);
});


$(".seller_deleter").on('click', function () {
$( "#tabs_seller" ).tabs({
    active: 2
  });
  let seller_id = parseInt ( $(this).attr("id") );
  let seller_shop = $("#"+seller_id+"seller_shop").html();
  let seller_name = $("#"+seller_id+"seller_name").html();
  let seller_phone = $("#"+seller_id+"seller_phone").html();
  let seller_email = $("#"+seller_id+"seller_email").html();
  $("#seller_id_delete").val(seller_id);
  $("#seller_shop_delete").val(seller_shop);
  $("#seller_name_delete").val(seller_name);
  $("#seller_phone_delete").val(seller_phone);
  $("#seller_email_delete").val(seller_email);
});

//CLIENT
$(".client_editor").on('click', function () {
  $( "#tabs_client" ).tabs({
      active: 1
    });
    let client_id = parseInt ( $(this).attr("id") );
    let client_name = $("#"+client_id+"client_name").html();
    let client_phone = $("#"+client_id+"client_phone").html();
    let client_email = $("#"+client_id+"client_email").html();
    $("#client_id_update").val(client_id);
    $("#client_name_update").val(client_name);
    $("#client_phone_update").val(client_phone);
    $("#client_email_update").val(client_email);
});


$(".client_deleter").on('click', function () {
$( "#tabs_client" ).tabs({
    active: 2
  });
  let client_id = parseInt ( $(this).attr("id") );
  let client_name = $("#"+client_id+"client_name").html();
  let client_phone = $("#"+client_id+"client_phone").html();
  let client_email = $("#"+client_id+"client_email").html();
  $("#client_id_delete").val(client_id);
  $("#client_name_delete").val(client_name);
  $("#client_phone_delete").val(client_phone);
  $("#client_email_delete").val(client_email);
});

//GOODS
$(".goods_editor").on('click', function () {
  $( "#tabs_goods" ).tabs({
      active: 1
    });
    let goods_id = ($(this).attr("id")).slice(0, 6);
    let goods_shop = $("#"+goods_id+"goods_shop").html();
    let goods_name = $("#"+goods_id+"goods_name").html();
    let goods_price = $("#"+goods_id+"goods_price").html();
    let goods_counter = $("#"+goods_id+"goods_counter").html();
    $("#goods_id_update").val(goods_id);
    $("#goods_shop_update").val(goods_shop);
    $("#goods_name_update").val(goods_name);
    $("#goods_price_update").val(goods_price);
    $("#goods_counter_update").val(goods_counter);
});


$(".goods_deleter").on('click', function () {
$( "#tabs_goods" ).tabs({
    active: 2
  });
  let goods_id = ($(this).attr("id")).slice(0, 6);
  let goods_shop = $("#"+goods_id+"goods_shop").html();
  let goods_name = $("#"+goods_id+"goods_name").html();
  let goods_price = $("#"+goods_id+"goods_price").html();
  let goods_counter = $("#"+goods_id+"goods_counter").html();
  $("#goods_id_delete").val(goods_id);
  $("#goods_shop_delete").val(goods_shop);
  $("#goods_name_delete").val(goods_name);
  $("#goods_price_delete").val(goods_price);
  $("#goods_counter_delete").val(goods_counter);
});

//ORDER_STR
$(".order_str_editor").on('click', function () {
  $( "#tabs_order_str" ).tabs({
      active: 1
    });
    let order_str_id = parseInt ( $(this).attr("id") );
    let order_str_article = $("#"+order_str_id+"order_str_article").html();
    let order_str_client = $("#"+order_str_id+"order_str_client").html();
    let order_str_price = $("#"+order_str_id+"order_str_price").html();
    let order_str_counter = $("#"+order_str_id+"order_str_counter").html();
    let order_str_date = $("#"+order_str_id+"order_str_date").html();
    $("#order_str_id_update").val(order_str_id);
    $("#order_str_article_update").val(order_str_article);
    $("#order_str_client_update").val(order_str_client);
    $("#order_str_price_update").val(order_str_price);
    $("#order_str_counter_update").val(order_str_counter);
    $("#order_str_date_update").val(order_str_date);
});


$(".order_str_deleter").on('click', function () {
$( "#tabs_order_str" ).tabs({
    active: 2
  });
  let order_str_id = parseInt ( $(this).attr("id") );
    let order_str_article = $("#"+order_str_id+"order_str_article").html();
    let order_str_client = $("#"+order_str_id+"order_str_client").html();
    let order_str_price = $("#"+order_str_id+"order_str_price").html();
    let order_str_counter = $("#"+order_str_id+"order_str_counter").html();
    let order_str_date = $("#"+order_str_id+"order_str_date").html();
    $("#order_str_id_delete").val(order_str_id);
    $("#order_str_article_delete").val(order_str_article);
    $("#order_str_client_delete").val(order_str_client);
    $("#order_str_price_delete").val(order_str_price);
    $("#order_str_counter_delete").val(order_str_counter);
    $("#order_str_date_delete").val(order_str_date);
});