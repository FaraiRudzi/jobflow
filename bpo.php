<?php
    $page_title  = 'BPO Services - Job Flow';
    $currentPage = 'bpo';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<style>
/* Specific styles for the BPO Services page */
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
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cards-row text-center">
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-chart-line card-icon"></i>
                    <h4 class="card-title">Improved Productivity</h4>
                    <p class="card-text text-muted">Our team handles routine tasks, freeing up internal resources to focus on core competencies and strategic initiatives.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-dollar-sign card-icon"></i>
                    <h4 class="card-title">Reduced Costs</h4>
                    <p class="card-text text-muted">We help businesses save on labor, infrastructure, and training costs, leading to increased profitability.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-smile-beam card-icon"></i>
                    <h4 class="card-title">Enhanced Customer Experience</h4>
                    <p class="card-text text-muted">Our dedicated team provides 24/7 support, increasing customer satisfaction and loyalty.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
?>