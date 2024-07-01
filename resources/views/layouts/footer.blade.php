<footer class="bg-gray-200 flex justify-between w-full footer">
      <div class="max-w-7xl mx-auto py-6 px-2 sm:px-4 lg:px-4 w-full flex justify-between">
        <div class="left_wrap w-8/12">
          <div class="left-up h-52" id="left-up">

          </div>
          <div class="left-bottom">
            <div class="left-bottom-bar bg-slate-900 p-2 text-white"><span>10000</span><span>5000</span><span>5000</span><span>1000</span><span>クレジットカード</span><span>電子マネー</span></div>
            <ul class="left-bottom-list">
              <li class="left-bottom-list-item">
                <p class="amount_title">お預かり</p>
                <p class="amount_price">￥0</p>
              </li>
              <li class="left-bottom-list-item">
                <p class="amount_title">商品合計</p>
                <p class="amount_price" id="total_price">￥0</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="right_wrap w-4/12 flex flex-col sm:px-6 lg:px-8">
          <a class="w-full text-center text-2xl items-center btn-zan bg-lime-400 mb-2.5 font-bold">電子マネー残高照会</a>
          <a class="w-full text-center text-2xl items-center btn-all-can bg-slate-900 text-white mb-2.5 font-bold" id="all_cancel">すべてキャンセル</a>
          <a href="{{ url('/payment') }}" class="w-full text-center text-2xl items-center btn-amount bg-red-600 leading-10 font-bold">お会計</a>
        </div>
      </div>
    </footer>