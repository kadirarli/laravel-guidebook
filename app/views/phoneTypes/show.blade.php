<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<h1> {{$phonetype->name}} </h1>
<a href="{{ route('phonetypes.edit', $phonetype->id) }}" >Değiştir</a>
<a href="#" id="deleteItem" >Sil</a>

<script type="text/javascript">
	$('#deleteItem').click(function(){
		$.ajax({
		    url: '{{ route("phonetypes.destroy", $phonetype->id) }}',
		    type: 'POST',
		    data: '_method=DELETE',
		    success: function(result) {
		        location.href = '{{ route("phonetypes.index") }}';
		    }
		});
	});
</script>