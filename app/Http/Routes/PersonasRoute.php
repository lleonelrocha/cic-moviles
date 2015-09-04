<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 26/08/2015
 * Time: 12:13 PM
 */
$module = 'personas';
$controller = 'PersonasController';


Route::get($module ,['middleware' => ['roles:'.$module.'-listar'] , 'as'=>$module ,'uses'=>$controller .'@getIndex']);
Route::get($module.'Nuevo',['middleware' => ['roles:'.$module.'-agregar'] , 'as'=>'personasNuevo','uses'=>$controller. '@getNew']);
Route::get($module.'Editar/{id}',   ['middleware' => ['roles:'.$module.'-editar'] , 'as'=>'personasEdit','uses'=>$controller. '@getEdit']);
Route::get($module.'Borrar/{id}',   ['middleware' => ['roles:'.$module.'-eliminar'] , 'as'=>'personasDelete','uses'=>$controller. '@getDelete']);
Route::post($module.'NuevoPost',  ['as' => $module.'PostNuevo','uses'=>$controller. '@postNew']);
Route::post($module.'EditarPost/{id}', ['as' => $module.'PostEdit','uses'=>$controller. '@postEdit']);