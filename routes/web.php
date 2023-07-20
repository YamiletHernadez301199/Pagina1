<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\Paginas;
use Illuminate\Support\Facades\Route;

Route::get("/",[Paginas::class, "index"]);
Route::get("/correo",[Paginas::class, "correo"]);
Route::get("/datos",[Paginas::class, "datos"]);
Route::get("/titulo",[Paginas::class, "titulo"]);
Route::get("/pagina",[PaginaController::class, "index"]);