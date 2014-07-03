<?php

class FolderController extends BaseController {

    public function index()
    {
        $disk = App::make('disk');

        $username = $disk->getLogin();

        $dirContent = $disk->directoryContents('/');

        return View::make('folder', compact('username', 'dirContent'));
    }
} 