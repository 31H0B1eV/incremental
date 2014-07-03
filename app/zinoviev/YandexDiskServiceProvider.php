<?php namespace zinoviev;

use Illuminate\Support\ServiceProvider;
use Yandex\Disk\DiskClient;

class YandexDiskServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     * for using: App::make('disk');
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('disk', function()
        {
            $token = $_COOKIE['yandex_access_token'];

            echo $token;

            return new DiskClient($token);
        });
    }
}