<?php

session_start();

// Only logged-in users may see this page.
if (!isset($_SESSION['user_id'])) {
    header("location: login.html");
    exit();
}

$username = htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8');

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="dark">

  <meta
    http-equiv="Content-Security-Policy"
    content="default-src 'none'; style-src 'self'; script-src 'self'; base-uri 'none'; form-action 'self'"
  >

  <title>XSS Training Lab (Secured)</title>

  <link rel="stylesheet" href="style.css">
</head>

<body class="lab">
  <div class="wrap">
    <div class="topbar">
      <span>Signed in as <?php echo $username; ?></span>
      <a href="logout.php" class="logout">Logout</a>
    </div>

    <h1>Secure XSS Training Lab</h1>

    <p class="notice">
      This page treats all user input as text. It does not intentionally execute JavaScript.
    </p>

    <section>
      <h2>Safe reflected-style output <span class="tag">Safe</span></h2>

      <form id="messageForm">
        <label for="messageInput">Enter a message:</label>
        <textarea id="messageInput" maxlength="500"></textarea>
        <button type="submit">Display message</button>
      </form>

      <div id="messageOutput" class="output"></div>
    </section>

    <section>
      <h2>Safe DOM output <span class="tag">Safe</span></h2>

      <label for="domInput">Enter another message:</label>
      <textarea id="domInput" maxlength="500"></textarea>
      <button id="domButton" type="button">Display safely</button>

      <div id="domOutput" class="output"></div>
    </section>

    <section>
      <h2>Validation result</h2>

      <p id="status" class="status" role="status">
        No input has been submitted yet.
      </p>
    </section>
  </div>

  <script src="app.js" defer></script>
</body>
</html>
