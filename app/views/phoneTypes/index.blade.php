@extends('')
@section('content')

<table>
	<tr>
		<th>Name</th>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
	</tr>
	@foreach($phonetypes as $phonetype)
	<tr>
		<td>{{ @$phonetype->name }}</td>
		<td><a href='/{{$phonetype->id}}/edit'>Edit</a></td>
		<td>
			{{ Form::open(['url'=>'/'.$phonetype->id, 'method'=>'delete']) }}
				<button type='submit'>Delete</button>
			{{ Form::close() }}
		</td>
	</tr>
	@endforeach
</table>
@stop
