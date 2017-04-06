<?php

namespace App\Http\Controllers;

use App\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PodcastController extends Controller
{
    public function index ()
    {
      // GET /podcasts
      // list
      $podcasts = Podcast::all();
      return Response::json($podcasts);
    }

    public function create (Request $request)
    {
      // POST /podcasts
      // create new podcasts
      Podcast::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ()
    {
      //GET /podcasts/$id
      //show a single podcasts
      $podcast = Podcast::find($id);
      return Response::json($podcast);
    }

    public function update (Request $request, $id)
    {
      // PUT /podcasts/$id
      // update a podcast
      $podcast = Podcast::find($id);
      $podcast->update($request->all());
      return Response::json(['updated' => true]);
    }

    public function destroy ($id)
    {
      //DELETE /podcasts/$id
      // remove a single podcast
      $podcast = Podcast::find($id);
      $podcast->delete();
      return Response::json(['deleted' => true]);
    }
}
