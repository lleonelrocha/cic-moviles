<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 27/08/2015
 * Time: 11:30 AM
 */
$module = 'funciones';
$controller = 'PersonasFuncionController';


Route::get($module ,['middleware' => ['roles:'.$module.'-listar'] , 'as'=>$module ,'uses'=>$controller. '@getIndex']);
Route::get($module.'Nuevo',['middleware' => ['roles:'.$module.'-agregar'] , 'as'=>$module.'Nuevo','uses'=>$controller. '@getNew']);
Route::get($module.'Editar/{id}',   ['middleware' => ['roles:'.$module.'-editar'] , 'as'=>$module.'Edit','uses'=>$controller. '@getEdit']);
Route::get($module.'Borrar/{id}',   ['middleware' => ['roles:'.$module.'-eliminar'] , 'as'=>$module.'Delete','uses'=>$controller. '@getDelete']);
Route::post($module.'NuevoPost',  ['as' => $module.'PostNuevo','uses'=>$controller. '@postNew']);
Route::post($module.'EditarPost/{id}', ['as' => $module.'PostEdit','uses'=>$controller. '@postEdit']);
