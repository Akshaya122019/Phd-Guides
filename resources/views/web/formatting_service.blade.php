@extends('web.app')
@push('meta-tags')
    <title>Academic Formatting Services for PhD & Journal Papers</title>
    <meta name="description" content=""Professional formatting help to ensure your document meets academic or journal guidelines with accuracy, consistency, and Publication-Ready Format">
    <meta name="keywords" content="Dissertation writing service, Dissertation writing service in Bangalore, best dissertation service">
    <link rel="canonical" href="https://phdguides.com/dissertation.php">

    <meta property="og:title" content="Academic Formatting Services for PhD & Journal Papers"/>
    <meta property="og:description" content=""Professional formatting help to ensure your document meets academic or journal guidelines with accuracy, consistency, and Publication-Ready Format"/>
    <meta property="og:url" content="https://phdguides.com/dissertation.php"/>
    <meta property="og:image" content="https://phdguides.com/img/temp/common-img.webp"/>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Academic Formatting Services for PhD & Journal Papers">
    <meta name="twitter:description" content=""Professional formatting help to ensure your document meets academic or journal guidelines with accuracy, consistency, and Publication-Ready Format">
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
		<i class="fas fa-graduation-cap me-3"></i>Formatting Service by PhD Guide
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
				<select class="form-select m-3" name="service">
                    <option selected disabled>Choose your Service</option>
                    <option value="Synopsis format">Synopsis format</option>
                    <option value="Thesis Format">Thesis Format</option>
                    <option value="Dissertation Format">Dissertation Format</option>
                </select>
				<input type="email" class="form-control m-3" name="email" placeholder="Email" required>
				<input type="text" class="form-control m-3" name="place" placeholder="Place" required>
                <input type="hidden" name="page" value="Formatting Service">
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
                    <div class="assistance lh-lg">
                        <p>You’ve poured months into research, only to receive formatting rejections on your thesis or dissertation. It stings when inconsistent line spacing, incorrect margins, or missing captions derail approval. Perfect formatting isn't optional; it’s critical for institutional and publication compliance. A polished document demonstrates academic discipline and enhances credibility. Our expert formatting service offers scrupulous checks and strict compliance with university or journal regulations. With PhD assistance, your document not only appears wonderful but also satisfies institutional procedures, preventing delays during review and supporting the scholarly integrity of your work.</p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- Main End -->

<!-- Formatting Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <p class="section-title bg-white text-center text-primary px-3">PhD Guides</p> -->
                <h2 class="fs-4">PhD Guides: Your Trusted Partner in Formatting Excellence</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm bg-light p-4 lh-lg">
                    <div class="card-body">
                    <p>
                    At PhD Guides, we provide accurate PhD guidance along with expert PhD support to make your document technically flawless. We make your synopsis, thesis, or dissertation conform to all the formatting norms—fonts, margins, headings, citations—according to your institution's style guide. Our formatting experts foresee potential pitfalls and make real-time changes to pre-empt reviewer remarks. We take care of every detail, you take care of your research, as we attend to document presentation and submission guidelines compliance. With our PhD assistance, formatting is a painless, hassle-free process.
                    </p>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Formatting End -->

<!-- Service Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="fs-4">What Our Formatting Service Entails</h2>
        </div>
        <div class="row">
            <div class="col-md-12 py-4">
                Our complete formatting service provides accurate PhD formatting assistance by academic requirements:
            </div>
        </div>
        <div class="row g-4">
          
            <div class="col-md-6">
            <div class="glass-card p-4 d-flex">
                <i class="fas fa-align-left text-primary fa-2x me-3"></i>
                <div>
                <h5 class="fw-semibold mb-1">Line spacing & paragraphing</h5>
                <p class="mb-0 small">Uniform spacing and indentation throughout chapters.</p>
                </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="glass-card p-4 d-flex">
                <i class="fas fa-quote-right text-success fa-2x me-3"></i>
                <div>
                <h5 class="fw-semibold mb-1">Citation styles</h5>
                <p class="mb-0 small">APA, MLA, IEEE, Harvard, Chicago—fully automated in-text and bibliographic citation
                    formatting.</p>
                </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="glass-card p-4 d-flex">
                <i class="fas fa-font text-warning fa-2x me-3"></i>
                <div>
                <h5 class="fw-semibold mb-1">Font & margins</h5>
                <p class="mb-0 small">Consistent font size, style (Times New Roman, Calibri), and specified margins.</p>
                </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="glass-card p-4 d-flex">
                <i class="fas fa-image text-info fa-2x me-3"></i>
                <div>
                <h5 class="fw-semibold mb-1">Table/Figure alignment</h5>
                <p class="mb-0 small">Proper numbering, captions, cross-referencing, and positioning.</p>
                </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="glass-card p-4 d-flex">
                <i class="fas fa-file-alt text-danger fa-2x me-3"></i>
                <div>
                <h5 class="fw-semibold mb-1">Pagination</h5>
                <p class="mb-0 small">Correct positioning of Roman/Arabic numerals and page breaks.</p>
                </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="glass-card p-4 d-flex">
                <i class="fas fa-heading text-secondary fa-2x me-3"></i>
                <div>
                <h5 class="fw-semibold mb-1">Heading structure</h5>
                <p class="mb-0 small">Multilevel headings, consistent styles, and TOC generation.</p>
                </div>
            </div>
            </div>

            <div class="col-md-12">
            <div class="glass-card p-4 d-flex">
                <i class="fas fa-columns text-dark fa-2x me-3"></i>
                <div>
                <h5 class="fw-semibold mb-1">Section divisions</h5>
                <p class="mb-1 small">Standardised chapter breaks, headers, and footers.</p>
                </div>
            </div>
            </div>
      </div>
      <div class="row">
        <div class="col-md-12 py-4">
            <p class="mb-0 small">All documents are manually read and through automated software to guarantee a
                    high-quality presentation consistent with submission requirements.</p>
        </div>
      </div>


    </div>
</div>
<!-- Service End -->

<!-- Formatting evey step Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="fs-4">Formatting at Every Step of Your Research</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="why-phd pt-3">
                <p>Formatting requirements change through research stages. We assist:</p>
            </div>
        </div>
        </div>
        
        <div class="container-fluid py-5">

            <div class="row justify-content-center g-4">
        
                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-list-alt"></i>
                    <h5 class="mt-2">Synopsis Format Services</h5>
                    <p>Our synopsis format services guarantee your research outline is formatted and structured to meet proposal submission expectations.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-project-diagram"></i>
                    <h5 class="mt-2">Thesis Format Services</h5>
                    <p>Our thesis format services provide total consistency of chapters, tables, references, and styling while writing and preparing for defence.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-file-alt"></i>
                    <h5 class="mt-2">Dissertation Format Services</h5>
                    <p>Our dissertation format service enhances last-minute formatting throughout various chapters, appendices, bibliography, figures, and university rule adherence.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="why-phd pt-3">
                <p>Our module service guarantees that every step of your research career is properly laid out, ready for submission, and aesthetically consistent.</p>
            </div>
        </div>
        </div>


    </div>
</div>
<!-- Formatting evey step End -->

<!-- Why Select Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="mb-3 fs-4">Why Select Our Formatting Experts?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="assistance lh-lg">
                        <p>PhD Guides offers reliable PhD guidance via careful formatting supported by scholarly accuracy:</p>
                    </div>
                </div>
            </div>

		<div class="row">
			<div class="col-md-12 ser-list">
				<ul class="lh-lg list-unstyled">
				<li>Institutional experience: Format experts who are aware of university and journal guidelines.</li>
				<li>Fully compliant: Guarantees compliance with reference styles, layouts, and rules of formatting.</li>
				<li>Zero plagiarism risk: Fresh formatting without reused templates.</li>
				<li>Fast turnaround: Trustworthy delivery, even within tight deadlines.</li>
                <li>24/7 support: For real-time updates, queries, and formatting adjustments.</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="text-center mt-5">
                <p class="lead mb-3">
                    Get trusted PhD assistance and expert support through our comprehensive dissertation writing service tailored to your research needs.
                </p>
                <a href="https://wa.me/917708108250" target="_blank" class="btn btn-success d-inline-flex align-items-center gap-2 px-4 py-2" style="font-size: 1rem; font-weight: 500;">
                    <i class="fab fa-whatsapp"></i> Chat via WhatsApp
                </a>
            </div>
		</div>
		</div>


        
    </div>
</div>
<!-- Why Select End -->

<!-- Formatting Process Start -->
<div class="container-xxl py-4">
    <div class="container ass-our-ple">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Formatting Process: How We Work With You</h2>
        </div>

        <div class="ass-pled">
          <div class="timeline-line"></div>

          <div class="timeline-step" data-aos="fade-up">
            <div class="timeline-number">1</div>
            <div class="timeline-content">
              <div class="timeline-title">
                Share your document
              </div>
              <div class="timeline-description">
                Share your Word or PDF draft thesis in its original formatting.
              </div>
            </div>
          </div>

          <div class="timeline-step" data-aos="fade-up" data-aos-delay="100">
            <div class="timeline-number">2</div>
            <div class="timeline-content">
              <div class="timeline-title">
                Select your format guidelines
              </div>
              <div class="timeline-description">
                Inform us of your institution's style guide or journal guidelines.
              </div>
            </div>
          </div>

          <div class="timeline-step" data-aos="fade-up" data-aos-delay="200">
            <div class="timeline-number">3</div>
            <div class="timeline-content">
              <div class="timeline-title">
                Receive a formatted draft
              </div>
              <div class="timeline-description">
                We use line spacing, headings, citations, tables, and pagination.
              </div>
            </div>
          </div>

          <div class="timeline-step" data-aos="fade-up" data-aos-delay="300">
            <div class="timeline-number">4</div>
            <div class="timeline-content">
              <div class="timeline-title">
               Final revisions (if necessary)
              </div>
              <div class="timeline-description">
                Send your feedback; we modify headings, captions, and layout as required.
              </div>
            </div>
          </div>

          <div class="timeline-step" data-aos="fade-up" data-aos-delay="400">
            <div class="timeline-number">5</div>
            <div class="timeline-content">
              <div class="timeline-title">
                 Final delivery
              </div>
              <div class="timeline-description">
                Receive a submission-ready document in your preferred format, with TOC, headers, and clean structure.
              </div>
            </div>
          </div>

        </div>
        
    </div>

    </div>
</div>
<!-- Formatting Process End -->

<!-- Trusted Start -->
<div class="container-xxl">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="mb-3 fs-4">Trusted by Scholars Nationwide</h2>
        </div>
        <div class="row">
            <div class="col-md-12 lh-lg">
                Over 3,000+ PhD scholars across India and globally have successfully formatted their research with PhD Guides. Our 98% acceptance rate reflects our attention to technical detail and institutional requirements.
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
                        <p class="fs-6">“My thesis was accepted without a single formatting correction—thanks to PhD Guides.”</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <i class="fas fa-quote-left fa-2x text-success mb-3"></i>
                        <p class="fs-6">“Fast, responsive, and effective formatting support—highly recommend.”</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <div class="d-inline-flex align-items-center gap-2">
                <i class="fas fa-check-circle fa-2x text-success"></i>
                <p class="lead mb-0">Scholarly committees rely on our formatting accuracy.<br><strong>Let us assist you in presenting your research confidently and professionally.</strong></p>
            </div>
        </div>


    </div>
</div>
<!-- Trusted End -->

<!-- Form Start -->
<div class="container py-4">
    <div class="row align-items-center justify-content-center">
      <!-- Left: Content -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h3 class="fw-bold mb-3 text-success fs-2">Take a minute to fill in the details, and our experts will connect with you</h3>
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
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
            </div>
			<div class="mb-3">
              <label for="contact" class="form-label text-dark"><i class="fas fa-phone me-2  text-primary"></i>Contact</label>
              <input type="text" id="contact" name="contact" class="form-control" placeholder="Enter your Contact">
            </div>
			<div class="mb-3">
              <label for="email" class="form-label text-dark"><i class="fas fa-envelope me-2 text-primary"></i>Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email">
            </div>
			<div class="mb-3">
              <label for="place" class="form-label text-dark"><i class="fas fa-globe me-2 text-primary"></i>Place</label>
              <input type="text" id="place" name="place" class="form-control" placeholder="Enter your Place">
            </div>
            <input type="hidden" name="page" value="Formatting Service">
            <button type="submit" class="btn btn-success w-100 mt-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- Form End -->
@endsection
@push('script')
 <script>
    AOS.init();
  </script>
@endpush