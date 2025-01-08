<x-pages-layout>
  <x-slot:styles>
   <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" /> 
  </x-slot:styles>

  <x-slot:title>
    TechPro :: Au
  </x-slot:title>

  <div class="container mt-0 mt-md-4">
    <div class="row">
        <div class="col-12 col-md-6 mb-3">
            <h1 class="intro-text">
                Building <span class="techpr">Tech</span> Talents
            </h1>
            <h4 class="fs-5 index-text">
                We are proud to bridge the gap in the tech industry and
                assist candidates in transitioning into the tech field,
                even without prior tech experience, by providing a
                combination of expertly designed training courses and
                hands-on experience gained through working on real-life
                projects.
            </h4>
            <div class="webinar-register-wrapper">
                <a class="webinar-btn" href="webinar-form.html"
                    >Register for webinar</a
                >
            </div>
        </div>

        <div class="col-12 col-md-6 text-center text-md-end">
            <img class="hero-img" src="{{ asset('assets/images/Group 66.png') }}" alt="" />
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <h3 class="personality-text">
                Take our personality test to know which course you are
                suitable for
            </h3>
            <div class="test-btn-wrapper">
                <a class="test-btn" href="{{ route('quiz') }}">Take a test</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col text-center mt-4">
            <h3>Our Courses</h3>
        </div>
    </div>

    <div class="row mt-4">
        <div
            class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4"
        >
            <div
                class="card index-card"
                style="
                    width: 18rem;
                    border-bottom-right-radius: 12px;
                    border-bottom-left-radius: 12px;
                "
            >
                <div
                    class="background-img-wrapper text-center text-white"
                >
                    <h6 class="pt-3">Business Analysis</h6>
                    <div class="pt-3">
                        <p>2 weekends of virtual learning</p>
                        <p>5 weeks of practical experience</p>
                        <p>1 week of job readiness program</p>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <span class="checkmark">✓</span>The role of
                            a BA in Project delivery
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Conducting
                            project discovery
                        </li>
                        <li>
                            <span class="checkmark">✓</span>3 Cs of
                            requirement elicitation
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Use case
                            analysis
                        </li>
                        <li>
                            <span class="checkmark">✓</span>High level
                            business requirement
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Gap Analysis
                        </li>
                    </ul>
                    <div class="enrol-btn-wrapper text-center">
                        <a
                            class="enrol-btn"
                            href="{{ route('businessAnalysis.show') }}"
                            >Enrol now</a
                        >
                    </div>
                </div>
            </div>
        </div>

        <div
            class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4"
        >
            <div
                class="card index-card"
                style="
                    width: 18rem;
                    border-bottom-right-radius: 12px;
                    border-bottom-left-radius: 12px;
                "
            >
                <div
                    class="background-img2-wrapper text-center text-white"
                >
                    <h6 class="pt-3">Scrum Master</h6>
                    <div class="pt-3">
                        <p>2 weekends of virtual learning</p>
                        <p>5 weeks of practical experience</p>
                        <p>1 week of job readiness program</p>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <span class="checkmark">✓</span>The role of
                            a BA in Project delivery
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Conducting
                            project discovery
                        </li>
                        <li>
                            <span class="checkmark">✓</span>3 Cs of
                            requirement elicitation
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Use case
                            analysis
                        </li>
                        <li>
                            <span class="checkmark">✓</span>High level
                            business requirement
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Gap Analysis
                        </li>
                    </ul>
                    <div class="enrol-btn-wrapper text-center">
                        <a class="enrol-btn" href="{{ route('scrum.show') }}"
                            >Enrol now</a
                        >
                    </div>
                </div>
            </div>
        </div>

        <div
            class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4"
        >
            <div
                class="card index-card"
                style="
                    width: 18rem;
                    border-bottom-right-radius: 12px;
                    border-bottom-left-radius: 12px;
                "
            >
                <div
                    class="background-img3-wrapper text-center text-white"
                >
                    <h6 class="pt-3">Product Management</h6>
                    <div class="pt-3">
                        <p>2 weekends of virtual learning</p>
                        <p>5 weeks of practical experience</p>
                        <p>1 week of job readiness program</p>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <span class="checkmark">✓</span>The role of
                            a BA in Project delivery
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Conducting
                            project discovery
                        </li>
                        <li>
                            <span class="checkmark">✓</span>3 Cs of
                            requirement elicitation
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Use case
                            analysis
                        </li>
                        <li>
                            <span class="checkmark">✓</span>High level
                            business requirement
                        </li>
                        <li>
                            <span class="checkmark">✓</span>Gap Analysis
                        </li>
                    </ul>
                    <div class="enrol-btn-wrapper text-center">
                        <a
                            class="enrol-btn"
                            href="{{ route('product-management.show') }}"
                            >Enrol now</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col text-center">
            <h2 class="talent-text">
                Our Talents Work With Leading Companies
            </h2>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="slideshow-container">
                    <div class="slides" id="slides">
                        <img
                            src="{{ asset('assets/images/Brisbane city council.png') }}"
                            alt="Slide 1"
                        />
                        <img
                            style="width: 5%"
                            src="{{ asset('assets/images/Mastercard.png') }}"
                            alt="Slide 2"
                        />
                        <img src="{{ asset('assets/images/PayPal.png') }}" alt="Slide 3" />
                        <img
                            src="{{ asset('assets/images/Frame 9 (1).png') }}"
                            alt="Slide 4"
                        />
                        <img src="{{ asset('assets/images/Frame 8.png') }}" alt="Slide 5" />
                        <img
                            style="height: 28px"
                            src="{{ asset('assets/images/Visa.png') }}"
                            alt="Slide 6"
                        />

                        <img
                            src="{{ asset('assets/images/Brisbane city council.png') }}"
                            alt="Slide 1 Duplicate"
                        />
                        <img
                            style="width: 5%"
                            src="{{ asset('assets/images/Mastercard.png') }}"
                            alt="Slide 2 Duplicate"
                        />
                        <img
                            src="{{ asset('assets/images/PayPal.png') }}"
                            alt="Slide 3 Duplicate"
                        />
                        <img
                            src="{{ asset('assets/images/Frame 9 (1).png') }}"
                            alt="Slide 4 Duplicate"
                        />
                        <img
                            src="{{ asset('assets/images/Frame 8.png') }}"
                            alt="Slide 5 Duplicate"
                        />
                        <img
                            style="height: 28px"
                            src="{{ asset('assets/images/Visa.png') }}"
                            alt="Slide 6 Duplicate"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col text-center">
            <h3 class="techpr">END-TO-END</h3>
            <h4>Why Train With Techpro</h4>
        </div>
    </div>
    <div class="row mt-5">
        <div
            class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center"
        >
            <div class="card project-card" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4 mt-4">
                        Real-life Project
                    </h5>
                    <p class="card-text text-center mb-5">
                        We offers oppurtunities for students to work on
                        real life projects,giving them hands-on
                        experience and a better understanding of what
                        working in their field will be like.This
                        enhances their skills and makes them more
                        confident and competitive in the job market
                    </p>
                </div>
            </div>
        </div>
        <div
            class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center"
        >
            <div class="card project-card" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4 mt-4">
                        Cross-functional team experience
                    </h5>
                    <p class="card-text text-center mb-5">
                        We allow students to work in self-managed,cross
                        functional teams on real-life projects.This
                        helps students develop essential skills such as
                        collaboration,communication and stakeholder
                        management,which are highly valued by employers
                        in the tech industry
                    </p>
                </div>
            </div>
        </div>
        <div
            class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center"
        >
            <div class="card project-card" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4 mt-4">
                        Local industry experience
                    </h5>
                    <p class="card-text text-center mb-5">
                        We deeply understands the local tech market and
                        has estalished relationships with companies in
                        the industry.This allows the company to provide
                        valuable insights and supports stuents seeking
                        tech roles, helping them navigate the job market
                        more effectively and find oppurtunities with
                        less resources.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col text-center">
            <h3 class="techpr">Get Excited to learn</h3>
            <h4>How will you learn</h4>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col text-center">
            <div class="d-flex justify-content-center">
                <div
                    class="number-wrapper d-flex justify-content-center align-items-center"
                >
                    1
                </div>
            </div>

            <h4 class="mt-2 learn-text">Immersive Learning</h4>
        </div>
        <div class="col text-center">
            <div class="d-flex justify-content-center">
                <div
                    class="number-wrapper d-flex justify-content-center align-items-center"
                >
                    2
                </div>
            </div>
            <h4 class="mt-2 learn-text">Real-life Projects</h4>
        </div>
        <div class="col text-center">
            <div class="d-flex justify-content-center">
                <div
                    class="number-wrapper d-flex justify-content-center align-items-center"
                >
                    3
                </div>
            </div>
            <h4 class="mt-2 learn-text">Job Ready</h4>
        </div>
    </div>
</div>

<section class="background-wrapper">
    <div class="container">
        <div class="row mt-5 background-content">
            <div class="col ms-lg-5 ms-md-2">
                <ul>
                    <li>Virtual-live classes (Weekend classes)</li>
                    <li>Focus on real business scenarios</li>
                    <li>Assesment and case study</li>
                    <li>Intensive training</li>
                </ul>
            </div>
            <div class="col ms-lg-5 ms-md-2">
                <ul>
                    <li>Work on real life project</li>
                    <li>Participate in scrum ceremonies</li>
                    <li>Access to industry best tools</li>
                    <li>Project presentation and showcases</li>
                </ul>
            </div>
            <div class="col ms-lg-5 ms-md-2">
                <ul>
                    <li>Work on real life project</li>
                    <li>Participate in scrum ceremonies</li>
                    <li>Access to industry best tools</li>
                    <li>Project presentation and showcases</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row candidates-wrapper">
        <div class="col text-center">
            <h3 class="techpr">OUR HAPPY CANDIDATES</h3>
            <h4>We've helped thousands of people</h4>
        </div>
    </div>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 18 (1).png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Adetunji Lanre</h2>
                        <h6 class="card-text-margin">America</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png"') }}
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            Tech Pro Institute helped me transition into
                            the tech industry as a business analyst
                            without IT experience. Their platform
                            improved my tech skills and confidence,
                            enabling success in interviews. I landed my
                            first role just two weeks after completing
                            their seven-week training program.
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 18 (2).png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Adeniyi Loveth</h2>
                        <h6 class="card-text-margin">Australia</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 5.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            Tech Pro Institute helped me transition into
                            the tech industry as a business analyst
                            without IT experience. Their platform
                            improved my tech skills and confidence,
                            enabling success in interviews. I landed my
                            first role just two weeks after completing
                            their seven-week training program
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 18.png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Ifesan Sayo</h2>
                        <h6 class="card-text-margin">Australia</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            A friend introduced me to Tech Pro Institute
                            in 2002. The skills I gained through their
                            training were vital for success in
                            interviews and on-the-job performance. I’m
                            truly grateful for the opportunity and
                            support from Tech Pro Institute, which
                            played a key role in transforming my career.
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 18 (1).png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Adeniyi Loveth</h2>
                        <h6 class="card-text-margin">Australia</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 5.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            Tech Pro Institute helped me transition into
                            the tech industry as a business analyst
                            without IT experience. Their platform
                            improved my tech skills and confidence,
                            enabling success in interviews. I landed my
                            first role just two weeks after completing
                            their seven-week training program
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 18 (2).png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Adetunji Lanre</h2>
                        <h6 class="card-text-margin">America</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            Tech Pro Institute helped me transition into
                            the tech industry as a business analyst
                            without IT experience. Their platform
                            improved my tech skills and confidence,
                            enabling success in interviews. I landed my
                            first role just two weeks after completing
                            their seven-week training program.
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 18.png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Ifesan Sayo</h2>
                        <h6 class="card-text-margin">Australia</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            A friend introduced me to Tech Pro Institute
                            in 2002. The skills I gained through their
                            training were vital for success in
                            interviews and on-the-job performance. I’m
                            truly grateful for the opportunity and
                            support from Tech Pro Institute, which
                            played a key role in transforming my career.
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 12.png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Adeniyi Loveth</h2>
                        <h6 class="card-text-margin">Australia</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 5.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            Tech Pro Institute helped me transition into
                            the tech industry as a business analyst
                            without IT experience. Their platform
                            improved my tech skills and confidence,
                            enabling success in interviews. I landed my
                            first role just two weeks after completing
                            their seven-week training program
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 18 (1).png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Ifesan Sayo</h2>
                        <h6 class="card-text-margin">Australia</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            A friend introduced me to Tech Pro Institute
                            in 2002. The skills I gained through their
                            training were vital for success in
                            interviews and on-the-job performance. I’m
                            truly grateful for the opportunity and
                            support from Tech Pro Institute, which
                            played a key role in transforming my career.
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img
                                src="{{ asset('assets/images/Rectangle 12 (2).png') }}"
                                alt=""
                                class="card-img"
                            />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">Adeniyi Loveth</h2>
                        <h6 class="card-text-margin">Australia</h6>
                        <div class="text-center card-text-margin">
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                            <img
                                width="5%"
                                src="{{ asset('assets/images/Star 1.png') }}"
                                alt=""
                            />
                        </div>
                        <p class="description">
                            Tech Pro Institute helped me transition into
                            the tech industry as a business analyst
                            without IT experience. Their platform
                            improved my tech skills and confidence,
                            enabling success in interviews. I landed my
                            first role just two weeks after completing
                            their seven-week training program
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="row mt-5 text-center">
        <div class="col">
            <h1 class="techpr">850+</h1>
            <h6>Number of candidates</h6>
        </div>
        <div class="col">
            <h1 class="techpr">4.8/5</h1>
            <h6>Customer satisfaction Rate</h6>
        </div>
        <div class="col">
            <h1 class="techpr">20</h1>
            <h6>Proffessional team members</h6>
        </div>
    </div>
    <div class="row mt-5 text-center">
        <div class="col">
            <h1>Meet The <span class="techpr">Team</span></h1>
        </div>
    </div>
    <div class="row mt-5 text-center">
        <div class="col">
            <img
                width="45%"
                class="img-fluid"
                src="{{ asset('assets/images/Ellipse 7 (1).png') }}"
                alt=""
            />
            <h3 class="pt-4 team-text">Aisha Olayiwola</h3>
            <p class="desc">Business Analyst Lead/Mentor</p>
        </div>
        <div class="col">
            <img
                width="45%"
                class="img-fluid"
                src="{{ asset('assets/images/Ellipse 7 (2).png') }}"
                alt=""
            />
            <h3 class="pt-4 team-text">Kabir Akinola</h3>
            <p class="desc">Senior Business Analyst/Career Coach</p>
        </div>
        <div class="col">
            <img
                width="45%"
                class="img-fluid"
                src="{{ asset('assets/images/Ellipse 7.png') }}"
                alt=""
            />
            <h3 class="pt-4 team-text">Dr Olukpmaiya</h3>
            <p class="desc">Senior Reporting Officer/Mentor</p>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <div class="col">
            <h1 class="techpr">
                FREE <span class="text-dark">1 ON 1</span> CAREER GUIDE
            </h1>
            <h5 class="mt-5 schedule-text">
                Schedule a free one-on-one consultation to discuss
                unique circumstances and explore your potential
                transition into the business side of tech. Simply
                complete the form below, and one of our career will get
                in touch with you.
            </h5>
        </div>
    </div>
</div>

<section class="form-wrapper mt-5">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <label class="text-white" for="">Full Name</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    aria-label="First name"
                />
            </div>
            <div class="col">
                <label class="text-white" for="">Last Name</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    aria-label="Last name"
                />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label class="text-white" for="">Phone Number</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="+61405380435"
                    aria-label="First name"
                />
            </div>
            <div class="col">
                <label class="text-white" for="">Email</label>
                <input
                    type="text"
                    class="form-control"
                    placeholder="User@gmail.com"
                    aria-label="Last name"
                />
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <div class="mb-3">
                    <label
                        for="exampleFormControlTextarea1"
                        class="form-label text-white"
                        >Information/comment</label
                    >
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="5"
                    ></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <a class="submit-btn" href="">Submit</a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/scripts/index.js') }}"></script>

</x-pages-layout>