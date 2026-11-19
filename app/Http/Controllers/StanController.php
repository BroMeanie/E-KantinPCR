<?php

namespace App\Http\Controllers;

use App\Models\Stan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class StanController extends Controller
{
    public function index(): View
    {
        $data['dataStan'] = Stan::orderBy('nama_stan')->get();

        return view('admin.stan.index', $data);
    }

    public function create(): View
    {
        return view('admin.stan.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Stan::create($this->validated($request));

        return redirect()->route('stan.index')->with('success', 'Stan berhasil ditambahkan.');
    }

    public function edit(Stan $stan): View
    {
        $data['stan'] = $stan;

        return view('admin.stan.edit', $data);
    }

    public function update(Request $request, Stan $stan): RedirectResponse
    {
        $stan->update($this->validated($request, $stan));

        return redirect()->route('stan.index')->with('success', 'Data stan berhasil diubah.');
    }

    public function destroy(Stan $stan): RedirectResponse
    {
        $stan->delete();

        return redirect()->route('stan.index')->with('success', 'Stan berhasil dihapus.');
    }

    /**
     * Validasi isian form tambah dan ubah stan.
     *
     * @return array<string, mixed>
     */
    private function validated(Request $request, ?Stan $stan = null): array
    {
        $data = $request->validate([
            'nama_stan' => ['required', 'string', 'max:100', Rule::unique('stan', 'nama_stan')->ignore($stan)],
            'jenis' => ['required', Rule::in(Stan::JENIS)],
            'nama_pemilik' => ['nullable', 'string', 'max:100'],
            'lokasi' => ['nullable', 'string', 'max:150'],
            'no_whatsapp' => ['nullable', 'regex:/^\+?[0-9]{8,15}$/'],
        ], [
            'nama_stan.required' => 'Nama stan wajib diisi.',
            'nama_stan.unique' => 'Nama stan sudah dipakai.',
            'nama_stan.max' => 'Nama stan maksimal 100 karakter.',
            'jenis.required' => 'Jenis stan wajib dipilih.',
            'jenis.in' => 'Jenis stan tidak valid.',
            'no_whatsapp.regex' => 'Nomor WhatsApp hanya berisi angka (8-15 digit), boleh diawali +.',
        ]);

        $data['is_aktif'] = $request->boolean('is_aktif');

        return $data;
    }
}
