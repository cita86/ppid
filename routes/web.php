<?php

use App\Http\Controllers\Auth\Login;
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


/*Route::name('auth.')
    ->prefix('auth')
    ->group(function(){
        Route::get('login', [Login::class, 'viewFormLogin'])->name('login');
    });*/

Route::get('/debug', [App\Http\Controllers\Debug\GenerateImagePDF::class, 'debug']);

Route::name('ppid.')
    ->group(function () {
        //Modul Landing.Slider
        Route::get('/', [App\Http\Controllers\Landing\LandingIndex::class, 'viewLanding'])
            ->name('landing');

        //Modul Search
        Route::get('/search', [App\Http\Controllers\Landing\LandingSearch::class, 'viewSearch'])
            ->name('search');

        //Modul Profil dan Regulasi
        Route::get('/profil', [App\Http\Controllers\Regulasi\RegulasiLanding::class, 'viewProfilRegulasi'])
            ->name('profilregulasi');

        //Modul Prosedur
        Route::get('/prosedur', [App\Http\Controllers\Prosedur\ProsedurLanding::class, 'viewProsedur'])
            ->name('prosedur');

        //Modul FAQ
        Route::get('/faq', [App\Http\Controllers\FAQ\FAQLanding::class, 'viewFAQ'])
            ->name('faq');

        //Modul Kantor Vertikal
        Route::get('/kantor_vertikal', [App\Http\Controllers\Vertikal\VertikalLanding::class, 'viewVertikal'])
            ->name('kantor_vertikal');
    });

Route::name('cms.')
    ->prefix('cms')
    ->group(function () {
        Route::get('/', function () {
            return view('cms.layouts.template');
        });

        // Module FAQ
        Route::name('faq.')
            ->prefix('faq')
            ->group(function () {

                // Module Index FAQ
                Route::get('/', [App\Http\Controllers\FAQ\FAQIndex::class, 'viewFAQIndex'])
                    ->name('index');
                Route::get('/search', [App\Http\Controllers\FAQ\FAQIndex::class, 'viewFAQIndex'])
                    ->name('search');

                // Module Create FAQ
                Route::get('/create', [App\Http\Controllers\FAQ\FAQCreate::class, 'viewFormCreateFAQ'])
                    ->name('create');
                Route::post('/create/submit', [App\Http\Controllers\FAQ\FAQCreate::class, 'onSubmitFormCreateFAQ'])
                    ->name('create.submit');

                // Module Edit FAQ
                Route::get('/update/{idFAQ}', [App\Http\Controllers\FAQ\FAQUpdate::class, 'viewFormUpdateFAQ'])
                    ->name('update');
                Route::post('/update/submit', [App\Http\Controllers\FAQ\FAQUpdate::class, 'onSubmitFormUpdateFAQ'])
                    ->name('update.submit');

                // Module Delete FAQ
                Route::post('/delete/{idFAQ}', [App\Http\Controllers\FAQ\FAQDelete::class, 'onSubmitDeleteFAQ'])
                    ->name('delete');
            });

        // Module Regulasi
        Route::name('regulasi.')
            ->prefix('regulasi')
            ->group(function () {

                // Module Index Regulasi
                Route::get('/', [App\Http\Controllers\Regulasi\RegulasiIndex::class, 'viewRegulasiIndex'])
                    ->name('index');
                Route::get('/search', [App\Http\Controllers\Regulasi\RegulasiIndex::class, 'viewRegulasiIndex'])
                    ->name('search');

                // Module Create Regulasi
                Route::get('/create', [App\Http\Controllers\Regulasi\RegulasiCreate::class, 'viewFormCreateRegulasi'])
                    ->name('create');
                Route::post('/create/submit', [App\Http\Controllers\Regulasi\RegulasiCreate::class, 'onSubmitFormCreateRegulasi'])
                    ->name('create.submit');

                // Module Edit Regulasi
                Route::get('/update/{idRegulasi}', [App\Http\Controllers\Regulasi\RegulasiUpdate::class, 'viewFormUpdateRegulasi'])
                    ->name('update');
                Route::post('/update/submit', [App\Http\Controllers\Regulasi\RegulasiUpdate::class, 'onSubmitFormUpdateRegulasi'])
                    ->name('update.submit');

                // Module Delete Regulasi
                Route::post('/delete/{idRegulasi}', [App\Http\Controllers\Regulasi\RegulasiDelete::class, 'onSubmitDeleteRegulasi'])
                    ->name('delete');
            });

        // Module Slider
        Route::name('slider.')
            ->prefix('slider')
            ->group(function () {

                // Module Index Slider
                Route::get('/', [App\Http\Controllers\Slider\SliderIndex::class, 'viewSliderIndex'])
                    ->name('index');
                Route::get('/search', [App\Http\Controllers\Slider\SliderIndex::class, 'viewSliderIndex'])
                    ->name('search');

                // Module Create Slider
                Route::get('/create', [App\Http\Controllers\Slider\SliderCreate::class, 'viewFormCreateSlider'])
                    ->name('create');
                Route::post('/create/submit', [App\Http\Controllers\Slider\SliderCreate::class, 'onSubmitFormCreateSlider'])
                    ->name('create.submit');

                // Module Edit Slider
                Route::get('/update/{idSlider}', [App\Http\Controllers\Slider\SliderUpdate::class, 'viewFormUpdateSlider'])
                    ->name('update');
                Route::post('/update/submit', [App\Http\Controllers\Slider\SliderUpdate::class, 'onSubmitFormUpdateSlider'])
                    ->name('update.submit');

                // Module Delete Slider
                Route::post('/delete/{idSlider}', [App\Http\Controllers\Slider\SliderDelete::class, 'onSubmitDeleteSlider'])
                    ->name('delete');
            });

        // Module Informasi PPID
        Route::name('informasi.')
            ->prefix('informasi')
            ->group(function () {

                // Module Index Informasi PPID
                Route::get('/', [App\Http\Controllers\Informasi\InformasiIndex::class, 'viewInformasiIndex'])
                    ->name('index');
                Route::get('/search', [App\Http\Controllers\Informasi\InformasiIndex::class, 'viewInformasiIndex'])
                    ->name('search');

                Route::name('file.')
                    ->prefix('file')
                    ->group(function () {

                        // Module Index Daftar File
                        Route::get('/{idInformasi}', [App\Http\Controllers\Informasi\File\FileIndex::class, 'viewFileIndex'])
                            ->name('index');

                        // Module Create File
                        Route::post('/create/submit', [App\Http\Controllers\Informasi\File\FileCreate::class, 'onSubmitFormCreateFile'])
                            ->name('create.submit');

                        // Module Edit File
                        Route::post('/update/submit', [App\Http\Controllers\Informasi\File\FileUpdate::class, 'onSubmitFormUpdateFile'])
                            ->name('update.submit');

                        // Module Delete File
                        Route::post('/delete/{idFile}', [App\Http\Controllers\Informasi\File\FileDelete::class, 'onSubmitDeleteFile'])
                            ->name('delete');
                    });

                // Module Create Informasi PPID
                Route::get('/create', [App\Http\Controllers\Informasi\InformasiCreate::class, 'viewFormCreateInformasi'])
                    ->name('create');
                Route::post('/create/submit', [App\Http\Controllers\Informasi\InformasiCreate::class, 'onSubmitFormCreateInformasi'])
                    ->name('create.submit');

                // Module Edit Informasi PPID
                Route::get('/update/{idInformasi}', [App\Http\Controllers\Informasi\InformasiUpdate::class, 'viewFormUpdateInformasi'])
                    ->name('update');
                Route::post('/update/submit', [App\Http\Controllers\Informasi\InformasiUpdate::class, 'onSubmitFormUpdateInformasi'])
                    ->name('update.submit');

                // Module Delete Informasi PPID
                Route::post('/delete/{idInformasi}', [App\Http\Controllers\Informasi\InformasiDelete::class, 'onSubmitDeleteInformasi'])
                    ->name('delete');
            });

        // Module Prosedur Informasi PPID
        Route::name('prosedur.')
            ->prefix('prosedur')
            ->group(function () {

                // Module Index Prosedur Informasi PPID
                Route::get('/', [App\Http\Controllers\Prosedur\ProsedurIndex::class, 'viewProsedurIndex'])
                    ->name('index');
                Route::get('/search', [App\Http\Controllers\Prosedur\ProsedurIndex::class, 'viewProsedurIndex'])
                    ->name('search');

                // Module Create Prosedur Informasi PPID
                Route::get('/create', [App\Http\Controllers\Prosedur\ProsedurCreate::class, 'viewFormCreateProsedur'])
                    ->name('create');
                Route::post('/create/submit', [App\Http\Controllers\Prosedur\ProsedurCreate::class, 'onSubmitFormCreateProsedur'])
                    ->name('create.submit');

                // Module Edit Prosedur Informasi PPID
                Route::get('/update/{idProsedur}', [App\Http\Controllers\Prosedur\ProsedurUpdate::class, 'viewFormUpdateProsedur'])
                    ->name('update');
                Route::post('/update/submit', [App\Http\Controllers\Prosedur\ProsedurUpdate::class, 'onSubmitFormUpdateProsedur'])
                    ->name('update.submit');

                // Module Delete Prosedur Informasi PPID
                Route::post('/delete/{idProsedur}', [App\Http\Controllers\Prosedur\ProsedurDelete::class, 'onSubmitDeleteProsedur'])
                    ->name('delete');
            });

        // Module Halaman Statis
        Route::name('halaman_statis.')
            ->prefix('halamanstatis')
            ->group(function () {

                // Module Index Halaman Statis
                Route::get('/', [App\Http\Controllers\Halamanstatis\HalamanstatisIndex::class, 'viewHalamanstatisIndex'])
                    ->name('index');
                Route::get('/search', [App\Http\Controllers\Halamanstatis\HalamanstatisIndex::class, 'viewHalamanstatisIndex'])
                    ->name('search');

                // Module Create Halaman Statis
                Route::get('/create', [App\Http\Controllers\Halamanstatis\HalamanstatisCreate::class, 'viewFormCreateHalamanstatis'])
                    ->name('create');
                Route::post('/create/submit', [App\Http\Controllers\Halamanstatis\HalamanstatisCreate::class, 'onSubmitFormCreateHalamanstatis'])
                    ->name('create.submit');

                // Module Edit Halaman Statis
                Route::get('/update/{idHalamanstatis}', [App\Http\Controllers\Halamanstatis\HalamanstatisUpdate::class, 'viewFormUpdateHalamanstatis'])
                    ->name('update');
                Route::post('/update/submit', [App\Http\Controllers\Halamanstatis\HalamanstatisUpdate::class, 'onSubmitFormUpdateHalamanstatis'])
                    ->name('update.submit');

                // Module Delete Halaman Statis
                Route::post('/delete/{idHalamanstatis}', [App\Http\Controllers\Halamanstatis\HalamanstatisDelete::class, 'onSubmitDeleteHalamanstatis'])
                    ->name('delete');
            });

        // Module Kantor Vertikal
        Route::name('vertikal.')
            ->prefix('vertikal')
            ->group(function () {

                // Module Index Kantor Vertikal
                Route::get('/', [App\Http\Controllers\Vertikal\VertikalIndex::class, 'viewVertikalIndex'])
                    ->name('index');
                Route::get('/search', [App\Http\Controllers\Vertikal\VertikalIndex::class, 'viewVertikalIndex'])
                    ->name('search');

                Route::name('detail_kantor.')
                    ->prefix('detail_kantor')
                    ->group(function () {

                        // Module Index Detail Kantor
                        Route::get('/{idVertikal}', [App\Http\Controllers\Vertikal\DetailKantor\DetailKantorIndex::class, 'viewDetailKantorIndex'])
                            ->name('index');

                        // Module Create Detail Kantor
                        Route::post('/create/submit', [App\Http\Controllers\Vertikal\DetailKantor\DetailKantorCreate::class, 'onSubmitFormCreateDetailKantor'])
                            ->name('create.submit');

                        // Module Edit Detail Kantor
                        Route::post('/update/submit', [App\Http\Controllers\Vertikal\DetailKantor\DetailKantorUpdate::class, 'onSubmitFormUpdateDetailKantor'])
                            ->name('update.submit');

                        // Module Delete Detail Kantor
                        Route::post('/delete/{idDetailKantor}', [App\Http\Controllers\Vertikal\DetailKantor\DetailKantorDelete::class, 'onSubmitDeleteDetailKantor'])
                            ->name('delete');
                    });

                // Module Create Kantor Vertikal
                Route::get('/create', [App\Http\Controllers\Vertikal\VertikalCreate::class, 'viewFormCreateVertikal'])
                    ->name('create');
                Route::post('/create/submit', [App\Http\Controllers\Vertikal\VertikalCreate::class, 'onSubmitFormCreateVertikal'])
                    ->name('create.submit');

                // Module Edit Kantor Vertikal
                Route::get('/update/{idVertikal}', [App\Http\Controllers\Vertikal\VertikalUpdate::class, 'viewFormUpdateVertikal'])
                    ->name('update');
                Route::post('/update/submit', [App\Http\Controllers\Vertikal\VertikalUpdate::class, 'onSubmitFormUpdateVertikal'])
                    ->name('update.submit');

                // Module Delete Kantor Vertikal
                Route::post('/delete/{idVertikal}', [App\Http\Controllers\Vertikal\VertikalDelete::class, 'onSubmitDeleteVertikal'])
                    ->name('delete');
            });
    });
