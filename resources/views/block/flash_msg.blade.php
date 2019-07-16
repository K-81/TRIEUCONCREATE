@if (Session()->has('flash_level'))
<div class="alert alert-success">
  <h5><i class="icon fa fa-check"></i> Alert!</h5>
  <ul>
      {!! Session::get('flash_massage') !!}
  </ul>
</div>
@endif