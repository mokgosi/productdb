@extends('layouts.app')

@section('content')
<div class="row">
	{!! Form::model($category, ['method'=>'PATCH', 'route' => ['categories.update', $category->id], 'class'=>'form-horizontal']) !!}
		@include('categories/partials/_form', ['submit_text' => 'Update'])
	{!! Form::close() !!}	
</div>	
@endsection