<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SanggarProfile;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

   public function boot(): void
{
    // Tambahkan baris ini untuk memaksa HTTPS
    if (config('app.env') !== 'local') {
        URL::forceScheme('https');
    }

    // Share $siteProfil ke semua view
    View::composer('*', function ($view) {
        try {
            $view->with('siteProfil', SanggarProfile::getInstance());
        } catch (\Exception $e) {
            // tabel belum ada (sebelum migrate), abaikan
        }
    });
}
}
