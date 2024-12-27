<?php
// Judul Halaman
$title = "Welcome to my page bebe";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f9c5d1, #fef8ec);
            color: #333;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            animation: fadeIn 1.5s ease;
        }

        h1 {
            font-size: 2.5rem;
            color: #ff6f61;
            margin-bottom: 10px;
        }

        p {
            font-size: 1rem;
            margin: 10px 0 20px;
        }

        .cartoon-img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        button {
            background: #ff9a8b;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #ff6f61;
        }

        .gif-container {
            display: none; /* Awalnya tersembunyi */
            margin-top: 20px;
        }

        .gif-container img {
            width: 200px;
            border-radius: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?>!</h1>
        <img src="https://cdn.freecodecamp.org/curriculum/cat-photo-app/relaxing-cat.jpg" alt="Relaxing Cat" class="cartoon-img">
        <p>Halo</p>
        <button onclick="toggleGif()">Click Me!</button>
        
        <!-- Container untuk GIF -->
        <div class="gif-container" id="gifContainer">
            <img src="https://media.giphy.com/media/3oriO0OEd9QIDdllqo/giphy.gif" alt="Cute GIF">
        </div>
    </div>

    <script>
        function toggleGif() {
            // Ambil elemen container GIF
            const gifContainer = document.getElementById('gifContainer');

            // Cek status display elemen GIF dan toggle
            if (gifContainer.style.display === 'none' || gifContainer.style.display === '') {
                gifContainer.style.display = 'block';
                launchConfetti(); // Panggil fungsi confetti
            } else {
                gifContainer.style.display = 'none';
            }
        }

        // Fungsi untuk memunculkan confetti
        function launchConfetti() {
            const duration = 3 * 1000; // Waktu confetti dalam milidetik
            const end = Date.now() + duration;

            (function frame() {
                // Efek confetti
                confetti({
                    particleCount: 5,
                    spread: 100,
                    origin: { y: 0.6 } // Mulai dari tengah layar
                });

                if (Date.now() < end) {
                    requestAnimationFrame(frame);
                }
            })();
        }
    </script>
</body>
</html>
