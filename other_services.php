<?php
    $page_title  = 'Other Services - Job Flow';
    $currentPage = 'other_services';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<style>
/* Specific styles for the Other Services page */
.section {
    padding: 60px 0;
}
.sub-service-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
.sub-service-item {
    text-align: center;
    padding: 20px;
    border-radius: var(--border-radius-md);
    background-color: var(--clr-primary-light);
    border: 1px solid var(--clr-border);
    box-shadow: var(--shadow-sm);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.sub-service-item:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}
.sub-service-icon {
    font-size: 3.5rem;
    color: var(--clr-accent);
    margin-bottom: var(--space-md);
    transition: color 0.3s ease;
}
.sub-service-item:hover .sub-service-icon {
    color: var(--clr-primary-dark);
}
.sub-service-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--clr-primary-dark);
    margin-bottom: var(--space-xs);
}
.sub-service-item p {
    font-size: 1rem;
    line-height: 1.6;
    color: var(--clr-text-light);
}
</style>

<section class="page-header">
    <div class="container">
        <h2 class="section-title">Specialized Solutions</h2>
        <p class="lead">In addition to our core offerings, we provide a suite of specialized services to meet the unique needs of various industries.</p>
</section>

 <section class="section bg-light py-5">
        <h3 class="mt-5">Dental & Medical Services</h3>
        <p>We handle the operational details of billing, coding, practice management, and administrative tasks for medical practices.</p>
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
</section>

<section>
        <h3 class="mt-5">Marketing Services</h3>
        <p>Our marketing services help businesses enhance their brand and reach new customers with targeted campaigns.</p>
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
</section>
<section class="section bg-light py-5">
        <h3 class="mt-5">Fleet Management Services</h3>
        <p>Our comprehensive fleet management services are designed to improve efficiency, safety, and cost control for your business.</p>
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
</section>
<section>
        <h3 class="mt-5">Virtual Assistance</h3>
        <p>Our virtual support services provide administrative, technical, and creative support to help you focus on strategic business priorities.</p>
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

<?php
    require_once 'includes/footer.php';
?>