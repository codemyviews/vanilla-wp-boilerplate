@layout('layouts/org')
<?php /* Template Name: Rigup.org  */ ?>
@section('content')
@while(have_posts())
<?php the_post(); ?>
<div class="container">
    <div class="intro" style="background-image: url({{ asset('images/bg10.jpg')  }});">
        <div class="intro__content">
            <div class="intro__icon">
                <img src="{{ asset('images/intro-icon.svg') }}" alt="">
            </div>
            <h1>Building The Workforce of Tomorrow</h1>
        </div>
    </div>
    <section class="section">
        <div class="shell">
            <p>The demand for qualified energy professionals is at an all-time high. This need requires a more competent and consistently trained workforce. Rigup.org exists to empower this generation of consultants, and the next, to get the certification and education they need.</p>
            <p>By partnering with leading schools and instructors, as well as some of the largest companies in the industry, RigUp.org is excited to offer unparalleled access to both training certifications and continuing education opportunities for energy consultants.</p>
        </div>
    </section>
    <section class="section-columns">
        <div class="shell">
            <div class="section__row">
                <div class="section__inner">
                    <h3 class="section__title">Safety Training</h3>
                    <div class="section__content">
                        <p>RigUp.org has partnered with training providers across the nation – giving every contractor access to the training they need, wherever they are. From Safeland to Well Control, we’ve got you covered.</p>
                        <p>We're committed to providing access to the best available training courses, in accordance to OSHA, ANSI, IADC, PEC, and your organization's standards.</p>
                    </div>
                    <div class="section__actions">
                        <a href="#" class="btn" target="_blank">Sign Up Here</a>
                    </div>
                </div>
                <div class="section__image">
                    <img src="{{ asset('images/img61.jpg') }}" alt="">
                </div>
            </div>
            <div class="section__row">
                <div class="section__inner">
                    <h3 class="section__title">Continuing Education</h3>
                    <div class="section__content">
                        <p>When you’re ready to explore next steps in your career, our education partners provide the accredited courses and degree programs you need to reach your goals. </p>
                        <p>Whether you're looking to expand your skillset in your current role or move into a new sector of the energy industry, our extensive network of schools can provide you with the opportunities you need. Connect with us to learn more.</p>
                    </div>
                    <div class="section__actions">
                        <a href="#contact" class="btn" target="_self">Start Today</a>
                    </div>
                </div>
                <div class="section__image">
                    <img src="{{ asset('images/img62.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="section-tables" style="background-image: url({{ asset('images/pattern-blue.jpg') }});">
        <div class="shell">
            <div class="section__inner">
                <div class="section__head">
                    <h2>Join Our Network of Schools</h2>
                </div>
                <div class="section__body">
                    <div class="section__image">
                        <img src="{{ asset('images/logos-network.png') }}" alt="">
                    </div>
                    <div class="section__entry">
                        <div class="section__entry-col">
                            <p><strong>Want to be a part of educating the workforce of tomorrow?</strong> RigUp is actively seeking instructors and schools to partner with in creating workforce development programs to meet the world's growing energy demand.</p>
                            <div class="section__actions">
                                <a href="#contact" class="btn">Join Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__inner">
                <div class="section__head">
                    <h2>Become a Partner Today</h2>
                </div>
                <div class="section__body">
                    <div class="section__image">
                        <img src="{{ asset('images/logo-partners.png') }}" alt="">
                    </div>
                    <div class="section__entry">
                        <div class="section__entry-col section__entry-col--1of2">
                            <p>A more competent workforce benefits the entire industry – that’s why some of the biggest operators and service providers have partnered with RigUp.org to build best-in-class training programs for the energy industry. Join us in building the workforce of tomorrow.</p>
                            <div class="section__actions">
                                <a href="#contact" class="btn">Become a Partner</a>
                            </div>
                        </div>
                        <div class="section__entry-col section__entry-col--1of2">
                            <p>Need to roll out company specific onboarding or training to your contingent workforce? RigUp offers customized training modules to meet your needs. Connect with us and let us know what you need today.</p>
                            <div class="section__actions">
                                <a href="#contact" class="btn">Start Today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-form">
        <div class="shell">
            <div class="section__head">
                <h2>Get In Touch</h2>
            </div>
        </div>
    </section>
</div>
@endwhile
@endsection