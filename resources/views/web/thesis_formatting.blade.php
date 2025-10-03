@extends('web.app')
@push('meta-tags')
    <title>PhD Synopsis Formatting Service by Experts</title>
    <meta name="description" content="Receive expert formatting for your PhD synopsis, tailored to your academic domain and compliant with institutional guidelines for seamless submission.">
    <meta name="keywords" content="synopsis writing service, synopsis writing service in Bangalore, best synopsis writing service">
    <link rel="canonical" href="https://phdguides.com/synopsis_writing.php">

    <meta property="og:title" content="PhD Synopsis Formatting Service by Experts"/>
    <meta property="og:description" content="Receive expert formatting for your PhD synopsis, tailored to your academic domain and compliant with institutional guidelines for seamless submission."/>
    <meta property="og:url" content="https://phdguides.com/synopsis_writing.php"/>
    <meta property="og:image" content="https://phdguides.com/img/temp/common-img.webp"/>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="PhD Synopsis Formatting Service by Experts">
    <meta name="twitter:description" content="Receive expert formatting for your PhD synopsis, tailored to your academic domain and compliant with institutional guidelines for seamless submission.">
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
		<i class="fas fa-graduation-cap me-3"></i>Thesis Formating by PhD Guides
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
                <input type="hidden" name="page" value="Thesis Formatting">
				<input type="submit" class="form-control m-3" style="background-color:#09b87e;color:white;border:none;border-radius:5px;padding:12px;font-weight:600;cursor:pointer;" value="Submit Request">
			</form>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Main Start -->
<div class="container-xxl py-5">
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="assistance">
                        <p>Thesis synopsis formatting involves presenting your research proposal in a structured, concise, and academically approved layout. It is submitted before the full thesis and follows a strict institutional format.</p>
                        <p>
                            Unlike a complete thesis, which includes detailed chapters, a synopsis focuses on objectives, scope, and proposed methodology. Elements like font size, headings, referencing, and layout are formatted precisely.
                        </p>
                        <p>
                            Applying the correct thesis writing format to your synopsis ensures clarity and compliance, improving your chances of approval.
                        </p>
                        <p>
                            Our formatting experts help structure your synopsis exactly as per your university’s requirements, saving you time while meeting every academic standard.
                        </p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- Main End -->

<!-- Thesis Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h2 class="fs-4"> Why Proper Thesis Synopsis Formatting is Important</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card border-0 shadow-sm bg-light p-4">
          <div class="card-body fs-6">
            <p>Struggling to get your synopsis accepted by your review committee? Minor formatting issues may be holding you back, and they’re more common than you think.</p>
            <p>Universities often reject or return synopses that don’t align with formatting rules. These may include incorrect margins, font inconsistencies, citation errors, or spacing issues.</p>
            <p>That’s where our PhD assistance comes in. At PhD Guides we ensure your synopsis is well-formatted, easy to evaluate, and professionally presented—giving your research a stronger start.</p>
            <p>Proper formatting communicates academic maturity and attention to detail. It makes your synopsis easier to review and helps reduce unnecessary revisions.</p>
            <p>With our formatting support, you’ll meet university criteria confidently. We align your thesis writing format with institutional expectations so that your proposal is not only accepted—but respected.</p>

            <div class="text-center mt-4">
              <button type="button" class="btn btn-primary text-dark px-4 py-2" data-bs-toggle="modal" data-bs-target="#synopsisModal">
                <i class="fas fa-envelope-open-text me-2"></i>Want to format your Thesis Form
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="synopsisModal" tabindex="-1" aria-labelledby="synopsisModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-sm">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title text-white" id="synopsisModalLabel">Request Thesis Formatting Help</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif
          <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="you@example.com">
          </div>
          <div class="mb-3">
            <label class="form-label">University/Topic:</label>
            <input type="text" class="form-control" name="research_area" placeholder="Your Topic or Institution">
          </div>
          <input type="hidden" name="page" value="Thesis Formatting">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit Request</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Thesis End -->

<!-- Complete formatting Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="fs-4"> Our Complete Thesis Formatting Coverage</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="why-phd pt-3">
                    <p>At PhD Guides we offer full-scope formatting that meets the requirements of your university, journal, or submission portal ensuring every detail matches the required thesis format.</p>
                </div>
            </div>
        </div>
        
        <div class="container-fluid py-5">
            <p>Here’s what we formatted for you:</p>
            <div class="row justify-content-center g-4">
                <!-- Row 1: 3 Cards -->
                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-book"></i>
                    <h5 class="mt-2">Title page, declaration, and abstract formatting</h5>
                    <p>Includes accurate alignment, font consistency, and title placement.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-text-height"></i>
                    <h5 class="mt-2">Chapter headings, fonts, line spacing</h5>
                    <p>Standardised text formatting that ensures professional readability.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-quote-right"></i>
                    <h5 class="mt-2">Referencing: APA, MLA, Harvard, IEEE</h5>
                    <p>Accurate in-text citations and reference lists formatted to match chosen style.</p>
                </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4 g-4">
                <!-- Row 2: 2 Cards Centered -->
                <div class="col-md-6 col-lg-6">
                <div class="icon-box text-center">
                    <i class="fas fa-list-ul"></i>
                    <h5 class="mt-2">Table of contents, list of figures/tables</h5>
                    <p>Auto-linked entries with accurate page numbers and styling.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-6">
					<div class="icon-box text-center">
						<i class="fas fa-ruler-combined"></i>
						<h5 class="mt-2">Page numbering, margins, footnotes</h5>
						<p>Consistent formatting across all pages, including headers and footers.</p>
					</div>
                </div>



            </div>
        </div>

		<div class="row">
			<div class="text-center mt-5">
                <p class="lead mb-3">
                    Whether you're using APA, IEEE, or MLA, our formatting service ensures your thesis writing format meets every requirement from the title page to the last reference.
                </p>
            <a href="tel:+917708108250" class="btn btn-success btn-hover">
                <i class="fas fa-phone me-2 "></i> Contact with the expert
            </a>
            </div>
		</div>


    </div>
</div>
<!-- Complete formatting End -->

<!-- Acknowledgement Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="card shadow-lg rounded-4 p-5 bg-white mb-4">
        <div class="text-center mb-4">
            <i class="fas fa-feather-alt fa-3x text-primary"></i>
            <h2 class="fw-bold mt-3 fs-4">Personalised Acknowledgement Format for Your Thesis</h2>
        </div>
        <p class="lead text-dark mb-4">
            The acknowledgement section is where you thank those who contributed to your research, but tone, structure, and word count matter.
        </p>
        <p class="fs-5">
            We help you write a respectful, academically sensitive note that acknowledges supervisors, institutions, and contributors. Our approach balances gratitude with formality, ensuring it reflects academic expectations.
        </p>
        <blockquote class="blockquote border-start border-4 ps-4 my-4 text-muted">
            <p class="mb-0">
            “At PhD Guides, our experts ensure your acknowledgement is thoughtfully structured, properly formatted, and aligned with your university’s specific requirements.”
            </p>
        </blockquote>
        <p class="fs-5 mb-0">
            We align the content and layout with your thesis writing format, adding a <span class="text-primary fw-semibold">professional touch to a personal message</span>.
        </p>
        <button type="button" class="btn btn-primary text-dark px-4 py-2" data-bs-toggle="modal" data-bs-target="#acknowledgeModal">
            <i class="fas fa-envelope-open-text me-2"></i>Click to format your thesis acknowledgement
        </button>        
        </div>
    </div>
</div>
<!-- Acknowledgement End -->

<!-- Modal -->
<div class="modal fade" id="acknowledgeModal" tabindex="-1" aria-labelledby="acknowledgeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-sm">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title text-white" id="acknowledgeModalLabel">Request Thesis Formatting Help</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{-- Success / Error Flash Messages --}}
        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif

        <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Contact:</label>
            <input type="tel" name="contact" class="form-control" placeholder="Your Contact">
          </div>
          <div class="mb-3">
            <label class="form-label">Document:</label>
            <input type="file" name="document" class="form-control">
          </div>
          <input type="hidden" name="page" value="Thesis Formatting">

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit Request</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- How we align Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="mb-3 fs-4">How We Align Your Thesis with Institutional Formatting Guidelines</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="assistance">
                        <p>Every institution, from UGC to global universities, provides unique formatting guidelines. We’re trained to follow each one.</p>
                        <p>
                            Our PhD Guides formatting team ensures that your thesis aligns precisely with these requirements. This includes applying correct font styles, referencing norms, margin settings, and cover page formats.
                        </p>
                        <p>
                            Whether you’re formatting for a PhD thesis submission or journal entry, we ensure 100% compliance. Using our PhD guidance, we review your content and adapt it to meet your institution’s exact specifications.
                        </p>
                        <p>
                            We format your document according to the approved PhD thesis format leaving no room for rejections due to formatting.
                        </p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- How we align End -->

<!-- Process Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="fs-4">Our Step-by-Step Thesis Formatting Process</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
               Here’s how our thesis formatting service works:
            </div>
        </div>
        <div class="row gy-4 py-3">
            <!-- Step 1 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-info text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    1
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Document Review</h5>
                    <p class="mb-0 text-muted">We assess your current draft and formatting checklist.</p>
                </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-info text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    2
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Formatting and Style Check</h5>
                    <p class="mb-0 text-muted">We apply the required font, margins, headings, and layout.</p>
                </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-info text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    3
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Reference and Layout Consistency</h5>
                    <p class="mb-0 text-muted">We check every page for uniform styling, spacing, and citations.</p>
                </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-info text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    4
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Final Proofreading and Delivery</h5>
                    <p class="mb-0 text-muted">We proofread and send the final file in a clean, submission-ready format. Each step ensures your thesis is not only presentable but approved faster.</p>
                </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- Process End -->

<!-- Real Sucess Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="mb-3 fs-4">Real Success Stories from Our PhD Clients</h2>
            </div>
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-6">
                <div class="testimonial-card p-4 shadow-sm rounded bg-white h-100">
                <div class="mb-3 text-primary fs-3">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="mb-3">“I was struggling to fix formatting issues before my deadline. PhD Guides reformatted everything perfectly and my submission was approved immediately.”</p>
                <h6 class="fw-semibold mb-0">– Dr Meera Nair</h6>
                <small class="text-muted">Public Policy</small>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-6">
                <div class="testimonial-card p-4 shadow-sm rounded bg-white h-100">
                <div class="mb-3 text-primary fs-3">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="mb-3">“Their formatting support saved me from a second rejection. Every page met my university’s standards.”</p>
                <h6 class="fw-semibold mb-0">– Prakash B</h6>
                <small class="text-muted">Computer Science</small>
                </div>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-md-12">
                <p>
                    We’ve helped 1,000+ scholars meet formatting expectations across disciplines. Our before-and-after samples show the difference formatting makes.
                </p>
                <p class="alert alert-success">
                    Let us handle your formatting, so you can focus on your research.
                </p>
            </div>
        </div>
        
    </div>
</div>
<!-- Real Sucess End -->

@endsection