<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //====================================================
    public static function login(){

        return view('admin.login');
    }

    //====================================================

    public static function register(){
        if($_POST['login']=='' and $_POST['password']==''){
          session(["admin"=>'adm']);
            return view('admin.main');
        }
        else{
            return redirect('/');
        }
    }

    //====================================================

    public static function multiload(){
        if( session()->exists('admin')) {
            $catalogs=array();
            $dir = opendir('storage/img');
            while($file = readdir($dir)) {
                if (is_dir('storage/img/'.$file) && $file != '.' && $file != '..') {
                    array_push($catalogs,$file) ;
                }
            }
            return view('admin.multiupload',compact('catalogs'));
        }
        else{
            return redirect('/');
        }
    }

    //====================================================

    public static function multiupload(Request $request){
        $img =$_FILES['image'];
        if($_POST['folderpath']==''){
            $_POST['folderpath']='tmp';
        }
        if(!empty($img))
        {
            if (!is_dir('storage/img/'.$_POST['folderpath'])) {
                mkdir('storage/img/'.$_POST['folderpath'], 0700);
            }
            $img_desc = reArrayFiles($img);
            foreach($img_desc as $val)
            {
                $newname = date('YmdHis',time()).mt_rand().'.jpg';
                move_uploaded_file($val['tmp_name'],'storage/img/'.$_POST['folderpath'].'/'.$newname);
            }
        }
        else{
            return redirect('/');
        }
        return redirect('/multiload');
    }

//====================================================

    public static function delete(){
        if(! session()->exists('admin')) {
                return redirect('/');
        }

        $catalogs=array();
        $dir = opendir('storage/img');
        while($file = readdir($dir)) {
            if (is_dir('storage/img/'.$file) && $file != '.' && $file != '..') {
                array_push($catalogs,$file) ;
            }
        }

        $dir='storage/img/cars';
        $photoes= array_diff( scandir( $dir), array('..', '.'));
        return view('admin.delete',compact('photoes','dir','catalogs'));
    }


//====================================================

    public static function deleteCatalog($catalog){
        if(! session()->exists('admin')) {
            return redirect('/');
        }
        RDir('storage/img/'.$catalog);
        return redirect('/delete');
    }

    //====================================================

}

//----------------Functions----------------------

//====================================================

 function reArrayFiles($file){
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);

    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}

//====================================================


function RDir( $path ) {
    // если путь существует и это папка
    if ( file_exists( $path ) AND is_dir( $path ) ) {
        // открываем папку
        $dir = opendir($path);
        while ( false !== ( $element = readdir( $dir ) ) ) {
            // удаляем только содержимое папки
            if ( $element != '.' AND $element != '..' )  {
                $tmp = $path . '/' . $element;
                chmod( $tmp, 0777 );
                // если элемент является папкой, то
                // удаляем его используя нашу функцию RDir
                if ( is_dir( $tmp ) ) {
                    RDir( $tmp );
                    // если элемент является файлом, то удаляем файл
                } else {
                    unlink( $tmp );
                }
            }
        }
        // закрываем папку
        closedir($dir);
        // удаляем саму папку
        if ( file_exists( $path ) ) {
            rmdir( $path );
        }
    }
}

//====================================================
