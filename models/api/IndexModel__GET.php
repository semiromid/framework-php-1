<?php
declare(strict_types=1);
namespace app\models\api;

use approot\AppModel;

// [1] https://github.com/webmozart/assert

class IndexModel__GET extends AppModel
{


	public $userid;


    function beforeValidation(): void{
    	
        // Sanitize variable
        //----------------

        //----------------        
    }


    public function rules(): array {

    	return [

            ["numeric", 
                ["userid"]
            ],

    	];
    }


    function getData(){
        return [
            "error" => NULL,
            "status" => 200,
            "data" => ["name" => "Marie"],
        ];
    }


    function getErrorModel(){
        return [
            "error" => $this->getError()["message"],
            "status" => 304,
            "data" => NULL,
        ];
    }

}



