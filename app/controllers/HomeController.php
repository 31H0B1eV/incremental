<?php

class HomeController extends BaseController {

    public function index()
    {
        $lessons = Lesson::paginate(8);

        return View::make('lessons', compact('lessons'));
    }

    public function show($lessonId)
    {
//        $lesson = Lesson::findOrFail($lessonId);
//
//        return View::make('lesson_detail', compact('lesson'));
    }
}
