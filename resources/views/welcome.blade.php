@extends('layouts.front')

@section('content')
<style type="text/css">
.no-padding {
	padding: 0px; 
}
</style>
<div class="row">
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Filter</div>
			<div class="panel-body">
				<form action="" method="GET" role="form" class="form-inline">
					<div class="form-group">
						{!! Form::select('kategori_id',$kat,null,['class'=>'form-control input-sm','placeholder'=>'-Pilih kategori']) !!}
						<button type="submit" class="btn btn-sm btn-danger">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Data</h3>
			</div>
			<table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Jum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $jml=0; ?>
                        @foreach($kategoryCount as $cc)

                        <tr>
                            <td>{{$cc->name}}</td>
                            <td>{{$cc->jml}}</td>
                        </tr>
                        <?php $jml+=$cc->jml; ?>
                        @endforeach
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>{{$jml}}</strong></td>
                        </tr>
                    </tbody>
                </table>
		</div>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Maps</div>

			<div class="panel-body no-padding">
				<div id="map"></div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('js')

@endpush