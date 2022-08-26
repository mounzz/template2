<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function front(){
        $backArray = array(
            array("will", "magicien"),
            array("igor", "minotaur"),
            array("vache", "humoriste"),
            array("alligator", "de luxe"),
        );
        $lgArray = count($backArray);
        return view('team.dev.backend', compact('backArray'));
    }
}
