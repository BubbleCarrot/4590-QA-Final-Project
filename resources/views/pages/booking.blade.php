@extends('layouts.master')

@section('content')
<main class="mt-32">
    <h2 class="text-center pb-8 text-3xl">Book an Appointment</h2>

    <h3 class="text-center pb-8 text-2xl">Select date</h3>

    <div class="contact px-10">
        <div class="col-span-12">

            @include('partials.status')

            <form action="{{ route('book.send') }}" method="POST">
                @csrf
                <div class="mb-4 pb-6">
                    @error('service')
                    @include('partials.error')
                    @enderror
                    <label for="service" class="block text-sm font-bold mb-2">Service</label>
                    <input type="text" id="service" name="service" value="{{ old('service') }}"
                        class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div class="mb-4 pb-6">
                    @error('practitioner')
                    @include('partials.error')
                    @enderror
                    <label class="block text-sm font-bold md-2" for="practitioner">Health Practitioner</label>
                    <input type="text" id="practitioner" name="practitioner" value="{{ old('practitioner') }}"
                        class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div class="mb-4 pb-6">
                    @error('time')
                    @include('partials.error')
                    @enderror
                    <label class="block text-sm font-bold md-2" for="time">Time</label>
                    <input type="time" id="time" name="time" value="{{ old('time') }}"
                        class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>

                <h3 class="text-center pb-8 text-2xl">Client information</h3>
                <div class="mb-4 pb-6">
                    @error('name')
                    @include('partials.error')
                    @enderror
                    <label class="block text-sm font-bold md-2" for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="full name"
                        class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div class="mb-4 pb-6">
                    @error('email')
                    @include('partials.error')
                    @enderror
                    <label class="block text-sm font-bold md-2" for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="email"
                        class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>
                <div class="mb-4 pb-6">
                    @error('phone_number')
                    @include('partials.error')
                    @enderror
                    <label class="block text-sm font-bold md-2" for="phone-number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                        placeholder="phone number" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                </div>

                <button type="submit" class="primary">Book</button>
            </form>
        </div>
    </div>
</main>


@endsection
