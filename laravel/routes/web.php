<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// COLLEGAMENTO ROUTE PER HOME 
Route::get('/', function () {
    return view('home');
})->name('pagina_home');

// COLLEGAMENTO ROUTE PER PRODOTTI
Route::get('prodotti', function () {
    
    // Configuro il $data con il database 
    $data = config('dbpasta');

    // Filtro  per tipo di pasta usando il collection e assegno il risultato a delle variabili  
    $collection = collect($data);
    $pasta_lunga = $collection->where('tipo','lunga');
    $pasta_corta = $collection->where('tipo','corta');
    $pasta_cortissima = $collection->where('tipo','cortissima');
    
    // Riassegno le varibili per creare una array d'appoggio 
    $pasta = [
        'pasta' =>[
            'Lunga' => $pasta_lunga,
            'Corta' => $pasta_corta,
            'Cortissima' => $pasta_cortissima
        ]
    ];

        return view('prodotti',$pasta);
})->name('pagina_prodotti');

// COLLEGAMENTO ROUTE PER PRODOTTO
Route::get('/prodotto/{id}', function ($id) {

    // Configuro il $data con il database 
    $data = config('dbpasta');

    // Creo un delle condizioni che soddisfatte inizializzano il risultato della ricerca 
    if( is_numeric($id) && $id >= 0 && $id < count($data)){
        
        // Memorizzo in elemento il risultato della ricarca con id 
        $elemento = $data[$id]; 

        // Riassegno le varibili per creare una array d'appoggio 
        $pasta = [
            'pasta' => $elemento
        ];

        return view('prodotto', $pasta);

    }
    // Se le condizioni non vengono rispettate la pagina restituita sarà una 404 
    else{
        abort('404');
    }

})->name('pagina_prodotto');

// COLLEGAMENTO ROUTE PER CONTATTI
Route::get('contatti', function () {
    return view('contatto');
})->name('pagina_novità');