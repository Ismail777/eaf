@component('mail::message')

Hi, {{$candidate->name}}. <br> Thank you for completing the EAF. Here is your canddiate profile. Our staff are currently reviewing your application and they will get back to you soon. <br><br>

### Personal Information:
1-Name: {{$candidate->name}} <br>
2-Nric: {{$candidate->nric}} <br>
3-Adress: {{$candidate->address}} <br> 
4-Mobile Number: {{$candidate->mobile_no}} <br>
5-Email-Address: {{$candidate->email}}<br>
6-Birthday: {{$candidate->birthday}} <br>
7-EPF: {{$candidate->epf}}<br>
8-Gender: {{$candidate->gender}} <br>
9-Martial Status: {{$candidate->martial_status}}<br>
10-Spouse Occupation: {{$candidate->spouse_occupation}}  <br>
11-Kids Number: {{$candidate->kids_no}} <br>
12-Birth Country: {{$candidate->birth_country}}  <br>
13-Citizenship: {{$candidate->citizenship}}
14-Religion: {{$candidate->religion}} <br> 
15-Race: {{$candidate->race}}  <br>


@component('mail::button', ['url' => ''])
Visit us!
@endcomponent

Thanks,<br>
ElFresco Marketing.
@endcomponent
