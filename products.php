<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="Images\logo2.ico">
      <title>Rhearts</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link href="CSS/login.css" rel="stylesheet">
    </head>
    <style>
      body.no-scroll {
        overflow: hidden;
        position: fixed;
        width: 100%;
      }

      img.img-fluid {
        filter: url(#character-shadow);
      }

      .btn {
        border: 3px solid #810CA8;
        width: 15em;
        height: 5em;
        border-radius: 3em;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;
        background: #1C1A1C;
        cursor: pointer;
        transition: all 450ms ease-in-out;
      }

      .sparkle {
        fill: white;
        transition: all 800ms ease;
      }

      .text {
        font-weight: 600;
        color: white;
        font-size: medium;
      }

      .btn:hover {
        background: white;
        color: #B931FC;
        border: 3px solid #810CA8;
        box-shadow: 0 0 25px #850F8D;
      }

      .btn:hover .text {
        color: #810CA8;
      }

      .btn:hover .sparkle {
        fill: yellow;
        transform: scale(1.2);
      }

      .main-section-1 h2 {
        font-family: 'Cursive', sans-serif;
        font-size: 2.5rem;
        font-weight: bold;
        color: black;
        margin-bottom: 20px;
      }
    
      .main-section-1 p {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.1rem;
        font-weight: normal;
        line-height: 1.6;
        color: black;
      }

      .custom-button {
        white-space: nowrap;
      }
    </style>
    <body class="no-scroll">
    <nav class="navbar navbar-expand-lg bg-custom header-container">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="Images/Transparent_2.png" alt="Your Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav justify-content-center text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
          </ul>
          <button class="custom-button" onclick="location.href='login.php'">
            Log in
            <div class="star-1">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                version="1.1"
                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                viewBox="0 0 784.11 815.53"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs></defs>
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                  <path
                    class="fil0"
                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                  ></path>
                </g>
              </svg>
            </div>
            <div class="star-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                version="1.1"
                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                viewBox="0 0 784.11 815.53"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs></defs>
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                  <path
                    class="fil0"
                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                  ></path>
                </g>
              </svg>
            </div>
            <div class="star-3">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                version="1.1"
                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                viewBox="0 0 784.11 815.53"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs></defs>
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                  <path
                    class="fil0"
                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                  ></path>
                </g>
              </svg>
            </div>
            <div class="star-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                version="1.1"
                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                viewBox="0 0 784.11 815.53"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs></defs>
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                  <path
                    class="fil0"
                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                  ></path>
                </g>
              </svg>
            </div>
            <div class="star-5">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                version="1.1"
                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                viewBox="0 0 784.11 815.53"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs></defs>
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                  <path
                    class="fil0"
                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                  ></path>
                </g>
              </svg>
            </div>
            <div class="star-6">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                xml:space="preserve"
                version="1.1"
                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                viewBox="0 0 784.11 815.53"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <defs></defs>
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                  <path
                    class="fil0"
                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                  ></path>
                </g>
              </svg>
            </div>
          </button>
        </div>
      </div>
    </nav>

    <main class="container mt-5 main-section-1">
      <div class="row">
        <div class="col-md-6">
          <img src="Images/Kuromi.png" class="img-fluid" alt="Large Picture">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2 class="text-center">Exclusive Access</h2>
          <p class="text-center">You need an account to access this section. Please log in or register to continue.</p>
          <div class="d-flex justify-content-center">
            <a href="login.php" class="btn">
              <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
              </svg>
              <span class="text">Create Account</span>
            </a>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-custom text-center py-3 mt-4">
      <p>&copy; 2024 Rhearts. All rights reserved.</p>
    </footer>

    <script src="JS/navbar.js"></script>
    <script src="JS/email.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-2lDkE1+jw8teGH2GAYfFczwz+G4C17cDgK2svLdiHbOu4B+F/HAuhXFtlQm8f3x" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <svg width="0" height="0">
      <filter id="character-shadow">
        <feDropShadow dx="10" dy="10" stdDeviation="5" flood-color="rgba(0, 0, 0, 0.5)" />
      </filter>
    </svg>
  </body>
</html>
