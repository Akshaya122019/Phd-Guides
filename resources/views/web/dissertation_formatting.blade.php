@extends('web.app')
@push('meta-tags')
    <title>Dissertation Formatting Service</title>
    <meta name="description" content="Our experts deliver plagiarism-free dissertation formatting with structured layouts, proper citations, and accurate acknowledgment formatting.">
    <meta name="keywords" content="synopsis writing service, synopsis writing service in Bangalore, best synopsis writing service">
    <link rel="canonical" href="https://phdguides.com/synopsis_writing.php">

    <meta property="og:title" content="Dissertation Formatting Service"/>
    <meta property="og:description" content="Our experts deliver plagiarism-free dissertation formatting with structured layouts, proper citations, and accurate acknowledgment formatting."/>
    <meta property="og:url" content="https://phdguides.com/synopsis_writing.php"/>
    <meta property="og:image" content="https://phdguides.com/img/temp/common-img.webp"/>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Dissertation Formatting Service">
    <meta name="twitter:description" content="Our experts deliver plagiarism-free dissertation formatting with structured layouts, proper citations, and accurate acknowledgment formatting.">
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
		<i class="fas fa-graduation-cap me-3"></i>Dissertation Formating by PhD Guide
		</h1>
		<p class="subtitle">By Scholars, For Scholars</p>
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
				<input type="email" class="form-control m-3" name="email" placeholder="Email" required>
				<input type="text" class="form-control m-3" name="place" placeholder="Place" required>
                <input type="hidden" name="page" value="Dissertation Formatting">
				<input type="submit" class="form-control m-3" style="background-color:#09b87e;color:white;border:none;border-radius:5px;padding:12px;font-weight:600;cursor:pointer;" value="Submit Request">
			</form>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Main Start -->
<div class="container-xxl py-4">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="assistance lh-lg">
                        <p>Struggling with inconsistent headings, misaligned references, or rejected submissions due to formatting errors? You’re not alone. Formatting is often overlooked — yet it’s crucial for approval, readability, and professional presentation. A well-formatted dissertation reflects academic discipline and improves your chances of seamless acceptance.</p>
                        <p>
                            We specialise in formatting doctoral-level documents with precision. With our expert PhD assistance and attention to PhD dissertation format, we ensure your work meets university and publication standards — every time.
                        </p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- Main End -->

<!-- Dissertation Formatting Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="section-title bg-white text-center text-primary px-3">PhD Guides</p> -->
                <h2 class="fs-4">The Importance of Proper Dissertation Formatting in PhD</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm bg-light p-4">
                    <div class="card-body">
                    <p>
                    Your research content may be outstanding, but poor formatting can cost you credibility, marks, or even lead to rejections. Many scholars struggle with technical guidelines like spacing, font usage, and referencing style.
                    </p>

                    <p>
                   		Improper formatting not only affects readability but also reflects poorly on your academic rigour. Most universities follow strict rules  and failing to follow the required dissertation format can delay your approval process.
                    </p>
					<p>
						We help you align your document to your university’s expectations, whether it's UGC-approved, APA, or Chicago style. With our proven PhD guidance, your dissertation becomes clear, polished, and presentation-ready.
					</p>
                    </div>
					<h6>Trust us to format your work correctly, so reviewers focus on your research, not your layout.</h6>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Dissertation Formatting End -->

<!-- What include Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="fs-4">What Is Included in Our Dissertation Formatting Service?</h2>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="why-phd">
                        <p>Our dissertation formatting service includes everything you need to present a submission-ready document with professional consistency.</p>
                    </div>
                   
                </div>
                 <div class="col-md-12 content-card">
                    <p>What we format for you:</p>
                        <ul>
                            <li>Title page and university declaration</li>
                            <li>Table of contents, list of figures and tables</li>
                            <li>References and citation formatting (APA, MLA, Chicago, Harvard)</li>
                            <li>Appendices, margins, spacing, and font adjustments</li>
							<li>Page numbering, heading levels, layout corrections</li>
                        </ul>
                    </div>
                    <p class="pt-2">We ensure compliance with institutional requirements, UGC norms, or publisher guidelines. From structural alignment to precise formatting, we polish every aspect of your dissertation writing format.</p>
                    <p>
                        With our team, your PhD dissertation format becomes accurate, uniform, and visually organised, exactly as expected by your reviewers.
                    </p>
                
            </div>
    </div>
</div>
<!-- What include End -->

<!-- Acknowledgement Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="card shadow-lg rounded-4 p-5 bg-white mb-4">
        <div class="text-center mb-4">
            <i class="fas fa-feather-alt fa-3x text-primary"></i>
            <h2 class="fw-bold mt-3 fs-4">Acknowledgement Format for Dissertation</h2>
        </div>
        <p class="lead text-dark mb-4">
            The acknowledgement section gives credit to those who supported your research and it matters more than you think. A poorly written acknowledgement may appear insincere or inappropriate for academic submission.
        </p>
        <p class="fs-5">
            We help you craft a respectful, well-structured note using the correct acknowledgement format for dissertation requirements. Typical acknowledgements include mentors, advisors, funding bodies, institutional support, and family.
        </p>
        <blockquote class="blockquote border-start border-4 ps-4 my-4 text-muted">
            <p class="mb-0">
            With our assistance, you get access to templates and personalised writing support to ensure your tone remains formal, yet heartfelt.
            </p>
        </blockquote>
        <p class="fs-5 mb-3">
            We format your acknowledgements to align with the rest of your document  in style, spacing, and layout  keeping your work professional and sincere</span>.
        </p>
        <button type="button" class="btn btn-primary text-dark px-4 py-2" data-bs-toggle="modal" data-bs-target="#synopsisModal">
            <i class="fas fa-envelope-open-text me-2"></i>Click here to format your dissertation acknowledgement
        </button>          
    </div>
    </div>
</div>
<!-- Acknowledgement End -->
 <!-- Modal -->
<div class="modal fade" id="synopsisModal" tabindex="-1" aria-labelledby="synopsisModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-sm">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title text-white" id="synopsisModalLabel">Request Thesis Formatting Help</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="you@example.com">
          </div>
          <div class="mb-3">
            <label class="form-label">Contact:</label>
            <input type="tel" name="contact" class="form-control" placeholder="Your Contact">
          </div>
          <div class="mb-3">
            <label class="form-label">Document:</label>
            <input type="file" name="doc" class="form-control" placeholder="Submit Your Document">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit Request</button>
      </div>
    </div>
  </div>
</div>

<!-- Why Choose Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="fs-4">Why Choose Us for Dissertation Formatting?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="why-phd">
                        <p>Here’s why scholars across disciplines trust us for dissertation writing format support:</p>
                    </div>
                </div>
                 <div class="row g-4">
    
                    <div class="col-md-6 col-lg-4">
                    <div class="text-center card border-0 p-4 bg-light rounded-4 shadow-sm h-100">
                        <div class="text-center"><i class="fas fa-file-alt fa-2x text-info mb-3"></i></div>
                        <h6 class="fw-bold">Formatting experts with subject and style-specific experience</h6>
                    </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                    <div class="text-center card border-0 p-4 bg-light rounded-4 shadow-sm h-100">
                        <div class="text-center"><i class="fas fa-clock fa-2x text-primary mb-3"></i></div>
                        <h6 class="fw-bold">Quick turnaround with urgent support options available</h6>
                    </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                    <div class="text-center card border-0 p-4 bg-light rounded-4 shadow-sm h-100">
                        <div class="text-center"><i class="fas fa-university fa-2x text-primary mb-3"></i></div>
                        <h6 class="fw-bold">University-compliant formats: APA, MLA, UGC, Chicago</h6>
                    </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
						<div class="text-center card border-0 p-4 bg-light rounded-4 shadow-sm h-100">
                            <div class="text-center"><i class="fas fa-sync-alt fa-2x text-primary mb-3"></i></div>	
							<h6 class="fw-bold">Revision support until you’re fully satisfied</h6>
						</div>
                    </div>
					<div class="col-md-6 col-lg-4">
						<div class="text-center card border-0 p-4 bg-light rounded-4 shadow-sm h-100">
                            <div class="text-center"><i class="fas fa-ruler-combined fa-2x text-primary mb-3"></i></div>
							<h6 class="fw-bold"> Attention to detail — from margins to footnote alignment</h6>
						</div>
                    </div>

                </div> 
                
            </div>
            <div class="row py-3">
                <div class="col-md-12">
                    <div class="process-we">
                        With our comprehensive support, you receive formatting support that goes beyond templates, tailored to meet your institution’s exact guidelines.
                    </div>
                </div>
            </div>
        

    </div>
</div>
<!-- Why Choose End -->

<!-- Formatting Process Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Dissertation Formatting Process by the Guides</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow text-center h-100 p-4">
                <div class="step-icon"><i class="fas fa-file-upload fa-2x text-info mb-3"></i></div>
                <h6 class="fw-bold">Submit</h6>
                <div class="step-desc">Submit your dissertation draft and formatting guidelines</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow text-center h-100 p-4">
                <div class="step-icon"><i class="fas fa-pencil-ruler fa-2x text-info mb-3"></i></div>
                <h6 class="fw-bold">Format</h6>
                <div class="step-desc">We apply styles, spacing, citation formatting, and layout corrections</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow text-center h-100 p-4">
                <div class="step-icon"><i class="fas fa-search fa-2x text-info mb-3"></i></div>
                <h6 class="fw-bold">Review</h6>
                <div class="step-desc">A quality analyst checks for consistency and academic compliance</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow text-center h-100 p-4">
                    <div class="step-icon"><i class="fas fa-file-signature fa-2x text-info mb-3"></i></div>
                    <h6 class="fw-bold">Final Delivery</h6>
                    <div class="step-desc">We share a clean, submission-ready file with tracked versions</div>
                </div>
            </div>
        </div>
        <p class="final-note mt-5">Our experts ensure your work is aligned with your university’s approved format.</p>
        <div class="text-center mt-3">
            <a href="https://wa.me/917708108250" target="_blank" class="btn btn-success d-inline-flex align-items-center gap-2 px-4 py-2" style="font-size: 1rem; font-weight: 500;">
                <i class="fab fa-whatsapp"></i> Chat via WhatsApp
            </a>
        </div>

    </div>
</div>
<!-- Formatting Process End -->

<!-- Common Formatting Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Common Formatting Mistakes That We Fix</h2>
        </div>
        <p class="text-center text-muted mb-5">
            Even strong research can be rejected due to formatting oversights that affect the professionalism and approval of your work. Here’s what our team corrects:
        </p>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="d-flex card border-0 align-items-start p-3 bg-white rounded shadow-sm h-100">
                <i class="fas fa-font fa-xl text-primary me-3 mb-3"></i>
                <p class="mb-0">Inconsistent font sizes and heading hierarchy</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex card border-0 align-items-start p-3 bg-white rounded shadow-sm h-100">
                <i class="fas fa-table fa-xl text-primary me-3 mb-3"></i>
                <p class="mb-0">Misaligned tables, charts, and figure captions</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex card border-0 align-items-start p-3 bg-white rounded shadow-sm h-100">
                <i class="fas fa-ruler-combined fa-xl text-primary me-3 mb-3"></i>
                <p class="mb-0">Incorrect margin settings and line spacing</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex card border-0 align-items-start p-3 bg-white rounded shadow-sm h-100">
                <i class="fas fa-quote-right fa-xl text-primary me-3 mb-3"></i>
                <p class="mb-0">Unformatted references and citation discrepancies</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex card border-0 align-items-start p-3 bg-white rounded shadow-sm h-100">
                <i class="fas fa-file-alt fa-xl text-primary me-3 mb-3"></i>
                <p class="mb-0">Unnumbered pages or misplaced footnotes</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <p class="text-muted">
                Our formatting experts carefully review and fix each element to match institutional expectations.
                Every detail of your dissertation format is polished to academic perfection, so your submission stands out for its quality, not its errors.
            </p>
        </div>
    </div>
</div>
<!-- Common Formatting End -->
@endsection