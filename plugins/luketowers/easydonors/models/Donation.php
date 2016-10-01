<?php namespace LukeTowers\EasyDonors\Models;

use Model;

/**
 * Model
 */
class Donation extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
	    'amount' => 'required',
	    'currency' => 'required',
    ];

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    protected $jsonable = ['data'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'luketowers_easydonors_donations';
    
    /*
	 * Relations
	 */
	public $belongsTo = [
		'donor' => ['LukeTowers\EasyDonors\Models\Donor', 'key' => 'donor_id'],
		'address' => ['LukeTowers\EasyDonors\Models\DonationAddress', 'key' => 'address_id'],
	];
	
    public $hasOne  = [
	    'receipt' => ['LukeTowers\EasyDonors\Models\Receipt', 'key' => 'donation_id'],
    ];
    
    public function getCurrencyOptions() {
	    return [
		    'CAD' => 'Canadian dollars (CAD)',
		    'USD' => 'American dollars (USD)',
	    ];
    }
}