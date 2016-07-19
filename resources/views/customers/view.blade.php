@extends('layout')

@section('head')

@endsection

@section('page')
<div class="container">
  <div class="main">
    <header class="page-header">
      <h1> View Customer  </h1>
    </header>

    <div class="fab-modal-backdrop">
      <div class="fab-modal-shadow-surogate"></div>
      <div class="fab-modal-container inactive" id="dialog">
        <div class="fab-modal-inner">
          <button class="inactive dialog__btn">
            <a href="{{ URL::to('customers') }}"> <i class="material-icons fab inactive">keyboard_arrow_left</i> </a>
          </button>
        </div>
      </div>
    </div>

    @include('customers.viewtabs')

  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection
