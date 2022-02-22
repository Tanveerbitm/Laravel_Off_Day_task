<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordGeneratorController extends Controller
{
    //
    protected $num;
    protected $randomArray = ['a','s','d','f','#','$','*','2','4','6','D','B','L','P',']'];
    protected $text;
    protected $result;
    protected $i;

    public function index(Request $request){
        $this->num = $request->number;
        $this->result = $this->passwordGenerator();
        return view('pages.passwordGenerator',['result'=>$this->result,'value'=>$this->num]);
    }

    protected function passwordGenerator(){
        for($this->i=0;$this->i<$this->num;$this->i++){
            $this->text.= $this->randomArray[rand(0,14)];
        }
        return $this->text;
    }
}
