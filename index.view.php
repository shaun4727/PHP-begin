

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
  

    <ul>
        <?php foreach($filteredBooks as $book): ?>
        <li><?php echo $book['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>