<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use exception;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

use Carbon\Carbon;

class FileController extends Controller
{   

    // ////////////////
    // // User index //
    // ////////////////
    public function index()
    {   
        $id = Auth::id();
        $user = User::find($id);
        $expire_date = Carbon::parse($user->activated_at)->addMonth($user->duration);
        return View('user.index')->with('expire_date' , $expire_date);
    }
    /**
     * Get file from storage path.
     *
     * @return ver file
     */
    public function getByfile($file_name)
    {
      try
      {
        return response()->download(storage_path().'/updates/'.$file_name);
    }
    catch (FileNotFoundException $exception)
    {
        die("This file doesn't exists");
    }
}

    /**
     * get File by folder and file name.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFileByFolder($folder , $file_name)
    {

       try
       {
        return response()->download(storage_path().'/updates/'.$folder .'/'.$file_name);
    }
    catch (FileNotFoundException $exception)
    {
        die("This file doesn't exists");
    }
}

}





