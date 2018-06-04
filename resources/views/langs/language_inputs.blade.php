<div class="form-group">
	<label for="{{ $key }}" class="col-sm-2 control-label">{{ str_replace(['_', '-'], ' ', $key) }}</label>
	<div class="hidden-sm hidden-xs col-md-5">
		<div class="well well-sm">
			@php
				if (count($parents)) {
                    $parents_array = implode('.', $parents);
                    $string_text = trans($lang_file_name . '.' . $parents_array . '.' . $key);
                } else {
                    $string_text = trans($lang_file_name . '.' .$key);
                }
                echo htmlentities($string_text);
			@endphp
		</div>
	</div>
	<div class="col-sm-10 col-md-5">
		@if (preg_match('/(\|)/', $item))
			@php
				$chuncks = explode('|', $item);
			@endphp

			<div style="margin-left: 15px;">
				@foreach ($chuncks as $k => $chunck)
					@php
						preg_match('/^({\w}|\[[\w,]+\])([\w\s:]+)/', trim($chunck), $m);
					@endphp
					@if (empty($m))
						<label for="{{ $chunck }}" class="col-sm-2 control-label">{{ (!$k ? 'singular' : 'plural').":" }}</label>
						<textarea name="{{ (empty($parents) ? $key : implode('__', $parents)."__{$key}")."[after][]" }}" class="form-control" rows="2"> {{ $chunck }} </textarea>
						<br>
					@else
						<label for="{{ $chunck }}" class="col-sm-2 control-label">{{ (!$k ? 'singular' : 'plural')." ($m[1]):" }}</label>
						<input type="hidden" name="{{ (empty($parents) ? $key : implode('__', $parents)."__{$key}")."[before][]" }}" value="{{ $m[1] }}">
						<textarea name="{{ (empty($parents) ? $key : implode('__', $parents)."__{$key}")."[after][]" }}" class="form-control" rows="2"> {{ $m[2] }} </textarea>
						<br>
					@endif
				@endforeach
			</div>
		@else
			<textarea name="{{ (empty($parents) ? $key : implode('__', $parents)."__{$key}") }}" class="form-control" rows="2"> {{ $item }} </textarea>
			<br>
		@endif
	</div>
</div>