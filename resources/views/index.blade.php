@extends('layouts.default')

@section('content')
<div class="flex justify-center space-x-8 py-12">
    <a href="{{ route('category.page') }}" class="btn btn-dinein">店舗</a>
    <a href="{{ route('takeaway.page') }}" class="btn btn-secondary">お持ち帰り</a>
</div>
@endsection
