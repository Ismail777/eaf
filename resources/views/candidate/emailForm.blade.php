@extends('Main')

<head><title>Elfresco | Email</title></head>

@section('content')
        <div class="row">
            <div class="col-md-12">
                
                <h1>Email Candidate</h1><strong>{{$candidate->name}}</strong>
                <hr>

              {{Form::model ($candidate, ['route'=>['invite.post', $candidate->id], 'method'=>'POST'])}}

                {{Form::label ('email', 'Email:')}}
                {{Form::text ('email', null, ['class'=>'form-control', 'disabled'=>''])}}

                {{Form::label ('time', 'Time & Date:')}}
                {{Form::text ('time', null, ['class'=>'form-control']) }}

                {{Form::label ('place', 'place:')}}
                {{Form::text ('place', null, ['class'=>'form-control']) }}

                {{Form::label ('interviewer', 'Interviewer Name:')}}
                {{Form::text ('interviewer', null, ['class'=>'form-control']) }}
                
                {{Form::label ('notes', 'Additional Notes:')}}
                {{Form::textarea ('notes', null, ['class'=>'form-control', 'placeholder'=>'Documents to bring ..etc.']) }}

                {{Form::submit ('Send Email', ['class'=>'btn btn-block btn-success', 'style'=>'margin-top:15px;'])}}

                {{Form::close()}}
            </div>
        </div>
@endsection