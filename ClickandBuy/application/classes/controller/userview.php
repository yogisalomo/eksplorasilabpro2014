<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Userview extends Controller_Application {

	public function action_index() {
        $this->template->content = View::factory('userview/index');
    }

    public function get_tables() {
		$name_of_database = Kohana::$config->load('database.default.connection.database');
		$tables = DB::query(DATABASE::SELECT, 'SHOW TABLES')->execute()->as_array(null, 'Tables_in_' . $name_of_database);
		return $tables;
	}

    public function action_isiPM() {
    	$this->template->content = View::factory('userview/isiPM');
    	$table = 'pm';
    	$_username = Cookie::get('username');
		/*
	    	foreach (DB::select('pengirim','isiPM')
				->from($table)
				->where('username', '=', $_username)
				->execute()
				->as_array() as $arrayPM) 
	    	{
				echo $arrayPM['isiPM']; 
				echo "<br>";
				echo $arrayPM['pengirim'];
				echo "<br>";
			}
		*/
    }
}