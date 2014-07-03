<?php namespace zinoviev;

use Illuminate\Support\ServiceProvider;
use Yandex\Disk\DiskClient;

class YandexDiskServiceProvider extends ServiceProvider {

    const AUTH_TOKEN = '';

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
            return new DiskClient(self::AUTH_TOKEN);
        });
    }
}