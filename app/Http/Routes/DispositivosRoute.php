<?php
$module = 'dispositivos';
$controller = 'DispositivosController';


Route::get($module,                 ['middleware' => ['roles:'.$module.'-listar'] , 'as'=>'dispositivos','uses'=> $controller. '@getIndex']);
Route::get($module.'Editar/{id}',   ['middleware' => ['roles:'.$module.'-editar'] , 'as'=>'dispositivoEdit','uses'=>$controller. '@getEdit']);
Route::get($module.'Nuevo',         ['middleware' => ['roles:'.$module.'-agregar'] , 'as'=>'dispositivosNuevo','uses'=>$controller. '@getNew']);
Route::get($module.'Borrar/{id}',   ['middleware' => ['roles:'.$module.'-eliminar'] , 'as'=>'dispositivosDelete','uses'=>$controller. '@getDelete']);

Route::post($module.'EditarPost/{id}', ['as' => $module.'PostEdit','uses'=>$controller. '@postEdit']);
Route::post($module.'NuevoPost',       ['as' => $module.'PostNuevo','uses'=>$controller. '@postNew']);


?>