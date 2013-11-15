@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
License Update ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		Update Category

		<div class="pull-right">
			<a href="{{ route('licenses') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
</div>


<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Tabs Content -->
	<div class="tab-content">

		<div class="tab-pane active" id="tab-general">
			<!-- Category Title -->
			<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
				<label class="control-label" for="name">Software Name</label>
				<div class="controls">
					<input type="text" name="name" id="name" value="{{ Input::old('name', $license->name) }}" />
					{{ $errors->first('title', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			<!-- Category Parent Title -->
			<div class="control-group {{ $errors->has('parent') ? 'error' : '' }}">
				<label class="control-label" for="parent">Category Parent</label>
				<div class="controls">

				</div>
			</div>
		</div>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('blogs') }}">Cancel</a>
			<button type="submit" class="btn btn-success">Publish</button>
		</div>
	</div>
</form>


@stop