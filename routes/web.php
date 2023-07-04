<?php
use Illuminate\Support\Facades\Route;
//rota base

    Route::get('/',[\App\Http\Controllers\homeController::class,"home"])->name("site.home");
    Route::get('/sobre-nos',[\App\Http\Controllers\sobreController::class,"sobre"])->name("site.sobre");
    Route::get('/contato',[\App\Http\Controllers\contatoController::class,"contato"])->name("site.contato");



//rotas privadas
Route::prefix('/app')->group(function(){
    Route::get('/login',[\App\Http\Controllers\loginController::class,"login"])->name("app.login");
    Route::get('/clientes',[\App\Http\Controllers\clientesController::class,"clientes"])->name("app.clientes");
    ///Route::get('/produtos',[\App\Http\Controllers\produtosController::class,"produtos"])->name("app.produtos");
    Route::get('/produtos/{nome}/{preco}',[\App\Http\Controllers\produtosController::class,"produtos"]);
    Route::get('/fornecedores',[\App\Http\Controllers\fornecedoresController::class,"fornecedores"])->name("app.fornecedores");
});


//fallback
    Route::fallback(function(){
        return view('404');
    });

