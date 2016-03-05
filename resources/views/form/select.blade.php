<select {!!  isset($properties) ? $properties : '' !!}>
	@while (list($key, $value) = each($options))
		<option value="{{$key}}"  {{$key == $selectedOption ? "selected" : "" }}>{{$value}}</option>
	@endwhile
</select>