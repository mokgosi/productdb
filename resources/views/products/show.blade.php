@extends('layouts.app')

@section('content')
<div class="row">
	<h2>Viewing Profile</h2>
	<table class="table table-bordered table-striped">
		<tr><td>Name:</td><td>{{ $product->name }}</td></tr>
		<tr><td>SKU:</td><td>{{ $product->sku }}</td></tr>
		<tr><td>Category:</td><td>{{ $product->category->name }}</td></tr>
		<tr><td>Description:</td><td>{{ $product->Description }}</td></tr>
	</table>
	<p>
		<a class="btn btn-primary btn-sm" href="{{ route('products.edit', [$product->id]) }}">Edit</a>
		<a class="btn btn-default btn-sm" href="{{ route('products.index') }}">Cancel</a>
	</p>
</div>
@endsection