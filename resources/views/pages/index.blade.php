@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>{{$sub}}</p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2 style="color:#66d9ff;">Offices</h2>
                <p style="font-family: Times New Roman;font-size: 20px;">From front desk to stock cupboards, we understand how to operate in an any office environment. Our staff are fully trained to accommodate trading floors or any other high-pressure office environment. We also offer regular “deep clean” services tailored exactly to our clients’ needs.</p>
                {{-- <p><a class="btn btn-default" href="contact.php" role="button">Contact Us &raquo;</a></p> --}}
            </div>
            <div class="col-md-4">
                <h2 style="color:#66d9ff;">Domestic</h2>
                <p style="font-family: Times New Roman;font-size: 20px;">With a dedicated luxury residential team operating completely autonomous to our commercial arm, we can offer the same commitment to quality and service, tailored to accommodate the nuances of the luxury homeowner. A genuine concierge approach to residential cleaning if you like!</p>
                {{-- <p><a class="btn btn-default" href="contact.php" role="button">Contact Us &raquo;</a></p><br /> --}}
            </div>
            <div class="col-md-4">
                <h2 style="color:#66d9ff;">Commercial</h2>
                <p style="font-family: Times New Roman;font-size: 20px;">From car showrooms to retail spaces, we’ll work with you to define the right approach to deliver your goals. We know that timing is a crucial factor when it comes to customer facing environments and we ensure the flexibility required to negate any impact in your day-to-day business.</p>
                {{-- <p><a class="btn btn-default" href="contact.php" role="button">Contact Us &raquo;</a></p> --}}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 mb-3">
                <ul class="list-group" style="margin:0 auto;">
                    <li class="list-group-item">Free estimates over the phone</li>
                    <li class="list-group-item">Competitive flat rates starting at £13 per hour</li>
                    <li class="list-group-item">Flexible slots including late nights, weekends and bank holidays</li>
                    <li class="list-group-item">Our local cleaners are fully trained, vetted and insured</li>
                    <li class="list-group-item">We use eco-friendly solutions and detergents on request</li>
                    <li class="list-group-item">Our services come with a 100% satisfaction guarantee</li>
                    <li class="list-group-item">Coverage of all Bristol and serounding areas</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div style="margin:0 auto;" class="personal-video">
                    <iframe frameborder="0" width="100%" height="328px" src="https://biteable.com/watch/embed/accountant-ad-copy-2393093" allowfullscreen="true" allow="autoplay"></iframe><p><a href="https://biteable.com/watch/accountant-ad-copy-2393093"></a><a href="https://biteable.com"></a></p>
                </div>
            </div>
        </div>
    </div>
@endsection