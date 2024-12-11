<?php
// Include the data file from assets/data/
include '../assets/data/servicesData.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibhuti Solutions</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <section class="services" id="services">
        <div class="text-center">
            <h1 class="abouthone">Our Services</h1>
            <img class="imgline" src="https://bibhutisolutions.com.au/assets/images/line.png" alt="line">
        </div>

        <div class="container mt-5">
        <div class="row">
            <!-- Left Section -->
          <!-- Left Section -->
<div class="col-md-4 shadow p-4 rounded">
    <h3 class="mx-auto text-left">Why Choose Us</h3>
    <p class="servicespara fs-6 fw-light">
        Bibhuti Solutions is a registered web development business in Australia founded with an aim to give complete IT solutions. <br> <br>
        As one of the web development companies with a wider array of IT solutions, we help solve big challenges that are technically complex and mission-critical...
    </p>
    <a href="#" class="d-block text-left fs-6" style="max-width: 150px; text-decoration: none; color:#C52903">Read More</a>
</div>
            <!-- Right Section -->
            <div class="col-md-8">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php
foreach ($servicesData as $service) {
    echo "
    <div class='col'>
        <div class='card h-100 shadow p-3 service-card'>
            <div class='card-body'>
                <a href='{$service['link']}' class='text-decoration-none' style='color: inherit;'>
                    <h5 class='serviceshfive card-title'>
                        <i class='{$service['icon']} me-2'></i> 
                        {$service['title']}
                    </h5>
                </a>
                <p class='card-text fs-7'>{$service['description']}</p>
            </div>
        </div>
    </div>
    ";
}
?>



    </div>
</div>

        </div>
    </div>

    </section>

</body>

</html>