<?php namespace LukeTowers\EasyDonors\Models;

use Model;

/**
 * Model
 */
class DonorAddress extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    protected $jsonable = ['data'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'luketowers_easydonors_donor_addresses';
    
    /*
	 * Relations
	 */
	public $belongsTo = [
		'donor' => ['LukeTowers\EasyDonors\Models\Donor', 'key' => 'donor_id'],
	];
	
	
	public function getCountryOptions($key, $value) {
		return [
			'CA' => 'Canada',
			'US' => 'United States',
		];
	}
	
	public function getProvinceOptions($key, $value) {
		return [
			'CA' => 'Canada',
			'US' => 'United States',
		];
	}
}