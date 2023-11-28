<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ModuleCommon\Calculator;

class PracticeController extends Controller
{
    /**
     * @var Calculator $calc
     */
    private $calc;

    public function __construct(Calculator $subModule)
    {
        $this->calc = $subModule;
    }

    public function add()
    {
        $a = 58;
        $b = 22;
        return $a . ' と ' . $b . ' の和は ' . $this->calc->add($a, $b) . ' です。';
    }

    public function sub()
    {
        $a = 58;
        $b = 22;
        return $a . ' と ' . $b . ' の差は ' . $this->calc->sub($a, $b) . ' です。';
    }

    public function fact()
    {
        $a = 58;
        $b = 22;
        return $a . ' と ' . $b . ' の階乗は ' . $this->calc->sub($a, $b) . ' です。';
    }
}
