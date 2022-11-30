@extends('layouts.master')

@section('content')
<main class="services-main">
	<h1 class="pb-8">Physical Therapy</h1>
	<p class="services-intro">Physical Therapy is a treatment that involves physical methods of healing injuries and other discomforts. Often confused with Physiotherapy (an approach to healing that takes a more hands-on approach), Physical Therapy focuses more on strengthening muscles and improving balance in an exercise-based approach that may have been affected as a result of injury. Although Physical Therapy is the main focus of our Physical Therapists, most are also certified in Physiotherapy as well.</p>
	<section class="employees">
		<h2 class="pb-8">Physical Therapists</h2>
		<div class="employee-con">
			<div class="img-con">
				<img class="employee-img" src="{{asset('assets/images/people/person4.jpg')}}" alt="John Doe">
			</div>
		    <div class="info-con">
				<ul class="employee-info">
					<li>Name: John Doe</li>
					<li>Certifications: All of these certificates and degrees</li>
					<li>Specialization: All of these specializations that suit what you're looking for</li>
					<li>Days of Operation: Mondays, Tuesdays, Thursdays, and Sundays</li>
				</ul>
				<a href="{{ route('book.index') }}">
					<button class="book-button">Book an Appointment</button>
				</a>
			</div>
		</div>
		<div class="employee-con">
			<div class="img-con">
				<img class="employee-img" src="{{asset('assets/images/people/person8.jpg')}}" alt="John Doe">
			</div>
			<div class="info-con">
				<ul class="employee-info">
					<li>Name: John Doe</li>
					<li>Certifications: All of these certificates and degrees</li>
					<li>Specialization: All of these specializations that suit what you're looking for</li>
					<li>Days of Operation: Mondays, Tuesdays, Thursdays, and Sundays</li>
				</ul>
				<a href="{{ route('book.index') }}">
					<button class="book-button">Book an Appointment</button>
				</a>	
			</div>
		</div>
	</section>
</main>
@endsection