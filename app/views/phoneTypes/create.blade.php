{{ Form::open( array( 'route' => ['phonetypes.store'], 'role' => 'form' ) ) }}
    {{ Form::text('name') }}
	{{ Form::button('Save', ['type' => 'submit']) }}
{{ Form::close() }}