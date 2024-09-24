<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <!-- using bulma frks-->
     <!-- author: Ike Landong-->
    <h3 class="is-size-4 ml-3">Welcome, <?= htmlspecialchars($_SESSION['username']) ?> </h3>
  <div class="container mt-6">
    <h1 class="is-size-2">Read Sample Article</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, harum sequi laudantium explicabo accusantium iste placeat nemo! Veniam, facilis qui. Quos officiis nemo suscipit, delectus odit omnis voluptatem autem esse velit aliquid, consectetur quis? Officia alias blanditiis exercitationem minus quos!</p>
    <form action="logout.php" method="post">
      <button class="button is-danger mt-5" type="submit" name="logout">Log out</button>
    </form>
  </div>

</body>
</html>
