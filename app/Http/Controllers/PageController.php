<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Attributi
        public $servizi=[ 
        ['nome'=>'lavaggio','prezzo'=>100,'id'=>0],
        ['nome'=>'asciugatura','prezzo'=>70,'id'=>1]];



    //Metodi
    public function __construct(){
        $this->servizi=[ 
            ['nome'=>'lavaggio','prezzo'=>100,'id'=>0],
            ['nome'=>'asciugatura','prezzo'=>70,'id'=>1]];
    }
    public function home(){
        $nome='anthony';
    return view('welcome',compact('nome'));
    }
    public function chisiamo(){
        return view('chisiamo');
    }
    public function servizi(){
        return view('servizi',['servizi'=>$this->servizi]);
    }
}
