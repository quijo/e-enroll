@component('mail::message')



<strong>Name: </strong>{{$data['name']}}<br/>
<strong>Email: </strong> {{$data['email']}}

<strong>Message: </strong><br/>
{{$data['message']}}
@endcomponent
 