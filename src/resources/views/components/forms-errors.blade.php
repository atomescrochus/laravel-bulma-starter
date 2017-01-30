@if($errors->has($field))

	@if(!isset($type))
		{{-- Not a horizontal form --}}
		<span class="help is-danger">{{ $errors->first($field) }}</span>
	@else

		<div class="control is-horizontal">
			<div class="control-label">
				<!--spacer-->
			</div>
			<div class="control is-horizontal">
				<p class="control is-fullwidth help is-danger">
					{{ $errors->first($field) }}
				</p>
			</div>
		</div>

	@endif

@endif