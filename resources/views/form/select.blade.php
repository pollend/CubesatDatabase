<select class="form-control" {!!  isset($properties) ? $properties : '' !!}>
	@while (list($key, $value) = each($options))
		<option value="{{$key}}"  {{isset($selectedOption) ? $key == $selectedOption ? "selected" : "" : ""}}>{{$value}}</option>
	@endwhile
</select>