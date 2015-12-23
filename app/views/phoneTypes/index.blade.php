<a href="{{ route('phonetypes.create') }}" >Yeni Oluştur</a>

@foreach ($phonetypes as $phonetype)
	<li>
		<a href="{{ route('phonetypes.show', $phonetype->id) }}" >
		{{$phonetype->name}}
		</a>
	</li>
@endforeach