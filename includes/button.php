<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibhuti Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 10px;
            display: none;
            background-color: #C52903;
            color: white;
            border: none;
            border-radius: 12%;
            width: 40px;
            height: 40px;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .back-to-top:hover {
            background-color: grey;
        }

        .back-to-top i {
            font-size: 24px;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const backToTopButton = document.getElementById("back-to-top");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 200) {
                    backToTopButton.style.display = "flex";
                } else {
                    backToTopButton.style.display = "none";
                }
            });

            backToTopButton.addEventListener("click", function () {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });
        });
    </script>
</head>
<body>
    <?php
    echo '
    <button id="back-to-top" class="back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>
    ';
    ?>
</body>
</html>
