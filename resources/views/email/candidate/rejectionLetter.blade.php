@component('mail::message')

Dear Mr/Ms. {{$candidate->name}}
<p>We regret to inform you that your application for the {{$candidate->position->position}} position has been rejected.</p>


Thanks,<br>
El Fresco Marketing
@endcomponent
