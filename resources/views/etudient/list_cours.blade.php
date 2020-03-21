@extends('standard')

@section('content')

	@php	
		$controller = Request::route()->controller;
		$f = $controller->filter();

		$fields = $f->fields;
		$filter = $f->filter;
		$model = $f->model;
		$module_id = 0;
	@endphp



	@foreach ($results as $object )
        @if( $object->module_id != $module_id )
        <div class="card ">
        	<div class="card-header">
        		<h3 class="card-title">{{ $object->module }}</h3>
        		<div class="card-options">
					<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
					<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa fa-arrows-alt"></i></a>
				</div>
			</div>
			<div class="card-body row">
		@endif
				<div class="col-md-3">
					<a class="btn btn-square btn-secondary" href="{{ route('etudient_show_cours', $object->id) }}" style="display: block;">
						<h3 class="">{{ $object }}</h3>

						<span class="tag tag-indigo">{{ $object->prof }}</span>
						<span class="tag">{{ $object->created_at->format('d/m H:i') }}</span>
						{!! $object->tagtype() !!}
					</a>
					<br>
				</div>
		@if( $object->module_id != $module_id )
				<div class="clear"></div>
			</div>
		</div>

			@php $module_id = $object->module_id; @endphp
		@endif
    @endforeach
<!--
card-fullscreen
card-collapsed
-->

    </div>

@endsection