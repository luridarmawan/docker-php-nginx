<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to right, #0077b6, #00b4d8);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    .container {
      max-width: 600px;
      padding: 2rem;
      background-color: rgba(255, 202, 40, 0.95); /* bee yellow with transparency */
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    h1 {
      font-size: 2.5rem;
      color: #002b5b;
      margin-bottom: 1rem;
    }

    p {
      font-size: 1.1rem;
      color: #333;
    }

    .badge {
      display: inline-block;
      background-color: #0077b6;
      color: #fff;
      padding: 0.5rem 1rem;
      border-radius: 999px;
      margin-top: 1.5rem;
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .badge:hover {
      background-color: #005f87;
    }

    .small {
      font-size: 80%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to Your Server</h1>
    <p>Your PHP and Nginx stack is up and running. Start building your web application here.</p>
    <div>
      PHP Version : <span id="php_version"><?php echo phpversion(); ?></span>
      <div class="small"><a href="info.php">PHP Info</a></div>
    </div>
    <a class="badge" href="https://hub.docker.com/r/luri/php-nginx" target="_blank">Docker PHP + Nginx</a>
  </div>
</body>
</html>
