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
                'author' => 'K',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'X',
                'author' => 'M',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'X',
                'author' => 'M',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'X',
                'author' => 'B',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ]
            ];


            function filter($items,$fn){
                $filteredItems = [];

                foreach($items as $item){
                    if($fn($item)){
                        $filteredItems[] = $item;
                    }
                }

                return $filteredItems;
            }

            $filteredBooks = filter($books,function($book){
                return $book['author'] === 'B';
            });

    ?>

    <ul>
        <?php foreach($filteredBooks as $book): ?>
        <li><?php echo $book['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>