<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{   

     /**
     * @var \App\Models\Pet
     */
    protected $pet;

    public function __construct(Pet $pet)
    {
        $this->pet = $pet;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = $this->pet->all();
        return response()->json($pets, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentUser = auth('api')->user();
        
        $params = $request->all();
        $params['user_id'] = $currentUser['id'];
        
        $pet = new Pet();
        $pet->fill($params);
        $pet->save();

        return response()->json($pet, 201);
    }
}
