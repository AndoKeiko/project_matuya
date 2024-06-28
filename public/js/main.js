$(function () {
  let total_price = 0;
  $('.menu_list_item').on('click', function () {
    // let menu_title = $(this).attr('id');
    let menu_title = $(this).find('.menu_title_input').val();
    let menu_id = $(this).find('.menu_id_input').val();
    let menu_price = parseFloat($(this).find('.menu_price_input').val());
    total_price += menu_price;
    let html = '<dl class="item_list flex justify-between font-bold"><dt class="w-8 flex items-center"><span class="bg-white rounded-full aspect-square size-8 flex items-center justify-center font-bold">―</span></dt><dd class="w-full flex justify-between">';
    html += '<span class="title">';
    html += menu_title + '</span><span>￥' + menu_price + '</span>';
    html += '</dd></dl>';
    $('#left-up').append(html);
    $('#total_price').html('￥' + total_price);
  });
  $('body').on('click', '.items-center', function () {
    $(this).closest('.item_list').remove();
  });
});
