@extends('layouts.app')

@section('content')
    <h1 class="mb-3">{{ $title }}</h1>

    <ul>
        <li><a href="tel:07398092318">{{ $phoneNumber }}</a></li>
        <li>{{ $email }}</li>
        <li>{{ $address }}</li>
        <li>{{ $addressLine2 }}</li>
        <li><b>Facebook</b></li>
            <ul><li><a href="https://www.facebook.com/dean.dlcleaners">facebook.com/dean.dlcleaners</a></li></ul>
        <li><b>Yell</b></li>
            <ul><li><a href="https://www.yell.com/biz/dlcleaners-bristol-9746655/">Yell.com</a></li></ul>
        <li><b>Google</b></li>
            <ul><li><a href="https://g.page/dean_dlcleaners">Google.com</a></li></ul>
    </ul>

    <b style="color:red;">Contact form coming soon</b>

@endsection