@extends('layouts.default')

@section('content')
<div class="flex flex-col items-center">
    <ul class="w-full max-w-md space-y-4">
        <li class="w-full flex justify-center">
            <button type="button" class="btn btn-dinein">店舗</button>
        </li>
        <li class="w-full flex justify-center">
            <button type="button" class="btn btn-secondary">お持ち帰り</button>
        </li>
    </ul>
</div>
@endsection
