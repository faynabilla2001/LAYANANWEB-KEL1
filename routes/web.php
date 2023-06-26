<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('home');
})->name('home');

use Illuminate\Http\Request;

Route::post('login', function (Request $request) {
    // Proses autentikasi dan validasi login
    // Jika login berhasil, redirect ke halaman home
    return redirect()->route('home');

})->name('login.process');

Route::get('expenses', function () {
    // Logika untuk halaman pengeluaran
    return view('expenses');
})->name('expenses');

Route::get('income', function () {
    // Logika untuk halaman pemasukan
    return view('income');
})->name('income');

Route::get('expenses', function () {
    return view('expenses');
})->name('expenses');

Route::get('income', function () {
    return view('income');
})->name('income');


// Route untuk halaman form
Route::get('/form', function () {
    return view('form');
})->name('form');

// Route untuk menyimpan data dari form
Route::post('/save', function () {
    // Ambil data dari form menggunakan Request
    $input1 = request('input1');
    $input2 = request('input2');
    $input3 = request('input3');
    $input4 = request('input4');

    // Lakukan proses penyimpanan data sesuai kebutuhan

    // Redirect ke halaman lain atau tampilkan pesan sukses
    return redirect()->route('table')->with('success', 'Data saved successfully!');
})->name('save');

use App\Http\Controllers\ReportController;

Route::get('/report/expenses', [ReportController::class, 'expenses'])->name('report.expenses');
Route::get('/report/income', [ReportController::class, 'income'])->name('report.income');

Route::view('/table', 'table')->name('table');
Route::view('/table', 'table')->name('table1');