<?php

// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';

/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/
	$config = [
		'db' => [
			'user' => 'root',
			'db_name' => 'aquva',
			'password' => ''
		]
	];
require_once dirname(__FILE__).'/core/db.php';
require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор
