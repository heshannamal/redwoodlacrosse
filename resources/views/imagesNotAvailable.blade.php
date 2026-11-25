@extends('layouts.app')

@section('content')
    <style>
        .no-image-text {
            font-family: 'Racing Sans One', cursive;
            font-weight: 400;
            font-style: normal;
            font-size: 32px;
            color: #111827;
        }
    </style>


    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 text-center">
                <div class="alert alert-light border p-5">
                    <h1 class="no-image-text mb-3">Images Not Available</h1>
                    <p class="text-muted mb-0">
                        The images for this page are currently unavailable.
                    </p>
                    <p class="text-muted mb-0">
                        <a href="{{ URL('/historical-seasons') }}">Go Back</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
