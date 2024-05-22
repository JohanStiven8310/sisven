<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Comuna;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
    
        {
            $request->validate([
                'name' => 'required|string|max:255',
                // otras validaciones que necesites
            ]);
        
            $comuna = new Comuna();
            $comuna->name = $request->name;
            // asignar otros campos
            $comuna->save();
        
            return response()->json($comuna, 201);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        {
            $comuna = Comuna::find($id);
        
            if (!$comuna) {
                return response()->json(['error' => 'Comuna not found'], 404);
            }
        
            return response()->json($comuna);
        }
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
{
    $comuna = Comuna::find($id);

    if (!$comuna) {
        return response()->json(['error' => 'Comuna not found'], 404);
    }

    $request->validate([
        'name' => 'sometimes|required|string|max:255',
        // otras validaciones que necesites
    ]);

    $comuna->name = $request->input('name', $comuna->name);
    // asignar otros campos si se proporcionan en el request
    $comuna->save();

    return response()->json($comuna);
}

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
{
    $comuna = Comuna::find($id);

    if (!$comuna) {
        return response()->json(['error' => 'Comuna not found'], 404);
    }

    $comuna->delete();

    return response()->json(null, 204);
}

    }
}
