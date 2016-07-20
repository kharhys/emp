@extends('layout')

@section('head')

@endsection

@section('page')
<div class="container">
  <header class="page-header">
    <h1> Manage Users  </h1>
  </header>

  <div class="fab-modal-backdrop">
    <div class="fab-modal-shadow-surogate"></div>
    <div class="fab-modal-container inactive" id="dialog">
      <div class="fab-modal-inner">
        <button class="inactive dialog__btn">
          <?php $view_url = \URL::to('users/view', [ 'id' => $user['id'] ]); ?>
          <a href=<?=$view_url?> ><i class="material-icons fab inactive">keyboard_arrow_left</i></a>
        </button>
        <div class="fab-modal-modal-content">
          <div class="bar">
            <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
            <h2 class="mdl-card__title-text">Update customer</h2>
          </div>
          <div class="content">
            <div class="form-container" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="table__card">
    <div class="main">
      <form class = "steps-form" method="post" action="{{ URL::to('users/update') }}" >
        <input type="hidden" value="<?=$user['id']?>" name="uuid" />
        <div class = "step-form active">
          <h2>User Details</h2>
          <label for="name"> <span data-text="User Name">User Name</span>  </label>
          <input value="<?=$user['name']?>" name="name" type="text" placeholder = "User Name" class = "form-input">
          <label for="email"> <span data-text="Occupation">Email</span>  </label>
          <input value="<?=$user['email']?>" name="email" type="text" placeholder = "Email Address" class = "form-input">
          <button type = "submit" class = "form-input btn">Submit</button>
        </div>
      </form>
    </div>
  </div>

</div>
@endsection

@section('script')
  <script type="text/javascript">
  </script>
@endsection
