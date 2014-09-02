<?php namespace Coka\Repo\Location;

interface ILocationRepository {

	public function all();

	public function findById($id);

}
