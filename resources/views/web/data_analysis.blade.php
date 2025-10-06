@extends('web.app')
@push('meta-tags')
    <title>Data Analysis Services | 100% Custom Analysis Support</title>
    <meta name="description" content="We provide 100% custom data analysis using expert tools and precise statistical methods tailored to your unique research questions and goals.">
    <meta name="keywords" content="synopsis writing service, synopsis writing service in Bangalore, best synopsis writing service">
    <link rel="canonical" href="https://phdguides.com/synopsis_writing.php">

    <meta property="og:title" content="Data Analysis Services | 100% Custom Analysis Support"/>
    <meta property="og:description" content="We provide 100% custom data analysis using expert tools and precise statistical methods tailored to your unique research questions and goals."/>
    <meta property="og:url" content="https://phdguides.com/synopsis_writing.php"/>
    <meta property="og:image" content="https://phdguides.com/img/temp/common-img.webp"/>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Data Analysis Services | 100% Custom Analysis Support">
    <meta name="twitter:description" content="We provide 100% custom data analysis using expert tools and precise statistical methods tailored to your unique research questions and goals.">
    <meta name="twitter:image" content="https://phdguides.com/img/temp/common-img.webp">
@endpush
@section('content')
<!-- Banner Start -->
<div class="hero" style="height:auto">
	<div class="bg-overlay"></div>

	<!-- Enhanced Background Shapes -->
	<div class="shape shape1"></div>
	<div class="shape shape2"></div>
	<div class="shape shape3"></div>
	<div class="shape shape4"></div>
	<div class="shape shape5"></div>
	<div class="shape shape6"></div>

	<!-- Left Panel -->
	<div class="left-panel">
		<div class="logo-container">
			<div class="logo-bg"></div>
			<div class="logo-inner"></div>
		</div>
	
		<div>
			<i class="fas fa-book floating-icon icon1"></i>
			<i class="fas fa-microscope floating-icon icon2"></i>
			<i class="fas fa-award floating-icon icon3"></i>
		</div>
		
		<h1 class="main-title" style="font-size:3rem">
		<i class="fas fa-graduation-cap me-3"></i>Data Analysis by PhD Guide
		</h1>
		<p class="subtitle">Where Real Researchers Guide Real Research</p>
	</div>

	<!-- Right Panel -->
	<div class="right-panel p-5">
		<div class="p-3 pt-3" style="display:block">
			<h5 class="text-center text-success">Get Started</h5>
			@if(session('success'))
                <div style="color: green;">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div style="color: red;">{{ session('error') }}</div>
            @endif
			<!-- Single Form -->
			<form action="{{ route('form.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
				<input type="text" class="form-control m-3" name="name" placeholder="Name" required>
				<input type="text" class="form-control m-3" name="contact" placeholder="Contact" required>
				<select class="form-select m-3" name="service">
                    <option selected disabled>Choose your Service</option>
                    <option value="Synopsis format">Qualitative data analysis</option>
                    <option value="Thesis Format">Quantitative data analysis</option>
                </select>
                <input type="text" class="form-control m-3" name="domain" placeholder="Domain" required>
				<input type="email" class="form-control m-3" name="email" placeholder="Email" required>
				<input type="text" class="form-control m-3" name="place" placeholder="Place" required>
                <input type="hidden" name="page" value="Data Analysis">
				<input type="submit" class="form-control m-3" style="background-color:#09b87e;color:white;border:none;border-radius:5px;padding:12px;font-weight:600;cursor:pointer;" value="Submit Request">
			</form>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Main Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="mb-3 fs-4">Data Analysis in PhD Research</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="assistance lh-lg">
                        <p>Effective <b>data analysis in research</b> is the heart of every impactful PhD study. It transforms raw information into meaningful insights, guiding scholars from initial observations to groundbreaking conclusions.</p>
						<p>With the right <b>mentorship</b>, you can confidently interpret complex datasets and ensure your findings are robust, reliable, and relevant. Expert <b>PhD Guidance</b> ensures your data interpretation strengthens your arguments, elevates your research quality, and significantly contributes to successful doctoral outcomes..</p>

                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- Main End -->

<!-- Why Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Why PhD Scholars Need Expert Data Analysis Support</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card border-0 shadow-sm bg-light p-4">
          <div class="card-body fs-6 lh-lg">
            <p>Analysing complex data is one of the most daunting parts of PhD research. Scholars often struggle with selecting appropriate analytical techniques, interpreting statistical outputs accurately, and managing sophisticated software.</p>
			<p>Without professional <b>doctoral assistance</b>, these challenges can lead to costly errors, delays, or even weakened research credibility. Expert support from skilled  guides simplifies the analytical process, saving valuable time and ensuring methodological precision. With targeted counselling, scholars overcome these obstacles, gaining clarity, confidence, and reliable results.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Why End -->

<!-- Comprehensive Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="section-title bg-white text-center text-primary px-3">Mentoring</p> -->
                <h2 class="mb-3 fs-4">Comprehensive PhD Data Analysis Services We Offer</h2>
        </div>
        <div class="row">
            <div class="col-md-12 lh-lg">
                <p>Our dedicated PhD assistance offers end-to-end support covering a broad range of analytical methods tailored to your research objectives:</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-calculator text-success fa-2x mb-3"></i>
                    <h5 class="card-title fw-semibold">Descriptive & Inferential Statistics</h5>
                    <p class="card-text">Clearly present your data, uncover patterns, and draw meaningful conclusions.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-vial text-success fa-2x mb-3"></i>
                    <h5 class="card-title fw-semibold">Hypothesis Testing</h5>
                    <p class="card-text">Validate your research hypotheses with precision and academic rigour.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-search text-success fa-2x mb-3"></i>
                    <h5 class="card-title fw-semibold">Thematic & Content Analysis</h5>
                    <p class="card-text">Reveal key themes and insights from qualitative data through systematic coding.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-project-diagram text-success fa-2x mb-3"></i>
                    <h5 class="card-title fw-semibold">Regression & Correlation Analysis</h5>
                    <p class="card-text">Identify and quantify relationships among variables, strengthening your research narrative</p>
                </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <i class="fas fa-network-wired text-success fa-2x mb-3"></i>
                    <h5 class="card-title fw-semibold">Structural Equation Modeling</h5>
                    <p class="card-text">Test complex theoretical models to demonstrate robust causal relationships.</p>
                </div>
                </div>
            </div>
           <div class="text-center mt-3">
			<p>No matter the nature of your study qualitative, quantitative, or mixed we ensure your data tells the most compelling story possible.</p>
        </div>
        </div>
    </div>
</div>
<!-- Comprehensive End -->

<!-- Choose Start -->
<div class="container-xxl py-4">
	<div class="container">
		<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <!-- Section Header -->
                <div class="text-center mb-5">
                    <div class="bg-white rounded-4 shadow-lg p-5">
                        <div class="mb-4">
                              <h2 class="fw-bold fs-4 text-dark mb-0">Choose Your Type of Data Analysis</h2>
                        </div>
                        
                        <!-- Buttons Section -->
                        <div class="row g-4 mt-3">
                            <!-- Qualitative Data Analysis Button -->
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm h-100 bg-info bg-gradient position-relative">
                                    <div class="card-body p-4 d-flex align-items-center justify-content-center">
                                        <a href="{{route('qualitative_data_analysis')}}" target="_blank_" class="btn btn-light btn-lg w-100 py-4 fw-bold border-0 shadow-sm position-relative">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fas fa-thumbtack text-warning me-3 fs-5"></i>
                                                <div>
                                                    <div class="text-info fs-5 fw-bold">Qualitative Data Analysis</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                            
                            <!-- Quantitative Data Analysis Button -->
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm h-100 bg-success bg-gradient position-relative">
                                    <div class="card-body p-4 d-flex align-items-center justify-content-center">
                                        <a href="{{route('quantitative_data_analysis')}}" target="_blank_" class="btn btn-light btn-lg w-100 py-4 fw-bold border-0 shadow-sm position-relative">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <i class="fas fa-thumbtack text-warning me-3 fs-5"></i>
                                                <div>
                                                    <div class="text-success fs-5 fw-bold">Quantitative Data Analysis</div>
                                                </div>
                                            </div>
                                        </a>
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
</div>
<!-- Choose End -->

<!-- How Our Expers Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">How Our Experts Assist You with Research Data Analysis</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm p-4 rounded border-start border-5 border-success ps-3">
                <p class="highlight-text lh-lg">
                    We understand that every PhD research journey is unique. That’s why our team of experienced <b>PhD guides</b> provides personalised consultations, understanding your objectives, and tailoring our support precisely to your needs. We collaborate closely with you in real-time, guiding you through each analytical step using specialised software like SPSS, R, NVivo, and more. Our personalised support and focused doctoral assistance mean you're never left guessing. With expert help, you’ll turn complex data into clear, powerful findings that strengthen your research
                </p>
                </div>
            </div>
        </div>

		 <div class="container mt-5">
          <div class="p-4 p-md-5 bg-light rounded-4 shadow-sm">
            <div class="row align-items-center">
            <div class="col-md-8">
              <h5 class="fw-bold text-dark mb-2"> Don’t know what to do? Having doubts?</h5>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
              <a href="tel:+917708108250" class="btn btn-secondary btn-hover">
              <i class="fas fa-phone me-2 "></i>Get a consultation from our team 
              </a>
            </div>
            </div>
          </div>
		</div>

        
    </div>
</div>
<!-- How Our Experts End -->

<!-- Tools Start -->
<div class="container-xxl py-4">
	<div class="container">
		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<h2 class="mb-3 fs-4">Tools and Techniques We Use for Accurate Results</h2>
        </div>

		<div class="row py-4">
			<div class="col-md-12">
				Our team leverages the industry’s most advanced analytical tools and proven techniques to guarantee accuracy, transparency, and reliability in your data analysis. We utilise:
			</div>
		</div>
		<div class="container">
			    <div class="step">
					<b>SPSS</b> for sophisticated statistical tests and clear data reporting.
				</div>

				<div class="step">
					<b>NVivo</b> to systematically organise and analyse qualitative data.
				</div>

				<div class="step">
					<b>STATA</b> for precise econometric analysis and statistical modelling.
				</div>

				<div class="step">
					<b>AMOS</b> for advanced structural equation modelling, validating complex research frameworks.
				</div>
				<div class="step">
					<b>Python</b> for custom scripts and flexible, in-depth data exploration.
				</div>
        		<div class="step">
					<b>Excel</b> for accessible, practical data management and visualisation.
				</div>
		</div>
		<div class="row py-4">
			<div class="col-md-12">
				<p>
					We ensure that every step of your analysis is meticulously documented, clear, and reproducible, giving your research unquestionable credibility.
				</p>
			</div>
		</div>

	</div>
</div>
<!-- Tools End -->

<!--  Steps Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Step-by-Step Process: From Raw Data to Insightful Results</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                We simplify your analytical journey with a straightforward process designed to deliver exceptional clarity and reliable results:
            </div>
        </div>
        <div class="row gy-4 py-3">
            <!-- Step 1 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    1
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Share Your Data or Research Goals</h5>
                    <p class="mb-0 text-muted"> Provide us with your raw data or outline your research objectives clearly.</p>
                </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    2
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Receive a Customised Analysis Plan</h5>
                    <p class="mb-0 text-muted">Our experts prepare a detailed strategy, choosing the ideal statistical or thematic methods suited to your research.</p>
                </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    3
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Analysis and Interpretation</h5>
                    <p class="mb-0 text-muted">We meticulously conduct the analysis, interpreting the findings to clearly align with your research questions.</p>
                </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    4
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Expert Review and Refinements</h5>
                    <p class="mb-0 text-muted">You collaborate directly with your assigned expert, reviewing results and making refinements through revisions and interactive Q&A sessions.</p>
                </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                This personalised approach ensures you receive clear, actionable insights tailored specifically for your doctoral research.
            </div>
        </div>


    </div>
</div>
<!--  Steps End -->

<!-- Why Choose Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <!-- <p class="section-title bg-white text-center text-primary px-3">UGC Approved Journals</p> -->
            <h2 class="mb-3 fs-4">Why Choose PhD Guides for Data Analysis Help?</h2>
        </div>
        <p class="text-muted mb-5">
            When it comes to data analysis support, choosing experienced PhD guides makes all the difference. Here’s why scholars trust us:
        </p>
        <div class="row g-4">

            <!-- Item 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="bg-white rounded-4 shadow p-4 h-100 border-start border-4 border-danger">
                <div class="d-flex align-items-center mb-3">
                    <div class="text-danger me-3">
                    <i class="fas fa-medal fa-2x"></i>
                    </div>
                    <h5 class="mb-0">Expertise & Experience</h5>
                </div>
                <p class="text-muted mb-0">
                    Our analysts hold doctoral degrees and deeply understand the challenges you face.
                </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="bg-white rounded-4 shadow p-4 h-100 border-start border-4 border-warning">
                <div class="d-flex align-items-center mb-3">
                    <div class="text-warning me-3">
                    <i class="fas fa-trophy fa-2x"></i>
                    </div>
                    <h5 class="mb-0">Success Stories</h5>
                </div>
                <p class="text-muted mb-0">
                    We have helped hundreds of PhD candidates successfully defend their research.
                </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="bg-white rounded-4 shadow p-4 h-100 border-start border-4 border-info">
                <div class="d-flex align-items-center mb-3">
                    <div class="text-info me-3">
                    <i class="fas fa-user-cog fa-2x"></i>
                    </div>
                    <h5 class="mb-0">Tailored Doctoral Assistance</h5>
                </div>
                <p class="text-muted mb-0">
                    We focus on your specific research needs, ensuring fully customised analytical support.
                </p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="bg-white rounded-4 shadow p-4 h-100 border-start border-4 border-secondary">
                <div class="d-flex align-items-center mb-3">
                    <div class="text-secondary me-3">
                    <i class="fas fa-lock fa-2x"></i>
                    </div>
                    <h5 class="mb-0">Guaranteed Confidentiality</h5>
                </div>
                <p class="text-muted mb-0">
                    Your data, research ideas, and personal information are always safe with us.
                </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Why Choose End -->

<!-- Benifit Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="section-title bg-white text-center text-primary px-3">Dissertation writing service</p> -->
                <h2 class="mb-3 fs-4">Who Can Benefit from Our Data Analysis Services?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="assistance lh-lg">
                        <p>Our specialised doctoral assistance supports PhD candidates across diverse academic disciplines. Whether you're pursuing research in:</p>
                    </div>
                </div>
            </div>

		<div class="row">
			<div class="col-md-12 ser-list">
				<ul class="lh-lg list-unstyled">
				<li>Engineering and Technology</li>
				<li>Management and Business Studies</li>
				<li>Social Sciences and Humanities</li>
				<li>Life Sciences and Healthcare</li>
                <li>Education and Psychology</li>
				</ul>
			</div>
		</div>
        <div class="row">
            <div class="col-md-12">
                <p>We offer personalised PhD Guidance designed to precisely match your field-specific research standards, methodologies, and analytical expectations. Our service ensures every doctoral scholar receives the targeted support they need to achieve research excellence.</p>
            </div>
        </div>


        
    </div>
</div>
<!-- Benifit End -->

<!-- What you'll Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="section-title bg-white text-center text-primary px-3">Qualitative Methodology</p> -->
                <h2 class="mb-4 fs-4">What You’ll Receive with Our Data Analysis Support</h2>
        </div>
		    <div class="mb-4 px-lg-3">
				<p class="lh-lg">
					We don't just deliver results, we provide comprehensive support to elevate your entire research experience. Here’s exactly what you can expect:
				</p>
                <p class="lh-lg">
					We deliver detailed, professionally structured analysis reports clearly aligned with your research objectives, ensuring clarity, precision, and complete academic rigour.
				</p>
			</div>

			<div class="row g-4">
			<!-- Purposive Sampling Card -->
			<div class="col-md-4">
				<div class="card h-100 border-0 shadow-sm rounded-4">
				<div class="card-body d-flex align-items-start">
					<div>
					<h5 class="fw-bold mb-1">Charts, tables, and visualisations</h5>
					<p class="text-muted mb-0">Clearly present your findings in an impactful, easy-to-understand manner.</p>
					</div>
				</div>
				</div>
			</div>

			<!-- Snowball Sampling Card -->
			<div class="col-md-4">
				<div class="card h-100 border-0 shadow-sm rounded-4">
				<div class="card-body d-flex align-items-start">
					<div>
					<h5 class="fw-bold mb-1">Result interpretation tailored to your research questions</h5>
					<p class="text-muted mb-0">Each analysis is contextualised specifically to address your research objectives, strengthening your thesis arguments.</p>
					</div>
				</div>
				</div>
			</div>
            <div class="col-md-4">
				<div class="card h-100 border-0 shadow-sm rounded-4">
				<div class="card-body d-flex align-items-start">
					<div>
					<h5 class="fw-bold mb-1">Citation-ready content</h5>
					<p class="text-muted mb-0">All analysis outputs are structured and formatted for seamless integration into your thesis, dissertation, or academic publication, simplifying your writing process and enhancing your credibility.</p>
					</div>
				</div>
				</div>
			</div>
			</div>

			<div class="mt-5 px-lg-3 lh-lg text-center">
                <p class="text-muted">
                   With our support, you’ll receive insights that not only meet but exceed your academic expectations.
                </p>
			</div>
        
        
    </div>
</div>
<!-- What you'll End -->

<!-- Form Start -->
<div class="container py-4">
    <div class="row align-items-center justify-content-center">
      <!-- Left: Content -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold mb-3 text-success fs-1">Get Assisted by the real scholars</h2>
      </div>

      <!-- Right: Form -->
      <div class="col-md-6">
        <div class="card border-0 shadow-sm p-4" id="ver-form">
          @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif
          <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label text-dark"><i class="fas fa-user me-2 text-primary"></i>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label text-dark"><i class="fas fa-envelope me-2 text-primary"></i>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
			<div class="mb-3">
              <label for="contact" class="form-label text-dark"><i class="fas fa-phone me-2  text-primary"></i>Contact</label>
              <input type="text" name="contact" class="form-control" placeholder="Enter your Contact">
            </div>
            <div class="mb-3">
              <label for="place" class="form-label text-dark"><i class="fas fa-globe me-2 text-primary"></i>Place</label>
              <input type="text" name="place" class="form-control" placeholder="Enter your Place">
            </div>
            <input type="hidden" name="page" value="Data Analysis">
            <button type="submit" class="btn btn-success w-100 mt-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- Form End -->
@endsection