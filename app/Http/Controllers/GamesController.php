<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Launch_link;
use Illuminate\Support\Str;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function renderLaunchGamePage($game_id) {
      $games_table = Game::all();
      $game = Game::findOrFail($game_id);
      $game_excerpt = Str::limit($game->name, $limit=25, $end='...');
      $links = Launch_link::query()
        -> select('id', 'link', 'link_alias', 'launch_quantity', 'expiry')
        -> get();

      return view('launch', ['all_games' => $games_table, 'game' => $game, 'excerpt' => $game_excerpt, 'links' => $links ]);
    }


    public function editLinkAlias($id) {

        $data = Launch_link::find($id);
        return view('edit', ['data' => $data]);
    }


    public function createAlias(Request $request) {
      try {
        $data=Launch_link::find($request->id);
        $data->link_alias = $request->link_alias;
        $data->save();
        $game_id=$request->game_id;
          return redirect('/launch/'.$game_id);
      }
         catch(ModelNotFoundException $err){
             //Show error page
         }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
