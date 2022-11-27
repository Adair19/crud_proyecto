<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function publicaciones(){
    $publis = app('firebase.firestore')->database()->collection('publicaciones');
    $docus = $publis->documents();
    foreach($docus as $docu){
        if($docu->exists()){
            //print_r($docu->data()['nombre']);
            return response()->json($docu->data()['nombre']);
        }

    }
}
}
