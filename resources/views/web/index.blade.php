@extends('layouts.layout')

@section('content')
@include('web.components.banner-slidder');

<!-- About Us Section Start -->
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- About Us Images Start -->
                <div class="about-us-images">
                    <!-- About Image 1 Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('build/assets/images/about-img-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image 1 End -->

                    <!-- About Image 2 Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('build/assets/images/about-img-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image 2 End -->

                    <!-- Contact Circle Start -->
                    <div class="contact-circle">
                        <img src="{{ asset('build/assets/images/contact-us-img.svg') }}" alt="">
                    </div>
                    <!-- Contact Circle End -->
                </div>
                <!-- About Us Images End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Effortless <span>Payroll Solutions</span> for Small Businesses</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Simplify your payroll process with our fast, reliable, and cost-effective solutions. We handle everything, from tax compliance to accurate payments, so you can focus on growing your business.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content body Start -->
                    <div class="about-content-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <!-- About Content Info Start -->
                                <div class="about-content-info row">
                                    <!-- About Goal Box Start -->
                                    <div class="about-goal-box wow fadeInUp col-md-6" data-wow-delay="0.4s">
                                        <div class="icon-box">
                                            <img src="{{ asset('build/assets/images/icon-financial-strategies.svg') }}" alt="">
                                        </div>

                                        <div class="about-goal-box-content">
                                            <h3>State ID Registration</h3>
                                            <p>We assist in obtaining essential state identification for unemployment and tax withholding, ensuring compliance with state regulations.</p>
                                        </div>
                                    </div>
                                    <!-- About Goal Box End -->

                                    <!-- About Goal Box Start -->
                                    <div class="about-goal-box wow fadeInUp col-md-6" data-wow-delay="0.5s">
                                        <div class="icon-box">
                                            <img src="{{ asset('build/assets/images/icon-financial-strategies.svg') }}" alt="">
                                        </div>

                                        <div class="about-goal-box-content">
                                            <h3>Upfront, Transparent Pricing</h3>
                                            <p>No hourly rates or hidden fees—just flat, predictable pricing with no surprises.</p>
                                        </div>
                                    </div>
                                    <!-- About Goal Box End -->

                                    <!-- About Contact Box Start -->
                                    <div class="about-contact-box wow fadeInUp col-md-12" data-wow-delay="0.6s">
                                        <div class="icon-box">
                                            <img src="{{ asset('build/assets/images/icon-phone.svg') }}" alt="">
                                        </div>

                                        <div class="about-contact-content">
                                            <p><a >Schedule My Free Call</a></p>
                                        </div>
                                    </div>
                                    <!-- About Contact Box End -->
                                </div>
                                <!-- About Content Info End -->
                            </div>


                        </div>
                    </div>
                    <!-- About Content body End -->
                </div>
                <!-- About Us Content End -->
            </div>

        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Our Services Section Start -->
<section class="our-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Service Content Start -->
                <div class="our-service-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Hassle-Free <span>Payroll Solutions</span> for Small Businesses</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Section content Button Start -->
                    <div class="service-content-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a  class="btn-default">Explore Services</a>
                    </div>
                    <!-- Section content Button End -->
                </div>
                <!-- Service Content End -->
            </div>

            <div class="col-lg-8">
                <!-- Our Service List Start -->
                <div class="our-service-list">
                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-no">
                            <h2>01</h2>
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-service-1.svg') }}" alt="">
                            </div>

                            <div class="service-item-content">
                                <h3>Comprehensive Payroll Processing</h3>
                                <p>We handle your payroll from start to finish, ensuring timely and accurate payments with full compliance.</p>
                                <a  class="service-btn"><img src="{{ asset('build/assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-no">
                            <h2>02</h2>
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-service-2.svg') }}" alt="">
                            </div>

                            <div class="service-item-content">
                                <h3>State ID Registration</h3>
                                <p>We assist in obtaining your state identification for payroll tax compliance, unemployment, and withholding.</p>
                                <a  class="service-btn"><img src="{{ asset('build/assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-no">
                            <h2>03</h2>
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-service-3.svg') }}" alt="">
                            </div>

                            <div class="service-item-content">
                                <h3>Tax Filing & Compliance</h3>
                                <p>Ensure payroll tax accuracy with automatic filings, W-2 and 1099 processing, and real-time compliance updates.</p>
                                <a  class="service-btn"><img src="{{ asset('build/assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-no">
                            <h2>04</h2>
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-service-4.svg') }}" alt="">
                            </div>

                            <div class="service-item-content">
                                <h3>Employee & Contractor Payments</h3>
                                <p>Pay your employees and contractors seamlessly via direct deposit or paper checks with full tracking.</p>
                                <a  class="service-btn"><img src="{{ asset('build/assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-no">
                            <h2>05</h2>
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-service-5.svg') }}" alt="">
                            </div>

                            <div class="service-item-content">
                                <h3>Transparent & Flat Pricing</h3>
                                <p>No hourly rates or hidden fees. Just simple, affordable pricing with no surprises.</p>
                                <a class="service-btn"><img src="{{ asset('build/assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item">
                        <div class="service-no">
                            <h2>06</h2>
                        </div>
                        <div class="service-content-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-service-6.svg') }}" alt="">
                            </div>

                            <div class="service-item-content">
                                <h3>Dedicated Payroll Experts</h3>
                                <p>Get real-time support from payroll specialists who ensure everything runs smoothly.</p>
                                <a  class="service-btn"><img src="{{ asset('build/assets/images/arrow-white.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                <!-- Our Service List End -->

                <!-- Service Footer Start -->
                <div class="service-footer wow fadeInUp" data-wow-delay="0.8s">
                    <p>Let’s simplify your payroll process. <a >Schedule a Free Consultation</a></p>
                </div>
                <!-- Service Footer End -->
            </div>
        </div>
    </div>
</section>

<!-- Our Services Section End -->

<!-- Why Choose Us Section Start -->
<section class="why-choose-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Why Choose Content Start -->
                <div class="why-choose-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Why Choose Us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Reliable & Efficient <span>Payroll Solutions</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why Choose Box List Start -->
                    <div class="why-choose-box-list">
                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-why-choose-1.svg') }}" alt="">
                            </div>

                            <div class="why-choose-box-content">
                                <h3>Fast & Accurate Payroll</h3>
                                <p>Seamless payroll processing with guaranteed accuracy and timely payments.</p>
                            </div>
                        </div>
                        <!-- Why Choose Box End -->

                        <!-- Why Choose Box Start -->
                        <div class="why-choose-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-why-choose-2.svg') }}" alt="">
                            </div>

                            <div class="why-choose-box-content">
                                <h3>State & Tax Compliance</h3>
                                <p>We handle payroll tax filings, deductions, and state ID registrations with ease.</p>
                            </div>
                        </div>
                        <!-- Why Choose Box End -->
                    </div>
                    <!-- Why Choose Box List End -->

                    <!-- Why Choose List Start -->
                    <div class="why-choose-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>Transparent flat-rate pricing</li>
                            <li>Dedicated payroll support</li>
                        </ul>
                    </div>
                    <!-- Why Choose List End -->
                </div>
                <!-- Why Choose Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Why Choose Image Start -->
                <div class="why-choose-image">
                    <!-- Why Choose Image 1 Start -->
                    <div class="why-choose-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('build/assets/images/why-choose-img-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image 1 End -->

                    <!-- Why Choose Image 2 Start -->
                    <div class="why-choose-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('build/assets/images/why-choose-img-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image 2 End -->

                    <!-- Why Choose Contact Circle Start -->
                    <div class="why-choose-contact-circle">
                        <img src="{{ asset('build/assets/images/contact-us-img.svg') }}" alt="">
                    </div>
                    <!-- Why Choose Contact Circle End -->
                </div>
                <!-- Why Choose Image End -->
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section End -->

<!-- Our Feature Section Stat -->
<section class="our-feature">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title dark-section">
                    <h3 class="wow fadeInUp">Our Features</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Key Features of Our <span>Payroll Services</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                    <a  class="btn-default">Get Started</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Our Feature List Start -->
                <div class="our-feature-list">
                    <!-- Feature Item Start -->
                    <div class="our-feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('build/assets/images/icon-our-feature-1.svg') }}" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3>Automated Payroll Processing</h3>
                            <p>Streamline payroll with automated calculations, direct deposits, and compliance handling.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="our-feature-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('build/assets/images/icon-our-feature-2.svg') }}" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3>State & Federal Tax Compliance</h3>
                            <p>We handle tax filings, deductions, and ensure compliance with all regulations.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="our-feature-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('build/assets/images/icon-our-feature-3.svg') }}" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3>State ID Registration</h3>
                            <p>We assist with obtaining your state tax and unemployment ID for seamless payroll processing.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="our-feature-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('build/assets/images/icon-our-feature-4.svg') }}" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3>Employee Benefits Integration</h3>
                            <p>Sync payroll with health insurance, retirement plans, and other benefits for employees.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="our-feature-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="{{ asset('build/assets/images/icon-our-feature-5.svg') }}" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3>Flat, Transparent Pricing</h3>
                            <p>No hidden fees or surprises—just simple, affordable payroll pricing.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->

                    <!-- Feature Item Start -->
                    <div class="our-feature-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="{{ asset('build/assets/images/icon-our-feature-6.svg') }}" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3>Dedicated Payroll Support</h3>
                            <p>Access expert assistance whenever you need help with payroll processing.</p>
                        </div>
                    </div>
                    <!-- Feature Item End -->
                </div>
                <!-- Our Feature List End -->
            </div>

            <div class="col-lg-12">
                <!-- Our Featured Footer Start -->
                <div class="our-feature-footer wow fadeInUp" data-wow-delay="1.2s">
                    <p><span>Get Started</span> Effortless payroll made for small businesses. <a >Contact Us</a></p>
                </div>
                <!-- Our Featured Footer End -->
            </div>
        </div>
    </div>
</section>

<!-- Our Feature Section End -->

<!-- Some Fact Section Start -->
<section class="fact-counter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Fact Counter Image Start -->
                <div class="fact-counter-image">
                    <!-- Fact Counter img Start -->
                    <div class="fact-counter-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('build/assets/images/fact-counter-img.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Fact Counter img End -->

                    <!-- Fact Counter Skillbar Start -->
                    <div class="fact-counter-skillbar">
                        <img src="{{ asset('build/assets/images/fact-counter-skillbar-img.png') }}" alt="">
                    </div>
                    <!-- Fact Counter Skillbar End -->
                </div>
                <!-- Fact Counter Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Fact Counter Content Start -->
                <div class="fact-counter-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Some Payroll Facts</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Key Facts About Our <span>Payroll Services</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We provide accurate, timely, and stress-free payroll solutions for small businesses, ensuring compliance and efficiency.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Fact Counter Box List Start -->
                    <div class="fact-counter-box-list">
                        <!-- Fact Counter Box Start -->
                        <div class="fact-counter-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-fact-counter-1.svg') }}" alt="">
                            </div>

                            <div class="fact-counter-box-content">
                                <h2><span class="counter">15</span>+</h2>
                                <p>Years of Payroll Expertise</p>
                            </div>
                        </div>
                        <!-- Fact Counter Box End -->

                        <!-- Fact Counter Box Start -->
                        <div class="fact-counter-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-fact-counter-2.svg') }}" alt="">
                            </div>

                            <div class="fact-counter-box-content">
                                <h2><span class="counter">95</span>%</h2>
                                <p>Client Retention Rate</p>
                            </div>
                        </div>
                        <!-- Fact Counter Box End -->

                        <!-- Fact Counter Box Start -->
                        <div class="fact-counter-box">
                            <div class="icon-box">
                                <img src="{{ asset('build/assets/images/icon-fact-counter-3.svg') }}" alt="">
                            </div>

                            <div class="fact-counter-box-content">
                                <h2><span class="counter">10K</span>+</h2>
                                <p>Payrolls Processed Annually</p>
                            </div>
                        </div>
                        <!-- Fact Counter Box End -->
                    </div>
                    <!-- Fact Counter Box List End -->

                    <!-- Fact Counter List Start -->
                    <div class="fact-counter-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>100% tax compliance guaranteed</li>
                            <li>Seamless payroll & benefits integration</li>
                        </ul>
                    </div>
                    <!-- Fact Counter List End -->
                </div>
                <!-- Fact Counter Content End -->
            </div>
        </div>
    </div>
</section>


<!-- How It Work Section Start -->
<section class="how-it-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- How It Work Content Start -->
                <div class="how-it-work-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">How It Works</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our Simple <span>Payroll Process</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Our payroll process ensures accuracy, compliance, and hassle-free salary management. From setup to ongoing support, we handle everything so you can focus on your business.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- How It Work Button Start -->
                    <div class="how-it-work-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a  class="btn-default">Learn More</a>
                    </div>
                    <!-- How It Work Button End -->
                </div>
                <!-- How It Work Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Work Steps Box Start -->
                <div class="work-steps-box">
                    <!-- Work Steps Item Start -->
                    <div class="work-step-item wow fadeInUp">
                        <div class="work-step-item-content">
                            <h3>Step</h3>
                            <h2>Setup & Onboarding</h2>
                            <p>We start by gathering employee details, tax information, and setting up payroll schedules to match your business needs.</p>
                        </div>
                        <div class="work-step-item-no">
                            <h2>01</h2>
                        </div>
                    </div>
                    <!-- Work Steps Item End -->

                    <!-- Work Steps Item Start -->
                    <div class="work-step-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="work-step-item-content">
                            <h3>Step</h3>
                            <h2>Payroll Processing</h2>
                            <p>We calculate salaries, deductions, and taxes while ensuring compliance with federal and state regulations.</p>
                        </div>
                        <div class="work-step-item-no">
                            <h2>02</h2>
                        </div>
                    </div>
                    <!-- Work Steps Item End -->

                    <!-- Work Steps Item Start -->
                    <div class="work-step-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="work-step-item-content">
                            <h3>Step</h3>
                            <h2>Direct Deposits & Tax Filing</h2>
                            <p>Salaries are deposited directly into employee accounts, and we handle payroll tax filings to keep you compliant.</p>
                        </div>
                        <div class="work-step-item-no">
                            <h2>03</h2>
                        </div>
                    </div>
                    <!-- Work Steps Item End -->
                </div>
                <!-- Work Steps Box End -->
            </div>
        </div>
    </div>
</section>

<!-- How It Work Section End -->

<!-- Our Pricing Section Start -->
<section class="our-pricing">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Pricing Plan</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Affordable Payroll <span>Solutions</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-7">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                    <a  class="btn-default">Contact Now</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Pricing Box Start -->
                <div class="pricing-box wow fadeInUp">
                    <!-- Pricing Header Start -->
                    <div class="pricing-header">
                        <h3>Basic Plan</h3>
                        <h2><sup>$</sup>49.00<sub>/per month</sub></h2>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Box Body Start -->
                    <div class="pricing-body">
                        <!-- Pricing List Title Start -->
                        <div class="pricing-list-title">
                            <h3>What's included?</h3>
                        </div>
                        <!-- Pricing List Title End -->

                        <!-- Pricing List Start -->
                        <div class="pricing-list">
                            <ul>
                                <li>Payroll processing for up to 5 employees</li>
                                <li>Direct deposit payments</li>
                                <li>Automated tax calculations</li>
                                <li>Basic payroll reports</li>
                            </ul>
                        </div>
                        <!-- Pricing List End -->
                    </div>
                    <!-- Pricing Box Body End -->

                    <!-- Pricing Button Start -->
                    <div class="pricing-btn">
                        <a href="#" class="btn-default btn-highlighted">Select this package</a>
                    </div>
                    <!-- Pricing Button End -->
                </div>
                <!-- Pricing Box End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Pricing Box Start -->
                <div class="pricing-box highlighted-box wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Pricing Header Start -->
                    <div class="pricing-header">
                        <h3>Standard Plan</h3>
                        <h2><sup>$</sup>99.00<sub>/per month</sub></h2>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Box Body Start -->
                    <div class="pricing-body">
                        <!-- Pricing List Title Start -->
                        <div class="pricing-list-title">
                            <h3>What's included?</h3>
                        </div>
                        <!-- Pricing List Title End -->

                        <!-- Pricing List Start -->
                        <div class="pricing-list">
                            <ul>
                                <li>Payroll processing for up to 15 employees</li>
                                <li>Direct deposit & tax filings</li>
                                <li>State & federal tax compliance</li>
                                <li>Detailed payroll reports</li>
                            </ul>
                        </div>
                        <!-- Pricing List End -->
                    </div>
                    <!-- Pricing Box Body End -->

                    <!-- Pricing Button Start -->
                    <div class="pricing-btn">
                        <a href="#" class="btn-default btn-highlighted">Select this package</a>
                    </div>
                    <!-- Pricing Button End -->
                </div>
                <!-- Pricing Box End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Pricing Box Start -->
                <div class="pricing-box wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Pricing Header Start -->
                    <div class="pricing-header">
                        <h3>Premium Plan</h3>
                        <h2><sup>$</sup>149.00<sub>/per month</sub></h2>
                    </div>
                    <!-- Pricing Header End -->

                    <!-- Pricing Box Body Start -->
                    <div class="pricing-body">
                        <!-- Pricing List Title Start -->
                        <div class="pricing-list-title">
                            <h3>What's included?</h3>
                        </div>
                        <!-- Pricing List Title End -->

                        <!-- Pricing List Start -->
                        <div class="pricing-list">
                            <ul>
                                <li>Payroll processing for unlimited employees</li>
                                <li>Full-service tax filings</li>
                                <li>Employee self-service portal</li>
                                <li>HR & benefits integration</li>
                            </ul>
                        </div>
                        <!-- Pricing List End -->
                    </div>
                    <!-- Pricing Box Body End -->

                    <!-- Pricing Button Start -->
                    <div class="pricing-btn">
                        <a href="#" class="btn-default btn-highlighted">Select this package</a>
                    </div>
                    <!-- Pricing Button End -->
                </div>
                <!-- Pricing Box End -->
            </div>

            <div class="col-lg-12">
                <!-- Pricing Benefit List Start -->
                <div class="pricing-benefit-list wow fadeInUp" data-wow-delay="0.6s">
                    <ul>
                        <li><img src="{{ asset('build/assets/images/icon-pricing-benefit-1.svg') }}" alt="">Get a 30-day free trial</li>
                        <li><img src="{{ asset('build/assets/images/icon-pricing-benefit-2.svg') }}" alt="">No hidden fees</li>
                        <li><img src="{{ asset('build/assets/images/icon-pricing-benefit-3.svg') }}" alt="">Cancel anytime</li>
                    </ul>
                </div>
                <!-- Pricing Benefit List End -->
            </div>
        </div>
    </div>
</section>

<!-- Our Pricing Section End -->

<!-- Our FAQs Section Start-->
<section class="our-faqs">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">FAQs</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Common Questions About <span>Our Payroll Services</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                    <a  class="btn-default">View All FAQs</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our FAQs Image Start -->
                <div class="our-faqs-image">
                    <div class="our-faqs-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('build/assets/images/faqs-img.jpg') }}" alt="Payroll Services FAQ">
                        </figure>
                    </div>
                </div>
                <!-- Our FAQs Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Our FAQ Section Start -->
                <div class="our-faq-section">
                    <div class="faq-accordion" id="faqaccordion">
                        <!-- Accordion Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What payroll services do you offer?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We offer payroll processing, tax filings, direct deposits, employee self-service portals, and compliance support for small businesses.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion Item End -->

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How often can I run payroll?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>You can run payroll as often as needed, including weekly, bi-weekly, semi-monthly, or monthly, depending on your business needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Do you handle payroll tax filings?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, we calculate, withhold, and file payroll taxes at the federal, state, and local levels, ensuring compliance with tax regulations.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Can employees access their pay stubs and W-2s online?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, employees can securely access their pay stubs, W-2s, and other payroll information through our online self-service portal.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    What if I have contractors in addition to employees?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>We handle payments for both employees and contractors, ensuring proper tax withholding for employees and generating 1099s for contractors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our FAQ Section End -->
            </div>
        </div>
    </div>
</section>

<!-- Our FAQs Section End-->

<!-- Our Testimonial Section Start -->
<section class="our-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <!-- Testimonial Content Start -->
                <div class="testimonial-content">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Our Testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Trusted by <span>Small Businesses Nationwide</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Hundreds of small businesses rely on our payroll services for accuracy, efficiency, and compliance. See what our clients have to say.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Testimonial Button Start -->
                    <div class="testimonial-btn">
                        <a  class="btn-default">Get Started</a>
                    </div>
                    <!-- Testimonial Button End -->
                </div>
                <!-- Testimonial Content End -->
            </div>

            <div class="col-lg-7">
                <!-- Testimonial Slider Box Start -->
                <div class="testimonial-slider-box">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"Switching to this payroll service was the best decision for our business. Payroll is now seamless, and we no longer worry about tax compliance!"</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-content">
                                                <h3>Jessica R. / <span>Small Business Owner</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"Reliable, accurate, and stress-free payroll processing. Their support team is always available when we need them. Highly recommend!"</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-content">
                                                <h3>Mark T. / <span>HR Manager</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-body">
                                            <p>"As a growing business, we needed a payroll service we could trust. They’ve made everything so simple, from direct deposits to tax filing."</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-content">
                                                <h3>Samantha L. / <span>Retail Store Owner</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Slider Box End -->
            </div>
        </div>
    </div>
</section>
<!-- Our Testimonial Section End -->




@endsection