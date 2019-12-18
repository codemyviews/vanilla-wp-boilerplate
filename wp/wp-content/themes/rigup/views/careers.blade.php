@layout('layouts/master')
<?php /* Template Name: Careers */ ?>

@section('content')
@while(have_posts())
<?php the_post(); ?>

<main>
    <div class="content-block careers-hero midnight">
        <div class="content-container">
            <h6 class="blue-text">Careers</h6>
            <h1>RigUp is changing the way people work in the energy industry.</h1>
            <div class="careers-hero-tagline">
                <p>We’re growing fast. And we’re not slowing down. We’re looking for people who take big risks and seek big rewards.</p>
            </div>
            <button class="primary">See open positions</button>
        </div>
    </div>

    <div class="content-block who-we-are-careers dynamic-background-image" style="background-image:url({{ asset('images/img09.jpg') }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/img09.jpg') }});height:250px"></div>
        <div class="content-container">
            <div class="who-we-are-content">
                <h2>Who we are</h2>
                <div class="">
                    <p>Our diverse team is innovative and nimble. When a challenge presents itself, we get to work finding game-changing solutions. We provide opportunities for growth and leadership, and offer the flexibility you need to live your life to the fullest while also doing meaningful work.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block what-we-do-careers white">
        <div class="content-container">
            <div class="what-we-do-image"><img alt="What we do" src="{{ asset('images/img10.jpg') }}"></div>
            <div class="what-we-do-content">
                <h2>What we do</h2>
                <div class="">
                    <p>We're tackling major inefficiencies in the energy industry by offering better solutions for complicated tasks like staffing, billing, and compliance.<br><br>We're making a huge difference, and we’re looking for innovative teammates who are driven by the success of our customers.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block benefits">
        <div class="content-container">
            <h2>Happy. Healthy. Inspired.</h2>
            <div class="benefits-items">
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-health.svg') }}"></div>
                    <div class="">
                        <p>Full health, dental and vision coverage</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-unlimited-vaca.svg') }}"></div>
                    <div class="">
                        <p>Unlimited vacation</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-vaca-stipend.svg') }}"></div>
                    <div class="">
                        <p>$2,000 annual vacation stipend starting on your 3rd anniversary</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-atx.svg') }}"></div>
                    <div class="">
                        <p>Office in the heart of downtown Austin</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-wfh.svg') }}"></div>
                    <div class="">
                        <p>Flexibility to work from home</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-food.svg') }}"></div>
                    <div class="">
                        <p>Catered breakfast, daily lunch stipend, and a fully stocked kitchen.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-gym.svg') }}"></div>
                    <div class="">
                        <p>On-site gym</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-401k.svg') }}"></div>
                    <div class="">
                        <p>401(k) with 4% match</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-social.svg') }}"></div>
                    <div class="">
                        <p>Social events, happy hours, and coed sports leagues</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-image"><img alt="RigUp Benefit" src="{{ asset('images/icon-benefits-contd-ed.svg') }}"></div>
                    <div class="">
                        <p>75% tuition reimbursement on continuing education</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block white">
        <div class="content-container">
            <div class="banner">
                <h3>Stay in Touch with RigUp Blog.</h3>
                <a class="button primary" href="#">Read Our Blog</a>
            </div>
        </div>
    </div>

    <div class="content-block diversity-section white dynamic-background-image" style="background-image:url({{ asset('images/img11.jpg') }})">
        <div class="sm-res-img" style="background-image:url({{ asset('images/img11.jpg') }});height:250px"></div>
        <div class="content-container">
            <div class="diversity-hero-content">
                <h1 class="diversity-hero-h1">Be a part of a friendly, talented &amp; diverse team.</h1>
            </div>
            <div class="banner-cta">
                <h3>We are dedicated to putting our people first.</h3>
                <div><a class="button primary" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content-block jobs topographic">
        <div class="content-container">
            <div>
                <h2 class="white-text">We're Hiring</h2>
                <div class="department-pills">
                    <a href="#accounting" class="department-pill">Accounting &amp; Finance</a>
                    <a href="#benifits" class="department-pill">Benefits</a>
                    <a href="#business-intelligence" class="department-pill">Business Intelligence</a>
                    <a href="#business-operations" class="department-pill">Business Operations</a>
                    <a href="#design" class="department-pill">Design</a>
                    <a href="#general" class="department-pill">General</a>
                    <a href="#it" class="department-pill">IT</a>
                    <a href="#marketing" class="department-pill">Marketing</a>
                    <a href="#operations" class="department-pill">Operations</a>
                    <a href="#payroll" class="department-pill">Payroll</a>
                    <a href="#product" class="department-pill">Product</a>
                    <a href="#product-marketing" class="department-pill">Product Marketing</a>
                    <a href="#sales" class="department-pill">Sales</a>
                    <a href="#sales-operations" class="department-pill">Sales Operations</a>
                    <a href="#software-engineering" class="department-pill">Software Engineering</a>
                    <a href="#support" class="department-pill">Support</a>
                    <a href="#talent" class="department-pill">Talent</a>
                </div>
                <div>
                    <div class="department-section"  id="accounting">
                        <h6>Accounting &amp; Finance</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Accounts Receivable Specialist</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Transaction Operations team at RigUp manages all marketplace transaction activity. On this team, you can find Buyer and Supplier Onboarding, Invoicing Operations, Payment Operations and Compliance helping RigUp’s users work together seamlessly. RigUp is hiring a full time Accounts Receivable Specialist to join our Finance and Operations team in Austin, Texas. The successful candidate will play a key role in the day to day invoicing processes of the Invoicing Operations team. This individual must have experience working in an oil and gas company’s billing department and be an invoicing subject matter expert with extremely high attention to detail. They must also have a laser focus on executional excellence and be experienced in handling high transaction volumes in a fast paced environment
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Controller (M&amp;A)</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Accounting and Finance team at RigUp ensures accurate financial reporting and monitors and manages RigUp’s capital. On this team, you can find Strategic Finance, FP&amp;A, Financial Reporting and Credit working together to help RigUp grow. RigUp is hiring a Controller of M&amp;A who will be responsible for overseeing financial reporting functions - budgeting, technical accounting, and processes specific to acquired entities and the integration of those entities into RigUp systems and processes. Our ideal candidate for this role will be someone who has experience and desire to work in a fast-paced, high-growth environment, experience with transformational accounting processes and a drive to be continually learning. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Credit Lead</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">
                                            RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our North Star -- “to empower the people who power the world.” The Credit function at RigUp serves as P&amp;L protector, ensuring the health and sustainability of our growth. With a finger on the pulse of incoming business as well as legacy revenue drivers, the team’s Credit and Inbound Revenue components collaborate to anticipate developing exposures and mitigate potential risk across the organization. RigUp is hiring a Credit Lead that will be responsible for the credit screening of new clients and contribute to the management of the firm’s overall credit and risk profile. Our ideal candidate for this role will be someone who operates with a high degree of organization and proactiveness, brings to the table Energy Credit experience, and has the backbone to go to bat for what they know is in the best interest of the company. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Treasurer</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Finance team at RigUp monitors and manages RigUp’s capital.&nbsp; On this team you can find Strategic Finance, Analytics, Financial Reporting and Credit working together to help RigUp grow. RigUp is hiring aTreasurer that will be responsible for managing the Company’s cash, liquidity, financial risk and investments. Our ideal candidate for this role will be a leader who has developed the ability to think creatively and strategically about the optimization of capital and execute on that vision to efficiently fuel our growth.&nbsp; Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Treasury Analyst</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Finance team at RigUp monitors and manages RigUp’s capital.&nbsp; On this team you can find Strategic Finance, Analytics, Financial Reporting and Credit working together to help RigUp grow. RigUp is hiring a Treasury Analyst that will be responsible for managing the Company’s cash, liquidity, financial risk and investments. Our ideal candidate for this role will be a creative, detail-oriented team player with a successful background in cash and liquidity management and treasury compliance reporting.&nbsp; Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="benifits">
                        <h6>Benefits</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Benefits Specialist</h5>
                                            <div class="job-location">Denver, CO</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” The W-2 Consulting team at RigUp strives for operational excellence by providing industry leading value to our consultants.&nbsp; RigUp is hiring a Benefit Specialist that will be responsible for assisting with the administration of all benefit programs for all W-2 consultants. If you have compassion for customer service, a roll-up your sleeves and get things done attitude, paired with a drive for data accuracy and continuous improvement, this could be the opportunity for you! We’re a team of high-achieving, low ego, detail-oriented problem solvers who come to work every day looking to make a difference in our client’s lives. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="business-intelligence">
                        <h6>Business Intelligence</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>BI Analyst - Product</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Analytics team at RigUp is responsible for all things data.&nbsp; We are focused on building an insights-driven organization powered through accurate, timely, and consistent data, leveraged by high energy people ready to reshape the world. RigUp is hiring a BI Product Analyst that will be responsible for providing our Product Organization with insights that fuel our growth. Our ideal candidate for this role will be someone with proven track record of optimizing product performance, an ability to think across functional lines to drive product improvements, and a desire to be part of building an analytics organization. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>BI Analyst - Talent</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Analytics team at RigUp is responsible for all things data.&nbsp; We are focused on building an insights-driven organization powered through accurate, timely, and consistent data, leveraged by high energy people ready to reshape the world. RigUp is hiring a BI Talent (HR) Analyst that will be responsible for providing our Talent Organization with insights that fuel our growth. Our ideal candidate for this role will be someone with a proven track record of optimizing hiring pipelines, an ability to think across functional lines to improve operational efficiencies in HR, and a desire to be part of building an analytics organization. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>BI Manager - Product &amp; Operations</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Analytics team at RigUp is responsible for all things data.&nbsp; We are focused on building an insights-driven organization powered through accurate, timely, and consistent data, leveraged by high energy people ready to reshape the world. RigUp is hiring a BI Manager to support Product &amp; Operations that will be responsible for Growing and developing a team of analysts drive incredible customer experiences in partnership with our Product &amp; Operations team. Our ideal candidate for this role will be someone who thrives on developing talent and solving critical business problems, works well in a matrixed environment - always putting the business first, and desires to be part of building an analytics organization. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>BI Manager - Sales &amp; Marketing</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Analytics team at RigUp is responsible for all things data.&nbsp; We are focused on building an insights-driven organization powered through accurate, timely, and consistent data, leveraged by high energy people ready to reshape the world. RigUp is hiring a BI Manager to support Sales &amp; Marketing that will be responsible for Growing and developing a team of analysts who drive revenue in partnership with Sales &amp; Marketing. Our ideal candidate for this role will be someone who thrives on developing talent and solving critical business problems, works well in a matrixed environment - always putting the business first, and desires to be part of building an analytics organization. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Data Governance Lead</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Analytics team at RigUp is responsible for all things data.&nbsp; We are focused on building an insights-driven organization powered through accurate, timely, and consistent data, leveraged by high energy people ready to reshape the world. RigUp is hiring a Data Governance Lead that will be responsible for operationalizing a metadata strategy to enable hyper-growth plan for 2020 and beyond. Our ideal candidate for this role will be someone with a proven track record of implementing a data governance strategy, ability to meet tight deadlines, with an attention to detail and superb organizational skills, and a desire to be part of building an analytics organization. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Data Platform Product Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Analytics team at RigUp is responsible for all things data.&nbsp; We are focused on building an insights-driven organization powered through accurate, timely, and consistent data, leveraged by high energy people ready to reshape the world. RigUp is hiring a Data Platform Product Manager that will be responsible for partnering with Data Engineering to build a world-class data platform to drive business success . Our ideal candidate for this role will be someone with a proven track record delivering Analytic Solutions to the business, thrive on establishing product roadmaps, and then driving your team to deliver on them, and has a desire to be part of building an analytics organization. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="business-operations">
                        <h6>Business Operations</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Business Planning Analyst- Midstream</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.”&nbsp; RigUp is hiring a&nbsp; Business Planning Analyst to support our midstream revenue vertical in our Austin office. Finding jobs for the men and women who power oil &amp; gas is what motivates us.&nbsp; Your role on the midstream team is to make this business run as efficiently as possible by identifying and solutions for gaps in our current process that will drive future opportunities. You’ll work collaboratively with key internal stakeholders across several operational functions identifying inefficiencies across internal and external-processes, structuring, aggregating, and utilizing data to drive large business decisions, forecast, track and execute against key financial and operational goals, all with the sole-purpose of enabling revenue growth.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Integration Manager, Mergers &amp; Acquisitions</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp exists to empower the people that power the world and make all of our lives possible. To make progress towards our mission, we must identify and quickly execute on initiatives that accelerate us towards our goals. The Business Operations team is a fast-paced team that encourages end-to-end ownership and innovation and creates the standard of excellence for the rest of the organization. We are looking for a project manager who can lead cross-functional teams through the definition of a business problem, process mapping of as-is and to-be solutions, requirements gathering, testing, and implementation. As Integration Manager, you have proven project management skills in fast-scaling startup environments. You love taking on complex operational challenges that span multiple domains org-wide and breaking them apart into bite-sized executional work-streams. You are driven by the need to align stakeholders around a shared project vision and you have a bias to action for execution. You work effectively in a cross-functional environment and are comfortable facilitating technical and business stakeholder conversations. You have strong business judgement and can think creatively about new opportunities and solutions.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Internal Communications Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is looking for a dynamic leader who can establish and scale an effective internal communications strategy across multiple offices and cities. In this role, you will develop standards of excellence for internal communications and create alignment among key stakeholders to ensure our messaging is clear, consistent, and inspiring. You will standardize our tops-down and bottoms-up communication strategy, ensuring that every team at every level has the information they need to do their job (aka. increase the signal-to-noise ratio). We’re looking for someone with equal parts strategy and executional excellence - a big picture thinker who isn’t afraid to roll up their sleeves. As a strong writer, creative thinker and collaborator, you will work directly with senior leadership to serve as a thought partner on crafting internal communications that inspire and motivate the team to exceed expectations. You will also partner with cross-functional stakeholders to form a cohesive narrative on all internal communications, keeping our teams engaged and informed on the company vision, initiatives, and execution updates. Finally, you will create productive feedback loops across the company, and collaborate with RigUp leaders at all levels to promote open, two-way communication.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="design">
                        <h6>Design</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Director of Product Design</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” RigUp is seeking a driven Director of Product Design to lead our Design team. If you have a strong desire to experiment and push the boundaries of user-centered design practices, we’d love to hear from you. As the Director of the Product Design team, you will have the opportunity to partner with executive leaders to shape product strategy and business objectives as a thought leader at RigUp. You will represent design both inside and outside the company to ensure communication and collaboration. Our ideal candidate empowers other designers to lead, has a flexible view on design processes to encourage innovation, and, most of all, sees the immense opportunity in front of RigUp to transform the world's most foundational industry through technology.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Product Designer</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Product &amp; Design team at RigUp is building a platform of products and services to better serve the evolving needs of the people working in energy. Our growing platform enables our customers to do what they do best, with greater efficiency, less complexity and lower costs, while maintaining the highest safety and environmental standards. RigUp is hiring a Product Designer that will be responsible for defining user problems and designing solutions collaboratively within a product team. This individual must have experience as a product designer responsible for UX and UI in a complex product or industry. RigUp is constantly coming up with new product ideas and is looking for a designer to work collaboratively with other product designers, key business stakeholders, product managers and developers to bring these ideas to life. Our ideal candidate for this role will be someone who thrives in a fast-paced environment, is motivated by challenging problems and constraints, and is passionate about data-driven design. ** Must submit a portfolio to be considered
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="general">
                        <h6>General</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Managing Director, New Verticals</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is the fastest growing tech startup in the energy industry and we just received our Series D funding of $300M to help further our explosive growth. To that end, we're seeking a high-performing and experienced business leader to become a key member of our vertical expansion team and help us pivot and scale into new domains.&nbsp; This position will report directly to the Co-Founder and COO and requires an autonomous leader and problem solver that can work cross-functionally to tackle large and complex challenges across the organization.&nbsp; Our team has great people from across the US and beyond, spanning all types of industries and walks of life. We highly value the different perspectives and unique ideas that this diversity brings to our company and consider it an absolute necessity for our future growth.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="it">
                        <h6>IT</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>IT Technician</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world.&nbsp; We are hiring an IT Technician in Austin! You’ll be in a high energy, dynamic work environment where you have a chance to impact all different parts of the organization. You will be exposed to all aspects of administration. We are a small team and we Team Up to facilitate rapid growth and company velocity. In this hybrid role, you can expect to have approximately 40% project time to 60% day to day operations which will include assistance with help desk issues. This is a great opportunity to expand your skillset and experience hyper-growth at a fully SaaS-based organization. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="marketing">
                        <h6>Marketing</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Digital Marketing Manager (Pardot Certified)</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketing team at RigUp is responsible for bringing this north star to life through authentic and aspirational initiatives across a wide array of customer types and stakeholders. This team also creates and drives a portfolio of one-to-many programs to drive acquisition, engagement, and retention among platform users.&nbsp; RigUp is hiring a Digital Marketing Manager that will be responsible for leading multi-channel, top of funnel lead generation and customer acquisition using owned and non-owned channels. Our ideal candidate for this role will be someone who has experience in identifying opportunities, best practices, and tracking results both process improvement and also on actual performance and KPIs (CPL, conversion rates, etc.). Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Director Brand Strategy &amp; Insights</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketing team at RigUp is responsible for bringing this north star to life through authentic and aspirational initiatives across a wide array of customer types and stakeholders. This team also creates and drives a portfolio of one-to-many programs to drive acquisition, engagement, and retention among platform users.&nbsp; RigUp is hiring Director Brand Strategy &amp; Insights, to be one of the key thought leaders leaders in Marketing, leading the brand and content team. This is a great opportunity for an experienced Brand Marketer to lead initiatives on brand insights, strategy, and campaigns. The ideal candidate will have at least 7-10 years of experience and a proven track record of developing and commissioning research and creating data-driven brand strategies that drive both short term engagement and long term brand metrics. They will think creatively and analytically, provide cross-functional leadership within a growing team, and work collaboratively across the organization. Additionally, this candidate must be able to thrive in a fast-paced environment with a "roll up your sleeves" attitude and entrepreneurial spirit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Event Coordinator</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” The Marketing team at RigUp helps us drive leads, engage with customers and brings the RigUp brand to life through various online and offline channels. RigUp is hiring an Event Coordinator to help with sales related events; this person will report into field marketing and help with planning, supporting and executing a wide range of events.&nbsp;

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Marketing Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The marketing team at RigUp helps us drive leads, engage with customers and brings the RigUp brand to life through various online and offline channels. RigUp is hiring an Oil &amp; Gas Marketing Manager that will be responsible for collaborating with the Upstream &amp; Oilfield Services sales teams to create marketing campaigns to support growth goals. Our ideal candidate for this role will be someone who has digital marketing experience, campaign experience and is a marketing generalist that can help flex with events, social posts, collateral creation, etc. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Senior Manager Demand Generation Marketing</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketing team at RigUp drive lead generation, engages with customers and brings the RigUp brand to life through various online and offline channels. RigUp is hiring a Director of Demand Generation (Sr. Manager Demand Generation Marketing ) that will be responsible for top of funnel lead generation and pipeline creation. Our ideal candidate for this role will be someone who has experience in building a demand-generation engine at high growth companies. This person will be responsible for managing the digital marketing team, executing all marketing campaigns to ensure annual sales goals are met and driving the marketing program development through all of RigUp’s lead generation sources. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="operations">
                        <h6>Operations</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Account Manager - Recruiting Operations</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services.&nbsp; We are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. &nbsp; RigUp is hiring an Account Manager - Recruiting Operations in our Austin office. Finding jobs for the men and women who power the world is what motivates us. In order to find jobs for these men and women, we must understand the needs of the businesses that are looking to fill open positions. We need someone who can be an industry expert in determining future recruiting needs as well as someone with a firm understanding of the recruiting process. At the end of the day, you get excited about filling customer’s recruiting needs and you do whatever it takes to deliver results. &nbsp; If you have previous experience in the energy industry, that would be a huge benefit - anything from the oilfield to utilities to renewable energy markets would be applicable.

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Client Onboarding Specialist</h5>
                                            <div class="job-location"></div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">The Client Onboarding team is at the core of RigUp’s business model. Our team leads the charge by building long-lasting, mutually beneficial relationships with Clients and internal stakeholders to create a better Client onboarding experience. Our team’s Northstar is to partner with our Clients to provide an efficient and accurate integration, ensuring our workforce is equipped with the tools to power the world. We’re a group of high-achieving, low ego, detail-oriented problem solvers who come to work every day looking to make a difference in our Clients’ lives. If you have compassion for Client success, a roll-up your sleeves and get things done attitude, paired with a drive for data accuracy, this could be the opportunity for you!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Customer Engagement Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Customer Engagement team at RigUp is responsible for driving value to our workforce through the adoption of RigUp's solutions and best-in-class relationship management. We work cross-functionally to create a streamlined and consistent customer experience that focuses on retention and growth.&nbsp;&nbsp; RigUp is hiring a Customer Engagement Manager that will be responsible for leading a team of 5-7 individuals dedicated to partnering with our customers. We’re looking for a highly motivated individual who thrives in a fast paced environment and has a passion for building relationships with the men and women in the energy industry. Our ideal candidate for this role will be someone who has experience leading high performing teams and working in a high-growth environment. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Customer Engagement Specialist</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is looking for a Customer Engagement Representative to join our newly-formed Community Management team. The Customer Engagement Representative will focus on building and strengthening relationships with our customer base: independent contractors in the oil and gas industry. The Community Management team partners with marketing to drive customer engagement and customer success and support to drive customer satisfaction.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Dispatch Logistics and Operations</h5>
                                            <div class="job-location"></div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">Contract individual contributor on the marketplace operations team, responsible for logistics operations and communications supporting service line execution. Coordinator between trucking service providers, E&amp;P clients, and internal resources to guarantee logistics excellence.&nbsp; What you’ll do Monitor SCADA systems and call out vendors when necessary&nbsp; Intake requests from buyers and partners via phone, email, and apps and input requests into operations systems Dispatch, track and coordinate trucking to ensure delivery or transfer of various fluids i.e. drilling brines, oil based muds, fresh water produced water, crude oil, condensate liquids, or natural gas liquids from central terminals, production pad sites, or offload facilities including salt water disposal sites. Organize and coordinate services for various field operations including; construction, drilling, completions, frac fleet services, flowback, production, or midstream pipelines. Initiate general work orders and distribute field service orders for service providers and E&amp;P clients via email, online applications, and phone systems. Process various documentation including invoice verification for services, inventory management, Bills of Lading (BOL’s), or service ticket verification. Monitor daily activity - identify and resolve any issues that arise&nbsp; Relay appropriate product feedback to product team&nbsp; What we’re looking for&nbsp; Must have a High School Diploma or equivalent 2+ years of relevant experience in a logistics, operations, or control center environment Experience with SCADA systems&nbsp; Knowledge of the oil and gas industry&nbsp; Experience conducting logistics operations within an exploration &amp; production company,&nbsp; midstream company, or large trucking company&nbsp; Proficient in the use of computerized customer service, dispatching systems, Microsoft Word, Excel spreadsheets, and other software applications Communicate effectively verbally and in writing with internal and external teams, consultants, vendors, and clients Ability to work rotating or overnight shifts including nights, weekends, and holidays Bonus Points Logistics/operations/trucking experience Experience with CygNet Project management experience Client facing role experience&nbsp;

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Energy Recruiter</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services. We are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. RigUp is hiring a Recruiter in our Austin office. Finding jobs for the men and women who power the world is what motivates us. We’re looking for recruiters who are passionate about building meaningful relationships with people across the energy industry: the workers themselves as well as the hiring managers. This could range from the oilfield to renewable energy markets. You will actively manage and find opportunities for workers across multiple categories, basins, and job profiles. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>HSE Program Specialist</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” The HSE &amp; Compliance team at RigUp is responsible for building and maintaining a robust Health, Safety &amp; Environmental (HSE) program that will drive industry leading standards in the area of contingent workforce management. RigUp is hiring aSr. HSE Specialist&nbsp; that will be responsible for HSE program development and implementation. Our ideal candidate for this role will be an effective communicator, able to engage leadership, colleagues, and clients. The candidate must have a superior knowledge of HSE regulations and and be an effective project manager. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Manager, O&amp;G Sourcing Operations</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Sourcing Operations team at RigUp is responsible for matching supply and demand across people and service (ie: recruiting). Through categorical expertise, we are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. RigUp is hiring a Manager of Buyer Operations in our Austin office. Finding jobs for the men and women who power oil &amp; gas is what motivates us. We’re looking for someone to lead a team that is dedicated to understanding our customer’s recruiting requests and executing on these in a timely manner. We’re looking for someone who is passionate about building meaningful relationships with people in the oilfield, specifically hiring managers who engage RigUp for their sourcing needs. You will manage a team of 4-5 who are fulfilling sourcing requests across multiple categories, basins, and job profiles. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Marketplace Operations Intern</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services.&nbsp; Through categorical expertise, we are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. RigUp is hiring a Marketplace Operations Intern in our Austin office. You will be &nbsp;responsible for supporting the data entry and management efforts of the Marketplace Operations department. This will include helping keep our CRM up to date, reconciling data between sources, and resume parsing and formatting for our customer base.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Operations Account Manager, Water Hauling</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services.&nbsp; Through categorical expertise, we are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. RigUp is hiring a Supply Chain Specialist for our Logistics team that will be responsible for recruiting, vetting, and managing water hauling companies and related logistics. Our ideal candidate for this role will be someone who has a proven track record of establishing and maintaining relationships, executional hustle to exceed expectations, and is entrepreneurial at heart. Sound like you? Keep reading.&nbsp;

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Operations Manager, Water Hauling</h5>
                                            <div class="job-location">Shreveport, LA</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services.&nbsp; Through categorical expertise, we are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. RigUp is hiring a Regional Manager that will be responsible for onboarding, ensuring operational and safety compliance, and overseeing daily field operations. Our ideal candidate for this role will be someone who has a proven track record of operational execution, puts safety first, and is able to maintain supplier and client relationships. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Senior Director, Operations</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">As a Sr. Director of Operations, you are chiefly responsible for empowering RigUp’s workforce with economic opportunity.&nbsp; Tactically, this means that you are building the highest performing organization possible to deliver on value-added experiences for our external stakeholders.&nbsp; The Operations team services the full RigUp experience, and works closely with our product and data teams to build a robust offering of automated solutions.&nbsp; This leadership role is high impact, high visibility, with many moving parts, and we’re looking for best-in-class problem solvers to navigate our constantly growing environment.&nbsp; Our ideal candidate for this role will be someone who understands a full business cycle and interdependencies of sales, operations, accounting, product, and engineering, develops people and company relationships, is flexible and adaptive to change. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Strategy &amp; Planning Analyst</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services.&nbsp; Through categorical expertise, we are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. RigUp is hiring a Strategy and Planning Analyst in our Austin office. Finding jobs for the men and women who power oil &amp; gas is what motivates us. &nbsp;Your role on the S&amp;P team is to make our business run as efficiently as possible. &nbsp;You approach RigUp’s workforce marketplace with a holistic view of supply and demand, identifying inefficiencies across internal and external processes, structuring, aggregating, and utilizing data (in Excel and SQL) to drive large business decisions, forecast, track and execute against key financial and operational goals, all with the sole purpose of enabling marketplace growth.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Strategy and Planning Director, Operations</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">As the Director of Strategy &amp; Planning, you are responsible for maximizing RigUp’s throughput across various business opportunities - existing and new.&nbsp; Tactically, this means that you are optimizing processes, business models, pricing, analytics, product and operations across RigUp’s marketplace solutions.&nbsp; Our ideal candidate for this role will be someone who can understand a full business cycle, how sales, operations, product, and engineering intertwine, and how we iterate on business models to establish a marketplace or compete within a category. This leadership role is high impact, high visibility, with many moving parts, and we’re looking for best-in-class problem solvers to navigate our constantly growing environment. Sound like you? Keep reading.&nbsp;

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Supply Chain Analyst</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services.&nbsp; Through categorical expertise, we are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. &nbsp; RigUp is hiring a Supply Chain Analyst in our Austin office! Under the direction of the Team Lead, the Supply Chain Analyst will work closely with the business, peer Analysts, and with other functions within the organization to drive strategic sourcing opportunities, maintain contract compliance, actively manage the supplier landscape, and conduct cost reduction activities, all aligned with specific RigUp principles. Finding opportunities for the companies who power oil &amp; gas is what motivates us. This role will be responsible for taking a data driven approach to develop and maintain B2B relationships, generate reports, and conduct analyses that support RigUp’s vendor marketplace. The analyst will take a key role in supporting the Vendor Management Team, utilizing supply chain expertise to drive large business decisions, forecast, track and execute against key financial and operational goals, all with the sole purpose of enabling marketplace growth.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Transaction Operations Manager  (AP/AR)</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” The Transaction Operations (AP/AR) team at RigUp is responsible for paying our service providers accurately and on time and invoicing our clients in a timely, efficient and transparent manner. RigUp is hiring a Manager that will be responsible for overseeing our payment and invoicing functions to ensure the efficient execution of all daily tasks; paying our suppliers and invoicing our clients. Our ideal candidate for this role will be someone who is laser focussed driving efficiencies, experienced in managing people and capable of improving processes in a fast paced, high transaction volume environment. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Workforce Onboarding Specialist</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Workforce Onboarding team at RigUp focuses on providing a seamless onboarding experience to all our consultants. The team works to alleviate the administrative headache that comes with onboarding and ensure our workforce is fully compliant with federal regulations, client requirements and RigUp requirements.&nbsp; RigUp is hiring a Workforce Onboarding Specialist that will be responsible for the onboarding of our independent contractors. Our ideal candidate for this role will be someone who is driven to provide the best possible onboarding experience to all our customers, and is motivated by continuously improving the ways in which we execute our daily tasks. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Workforce Training Coordinator</h5>
                                            <div class="job-location">Houston, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Marketplace Operations team at RigUp is responsible for matching supply and demand across people and services.&nbsp; Through categorical expertise, we are responsible for implementing technical solutions to match the unique needs of our customers: these range from traditional sourcing needs to workforce management to on-demand services. RigUp is hiring a training coordinator that will be responsible for facilitating training events and educational programs for our workforce. Our ideal candidate for this role will be someone who has experience with learning management systems, can communicate with well, extremely organized and a forward thinker. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="payroll">
                        <h6>Payroll</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Payroll Manager</h5>
                                            <div class="job-location">Denver, CO</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” The W-2 Consulting team at RigUp strives for operational excellence by providing industry leading value to our consultants. RigUp is hiring a Payroll Manager that will be responsible for managing a fast-paced multi-state payroll of 2000+ W-2 consultants. If you have compassion for customer service, a roll-up your sleeves and get things done attitude, paired with a drive for data accuracy and continuous improvement, this could be the opportunity for you! We’re a team of high-achieving, low ego, detail-oriented problem solvers who come to work every day looking to make a difference in our consultant’s lives. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Payroll Specialist</h5>
                                            <div class="job-location">Denver, CO</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” The W-2 Consulting team at RigUp strives for operational excellence by providing industry leading value to our consultants. RigUp is hiring a Payroll Specialist that will be responsible for ensuring timely and accurate processing of 2000+ consultant payroll. If you have compassion for customer service, a roll-up your sleeves and get things done attitude, paired with a drive for data accuracy and continuous improvement, this could be the opportunity for you! We’re a team of high-achieving, low ego, detail-oriented problem solvers who come to work every day looking to make a difference in our consultant’s lives. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="product">
                        <h6>Product</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Senior Product Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Product &amp; Design team at RigUp is building a platform of products and services to better serve the evolving needs of the people working in energy. Our growing platform enables our customers to do what they do best, with greater efficiency, less complexity and lower costs, while maintaining the highest safety and environmental standards.&nbsp; Our team has great people from all over the US and beyond, from all sorts of industries and all walks of life. We highly value the different perspectives and unique ideas that diversity brings to our company, and consider it an absolute necessity for our future. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="product-marketing">
                        <h6>Product Marketing</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Content Marketing Manager - Product</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Product &amp; Design team at RigUp is building a platform of products and services to better serve the evolving needs of the people working in energy. Our growing platform enables our customers to do what they do best, with greater efficiency, less complexity and lower costs, while maintaining the highest safety and environmental standards. We’re looking for a Content Marketing Manager who is part strategist, part editor, and part storyteller. The ideal candidate will know how to execute content across a variety of channels, including video, digital and print. You’ll work with a self-directed and tenacious team to drive the growth of RigUp’s business. On top of your content chops, you’re also super organized and have a positive, get-it-done attitude.&nbsp; This role reports into the Product Marketing organization, and the right candidate should feel comfortable collaborating with teams across the business to define, plan, execute, and measure content marketing materials.&nbsp; Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Product Marketing Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- “to empower the people who power the world.” Product marketing sits within the Product &amp; Design team, which is building a platform of products and services to better serve the evolving needs of the people working in energy. Our growing platform enables our customers to do what they do best, with greater efficiency, less complexity and lower costs, while maintaining the highest safety and environmental standards. The Product Marketing team helps to bring our products to market in a way that creates added value for our community and empowers our own operations internally. The ideal candidate is driven by customer insights and strives to deliver positioning and messaging that enable successful go-to-markets. You’ll work with a fast-paced, self-directed, cross-functional team to drive the continued growth of our B2B &amp; B2C marketplaces. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="sales">
                        <h6>Sales</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Account Manager, Renewables</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Sales and Customer Success teams encompass all things revenue, customer education, and onboarding. These teams consist of new business sales account executives, post-sales professionals, sales enablement, and sales operations that ensure our customers are set up for success through the entire customer journey. RigUp is hiring an Account Executive - Field Sales. As an Account Executive - Field Sales, you’ll be joining a team of highly motivated people that are responsible for building up our network of Wind &amp; Solar Contractors and further driving RigUp adoption across all accounts. In our more personalized sales approach, we’re consistently building lasting relationships with our contractors to ensure we’re providing them with the best service available in the industry. Not only will you be talking to the contractors in your network daily, but a good amount of your time will be spent visiting them in the field and putting a face to the name. Wind &amp; Solar contractors are some of the hardest working individuals out there and we take pride in treating them with the respect and appreciation they deserve.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Business Solutions Executive - Upstream Oil &amp; Gas</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world.&nbsp; RigUp is hiring a Business Solutions Executive in our Austin Office. We are looking for high-energy teammates who can recognize opportunities and turn leads into long-lasting partnerships. With extensive product knowledge and a deep understanding of industry trends, you will communicate directly with clients and prospects, understand their individual needs, and recommend products or services that maximize value. You will engage decision-makers at E&amp;P operators to better understand customer needs, promote brand awareness and meet customer expectations and needs.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Midstream Sales Executive - Eagle Ford</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Sales and Customer Success teams encompass all things revenue, customer education, and onboarding. These teams consist of new business sales account executives, post-sales professionals, sales enablement, and sales operations that ensure our customers are set up for success through the entire customer journey. As a Midstream Sales Executive (Business Development Executive), you’ll join a team of highly motivated people that are responsible for building up our network of consultants. You’ll be responsible for building lasting relationships with our contractors, ensuring that we’re providing them with the best service available in the industry.&nbsp;&nbsp; The Midstream Sales Executive will also play a key role in the development and execution of RigUp’s overall strategy and growth initiatives related to selling RigUp products and services to service providers and operators within the midstream segment.&nbsp; He/She will work with our Midstream leader to shape key strategic initiatives guiding how we operationalize plans and prioritize for growth.&nbsp; RigUp’s Sales Executive in the Eagle Ford Basin will focus on midstream operations and infrastructure. The successful candidate will develop and maintain favorable relationships with new and existing clients in order to increase revenue and ensure that we meet client needs.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Midstream Sales Executive - Permian Basin</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Sales and Customer Success teams encompass all things revenue, customer education, and onboarding. These teams consist of new business sales account executives, post-sales professionals, sales enablement, and sales operations that ensure our customers are set up for success through the entire customer journey. As a Midstream Sales Executive (Business Development Executive), you’ll join a team of highly motivated people that are responsible for building up our network of consultants. You’ll be responsible for building lasting relationships with our contractors, ensuring that we’re providing them with the best service available in the industry.&nbsp;&nbsp; The Midstream Sales Executive will also play a key role in the development and execution of RigUp’s overall strategy and growth initiatives related to selling RigUp products and services to service providers and operators within the midstream segment.&nbsp; This person will work with our Midstream leader to shape key strategic initiatives guiding how we operationalize plans and prioritize for growth.&nbsp; RigUp’s Sales Executive in the Permian Basin will focus on midstream operations and infrastructure. The successful candidate will develop and maintain favorable relationships with new and existing clients in order to increase revenue and ensure that we meet client needs
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Midstream Sales Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is looking for a leader with a knack for building sales teams who can scale a small handful of people into a high-performance sales team.&nbsp;&nbsp;We’re a start-up team within a hyper-growth organization looking to take our sales teams to the next level. Critical to success in the role is the ability to identify training and process gaps and drive disciplined accountability while maintaining a sales culture of reward and recognition. &nbsp; In this role, you’ll drive revenue and market share growth within our midstream/pipeline market. You will recruit, hire, train, and coach your team, measuring success by the number of new customers acquired.&nbsp; What You Are:&nbsp; Performance Driven Authentic Honest Accountable Collaborative Strategic Inspiring
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Sales Manager, Renewables</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is looking for a leader with a knack for building sales teams who can scale a small handful of people into a high-performance sales team.&nbsp;&nbsp;We’re a start-up team within a hyper-growth organization looking to take our sales teams to the next level. Critical to success in the role is the ability to identify training and process gaps and drive disciplined accountability while maintaining a sales culture of reward and recognition. &nbsp; In this role, you’ll drive revenue and market share growth within our wind and solar markets. You will recruit, hire, train, and coach your team, measuring success by the number of new customers acquired.&nbsp; What You Are:&nbsp; Performance Driven Authentic Honest Accountable Collaborative Strategic Inspiring
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="sales-operations">
                        <h6>Sales Operations</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Sales Operations Commissions Analyst</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exist to move us closer to our north star -- to empower the people who power the world. The Sales teams encompass all things revenue, customer education, and on-boarding. These teams consist of new business sales account executives, post-sales professionals, sales enablement, and sales operations that ensure our customers are set up for success through the entire customer journey. Our Commissions Analyst will focus on improvement of the commissions reporting and processes and help enable our sales organization achieve more success by providing timely and accurate commissions. You will fully own and administer an end-to-end commissions process and work cross functionally on all elements regarding the commission process.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="software-engineering">
                        <h6>Software Engineering</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Backend Software Engineer</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Engineering team at RigUp leverages a variety of tools to enable and sustain a scalable and highly-resilient platform for delivering customer value. We are organized into agile, cross-functional product line teams consisting of engineering, product and design which allows us to develop deep expertise and rapidly deliver high-value features and functionality. As a Backend Engineer, you will work cross-functionally with product, engineering, and design teams across RigUp to ensure a consistent and clear developer experience. We are looking for a Backend Engineer to help continue building our backend for energy jobs and services marketplace. The ideal candidate will have experience developing scalable software in partnership with diverse engineering teams and most aspect of our business.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Engineering Summer Internship 2020</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Engineering team at RigUp leverages a variety of tools to enable and sustain a scalable and highly-resilient platform for delivering customer value. We are organized into agile, cross-functional product line teams consisting of engineering, product and design which allows us to develop deep expertise and rapidly deliver high-value features and functionality. RigUp is hiring several Engineering Interns for Summer 2020 that will be working with the Engineering Team to learn and grow as a developer. Our ideal candidate for this role will be someone who is curious and ready to take on a challenge. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Front-end Software Engineer</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Engineering team at RigUp leverages a variety of tools to enable and sustain a scalable and highly-resilient platform for delivering customer value. We are organized into agile, cross-functional product line teams consisting of engineering, product and design which allows us to develop deep expertise and rapidly deliver high-value features and functionality. As a Front-end Engineer, you will work cross-functionally with product, engineering, and design teams across RigUp to ensure a consistent and clear developer experience. We are looking for a Front-End Engineer to help continue building our frontend for energy jobs and services marketplace. The ideal candidate will have experience developing scalable software in partnership with diverse engineering teams and most aspect of our business.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Full Stack Software Engineer</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Engineering team at RigUp leverages a variety of tools to enable and sustain a scalable and highly-resilient platform for delivering customer value. We are organized into agile, cross-functional Programme Leadership Teams consisting of engineering, product and design which allows us to develop deep expertise and rapidly deliver high-value features and functionality. We are hiring Senior Full-Stack engineers who will be responsible for many exciting initiatives in our product road-map like our on-demand offering "Pulse" or building out our flexible ReactJS component library.&nbsp; Our ideal candidate for this role will be someone who has full command of front-end (70%) and back-end (30%) in an Agile environment with modern infra. Sound like you? Keep reading.&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Senior Software Engineer, Full Stack</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Engineering team at RigUp leverages a variety of tools to enable and sustain a scalable and highly-resilient platform for delivering customer value. We are organized into agile, cross-functional Programme Leadership Teams consisting of engineering, product and design which allows us to develop deep expertise and rapidly deliver high-value features and functionality. We are hiring Senior Full-Stack engineers who will be responsible for many exciting initiatives in our product road-map like our on-demand offering "Pulse" or building out our flexible ReactJS component library.&nbsp; Our ideal candidate for this role will be someone who has full command of front-end (70%) and back-end (30%) in an Agile environment with modern infra. Sound like you? Keep reading.&nbsp;

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Software Engineering Manager</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- to empower the people who power the world. The Engineering team at RigUp leverages a variety of tools to enable and sustain a scalable and highly-resilient platform for delivering customer value. We are organized into agile, cross-functional PLTs consisting of engineering, product and design which allows us to develop deep expertise and rapidly deliver high-value features and functionality. RigUp is hiring a Software Engineering Manager that will be responsible for mentoring/coaching engineers on the team.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="support">
                        <h6>Support</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Customer Support Representative</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” Our Customer Support team is the heart and soul of our business. As a Customer Support Representative, you will be a subject-matter expert of all things RigUp. If you have a desire to help others, an interest in technology, and a passion to make the customer service experience a bit more human, this could be the right opportunity for you! You will be responsible for fielding support inbounds, maintaining day-to-day platform operations, and being a contributor in the product feedback loop. You will represent RigUp to our new and existing customers with the goal of helping build/grow relationships with users, promote the use of software adoption, and enable an efficient business through process improvement and implementation
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Customer Support Representative (Weekend Support)</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">Our Customer Support team is the heart and soul of our business. As a Customer Support Representative, you will be a subject-matter expert of all things RigUp. If you have a desire to help others, an interest in technology, and a passion to make the customer service experience a bit more human, this could be the right opportunity for you! You will be responsible for fielding support inbounds, maintaining day-to-day platform operations, and being a contributor in the product feedback loop. You will represent RigUp to our new and existing customers with the goal of helping build/grow relationships with users, promote the use of software adoption, and enable an efficient business through process improvement and implementation.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="department-section" id="talent">
                        <h6>Talent</h6>
                        <div class="department-postings">
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Business Recruiter</h5>
                                            <div class="job-location"></div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world”. &nbsp;The Talent team at RigUp encompasses all things people. On this team, you can find Talent Acquisition, Human Resources, People Operations, Talent Development, Workplace Operations, Talent Brand, and Administration working cohesively to build and maintain the best team around. The focus of the Talent Team is to promote culture, growth, and efficiency while strengthening the RigUp team. RigUp is hiring a Recruiter that will be responsible for growing our General Business teams. An ideal candidate for this role will be someone who has a proven track record of helping teams hire at scale without compromising on quality, partners effortlessly with hiring managers, and isn’t afraid to roll up their sleeves to get the job done. Sound like you? Keep reading

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>L&amp;D Coach</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Talent team at RigUp encompasses all things people. On this team, you can find Talent Acquisition, Talent Operations, People &amp; Organizational Development, Workplace Experience, and Talent Brand working cohesively to build and maintain the best team around.&nbsp; RigUp is hiring a L&amp;D coach on the People &amp; Organizational Development team that will partner with a business unit to uplevel performance through targeted learning initiatives. This position focuses on growth at the team and individual level, understanding department and role-specific learning needs and responding in kind. Our ideal candidate is someone who has a passion for connecting with people and helping them grow, a proven track record of creative problem solving for learning solutions and isn’t afraid to roll up their sleeves and get the job done. Sound like you? Keep reading.&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>L&amp;D Partner</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world.” The Talent team at RigUp encompasses all things people. On this team, you can find Talent Acquisition, Talent Operations, People &amp; Organizational Development, Workplace Experience, and Talent Brand working cohesively to build and maintain the best team around.&nbsp; RigUp is hiring a L&amp;D Partner on the People &amp; Organizational Development team that will partner with a business unit to uplevel performance through targeted learning initiatives. This position focuses on growth at the team and individual level, understanding department and role-specific learning needs and responding in kind. Our ideal candidate is someone who has a passion for connecting with people and helping them grow, a proven track record of creative problem solving for learning solutions and isn’t afraid to roll up their sleeves and get the job done. Sound like you? Keep reading.&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Senior Compensation Analyst- Contract-to-Hire</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world”.&nbsp; The Talent team at RigUp encompasses all things people. On this team, you can find Talent Acquisition, Human Resources, People Operations, Talent Development, Workplace Operations, Talent Brand, and Administration working cohesively to build and maintain the best team around. The focus of the Talent Team is to promote culture, growth, and efficiency while strengthening the RigUp team.&nbsp; RigUp is hiring for Senior Compensation Analyst responsible for developing, implementing, administering, and maintaining compensation programs that support the company’s Total Rewards philosophy.&nbsp; This person will research job requirements and evaluates job positions to ensure proper salary structure and the assignment of appropriate job and salary grade profiles.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-posting-wrapper">
                                <div class="job-posting">
                                    <div class="job-header">
                                        <div class="job-details">
                                            <h5>Technical Recruiter</h5>
                                            <div class="job-location">Austin, TX</div>
                                        </div>
                                        <div><a class="button primary" href="#" target="_blank">Apply now</a></div>
                                    </div>
                                    <div class="job-description-wrapper">
                                        <div class="job-description">RigUp is changing the way work is done in the energy industry. Each one of our teams exists to move us closer to our north star -- “to empower the people who power the world”. &nbsp;The Talent team at RigUp encompasses all things people. On this team, you can find Talent Acquisition, Human Resources, People Operations, Talent Development, Workplace Operations, Talent Brand, and Administration working cohesively to build and maintain the best team around. The focus of the Talent Team is to promote culture, growth, and efficiency while strengthening the RigUp team. RigUp is hiring a Technical Recruiter that will be responsible for growing our Product, Design, and Engineering teams. An ideal candidate for this role will be someone who has a proven track record of helping teams hire at scale without compromising on quality, partners effortlessly with hiring managers, and isn’t afraid to roll up their sleeves to get the job done. Sound like you? Keep reading.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endwhile
@endsection