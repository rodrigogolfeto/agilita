<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agilita</title>
  <style>
    /* Reset some default styles */
    body,
    h1,
    ul,
    li {
      margin: 0;
      padding: 0;
    }

    /* Add a smooth background gradient and set a font family */
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Style the main content box */
    .content {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 400px;
    }

    /* Style the title */
    h1 {
      margin-bottom: 20px;
      color: #333;
    }

    /* Style the list and links */
    ul {
      list-style-type: none;
    }

    li {
      margin: 10px 0;
    }

    a {
      text-decoration: none;
      color: #2c98f0;
      padding: 5px 8px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    a:hover {
      background-color: #2c98f0;
      color: white;
    }
  </style>
</head>

<body>
  <div class="content">
    <h1>Páginas:</h1>
    <ul>
      <li>Emissora: <a href="http://localhost:8080/emissora.php">Acesse</a></li>
      <li>Radio: <a href="http://localhost:8080/radio.php">Acesse</a></li>
      <li>Site: <a href="http://localhost:8080/site.php">Acesse</a></li>
    </ul>
  </div>
</body>

</html>