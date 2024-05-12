{{ Form::label( $tag, __($space . 's.' . $tag) ) }}
@if($errors->has($tag))
@error($tag)
{{ Form::select(
    $tag, 
    [null => __('Please Select')] + ($list ??  ['0' => '0']),
    $$space[$tag] ?? null, 
    ['class' => 'form-select is-invalid']
) }}
<div class="invalid-feedback">
    {{ $message }}
</div>  
@enderror
@else
{{ Form::select(
    $tag, 
    [null => __('Please Select')] + ($list ??  ['0' => '0']),
    $$space[$tag] ?? null, 
    ['class' => 'form-select mb-3']
) }}
@endif