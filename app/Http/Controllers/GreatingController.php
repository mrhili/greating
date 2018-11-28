<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Greating;
use App\Http\Requests\GreatingRequest;
use Image;



class GreatingController extends Controller
{
    //
    public function welcome(){



      return view('welcome');
    }

    protected function store(GreatingRequest $r){

      // get current time and append the upload file extension to it,
      // then put that name to $photoName variable.
      $photoName = time().'.'.$r->picture->getClientOriginalExtension();

      /*
      talk the select file and move it public directory and make avatars
      folder if doesn't exsit then give it that unique name.
      */
      $r->picture->move(public_path('images'), $photoName);

      $data = [
        'receptor' => $r->receptor,
        'sender' => $r->sender,
        'word' => $r->word,
        'picture' => $photoName
      ];

      $gM = new Greating($data);
      $gM->save();
      $id = $gM->id;




      return redirect()->route('greating.success', $id );
    }


    public function show($id, Greating $g){
      $c = $g->find($id);
      return view( 'show', compact('c') );
    }

    public function success($id, Greating $g){
      $c = $g->find($id);
      return view( 'success', compact('c') );
    }


}
