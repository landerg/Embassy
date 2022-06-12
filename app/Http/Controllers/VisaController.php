<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVisaRequest;
use App\Visa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VisaController extends BaseController
{

    public function index(Request $request)
    {
        $search_data = [];
        if ($search = $request->get('search', ''))
            $search_data = Visa::where('passport_no', '=', $search)->first();

        return view('visas', ['search_data' => $search_data]);
    }

    
    public function store(CreateVisaRequest $request)
    {
        Visa::create($request->only([
            'passport_type',
            'passport_no',
            'country_code',
            'first_name',
            'given_name',
            'birth_date',
            'birth_place',
            'sex',
            'issue',
            'expire',
            'authory',
            'submit_data_button'
        ]));
        return redirect()->route('visas')->with('message', 'Success!');
    }
}
