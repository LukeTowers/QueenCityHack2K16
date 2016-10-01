<?php namespace LukeTowers\EasyDonors\Models;

use Model;
use ApplicationException;
use LukeTowers\EasyDonors\Models\DonationAddress as DonationAddressModel;

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
    
    public function beforeSave() {
	    if (!count($this->address)) {
		    if (count($this->donor->address)) {
			    DonationAddressModel::createFromDonorAddress($this->donor->address, $this);
		    } else {
			    throw new ApplicationException('No address to pull from');
		    }
	    }
    }
}