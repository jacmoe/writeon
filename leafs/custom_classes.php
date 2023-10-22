1) Create Folder and class.

2) Add to composer.json:

    "autoload": {
        "psr-4": {
            "Db\\": "db/",
            "Lib\\": "lib/",
            "App\\": "app/",
            "Config\\": "config/",
            "Models\\": "models/",
            "Helpers\\": "helpers/",
            "Workers\\": "workers/",
            "Database\\": "database/",
            "App\\Http\\": "app/http/",
            "App\\Utils\\": "app/utils/",
            "App\\Views\\": "app/views/",
            "App\\Models\\": "app/models/",
            "Controllers\\": "controllers/",
            "App\\Scripts\\": "app/scripts/",
            "App\\Workers\\": "app/workers/",
            "App\\Console\\": "app/console/",
            "App\\Helpers\\": "app/helpers/",
            "App\\Services\\": "app/services/",
            "App\\Controllers\\": "app/controllers/",
            "Library\\": "library/"
        }
    },

3) Run composer dump-autoload

4) Create class:

<?php
/*
|---------------------------------------------------------------
| Quick and dirty custom libary test
|---------------------------------------------------------------
*/

namespace Library;

class Str
{
    public $foo = 'leaf';
    public function bar()
    {
        echo $this->foo;
    }
}

5) Use class:

<?php

namespace Controllers;

use Models\Test;
use Library\Str;  // <- Add here

class TestsController extends Controller
{
    public function index()
    {
       //
    }
    
    /*                                                                          
    |---------------------------------------------------------------            
    | Quick and dirty library test                                                
    |---------------------------------------------------------------            
    */       
    public function test()
    {
        $obj = new Str();
        $obj->bar();
    }
}

