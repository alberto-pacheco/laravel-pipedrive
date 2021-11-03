<?php namespace LasseRafn\Pipedrive\Models;

use LasseRafn\Pipedrive\Utils\Model;

class PersonField extends Model
{
	protected $entity   = 'personFields';

	protected $modelClass = self::class;

	public $id;
	public $name;
	public $field_type;
	public $options;
	public $key;
}