@extends('layouts.master')

@section('title', 'Chiropractic Treatment | ' . config('app.name', 'Central Wellness'))

@section('content')
<main class="services-main">
    <h1 class="pb-8">Chiropractic Treatment</h1>
    <p class="services-intro">Chiropractic Treatment refers to the adjustment and manipulation of the spine and joints
        in order to alleviate body aches, pains, and discomforts. Using hands of adjustment techniques, our
        Chiropractors strive to encourage your body to independently heal by focusing on the spin, which in turn affects
        mobility of the neck and back.</p>
    <section class="employees">
        <h2 class="pb-8">Chiropractors</h2>
        <div class="employee-con">
            <div class="img-con">
                <img class="employee-img" src="{{ asset('assets/images/people/person7.jpg') }}" alt="James Mendoza">
            </div>
            <div class="info-con">
                <ul class="employee-info">
                    <li>James Mendoza</li>
                    <li>Certifications:<br>BA in Biology and Chiropractic Therapy from Sherman College of Chiropractic, Doctor of Chiropractic from the New York Chiropractic College.</li>
                    <li>Specialization:<br>Certified Strength and Conditioning Specialist, Respective certifications obtained to worked as a registered practitioner in B.C</li>
                    <li>Days of Operation:<br>Wednesdays, Thursdays, and Fridays</li>
                </ul>
                <a class="book-button" href="{{ route('book.index', ['service' => 'chiropractic-treatment']) }}">
                    Book an Appointment
                </a>
            </div>
        </div>
        <div class="employee-con">
            <div class="img-con">
                <img class="employee-img" src="{{asset('assets/images/people/person5.jpg')}}" alt="Lily Washington">
            </div>
            <div class="info-con">
                <ul class="employee-info">
                    <li>Lily Washington</li>
                    <li>Certifications:<br>BA in Human Anatomy from the Texas Chiropractic College, Doctor of Chiropractic  from the University Western States.</li>
                    <li>Specialization:<br>Doctor of Chiropractic Philosophy Certification, Respective certifications obtained to worked as a registered practitioner in B.C</li>
                    <li>Days of Operation:<br>Mondays, Wednesdays, Saturdays, Saturdays</li>
                </ul>
                <a class="book-button" href="{{ route('book.index', ['service' => 'chiropractic-treatment']) }}">
                    Book an Appointment
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
