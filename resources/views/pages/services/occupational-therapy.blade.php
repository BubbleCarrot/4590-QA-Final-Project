@extends('layouts.master')

@section('title', 'Occupational Therapy | ' . config('app.name', 'Central Wellness'))

@section('content')
<main class="services-main">
    <h1 class="pb-8">Occupational Therapy</h1>
    <p class="services-intro">Occupational Therapy differs from other forms of Physical Therapy by having the main goal
        be improvement of daily activities. Our Occupational Therapists are responsible for treating injuries, illnesses
        and diseases, and patients with disabilities via frequent movement and activities. For most of our clients,
        their daily activities and routines have been negatively affected one way or another. Our goal is to help our
        clients achieve their goals on a day-to-day basis.</p>
    <section class="employees">
        <h2 class="pb-8">Occupational Therapists</h2>
        <div class="employee-con">
            <div class="img-con">
                <img class="employee-img" src="{{asset('assets/images/people/person6.jpg')}}" alt="Tina Ralls">
            </div>
            <div class="info-con">
                <ul class="employee-info">
                    <li>Tina Ralls</li>
                    <li>Certifications:<br>BA in Biology and Health Science from the University of Toronto, Masters of Occupational Therapy from the University of Manitoba, Doctorate of Occupational Therapy and from the University of Oxford.</li>
                    <li>Specialization:<br>Respective certifications obtained to work as a registered practitioner in B.C</li>
                    <li>Days of Operation:<br>Mondays, Thursdays, Saturdays, and Sundays</li>
                </ul>
                <a class="book-button" href="{{ route('book.index', ['service' => 'occupational-therapy']) }}">
                    Book an Appointment
                </a>
            </div>
        </div>
        <div class="employee-con">
            <div class="img-con">
                <img class="employee-img" src="{{asset('assets/images/people/person1.jpg')}}" alt="Maggie Moreau">
            </div>
            <div class="info-con">
                <ul class="employee-info">
                    <li>Maggie Moreau</li>
                    <li>Certifications:<br>BA in Kinesiology from the University of Victoria, Masters of Pe-occupational Therapy and Occupational Therapy from the University of Toronto, Doctorate of Occupational Therapy from the University of British Columbia.</li>
                    <li>Specialization:<br>Respective certifications obtained to work as a registered practitioner in B.C</li>
                    <li>Days of Operation:<br>Mondays, Wednesdays, Thursdays, and Fridays</li>
                </ul>
                <a class="book-button" href="{{ route('book.index', ['service' => 'occupational-therapy']) }}">
                    Book an Appointment
                </a>
            </div>
        </div>
    </section>
</main>
@endsection