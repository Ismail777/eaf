@extends ('Main')


@section ('content')

@foreach ($candidate as $candidate)
	{{ $candidate->position->salary }}
@endforeach

@endsection