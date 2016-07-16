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
            <a href="{{ URL::to('customers') }}"> <i class="material-icons fab inactive">navigate_before</i> </a>
          </button>
        </div>
      </div>
    </div>

    <div class="page_card">

      <div class="page_card_header">
        <div id="customer_details">
          <h1> Customer Name </h1>
          <h2> Phone Number </h2>
        </div>
        <div>
          <ul class="nav">
            <div class="kebab">
              <figure></figure>
              <figure class="middle"></figure>
              <p class="cross">x</p>
              <figure></figure>
              <?php $edit_url = \URL::to('customers/edit', [ 'phone' => $customer['phone'] ]) ?>
              <?php $delete_url = \URL::to('customers/delete', [ 'phone' => $customer['phone'] ]) ?>
              <ul class="m-dropdown">
                <li><a href="#">Edit</a></li>
                <li><a href=<?=$delete_url ?>Delete</a></li>
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
                    <?php foreach ($customer as $key => $val): ?>
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
            Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
          </p>
          <p>
            Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
          </p>
        </section>

        <section id="content3">
          <p>
            Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
          </p>
          <p>
            Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
          </p>
        </section>

        <section id="content4">
          <p>
            Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
          </p>
          <p>
            Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
          </p>
        </section>

      </main>
    </div>

  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
var kebab = document.querySelector('.kebab'),
middle = document.querySelector('.middle'),
cross = document.querySelector('.cross'),
dropdown = document.querySelector('.m-dropdown');

kebab.addEventListener('click', function() {
  middle.classList.toggle('active');
  cross.classList.toggle('active');
  dropdown.classList.toggle('active');
})
</script>
@endsection
