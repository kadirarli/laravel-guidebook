@extends('')
@section('content')

	{{ Form::open(['url' => '', 'method' =>'post']) }}
		{{ HTML::ul($errors->all()) }}
		<!-- `Name` Field -->
		{{ Form::label('name', 'Name') }}
		{{ Form::text('phone_type[name]', Input::old('phone_type.name')) }}
		<!-- Form actions -->
		<a href='{{URL::previous()}}' >Cancel</a>
		<button type='submit' >Submit</button>
	{{ Form::close() }}
@stop