@extends('layouts.app')

@section('content')
<div class="row">
	{!! Form::model($product, ['method'=>'PATCH', 'route' => ['products.update', $product->id], 'class'=>'form-horizontal']) !!}
		@include('products/partials/_form', ['submit_text' => 'Update','categories' => $categories])
	{!! Form::close() !!}
</div>	
@endsection