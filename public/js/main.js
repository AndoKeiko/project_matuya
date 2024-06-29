$(function () {
  let total_price = 0;
  let savedItems = JSON.parse(sessionStorage.getItem('menuItems')) || [];
  savedItems.forEach(function (item) {
    $('#left-up').append(item);
  });
  $('#left-up .menu_price_slip').each(function () {
    let price_str = $(this).text().replace(/[^\d.-]/g, '');
    total_price += parseFloat(price_str);
    $('#total_price').html('￥' + total_price);
  });

  $('.menu_list_item.accounting').on('click', function () {
    let menu_id = $(this).find('.menu_id').val();
    let menu_title = $(this).find('.menu_title_input').val();
    let menu_price = parseFloat($(this).find('.menu_price_input').val());

    let html = '<dl class="item_list flex justify-between font-bold" data-id="'+menu_id+'"><dt class="w-8 flex items-center item_list_item"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt><dd class="w-full flex justify-between">';
    html += '<span class="title">';
    html += menu_title + '</span><span class="menu_price_slip">￥' + menu_price + '</span>';
    html += '</dd></dl>';
    $('#left-up').append(html);

    let price_str = $(this).text().replace(/[^\d.-]/g, '');
    total_price += parseFloat(price_str);

    savedItems.push(html);
    sessionStorage.setItem('menuItems', JSON.stringify(savedItems));

    $('#total_price').html('￥' + total_price);
  });


  $('body').on('click', '.item_list_item', function () {
    let menu_price_str = $(this).next().find('.menu_price_slip').text().trim(); // trim()で前後の空白を削除する
    let menu_price = parseFloat(menu_price_str.replace(/[^\d.-]/g, '')); // 数字のみに変換して浮動小数点数に変換する

    console.log('Clicked menu price:', menu_price);

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


  $('#all_cancel').on('click', function () {
    sessionStorage.removeItem('menuItems');
    $('#left-up').html("");
    $('#total_price').html('￥' + "0");
  });
});
