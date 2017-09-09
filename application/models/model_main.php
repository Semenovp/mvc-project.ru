<?php

	class Model_Main extends Model
	{

		public function get_data()
		{
			$db = DataBase::getDB(); // Создаём объект базы данных
			$table = $db->select('SELECT * FROM `clients`');
			return $table;
		}

	}
