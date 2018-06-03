@extends('layouts.adminlte')

@section('content')
<style type="text/css">
.no-padding {
 padding: 0px; 
}
</style>
<div class="row">
   <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{$count_app}}</h3>

          <p>Aplikasi</p>
      </div>
      <div class="icon">
          <i class="ion ion-bag"></i>
      </div>
      <a href="{{url('aplikasi')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3>{{$count_vid}}</h3>

      <p>Video</p>
  </div>
  <div class="icon">
      <i class="ion ion-stats-bars"></i>
  </div>
  <a href="{{url('video')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
</div>
</div>
</div>

@endsection