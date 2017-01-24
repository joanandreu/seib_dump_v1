<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/Frontend/');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    includeRouteFiles(__DIR__.'/Backend/');
});




Route::get('backend/tipoEntidads', ['as'=> 'backend.tipoEntidads.index', 'uses' => 'Backend\TipoEntidadController@index']);
Route::post('backend/tipoEntidads', ['as'=> 'backend.tipoEntidads.store', 'uses' => 'Backend\TipoEntidadController@store']);
Route::get('backend/tipoEntidads/create', ['as'=> 'backend.tipoEntidads.create', 'uses' => 'Backend\TipoEntidadController@create']);
Route::put('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.update', 'uses' => 'Backend\TipoEntidadController@update']);
Route::patch('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.update', 'uses' => 'Backend\TipoEntidadController@update']);
Route::delete('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.destroy', 'uses' => 'Backend\TipoEntidadController@destroy']);
Route::get('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.show', 'uses' => 'Backend\TipoEntidadController@show']);
Route::get('backend/tipoEntidads/{tipoEntidads}/edit', ['as'=> 'backend.tipoEntidads.edit', 'uses' => 'Backend\TipoEntidadController@edit']);


Route::get('backend/tipoEnvios', ['as'=> 'backend.tipoEnvios.index', 'uses' => 'Backend\TipoEnvioController@index']);
Route::post('backend/tipoEnvios', ['as'=> 'backend.tipoEnvios.store', 'uses' => 'Backend\TipoEnvioController@store']);
Route::get('backend/tipoEnvios/create', ['as'=> 'backend.tipoEnvios.create', 'uses' => 'Backend\TipoEnvioController@create']);
Route::put('backend/tipoEnvios/{tipoEnvios}', ['as'=> 'backend.tipoEnvios.update', 'uses' => 'Backend\TipoEnvioController@update']);
Route::patch('backend/tipoEnvios/{tipoEnvios}', ['as'=> 'backend.tipoEnvios.update', 'uses' => 'Backend\TipoEnvioController@update']);
Route::delete('backend/tipoEnvios/{tipoEnvios}', ['as'=> 'backend.tipoEnvios.destroy', 'uses' => 'Backend\TipoEnvioController@destroy']);
Route::get('backend/tipoEnvios/{tipoEnvios}', ['as'=> 'backend.tipoEnvios.show', 'uses' => 'Backend\TipoEnvioController@show']);
Route::get('backend/tipoEnvios/{tipoEnvios}/edit', ['as'=> 'backend.tipoEnvios.edit', 'uses' => 'Backend\TipoEnvioController@edit']);


Route::get('backend/tipoMaterials', ['as'=> 'backend.tipoMaterials.index', 'uses' => 'Backend\TipoMaterialController@index']);
Route::post('backend/tipoMaterials', ['as'=> 'backend.tipoMaterials.store', 'uses' => 'Backend\TipoMaterialController@store']);
Route::get('backend/tipoMaterials/create', ['as'=> 'backend.tipoMaterials.create', 'uses' => 'Backend\TipoMaterialController@create']);
Route::put('backend/tipoMaterials/{tipoMaterials}', ['as'=> 'backend.tipoMaterials.update', 'uses' => 'Backend\TipoMaterialController@update']);
Route::patch('backend/tipoMaterials/{tipoMaterials}', ['as'=> 'backend.tipoMaterials.update', 'uses' => 'Backend\TipoMaterialController@update']);
Route::delete('backend/tipoMaterials/{tipoMaterials}', ['as'=> 'backend.tipoMaterials.destroy', 'uses' => 'Backend\TipoMaterialController@destroy']);
Route::get('backend/tipoMaterials/{tipoMaterials}', ['as'=> 'backend.tipoMaterials.show', 'uses' => 'Backend\TipoMaterialController@show']);
Route::get('backend/tipoMaterials/{tipoMaterials}/edit', ['as'=> 'backend.tipoMaterials.edit', 'uses' => 'Backend\TipoMaterialController@edit']);


Route::get('backend/tipoRecursoHumanos', ['as'=> 'backend.tipoRecursoHumanos.index', 'uses' => 'Backend\TipoRecursoHumanoController@index']);
Route::post('backend/tipoRecursoHumanos', ['as'=> 'backend.tipoRecursoHumanos.store', 'uses' => 'Backend\TipoRecursoHumanoController@store']);
Route::get('backend/tipoRecursoHumanos/create', ['as'=> 'backend.tipoRecursoHumanos.create', 'uses' => 'Backend\TipoRecursoHumanoController@create']);
Route::put('backend/tipoRecursoHumanos/{tipoRecursoHumanos}', ['as'=> 'backend.tipoRecursoHumanos.update', 'uses' => 'Backend\TipoRecursoHumanoController@update']);
Route::patch('backend/tipoRecursoHumanos/{tipoRecursoHumanos}', ['as'=> 'backend.tipoRecursoHumanos.update', 'uses' => 'Backend\TipoRecursoHumanoController@update']);
Route::delete('backend/tipoRecursoHumanos/{tipoRecursoHumanos}', ['as'=> 'backend.tipoRecursoHumanos.destroy', 'uses' => 'Backend\TipoRecursoHumanoController@destroy']);
Route::get('backend/tipoRecursoHumanos/{tipoRecursoHumanos}', ['as'=> 'backend.tipoRecursoHumanos.show', 'uses' => 'Backend\TipoRecursoHumanoController@show']);
Route::get('backend/tipoRecursoHumanos/{tipoRecursoHumanos}/edit', ['as'=> 'backend.tipoRecursoHumanos.edit', 'uses' => 'Backend\TipoRecursoHumanoController@edit']);


Route::get('backend/tipoRecursos', ['as'=> 'backend.tipoRecursos.index', 'uses' => 'Backend\TipoRecursoController@index']);
Route::post('backend/tipoRecursos', ['as'=> 'backend.tipoRecursos.store', 'uses' => 'Backend\TipoRecursoController@store']);
Route::get('backend/tipoRecursos/create', ['as'=> 'backend.tipoRecursos.create', 'uses' => 'Backend\TipoRecursoController@create']);
Route::put('backend/tipoRecursos/{tipoRecursos}', ['as'=> 'backend.tipoRecursos.update', 'uses' => 'Backend\TipoRecursoController@update']);
Route::patch('backend/tipoRecursos/{tipoRecursos}', ['as'=> 'backend.tipoRecursos.update', 'uses' => 'Backend\TipoRecursoController@update']);
Route::delete('backend/tipoRecursos/{tipoRecursos}', ['as'=> 'backend.tipoRecursos.destroy', 'uses' => 'Backend\TipoRecursoController@destroy']);
Route::get('backend/tipoRecursos/{tipoRecursos}', ['as'=> 'backend.tipoRecursos.show', 'uses' => 'Backend\TipoRecursoController@show']);
Route::get('backend/tipoRecursos/{tipoRecursos}/edit', ['as'=> 'backend.tipoRecursos.edit', 'uses' => 'Backend\TipoRecursoController@edit']);


Route::get('backend/tipoRiesgos', ['as'=> 'backend.tipoRiesgos.index', 'uses' => 'Backend\TipoRiesgoController@index']);
Route::post('backend/tipoRiesgos', ['as'=> 'backend.tipoRiesgos.store', 'uses' => 'Backend\TipoRiesgoController@store']);
Route::get('backend/tipoRiesgos/create', ['as'=> 'backend.tipoRiesgos.create', 'uses' => 'Backend\TipoRiesgoController@create']);
Route::put('backend/tipoRiesgos/{tipoRiesgos}', ['as'=> 'backend.tipoRiesgos.update', 'uses' => 'Backend\TipoRiesgoController@update']);
Route::patch('backend/tipoRiesgos/{tipoRiesgos}', ['as'=> 'backend.tipoRiesgos.update', 'uses' => 'Backend\TipoRiesgoController@update']);
Route::delete('backend/tipoRiesgos/{tipoRiesgos}', ['as'=> 'backend.tipoRiesgos.destroy', 'uses' => 'Backend\TipoRiesgoController@destroy']);
Route::get('backend/tipoRiesgos/{tipoRiesgos}', ['as'=> 'backend.tipoRiesgos.show', 'uses' => 'Backend\TipoRiesgoController@show']);
Route::get('backend/tipoRiesgos/{tipoRiesgos}/edit', ['as'=> 'backend.tipoRiesgos.edit', 'uses' => 'Backend\TipoRiesgoController@edit']);


Route::get('backend/tipoTelefonos', ['as'=> 'backend.tipoTelefonos.index', 'uses' => 'Backend\TipoTelefonoController@index']);
Route::post('backend/tipoTelefonos', ['as'=> 'backend.tipoTelefonos.store', 'uses' => 'Backend\TipoTelefonoController@store']);
Route::get('backend/tipoTelefonos/create', ['as'=> 'backend.tipoTelefonos.create', 'uses' => 'Backend\TipoTelefonoController@create']);
Route::put('backend/tipoTelefonos/{tipoTelefonos}', ['as'=> 'backend.tipoTelefonos.update', 'uses' => 'Backend\TipoTelefonoController@update']);
Route::patch('backend/tipoTelefonos/{tipoTelefonos}', ['as'=> 'backend.tipoTelefonos.update', 'uses' => 'Backend\TipoTelefonoController@update']);
Route::delete('backend/tipoTelefonos/{tipoTelefonos}', ['as'=> 'backend.tipoTelefonos.destroy', 'uses' => 'Backend\TipoTelefonoController@destroy']);
Route::get('backend/tipoTelefonos/{tipoTelefonos}', ['as'=> 'backend.tipoTelefonos.show', 'uses' => 'Backend\TipoTelefonoController@show']);
Route::get('backend/tipoTelefonos/{tipoTelefonos}/edit', ['as'=> 'backend.tipoTelefonos.edit', 'uses' => 'Backend\TipoTelefonoController@edit']);


Route::get('backend/plans', ['as'=> 'backend.plans.index', 'uses' => 'Backend\PlanController@index']);
Route::post('backend/plans', ['as'=> 'backend.plans.store', 'uses' => 'Backend\PlanController@store']);
Route::get('backend/plans/create', ['as'=> 'backend.plans.create', 'uses' => 'Backend\PlanController@create']);
Route::put('backend/plans/{plans}', ['as'=> 'backend.plans.update', 'uses' => 'Backend\PlanController@update']);
Route::patch('backend/plans/{plans}', ['as'=> 'backend.plans.update', 'uses' => 'Backend\PlanController@update']);
Route::delete('backend/plans/{plans}', ['as'=> 'backend.plans.destroy', 'uses' => 'Backend\PlanController@destroy']);
Route::get('backend/plans/{plans}', ['as'=> 'backend.plans.show', 'uses' => 'Backend\PlanController@show']);
Route::get('backend/plans/{plans}/edit', ['as'=> 'backend.plans.edit', 'uses' => 'Backend\PlanController@edit']);


Route::get('backend/gruposAvisos', ['as'=> 'backend.gruposAvisos.index', 'uses' => 'Backend\GruposAvisoController@index']);
Route::post('backend/gruposAvisos', ['as'=> 'backend.gruposAvisos.store', 'uses' => 'Backend\GruposAvisoController@store']);
Route::get('backend/gruposAvisos/create', ['as'=> 'backend.gruposAvisos.create', 'uses' => 'Backend\GruposAvisoController@create']);
Route::put('backend/gruposAvisos/{gruposAvisos}', ['as'=> 'backend.gruposAvisos.update', 'uses' => 'Backend\GruposAvisoController@update']);
Route::patch('backend/gruposAvisos/{gruposAvisos}', ['as'=> 'backend.gruposAvisos.update', 'uses' => 'Backend\GruposAvisoController@update']);
Route::delete('backend/gruposAvisos/{gruposAvisos}', ['as'=> 'backend.gruposAvisos.destroy', 'uses' => 'Backend\GruposAvisoController@destroy']);
Route::get('backend/gruposAvisos/{gruposAvisos}', ['as'=> 'backend.gruposAvisos.show', 'uses' => 'Backend\GruposAvisoController@show']);
Route::get('backend/gruposAvisos/{gruposAvisos}/edit', ['as'=> 'backend.gruposAvisos.edit', 'uses' => 'Backend\GruposAvisoController@edit']);


Route::get('backend/gruposCnaes', ['as'=> 'backend.gruposCnaes.index', 'uses' => 'Backend\GruposCnaeController@index']);
Route::post('backend/gruposCnaes', ['as'=> 'backend.gruposCnaes.store', 'uses' => 'Backend\GruposCnaeController@store']);
Route::get('backend/gruposCnaes/create', ['as'=> 'backend.gruposCnaes.create', 'uses' => 'Backend\GruposCnaeController@create']);
Route::put('backend/gruposCnaes/{gruposCnaes}', ['as'=> 'backend.gruposCnaes.update', 'uses' => 'Backend\GruposCnaeController@update']);
Route::patch('backend/gruposCnaes/{gruposCnaes}', ['as'=> 'backend.gruposCnaes.update', 'uses' => 'Backend\GruposCnaeController@update']);
Route::delete('backend/gruposCnaes/{gruposCnaes}', ['as'=> 'backend.gruposCnaes.destroy', 'uses' => 'Backend\GruposCnaeController@destroy']);
Route::get('backend/gruposCnaes/{gruposCnaes}', ['as'=> 'backend.gruposCnaes.show', 'uses' => 'Backend\GruposCnaeController@show']);
Route::get('backend/gruposCnaes/{gruposCnaes}/edit', ['as'=> 'backend.gruposCnaes.edit', 'uses' => 'Backend\GruposCnaeController@edit']);


Route::get('backend/webs', ['as'=> 'backend.webs.index', 'uses' => 'Backend\WebController@index']);
Route::post('backend/webs', ['as'=> 'backend.webs.store', 'uses' => 'Backend\WebController@store']);
Route::get('backend/webs/create', ['as'=> 'backend.webs.create', 'uses' => 'Backend\WebController@create']);
Route::put('backend/webs/{webs}', ['as'=> 'backend.webs.update', 'uses' => 'Backend\WebController@update']);
Route::patch('backend/webs/{webs}', ['as'=> 'backend.webs.update', 'uses' => 'Backend\WebController@update']);
Route::delete('backend/webs/{webs}', ['as'=> 'backend.webs.destroy', 'uses' => 'Backend\WebController@destroy']);
Route::get('backend/webs/{webs}', ['as'=> 'backend.webs.show', 'uses' => 'Backend\WebController@show']);
Route::get('backend/webs/{webs}/edit', ['as'=> 'backend.webs.edit', 'uses' => 'Backend\WebController@edit']);


Route::get('backend/emails', ['as'=> 'backend.emails.index', 'uses' => 'Backend\EmailController@index']);
Route::post('backend/emails', ['as'=> 'backend.emails.store', 'uses' => 'Backend\EmailController@store']);
Route::get('backend/emails/create', ['as'=> 'backend.emails.create', 'uses' => 'Backend\EmailController@create']);
Route::put('backend/emails/{emails}', ['as'=> 'backend.emails.update', 'uses' => 'Backend\EmailController@update']);
Route::patch('backend/emails/{emails}', ['as'=> 'backend.emails.update', 'uses' => 'Backend\EmailController@update']);
Route::delete('backend/emails/{emails}', ['as'=> 'backend.emails.destroy', 'uses' => 'Backend\EmailController@destroy']);
Route::get('backend/emails/{emails}', ['as'=> 'backend.emails.show', 'uses' => 'Backend\EmailController@show']);
Route::get('backend/emails/{emails}/edit', ['as'=> 'backend.emails.edit', 'uses' => 'Backend\EmailController@edit']);


Route::get('backend/funcionCargos', ['as'=> 'backend.funcionCargos.index', 'uses' => 'Backend\FuncionCargoController@index']);
Route::post('backend/funcionCargos', ['as'=> 'backend.funcionCargos.store', 'uses' => 'Backend\FuncionCargoController@store']);
Route::get('backend/funcionCargos/create', ['as'=> 'backend.funcionCargos.create', 'uses' => 'Backend\FuncionCargoController@create']);
Route::put('backend/funcionCargos/{funcionCargos}', ['as'=> 'backend.funcionCargos.update', 'uses' => 'Backend\FuncionCargoController@update']);
Route::patch('backend/funcionCargos/{funcionCargos}', ['as'=> 'backend.funcionCargos.update', 'uses' => 'Backend\FuncionCargoController@update']);
Route::delete('backend/funcionCargos/{funcionCargos}', ['as'=> 'backend.funcionCargos.destroy', 'uses' => 'Backend\FuncionCargoController@destroy']);
Route::get('backend/funcionCargos/{funcionCargos}', ['as'=> 'backend.funcionCargos.show', 'uses' => 'Backend\FuncionCargoController@show']);
Route::get('backend/funcionCargos/{funcionCargos}/edit', ['as'=> 'backend.funcionCargos.edit', 'uses' => 'Backend\FuncionCargoController@edit']);


Route::get('backend/cargoRecursos', ['as'=> 'backend.cargoRecursos.index', 'uses' => 'Backend\CargoRecursoController@index']);
Route::post('backend/cargoRecursos', ['as'=> 'backend.cargoRecursos.store', 'uses' => 'Backend\CargoRecursoController@store']);
Route::get('backend/cargoRecursos/create', ['as'=> 'backend.cargoRecursos.create', 'uses' => 'Backend\CargoRecursoController@create']);
Route::put('backend/cargoRecursos/{cargoRecursos}', ['as'=> 'backend.cargoRecursos.update', 'uses' => 'Backend\CargoRecursoController@update']);
Route::patch('backend/cargoRecursos/{cargoRecursos}', ['as'=> 'backend.cargoRecursos.update', 'uses' => 'Backend\CargoRecursoController@update']);
Route::delete('backend/cargoRecursos/{cargoRecursos}', ['as'=> 'backend.cargoRecursos.destroy', 'uses' => 'Backend\CargoRecursoController@destroy']);
Route::get('backend/cargoRecursos/{cargoRecursos}', ['as'=> 'backend.cargoRecursos.show', 'uses' => 'Backend\CargoRecursoController@show']);
Route::get('backend/cargoRecursos/{cargoRecursos}/edit', ['as'=> 'backend.cargoRecursos.edit', 'uses' => 'Backend\CargoRecursoController@edit']);


Route::get('backend/cargos', ['as'=> 'backend.cargos.index', 'uses' => 'Backend\CargoController@index']);
Route::post('backend/cargos', ['as'=> 'backend.cargos.store', 'uses' => 'Backend\CargoController@store']);
Route::get('backend/cargos/create', ['as'=> 'backend.cargos.create', 'uses' => 'Backend\CargoController@create']);
Route::put('backend/cargos/{cargos}', ['as'=> 'backend.cargos.update', 'uses' => 'Backend\CargoController@update']);
Route::patch('backend/cargos/{cargos}', ['as'=> 'backend.cargos.update', 'uses' => 'Backend\CargoController@update']);
Route::delete('backend/cargos/{cargos}', ['as'=> 'backend.cargos.destroy', 'uses' => 'Backend\CargoController@destroy']);
Route::get('backend/cargos/{cargos}', ['as'=> 'backend.cargos.show', 'uses' => 'Backend\CargoController@show']);
Route::get('backend/cargos/{cargos}/edit', ['as'=> 'backend.cargos.edit', 'uses' => 'Backend\CargoController@edit']);


Route::get('backend/cnaes', ['as'=> 'backend.cnaes.index', 'uses' => 'Backend\CnaeController@index']);
Route::post('backend/cnaes', ['as'=> 'backend.cnaes.store', 'uses' => 'Backend\CnaeController@store']);
Route::get('backend/cnaes/create', ['as'=> 'backend.cnaes.create', 'uses' => 'Backend\CnaeController@create']);
Route::put('backend/cnaes/{cnaes}', ['as'=> 'backend.cnaes.update', 'uses' => 'Backend\CnaeController@update']);
Route::patch('backend/cnaes/{cnaes}', ['as'=> 'backend.cnaes.update', 'uses' => 'Backend\CnaeController@update']);
Route::delete('backend/cnaes/{cnaes}', ['as'=> 'backend.cnaes.destroy', 'uses' => 'Backend\CnaeController@destroy']);
Route::get('backend/cnaes/{cnaes}', ['as'=> 'backend.cnaes.show', 'uses' => 'Backend\CnaeController@show']);
Route::get('backend/cnaes/{cnaes}/edit', ['as'=> 'backend.cnaes.edit', 'uses' => 'Backend\CnaeController@edit']);


Route::get('backend/grupoPersonas', ['as'=> 'backend.grupoPersonas.index', 'uses' => 'Backend\GrupoPersonasController@index']);
Route::post('backend/grupoPersonas', ['as'=> 'backend.grupoPersonas.store', 'uses' => 'Backend\GrupoPersonasController@store']);
Route::get('backend/grupoPersonas/create', ['as'=> 'backend.grupoPersonas.create', 'uses' => 'Backend\GrupoPersonasController@create']);
Route::put('backend/grupoPersonas/{grupoPersonas}', ['as'=> 'backend.grupoPersonas.update', 'uses' => 'Backend\GrupoPersonasController@update']);
Route::patch('backend/grupoPersonas/{grupoPersonas}', ['as'=> 'backend.grupoPersonas.update', 'uses' => 'Backend\GrupoPersonasController@update']);
Route::delete('backend/grupoPersonas/{grupoPersonas}', ['as'=> 'backend.grupoPersonas.destroy', 'uses' => 'Backend\GrupoPersonasController@destroy']);
Route::get('backend/grupoPersonas/{grupoPersonas}', ['as'=> 'backend.grupoPersonas.show', 'uses' => 'Backend\GrupoPersonasController@show']);
Route::get('backend/grupoPersonas/{grupoPersonas}/edit', ['as'=> 'backend.grupoPersonas.edit', 'uses' => 'Backend\GrupoPersonasController@edit']);


Route::get('backend/horarioCargos', ['as'=> 'backend.horarioCargos.index', 'uses' => 'Backend\HorarioCargosController@index']);
Route::post('backend/horarioCargos', ['as'=> 'backend.horarioCargos.store', 'uses' => 'Backend\HorarioCargosController@store']);
Route::get('backend/horarioCargos/create', ['as'=> 'backend.horarioCargos.create', 'uses' => 'Backend\HorarioCargosController@create']);
Route::put('backend/horarioCargos/{horarioCargos}', ['as'=> 'backend.horarioCargos.update', 'uses' => 'Backend\HorarioCargosController@update']);
Route::patch('backend/horarioCargos/{horarioCargos}', ['as'=> 'backend.horarioCargos.update', 'uses' => 'Backend\HorarioCargosController@update']);
Route::delete('backend/horarioCargos/{horarioCargos}', ['as'=> 'backend.horarioCargos.destroy', 'uses' => 'Backend\HorarioCargosController@destroy']);
Route::get('backend/horarioCargos/{horarioCargos}', ['as'=> 'backend.horarioCargos.show', 'uses' => 'Backend\HorarioCargosController@show']);
Route::get('backend/horarioCargos/{horarioCargos}/edit', ['as'=> 'backend.horarioCargos.edit', 'uses' => 'Backend\HorarioCargosController@edit']);


Route::get('backend/horarioEntidads', ['as'=> 'backend.horarioEntidads.index', 'uses' => 'Backend\HorarioEntidadController@index']);
Route::post('backend/horarioEntidads', ['as'=> 'backend.horarioEntidads.store', 'uses' => 'Backend\HorarioEntidadController@store']);
Route::get('backend/horarioEntidads/create', ['as'=> 'backend.horarioEntidads.create', 'uses' => 'Backend\HorarioEntidadController@create']);
Route::put('backend/horarioEntidads/{horarioEntidads}', ['as'=> 'backend.horarioEntidads.update', 'uses' => 'Backend\HorarioEntidadController@update']);
Route::patch('backend/horarioEntidads/{horarioEntidads}', ['as'=> 'backend.horarioEntidads.update', 'uses' => 'Backend\HorarioEntidadController@update']);
Route::delete('backend/horarioEntidads/{horarioEntidads}', ['as'=> 'backend.horarioEntidads.destroy', 'uses' => 'Backend\HorarioEntidadController@destroy']);
Route::get('backend/horarioEntidads/{horarioEntidads}', ['as'=> 'backend.horarioEntidads.show', 'uses' => 'Backend\HorarioEntidadController@show']);
Route::get('backend/horarioEntidads/{horarioEntidads}/edit', ['as'=> 'backend.horarioEntidads.edit', 'uses' => 'Backend\HorarioEntidadController@edit']);


Route::get('backend/horarioPersonas', ['as'=> 'backend.horarioPersonas.index', 'uses' => 'Backend\HorarioPersonaController@index']);
Route::post('backend/horarioPersonas', ['as'=> 'backend.horarioPersonas.store', 'uses' => 'Backend\HorarioPersonaController@store']);
Route::get('backend/horarioPersonas/create', ['as'=> 'backend.horarioPersonas.create', 'uses' => 'Backend\HorarioPersonaController@create']);
Route::put('backend/horarioPersonas/{horarioPersonas}', ['as'=> 'backend.horarioPersonas.update', 'uses' => 'Backend\HorarioPersonaController@update']);
Route::patch('backend/horarioPersonas/{horarioPersonas}', ['as'=> 'backend.horarioPersonas.update', 'uses' => 'Backend\HorarioPersonaController@update']);
Route::delete('backend/horarioPersonas/{horarioPersonas}', ['as'=> 'backend.horarioPersonas.destroy', 'uses' => 'Backend\HorarioPersonaController@destroy']);
Route::get('backend/horarioPersonas/{horarioPersonas}', ['as'=> 'backend.horarioPersonas.show', 'uses' => 'Backend\HorarioPersonaController@show']);
Route::get('backend/horarioPersonas/{horarioPersonas}/edit', ['as'=> 'backend.horarioPersonas.edit', 'uses' => 'Backend\HorarioPersonaController@edit']);


Route::get('backend/horarios', ['as'=> 'backend.horarios.index', 'uses' => 'Backend\HorarioController@index']);
Route::post('backend/horarios', ['as'=> 'backend.horarios.store', 'uses' => 'Backend\HorarioController@store']);
Route::get('backend/horarios/create', ['as'=> 'backend.horarios.create', 'uses' => 'Backend\HorarioController@create']);
Route::put('backend/horarios/{horarios}', ['as'=> 'backend.horarios.update', 'uses' => 'Backend\HorarioController@update']);
Route::patch('backend/horarios/{horarios}', ['as'=> 'backend.horarios.update', 'uses' => 'Backend\HorarioController@update']);
Route::delete('backend/horarios/{horarios}', ['as'=> 'backend.horarios.destroy', 'uses' => 'Backend\HorarioController@destroy']);
Route::get('backend/horarios/{horarios}', ['as'=> 'backend.horarios.show', 'uses' => 'Backend\HorarioController@show']);
Route::get('backend/horarios/{horarios}/edit', ['as'=> 'backend.horarios.edit', 'uses' => 'Backend\HorarioController@edit']);


Route::get('backend/localizacions', ['as'=> 'backend.localizacions.index', 'uses' => 'Backend\LocalizacionController@index']);
Route::post('backend/localizacions', ['as'=> 'backend.localizacions.store', 'uses' => 'Backend\LocalizacionController@store']);
Route::get('backend/localizacions/create', ['as'=> 'backend.localizacions.create', 'uses' => 'Backend\LocalizacionController@create']);
Route::put('backend/localizacions/{localizacions}', ['as'=> 'backend.localizacions.update', 'uses' => 'Backend\LocalizacionController@update']);
Route::patch('backend/localizacions/{localizacions}', ['as'=> 'backend.localizacions.update', 'uses' => 'Backend\LocalizacionController@update']);
Route::delete('backend/localizacions/{localizacions}', ['as'=> 'backend.localizacions.destroy', 'uses' => 'Backend\LocalizacionController@destroy']);
Route::get('backend/localizacions/{localizacions}', ['as'=> 'backend.localizacions.show', 'uses' => 'Backend\LocalizacionController@show']);
Route::get('backend/localizacions/{localizacions}/edit', ['as'=> 'backend.localizacions.edit', 'uses' => 'Backend\LocalizacionController@edit']);


Route::get('backend/materials', ['as'=> 'backend.materials.index', 'uses' => 'Backend\MaterialController@index']);
Route::post('backend/materials', ['as'=> 'backend.materials.store', 'uses' => 'Backend\MaterialController@store']);
Route::get('backend/materials/create', ['as'=> 'backend.materials.create', 'uses' => 'Backend\MaterialController@create']);
Route::put('backend/materials/{materials}', ['as'=> 'backend.materials.update', 'uses' => 'Backend\MaterialController@update']);
Route::patch('backend/materials/{materials}', ['as'=> 'backend.materials.update', 'uses' => 'Backend\MaterialController@update']);
Route::delete('backend/materials/{materials}', ['as'=> 'backend.materials.destroy', 'uses' => 'Backend\MaterialController@destroy']);
Route::get('backend/materials/{materials}', ['as'=> 'backend.materials.show', 'uses' => 'Backend\MaterialController@show']);
Route::get('backend/materials/{materials}/edit', ['as'=> 'backend.materials.edit', 'uses' => 'Backend\MaterialController@edit']);


Route::get('backend/personas', ['as'=> 'backend.personas.index', 'uses' => 'Backend\PersonaController@index']);
Route::post('backend/personas', ['as'=> 'backend.personas.store', 'uses' => 'Backend\PersonaController@store']);
Route::get('backend/personas/create', ['as'=> 'backend.personas.create', 'uses' => 'Backend\PersonaController@create']);
Route::put('backend/personas/{personas}', ['as'=> 'backend.personas.update', 'uses' => 'Backend\PersonaController@update']);
Route::patch('backend/personas/{personas}', ['as'=> 'backend.personas.update', 'uses' => 'Backend\PersonaController@update']);
Route::delete('backend/personas/{personas}', ['as'=> 'backend.personas.destroy', 'uses' => 'Backend\PersonaController@destroy']);
Route::get('backend/personas/{personas}', ['as'=> 'backend.personas.show', 'uses' => 'Backend\PersonaController@show']);
Route::get('backend/personas/{personas}/edit', ['as'=> 'backend.personas.edit', 'uses' => 'Backend\PersonaController@edit']);


Route::get('backend/planAvisos', ['as'=> 'backend.planAvisos.index', 'uses' => 'Backend\PlanAvisoController@index']);
Route::post('backend/planAvisos', ['as'=> 'backend.planAvisos.store', 'uses' => 'Backend\PlanAvisoController@store']);
Route::get('backend/planAvisos/create', ['as'=> 'backend.planAvisos.create', 'uses' => 'Backend\PlanAvisoController@create']);
Route::put('backend/planAvisos/{planAvisos}', ['as'=> 'backend.planAvisos.update', 'uses' => 'Backend\PlanAvisoController@update']);
Route::patch('backend/planAvisos/{planAvisos}', ['as'=> 'backend.planAvisos.update', 'uses' => 'Backend\PlanAvisoController@update']);
Route::delete('backend/planAvisos/{planAvisos}', ['as'=> 'backend.planAvisos.destroy', 'uses' => 'Backend\PlanAvisoController@destroy']);
Route::get('backend/planAvisos/{planAvisos}', ['as'=> 'backend.planAvisos.show', 'uses' => 'Backend\PlanAvisoController@show']);
Route::get('backend/planAvisos/{planAvisos}/edit', ['as'=> 'backend.planAvisos.edit', 'uses' => 'Backend\PlanAvisoController@edit']);


Route::get('backend/recursos', ['as'=> 'backend.recursos.index', 'uses' => 'Backend\RecursoController@index']);
Route::post('backend/recursos', ['as'=> 'backend.recursos.store', 'uses' => 'Backend\RecursoController@store']);
Route::get('backend/recursos/create', ['as'=> 'backend.recursos.create', 'uses' => 'Backend\RecursoController@create']);
Route::put('backend/recursos/{recursos}', ['as'=> 'backend.recursos.update', 'uses' => 'Backend\RecursoController@update']);
Route::patch('backend/recursos/{recursos}', ['as'=> 'backend.recursos.update', 'uses' => 'Backend\RecursoController@update']);
Route::delete('backend/recursos/{recursos}', ['as'=> 'backend.recursos.destroy', 'uses' => 'Backend\RecursoController@destroy']);
Route::get('backend/recursos/{recursos}', ['as'=> 'backend.recursos.show', 'uses' => 'Backend\RecursoController@show']);
Route::get('backend/recursos/{recursos}/edit', ['as'=> 'backend.recursos.edit', 'uses' => 'Backend\RecursoController@edit']);


Route::get('backend/telefonos', ['as'=> 'backend.telefonos.index', 'uses' => 'Backend\TelefonoController@index']);
Route::post('backend/telefonos', ['as'=> 'backend.telefonos.store', 'uses' => 'Backend\TelefonoController@store']);
Route::get('backend/telefonos/create', ['as'=> 'backend.telefonos.create', 'uses' => 'Backend\TelefonoController@create']);
Route::put('backend/telefonos/{telefonos}', ['as'=> 'backend.telefonos.update', 'uses' => 'Backend\TelefonoController@update']);
Route::patch('backend/telefonos/{telefonos}', ['as'=> 'backend.telefonos.update', 'uses' => 'Backend\TelefonoController@update']);
Route::delete('backend/telefonos/{telefonos}', ['as'=> 'backend.telefonos.destroy', 'uses' => 'Backend\TelefonoController@destroy']);
Route::get('backend/telefonos/{telefonos}', ['as'=> 'backend.telefonos.show', 'uses' => 'Backend\TelefonoController@show']);
Route::get('backend/telefonos/{telefonos}/edit', ['as'=> 'backend.telefonos.edit', 'uses' => 'Backend\TelefonoController@edit']);


Route::get('backend/entidads', ['as'=> 'backend.entidads.index', 'uses' => 'Backend\EntidadController@index']);
Route::post('backend/entidads', ['as'=> 'backend.entidads.store', 'uses' => 'Backend\EntidadController@store']);
Route::get('backend/entidads/create', ['as'=> 'backend.entidads.create', 'uses' => 'Backend\EntidadController@create']);
Route::put('backend/entidads/{entidads}', ['as'=> 'backend.entidads.update', 'uses' => 'Backend\EntidadController@update']);
Route::patch('backend/entidads/{entidads}', ['as'=> 'backend.entidads.update', 'uses' => 'Backend\EntidadController@update']);
Route::delete('backend/entidads/{entidads}', ['as'=> 'backend.entidads.destroy', 'uses' => 'Backend\EntidadController@destroy']);
Route::get('backend/entidads/{entidads}', ['as'=> 'backend.entidads.show', 'uses' => 'Backend\EntidadController@show']);
Route::get('backend/entidads/{entidads}/edit', ['as'=> 'backend.entidads.edit', 'uses' => 'Backend\EntidadController@edit']);
