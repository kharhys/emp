@extends('layout')

@section('head')
@endsection

@section('page')
<div class="container">
  <header class="page-header">
    <h1> Manage Customers  </h1>
  </header>

  <div class="fab-modal-backdrop">
    <div class="fab-modal-shadow-surogate"></div>
    <div class="fab-modal-container inactive" id="dialog">
      <div class="fab-modal-inner">
        <button class="inactive dialog__btn">
          <a href="{{ URL::to('customers/add') }}"> <i class="material-icons fab inactive">add</i> </a>
        </button>
        <div class="fab-modal-modal-content">
          <div class="bar">
            <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
            <h2 class="mdl-card__title-text">Create new customer</h2>
          </div>
          <div class="content">
            <div class="form-container" >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main">
    <div class="table__card">
      <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Phone Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nationality</th>
            <th>Address</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Tower Name</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customers as $cust): ?>
            <?php $url = \URL::to('customers/view', [ 'phone' => $cust['phone'] ]) ?>
            <tr>
              <td><a href=<?=$url?> class=""> <?=$cust['phone_number']?> </a></td>
              <td><?=$cust['first_name']?></td>
              <td><?=$cust['last_name']?></td>
              <td><?=$cust['nationality']?></td>
              <td><?=$cust['address']?></td>
              <td><?=$cust['gender']?></td>
              <td><?=$cust['date_of_birth']?></td>
              <td><?=$cust['tower_name']?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('.table__card table').DataTable({})
      $('.table__card .dataTables_filter input').attr('placeholder', 'Search')
    })
  </script>
@endsection
