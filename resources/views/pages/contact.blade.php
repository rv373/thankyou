@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this to contact site owner.</p></div>
        <div class="card-body">
            <form action="{{route('contact.store')}}" method="post" id="contact-form" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="body">Message</label>
                            <textarea name="message" class="form-control" id="Message" rows="3" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mb-2">Send a message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
