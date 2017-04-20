@component('mail::message')

Dear Mr.Ms {{$candidate->name}} thank you for completing the EAF. Here is your canddiate profile.

### Personal Information:
1-Name: {{$candidate->name}} 
2-Nric: {{$candidate->nric}}
3-Adress: {{$candidate->address}}  
4-Mobile Number: {{$candidate->mobile_no}} 
5-Email-Address: {{$candidate->email}}
6-Birthday: {{$candidate->birthday}} 
7-EPF: {{$candidate->epf}}
8-Gender: {{$candidate->gender}} 
9-Martial Status: {{$candidate->martial_status}}
10-Spouse Occupation: {{$candidate->spouse_occupation}}  
11-Kids Number: {{$candidate->kids_no}} 
12-Birth Country: {{$candidate->birth_country}}  
13-Citizenship: {{$candidate->citizenship}}  
14-Religion: {{$candidate->religion}}  
15-Race: {{$candidate->race}}  

@foreach ($candidate->education as $candidate->education)
### Education Information:
| School | Cerftificate | CGPA | Time Period |
| ------ | ------------ | ---- | ----------- |
| {{$candidate->education->school}}| {{$candidate->edcation->cert}} | {{$candidate->education->cgpa}} | {{$candidate->education->start_date}}->{{$candidate->education->end_date}} |
@endforeach



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
