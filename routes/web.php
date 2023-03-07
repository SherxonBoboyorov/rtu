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
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\AdmissionCategoryController;
use App\Http\Controllers\Admin\AdmissionInController;
use App\Http\Controllers\Admin\AdmissionMasterController;
use App\Http\Controllers\Admin\AdmissionMasterCategoryController;
use App\Http\Controllers\Admin\AdmissionMasterInController;
use App\Http\Controllers\Admin\EveningEdicationController;
use App\Http\Controllers\Admin\EveningEdicationCategoryController;
use App\Http\Controllers\Admin\EveningEdicationInController;
use App\Http\Controllers\Admin\EdicationController;
use App\Http\Controllers\Admin\EdicationCategoryController;
use App\Http\Controllers\Admin\EdicationInController;
use Unisharp\Laravel\LaravelFilemanager\Lfm;


//front
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AcademicCouncilController;
use App\Http\Controllers\Front\AdmissionBachelorController;
use App\Http\Controllers\Front\AdmissionsMasterController;
use App\Http\Controllers\Front\BachelorsController;
use App\Http\Controllers\Front\BachelorShowController;
use App\Http\Controllers\Front\CareersController;
use App\Http\Controllers\Front\DepartmentsStaffController;
use App\Http\Controllers\Front\DormitorysController;
use App\Http\Controllers\Front\EReceptionController;
use App\Http\Controllers\Front\EventsController;
use App\Http\Controllers\Front\ForeignPartnersController;
use App\Http\Controllers\Front\InternationalsController;
use App\Http\Controllers\Front\JobVacancyController;
use App\Http\Controllers\Front\LabourUnionController;
use App\Http\Controllers\Front\LeaderController;
use App\Http\Controllers\Front\MastersController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\NormStatmentController;
use App\Http\Controllers\Front\PartnersController;
use App\Http\Controllers\Front\ResearchsController;
use App\Http\Controllers\Front\ScholarshipsController;
use App\Http\Controllers\Front\StructurController;
use App\Http\Controllers\Front\StudentStudioController;
use App\Http\Controllers\Front\TeamInController;
use App\Http\Controllers\Front\TransfersController;
use App\Http\Controllers\Front\TuitionFeesController;

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
         'statistic' => StatisticController::class,
         'admission' => AdmissionController::class,
         'admissioncategory' => AdmissionCategoryController::class,
         'admissionin' => AdmissionInController::class,
         'admissionmaster' => AdmissionMasterController::class,
         'admissionmastercategory' => AdmissionMasterCategoryController::class,
         'admissionmasterin' => AdmissionMasterInController::class,
         'eveningedication' => EveningEdicationController::class,
         'eveningedicationcategory' => EveningEdicationCategoryController::class,
         'eveningedicationin' => EveningEdicationInController::class,
         'edication' => EdicationController::class,
         'edicationcategory' => EdicationCategoryController::class,
         'edicationin' => EdicationInController::class
     ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [IndexController::class, 'homepage'])->name('/');
        Route::get('about', [AboutController::class, 'about'])->name('about');
        Route::get('leadership', [LeaderController::class, 'leadership'])->name('leadership');
        Route::get('structure', [StructurController::class, 'structure'])->name('structure');
        Route::get('normsstatements', [NormStatmentController::class, 'list'])->name('normsstatements');
        Route::get('normsstatements/{slug}', [NormStatmentController::class, 'show'])->name('normsstatement');
        Route::get('departmentsstaffs', [DepartmentsStaffController::class, 'list'])->name('departmentsstaffs');
        Route::get('departmentsstaffs/{slug}', [DepartmentsStaffController::class, 'show'])->name('departmentsstaff');
        Route::get('team/{slug}', [TeamInController::class, 'team'])->name('team');
        Route::get('labourUnion', [LabourUnionController::class, 'labourUnion'])->name('labourUnion');
        Route::get('partners', [PartnersController::class, 'partners'])->name('partners');
        Route::get('jobVacancies', [JobVacancyController::class, 'jobVacancies'])->name('jobVacancies');
        Route::get('E_reception', [EReceptionController::class, 'E_reception'])->name('E_reception');
        Route::post('save_quotecallbackSave', [EReceptionController::class, 'quotecallbackSave'])->name('quotecallbackSave');
        Route::get('academicCouncil', [AcademicCouncilController::class, 'academicCouncil'])->name('academicCouncil');
        Route::get('bachelor', [BachelorsController::class, 'bachelor'])->name('bachelor');
        Route::get('bachelorins/{id?}', [BachelorsController::class, 'list'])->name('bachelorins');
        Route::get('bachelor_in/{id}', [BachelorShowController::class, 'bachelor_in'])->name('bachelor_in');
        Route::get('master', [MastersController::class, 'master'])->name('master');
        Route::get('masterins/{id?}', [MastersController::class, 'list'])->name('masterins');
        Route::get('master_in/{id}', [MastersController::class, 'master_in'])->name('master_in');
        Route::get('transfer', [TransfersController::class, 'transfer'])->name('transfer');
        Route::get('tuitionfees', [TuitionFeesController::class, 'tuitionfees'])->name('tuitionfees');
        Route::get('scholarships', [ScholarshipsController::class, 'scholarships'])->name('scholarships');
        Route::get('international', [InternationalsController::class, 'international'])->name('international');
        Route::get('research', [ResearchsController::class, 'research'])->name('research');
        Route::get('studentsStudio', [StudentStudioController::class, 'studentsStudio'])->name('studentsStudio');
        Route::get('careers', [CareersController::class, 'careers'])->name('careers');
        Route::get('dormitory', [DormitorysController::class, 'dormitory'])->name('dormitory');
        Route::get('foreignPartners', [ForeignPartnersController::class, 'foreignPartners'])->name('foreignPartners');
        Route::get('articles', [NewsController::class, 'list'])->name('articles');
        Route::post('articles/ajax-filter', [NewsController::class, 'ajaxFilterList'])->name('articles.ajaxFilter');
        Route::get('articles/{slug}', [NewsController::class, 'show'])->name('article');
        Route::get('events', [EventsController::class, 'list'])->name('events');
        Route::get('events/{slug}', [EventsController::class, 'show'])->name('event');
        Route::get('bachelor', [BachelorsController::class, 'bachelor'])->name('bachelor');
        Route::get('admissionBachelor/{id?}', [AdmissionBachelorController::class, 'admissionBachelor'])->name('admissionBachelor');
        Route::get('admissionMaster', [AdmissionsMasterController::class, 'admissionMaster'])->name('admissionMaster');
 });


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
