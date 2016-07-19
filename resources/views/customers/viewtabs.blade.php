<div class="page_card">

  <div class="page_card_header">
    <div id="customer_details">
      <h1> <?=$personal['first_name']."  ".$personal['last_name'] ?> </h1>
      <h2> <?=$personal['mobile_number'] ?>  </h2>
    </div>
    <div>
      <ul class="nav">
        <div class="kebab">
          <figure></figure>
          <figure class="middle"></figure>
          <p class="cross">x</p>
          <figure></figure>
          <?php $edit_url = \URL::to('customers/edit', [ 'phone' => $personal['phone_number'] ]); ?>
          <?php $delete_url = \URL::to('customers/delete', [ 'phone' => $personal['phone_number'] ]); ?>
          <ul class="m-dropdown">
            <li><a href=<?=$edit_url?> >Edit</a></li>
            <li><a href=<?=$delete_url?> >Delete</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
  <main>

    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Personal Details</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Property Details</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Attached Documents</label>

    <section id="content1">
      <p>
        <div class="ns_tab_content">
          <div class="row-fluid">

            <div class="ios-dl">
              <div class="definition-group">
                <?php foreach ($personal as $key => $val): ?>
                  <ul class="dl-horizontal">
                    <li><?=$key?></li>
                    <li><?=$val?></li>
                  </ul>
                <?php endforeach; ?>
              </div>
            </div>

          </div>
        </div>
      </p>
    </section>

    <section id="content2">
      <p>
        <div class="ns_tab_content">
          <div class="row-fluid">

            <div class="ios-dl">
              <div class="definition-group">
                <?php foreach ($property as $key => $val): ?>
                  <ul class="dl-horizontal">
                    <li><?=$key?></li>
                    <li><?=$val?></li>
                  </ul>
                <?php endforeach; ?>
              </div>
            </div>

          </div>
        </div>
      </p>
    </section>

    <section id="content3">
      <p>
        <div class="ns_tab_content">
          <div class="row-fluid">

            <div class="ios-dl">
              <div class="definition-group">
                <?php foreach ($attachment as $key => $val): ?>
                  <ul class="dl-horizontal">
                    <li><?=$key?></li>
                    <li><?=$val?></li>
                  </ul>
                <?php endforeach; ?>
              </div>
            </div>

          </div>
        </div>
      </p>
    </section>

  </main>
</div>
