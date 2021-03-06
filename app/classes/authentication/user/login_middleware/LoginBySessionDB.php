<?php
declare(strict_types=1);
namespace approot\classes\authentication\user\login_middleware;





/**
* Unrealise
*
*/
class LoginBySessionDB extends \approot\classes\authentication\user\LoginMiddleware
{



}

/*
	
	https://www.php.net/manual/ru/function.session-set-save-handler.php
	https://github.com/php/php-src/blob/master/ext/session/tests/save_handler.inc
	https://stackoverflow.com/questions/53647435/what-is-the-difference-between-sessionhandlerinterfacewrite-and-sessionupdatet

    class PHPSessionXHandler implements SessionHandlerInterface, SessionUpdateTimestampHandlerInterface  {

        private $savePath;


        public function close(){
            // return value should be true for success or false for failure
            // ...
            return true;
        }
        public function destroy($sessionId){
            // return value should be true for success or false for failure
            // ...
            $file = "$this->savePath/sess_$sessionId";
            if (file_exists($file)) {
                unlink($file);
            }

            return true;            
        }
        public function gc($maximumLifetime){
            // return value should be true for success or false for failure
            // ...
        }
        public function open($sessionSavePath, $sessionName){
            // return value should be true for success or false for failure
            $this->savePath = $sessionSavePath;
            if (!is_dir($this->savePath)) {
                if(!mkdir($this->savePath, 0777)){
                    var_dump("===OPEN===");
                    return false;
                }
            }

            return true;            
        }
        public function read($sessionId){
            // return value should be the session data or an empty string
            // ...
            //var_dump("===sessionId===");
            return (string)@file_get_contents("$this->savePath/sess_$sessionId");
        }
        public function write($sessionId, $sessionData){
            // return value should be true for success or false for failure
            // ...
            //var_dump($sessionData);
            //var_dump("===write===");
            return file_put_contents("$this->savePath/sess_$sessionId", $sessionData) === false ? false : true;
            //return true;
        }
        public function create_sid(){
            // available since PHP 5.5.1
            // invoked internally when a new session id is needed
            // no parameter is needed and return value should be the new session id created
            // ...
            //var_dump(session_create_id());
            return session_create_id();
        }

        
        public function validateId($sessionId){
            // implements SessionUpdateTimestampHandlerInterface::validateId()
            // available since PHP 7.0
            // return value should be true if the session id is valid otherwise false
            // if false is returned a new session id will be generated by php internally
            // ...

            var_dump("===validateId===");
            //return false;
            //return true;
        }

        public function updateTimestamp($sessionId, $sessionData){
            // implements SessionUpdateTimestampHandlerInterface::validateId()
            // available since PHP 7.0
            // return value should be true for success or false for failure
            // ...
            //var_dump($sessionId);
            //var_dump($sessionData);
            return true;
        }
        
    }



$handler = new PHPSessionXHandler();
session_set_save_handler($handler, true);
session_start();

$_SESSION['id'] = 777;








//Database
CREATE TABLE `Session` (
  `Session_Id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Session_Expires` datetime NOT NULL,
  `Session_Data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`Session_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
SELECT * FROM mydatabase.Session;

<?php
//inc.session.php

class SysSession implements SessionHandlerInterface
{
    private $link;
   
    public function open($savePath, $sessionName)
    {
        $link = mysqli_connect("server","user","pwd","mydatabase");
        if($link){
            $this->link = $link;
            return true;
        }else{
            return false;
        }
    }
    public function close()
    {
        mysqli_close($this->link);
        return true;
    }
    public function read($id)
    {
        $result = mysqli_query($this->link,"SELECT Session_Data FROM Session WHERE Session_Id = '".$id."' AND Session_Expires > '".date('Y-m-d H:i:s')."'");
        if($row = mysqli_fetch_assoc($result)){
            return $row['Session_Data'];
        }else{
            return "";
        }
    }
    public function write($id, $data)
    {
        $DateTime = date('Y-m-d H:i:s');
        $NewDateTime = date('Y-m-d H:i:s',strtotime($DateTime.' + 1 hour'));
        $result = mysqli_query($this->link,"REPLACE INTO Session SET Session_Id = '".$id."', Session_Expires = '".$NewDateTime."', Session_Data = '".$data."'");
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function destroy($id)
    {
        $result = mysqli_query($this->link,"DELETE FROM Session WHERE Session_Id ='".$id."'");
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function gc($maxlifetime)
    {
        $result = mysqli_query($this->link,"DELETE FROM Session WHERE ((UNIX_TIMESTAMP(Session_Expires) + ".$maxlifetime.") < ".$maxlifetime.")");
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
$handler = new SysSession();
session_set_save_handler($handler, true);
?>

<?php
//page 1
require_once('inc.session.php');

session_start();

$_SESSION['var1'] = "My Portuguese text: SOU Gaucho!";
?>

<?php
//page 2
require_once('inc.session.php');

session_start();

if(isset($_SESSION['var1']){
echo $_SESSION['var1'];
}

*/