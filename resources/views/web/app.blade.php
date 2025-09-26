<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phd Guides</title>
    <!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&amp;family=Open+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="font/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

	<!-- <link href="cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

	<!-- Libraries Stylesheet -->
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<!-- <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"> -->

	<!-- Customized Bootstrap Stylesheet -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- Timeline -->
   <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

	<!-- Favicon  -->
	<link rel="icon" type="image/x-icon" href="img/temp/logo.png">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-JL56BEMW9D"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-JL56BEMW9D');
	</script>
</head>
<body>
    @include('template.header')
    <main>
        @yield('content')
    </main>
    @include('template.footer')

<script>
        // Enhanced mobile submenu functionality
        function initializeMobileNavigation() {
            // Remove any existing event listeners
            document.querySelectorAll('.dropdown-submenu > .dropdown-toggle').forEach(el => {
                el.removeEventListener('click', handleSubmenuClick);
            });

            // Add click handlers for mobile submenu toggles
            document.querySelectorAll('.dropdown-submenu > .dropdown-toggle').forEach(el => {
                el.addEventListener('click', handleSubmenuClick);
            });
        }

        function handleSubmenuClick(e) {
            // Only handle clicks on mobile
            if (window.innerWidth >= 992) return;
            
            e.preventDefault();
            e.stopPropagation();

            const submenu = this.parentElement;
            const dropdownMenu = this.nextElementSibling;

            if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
                // Toggle current submenu
                const isCurrentlyOpen = dropdownMenu.classList.contains('show');
                
                // Close all sibling submenus at the same level
                const parentMenu = submenu.closest('.dropdown-menu');
                if (parentMenu) {
                    parentMenu.querySelectorAll('.dropdown-submenu > .dropdown-menu.show').forEach(siblingMenu => {
                        if (siblingMenu !== dropdownMenu) {
                            siblingMenu.classList.remove('show');
                            siblingMenu.parentElement.classList.remove('show');
                        }
                    });
                }

                // Toggle current submenu
                if (isCurrentlyOpen) {
                    dropdownMenu.classList.remove('show');
                    submenu.classList.remove('show');
                    // Close all nested submenus
                    dropdownMenu.querySelectorAll('.dropdown-menu.show').forEach(nestedMenu => {
                        nestedMenu.classList.remove('show');
                        nestedMenu.parentElement.classList.remove('show');
                    });
                } else {
                    dropdownMenu.classList.add('show');
                    submenu.classList.add('show');
                }
            }
        }

        // Handle main dropdown clicks for mobile
        document.querySelectorAll('.nav-item.dropdown > .dropdown-toggle').forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    // Let Bootstrap handle main dropdown on mobile
                    // Close all open submenus when main dropdown is toggled
                    setTimeout(() => {
                        const dropdown = this.nextElementSibling;
                        if (dropdown && !dropdown.classList.contains('show')) {
                            dropdown.querySelectorAll('.dropdown-menu.show').forEach(submenu => {
                                submenu.classList.remove('show');
                                submenu.parentElement.classList.remove('show');
                            });
                        }
                    }, 100);
                }
            });
        });

        // Close all submenus when clicking outside
        document.addEventListener('click', function(e) {
            if (window.innerWidth < 992 && !e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                    menu.parentElement.classList.remove('show');
                });
            }
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', initializeMobileNavigation);

        // Reinitialize on window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                initializeMobileNavigation();
            }, 250);
        });

        // Handle navbar collapse events
        const navbarCollapse = document.getElementById('navbarCollapse');
        if (navbarCollapse) {
            navbarCollapse.addEventListener('hidden.bs.collapse', function() {
                // Close all submenus when navbar is collapsed
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
                document.querySelectorAll('.dropdown-submenu.show').forEach(submenu => {
                    submenu.classList.remove('show');
                });
            });
        }
</script>
</body>
</html>