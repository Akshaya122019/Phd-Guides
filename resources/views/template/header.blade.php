
<!-- Topbar Start -->
<div class="container-fluid top-bar px-0">
  <div class="row g-0 d-none d-lg-flex">
    <div class="col-lg-6 ps-5 text-start">
      <div class="h-10 d-inline-flex align-items-center text-light">
      </div>
    </div>
    <div class="col-lg-6 text-end">
      <div class="h-100 d-inline-flex align-items-center text-dark py-2 px-4" style="background-color:#c0b521">
        <a href="tel:+917708108250" class="text-dark fw-bold">
          <span class="me-2 fw-semi-bold">
            <i class="fa fa-phone me-2"></i>Call Us:
          </span>
          <span>+91 7708108250</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
  <a href="index.php" class="navbar-brand d-flex align-items-center">
    <img src="{{asset('img/temp/logo.png')}}" height="80" width="80" alt="phdguides">
  </a>
  <button class="navbar-toggler me-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">

  <!-- Menu 1 -->
  <a href="{{route('home')}}" class="nav-item nav-link">Home</a>

  <!-- Menu 2 -->
  <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
    <div class="dropdown-menu bg-light">

      <a class="dropdown-item" href="{{route('selection_of_topics')}}">Topic Selection</a>
      <a class="dropdown-item" href="{{route('research_proposal_writing')}}">Research Proposal</a>
      <a class="dropdown-item" href="{{route('research_paper_writing')}}">Research Paper Writing</a>
      <a class="dropdown-item" href="{{route('synopsis_writing')}}">Synopsis Writing</a>
      <a class="dropdown-item" href="{{route('dissertation')}}">Dissertation Writing</a>
      <a class="dropdown-item" href="{{route('thesis_writing')}}">Thesis Writing</a>

      <!-- Submenu: Formatting Service -->
      <div class="dropdown-submenu">
        <a href="{{route('formatting_service')}}" class="dropdown-item dropdown-toggle">Formatting Service</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('synopsis_formatting')}}">Synopsis Format</a>
          <a class="dropdown-item" href="{{route('thesis_formatting')}}">Thesis Format</a>
          <a class="dropdown-item" href="{{route('dissertation_formatting')}}">Dissertation Format</a>
        </div>
      </div>

      <!-- <a class="dropdown-item" href="review_paper_writing.php">Review Paper Writing</a> -->
      <a class="dropdown-item" href="{{route('implementation')}}">Implementation</a>
      <a class="dropdown-item" href="{{route('literature_review')}}">Literature Review</a>
      <a class="dropdown-item" href="{{route('systematic_literature_review')}}">Systematic Literature Review</a>

      <!-- Submenu: Research Methodology -->
      <div class="dropdown-submenu">
        <a href="{{route('research_methodology')}}" class="dropdown-item dropdown-toggle">Research Methodology</a>
        <div class="dropdown-menu drop-sub">
          <a class="dropdown-item" href="{{route('sampling')}}">Sampling</a>
          <a class="dropdown-item" href="{{route('qualitative_methodology')}}">Qualitative Methodology</a>
          <a class="dropdown-item" href="{{route('quantitative_methodology')}}">Quantitative Methodology</a>

          <!-- Nested submenu: Data Collection -->
          <div class="dropdown-submenu">
            <a href="{{route('data_collection')}}" class="dropdown-item dropdown-toggle">Data Collection</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('primary_data_collection')}}">Primary Data</a>
              <a class="dropdown-item" href="{{route('secondary_data_collection')}}">Secondary Data</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menu 3 -->
  <a href="{{route('assistance')}}" class="nav-item nav-link">Assistance</a>
      <!-- Menu 4 -->
        <!-- <a href="index.php" class="nav-item nav-link">Coursework</a> -->

      <!-- Menu 5 -->
  <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
      Publications
    </a>
    <div class="dropdown-menu bg-light m-0">
      <a href="{{route('sci_journal')}}" class="dropdown-item">SCI journal List</a>
      <a href="{{route('scopus_indexed')}}" class="dropdown-item">Scopus indexed journal</a>
      <a href="{{route('q1_journal')}}" class="dropdown-item">Q1 journal Publication</a>
      <a href="{{route('ugc_journal')}}" class="dropdown-item">UGC Approved Journal</a>
      <a href="{{route('web_of_science')}}" class="dropdown-item">Web of Science</a>
      <a href="{{route('isi_journal')}}" class="dropdown-item">ISI Journal Publication</a>
      <a href="{{route('igi_journal')}}" class="dropdown-item">IGI Global Publication</a>
    </div>
  </div>

		<!-- Menu 6 -->
	  <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          Supplement Services
        </a>
        <div class="dropdown-menu bg-light m-0">
          <a href="{{route('annotated_bibilography')}}" class="dropdown-item">Annotated bibilography</a>
          <a href="{{route('plagarism_removal')}}" class="dropdown-item">Plagiarism Removal</a>
		    <div class="dropdown-submenu">
            <a href="{{route('data_analysis')}}" class="dropdown-item dropdown-toggle">Data Analysis</a>
            <div class="dropdown-menu drop-sub-ser">
              <a class="dropdown-item" href="{{route('qualitative_data_analysis')}}">Qualitative data analysis</a>
              <a class="dropdown-item" href="{{route('quantitative_data_analysis')}}">Quanatitative data analysis</a>
            </div>
        </div>
		  <div class="dropdown-submenu">
            <a href="{{route('review_support')}}" class="dropdown-item dropdown-toggle">Review Support</a>
            <div class="dropdown-menu drop-sub-ser">
              <a class="dropdown-item" href="{{route('journal_review_support')}}">Journal Review Support</a>
              <a class="dropdown-item" href="{{route('thesis_review_support')}}">Thesis review Support</a>
            </div>
          </div>
          <a href="{{route('viva_voce')}}" class="dropdown-item">Viva voce</a>
          <a href="{{route('presentation')}}" class="dropdown-item">Presentation</a>
          <a href="{{route('proofreading')}}" class="dropdown-item">Proofreading</a>
        </div>
      </div>
      
      <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact</a>

    </div>
  </div>
</nav>
<!-- Navbar End -->