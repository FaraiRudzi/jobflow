<?php
    $page_title  = 'Our Services - Job Flow';
    $currentPage = 'services';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<style>
/* Additional or overridden styles to be merged with your main CSS file */
.services-intro-section {
    padding: 3rem 0;
    text-align: center;
}
.service-icon-lg {
    font-size: 8rem;
    color: var(--primary-color);
    opacity: 0.1;
}
.service-list {
    list-style: none;
    padding: 0;
}
.service-list li {
    padding-left: 1.5rem;
    position: relative;
    margin-bottom: 0.75rem;
    font-size: 1rem;
    color: var(--dark-text);
}
.service-list li strong {
    color: var(--primary-color);
}
.service-list li::before {
    content: '\f054'; /* Font Awesome right-arrow icon */
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    color: var(--accent-color);
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    font-size: 0.8rem;
}
.service-detail-section:nth-of-type(even) {
    background-color: var(--light-bg);
}

.process-card .icon-box {
    font-size: 2rem;
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    color: var(--white);
    border-radius: 50%;
    margin: 0 auto 1rem;
}

/* New styles for benefit cards */
.benefit-card {
    border: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
}
.benefit-icon {
    color: var(--primary-color);
    font-size: 3rem;
    margin-bottom: 1rem;
}

/* Creative Talent Acquisition Section Styles */
.timeline-container {
    position: relative;
    padding: 20px 0;
    list-style: none;
}
.timeline-container:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 3px;
    background-color: var(--primary-color);
    margin-left: -1.5px;
}
.timeline-item {
    position: relative;
    width: 50%;
    margin-bottom: 30px;
}
.timeline-item:nth-child(even) {
    left: 50%;
    padding-left: 30px;
}
.timeline-item:nth-child(odd) {
    padding-right: 30px;
    text-align: right;
}
.timeline-badge {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: var(--primary-color);
    color: var(--white);
    text-align: center;
    line-height: 50px;
    margin-left: -25px;
    z-index: 100;
}
.timeline-panel {
    border: 1px solid var(--border-color);
    border-radius: 5px;
    padding: 20px;
    background-color: var(--white);
    position: relative;
}
.timeline-panel:before {
    content: '';
    display: inline-block;
    position: absolute;
    top: 15px;
    border-width: 10px;
    border-style: solid;
    border-color: transparent var(--border-color) transparent transparent;
}
.timeline-item:nth-child(odd) .timeline-panel:before {
    right: -20px;
    border-left-width: 0;
    border-right-width: 20px;
}
.timeline-item:nth-child(even) .timeline-panel:before {
    left: -20px;
    border-right-width: 0;
    border-left-width: 20px;
}
.timeline-title {
    margin-top: 0;
    color: var(--primary-color);
}
@media (max-width: 767px) {
    .timeline-container:before {
        left: 12px;
    }
    .timeline-item, .timeline-item:nth-child(even) {
        width: 100%;
        padding-left: 40px;
        left: 0;
    }
    .timeline-item:nth-child(odd) {
        text-align: left;
    }
    .timeline-badge {
        left: 0;
        margin-left: 0;
    }
    .timeline-item:nth-child(odd) .timeline-panel:before,
    .timeline-item:nth-child(even) .timeline-panel:before {
        left: 20px;
        right: auto;
        border-color: transparent var(--border-color) transparent transparent;
        border-left-width: 20px;
        border-right-width: 0;
    }
}

.service-list-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
.service-item, .industry-item {
    text-align: center;
    padding: 20px;
    border-radius: 5px;
    background-color: var(--light-bg);
}
.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}
</style>

<section class="page-header">
  <div class="container text-center">
    <h1>Our Comprehensive Solutions</h1>
    <p class="lead mt-2">Explore how we help businesses grow with tailored outsourcing services.</p>
  </div>
</section>

<section class="services-intro-section">
  <div class="container">
    <h2 class="section-title">Tailored Services for Business Growth</h2>
    <p class="lead mx-auto" style="max-width: 700px;">
      At Job Flow Digital Solutions, we offer a full spectrum of outsourcing solutions designed to streamline your operations,
      reduce costs, and free you to focus on your core business.
    </p>
  </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2 class="section-title text-center">Find the Right Talent to Drive Your Success</h2>
        <p class="lead mb-5 mx-auto text-center" style="max-width: 700px;">
            Our expert Talent Acquisition service provides comprehensive recruitment and staffing solutions, helping you build a stronger team and a more successful business.
        </p>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <i class="fas fa-users-cog fa-4x text-primary mb-3"></i>
                        <h4 class="card-title">Access Top Talent</h4>
                        <p class="card-text text-muted">Tap into our vast network of qualified candidates to access the best professionals in your industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <i class="fas fa-rocket fa-4x text-primary mb-3"></i>
                        <h4 class="card-title">Streamlined Process</h4>
                        <p class="card-text text-muted">Our efficient recruitment process saves you valuable time and resources, allowing you to focus on your core business.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <i class="fas fa-dollar-sign fa-4x text-primary mb-3"></i>
                        <h4 class="card-title">Cost-Effective Solutions</h4>
                        <p class="card-text text-muted">We provide tailored and affordable talent acquisition services that deliver exceptional value and meet your business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="container">
        <h2 class="section-title text-center">Our Talent Acquisition Process</h2>
        <p class="lead text-center mb-5 mx-auto" style="max-width: 600px;">
            We've designed a clear and effective process to ensure you find the perfect candidate for your team.
        </p>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="timeline-container">
                    <div class="timeline-item">
                        <div class="timeline-badge"><i class="fas fa-search"></i></div>
                        <div class="timeline-panel">
                            <h4 class="timeline-title">1. Understanding Your Business Needs</h4>
                            <p class="text-muted">We work closely with you to gain a deep understanding of your business, culture, and specific talent requirements.</p>
                        </div>
                    </div>
                    <div class="timeline-item timeline-inverted">
                        <div class="timeline-badge"><i class="fas fa-network-wired"></i></div>
                        <div class="timeline-panel">
                            <h4 class="timeline-title">2. Sourcing Top Talent</h4>
                            <p class="text-muted">We utilize a variety of channels, including job boards, social media, and our professional networks, to source the best candidates.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-badge"><i class="fas fa-filter"></i></div>
                        <div class="timeline-panel">
                            <h4 class="timeline-title">3. Screening and Shortlisting</h4>
                            <p class="text-muted">We meticulously screen and shortlist candidates based on your requirements, presenting only the most qualified individuals.</p>
                        </div>
                    </div>
                    <div class="timeline-item timeline-inverted">
                        <div class="timeline-badge"><i class="fas fa-comments"></i></div>
                        <div class="timeline-panel">
                            <h4 class="timeline-title">4. Conducting Interviews</h4>
                            <p class="text-muted">We assist with conducting interviews, providing valuable insights and recommendations to help you make an informed hiring decision.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-badge"><i class="fas fa-hand-holding-heart"></i></div>
                        <div class="timeline-panel">
                            <h4 class="timeline-title">5. Onboarding New Hires</h4>
                            <p class="text-muted">We ensure a smooth onboarding process, providing support and guidance as new hires integrate into your organization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h3 class="section-subtitle mb-4">Our Talent Acquisition Services</h3>
                <div class="service-list-grid">
                    <div class="service-item">
                        <i class="fas fa-user-tie fa-2x text-primary mb-2"></i>
                        <h5>Permanent Recruitment</h5>
                        <p class="text-muted">We help you find the right permanent employees to build a stable and skilled team.</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-clock fa-2x text-primary mb-2"></i>
                        <h5>Temporary Staffing</h5>
                        <p class="text-muted">We provide flexible staffing solutions for short-term projects or to cover temporary needs.</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-briefcase fa-2x text-primary mb-2"></i>
                        <h5>Executive Search</h5>
                        <p class="text-muted">Our specialized service for recruiting senior-level talent for key leadership positions.</p>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-cogs fa-2x text-primary mb-2"></i>
                        <h5>Recruitment Process Outsourcing</h5>
                        <p class="text-muted">We can manage your entire recruitment process, from sourcing to onboarding.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="section-subtitle mb-4">Industries We Serve</h3>
                <div class="industries-grid">
                    <div class="industry-item">
                        <i class="fas fa-laptop-code fa-2x text-primary mb-2"></i>
                        <h6>Technology</h6>
                        <p class="text-muted small">Software development, data science, and IT.</p>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-medkit fa-2x text-primary mb-2"></i>
                        <h6>Healthcare</h6>
                        <p class="text-muted small">Hospitals, medical groups, and healthcare tech.</p>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-chart-line fa-2x text-primary mb-2"></i>
                        <h6>Finance</h6>
                        <p class="text-muted small">Banking, investment management, and financial services.</p>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-industry fa-2x text-primary mb-2"></i>
                        <h6>Manufacturing</h6>
                        <p class="text-muted small">Production, engineering, and supply chain management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Information Technology Services</h2>
        <p class="lead">Optimize your productivity by leveraging the expertise of our IT professionals. Focus on strategic business priorities while we manage essential tasks.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-cogs"></i>
                <h3 class="sub-service-title">Software Development & Maintenance</h3>
                <p>Designing, developing, and maintaining software applications.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-network-wired"></i>
                <h3 class="sub-service-title">Network Management</h3>
                <p>Overseeing and maintaining computer networks to ensure uptime, security, and connectivity.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-headset"></i>
                <h3 class="sub-service-title">Help Desk Services</h3>
                <p>Offering support to end-users for IT-related issues via phone, email, or ticketing systems.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-server"></i>
                <h3 class="sub-service-title">IT Support System</h3>
                <p>Providing technical assistance and support for an organization's IT infrastructure.</p>
            </div>
             <div class="sub-service-item">
                <i class="sub-service-icon fas fa-code"></i>
                <h3 class="sub-service-title">Programming & Coding</h3>
                <p>Creating custom code for specific applications, tools, or software to meet your unique business needs.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-line benefit-icon"></i>
                        <h4 class="card-title">Enhanced Efficiency</h4>
                        <p class="card-text text-muted">Streamlined IT operations and support enable businesses to focus on core goals without technical distractions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-shield-alt benefit-icon"></i>
                        <h4 class="card-title">Improved Security</h4>
                        <p class="card-text text-muted">Managed networks and IT support help protect against threats and minimize costly downtime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-tools benefit-icon"></i>
                        <h4 class="card-title">Custom Solutions</h4>
                        <p class="card-text text-muted">Our programming and software development services provide tailored tools for your specific business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Financial and Accounting Services</h2>
        <p class="lead">Our finance and accounting services help businesses manage their financial operations efficiently and effectively, from payroll to financial analysis.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-file-invoice-dollar"></i>
                <h3 class="sub-service-title">Payroll Processing</h3>
                <p>Ensuring employees are paid accurately and on time, with full tax compliance and benefits administration.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-calculator"></i>
                <h3 class="sub-service-title">Accounting and Bookkeeping</h3>
                <p>Providing accurate financial record-keeping and reporting, including accounts payable/receivable.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-chart-bar"></i>
                <h3 class="sub-service-title">Financial Analysis & Planning</h3>
                <p>Offering insights, budgeting, and strategic planning to help you make informed decisions about your financial future.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-check-circle benefit-icon"></i>
                        <h4 class="card-title">Improved Accuracy</h4>
                        <p class="card-text text-muted">Our expert team ensures accurate and timely financial reporting, reducing the risk of costly errors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-dollar-sign benefit-icon"></i>
                        <h4 class="card-title">Reduced Costs</h4>
                        <p class="card-text text-muted">Streamlining your financial operations helps lower labor, infrastructure, and training costs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-lightbulb benefit-icon"></i>
                        <h4 class="card-title">Informed Decisions</h4>
                        <p class="card-text text-muted">With clear financial analysis and planning, you can make smarter decisions about your business's future.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Business Process Outsourcing (BPO)</h2>
        <p class="lead">Our BPO services help businesses improve efficiency and reduce costs by outsourcing non-core functions to our experienced team.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-phone-alt"></i>
                <h3 class="sub-service-title">Customer Service</h3>
                <p>Inbound and outbound support via phone, email, chat, and social media.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-file-invoice-dollar"></i>
                <h3 class="sub-service-title">Finance and Accounting</h3>
                <p>We handle accounts payable, accounts receivable, and financial reporting.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-users"></i>
                <h3 class="sub-service-title">Human Resources</h3>
                <p>We manage recruitment, payroll processing, and employee onboarding.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-database"></i>
                <h3 class="sub-service-title">Data Entry and Management</h3>
                <p>We provide accurate data entry, processing, and analytics.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-line benefit-icon"></i>
                        <h4 class="card-title">Improved Productivity</h4>
                        <p class="card-text text-muted">Our team handles routine tasks, freeing up internal resources to focus on core competencies and strategic initiatives.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-dollar-sign benefit-icon"></i>
                        <h4 class="card-title">Reduced Costs</h4>
                        <p class="card-text text-muted">We help businesses save on labor, infrastructure, and training costs, leading to increased profitability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-smile-beam benefit-icon"></i>
                        <h4 class="card-title">Enhanced Customer Experience</h4>
                        <p class="card-text text-muted">Our dedicated team provides 24/7 support, increasing customer satisfaction and loyalty.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Customer Support Services</h2>
        <p class="lead">Our services are designed to help businesses provide exceptional customer experiences, increasing loyalty and enhancing brand reputation.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-comment-dots"></i>
                <h3 class="sub-service-title">Customer Service</h3>
                <p>Providing timely and efficient support via phone, email, and chat.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-ticket-alt"></i>
                <h3 class="sub-service-title">Ticketing System</h3>
                <p>Managing customer inquiries efficiently with automated ticket creation and prioritization.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-comments"></i>
                <h3 class="sub-service-title">Multichannel Support</h3>
                <p>Offering support across multiple channels, including social media and live chat.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-trophy benefit-icon"></i>
                        <h4 class="card-title">Exceptional Experiences</h4>
                        <p class="card-text text-muted">We ensure your customers receive the best possible experience, leading to higher satisfaction and positive reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-heart benefit-icon"></i>
                        <h4 class="card-title">Increased Loyalty</h4>
                        <p class="card-text text-muted">Effective and personalized support helps you build strong relationships and increase customer retention.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card benefit-card h-100 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fas fa-star benefit-icon"></i>
                        <h4 class="card-title">Enhanced Reputation</h4>
                        <p class="card-text text-muted">By providing reliable and timely assistance, you build a strong brand reputation and stand out from the competition.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Dental & Medical Services</h2>
        <p class="lead">We handle the operational details of billing, coding, practice management, and administrative tasks for medical practices.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-tooth"></i>
                <h3 class="sub-service-title">Dental Billing & Coding</h3>
                <p>Expert claim handling to ensure timely reimbursements.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-clipboard-list"></i>
                <h3 class="sub-service-title">Dental Practice Management</h3>
                <p>Solutions to enhance day-to-day practice efficiency.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-user-md"></i>
                <h3 class="sub-service-title">Medical Support Services</h3>
                <p>Assistance with billing, coding, and administrative tasks for medical practices.</p>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Marketing Services</h2>
        <p class="lead">Our marketing services help businesses enhance their brand and reach new customers with targeted campaigns.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-bullhorn"></i>
                <h3 class="sub-service-title">Digital Marketing</h3>
                <p>Implementing effective online strategies to boost your brand's presence.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-chart-line"></i>
                <h3 class="sub-service-title">Campaign Management</h3>
                <p>Overseeing marketing campaigns from concept to execution to analysis.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-tag"></i>
                <h3 class="sub-service-title">Brand Promotion</h3>
                <p>Crafting and executing strategies to promote your brand and increase market awareness.</p>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Fleet Management Services</h2>
        <p class="lead">Our comprehensive fleet management services are designed to improve efficiency, safety, and cost control for your business.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-map-marked-alt"></i>
                <h3 class="sub-service-title">24/7 Fleet Tracking</h3>
                <p>Real-time monitoring of vehicles for location, status, and performance.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-road"></i>
                <h3 class="sub-service-title">Route Management</h3>
                <p>Optimizing routes to improve efficiency and reduce fuel consumption.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-hands-helping"></i>
                <h3 class="sub-service-title">Driver Support</h3>
                <p>Providing drivers with 24/7 assistance for issues like breakdowns and accidents.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-dolly-flatbed"></i>
                <h3 class="sub-service-title">Transportation Logistics</h3>
                <p>Managing vehicle leasing, hiring, or outsourcing to meet business demands.</p>
            </div>
        </div>
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Virtual Assistance</h2>
        <p class="lead">Our virtual support services provide administrative, technical, and creative support to help you focus on strategic business priorities.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-tasks"></i>
                <h3 class="sub-service-title">Administrative Support</h3>
                <p>Handling day-to-day administrative tasks to improve your efficiency.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-laptop"></i>
                <h3 class="sub-service-title">Technical Support</h3>
                <p>Providing technical assistance and troubleshooting for your business.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-paint-brush"></i>
                <h3 class="sub-service-title">Creative Support</h3>
                <p>Offering support for creative projects, presentations, and content creation.</p>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="section bg-light">
  <div class="container text-center">
    <h2 class="section-title">Our Simple Process</h2>
    <p class="lead mb-5 mx-auto" style="max-width: 600px;">
      Getting started with Job Flow is straightforward. We've streamlined our process to ensure a seamless experience.
    </p>
    <div class="services-wrapper">
      <div class="service-card process-card">
        <i class="fas fa-comments icon-box"></i>
        <h5>Consultation</h5>
        <p class="text-muted small">We start with a detailed consultation to understand your needs and goals.</p>
      </div>
      <div class="service-card process-card">
        <i class="fas fa-cogs icon-box"></i>
        <h5>Strategy & Team Building</h5>
        <p class="text-muted small">We develop a tailored strategy and assemble a dedicated team for your project.</p>
      </div>
      <div class="service-card process-card">
        <i class="fas fa-rocket icon-box"></i>
        <h5>Launch & Support</h5>
        <p class="text-muted small">We integrate seamlessly with your team, providing ongoing support for success.</p>
      </div>
    </div>
  </div>
</section>

<hr>

<section class="banner">
  <div class="container text-center">
    <h2>Have a Specific Need?</h2>
    <p class="lead my-3">Let's discuss how we can create a custom solution to perfectly fit your business requirements.</p>
    <a href="about_us.php#contact" class="btn btn-light btn-lg cta-banner">Get a Free Quote</a>
  </div>
</section>

<?php
    require_once 'includes/footer.php';
?>