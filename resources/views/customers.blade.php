@extends('layout')

@section('page')
  <div class="container">
    <header class="page-header">
      <h1> Manage Customers  </h1>
    </header>

    <div class="fab-modal-backdrop">
      <div class="fab-modal-shadow-surogate"></div>
      <div class="fab-modal-container inactive" id="dialog">
        <div class="fab-modal-inner">
          <button class="inactive dialog__btn"><i class="material-icons fab inactive">add</i></button>
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
      <div class="demo-btns">
        <div class="info">
          <div class="buttons">
            <ul class="list hidden">

              <?php foreach ($customers as $cust): ?>
                <li class="item">
                  <span>
                    <div class="ios-dl">
                      <div class="definition-group">
                        <dl class="dl-horizontal">
                          <dt>Name</dt>
                          <dd><?=$cust['name']?></dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>Gender</dt>
                          <dd><?=$cust['gender']?></dd>
                        </dl>
                        <dl class="dl-horizontal">
                          <dt>Occupation</dt>
                          <dd><?=$cust['occupation']?></dd>
                        </dl>
                      </div>
                    </div>
                  </span>
                  <span data-modal="<?= '#modal'.$cust['id']; ?>" class="modal__trigger">
                    <i class="material-icons">more_vert</i>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
