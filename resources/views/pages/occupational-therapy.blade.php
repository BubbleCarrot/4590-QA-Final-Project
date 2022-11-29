@extends('layouts.master')

@section('content')
<main class="services-main">
	<h1>Occupational Therapy</h1>
	<p class="services-intro">Occupational Therapy differs from other forms of Physical Therapy by having the main goal be improvement of daily activities. Our Occupational Therapists are responsible for treating injuries, illnesses and diseases, and patients with disabilities via frequent movement and activities. For most of our clients, their daily activities and routines have been negatively affected one way or another. Our goal is to help our clients achieve their goals on a day-to-day basis.</p>
	<section class="employees">
		<h2>Occupational Therapists</h2>
		<div class="employee-con">
			<div class="img-con">
				<img class="employee-img" src="images/people/person6.jpg" alt="John Doe">
			</div>
		    <div class="info-con">
			    <ul class="employee-info">
				    <li>Name: John Doe</li>
				    <li>Certifications: All of these certificates and degrees</li>
				    <li>Specialization: All of these specializations that suit what you're looking for</li>
				    <li>Days of Operation: Mondays, Tuesdays, Thursdays, and Sundays</li>
			    </ul>
			    <button class="book-button">Book an Appointment</button>
		    </div>
		</div>
		<div class="employee-con">
            <div class="img-con">
                 <img class="employee-img" src="images/people/person1.jpg" alt="John Doe">
            </div>
			<div class="info-con">
				<ul class="employee-info">
					<li>Name: John Doe</li>
					<li>Certifications: All of these certificates and degrees</li>
					<li>Specialization: All of these specializations that suit what you're looking for</li>
					<li>Days of Operation: Mondays, Tuesdays, Thursdays, and Sundays</li>
				</ul>
				<button class="book-button">Book an Appointment</button>
			</div>
		</div>
	</section>
</main>
@endsection