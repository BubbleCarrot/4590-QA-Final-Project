@extends('layouts.master')

@section('title', 'Speech Therapy | ' . config('app.name', 'Central Wellness'))

@section('content')
<main class="services-main">
    <h1 class="pb-8">Speech Therapy</h1>
    <p class="services-intro">Speech Therapy focuses on the assessment and treatment of those with speech and language
        disorders. Our Speech Therapists help our clients develop and strengthen their speech disorders and impairments
        from a young age, to assist in preventing these conditions to worsen. Our methods range from oral exercises to
        activate the vocal cords, to jaw exercises and everything in-between.</p>
    <section class="employees">
        <h2 class="pb-8">Speech Therapists</h2>
        <div class="employee-con">
            <div class="img-con">
                <img class="employee-img" src="{{asset('assets/images/people/person2.jpg')}}" alt="Fay Park-Lemington">
            </div>
            <div class="info-con">
                <ul class="employee-info">
                    <li>Fay Park-Lemington</li>
                    <li>Certifications:<br>BA in Language Development and Psychology from the University of Toronto, Masters of Speech-Language Pathology from the University of Toronto, Doctorate of Philosophy in Audiology and Speech Sciences from the University of British Columbia.</li>
                    <li>Specialization:<br>Respective certifications obtained to work as a registered practitioner in B.C</li>
                    <li>Days of Operation:<br>Mondays, Tuesdays, Thursdays, and Sundays</li>
                </ul>
                <a href="{{ route('book.index') }}">
                    <button class="book-button">Book an Appointment</button>
                </a>
            </div>
        </div>
        <div class="employee-con">
            <div class="img-con">
                <img class="employee-img" src="{{asset('assets/images/people/person3.jpg')}}" alt="Evan Azan">
            </div>
            <div class="info-con">
                <ul class="employee-info">
                    <li>Evan Azan</li>
                    <li>Certifications:<br>BA in Linguistics and Communication Disorders from from the University of Chicago, Masters of Speech-Language Pathology from the University of Chicago, Doctorate of Philosophy in Audiology from the University of British Columbia.</li>
                    <li>Specialization:<br>Respective certifications obtained to work as a registered practitioner in B.C</li>
                    <li>Days of Operation:<br>Wednesdays, Thursdays, Fridays, and Sundays</li>
                </ul>
                <a href="{{ route('book.index') }}">
                    <button class="book-button">Book an Appointment</button>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection