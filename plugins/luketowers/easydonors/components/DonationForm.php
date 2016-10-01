<?php namespace LukeTowers\EasyDonors\Components;

use Cms\Classes\ComponentBase;

class DonationForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'DonationForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function init() {
	    $this->addJs('https://js.stripe.com/v2/');
    }

}