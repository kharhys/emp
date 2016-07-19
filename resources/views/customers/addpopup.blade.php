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
            <th>DOB</th>
            <th>Tower Name</th>
            <th>Apartment Number</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customers as $cust): ?>
            <?php $url = \URL::to('customers/view', [ 'phone' => $cust['phone_number'] ]) ?>
            <tr>
              <td><a href=<?=$url?> class=""> <?=$cust['phone_number']?> </a></td>
              <td><?=$cust['first_name']?></td>
              <td><?=$cust['last_name']?></td>
              <td><?=$cust->nationalityName()?></td>
              <td><?=$cust['address_one']."  ".$cust['city']?></td>
              <td><?=$cust['date_of_birth']?></td>
              <td><?=$cust->towerName()?></td>
              <td><?=$cust['apartment_number']?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <aside id="addpopup" class="tinymodal-window tinymodal-window-open ">
		<div class="tinymodal-inner">
			<h2>Add Customer</h2>
      <button class="tinymodal-close">Close</button>
			@include('customers.addform')
		</div>
  </aside>

</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      openModal();
      $('.table__card table').DataTable({})
      $('.table__card .dataTables_filter input').attr('placeholder', 'Search')

      var links = document.querySelectorAll('a.tinymodal-modal');
      for (var i = 0; links.length > i; i++) {
        links[i].addEventListener("click", function(event){  // callback
          event.preventDefault();
          var element = this.getAttribute("href");
          tinyModal.openModal(element, function(){
            var closeLink = this.querySelectorAll('a[href="javascript:closeModal()"]');
            if (closeLink.length < 1) {
              var closeLink = document.createElement("a");
              closeLink.setAttribute("href","javascript:closeModal()");
              closeLink.innerHTML = "X";
              this.appendChild(closeLink);
            }
          });
        });
      }

      function openModal() {
          tinyModal.openModal("#addpopup", function(){
              console.log('#addpopup modal opened');
          });
      }

      function closeModal() {
          tinyModal.closeModal(function(){
              console.log('closed by closeModal() function');
          });
      }

    })
  </script>
@endsection
