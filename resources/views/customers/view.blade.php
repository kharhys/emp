@extends('layout')

@section('head')

@endsection

@section('page')
<div class="container">
  <header class="page-header">
    <h1> View Customer  </h1>
    <?php print_r($customer); ?>
  </header>

  <div class="fab-modal-backdrop">
    <div class="fab-modal-shadow-surogate"></div>
    <div class="fab-modal-container inactive" id="dialog">
      <div class="fab-modal-inner">
        <button class="inactive dialog__btn"><i class="material-icons fab inactive">add</i></button>
        <div class="fab-modal-modal-content">
          <div class="bar">
            <button class="active dialog__btn"><i class="material-icons fab active">cancel</i></button>
            <h2 class="mdl-card__title-text">View Customer</h2>
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
    <div class="view__card">
      <h1>Customer Details</h1>
      <div class="tab-wrap">

        <input type="radio" name="tabs" id="tab1" checked>
        <div class="tab-label-content" id="tab1-content">
          <label for="tab1">Tab 1</label>
          <div class="tab-content">TAB 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet eget lectus eu congue. Nam finibus urna eget nisl aliquam, in dictum ligula feugiat. Donec mollis ligula purus, et interdum velit bibendum eget. Aliquam magna diam, tristique eu libero nec, sagittis finibus sapien. Cras a ex ultricies, faucibus elit sagittis, maximus nisi. Donec quis arcu sapien. Aenean risus nibh, varius sed porttitor a, ornare nec leo. Sed vitae lacus in ipsum varius sagittis. Ut in quam cursus, ullamcorper sapien posuere, laoreet elit. Suspendisse interdum, risus ut ultricies scelerisque, nibh est commodo leo, sed tristique nisl odio et turpis. Fusce pellentesque nunc nec arcu feugiat accumsan. Praesent mauris sem, eleifend sit amet tortor in, cursus vehicula arcu. Curabitur convallis sit amet nunc ac feugiat. Sed at risus id diam porta pretium id vel felis. Donec nec dui id nisl hendrerit laoreet eu id odio.</div>
        </div>

        <input type="radio" name="tabs" id="tab2">
        <div class="tab-label-content" id="tab2-content">
          <label for="tab2">Tab 2</label>
          <div class="tab-content">TAB 2 - Quisque egestas, purus in tempor vulputate, diam augue mollis quam, quis elementum ipsum ex a risus. Quisque sed augue porta, facilisis felis vitae, cursus mi. Nullam mollis magna eget tincidunt mollis. Sed suscipit placerat ultricies. Sed eget lorem et ipsum ultricies congue eu a enim. Nam quis ex nec lorem dignissim suscipit eu ut felis. Vivamus molestie felis id purus congue, vel ultrices sem molestie.</div>
        </div>

        <input type="radio" name="tabs" id="tab3">
        <div class="tab-label-content" id="tab3-content">
          <label for="tab3">Tab 3</label>
          <div class="tab-content">TAB 3 - Donec vulputate ante ac ligula vestibulum, id mollis diam commodo. Integer at consequat magna. Sed elit sem, dictum nec porttitor ac, ultrices id enim. Morbi semper eros a enim malesuada, eu finibus erat dictum. Ut vitae orci a odio sagittis malesuada. Cras volutpat vel lorem in tempor. Duis ultricies lectus sit amet tellus vehicula faucibus. Etiam sed leo ac erat tempor feugiat at quis ipsum. Mauris pellentesque nisl lorem, ac finibus sapien sagittis vel. Donec et lobortis est. Vestibulum dignissim ligula nec erat interdum, quis sollicitudin metus pretium. Vestibulum quis dui sapien. Proin commodo justo ac orci elementum molestie. Aliquam mattis orci vitae volutpat commodo.</div>
        </div>

        <input type="radio" name="tabs" id="tab4">
        <div class="tab-label-content" id="tab4-content">
          <label for="tab4">Tab 4</label>
          <div class="tab-content">TAB 4 - Quisque egestas, purus in tempor vulputate, diam augue mollis quam, quis elementum ipsum ex a risus. Quisque sed augue porta, facilisis felis vitae, cursus mi. Nullam mollis magna eget tincidunt mollis. Sed suscipit placerat ultricies. Sed eget lorem et ipsum ultricies congue eu a enim. Nam quis ex nec lorem dignissim suscipit eu ut felis. Vivamus molestie felis id purus congue, vel ultrices sem molestie.</div>
        </div>

        <div class="slide"></div>

      </div>
    </div>
  </div>

</div>
@endsection

@section('script')
<script type="text/javascript">
</script>
@endsection
