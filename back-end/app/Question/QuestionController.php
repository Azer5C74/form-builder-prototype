<?php

namespace App\Question;

use App\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use App\Question\QuestionRequest;
use Illuminate\Http\Response;

class QuestionController
{

  public function index()
  {
    $data = Question::all()->toArray();

      return response()->
      json($data,Response::HTTP_OK,ResponseHelper::getHeaders('Successfully Got Data'));
  }

  public function create()
  {
  }

  public function store(Request $request)
  {
  }

  public function show()
  {
  }

  public function edit()
  {
  }

  public function update(QuestionRequest $request)
  {
    // Retrieve the array of objects from the JSON request
    $questionsArray = $request->json();

    // Loop through each object and update the question object accordingly
    foreach ($questionsArray as $question) {

      $questionObject = Question::findOrFail($question['id']);
      if ($questionObject) {
        // Update the question object with the new data
        $questionObject->type = $question['type'];
        $questionObject->settings = $question['settings'];
        $questionObject->save();
    }

    }

      return response()->
      json([],Response::HTTP_ACCEPTED,ResponseHelper::getHeaders('Resource updated successfully'));
  }

  public function destroy($id)
  {
  }
}
