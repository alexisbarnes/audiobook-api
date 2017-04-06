<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class VideoController extends Controller
{
    public function index ()
    {
      // GET /videos
      // list

      $videos = Video::all();
      return Response::json($videos);
    }

    public function create (Request $request)
    {
      //POST /videos
      // create new video
      Video::create($request->all());
      return Response::json(['created' => true]);
    }

    public function show ()
    {
      // GET /videos/$id
      //show a single video
      $video = Video::find($id);
      return Response::json($video);
    }

    public function update (Request $request, $id)
    {
      // PUT /videos/$id
      // update a video
      $video = Video::find($id);
      $video->update($request->all());
      return Response::json(['updated' => true]);
    }

    public function destroy ($id)
    {
      // DELETE /videos/$id
      // remove a single videos

      $video = Video::find($id);
      $video->delete();
      return Response::json(['deleted' => true]);
    }
}
