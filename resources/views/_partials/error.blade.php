@if ($errors->has($name)) 
	<div class="error-form"> * {{ $errors->first($name) }} </div> 
@endif