<div class="table__card">
  <div class="main">
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form class = "steps-form" method="post" action="{{ URL::to('customers/create') }}" >
      <div class = "step-form">
        <h2>Attach Documents</h2>
        <label for="name"> <span data-text="name">User Name</span>  </label>
        <input name="name" type="text" placeholder = "" class = "form-input">

        <label for="email"> <span data-text="email">Email Address</span>  </label>
        <input name="email" type="text" placeholder = "" class = "form-input">

        <label for="password"> <span data-text="password">Password</span>  </label>
        <input name="password" type="password" placeholder = "" class = "form-input">

        <label for="password_confirmation"> <span data-text="password">Confirm Password</span>  </label>
        <input name="password_confirmation" type="password" placeholder = "" class = "form-input">
        
        <button type = "submit" class = "form-input btn">Submit</button>
      </div>
    </form>
  </div>
</div>
