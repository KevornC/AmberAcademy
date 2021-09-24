<!doctype html>
<html lang="en">
<head>
<!-- Tailwind -->
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>

    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

    .font-family-karla {
        font-family: karla;
    }

</style>  
  <!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

</head>
<body>

    <h3>Dear {{$details['student_name']}},</h3>
    <p> Congratulations! Your application have been approved for our {{strtolower($details['student_course'])}} course.</p>
    <p> Kindly proceed to making your payments on our platform or you may visit the on campus cashier to make payments.</p><br>
    <p> For any queries please contact us at instituteja@gmail.com or call our office line at 876-456-7770.</p>
    <p> Thank you for choosing Amber Heart Academy!</p>
        <br><br>
        <p> Mrs. Shantoya Calewis</p>
        <p> Director</p>
        <p> Student Registeration</p>
    </p>
</html>