<?php 
/* define('', '');*/
ob_start();
session_start();
define('ROOT_PATH', realpath(dirname(__FILE__)));
/* if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){  
    $url = "https://";   
}else{ 
    $url = "http://"; 
}  
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];
$LOCAL = strpos($url, 'localhost') ? 1 : 0;

if($LOCAL){
    define('BASE_URL', 'http://localhost:8080/cyberfox');
    define('HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'cyberfox');
    define("DEMO", true);
}else{
    error_reporting(0);
    define('BASE_URL', 'https://storelad.com');
    define('HOST', 'localhost');
    define('DB_USER', 'storelad_admin');
    define('DB_PASS', 'omo]2R1+4mK6SC');
    define('DB_NAME', 'storelad_main');
    define("DEMO", false);
}
 */
include(ROOT_PATH . '/app/helpers/functions.php');

class APP{
    public $title;
    public $appName;
    public $LOCAL;
    public function __construct($title, $appName)
    {
        $this->title = $title;
        $this->appName = $appName;
        $this->page = strtolower(str_replace(' ', '', $title));
    }

    public function mode($URL){
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){  
            $url = "https://";   
        }else{ 
            $url = "http://"; 
        } 
        $URL = $url . $URL;
        $LOCAL = strpos($URL, 'localhost') ? 1 : 0;
        if($LOCAL){
            define('BASE_URL', 'http://localhost/cyberfox/main');
            define('HOST', 'localhost');
            define('DB_USER', 'root');
            define('DB_PASS', '');
            define('DB_NAME', 'cyberfox');
            define("DEMO", true);
        }else{
            error_reporting(0);
            define('BASE_URL', 'https://storelad.com');
            define('HOST', 'localhost');
            define('DB_USER', 'storelad_admin');
            define('DB_PASS', 'omo]2R1+4mK6SC');
            define('DB_NAME', 'storelad_main');
            define("DEMO", false);
        }
    }
}
