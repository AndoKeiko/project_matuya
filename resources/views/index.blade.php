@extends('layouts.default')

@section('content')
<form action="" method="GET" id="serveTypeForm">
<div class="flex justify-center space-x-4 py-12 index_btn" id="index_btn">

  <label for="dinein" class="top-btn btn-dinein">
    <input type="radio" name="serveType" value="1" id="dinein"> 店内</label>
  <label for="takeout" class="top-btn btn-secondary">
    <input type="radio" name="serveType" value="2" id="takeout"> お持ち帰り</label>

</div>
</form>
<script>
  $(document).ready(function() {
    $('input[name="serveType"]').change(function() {
      var serveType = this.value;
      var formAction = '{{ route("category") }}/' + serveType;
      sessionStorage.setItem('serve_id', this.value);
      window.location.href = formAction;
      // $('#serveTypeForm').attr('action', formAction).submit();
    });
  });
</script>
@endsection