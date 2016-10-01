<?php namespace LukeTowers\EasyDonors;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'luketowers.easydonors::lang.plugin.name',
            'description' => 'luketowers.easydonors::lang.plugin.description',
            'author'      => 'LukeTowers',
            'icon'        => 'icon-gift',
            'homepage'    => 'https://luketowers.ca',
        ];
    }
    
}
