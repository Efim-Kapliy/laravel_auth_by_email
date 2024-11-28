@extends('layouts.main')

@section('title', 'Login form')

@section('content')
    <div class="alert alert-info" role="all">
        Thank you for registering! A link to confirm your registration has been sent to your email.
    </div>
    <div>
        Didn't receive the link?
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-link ps-0">Send link</button>
        </form>
    </div>
@endsection
