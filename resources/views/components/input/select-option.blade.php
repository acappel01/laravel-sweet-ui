<option
    value="{{ $model->{$value} }}"
    @if($model->{$value} == $selected) selected @endif
>
    {{ $model->{$label} }}
</option>
