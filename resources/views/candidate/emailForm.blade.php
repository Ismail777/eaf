@extends('Main')

<head><title>Elfresco | Email</title></head>

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Email Candidate</h1>
                <hr>
                <form action="{{ url('invite')}}" method="POST">  
                {{ csrf_field()}}
                  
                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection