<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function foo\func;

class StudioController extends Controller
{
    public static function studio(){
        $catalogs=getCatalogsArray();
        $photoes=getPhotesArrayFromCatalogs( $catalogs);
        $dir='storage/img';
        return view('studio',compact('photoes','dir','catalogs'));
    }



    public static function catalog($catalogname){
        if(is_dir('storage/img/'.$catalogname)){
            $dir='storage/img/'.$catalogname;
            $imgs=getPhotoesFromOneCatalog($dir);
        } else{
            return redirect('/');
        }

        $catalogs=getCatalogsArray();
        $photoes=getPhotesArrayFromCatalogs( $catalogs);
        $catname=$catalogname;
        $dir='storage/img';
        return view('studio',compact('photoes','dir','imgs','catalogs','catname'));
    }
}


//----------------------------Functions-----------------------


//====================================================
function getCatalogsArray(){
    $catalogs=array();
    $dir = opendir('storage/img');
    while($file = readdir($dir)) {
        if (is_dir('storage/img/'.$file) && $file != '.' && $file != '..') {
            array_push($catalogs,$file) ;
        }
    }
    closedir($dir);
    return  $catalogs;
}

//====================================================

function getPhotesArrayFromCatalogs($catalogsArray){
    $photoes=array();
    foreach ( $catalogsArray as $cat)  {
        $photoestmp= array_diff( scandir( 'storage/img/'.$cat), array('..', '.'));
        array_push($photoes,array_shift($photoestmp));
    }
    $photoestmp=null;
    return $photoes;
}

//====================================================

function getPhotoesFromOneCatalog($dirToCatalog){
    $imgs= array_diff( scandir( $dirToCatalog), array('..', '.'));
    return  $imgs;
}

//====================================================
function image_resize($imgList,$catalogname)
{
    $photoes=array();
    foreach ($imgList as $img){
    $size = GetImageSize('storage/img/'.$catalogname.'/'.$img);
    if( $size[0]<$size[1]){
        $size[0] = "960";
        $size[1] = "1280";
    }
    else{
        $size[0] = "1280";
        $size[1] = "960";
    }
        array_push($photoes,$img);
    }
   return $photoes;
}
