<?php
    $page_title  = 'Customer Support - Job Flow';
    $currentPage = 'customer_support';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<style>
/* Specific styles for the Customer Support page */
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

<section class="section">
    <div class="container">
        <div class="cards-row text-center">
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-trophy card-icon"></i>
                    <h4 class="card-title">Exceptional Experiences</h4>
                    <p class="card-text text-muted">We ensure your customers receive the best possible experience, leading to higher satisfaction and positive reviews.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-heart card-icon"></i>
                    <h4 class="card-title">Increased Loyalty</h4>
                    <p class="card-text text-muted">Effective and personalized support helps you build strong relationships and increase customer retention.</p>
                </div>
            </div>
            <div class="card h-100 minimal-card">
                <div class="card-body">
                    <i class="fas fa-star card-icon"></i>
                    <h4 class="card-title">Enhanced Reputation</h4>
                    <p class="card-text text-muted">By providing reliable and timely assistance, you build a strong brand reputation and stand out from the competition.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
?>