<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostsController extends Controller
{
    /**
     * Show the form to create a new blog post.
     */
    public function table()
    {
        $data = Karyawan::get();

        return view('posts.table', ['data' => $data]);
    }

    /**
     * Show the form to create a new blog post.
     */
    public function create(): View
    {
        return view('posts.create');
    }
    /**
     * Show the form to create a new blog post.
     */
    public function update(Request $request): RedirectResponse
    {
        $data = Karyawan::where('id', $request->id)->first();
        $data->nama = $request->nama;
        $data->kota = $request->kota;
        $data->save();

        return redirect()
            ->route('posts.table')
            ->with(
                'success',
                'data updated'
            );
    }
    /**
     * Show the form to create a new blog post.
     */
    public function edit($id): View
    {

        $data = Karyawan::where('id', $id)->first();
        $id = $data->id;
        $nama = $data->nama;
        $kota = $data->kota;
        return view('posts.edit', compact('id', 'nama', 'kota'));
    }

    /**
     * Show the form to create a new blog post.
     */
    public function delete($id): RedirectResponse
    {
        Karyawan::findOrFail($id)
            ->delete();
        return redirect()
            ->route('posts.table')
            ->with(
                'success',
                'data deleted'
            );
    }

    /**
     * Store a new blog post.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'kota' => ['required', 'min:10'],
        ]);
        // dd($request->all());
        $data = new Karyawan;
        $data->nama = $request->nama;
        $data->kota = $request->kota;
        $data->save();

        return redirect()
            ->route('posts.create')
            ->with(
                'success',
                'Post is submitted! Nama: ' . $request->input('nama') .
                    ' Kota: ' . $request->input('kota')
            );
    }
}
