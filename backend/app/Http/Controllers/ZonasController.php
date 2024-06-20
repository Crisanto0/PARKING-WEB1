<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZonasController extends Controller
{
    public function mostrarZonas(Request $request)
    {
        $query = DB::table('zonas_parqueo');

        if ($request->filled('id')) {
            $query->where('zona_parqueo_id', $request->input('id'));
        }

        if ($request->filled('descripcion')) {
            $query->orWhere('descripcion', 'LIKE', '%' . $request->input('descripcion') . '%');
        }

        $zonas_parqueo = $query->get();

        return view('ConsultasZonas', compact('zonas_parqueo'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:255',
            'parqueadero_id' => 'required',
        ]);

        DB::table('zonas_parqueo')->insert([
            'descripcion' => $validatedData['descripcion'],
            'parqueadero_id' => $validatedData['parqueadero_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/ConsultasZonas')->with('success', 'Zona creada con éxito.');
    }

    public function edit($id)
    {
        $zonas_parqueo = DB::table('zonas_parqueo')->where('zona_parqueo_id', $id)->first();
        return view('editZonas', compact('zonas_parqueo'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos entrantes
        $validatedData = $request->validate([
            'descripcion' => 'required|max:255',
            'parqueadero_id' => 'required',
        ]);

        // Actualizar la zona en la base de datos
        DB::table('zonas_parqueo')
            ->where('zona_parqueo_id', $id)
            ->update([
                'descripcion' => $validatedData['descripcion'],
                'parqueadero_id' => $validatedData['parqueadero_id'],
                'updated_at' => now(),
                // Puedes agregar otros campos que necesites actualizar
            ]);

        return redirect('/ConsultasZonas')->with('success', 'Zona actualizada correctamente.');
    }

    public function destroy($id)
    {
        DB::table('zonas_parqueo')->where('zona_parqueo_id', $id)->delete();
        return redirect('/ConsultasZonas')->with('success', 'Zona eliminada correctamente.');
    }
}

