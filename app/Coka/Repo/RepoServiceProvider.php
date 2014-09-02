<?php namespace Coka\Repo;

use Coka\Repo\Location;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('Coka\Repo\Location\ILocationRepository','Coka\Repo\Location\EloquentLocationRepository');
	}
}
