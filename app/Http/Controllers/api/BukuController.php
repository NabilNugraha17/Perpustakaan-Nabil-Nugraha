<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;

class bukuController extends Controller
{
    public function index()
    { 
        $buku = Buku::All(); 
        return response()->json([
            'succes' => true,
            'message' => 'Databuku',
            'data' => $buku
        ]);
    }
    
}