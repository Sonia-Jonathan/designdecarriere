<?php
/* Template Name: Page d'attente */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À très vite !</title>
  <style>
    body {
      box-sizing: border-box;
      font-family: "Montserrat", sans-serif;
      background: radial-gradient(circle at center,rgb(87, 50, 125) 0%, #1A0034 100%);
      color: #1A0034;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    .container {
      background: white;
      border-radius: 30px;
      padding: 40px 60px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
      max-width: 600px;
      animation: fadeIn 1s ease forwards;
    }

    h1 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
      font-weight: 800;
      color: #1A0034;
    }

    p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      color: #1A0034;
    }

    a {
      display: inline-block;
      padding: 12px 24px;
      border: 1px solid #1A0034;
      border-radius: 8px;
      font-weight: 700;
      color: white;
      text-decoration: none;
      transition: all 0.3s ease;
      background-color:rgba(255, 0, 255, 0.59);


    }

    a:hover { 
      background-color:rgb(255, 0, 255);

    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Notre site sera disponible bientôt !</h1>
    <p>Il sera en ligne le ✨ <strong>15 mai 2025</strong>. ✨ Merci pour votre patience.</p>
    <a href="https://fluxpositif.com/" target="_blank">Découvrir Flux Positif</a>
  </div>
</body>
</html>
