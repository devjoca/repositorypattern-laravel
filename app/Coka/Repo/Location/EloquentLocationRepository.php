<?php namespace Coka\Repo\Location;

use Location;

class EloquentLocationRepository implements ILocationRepository{

	public function all()
	{
		return Location::all();
	}


	public function findById($id)
	{
		return Location::find($id);
	}

}
