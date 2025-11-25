@extends('layouts.layout')

@section('title', 'Service')

@section('content')

    <section class="service-banner position-relative">


        <img src="{{ asset('assets/images/banner.svg') }}" alt="Service Banner" class="banner-img img-fluid w-100">


        <div class="banner-title">
            <h1 class="text-white text-center">Area Rug<br>Cleaning</h1>
        </div>

    </section>


    <div class="banner-strip d-flex justify-content-between align-items-center text-white px-4 py-2">
        <span>Get 20% Off On Our Commercial Services</span>
        <span>Limited Time Offer!</span>
    </div>

    <section class="process-section">
        <div class="process-grid">

            <div class="process-item">
                <h2>01</h2>
                <h3>Detailed Inspection</h3>
                <p>We start with a close look to understand your rug’s fiber types and how it is made.</p>
            </div>

            <div class="process-item">
                <h2>02</h2>
                <h3>Deep Cleaning</h3>
                <p>Our team then cleans the rug by hand, using ways chosen for its specific needs.</p>
            </div>

            <div class="process-item">
                <h2>03</h2>
                <h3>Drying & Grooming</h3>
                <p>Your rug is dried in a space with even airflow and comfortable temperature settings.</p>
            </div>

        </div>
    </section>


    <section class="py-5">
        <div class="px-4">
            <h2 class="fw-bold mb-4">
                Why is Area Rug Cleaning
                <span style="color:#2F70B9;">Important</span>
            </h2>

            <p class="text-secondary mb-4">
                Living in Brooklyn means your rugs work tirelessly, absorbing a unique blend of city life,
                the fine soot from idling traffic, the gritty residue of perpetual construction, a constant
                tide of seasonal pollen, and the joyful chaos of meals and gatherings. This isn’t just
                surface dirt, it’s a deep-seated grime that settles into the very foundation of the fibers,
                matting them down and acting as a hidden reservoir for urban allergens.
            </p>

            <p class="text-secondary">
                Our rug cleaning addresses this urban wear and tear head-on, using a depth-targeted approach
                that flushes out these entrenched particles. The result is a thorough refresh that not only
                revitalizes your rug’s appearance, bringing its rich, original colors. The process coaxes out
                the stubborn, ground-in soils that rob your rug of its brilliance and leave it feeling coarse
                underfoot.
            </p>
        </div>
    </section>




    <section class="py-5">
        <div class="px-4">
            <h2 class="fw-bold mb-4">
                Why is Area Rug Cleaning
                <span style="color:#2F70B9;">Important</span>
            </h2>

            <p class="text-secondary mb-4">
                Living in Brooklyn means your rugs work tirelessly, absorbing a unique blend of city life,
                the fine soot from idling traffic, the gritty residue of perpetual construction, a constant
                tide of seasonal pollen, and the joyful chaos of meals and gatherings. This isn’t just
                surface dirt, it’s a deep-seated grime that settles into the very foundation of the fibers,
                matting them down and acting as a hidden reservoir for urban allergens.
            </p>

            <p class="text-secondary">
                Our rug cleaning addresses this urban wear and tear head-on, using a depth-targeted approach
                that flushes out these entrenched particles. The result is a thorough refresh that not only
                revitalizes your rug’s appearance, bringing its rich, original colors. The process coaxes out
                the stubborn, ground-in soils that rob your rug of its brilliance and leave it feeling coarse
                underfoot.
            </p>
        </div>
    </section>


    <section class="py-5">
        <div class="px-4">
            <div class="row g-4 align-items-stretch">

                <div class="col-12 col-md-6 d-flex">
                    <div class="w-100">
                        <img src="{{ asset('assets/images/row4/img.svg') }}" alt="Rug Image"
                            class="img-fluid h-100 w-100 object-fit-cover rounded">
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex">
                    <div
                        class="p-5 rounded bg-dark text-white shadow-lg d-flex flex-column justify-content-between h-100 w-100">

                        <div>
                            <h6 class="text-uppercase letter-spacing-1 mb-3 text-white-50" style="font-size: 0.85rem;">
                                About Us
                            </h6>

                            <h2 class="fw-bold text-white mb-4" style="line-height:1.3;">
                                Get Your Rugs<br>Properly Cleaned.
                            </h2>

                            <p class="text-white-50" style="font-size: 1rem; line-height:1.6;">
                                Ready for a cleaner, healthier rug? Book our area rug cleaning service now and we'll come
                                get your rugs, free of charge anywhere in Brooklyn.
                            </p>
                        </div>

                        <a href="#" class="btn btn-primary align-self-start mt-4">
                            Get a Quote
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="px-4">
            <h2 class="section-title"><span class="highlight">Steps</span> Taken for Detailed Rug Cleaning</h2>
            <p>Our process begins with an inspection and Dust Removal. Each rug receives a thorough examination at our
                Brooklyn facility...</p>
            <p>After that, we move to our Deep Cleaning and Gentle Care phase. We perform a deep yet gentle scrub to break
                up embedded soils while applying our plant-based cleaning solutions with power rinsing to ensure all
                residues are completely flushed out. The result is a thorough refresh that not only revitalizes your rug's
                appearance, bringing its rich, original colors and intricate patterns back into sharp focus while restoring
                a luxuriously soft texture
            </p>
        </div>
    </section>


    <section class="py-5">
        <div class="px-4">
            <h2 class="section-title">Why <span class="highlight">Choose</span> Carpet Cleaning Brooklyn</h2>
            <ul>
                <li>30+ Years of Work</li>
                <li>Rug Care Knowledge</li>
                <li>Green and Effective Solutions</li>
            </ul>
            <p>
                Bring new life to your precious rugs today. Call us now at (718)-502-9978 for a quote and to book your
                appointment.
            </p>
        </div>

    </section>




    <section class="services-section">
        <div class="py-5">
            <div class="col-12 px-4">
                <h2 class="section-title">Our <span>Other</span> Services</h2>
            </div>
        </div>
        <div class="container">


            <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon water">
                                        <img src="{{ asset('assets/row7/img1.svg') }}" />
                                    </div>
                                    <h5 class="service-title">Water & Fire<br>Damage Repair</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon pet">
                                        <img src="{{ asset('assets/row7/img2.svg') }}" />
                                    </div>
                                    <h5 class="service-title">Pet Stain & Pet<br>Odor Removal</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon drapery">
                                        <img src="{{ asset('assets/row7/img3.svg') }}" />
                                    </div>
                                    <h5 class="service-title">Drapery &<br>Blinds Cleaning</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon allergy">
                                        <img src="{{ asset('assets/row7/img4.svg') }}" />
                                    </div>
                                    <h5 class="service-title">Allergy Control<br>Treatment</h5>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon water">
                                        <i class="fas fa-couch"></i>
                                    </div>
                                    <h5 class="service-title">Upholstery<br>Cleaning</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon pet">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <h5 class="service-title">Commercial<br>Cleaning</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon drapery">
                                        <i class="fas fa-spray-can"></i>
                                    </div>
                                    <h5 class="service-title">Sanitization<br>Services</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-card">
                                    <div class="service-icon allergy">
                                        <i class="fas fa-tools"></i>
                                    </div>
                                    <h5 class="service-title">Emergency<br>Services</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row g-0 align-items-stretch">


                <div class="col-lg-6 d-flex">
                    <div class="p-5 bg-primary text-white rounded-start-3 d-flex flex-column justify-content-center w-100">
                        <p class="text-uppercase small mb-2 letter-spacing-1">Discount 20% Off</p>
                        <h2 class="fw-bold">Give Your Rugs the Care<br>They Deserve</h2>

                        <p class="mt-3">
                            Our Brooklyn-based facility is equipped to handle the most delicate rugs
                            with the artisan care they require. We provide free pickup and free
                            delivery for your convenience.
                        </p>

                        <div class="mt-4 d-flex gap-2">
                            <a href="#" class="btn btn-dark">Get Our Service</a>
                            <a href="javascript:void(0);" onclick="showSuccess()" class="btn btn-outline-light">Contact
                                Us</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center">
                        <div class="w-100 py-3">
                            <img src="{{ asset('assets/row8/img.svg') }}"
                                class="img-fluid w-100 object-fit-cover rounded-end-3" alt="Interior rug service section">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





@endsection
@section('scripts')
    <script>
        function showSuccess() {
            alert('Thank you! We will contact you shortly.');
        }
    </script>
@endsection
