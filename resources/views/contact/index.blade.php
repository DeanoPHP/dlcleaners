@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Contact Us
                    </div>
                    <div class="card-body">
                        <form action="{{ Route('contact.submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea name="msg" class="form-control"></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary float-right" value="submit">
                        </form>
                        <h3 style="color:red;">Please call <a href="tel: 07398092318">07398092318</a> as form is currently not working</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection