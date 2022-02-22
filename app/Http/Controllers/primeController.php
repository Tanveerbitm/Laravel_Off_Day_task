<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primeController extends Controller
{
    //
    protected $num;
    protected $i;
    protected $sqrtres;
    protected $feedBack;
    protected $result;
    public function index(Request $request){
        $this->num = $request->number;
        $this->feedBack = $this->primeOrNot();
        if ($this->feedBack){
            $this->result = 'Prime';
        }else{
            $this->result ='Not Prime';
        }
        return view('pages.prime',['value'=>$this->num,'result'=>$this->result]);
    }
    protected function primeOrNot(){
        if($this->num == 0){return false;}
        elseif($this->num == 1 || $this->num == 2 ){return true;}
        else{
            $this->sqrtres = sqrt($this->num);
            for($this->i=2; $this->i <= $this->sqrtres+1; $this->i++){
                if($this->num % $this->i == 0){
                    return false;
                }
            }
            return true;
        }
    }
}
