<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
});

Route::apiResource('absence_legal', 'API\AbsenceLegalController');
Route::apiResource('reasonabsence', 'API\AbsenceReasonController');
Route::apiResource('accident', 'API\AccidentController');
Route::apiResource('condjoint', 'API\CondjointController');
Route::apiResource('emploi_ant', 'API\EmploisAnterieurController');
Route::apiResource('entreprise', 'API\EntrepriseController');
Route::apiResource('fonction', 'API\FonctionController');
Route::apiResource('instruction', 'API\InstructionController');
Route::apiResource('pays', 'API\PaysListController');
Route::apiResource('permis', 'API\PermisListController');
Route::apiResource('promotion', 'API\PromotionController');
Route::apiResource('quartier', 'API\QuartierController');
Route::apiResource('region', 'API\RegionController');
Route::apiResource('salarie', 'API\SalarieController');
Route::apiResource('sanction', 'API\SanctionController');
Route::apiResource('service', 'API\ServiceController');
Route::apiResource('situation_familial', 'API\SituationFamilialController');
Route::apiResource('suivipro', 'API\SuiviProfessionelController');
Route::apiResource('ville', 'API\VilleController');
Route::apiResource('login', 'API\UserController');
