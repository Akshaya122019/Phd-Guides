<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>404 - Page Not Found</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">
   <!-- Header with Logo -->
   <nav class="navbar navbar-light bg-white shadow-sm">
       <div class="container">
           <a href="index.php" class="navbar-brand d-flex align-items-center">
                <img src="img/temp/logo.png" height="80" width="80" alt="phdguides">
            </a>
       </div>
   </nav>

   <!-- 404 Content -->
   <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 80vh;">
       <div class="text-center">
           <!-- Large 404 Number -->
           <div class="display-1 text-primary fw-bold mb-3">404</div>
           
           <!-- Sad Face Icon -->
           <div class="mb-4">
               <i class="fas fa-exclamation-triangle text-warning" style="font-size: 4rem;"></i>
           </div>
           
           <!-- Error Message -->
           <h2 class="h3 text-dark mb-3">Oops! Page Not Found</h2>
           <p class="text-muted mb-4 lead">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
           
           <!-- Go Home Button -->
           <a href="{{route('home')}}" class="btn btn-primary btn-lg">
               <i class="fas fa-home me-2"></i>
               Go Home
           </a>
       </div>
   </div>

   <!-- Footer -->
   <footer class="bg-dark text-white text-center py-3 mt-5">
       <div class="container">
           <p class="mb-0">&copy; 2024 PhD Guides. All rights reserved.</p>
       </div>
   </footer>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>