<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TarefaController;


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


Route::get("/",[TarefaController::class,'list']); //listagem de tarefas 

Route::get('add',[TarefaController::class,'add']);// Tela de adição de uma nova tarefa -> mostrar
Route::post('add',[TarefaController::class,'addAction']);// Ação de Adição de nova tarefa-> enviar 


Route::get('edit/{id}',[TarefaController::class,'edit']);//  Tela de edição de uma nova tarefa
Route::post('edit/{id}',[TarefaController::class,'editAction']); // Ação de edição

Route::get('delete/{id}',[TarefaController::class,'del']);// Ação de deletar

Route::get('marcar/{id}',[TarefaController::class,'done']); //marcar resulvido/não



