<div class="form-group">
    <label for="{{$name}}" class="col-sm-2 control-label">{{$lblName}}</label>
    <div class="col-sm-6">
        {{ Form::text($name, $value,  array_merge(['class' => 'form-control','placeHolder'=>$placeHolder], $attributes )) }}

    </div>
</div>