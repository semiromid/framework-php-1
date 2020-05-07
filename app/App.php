<?php
namespace approot;

use app\config\routing\Routing;





class App
{

	private static $config;



    public function init($config)
    {

    	defined('APP1_DEBUG') or define('APP1_DEBUG', false);
        defined('APP1_ENV') or define('APP1_ENV', 'prod'); 

        $debug = constant("APP1_DEBUG");
        App::setConfig($config);


        // Error log
        $this->errorLog($debug);


        // Debug panel 
        $this->debug_panel($debug, $config);
        

        // Routing
        (new Routing())->init();
    }





    private function errorLog($debug)
    {
		//-----------
		/*
		; display_errors
		;   Default Value: On
		;   Development Value: On
		;   Production Value: Off

		; display_startup_errors
		;   Default Value: Off
		;   Development Value: On
		;   Production Value: Off

		; error_reporting
		;   Default Value: E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
		;   Development Value: E_ALL
		;   Production Value: E_ALL & ~E_DEPRECATED & ~E_STRICT

		; log_errors
		;   Default Value: Off
		;   Development Value: On
		;   Production Value: On
		*/

		if($debug){
			// FOR DEV
			error_reporting(E_ALL);
			ini_set("display_errors", 1);
			ini_set("display_startup_errors", 1);
		}else{
			// FOR PROD
			error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
			ini_set("display_errors", 0);
		}

		ini_set("log_errors", 1);

		$path_log = App::getConfig()["app"]["error_log"];

		$file_create = true;
		if (file_exists($path_log) !== true) {   
			if(fopen($path_log, "w") === false){
				$file_create = false;
				trigger_error("This file 'error_log' could not be created or opened. Path: ".$path_log, E_USER_ERROR);
			}
		}	

		if($file_create === true){
			ini_set("error_log", $path_log);
		}
		//-----------
    }




    private function debug_panel($debug, $config){
    	if(!$debug){
    		return;
    	}

    	(new \approot\debug\AppDebug())->init($config);
    }



    private static function setConfig($config){
    	App::$config = $config;
    }

    public static function getConfig(){
    	return App::$config;
    }

}



