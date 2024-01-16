<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <?php
        $books = [
            [
                'name' => 'X',
                'author' => 'Y',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'X',
                'author' => 'Y',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'X',
                'author' => 'Y',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'X',
                'author' => 'Y',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ]
            ];

    ?>

    <ul>
        <?php foreach($books as $book): ?>
        <li><?php echo $book['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>