@extends('layouts.app')

@section('content')
<div class="row">
	<h2>Product List</h2>
	<div class="btn-group">
		<div class="form-group">
			<a href="{{ route('products.create') }}" class='btn btn-primary'>Add</a>
		</div>
	</div> 
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>SKU</th>
				<th>Category</th>
				@if (Auth::check()) 
				<th>Action</th>
				@endif
			</tr>
		</thead>
		<tbody>

			@foreach($products as $product)
				<tr>
					<td><a href="{{route('products.show',['product' => $product ]) }}">{{$product->name}}</td>
					<td>{{$product->sku}}</td>
					<td>{{$product->category->name}}</td>
					@if (Auth::check()) 
					<td><a href="{{ route('products.edit',['product' => $product ]) }}">Edit</a> | 
						<a href="{{ route('products.show',['product' => $product ]) }}">View</a>
					</td>
					@endif
				</tr> 
			@endforeach
		</tbody>
	</table>
</div>
@endsection