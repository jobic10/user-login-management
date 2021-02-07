@extends('templates.main')

@section('content')
<h1>Email not verified</h1>
<p>Dear user, you need to verify your email to proceed. Thanks!</p>
<form action="{{ route('verification.send') }}" method="post">
@csrf
<input type="submit" value="Resend" class="btn btn-success">
</form>
@endsection
