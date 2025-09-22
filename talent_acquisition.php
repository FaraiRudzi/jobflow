<?php
    $page_title  = 'Talent Acquisition - Job Flow';
    $currentPage = 'talent_acquisition';
    require_once 'config.php';
    require_once 'includes/header.php';
?>

<style>
/* Consolidated and Corrected Styles for the Talent Acquisition page */
.section {
    padding: 60px 0;
}

/* Benefit Cards - Improved Minimalist Style */
/* Styling for the three cards in the "Access Top Talent" section */
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

/* Service and Industry Grids */
.service-list-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
.service-item, .industry-item {
    text-align: center;
    padding: 20px;
    border-radius: 5px;
    background-color: var(--clr-primary-light);
}
.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

/* Industry Images */
.industry-item img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 10px;
}

/* New Flow Chart Layout CSS with Alternating Colors and Oval Shape */
.flow-chart-container {
    position: relative;
    height: 350px;
    width: 100%;
    margin: 0 auto;
}

.flow-chart-item {
    position: absolute;
    width: 250px;
    padding: 10px;
    z-index: 10;
}

.flow-chart-box {
    border: 1px solid transparent; /* Border is handled by the background now */
    border-radius: 9999px; /* This creates the oval/pill shape */
    padding: 20px;
    background-color: var(--clr-primary);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
    color: var(--clr-white); /* Text color for readability */
}

/* Alternating box colors */
.flow-chart-item:nth-child(odd) .flow-chart-box {
    background-color: var(--clr-primary);
}
.flow-chart-item:nth-child(even) .flow-chart-box {
    background-color: var(--clr-accent);
}

.flow-chart-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: var(--clr-white);
}

.flow-chart-box p {
    font-size: 0.9rem;
    line-height: 1.4;
    color: var(--clr-white);
}

/* Number styles */
.flow-chart-number {
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: var(--clr-white);
    color: var(--clr-primary);
    font-size: 1.5rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 11;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Media query for mobile responsiveness */
@media (max-width: 767px) {
    .flow-chart-container {
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .flow-chart-item {
        position: static;
        width: 90%;
        margin-bottom: 20px;
    }
    .flow-chart-box {
        border-radius: 5px; /* Revert to a more standard box on mobile */
    }
    .flow-chart-number {
        position: relative;
        top: auto;
        left: auto;
        transform: none;
        margin-bottom: 10px;
    }
}
</style>

<section class="section service-detail-section">
    <section class="page-header">
    <div class="container">
        <h2 class="section-title text-center">Find the Right Talent to Drive Your Success</h2>
        <p class="lead mb-5 mx-auto text-center" style="max-width: 700px;">
            Our expert Talent Acquisition service provides comprehensive recruitment and staffing solutions, helping you build a stronger team and a more successful business.
        </p>
</section>

<section class="section">
    <div class="cards-row text-center">
        <div class="card h-100 minimal-card">
            <div class="card-body">
                <i class="fas fa-users-cog card-icon"></i>
                <h4 class="card-title">Access Top Talent</h4>
                <p class="card-text text-muted">
                    Tap into our vast network of qualified candidates to access the best professionals in your industry.
                </p>
            </div>
        </div>

        <div class="card h-100 minimal-card">
            <div class="card-body">
                <i class="fas fa-rocket card-icon"></i>
                <h4 class="card-title">Streamlined Process</h4>
                <p class="card-text text-muted">
                    Our efficient recruitment process saves you valuable time and resources, allowing you to focus on your core business.
                </p>
            </div>
        </div>

        <div class="card h-100 minimal-card">
            <div class="card-body">
                <i class="fas fa-dollar-sign card-icon"></i>
                <h4 class="card-title">Cost-Effective Solutions</h4>
                <p class="card-text text-muted">
                    We provide tailored and affordable talent acquisition services that deliver exceptional value and meet your business needs.
                </p>
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
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="flow-chart-container">
                    
                    <div class="flow-chart-item" style="top: 0; left: 10%;">
                        <div class="flow-chart-box">
                            <span class="flow-chart-number">1</span>
                            <h4 class="flow-chart-title">Understanding Your Business Needs</h4>
                            <p>We work closely with you to gain a deep understanding of your business, culture, and specific talent requirements.</p>
                        </div>
                    </div>

                    <div class="flow-chart-item" style="top: 150px; left: 25%;">
                        <div class="flow-chart-box">
                            <span class="flow-chart-number">2</span>
                            <h4 class="flow-chart-title">Sourcing Top Talent</h4>
                            <p>We utilize a variety of channels, including job boards, social media, and our professional networks, to source the best candidates.</p>
                        </div>
                    </div>

                    <div class="flow-chart-item" style="top: 0; left: 45%;">
                        <div class="flow-chart-box">
                            <span class="flow-chart-number">3</span>
                            <h4 class="flow-chart-title">Screening and Shortlisting</h4>
                            <p>We meticulously screen and shortlist candidates based on your requirements, presenting only the most qualified individuals.</p>
                        </div>
                    </div>

                    <div class="flow-chart-item" style="top: 150px; left: 60%;">
                        <div class="flow-chart-box">
                            <span class="flow-chart-number">4</span>
                            <h4 class="flow-chart-title">Conducting Interviews</h4>
                            <p>We assist with conducting interviews, providing valuable insights and recommendations to help you make an informed hiring decision.</p>
                        </div>
                    </div>

                    <div class="flow-chart-item" style="top: 0; left: 75%;">
                        <div class="flow-chart-box">
                            <span class="flow-chart-number">5</span>
                            <h4 class="flow-chart-title">Onboarding New Hires</h4>
                            <p>We ensure a smooth onboarding process, providing support and guidance as new hires integrate into your organization.</p>
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
                        <img src="images/technology.png" alt="Technology Industry" class="industry-image">
                        <h6>Technology</h6>
                        <p class="text-muted small">Software development, data science, and IT.</p>
                    </div>
                    <div class="industry-item">
                        <img src="images/healthcare.jpg" alt="Healthcare Industry" class="industry-image">
                        <h6>Healthcare</h6>
                        <p class="text-muted small">Hospitals, medical groups, and healthcare tech.</p>
                    </div>
                    <div class="industry-item">
                        <img src="images/finance.jpg" alt="Finance Industry" class="industry-image">
                        <h6>Finance</h6>
                        <p class="text-muted small">Banking, investment management, and financial services.</p>
                    </div>
                    <div class="industry-item">
                        <img src="images/manufacturing.webp" alt="Manufacturing Industry" class="industry-image">
                        <h6>Manufacturing</h6>
                        <p class="text-muted small">Production, engineering, and supply chain management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    require_once 'includes/footer.php';
?>