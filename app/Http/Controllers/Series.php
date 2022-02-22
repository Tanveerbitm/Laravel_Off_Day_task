<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Symfony\Component\Console\Style\text;

class Series extends Controller
{
    //
    protected $startNumber;
    protected $endNumber;
    protected $txt;
    protected $result;
    protected $i;
    protected $total;

    public function index(Request $request)
    {
        $this->startNumber = $request->start_number;
        $this->endNumber = $request->end_number;
        $this->result = $this->getSeries();
        return view('pages.series', ['startValue' => $this->startNumber, 'endValue' => $this->endNumber, 'result' => $this->result]);

    }

    protected function getSeries()
    {
        for ($this->i = $this->startNumber; $this->i <= $this->endNumber; $this->i++) {
            $this->total += $this->i;
            if ($this->i != $this->endNumber) {
                $this->txt .= (string)$this->i . ' + ';
            } else {
                $this->txt .= (string)$this->i;
            }
        }
        $this->txt .= ' = ' . $this->total;
        return $this->txt;
    }
}
