<?php namespace Conner\Likeable;

use Illuminate\Support\ServiceProvider;

class LikeableServiceProvider extends ServiceProvider {

	protected $defer = true;
	
	public function boot() {
		$this->publishes([
			__DIR__.'/../migrations' => database_path('migrations'),
		], 'migrations');
	}
	
	public function register() {}

	public function when() {
		return array('artisan.start');
	}
	
}