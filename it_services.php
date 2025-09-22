<?php
    $page_title  = 'IT Services - Job Flow';
    $currentPage = 'it_services';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<style>
/* Specific styles for the IT Services page */
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
    border-radius: 5px;
    background-color: var(--clr-primary-light);
}
.sub-service-icon {
    font-size: 2.5rem;
    color: var(--clr-primary);
    margin-bottom: 1rem;
}

/* Updated Benefit Cards to match the provided format */
.cards-row {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}
.minimal-card {
    background: var(--clr-primary-light);
    border: 1px solid var(--clr-border);
    border-radius: var(--border-radius-md);
    box-shadow: var(--shadow-sm);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 20px;
}
.minimal-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
}
.minimal-card .card-body {
    padding: var(--space-xl) var(--space-lg);
}
.minimal-card .card-icon {
    font-size: 3.5rem;
    color: var(--clr-accent);
    margin-bottom: var(--space-md);
    transition: color 0.3s ease;
}
.minimal-card:hover .card-icon {
    color: var(--clr-primary-dark);
}
.minimal-card .card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--clr-primary-dark);
    margin-bottom: var(--space-xs);
}
.minimal-card .card-text {
    font-size: 1rem;
    line-height: 1.6;
    color: var(--clr-text-light);
}

</style>

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
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cards-row text-center">
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-chart-line card-icon"></i>
                    <h4 class="card-title">Enhanced Efficiency</h4>
                    <p class="card-text text-muted">Streamlined IT operations and support enable businesses to focus on core goals without technical distractions.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-shield-alt card-icon"></i>
                    <h4 class="card-title">Improved Security</h4>
                    <p class="card-text text-muted">Managed networks and IT support help protect against threats and minimize costly downtime.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-tools card-icon"></i>
                    <h4 class="card-title">Custom Solutions</h4>
                    <p class="card-text text-muted">Our programming and software development services provide tailored tools for your specific business needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
?>