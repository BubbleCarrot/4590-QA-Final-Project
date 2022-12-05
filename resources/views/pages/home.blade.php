@extends('layouts.master')

@section('title', 'Homepage | ' . config('app.name', 'Central Wellness'))

@section('content')
<main>
    <section id="top" class="banner">
        <h1 class="px-4">Central Wellness</h1>
    </section>
    <section id="services" class="services pb-20 pt-10 px-10">
        <h2 class="text-center pb-8">Our Services</h1>
            <div class="rectangle"></div>
            <div class="flex justify-center">
                <div class="services-container flex flex-wrap justify-center">
                    <div class="service-imgs mb-4 mx-5">
                        <a href="{{ route('service','physical-therapy') }}">
                            <img src="{{ asset('assets/images/physical.png') }}" alt="#">
                            <p class="text-img">Physical Therapy</p>
                        </a>
                    </div>
                    <div class="service-imgs mb-4 mx-5">
                        <a href="{{ route('service','chiropractic-treatment') }}">
                            <img class="chiro" src="{{ asset('assets/images/chiro.png') }}" alt="">
                            <p class="text-img">Chiropractor Treatment</p>
                        </a>
                    </div>
                    <div class="service-imgs mb-4 mx-5">
                        <a href="{{ route('service','speech-therapy') }}">
                            <img src="{{asset('assets/images/speech.jpg')}}" alt="#">
                            <p class="text-img">Speech Therapy</p>
                        </a>
                    </div>
                    <div class="service-imgs mb-4 mx-5">
                        <a href="{{ route('service','occupational-therapy') }}">
                            <img class="card-4" src="{{asset('assets/images/occ.jpeg')}}" alt="#">
                            <p class="text-img">Occupational Therapy</p>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <section id="about" class="about pb-20">
        <h2 class="text-center pb-8">Who We Are</h2>
        <div class="rectangle"></div>
        <div class="container-xl flex flex-col items-center px-10">
            <p class="pb-8">Established in 2022, Central Wellness is a physical wellness facility that connects clients
                with professionals that will meet their needs. Our clients are our priority, and we ensure that from the
                moment a client enters our facilities to the moment they leave, they feel taken care of and heard.</p>
            <p class="pb-8 italic">Our priority is our clients' wellness and happiness.</p>
            <p>Join our loyal clientele today!</p>
        </div>
    </section>
    <section id="contact" class="contact px-10 pb-10">
        <div class="flex-grow">
            <div class="max-w-screen-sm px-4 mx-auto">
                <!-- Index Header -->
                <div class="grid grid-cols-12">
                    <div class="col-span-12 flex items-center">
                        <h2 class="flex-grow text-center">Contact Us</h3>
                            <div class="rectangle"></div>
                    </div>
                </div>
                <!-- End: Index Header -->

                <!-- Create: Form -->
                <div class="grid grid-cols-12 py-10">
                    <div class="col-span-12">
                        <form>
                            <div class="mb-4 pb-6">
                                <label class="block text-sm font-bold mb-2" for="">Name</label>
                                <input class="rounded w-full py-2 px-3 text-gray-700" id="" type="name" name="name"
                                    placeholder="full name">
                            </div>

                            <div class="mb-4 pb-6">
                                <label class="block text-sm font-bold mb-2" for="">Email</label>
                                <input class="rounded w-full py-2 px-3 text-gray-700" id="" type="email" name="email"
                                    placeholder="email">
                            </div>

                            <div class="mb-4 pb-6">
                                <label class="block text-sm font-bold mb-2" for="">Phone Number</label>
                                <input class="rounded w-full py-2 px-3 text-gray-700" id="" type="email" name="email"
                                    placeholder="phone number">
                            </div>

                            <div class="text-center">
                                <button class="btn contact-btn py-2 px-4 text-white font-bol rounded-sm"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Create Form -->
                </div>
            </div>
            <div>
                <a href="#top">
                    <img class="arrow m-auto" src="{{asset('assets/images/arrow-up.svg')}}" alt="Page up">
                </a>
            </div>
    </section>
</main>
@endsection