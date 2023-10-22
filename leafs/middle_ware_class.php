<?php

/**

 * Created by PhpStorm.

 * User: Milos Pavic <naucnik1977 at yahoo.com>

 * Date: 21.9.2023.

 * Time: 07:00

 */



namespace App\Helpers;



class Midd

{

    public static function is_autorized($path,$isRole){

        //if there is no role your are log'd out

        if($isRole){

            

        }else{

            Notify::set("Niste ulogovani ili nemate pristup ovoj zoni: <b>$path</b>","Zabranjena zona","error");

            header('location: /auth/login');

            exit();

        }

        return true;

    }



}



