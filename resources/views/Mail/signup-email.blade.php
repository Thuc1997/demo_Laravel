@extends('layouts.app')
@section('content')
Hello {{$email_data['name']}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
<br><br>
Welcome to my Website!
<br>
Please click the below link to verify your email and activate your account!
<br><br>
<a href="http://localhost/my_tuts/send-emails/blog/public/verify?code={{$email_data['verification_code']}}">Click Here!</a>

<br><br>
Thank you!
<br>
coder aweso.me

@endsection

