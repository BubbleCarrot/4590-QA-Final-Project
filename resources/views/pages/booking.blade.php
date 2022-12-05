@extends('layouts.master')

@section('title') {{  'Book now | Central Wellness' }} @endsection

@section('content')
<main>
    <section class="book px-10 mt-48 mb-10">
        <h1 class="text-center pb-8">Book an appointment</h1>
        <div class="rectangle"></div> 
    </section>
    <section class="date px-10">
        <div class="flex-grow">
            <div class="max-w-screen-lg px-4 mx-auto">
            <!-- Index Header -->
            <div class="grid grid-cols-12">
                <div class="col-span-12 flex items-center">
                    <h2 class="flex-grow text-center pb-10">Select a Date</h3>
                    <div class="rectangle"></div>
                </div>
            </div>
             <!-- End: Index Header -->

            <!-- Create: Form -->
            <div class="grid grid-cols-12 py-10">
                <div class="calendar-container col-span">
                    <img class="employee-img" src="{{ asset('assets/images/calendar.png') }}" alt="Static Calendar">
                </div>
                <div class="col-span">
                    <form action="{{ route('book.send') }}" method="POST">
                    @csrf
                    <div class="mb-4 pb-6">
                        <label for="service" class="block text-sm font-bold mb-2">Select Service</label>
                        <input type="text" id="service" class="shadow border rounded w-full py-2 px-3 text-gray-700" placeholder="Select Service">
                    </div>
                    <div class="mb-4 pb-6">
                        <label class="block text-sm font-bold md-2" for="practitioner">Select Health Practitioner</label>
                        <input type="text" id="practitioner" class="shadow border rounded w-full py-2 px-3 text-gray-700" placeholder="Select Health Practitioner">
                    </div>
                    <div class="mb-4 pb-6">
                        <label class="block text-sm font-bold md-2" for="time">Time</label>
                        <input type="time" id="time" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                    </div>
                    </form>
                </div>
                <!-- End Create Form --> 
            </div>
        </div>
    </section>    
    <section class="client-info px-10 pt-10">
        <div class="flex-grow">
            <div class="max-w-screen-sm px-4 mx-auto">
            <!-- Index Header -->
            <div class="grid grid-cols-12">
                <div class="col-span-12 flex items-center">
                    <h2 class="flex-grow text-center">Client Information</h3>
                    <div class="rectangle"></div>
                </div>
            </div>
            <!-- End: Index Header -->

            <!-- Create: Form -->
            <div class="grid grid-cols-12 py-10">
                <div class="col-span-12">
                    <form action="{{ route('book.send') }}" method="POST">
                    @csrf
                    <div class="mb-4 pb-6">
                        <label class="block text-sm font-bold md-2" for="name">Name</label>
                        <input type="text" id="name" placeholder="full name"
                            class="shadow border rounded w-full py-2 px-3 text-gray-700">
                    </div>
                    <div class="mb-4 pb-6">
                        <label class="block text-sm font-bold md-2" for="email">Email</label>
                        <input type="email" id="email" placeholder="email"
                            class="shadow border rounded w-full py-2 px-3 text-gray-700">
                    </div>
                    <div class="mb-4 pb-6">
                        <label class="block text-sm font-bold md-2" for="phone-number">Phone Number</label>
                        <input type="tel" id="phone_number" placeholder="phone number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                    </div>                            
                    <div class="text-center">
                        <button class="btn client-btn py-2 px-4 text-white bg-green-700 font-bol rounded-sm" type="submit">Book</button>                        
                    </div>       
                    </form>
                </div>
                <!-- End Create Form --> 
            </div>
        </div>
    </section>
</main>
@endsection