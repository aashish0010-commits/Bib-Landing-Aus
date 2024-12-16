<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibhuti Solutions</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/contacts.css">
</head>
<body>
    <section class="contact" id ="contact">
    <div class="container py-5">    
        <div class="row">
            <!-- Contact Form -->
            <div class="contact-left col-md-6">
            <h3><span>Get</span> in touch with us!</h3>
                <p>Write a message. We will reply within 24 hours.</p>
                <form action="contact_process.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Submit Message</button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="contact-right col-md-6">
                <h3>Sydney</h3>
                <p><i class="bi bi-geo-alt-fill"></i> Cranbrook, NSW 2749, Australia</p>
                <p><i class="bi bi-envelope-fill"></i> contact@bibhutisolutions.com.au</p>
                <p><i class="bi bi-telephone-fill"></i> 0480 333 779</p>
            </div>
        </div>
    </div>
    </section>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>