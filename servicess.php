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
      At Job Flow, we offer a full spectrum of outsourcing solutions designed to streamline your operations,
      reduce costs, and free you to focus on your core business.
    </p>
  </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Information Technology Services</h2>
        <p class="lead">Optimise productivity by leveraging our IT services. Focus on strategic business priorities while we manage essential tasks.</p>
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
        <h2>Financial Services</h2>
        <p class="lead">Ensure your financial operations are accurate, compliant, and well-planned with our expert services.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-file-invoice-dollar"></i>
                <h3 class="sub-service-title">Payroll Processing</h3>
                <p>Handling all aspects of payroll, including calculations and tax filings.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-calculator"></i>
                <h3 class="sub-service-title">Accounting and Bookkeeping</h3>
                <p>Providing accurate financial record-keeping and reporting.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-chart-bar"></i>
                <h3 class="sub-service-title">Financial Analysis & Planning</h3>
                <p>Offering insights and developing strategies to achieve your financial goals.</p>
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
    </div>
</section>

<section class="section service-detail-section">
    <div class="container">
        <h2>Talent Acquisition</h2>
        <p class="lead">Our services provide comprehensive recruitment and staffing solutions to help you find the right talent to drive your organization's success.</p>
        <div class="sub-service-grid">
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-user-tie"></i>
                <h3 class="sub-service-title">Access Top Talent</h3>
                <p>Our vast network of qualified candidates ensures you find the best talent.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-tasks"></i>
                <h3 class="sub-service-title">Streamlined Recruitment Process</h3>
                <p>Our efficient process saves you time and resources.</p>
            </div>
            <div class="sub-service-item">
                <i class="sub-service-icon fas fa-dollar-sign"></i>
                <h3 class="sub-service-title">Cost-Effective Solutions</h3>
                <p>Our services are designed to reduce the costs associated with hiring and training.</p>
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
    <a href="about_us.php#contact" class="cta-banner">Get a Free Quote</a>
  </div>
</section>

<?php
    require_once 'includes/footer.php';
?>