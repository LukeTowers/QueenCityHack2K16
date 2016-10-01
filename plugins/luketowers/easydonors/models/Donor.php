<?php namespace LukeTowers\EasyDonors\Models;

use Model;

/**
 * Model
 */
class Donor extends Model
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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'luketowers_easydonors_donors';
    
    
    /*
	 * Relations
	 */
    public $hasOne  = [
	    'address' => ['LukeTowers\EasyDonors\Models\DonorAddress', 'key' => 'donor_id'],
    ];
    public $hasMany = [
	    'donations' => ['LukeTowers\EasyDonors\Models\Donation', 'key' => 'donor_id'],
    ];
	// TODO: Verify that this relationship actually works
    public $hasManyThrough = [
	    'receipts' => ['LukeTowers\EasyDonors\Models\Receipt', 'through' => 'LukeTowers\EasyDonors\Models\Donation'],
    ];
}