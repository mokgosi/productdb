@extends('layouts.app')

@section('content')
	<div class="row">
		<form action="{{ route('categories.store') }}" method="post" class="form-horizontal">
			{{ csrf_field() }}
			@include('categories/partials/_form', ['submit_text' => 'Create'])
		</form>
	</div>	
@endsection