<?php
include '../assets/data/ourWorksData.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibhuti Solutions</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/our-works.css">
</head>
<body>
<section class="works" id="our-works">
    <div class="text-center">
        <h1 class="abouthone">Our Works</h1>
        <img class="imgline" src="https://bibhutisolutions.com.au/assets/images/line.png" alt="line">
    </div>
    <div class="container my-5">
        <div class="d-flex justify-content-center mb-4">
            <button type="button" class="btn btn-danger">Website Development</button>
        </div>
        <div class="our-works-cards row row-cols-1 row-cols-md-3 g-4 ">
            <?php foreach ($ourworksData as $project): ?>
            <div class="col">
                <a href="#" class="text-decoration-none">
                    <div class="card">
                        <img src="<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo $project['alt']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $project['title']; ?></h5>
                            <p class="card-text"><?php echo $project['description']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
