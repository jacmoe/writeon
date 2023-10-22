

<?php



//app/routes/_app.php

app()->group('/admin',[ 'middleware'=>function(){Midd::is_autorized("/admin",AuthHelper::is_role(Roles::ADMIN));},function () {



        app()->get('/', function () {echo 'admin';});

        app()->get('/hello', "AdminCn@hello");



    //var_dump(AuthHelper::is_role(Roles::ADMIN),AuthHelper::roles());

}]);



app()->group('/user',[ 'middleware'=>function(){Midd::is_autorized("/user",AuthHelper::is_role(Roles::USER));},function () {

    app()->get('/', "UserCn@index");

    app()->get('/profil', "UserCn@profil");

    app()->get('/vesti', "UserCn@vesti");

}]);



app()->group('/novinar',[ 'middleware'=>function(){Midd::is_autorized("/novinar",AuthHelper::is_role(Roles::NOVINAR));},function () {

    app()->get('/', function () {echo 'novinar';});

    app()->all('/vesti', "NovinarCn@vesti");

    app()->all('/vest/{op}/{id?}', "NovinarCn@vest");

    //app()->get('/vest/{op}', "NovinarCn@vest");

}]);