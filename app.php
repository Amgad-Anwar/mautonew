<?php
define("PATH",__DIR__ . '/');
define("URL","http://127.168.1.1/elhawra/");

define("DB_SERVERNAME","localhost");
define("DB_USERNAME","m-auto");
define("DB_PASSWORD","NtiTU28Xfo0bc2KFpuoy");
define("DB_NAME","m_auto");

//require_once (PATH . "classes/session.php");
//require_once (PATH . "classes/request.php");
//require_once (PATH . "classes/db.php");
//require_once (PATH . "classes/Models/team.php");
//require_once (PATH . "classes/Models/service.php");
//require_once (PATH . "classes/Models/blog.php");
//require_once (PATH . "classes/Validation/validationRule.php");
//require_once (PATH . "classes/Validation/email.php");
//require_once (PATH . "classes/Validation/max.php");
//require_once (PATH . "classes/Validation/numeric.php");
//require_once (PATH . "classes/Validation/required.php");
//require_once (PATH . "classes/Validation/str.php");
//require_once (PATH . "classes/Validation/validator.php");

require_once (PATH . "vendor/autoload.php");

use Elhawra\Classes\Request;
use Elhawra\Classes\Session;

$request = new Request();
$session = new Session();
