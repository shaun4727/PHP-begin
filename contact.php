<?php
require "functions.php";
$heading = "Contact Us";
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

           

require "views/contact.view.php";