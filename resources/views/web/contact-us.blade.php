@extends('web.app')
@push('meta-tags')
    <title>Contact PhD Guides | 100% Original Research Support</title>
    <meta name="description" content="Get in touch with our Guides for 100% original research assistance. We follow university guidelines and offer expert help at every step of your journey.">
    <meta name="keywords" content="contact us -phd guides, phd guidance in Bangalore, best phd guidance, call phd guides">
    <link rel="canonical" href="https://phdguides.com/contact-us.php">

    <meta property="og:title" content="Contact PhD Guides | 100% Original Research Support"/>
    <meta property="og:description" content="Get in touch with our Guides for 100% original research assistance. We follow university guidelines and offer expert help at every step of your journey."/>
    <meta property="og:url" content="https://phdguides.com/contact-us.php"/>
    <meta property="og:image" content=""/>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Contact PhD Guides | 100% Original Research Support">
    <meta name="twitter:description" content="Get in touch with our Guides for 100% original research assistance. We follow university guidelines and offer expert help at every step of your journey.">
    <meta name="twitter:image" content="">
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
		<i class="fas fa-graduation-cap me-3"></i>Contact Us
		</h1>
		<p class="subtitle">Start with Scholars. End with Success.</p>
	</div>

	<!-- Right Panel -->
	<div class="right-panel p-5">
		<div class="p-3 pt-3" style="display:block">
			<h2 class="text-center fs-4 text-success">Get Started</h2>
			<!-- Single Form -->
			<form>
				<input type="text" class="form-control m-3" name="name" placeholder="Name" required>
				<input type="text" class="form-control m-3" name="research_area" placeholder="Research Area" required>
				<input type="text" class="form-control m-3" name="country" placeholder="Country" required>
				<input type="text" class="form-control m-3" name="state" placeholder="State" required>
				<input type="text" class="form-control m-3" name="city" placeholder="City" required>
                <input type="text" class="form-control m-3" name="message" placeholder="Message to the Editor or Reviewer" required>
				<div class="form-control m-3 position-relative">
					<label for="pdf" id="pdfLabel" class="text-muted">Submit your Pdf (Optional)</label>
					<input type="file" class="form-control" name="pdf" id="pdf" onchange="updatePdfLabel(this)">
				</div>				
				<input type="submit" class="form-control m-3" style="background-color:#09b87e;color:white;border:none;border-radius:5px;padding:12px;font-weight:600;cursor:pointer;" value="Submit Request">
			</form>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
			<p class="section-title bg-white text-center text-primary px-3">Contact Us</p>
			<h2 class="mb-5 fs-4">contact us</h2>
		</div>
		<div class="row g-5">
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
				<h3 class="mb-4">Get In Touch With Us</h3>
				<p class="mb-4"> Seeking Guidance for Your PhD Journey? Look No Further! Are you a passionate scholar embarking on your PhD journey? Do you find yourself in need of expert guidance to navigate the complexities of research, writing, and academic milestones? Look no further! Our service is here to support you every step of the way. For any queries, feel free to contact our friendly customer support team. We're here to assist you! Remember, success awaits those who seek Ph.D. guides. Take the leap and let us support you on your path to becoming a distinguished scholar.</p>
				@if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif
          <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
					<div class="row g-3">
						<div class="col-md-6">
							<div class="form-floating">
								<input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
								<label for="name">Your Name</label>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-floating">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
								<label for="email">Your Email</label>
							</div>
						</div>
						<div class="col-6">
							<div class="form-floating">
								<input type="text" class="form-control" name="contact" id="subject" placeholder="Phone Number">
								<label for="subject">Phone</label>
							</div>
						</div>
						<div class="col-6">
							<div class="form-floating">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
								<label for="subject">Subject</label>
							</div>
						</div>
						<div class="col-12">
							<div class="form-floating">
								<textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
								<label for="message">Message</label>
							</div>
						</div>
						<div class="col-12">
							<button class="btn btn-secondary rounded-pill py-3 px-5" name="submit" type="submit">Send
								Message</button>
						</div>
						<input type="hidden" name="page" value="Contact">
					</div>
				</form>
			</div>
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<h3 class="mb-4">Contact Details</h3>
				<div class="d-flex border-bottom pb-3 mb-3">
					<div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
						<i class="fa fa-map-marker-alt text-body"></i>
					</div>
					<div class="ms-3">
						<h6>Our Office</h6>
						<span>No:743-31, M.T.K. Reddy Complex, Near Syndicate Bank, Marthahalli, bangalore, Karnataka 560037</span>
					</div>
				</div>
				<div class="d-flex border-bottom pb-3 mb-3">
					<div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
						<a href="tel:+919791191188">
							<i class="fa fa-phone text-body"></i>
						</a>
					</div>
					<div class="ms-3">
						<a href="tel:+917708108250" class="darkcolor">
							<h6>Call Us</h6>
							<span>+91 7708108250</span>
						</a>
					</div>
				</div>
				<div class="d-flex border-bottom-0 pb-3 mb-3">
					<div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
						<a href="mailto:someone@gmail.com">
							<i class="fa fa-envelope text-body"></i>
						</a>
					</div>
					<div class="ms-3">
						<a href="mailto:info@phdguides.com" class="darkcolor">
							<h6>Mail Us</h6>
							<span>info@phdguides.com</span>
						</a>
					</div>
				</div>

				<iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6458601776662!2d77.69629957445844!3d12.994488014377323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae116c802bd71b%3A0x551be908f06932d!2sphd%20guides!5e0!3m2!1sen!2sin!4v1695361608288!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				<!-- <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
			</div>
		</div>
	</div>
</div>
<!-- Contact End -->
@endsection

@push('script')
<script>
  function updatePdfLabel(input) {
    const label = document.getElementById('pdfLabel');
    if (input.files.length > 0) {
      label.textContent = input.files[0].name;
    } else {
      label.textContent = 'Submit your Pdf (Optional)';
    }
  }
</script>
@endpush