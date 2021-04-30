<?php

namespace App\Http\Controllers;

use App\Models\wiki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WikiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $wikis = wiki::with('user')->get();

        return view('wikis.index', compact('wikis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'motivo' => 'required',
        ]);
        $user = Auth::user();


        $wiki =   wiki::create(
            ([
                'titulo' => $request->titulo,
                'motivo' => $request->motivo,
                'user_id' => $user->id
            ])

        );
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function show(wiki $wiki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function edit(wiki $wiki)
    {


        return view('wikis.edit', compact('wiki'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wiki $wiki)
    {
        $request->validate([
            'titulo' => 'required',
            'motivo' => 'required',
            'desabilitar' => '',
            'habilitar' => ''
        ]);

        if ($request->desabilitar) {
            $wiki->update(
                ([
                    'titulo' => $request->titulo,
                    'motivo' => $request->motivo,
                    'estado' => 0,
                ])

            );
        }

        if ($request->habilitar) {
            $wiki->update(
                ([
                    'titulo' => $request->titulo,
                    'motivo' => $request->motivo,
                    'estado' => 1,
                ])

            );
        }


        $wiki->update(
            ([
                'titulo' => $request->titulo,
                'motivo' => $request->motivo,
            ])

        );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wiki  $wiki
     * @return \Illuminate\Http\Response
     */
    public function destroy(wiki $wiki)
    {
        $wiki->delete();
        return redirect()->back();
    }
}
