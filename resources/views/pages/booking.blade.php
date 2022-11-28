@extends('layouts.master')

@section('content')
<main class="mt-32">
    <h2 class="text-center pb-8">Select date</h2>

    <div class="contact px-10">
        <div class="col-span-12">
            <form action="{{ route('book.send') }}" method="POST">
                @csrf
                <div class="mb-4 pb-6">
                    <label for="service" class="block text-sm font-bold mb-2">Service</label>
                    <input type="text" id="service" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div class="mb-4 pb-6">
                    <label class="block text-sm font-bold md-2" for="practitioner">Health Practitioner</label>
                    <input type="text" id="practitioner" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div class="mb-4 pb-6">
                    <label class="block text-sm font-bold md-2" for="time">Time</label>
                    <input type="time" id="time" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>

                <h2>Client information</h2>
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
                    <input type="text" id="phone_number" placeholder="phone number"
                        class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>

                <button type="submit">Book</button>
            </form>
        </div>
    </div>
</main>
@endsection
