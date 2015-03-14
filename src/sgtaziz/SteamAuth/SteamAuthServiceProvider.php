<?php
namespace sgtaziz\SteamAuth;

use Illuminate\Support\ServiceProvider;

class SteamAuthServiceProvider extends ServiceProvider
{
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['steamauth'] = $this->app->share(
			function ($app) {
				return new SteamAuth;
			}
		);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('steamauth');
	}
}
