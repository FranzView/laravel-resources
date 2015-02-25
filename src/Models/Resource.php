<?php namespace Cviebrock\LaravelResources\Models;

use Illuminate\Database\Eloquent\Model;
use Config;


class Resource extends Model {

	protected $primaryKey = 'resource_id';


	/**
	 * Create a new Eloquent model instance, with prefixable table name.
	 *
	 * @param array $attributes
	 */
	public function __construct(array $attributes = []) {

		$prefix = Config::get('resources:config.prefix', '');

		$this->setTable($prefix . 'resources');

		parent::__construct($attributes);
	}


	/**
	 * Relationship with ResourceTranslations models.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function translations() {
		return $this->hasMany('ResourceTranslation');
	}


}