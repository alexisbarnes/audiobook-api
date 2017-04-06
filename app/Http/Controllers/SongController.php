<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class SongController extends Controller
{
    public function index ()
    {
      // GET /songs
      // list

      $songs = Song::all();
      return Response::json($songs);
    }

    public function create (Request $request)
    {
      // POST /songs
      // create new song
      Song::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ()
    {
      // GET /songs/$id
      //show a single song
      $song = Song::find($id);
      return Response::json($song);
    }

    public function update (Request $request, $id)
    {
      // PUT /songs/$id
      // update a song
      $song = Song::find($id);
      $song->update($request->all());
      return Response::json(['updated' => true]);
    }

    public function destroy ($id)
    {
      // DELETE /songs/$id
      // remove a single song
      $song = Song::find($id);
      $song->delete();
      return Response::json(['deleted' => true]);
    }
}
