<?php
    $page_title  = 'Finance & Accounting - Job Flow';
    $currentPage = 'finance_accounting';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<style>
/* Specific styles for the Finance & Accounting page */
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
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cards-row text-center">
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-check-circle card-icon"></i>
                    <h4 class="card-title">Improved Accuracy</h4>
                    <p class="card-text text-muted">Our expert team ensures accurate and timely financial reporting, reducing the risk of costly errors.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-dollar-sign card-icon"></i>
                    <h4 class="card-title">Reduced Costs</h4>
                    <p class="card-text text-muted">Streamlining your financial operations helps lower labor, infrastructure, and training costs.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-lightbulb card-icon"></i>
                    <h4 class="card-title">Informed Decisions</h4>
                    <p class="card-text text-muted">With clear financial analysis and planning, you can make smarter decisions about your business's future.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
?>