<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ResidentController extends Controller
{
    public function index()
    {
        $resident = Resident::all();
        return view('pages.resident.index', [
            'resident' => $resident,
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nik' => ['required',  'min:16', 'max:16'],
            'name' => ['required', 'max:100'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'birth_date' =>['required', 'string'],
            'birth_place' => ['required', 'max:100'],
            'address' => ['required', 'max:700'],
            'religion' => ["nullable", 'max:50'],
            'marital_status' => ['required', Rule::in(['single', 'married','divorced', 'widowed'])],
            'occupation' => ["nullable",'max:100'],
            'phone' => ["nullable", 'max:15'],
            'status' => ['required', Rule::in(['active', 'moved', 'deceased'])],
        ]);

        Resident::create($validateData);

        return redirect('/resident')->with('success', 'Berhasil menambahkan data');
    }

    public function create()
    {
        return view('pages.resident.create');
    }

    public function edit($id)
    {
        $resident = Resident::findOrFail($id);

        return view('pages.resident.edit', [
            'resident' => $resident
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nik' => ['required',  'min:16', 'max:16'],
            'name' => ['required', 'max:100'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'birth_date' =>['required', 'string'],
            'birth_place' => ['required', 'max:100'],
            'address' => ['required', 'max:700'],
            'religion' => ["nullable", 'max:50'],
            'marital_status' => ['required', Rule::in(['single', 'married','divorced', 'widowed'])],
            'occupation' => ["nullable",'max:100'],
            'phone' => ["nullable", 'max:15'],
            'status' => ['required', Rule::in(['active', 'moved', 'deceased'])],
        ]);

        Resident::findOrFail($id)->update($validatedData);

        return redirect('/resident')->with('success', 'Berhasil mengubah data');
    }

    public function delete($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();

        return redirect('/resident')->with('succes','Berhasil menghapus data');
    }
}
