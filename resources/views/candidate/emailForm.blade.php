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

                {{Form::label ('subject', 'Subject:')}}
                {{Form::text ('subject', null, ['class'=>'form-control']) }}

                {{Form::label ('body', 'Email Body:')}}
                {{Form::textarea ('body', null, ['class'=>'form-control']) }}

                {{Form::submit ('Send Email', ['class'=>'btn btn-block btn-success', 'style'=>'margin-top:15px;'])}}

                {{Form::close()}}
            </div>
        </div>
@endsection