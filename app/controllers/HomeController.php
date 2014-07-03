<?php

class HomeController extends BaseController {

    public function index()
    {
//        $lessons = Lesson::paginate(8);

        $disk = App::make('disk');
        $client = App::make('oauth');

        $client->authRedirect(true);

//        return View::make('lessons', compact('lessons'));
    }

    public function show($lessonId)
    {
//        $lesson = Lesson::findOrFail($lessonId);
//
//        return View::make('lesson_detail', compact('lesson'));
    }

    public function auth()
    {
        $client = App::make('oauth');

        try {
            $client->requestAccessToken(Request::get('code'));
        } catch (AuthRequestException $ex) {
            echo $ex->getMessage();
        }

        $token = $client->getAccessToken();

        return $token;
    }
}
