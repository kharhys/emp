@extends('layout')

@section('head')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/js/jquery.dataTables.min.js"> </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.11/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="customersindex.css" media="screen" title="no title" charset="utf-8">
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
          <a href="{{ URL::to('customers/create')}}"> <i class="material-icons fab inactive">add</i> </a>
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
            <th>Name</th>
            <th>Gender</th>
            <th>Occupation</th>
            <th>Address</th>
            <th>Phone</th>
            <th>DOB</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customers as $cust): ?>
            <tr>
              <td><?=$cust['name']?></td>
              <td><?=$cust['gender']?></td>
              <td><?=$cust['occupation']?></td>
              <td><?=$cust['address']?></td>
              <td><?=$cust['phone']?></td>
              <td><?=$cust['dob']?></td>
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
