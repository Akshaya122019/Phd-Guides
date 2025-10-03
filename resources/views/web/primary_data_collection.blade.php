@extends('web.app')
@push('meta-tags')
    <title>Primary Data Collection Service | PhD Guides</title>
    <meta name="description" content="We conduct primary data collection using structured tools, ethical protocols, and academic quality assurance to ensure validity and reliability.">
    <meta name="keywords" content="synopsis writing service, synopsis writing service in Bangalore, best synopsis writing service">
    <link rel="canonical" href="https://phdguides.com/synopsis_writing.php">

    <meta property="og:title" content="Primary Data Collection Service | PhD Guides"/>
    <meta property="og:description" content="We conduct primary data collection using structured tools, ethical protocols, and academic quality assurance to ensure validity and reliability."/>
    <meta property="og:url" content="https://phdguides.com/synopsis_writing.php"/>
    <meta property="og:image" content="https://phdguides.com/img/temp/common-img.webp"/>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Primary Data Collection Service | PhD Guides">
    <meta name="twitter:description" content="We conduct primary data collection using structured tools, ethical protocols, and academic quality assurance to ensure validity and reliability.">
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
		<i class="fas fa-graduation-cap me-3"></i>Primary Data by PhD Guide
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
        <input type="hidden" name="page" value="Primary Data Collection">
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
                        <p>Primary data collection is a cornerstone of rigorous doctoral research, offering firsthand evidence directly aligned with your study’s objectives. Gathering original data through methods such as surveys, interviews, focus groups, or experiments enables you to explore research questions with precision and depth.</p>
						<p>This approach not only enhances the originality and credibility of your thesis but also allows for greater control over data quality and relevance. With expert PhD assistance and doctoral assistance, scholars can design effective primary data strategies that adhere to ethical standards while maximizing analytical value. Proper primary data collection empowers you to produce impactful research that withstands academic scrutiny.</p>

                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- Main End -->

<!-- What Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h2 class="mb-3 fs-4">What is Primary Data Collection?</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card border-0 shadow-sm bg-light p-4">
          <div class="card-body fs-6 lh-lg">
            <p>Primary data collection refers to the process of gathering original, firsthand information directly from sources to address specific research questions. It is essential in doctoral research because it provides tailored, accurate, and context-specific data that secondary sources may lack. This method allows scholars to explore new phenomena, test hypotheses, and generate original insights. Effective PhD assistance ensures that primary data is collected ethically and methodically to support valid and reliable conclusions.</p>
            <p>Common methods include:</p>
            <ul>
              <li>Interviews with participants</li>
              <li>Structured or unstructured surveys</li>
              <li>Field observations in natural settings</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- What End -->

<!-- Why Start -->
<div class="container-xxl py-4">
  <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h2 class="mb-3 fs-4">Why Primary Data Is Crucial for Your PhD Research</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card border-0 shadow-sm p-4 rounded border-start border-5 border-success ps-3">
            <p class="highlight-text lh-lg">
                Primary data collection is a cornerstone of high-quality doctoral research. By collecting original information firsthand, you ensure the authenticity and relevance of your data, which directly supports the validity of your findings. This approach also provides unmatched control over the research design, allowing you to tailor methods to your specific research questions.
            </p>
            <p class="lh-lg">With professional <b>doctoral assistance</b> and targeted <b>PhD guidance</b>, you can confidently select and implement <b>primary data collection methods</b> that comply with ethical standards and enhance the rigor of your thesis. Using primary data not only strengthens your academic contribution but also demonstrates your ability to generate new knowledge and insights in your field.</p>
            <p class="lh-lg">Key benefits include:</p>
            <ul class="lh-lg">
              <li>Guarantees authenticity and contextual relevance of data</li>
              <li>Enables originality by uncovering novel insights</li>
              <li>Offers precise control over data quality and research processes</li>
            </ul>
          </div>
        </div>
    </div>
   
  </div>
</div>
<!-- Why End -->

<!-- Common Start -->
<div class="container-xxl py-4 bg-light">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Common Primary Data Collection Methods</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                In doctoral research, selecting the right primary data collection methods is essential for gathering valid and reliable data. These methods enable scholars to explore complex research questions through direct engagement with participants or controlled settings. With expert support, researchers can effectively design and implement these approaches to maximize data quality and relevance. 
				<p>Key methods include:</p>
            </div>
        </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 py-4">

      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-primary"><i class="fas fa-microphone"></i></div>
            <h5 class="card-title">Interviews (Structured/Unstructured)</h5>
            <p class="card-text"> One-on-one conversations that gather in-depth qualitative insights. Structured interviews use predefined questions, while unstructured allow for open-ended exploration.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-success"><i class="fas fa-poll-h"></i></div>
            <h5 class="card-title">Surveys and Questionnaires</h5>
            <p class="card-text">Standardized tools for collecting quantitative or qualitative data from larger populations, useful for identifying trends and patterns.</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-danger"><i class="fas fa-users"></i></div>
            <h5 class="card-title">Focus Groups</h5>
            <p class="card-text">Facilitated group discussions that generate diverse perspectives and uncover collective views on specific topics.</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-warning"><i class="fas fa-eye"></i></div>
            <h5 class="card-title">Observations</h5>
            <p class="card-text">Systematic recording of behaviours or events in natural or controlled environments to collect unbiased data.</p>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-info"><i class="fas fa-flask"></i></div>
            <h5 class="card-title">Experiments</h5>
            <p class="card-text">Controlled studies testing hypotheses by manipulating variables to observe cause-effect relationships.</p>
          </div>
        </div>
      </div>
    </div>

    </div>
</div>
<!-- Common End -->

<!-- Choosing Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="mb-3 fs-4">Choosing the Right Primary Data Collection Method for Your Field</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="assistance lh-lg">
                        <p>Selecting the most effective primary data collection method depends largely on your academic discipline and specific research objectives. Tailored <b>PhD assistance</b> and expert <b>PhD guidance</b> can help ensure your chosen method aligns with your study’s aims and delivers meaningful results. Different fields require different approaches to capture relevant data accurately.</p>
						<p>For instance, social sciences often benefit from qualitative methods such as interviews, focus groups, and observations to explore human behavior and societal trends. In contrast, engineering and natural sciences typically rely more on quantitative techniques like surveys, experiments, and controlled measurements to test hypotheses and validate models. Understanding these disciplinary nuances helps you design a robust, ethical data collection strategy that supports your thesis effectively.</p>

                    </div>
					<div class="text-center mt-3">
						<a href="https://wa.me/917708108250" target="_blank" class="btn btn-success d-inline-flex align-items-center gap-2 px-4 py-2" style="font-size: 1rem; font-weight: 500;">
							<i class="fab fa-whatsapp"></i> Chat with our expert 
						</a>
					</div>
                </div>
            </div>
        
    </div>
</div>
<!-- Choosing End -->

<!-- Challenges Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Challenges in Primary Data Collection and How We Help</h2>
        </div>
        
        <div class="container-fluid">
            <p>Here’s what we formatted for you:</p>
            <div class="row justify-content-center g-4">
                <!-- Row 1: 3 Cards -->
                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-calculator"></i>
                    <h5 class="mt-2">Determining the Right Sample Size</h5>
                    <p>Selecting an inappropriate sample size can compromise your research validity and drain your resources, causing unnecessary stress.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-gavel"></i>
                    <h5 class="mt-2">Ethical Approval Complexity</h5>
                    <p>Navigating Institutional Review Board (IRB) procedures, ethical standards, and informed consent can be complicated, overwhelming, and time-intensive.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h5 class="mt-2">Logistical Difficulties</h5>
                    <p>Participant recruitment, coordinating schedules, and maintaining accurate records demand meticulous management and can significantly delay your project timeline.</p>
                </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4 g-4">
                <!-- Row 2: 2 Cards Centered -->
                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-compass"></i>
                    <h5 class="mt-2">Expert Sampling Guidance</h5>
                    <p>Our doctoral assistance includes crafting precise sampling methods aligned specifically with your research objectives, ensuring robust and valid results.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
					<div class="icon-box text-center">
						<i class="fas fa-hands-helping"></i>
						<h5 class="mt-2">Comprehensive IRB Support</h5>
						<p>We simplify the ethics approval process, helping you develop clear, compliant documentation for swift IRB clearance, allowing you to concentrate fully on your research.</p>
					</div>
                </div>
				<div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-database"></i>
                    <h5 class="mt-2">Participant and Data Management</h5>
                    <p>Through tailored PhD guidance, we provide effective strategies for seamless participant recruitment, scheduling, and accurate record-keeping, ensuring smooth, delay-free primary data collection.</p>
                </div>
                </div>



            </div>
        </div>



    </div>
</div>
<!-- Challenges End -->

<!-- Approch Start -->
<div class="container-xxl py-4 bg-light">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Our Approach to Primary Data Collection Support</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 py-4">

      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-primary"><i class="fas fa-sitemap"></i></div>
            <h5 class="card-title">Collaborative Framework Design</h5>
            <p class="card-text">We work closely with you to create a robust and tailored data collection framework, specifically aligned with your research objectives and unique doctoral requirements.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-success"><i class="fas fa-wrench"></i></div>
            <h5 class="card-title">Customised Tool Development</h5>
            <p class="card-text">Our PhD assistance includes developing and rigorously validating bespoke data collection instruments such as surveys, structured interview guides, and detailed observation checklists.</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-danger"><i class="fas fa-stamp"></i></div>
            <h5 class="card-title">IRB Approval Support</h5>
            <p class="card-text">Recognising that ethical approvals can be complex, our team provides comprehensive guidance in preparing thorough, compliant documentation for Institutional Review Board (IRB) submissions.</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-warning"><i class="fas fa-search-plus"></i></div>
            <h5 class="card-title">Efficient Participant Recruitment</h5>
            <p class="card-text">We help streamline your recruitment processes, providing strategic advice and practical solutions to secure suitable and representative participants effectively.</p>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-info"><i class="fas fa-server"></i></div>
            <h5 class="card-title">Accurate Data Management</h5>
            <p class="card-text">Our expert guidance ensures meticulous data recording and management practices, maintaining data quality, integrity, and reliability throughout your research journey.</p>
          </div>
        </div>
      </div>

	   <div class="col">
        <div class="card h-100 shadow-sm border-0 publication-card">
          <div class="card-body">
            <div class="icon-circle mb-3 text-warning"><i class="fas fa-tasks"></i></div>
            <h5 class="card-title">Quality Assurance</h5>
            <p class="card-text">Through personalised and attentive support, we implement rigorous quality control measures, ensuring your primary data collection is accurate, ethical, and academically robust.</p>
          </div>
        </div>
      </div>



    </div>

    </div>
</div>
<!-- Approch End -->

<!-- How we Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h class="mb-3 fs-4">How We Ensure Ethical and Accurate Data Collection</h>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm p-4 rounded border-start border-5 border-success ps-3">
                <p class="highlight-text lh-lg">
                    At <b>PhD Guides,</b> ethical compliance is at the heart of our support for primary data collection methods. We guide researchers through every step of the Institutional Review Board (IRB) approval process to ensure your study meets all regulatory and institutional requirements. We help prepare detailed documentation, including informed consent forms, to protect participant rights and maintain transparency.
                </p>
				<p class="lh-lg">Beyond compliance, our PhD guidance emphasizes data accuracy through validated tools and rigorous quality checks during data gathering. By combining strict ethical standards with meticulous methodology, we ensure your data is trustworthy, reproducible, and suitable for rigorous academic scrutiny.</p>
                </div>
            </div>
        </div>

        
    </div>
</div>
<!-- How we End -->

<!--  Steps Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h2 class="mb-3 fs-4">Steps to Get Started with Primary Data Collection Help</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                Getting reliable support for primary data collection is easy with us. Our structured process ensures your research progresses smoothly with expert doctoral assistance every step of the way:
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
                    <h5 class="fw-bold mb-1">Consultation</h5>
                    <p class="mb-0 text-muted">Discuss your research goals and data needs with our specialists.</p>
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
                    <h5 class="fw-bold mb-1">Method Finalization</h5>
                    <p class="mb-0 text-muted">Choose the most suitable primary data collection methods for your study.</p>
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
                    <h5 class="fw-bold mb-1">Tool Design</h5>
                    <p class="mb-0 text-muted">Develop and validate customized surveys, interview guides, or observation checklists.</p>
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
                    <h5 class="fw-bold mb-1">Data Collection</h5>
                    <p class="mb-0 text-muted">Receive ongoing support during participant recruitment, data gathering, and quality checks.</p>
                </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-md-12">
                <div class="d-flex align-items-start p-4 bg-white rounded shadow-sm">
                <div class="me-4">
                    <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                    5
                    </div>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Report Assistance</h5>
                    <p class="mb-0 text-muted">Get help interpreting data and presenting results effectively in your thesis.</p>
                </div>
                </div>
            </div>

          

        </div>
        <div class="row">
            <div class="col-md-12">
                Partner with us to make your primary data collection efficient, ethical, and academically rigorous.
            </div>
        </div>


    </div>
</div>
<!--  Steps End -->

<!-- Why Choose Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="mb-3 fs-4">Why Choose PhD Guides for Primary Data Collection?</h2>
        </div>
        
        <div class="container-fluid">
            <div class="row justify-content-center g-4">
                <!-- Row 1: 3 Cards -->
                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-user-tie"></i>
                    <h5 class="mt-2">Experienced Guides</h5>
                    <p>Our guides offer extensive expertise, ensuring your primary data collection meets rigorous academic standards with precision, clarity, and methodological integrity.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-toolbox"></i>
                    <h5 class="mt-2">Comprehensive PhD Assistance</h5>
                    <p>With tailored PhD assistance, we provide end-to-end support from designing research instruments to data collection, ensuring accurate, reliable, and meaningful results aligned with your research objectives.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-heart"></i>
                    <h5 class="mt-2">Personalised Doctoral Assistance</h5>
                    <p>Our dedicated team offers individualised doctoral assistance, crafting customised data collection plans suited to your unique research needs, objectives, and university guidelines.</p>
                </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4 g-4">
                <!-- Row 2: 2 Cards Centered -->
                <div class="col-md-6 col-lg-4">
                <div class="icon-box text-center">
                    <i class="fas fa-balance-scale"></i>
                    <h5 class="mt-2">Ethical Compliance & Confidentiality</h5>
                    <p>We meticulously adhere to ethical research standards, ensuring seamless IRB approvals, safeguarding data confidentiality, and upholding your research’s credibility.</p>
                </div>
                </div>

                <div class="col-md-6 col-lg-4">
					<div class="icon-box text-center">
						<i class="fas fa-calendar-check"></i>
						<h5 class="mt-2">Timely and Reliable Support</h5>
						<p>We guarantee timely, efficient, and professional management of your data collection processes, empowering you to complete your PhD research confidently and without unnecessary delay..</p>
					</div>
                </div>




            </div>
        </div>



    </div>
</div>
<!-- Why CHoose End -->

<!-- Form Start -->
<div class="container py-4 bg-light">
    <div class="row align-items-center justify-content-center">
      <!-- Left: Content -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold mb-3 text-success fs-1">Leave us your detail </h2>
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
              <label for="contact" class="form-label text-dark"><i class="fas fa-phone me-2  text-primary"></i> Contact</label>
              <input type="text" name="contact" class="form-control" placeholder="Enter your Contact">
            </div>
            <div class="mb-3">
              <label for="place" class="form-label text-dark"><i class="fas fa-globe me-2 text-primary"></i> Place</label>
              <input type="text" name="place" class="form-control" placeholder="Enter your Place">
            </div>
            <input type="hidden" name="page" value="Primary Data Collection">
            <button type="submit" class="btn btn-success w-100 mt-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- Form End -->

<!-- FAQ Start -->
<div class="container-xxl py-4">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h2 class="mb-4 fs-4">Frequently Asked Questions FAQ</h2>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        1.  Why use Primary data Collection?
                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Primary data collection is used to obtain firsthand, specific, and relevant information that directly addresses your unique research objectives.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2. Why is primary data collection important?
                </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    It provides original, first-hand insights that are specific to your study, helping ensure the data is trustworthy, up-to-date, and highly relevant.
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    3. When to choose primary data collection?
                </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                     When existing data is insufficient, outdated, or irrelevant to the research problem you are investigating.
                </div>
                </div>
            </div>

			<div class="accordion-item">
                <h4 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    4. What does primary data collection mean?
                </button>
                </h4>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    It means collecting new, original data directly from sources through methods like surveys, interviews, or experiments.
                </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- FAQ End -->
@endsection