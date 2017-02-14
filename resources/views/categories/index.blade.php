@extends('layouts.app')

@section('content')
<div class="row">
	<h2>Categories</h2>
	<div class="btn-group">
		<div class="form-group">
			<a href="{{ route('categories.create') }}" class='btn btn-primary'>Add</a>
		</div>
	</div> 
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{$category->name}}</td>
					<td><a href="{{ route('categories.edit', ['id' => $category->id]) }}">edit</a> | 
						<a href="{{ route('categories.show', ['id' => $category->id]) }}">view</a>
					</td>
				</tr> 
			@endforeach
		</tbody>
	</table>
</div>
@endsection