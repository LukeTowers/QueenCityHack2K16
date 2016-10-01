<?php namespace LukeTowers\EasyDonors\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Donor Addresses Back-end Controller
 */
class DonorAddresses extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('LukeTowers.EasyDonors', 'easydonors', 'donoraddresses');
    }
}