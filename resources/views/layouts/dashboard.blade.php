<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex justify-between w-full">
          <a href="" class="flex text-center">おすすめ</a>
          <a href="" class="flex text-center">牛めし</a>
          <a href="" class="flex text-center">カレー</a>
          <a href="" class="flex text-center">丼</a>
          <a href="" class="flex text-center">定食</a>
          <a href="" class="flex text-center">サイドメニュー</a>
          <a href="" class="flex text-center">ドリンク</a>
          <a href="" class="flex text-center">お子様</a>
            <!-- {{ __('Dashboard') }} -->
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
