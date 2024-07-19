<?php use App\Http\Controllers\ReservationController; ?>
@extends('Shared.layout')
@include('newNav')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show bg-transparent border-0" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @auth

        <nav class="mb-3 navbar navbar-expand sticky-top bg-black navbar-dark" id="navbar" style="z-index:1;">
            <div class="container-fluid">


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mb-1 navbar-nav me-auto mb-lg-0">
                        <li class="nav-item me-2">
                            <a href="#" class="btn btn-sm btn-dark" type="button">Manage your arena</a>
                            </a>

                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a href="{{ route('showReservations') }}" class="btn btn-sm btn-dark" type="button">

                                Booking requests <span class="badge"
                                    style="color: red; border:solid 0.5px ;">{{ ReservationController::showReservations() }}</span>


                            </a>

                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        </nav>
        <div class="row container-fluid justify-content-center ">



            @if (!count($arenas) > 0)
                <span class="link-danger m-5">No results found</span>
            @endif


            @foreach ($arenas as $arena)
                <div class="p-0 m-1 text-center col-10 col-md-6 col-lg-4 card  text-white"
                    style="background-color: rgb(5, 5, 5)">
                    <img class="img-fluid card-img-top w-100"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuA7safnMxSkszvObGxvPrtB-6nxXbcgOkVg&usqp=CAU"
                        alt="image">
                    <div class="card-body">
                        <h4 class="card-title h4" style="color: rgb(255, 145, 0)">
                            {{ $arena->name }}
                        </h4>
                        <p class="card-text">Location: {{ $arena->location }} <br>
                            Capacity: {{ $arena->capacity }}<br>
                            Charges per hour: Kshs. {{ $arena->charges }}<br>
                            Email: {{ $arena->email }}<br>
                            Phone: {{ $arena->phone }}<br>
                        </p>
                        <div class="card-footer">

                            <form action="{{ route('goToBook', $arena->id) }}" method="POST">
                                @csrf
                                <button class="mt-1 rounded btn btn-outline-dark" style="color: rgb(255, 145, 0)"
                                    type="submit">Make
                                    booking</button>
                            </form>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>

<!-- Payment Button Section -->
<div class="text-center mt-1" style="color:white">
            <a href= "{{ route('initiatepush') }}">Pay Now</a>
            
        </div>

        <!-- JavaScript Function for STK Push -->
        <script>
            function sendSTKPush() {
                // var stkPushData = {
                //     // "MerchantRequestID": "f1e2-4b95-a71d-b30d3cdbb7a7896606",
                //     // "CheckoutRequestID": "ws_CO_17072024215007242759249670",
                //     // "ResponseCode": "0",
                //     // "ResponseDescription": "Success. Request accepted for processing",
                //     // "CustomerMessage": "Success. Request accepted for processing"
                // };

                // Assuming you have an endpoint to handle the STK push
               // Define the endpoint for initiating the push
var endpoint = '{{ route('initiatepush') }}'; // Replace with your endpoint

// Function to send STK Push request
function sendSTKPush(stkPushData) {
    // Fetch API to send the GET request
    fetch(endpoint, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token for security
        },
        body: JSON.stringify(stkPushData) // Convert the data to JSON format
    })
    .then(response => response.json()) // Parse the JSON response
    .then(data => {
        // Alert success message if STK Push is sent successfully
        alert('STK Push sent successfully');
    })
    .catch(error => {
        // Log and alert error message if there's an issue
        console.error('Error:', error);
        alert('Error sending STK Push');
    });
}

        </script>

    @endauth
@endsection
