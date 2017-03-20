@extends ('Main')


@section ('content')

	@foreach ($candidates as $candidate)
	
	{{ $candidate->position->salary}}

	@endforeach
@endsection