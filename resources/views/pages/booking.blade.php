@extends('layouts.master')

@section('title', 'Book now | ' . config('app.name', 'Central Wellness'))

@section('content')
<main>
    <section class="book px-10 mt-48 mb-10">
        <h1 class="text-center pb-8">Book an appointment</h1>
        <div class="rectangle"></div>
    </section>
    <form action="{{ route('book.send') }}" method="POST">
        @csrf

        <section class="date px-10">

            @include('partials.status')

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
                            <img class="employee-img" src="{{ asset('assets/images/calendar.png') }}"
                                alt="Static Calendar">
                        </div>
                        <div class="col-span">
                            @csrf
                            <div class="mb-4 pb-6">
                                @error('service')
                                @include('partials.error')
                                @enderror
                                <label for="service" class="block text-sm font-bold mb-2">Select Service</label>
                                <select id="service" name="service"
                                    class="shadow border rounded w-full py-2 px-3 text-gray-700">
                                    <option disabled selected>-- Select</option>
                                    @foreach ($services as $service)
                                    <option value="{{ $service }}" @selected(old('service')==$service)>
                                        {{ $service }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4 pb-6">
                                @error('practitioner')
                                @include('partials.error')
                                @enderror
                                <label class="block text-sm font-bold md-2" for="practitioner">Select Health
                                    Practitioner</label>
                                <select id="practitioner" name="practitioner"
                                    class="shadow border rounded w-full py-2 px-3 text-gray-700">
                                    <option disabled selected>-- Select</option>
                                    @foreach ($practitioners as $practitioner)
                                    <option value="{{ $practitioner }}" @selected(old('practitioner')==$practitioner)>
                                        {{ $practitioner }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4 pb-6">
                                @error('time')
                                @include('partials.error')
                                @enderror
                                <label class="block text-sm font-bold md-2" for="time">Time</label>
                                <input type="time" id="time" value="{{ old('time') }}" name="time"
                                    class="shadow border rounded w-full py-2 px-3 text-gray-700">
                            </div>
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

                    <div class="grid grid-cols-12 py-10">
                        <div class="col-span-12">
                            <div class="mb-4 pb-6">
                                @error('name')
                                @include('partials.error')
                                @enderror
                                <label class="block text-sm font-bold md-2" for="name">Name</label>
                                <input type="text" id="name" placeholder="full name" value="{{ old('name') }}"
                                    name="name" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                            </div>
                            <div class="mb-4 pb-6">
                                @error('email')
                                @include('partials.error')
                                @enderror
                                <label class="block text-sm font-bold md-2" for="email">Email</label>
                                <input type="email" id="email" placeholder="email" value="{{ old('email') }}"
                                    name="email" class="shadow border rounded w-full py-2 px-3 text-gray-700">
                            </div>
                            <div class="mb-4 pb-6">
                                @error('phone_number')
                                @include('partials.error')
                                @enderror
                                <label class="block text-sm font-bold md-2" for="phone-number">Phone Number</label>
                                <input type="tel" id="phone_number" placeholder="phone number" name="phone_number"
                                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="{{ old('phone_number') }}"
                                    class="shadow border rounded w-full py-2 px-3 text-gray-700">
                            </div>
                            <div class="text-center">
                                <button class="btn client-btn py-2 px-4 text-white bg-green-700 font-bol rounded-sm"
                                    type="submit">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </form>

</main>
@endsection