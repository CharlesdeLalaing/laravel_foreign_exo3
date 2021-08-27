@extends('layout.base')

@section('content')
    <div class="container mb-5">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Register Today</h3>
                            <p>Fill in the data below.</p>
                            <form action="/user-store" method="POST" class="requires-validation" novalidate>

                                @csrf

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                    <div class="valid-feedback">Username field is valid!</div>
                                    <div class="invalid-feedback">Username field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="nickname" placeholder="Full nickname" required>
                                    <div class="valid-feedback">Nickname field is valid!</div>
                                    <div class="invalid-feedback">Nickname field cannot be blank!</div>
                                </div>

                                <div class="col-md-12 my-3">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address"
                                        required>
                                    <div class="valid-feedback">Email field is valid!</div>
                                    <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>

                                <div class="col-md-12">
                                    <input class="form-control" type="integer" name="age" placeholder="Age"
                                        required>
                                    <div class="valid-feedback">Age field is valid!</div>
                                    <div class="invalid-feedback">Age field cannot be blank!</div>
                                </div>


                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="phone" placeholder="Phone number"
                                        required>
                                    <div class="valid-feedback">Phone number field is valid!</div>
                                    <div class="invalid-feedback">Phone number field cannot be blank!</div>
                                </div>


                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
