@extends('template.app')

@section('content')
<ul>
    @foreach ($reserveds as $reserved)
    <li>{{$reserved->payment_name_field}}</li>
    <li><img src="images/{{$reserved->payment_receipt_upload_field}}" class="thumbnail" width="100"></li>
    @endforeach
 
<ul>
@endsection