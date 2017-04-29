@component('mail::message')

Hi, {{$employee->name}}

I am from the HR department of El Fresco Marketing Sdn Bhd.

Congratulations to you, we are pleased to offer you an employment oppourtunity with out company, you designation shall be {{$employee->position}}. <br>
your employment contract will be sent to you soon by our staff.
Please use the link below along with your staff ID to register in Fresco database and upload your documents and certifications.

@component('mail::panel')
 Your Staff ID is {{$employee->id}}
@endcomponent

@component('mail::button', ['url' => 'http://eaf.fresco.network/register'])
Register Here
@endcomponent
<br>

Also you can click the link below to read the employee handbook

@component('mail::button', ['url' => 'http://intraweb.fresco.com.my/hr/handbook/'])
Employees Handbook
@endcomponent

Thanks and welcome on board,<br>
{{ config('app.name') }}
@endcomponent
