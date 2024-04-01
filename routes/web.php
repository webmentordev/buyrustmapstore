<?php

use App\Livewire\Map;
use App\Livewire\Free;
use App\Livewire\Home;
use App\Livewire\Maps;
use App\Livewire\Contact;
use App\Livewire\Uploads;
use App\Livewire\Download;
use App\Livewire\Purchase;
use App\Mail\OrderPending;
use App\Mail\OrderConfirmed;
use Illuminate\Support\Facades\Route;
use App\Livewire\Maps\Listing as MapsList;
use App\Http\Controllers\UploadController;
use App\Livewire\Maps\Create as MapsCreate;
use App\Livewire\Maps\Update as MapsUpdate;

use App\Livewire\Free\Create as FreeMapsCreate;
use App\Livewire\Free\Update as FreeMapsUpdate;
use App\Livewire\Free\Listing as FreeMapsList;

use App\Http\Controllers\DownloadController;
use App\Livewire\PrivacyPolicy;
use App\Livewire\Purchases;
use App\Livewire\TermsOfService;

Route::get('/', Home::class)->name('home');
Route::get('/maps', Maps::class)->name('maps');
Route::get('/free-maps', Free::class)->name('free');
Route::get('/map/{map:slug}', Map::class)->name('map');
Route::get('/contact', Contact::class)->name('contact');

Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacy');
Route::get('/terms-of-service', TermsOfService::class)->name('terms');

Route::get('/status/{status}/{checkout}', Purchase::class);
Route::get('/status/{status}/{checkout}', Purchase::class);

Route::get('/download/file/sha5/{checkout}', Download::class);

Route::post('/download/file/sha5/download/{purchase:checkout_id}', [DownloadController::class, 'download'])
    ->name('download')
    ->middleware(['throttle:5,120']);

Route::post('/download/free-download/{slug}', [DownloadController::class, 'free_download'])
    ->name('free_download')
    ->middleware(['throttle:5,120']);

Route::middleware('auth')->group(function(){
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('/maps/list', MapsList::class)->name('maps.list');
    Route::get('/maps/create', MapsCreate::class)->name('maps.create');
    Route::get('/maps/update/{map:slug}', MapsUpdate::class)->name('maps.update');

    Route::get('/maps/free/list', FreeMapsList::class)->name('freemaps.list');
    Route::get('/maps/free/create', FreeMapsCreate::class)->name('freemaps.create');
    Route::get('/maps/free/update/{slug}', FreeMapsUpdate::class)->name('freemaps.update');

    Route::get('/maps/uploads', Uploads::class)->name('uploads');

    Route::post('upload', [UploadController::class, 'upload'])->name('upload');

    Route::get('purchases', Purchases::class)->name('purchases');
});


require __DIR__.'/auth.php';