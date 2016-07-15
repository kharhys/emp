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
            <a href="{{ URL::to('customers') }}"> <i class="material-icons fab inactive">close</i> </a>
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
              <ul class="m-dropdown">
                <li><a href="http://www.g.com">Art</a></li>
                <li><a href="http://www.g.com">Coding</a></li>
                <li><a href="http://www.g.com">Design</a></li>
                <li><a href="http://www.g.com">Web Development</a></li>
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
            <dl>
              <dt>Name</dt>
              <dd>Sally Jones</dd>

              <dt>Occupation</dt>
              <dd>chef</dd>

              <dt>Address</dt>
              <dd>521 First Street, Chicago IL, USA</dd>

              <dt>This is really long</dt>
              <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>

              <dt>Definition term</dt>
              <dd>Definition definition</dd>
            </dl>
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
</script>
@endsection
