@extends('layout')

@section('head')

@endsection

@section('page')
<div class="container">
  <div class="main">
    <header class="page-header">
      <h1> View User  </h1>
    </header>

    <div class="fab-modal-backdrop">
      <div class="fab-modal-shadow-surogate"></div>
      <div class="fab-modal-container inactive" id="dialog">
        <div class="fab-modal-inner">
          <button class="inactive dialog__btn">
            <a href="{{ URL::to('users') }}"> <i class="material-icons fab inactive">keyboard_arrow_left</i> </a>
          </button>
        </div>
      </div>
    </div>


    <div class="page_card">

      <div class="page_card_header">
        <div id="customer_details">
          <h1> <?=$user['name'] ?> </h1>
          <h2> <?=$user['email'] ?>  </h2>
        </div>
        <div>
          <ul class="nav">
            <div class="kebab">
              <figure></figure>
              <figure class="middle"></figure>
              <p class="cross">x</p>
              <figure></figure>
              <?php $edit_url = \URL::to('users/edit', [ 'email' => $user['email'] ]); ?>
              <?php $delete_url = \URL::to('users/delete', [ 'email' => $user['email'] ]); ?>
              <ul class="m-dropdown">
                <li><a href=<?=$edit_url?> >Edit</a></li>
                <li><a href=<?=$delete_url?> >Delete</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
      <main>

        <div class="ns_tab_content">
          <div class="row-fluid">

            <div class="ios-dl">
              <div class="definition-group">
                  <ul class="dl-horizontal">
                    <li>User Name</li>
                    <li><?=$user['name']?></li>
                  </ul>
                  <ul class="dl-horizontal">
                    <li>Email Address</li>
                    <li><?=$user['email']?></li>
                  </ul>
                <?php foreach ($user as $key => $val): ?>
                  <ul class="dl-horizontal">
                    <li><?=$key?></li>
                    <li><?=$val?></li>
                  </ul>
                <?php endforeach; ?>
              </div>
            </div>

          </div>
        </div>

      </main>
    </div>


  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection
