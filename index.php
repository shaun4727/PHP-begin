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


            function filterByAuthor($books){
                $filteredBooks = [];

                foreach($books as $book){
                    if($book['author'] === 'M'){
                        $filteredBooks[] = $book;
                    }
                }

                return $filteredBooks;
            }

            

    ?>

    <ul>
        <?php foreach(filterByAuthor($books) as $book): ?>
        <li><?php echo $book['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>