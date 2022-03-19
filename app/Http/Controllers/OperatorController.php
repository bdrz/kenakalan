<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function index()
    {
        return view('operator.index');
    }
    public function status(Request $request)
    {
        $result = Operator::find($request->id)->first();
        return $result;
    }
}
