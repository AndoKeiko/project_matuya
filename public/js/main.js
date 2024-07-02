$(function () {
  let total_price = 0;
  let savedItems = JSON.parse(sessionStorage.getItem('menuItems')) || [];
  let payment_total = sessionStorage.getItem("total_price");
  savedItems.forEach(function (item) {
    $('#left-up').prepend(item);
  });
  
  $('#payment_total_amount').html("￥"+ payment_total);
  $('#payment_list').html("￥"+ payment_total);

  $('#left-up .menu_price_slip').each(function () {
    let price_str = $(this).text().replace(/[^\d.-]/g, '');
    total_price += parseFloat(price_str);
    $('#total_price').html('￥' + total_price);
  });

  $('.menu_list_item.accounting').on('click', function () {
    let menu_id = $(this).find('.menu_id_input').val()|| '';
    let menu_title = $(this).find('.menu_title_input').val()|| '';
    let menu_price = parseFloat($(this).find('.menu_price_input').val()|| 0);

    let html = '<dl class="item_list flex justify-between font-bold" data-id="'+menu_id+'"><dt class="w-8 flex items-center item_list_item"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt><dd class="w-full flex justify-between">';
    html += '<span class="title">' + menu_title + '</span>';
    html += '<span class="menu_price_slip">￥' + menu_price + '</span>';
    html += '</dd>';
    html += '<input type="hidden" class="menu_title_input" name="order_details[][menu_title]" value="'+menu_title+'">';
    html += '<input type="hidden" class="menu_id_input" name="order_details[][menu_id]" value="'+menu_id+'">';
    html += '<input type="hidden" class="menu_price_input" name="order_details[][menu_price]" value="'+menu_price+'">';

    html += '<input type="hidden" class="option_title_input" name="order_details[][option_title]" value="">';
    html += '<input type="hidden" class="option_id_input" name="order_details[][option_id]" value="">';
    html += '<input type="hidden" class="option_price_input" name="order_details[][option_price]" value="">';

    html += '</dl>';
    $('#left-up').prepend(html);

    let price_str = $(this).text().replace(/[^\d.-]/g, '');
    total_price += parseFloat(price_str);

    savedItems.push(html);
    sessionStorage.setItem('menuItems', JSON.stringify(savedItems));

    $('#total_price').html('￥' + total_price);
  });
  $('.menu_list_item.option.btn').on('click', function () {
    let menu_id = $(this).find('.menu_id_input').val()|| '';
    console.log(menu_id);
    let menu_title = $(this).find('.menu_title_input').val()|| '';
    let option_title = $(this).find('.option_title_input').val()|| '';
    let option_id = $(this).find('.option_id_input').val()|| '';
    let menu_price = parseFloat($(this).find('.menu_price_input').val()|| 0);
    let option_price = parseFloat($(this).find('.menu_price_input').val()|| 0);
    let subtotalamount = menu_price + option_price;

    let html = '<dl class="item_list flex justify-between font-bold" data-id="'+menu_id+'">';
    html += '<dt class="w-8 flex items-center item_list_item"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt><dd class="w-full flex justify-between item_list_item-dd">';
    html += '<span class="title">';
    html += menu_title + option_title +'</span><span class="menu_price_slip">￥' + subtotalamount + '</span>';
    html += '</dd>';
    html += '<input type="hidden" class="menu_title_input" name="order_details[][menu_title]" value="'+menu_title+'">';
    html += '<input type="hidden" class="option_title_input" name="order_details[][option_title]" value="'+option_title+'">';
    html += '<input type="hidden" class="menu_id_input" name="order_details[][menu_id]" value="'+menu_id+'">';
    html += '<input type="hidden" class="option_id_input" name="order_details[][option_id]" value="'+option_id+'">';
    html += '<input type="hidden" class="menu_price_input" name="order_details[][menu_price]" value="'+menu_price+'">';
    html += '<input type="hidden" class="option_price_input" name="order_details[][option_price]" value="'+option_price+'">';
    html += '<dl/>';
    $('#left-up').prepend(html);

    let price_str = $(this).text().replace(/[^\d.-]/g, '');
    total_price += parseFloat(price_str);

    savedItems.push(html);
    sessionStorage.setItem('menuItems', JSON.stringify(savedItems));

    $('#total_price').html('￥' + total_price);
  });

  $('body').on('click', '.item_list_item', function () {

      let menu_price_str = $(this).next().find('.menu_price_slip').text().trim(); // trim()で前後の空白を削除する
      let menu_price = parseFloat(menu_price_str.replace(/[^\d.-]/g, '')); // 数字のみに変換して浮動小数点数に変換する

      $(this).closest('.item_list').remove();

      let current_total_price_str = $('#total_price').text().trim();
      let current_total_price = parseFloat(current_total_price_str.replace(/[^\d.-]/g, '')); // 現在の合計金額を取得して数字のみに変換

      let new_total_price = current_total_price - menu_price; // 引き算して新しい合計金額を計算

      let menu_id = $(this).data('menu-id');
      let menu_item_index = savedItems.findIndex(item => item.id === menu_id);

      if (menu_item_index !== -1) {
          savedItems.splice(menu_item_index, 1); // savedItemsからmenu_itemを削除する
          sessionStorage.setItem('menuItems', JSON.stringify(savedItems)); // sessionStorageを更新する
      }

      // 合計金額を更新して表示する
      $('#total_price').html('￥' + new_total_price);

});

$('#for_payment_btn').on('click', function () {
  let current_total_price_str = $('#total_price').text().trim();
  let current_total_price = parseFloat(current_total_price_str.replace(/[^\d.-]/g, ''));

  if (!isNaN(current_total_price)) {
      sessionStorage.setItem("total_price", current_total_price);
      $('#subtotal_price_val').val(current_total_price);
      $('#total_price_val').val(current_total_price);
  }
});
  $('#all_cancel').on('click', function () {
    sessionStorage.removeItem('menuItems');
    $('#left-up').html("");
    $('#total_price').html('￥' + "0");
  });
});
