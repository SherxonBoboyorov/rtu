<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\LeadershipController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\MagistracyController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\InternationalController;
use App\Http\Controllers\Admin\OurPartnerController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\TenderController;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\NormController;
use Unisharp\Laravel\LaravelFilemanager\Lfm;




Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
         'slider' => SliderController::class,
         'page' => PageController::class,
         'leadership' => LeadershipController::class,
         'department' => DepartmentController::class,
         'team' => TeamController::class,
         'faculty' => FacultyController::class,
         'vacancy' => VacancyController::class,
         'magistracy' => MagistracyController::class,
         'options' => OptionsController::class,
         'research' => ResearchController::class,
         'international' => InternationalController::class,
         'ourpartner' => OurPartnerController::class,
         'article' => ArticleController::class,
         'tender' => TenderController::class,
         'advantage' => AdvantageController::class,
         'structure' => StructureController::class,
         'norm' => NormController::class
     ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

 });


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
