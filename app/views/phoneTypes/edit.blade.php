{{ Form::model( $phonetype, ['route' => ['phonetypes.update', $phonetype->id], 'method' => 'put', 'role' => 'form'] ) }}
    {{ Form::text('name') }}
	{{ Form::button('Save', ['type' => 'submit']) }}
{{ Form::close() }}