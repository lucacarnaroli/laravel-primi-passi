<!-- da terminale aggiungo un control con il comando 'php artisan make:controller NomeController '-->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StagePageController extends Controller
{
    public function album()
    {
        $arrayCd = [
            [
                'post' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'song' => 'New Jersey',
                'artist' => 'Bon Jovi',
                'year' => 1988,
            ],

            [
                'post' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
                'song' => 'Live at Wembley 86',
                'artist' => 'Queen',
                'year' => 1992,
            ],

            [
                'post' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
                'song' => 'Ten Summoner\'s Tales',
                'artist' => 'Sting',
                'year' => 1993,
            ],

            [
                'post' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
                'song' => 'Steve Gadd band',
                'artist' => 'Steve Gadd band',
                'year' => 2018,
            ],

            [
                'post' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg',
                'song' => 'Brave new World',
                'artist' => 'Iron Maiden',
                'year' => 2000,
            ],

            [
                'post' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
                'song' => 'One more car, one more rider',
                'artist' => 'Eric Clapton',
                'year' => 2002,
            ],

        ];
        return view('views.index', compact('arrayCd'));
    }
}
// utilizzo composer perchè non utilizzo un altra var all'interno di arrayCd, al contrario non avrei utilizzato composer ma la var con il dollaro