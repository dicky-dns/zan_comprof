<?php

declare(strict_types=1);

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CharityController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\EnquiryController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\SubCategoryController;
use App\Http\Controllers\Dashboard\UploadController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PabrikController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TurnkeyController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'aboutpage'])->name('about');
Route::get('/kontak', [HomeController::class, 'contactpage'])->name('contact');
Route::get('/artikel', [ArtikelController::class, 'index'])->name('article');
Route::get('/artikel/{slug}', [ArtikelController::class, 'detail'])->name('articledetail');
Route::get('/charity', [CharityController::class, 'index'])->name('charity');
Route::get('/pabrikan', [PabrikController::class, 'pabrikan'])->name('pabrikan');
Route::get('/tim-rnd', [PabrikController::class, 'rnd'])->name('rnd');
Route::get('/quality-control', [PabrikController::class, 'qualitycontrol'])->name('qualitycontrol');
Route::get('/pameran-dagang', [PabrikController::class, 'pameranperdagangan'])->name('pameranperdagangan');
Route::group(['prefix' => 'layanan-turnkey'], function () {
    Route::get('/formulasi-kustom', [TurnkeyController::class, 'customformulation'])->name('customformulation');
    Route::get('/kemasan-khusus', [TurnkeyController::class, 'custompackaging'])->name('custompackaging');
    Route::get('/layanan-desain', [TurnkeyController::class, 'designservices'])->name('designservices');
    Route::get('/produksi', [TurnkeyController::class, 'production'])->name('production');
    Route::get('/layanan-sertifikat', [TurnkeyController::class, 'certificateservices'])->name('certificateservices');
    Route::get('/gudang-logistik', [TurnkeyController::class, 'warehousingshipping'])->name('warehousingshipping');
});
Route::group(['prefix' => 'produk'], function () {
    Route::get('/', [ProdukController::class, 'index'])->name('produk');
    Route::get('/{slug}', [ProdukController::class, 'detail'])->name('produkdetail');
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/{slug}', [ProdukController::class, 'kategori'])->name('kategori');
});
Route::group(['prefix' => 'subkategori'], function () {
    Route::get('/{slug}', [ProdukController::class, 'subkategori'])->name('subkategori');
    Route::get('/{slug}/list', [ProdukController::class, 'listSubKategori'])->name('list-subkategori');
});
Route::post('/addmessage', [HomeController::class, 'addContactMessage'])->name('addmessage');
Route::post('/addenquiry', [ProdukController::class, 'addEnquiryMessage'])->name('addenquiry');
Route::get('/sendmail/{data}', [SendMailController::class, 'sendmail'])->name('sendmail');

Route::group(['prefix' => 'yourpanel'], function () {
    Route::middleware('guest')->group(function () {
        Route::get('/', [AuthController::class, 'index'])->name('login');
    });
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/processlogin', [AuthController::class, 'processlogin'])->name('processlogin');

    Route::post('/media', [UploadController::class, 'uploadImage'])->name('uploadimage');
    Route::middleware('auth')->group(function () {
        Route::group(['prefix' => 'pesan'], function () {
            Route::get('/', [MessageController::class, 'index'])->name('dashboard_pesan');
            Route::get('/datatable', [MessageController::class, 'datatable'])->name('dashboard_pesan_datatable');
            Route::delete('/delete/{id}', [MessageController::class, 'delete'])->name('dashboard_pesan_delete');
            Route::post('/update/{id}', [MessageController::class, 'update'])->name('dashboard_pesan_update');
        });
        Route::group(['prefix' => 'enquiry'], function () {
            Route::get('/', [EnquiryController::class, 'index'])->name('dashboard_enquiry');
            Route::get('/datatable', [EnquiryController::class, 'datatable'])->name('dashboard_enquiry_datatable');
            Route::delete('/delete/{id}', [EnquiryController::class, 'delete'])->name('dashboard_enquiry_delete');
            Route::post('/update/{id}', [EnquiryController::class, 'update'])->name('dashboard_enquiry_update');
        });
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'index'])->name('dashboard_users');
            Route::get('/datatable', [UserController::class, 'datatable'])->name('dashboard_users_datatable');
            Route::post('/add', [UserController::class, 'add'])->name('dashboard_users_add');
            Route::post('/update', [UserController::class, 'update'])->name('dashboard_users_update');
            Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('dashboard_users_delete');
        });
        Route::group(['prefix' => 'artikel'], function () {
            Route::get('/', [ArticleController::class, 'index'])->name('dashboard_artikel');
            Route::get('/datatable', [ArticleController::class, 'datatable'])->name('dashboard_artikel_datatable');
            Route::get('/tambah', [ArticleController::class, 'tambah'])->name('dashboard_artikel_tambah');
            Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('dashboard_artikel_edit');
            Route::post('/add', [ArticleController::class, 'add'])->name('dashboard_artikel_add');
            Route::post('/update', [ArticleController::class, 'update'])->name('dashboard_artikel_update');
            Route::delete('/delete/{id}', [ArticleController::class, 'delete'])->name('dashboard_artikel_delete');
        });
        Route::group(['prefix' => 'kategori'], function () {
            Route::get('/', [CategoryController::class, 'index'])->name('dashboard_kategori');
            Route::get('/datatable', [CategoryController::class, 'datatable'])->name('dashboard_kategori_datatable');
            Route::get('/tambah', [CategoryController::class, 'tambah'])->name('dashboard_kategori_tambah');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('dashboard_kategori_edit');
            Route::post('/add', [CategoryController::class, 'add'])->name('dashboard_kategori_add');
            Route::post('/update', [CategoryController::class, 'update'])->name('dashboard_kategori_update');
            Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('dashboard_kategori_delete');
        });
        Route::group(['prefix' => 'subkategori'], function () {
            Route::get('/', [SubCategoryController::class, 'index'])->name('dashboard_subkategori');
            Route::get('/datatable', [SubCategoryController::class, 'datatable'])->name('dashboard_subkategori_datatable');
            Route::get('/selectcategory', [SubCategoryController::class, 'selectcategory'])->name('dashboard_subkategori_selectcategory');
            Route::post('/add', [SubCategoryController::class, 'add'])->name('dashboard_subkategori_add');
            Route::post('/update', [SubCategoryController::class, 'update'])->name('dashboard_subkategori_update');
            Route::delete('/delete/{id}', [SubCategoryController::class, 'delete'])->name('dashboard_subkategori_delete');
        });
        Route::group(['prefix' => 'produk'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('dashboard_produk');
            Route::get('/datatable', [ProductController::class, 'datatable'])->name('dashboard_produk_datatable');
            Route::get('/selectsubcategory', [ProductController::class, 'selectsubcategory'])->name('dashboard_produk_selectsubcategory');
            Route::get('/tambah', [ProductController::class, 'tambah'])->name('dashboard_produk_tambah');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('dashboard_produk_edit');
            Route::post('/add', [ProductController::class, 'add'])->name('dashboard_produk_add');
            Route::post('/update', [ProductController::class, 'update'])->name('dashboard_produk_update');
            Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('dashboard_produk_delete');
            Route::get('/export-template-produk', [ProductController::class, 'exportTemplate'])->name('export_template_produk');
            Route::post('/import-produk', [ProductController::class, 'importProduk'])->name('import_produk');
        });
    });
});
