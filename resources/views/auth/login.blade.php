@extends('layouts.auth')

@section('style')
    <style>
        body {
            background: var(--bs-primary) !important;
            background: #fff
                /* font-family: Arial, Helvetica, sans-serif; */
                /*Freshman; */
        }

        .container {
            height: 100vh !important;
        }

        .card {
            border: none;
            max-width: 400px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            height: fit-content;
            margin-top: 25vh;
        }

        main.py-4 {
            padding: 0 !important;
        }

        .card-heading {
            font-weight: bold;
            font-family: ;
        }

        .form-control {
            border: none !important;
            background: rgba(165, 147, 69, 0.075);
        }

        .toggle-show {
            position: absolute;
            color: #949494;
            right: 8px;
            top: 8px;
            cursor: pointer;
        }

        .toggle-show.show {
            color: #555555;
        }

        #inputPassword {
            padding-right: 29px;
        }

        .btn {
            border: 0;
            width: 120px;
        }

        .form-control {
            background-color: #eee !important
        }

        .form-control:focus {
            color: #495057;
            border-color: #fff !important;
            outline: 0;
            box-shadow: 0 0 0 0 rgba(0, 123, 255, .25) !important
        }

        a {
            text-decoration: none !important;
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex justify-content-center ">
        <div class="card">
            <form class="card-body py-2 px-2" action="{{ route('processlogin') }}" method="POST" id="form-login">
                @csrf
                <div class="row rone mx-2 mx-md-3 my-3">
                    <h2 class="card-heading py-3">Log In</h2>
                    <div class="col-md-12 mb-4">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="inputEmail" required
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group position-relative">
                            <input type="password" name="password" class="form-control" required id="inputPassword"
                                placeholder="Password">
                            <span class="toggle-show"><i class="bx bx-show-alt fs-5"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row rtwo mx-2 mx-md-3 py-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="g-recaptcha btn btn-primary mb-2">log In</button>
                        </div>
                        @if (session('error'))
                            <span class="text-danger text-sm" role="alert">
                                {{ session('error') }}
                            </span>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('extrascript')
    <script>
        $(document).ready(function() {
            $('.toggle-show').click(function() {
                if ($(this).hasClass('show')) {
                    $(this).removeClass('show');
                    $(this).prev('#inputPassword').attr('type', 'password');
                } else {
                    $(this).addClass('show');
                    $(this).prev('#inputPassword').attr('type', 'text');
                }
            });

        });
    </script>
@endsection
