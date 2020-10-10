<?php

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
Route::get('chart', 'ChartController@index');
Route::get('gaji', 'GajiController@jumlah');
Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('data_pegawai', function () {
    $halaman = 'data_pegawai';
    return view('pegawai/data_pegawai', compact('halaman'));
});

Route::get('lihat_data_pegawai', 'PegawaiController@lihat_data_pegawai');
Route::get('lihat_data_pegawai2', 'pegawaiController@lihat_data_pegawai2');

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');


Route::get('input_pegawai','PegawaiController@input_pegawai');

Route::get('pegawai/cari', 'PegawaiController@cari');

Route::resource('user', 'UserController');

Route::resource('pegawai', 'PegawaiController');

Route::resource('jabatan', 'JabatanController')->parameters(['jabatan'=>'jabatan']);

Route::resource('gaji', 'GajiController');

Route::get('simpan_data', function(){
    DB::table('pegawai')->insert([
        [
            'nip' => '8121',
            'nama' => 'Risna',
            'tanggal_lahir' => '2000-04-04',
            'jenis_kelamin' => 'L'
        ],
        [
            'nip' => '8122',
            'nama' => 'Dona',
            'tanggal_lahir' => '2000-03-03',
            'jenis_kelamin' => 'L'
        ],
        [
            'nip' => '8123',
            'nama' => 'Putra',
            'tanggal_lahir' => '2000-05-05',
            'jenis_kelamin' => 'L'
        ],
    ]);
});
Route::get('coba_collection', 'PegawaiController@cobaCollection');

Route::get('collection_first', 'PegawaiController@collection_first');

Route::get('collection_last', 'PegawaiController@collection_last');

Route::get('collection_count', 'PegawaiController@collection_count');

Route::get('collection_take', 'PegawaiController@collection_take');

Route::get('collection_pluck', 'PegawaiController@collection_pluck');

Route::get('collection_where', 'PegawaiController@collection_where');

Route::get('collection_wherein', 'PegawaiController@collection_wherein');

Route::get('collection_toarray', 'PegawaiController@collection_toarray');

Route::get('collection_tojson', 'PegawaiController@collection_tojson');

Route::get('date_mutator', 'PegawaiController@date_mutator');

Route::get('email', 'PegawaiController@email');

Route::get('cetak_pdf', 'PegawaiController@cetak_pdf');

Route::get('export_excel', 'PegawaiController@export_excel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
