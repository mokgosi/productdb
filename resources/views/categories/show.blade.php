@extends('layouts.app')

@section('content')
<div class="row">
	<h2>Viewing Category</h2>
	<table class="table table-bordered table-striped">
		<tr><td>Name:</td><td>{{ $category->name }}</td></tr>
	</table>
	<p>
		<a class="btn btn-primary btn-sm" href="{{ route('categories.edit', [$product->id]) }}">Edit</a>
		<a class="btn btn-default btn-sm" href="{{ route('categories.index') }}">Cancel</a>
	</p>
</div>
@endsection