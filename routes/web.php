<?php

//admin
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\LeadershipController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\MagistracyController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\InternationalController;
use App\Http\Controllers\Admin\OurPartnerController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\NormController;
use App\Http\Controllers\Admin\CouncilController;
use App\Http\Controllers\Admin\LabourController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\BachelorController;
use App\Http\Controllers\Admin\BachelorCategoryController;
use App\Http\Controllers\Admin\BachelorInController;
use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\MasterCategoryController;
use App\Http\Controllers\Admin\MasterInController;
use App\Http\Controllers\Admin\TransferController;
use App\Http\Controllers\Admin\TuitionController;
use App\Http\Controllers\Admin\ScholarshipController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ForeignController;
use App\Http\Controllers\Admin\ForeignPartnerController;
use App\Http\Controllers\Admin\StudentsstudioController;
use App\Http\Controllers\Admin\DormitoryController;
use App\Http\Controllers\Admin\ResearchStatisticController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Front\AboutController;
use Unisharp\Laravel\LaravelFilemanager\Lfm;



//front
use App\Http\Controllers\Front\IndexController;


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
         'vacancy' => VacancyController::class,
         'magistracy' => MagistracyController::class,
         'options' => OptionsController::class,
         'research' => ResearchController::class,
         'international' => InternationalController::class,
         'ourpartner' => OurPartnerController::class,
         'article' => ArticleController::class,
         'advantage' => AdvantageController::class,
         'structure' => StructureController::class,
         'norm' => NormController::class,
         'council' => CouncilController::class,
         'labour' => LabourController::class,
         'partner' => PartnerController::class,
         'bachelor' => BachelorController::class,
         'bachelorcategory' => BachelorCategoryController::class,
         'bachelorin' => BachelorInController::class,
         'master' => MasterController::class,
         'mastercategory' => MasterCategoryController::class,
         'masterin' => MasterInController::class,
         'transfer' => TransferController::class,
         'tuition' => TuitionController::class,
         'scholarship' => ScholarshipController::class,
         'event' => EventController::class,
         'career' => CareerController::class,
         'foreign' => ForeignController::class,
         'foreignpartner' => ForeignPartnerController::class,
         'studentsstudio' => StudentsstudioController::class,
         'dormitory' => DormitoryController::class,
         'researchstatistic' => ResearchStatisticController::class,
         'statistic' => StatisticController::class
     ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [IndexController::class, 'homepage'])->name('/');
        Route::get('about', [AboutController::class, 'about'])->name('about');

 });


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
