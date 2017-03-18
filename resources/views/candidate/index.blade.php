@extends ('Main')


@section ('content')

@foreach ($candidate as $candidate)
	{{ $candidate->Interview->salary }}
@endforeach

@endsection