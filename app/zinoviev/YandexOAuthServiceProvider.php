<?php namespace zinoviev;

use Illuminate\Support\ServiceProvider;
use Yandex\OAuth\OAuthClient;

class YandexOAuthServiceProvider extends ServiceProvider {

    const CLIENT_ID = 'f6b887e355e3421bac59692c418933c5';
    const CLIENT_SECRET = '46c9c8a1937b4b96b0fd2bf35634c038';

    /**
     * Register the service provider.
     *
     * @return OAuthClient
     */
    public function register()
    {
        $this->app->bind('oauth', function()
        {
            $client = new OAuthClient(self::CLIENT_ID, self::CLIENT_SECRET);

            return $client;
        });
    }
} 