@extends('layouts.app')

@section('content')
<div class="row">
	<h2>Create Product</h2>
	{!! Form::model(new App\Product, ['route' => ['products.store'], 'class' => 'form-horizontal'])  !!}
		@include('products/partials/_form', ['submit_text' => 'Create'])
	{!! Form::close() !!} 	
</div>	
@endsection