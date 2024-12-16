<?php
// Include the data file from assets/data/
include './assets/data/packagesData.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibhuti Solutions</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <section class="packages" id="packages">
    <div class="text-center">
            <h1 class="abouthone">Our Packages</h1>
            <img class="imgline" src="https://bibhutisolutions.com.au/assets/images/line.png" alt="line">
        </div>

        <div class="container mt-5">
    <div class="row text-center">
        <?php foreach ($packagesData as $plan) : ?>
            <div class="col-md-4">
                <div class="pricing-card">
                    <div class="pricing-card-header"><?php echo $plan['title']; ?></div>
                    <div class="pricing-card-body">
                        <ul class="list-unstyled">
                            <?php foreach ($plan['features'] as $feature) : ?>
                                <li class="feature-item"><?php echo $feature; ?>
                                <h3 class="feature-head"></h3>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="pricing-card-footer">
                        <button class="purchase-btn">PURCHASE</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    </section>

</body>
</html>