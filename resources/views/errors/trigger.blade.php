<li class="item">
  <span>
    <div class="ios-dl">
      <div class="definition-group">
        <dl class="dl-horizontal">
          <dt>Name</dt>
          <dd><?=$customer['name']?></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt>Gender</dt>
          <dd><?=$customer['gender']?></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt>Occupation</dt>
          <dd><?=$customer['occupation']?></dd>
        </dl>
      </div>
    </div>
  </span>
  <span data-modal="<?= '#modal'.'__default'; ?>" class="modal__trigger" id="modal__default_trigger">
    <i class="material-icons">more_vert</i>
  </span>
</li>
