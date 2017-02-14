<div class="form-group">
    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">    
    {{ Form::label('category_id', 'Category:') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">    
    {{ Form::label('description', 'Description:') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">    
    {{ Form::label('sku', 'Sku:') }}
    {{ Form::text('sku', null, ['class' => 'form-control']) }}
</div>
<div class="button-group col-md-12 col-md-offset-2">
    {{ Form::submit($submit_text, ['class'=>'btn btn-success']) }}
    <a href="{{ route('products.index') }}" class="btn btn-default" >Cancel</a>
</div>