{{ Form::label($field_name, $field_name_text) }}
    @if($errors->has($field_name))
        @error($field_name)
            {{ Form::text($field_name, null, array('class' => 'form-control is-invalid')) }}
            <div class="invalid-feedback mb-3">
                {{ $message }}
            </div>
        @enderror
    @else
    {{ Form::text($field_name, null, array('class' => 'form-control mb-3')) }}
    @endif