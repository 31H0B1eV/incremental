<?php

class HomeController extends BaseController {

    public function index()
    {
        if(!isset($_COOKIE['yandex_access_token']))
        {
            $client = App::make('oauth');

            $client->authRedirect(true);
        }

        $disk = App::make('disk');

        dd($disk->diskSpaceInfo());

        $lessons = Lesson::paginate(8);

        return View::make('lessons', compact('lessons'));
    }

    public function show($lessonId)
    {
//        $lesson = Lesson::findOrFail($lessonId);
//
//        return View::make('lesson_detail', compact('lesson'));
    }

    public function getToken()
    {
        $client = App::make('oauth');

        try {
            $client->requestAccessToken(Request::get('code'));
        } catch (AuthRequestException $ex) {
            echo $ex->getMessage();
        }

        $token = $client->getAccessToken();

        setcookie('yandex_access_token', $token);
        $_COOKIE['yandex_access_token'] = $token;

        return Redirect::home();
    }
}
