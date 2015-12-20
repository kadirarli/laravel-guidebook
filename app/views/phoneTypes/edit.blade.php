@extends('')
@section('content')

	{{ Form::open(['url' => '/'.@$phonetype->id, 'method' =>'put']) }}
		{{ HTML::ul($errors->all()) }}
		<!-- `Name` Field -->
		{{ Form::label('name', 'Name') }}
		{{ Form::text('phone_type[name]', @$phonetype->name) }}
		<!-- Form actions -->
		<a href='{{URL::previous()}}' >Cancel</a>
		<button type='submit' >Submit</button>
	{{ Form::close() }}
@stop