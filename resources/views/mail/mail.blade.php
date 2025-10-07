<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>New Form Submission</h2>
<p><strong>Name:</strong> {{ $formData['name'] }}</p>
@if (!empty($formData['email']))
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
@endif

@if (!empty($formData['contact']))
<p><strong>Contact:</strong> {{ $formData['contact'] }}</p>
@endif
@if (!empty($formData['domain']))
<p><strong>Domain:</strong> {{ $formData['domain'] }}</p>
@endif
@if (!empty($formData['place']))
<p><strong>Place:</strong> {{ $formData['place'] }}</p>
@endif
<p><strong>Page:</strong> {{ $formData['page'] }}</p>
@if (!empty($formData['service']))  
<p><strong>Service:</strong> {{ $formData['service'] }}</p>
@endif
@if (!empty($formData['research_area']))
<p><strong>Research Area:</strong> {{ $formData['research_area'] }}</p>
@endif
@if (!empty($formData['date']))
<p><strong>Consultation Date:</strong> {{ $formData['date'] }}</p>
@endif
@if (!empty($formData['subject']))
<p><strong>Subject:</strong> {{ $formData['subject'] }}</p>
@endif
@if (!empty($formData['message']))
<p><strong>Message:</strong> {{ $formData['message'] }}</p>
@endif
</body>
</html>