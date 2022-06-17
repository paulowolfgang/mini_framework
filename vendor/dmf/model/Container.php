<?php

	namespace dfm\model;

	use app\Connection;

	class Container
    {
		public static function getModel($model)
        {
			$class = "\\app\\Models\\" . ucfirst($model);

			$connection = Connection::getConnection();

			return new $class($connection);
		}
	}
