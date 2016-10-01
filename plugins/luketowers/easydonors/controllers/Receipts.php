<?php namespace LukeTowers\EasyDonors\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Receipts Back-end Controller
 */
class Receipts extends Controller
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

        BackendMenu::setContext('LukeTowers.EasyDonors', 'easydonors', 'receipts');
    }
}