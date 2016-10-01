<?php return [
    'plugin' => [
        'name' => 'Easy Donors',
        'description' => 'Manage donors and donations'
    ],
    'components' => [
	    'general' => [
		    'properties' => [
			    'slug'             => ':record slug',
			    'slug_description' => 'Slug for the :record',
		    ],
	    ],
	    'courseManager' => [
		    'name'        => 'Courses Component',
		    'description' => 'Displays courses, lessons, & materials',
	    ],
    ],
    'navigation' => [
	    'donor_manager' => [
		    'main_label' => 'Donors',
		    'donations'  => 'Donations',
		    'receipts'   => 'Receipts',
		    'addresses'  => 'Addresses',
	    ],
    ],
    'controllers' => [
	    'tabs' => [
		    'edit'    => 'Edit',
		    'options' => 'Options',
	    ],
	    'forms' => [
		    'new_item' => 'New',
		    'close_confirm'    => 'Changes you have made to the :record may not be saved',
		    'delete_confirm'   => 'Are you sure you want to delete this :record?',
		    'create_required'  => 'Please create the :record before managing its :relations',
		    'return_to'        => 'Return to :records',
	    ],
	    'exceptions' => [
		    'record_not_found' => 'The :record with an ID of :id was not found',
		    'create_record_first' => 'Create the :record before managing :relation',
	    ],
    ],
    'models' => [
	    'general'        => [
		    'created_at'      => 'Created at',
            'updated_at'      => 'Last updated',
            'created_by'      => 'Created by',
            'updated_by'      => 'Updated by',
            'deleted_at'      => 'Deleted at',
            'start_date'      => 'Start Date',
	        'end_date'        => 'End Date',
	        'today'           => 'Today',
            'n/a'             => 'Not applicable',
            'sort_order'      => 'Sort Order',
            'reorder'         => 'Reorder',
            'name'            => 'Name',
            'name_placeholder'=> 'Put name here',
            'summary'         => 'Summary',
            'slug'            => 'Slug',
            'slug_placeholder'=> 'Put slug here',
            'no_records'      => 'No records were found',
	    ],
        'donor' => [
	        'label' => 'Donor',
	        'plural_label' => 'Donors',
	        'name' => 'Name',
	        'surname' => 'Surname',
	        'email' => 'Email',
	        'accepts_marketing' => 'Accepts Marketing',
        ],
        'donoraddress' => [
	        'label' => 'Donor Address',
	        'plural_label' => 'Donor Addresses',
	        'address' => 'Street address',
	        'address2' => 'Address line #2',
	        'city' => 'City',
	        'province' => 'Province',
	        'country' => 'Country',
	        'postal_code' => 'Postal Code',
        ],
        'donation' => [
	        'label' => 'Donation',
	        'plural_label' => 'Donations',
	        'donor_name' => 'Donor Name',
	        'amount' => 'Amount',
	        'currency' => 'Currency',
	        'date' => 'Date',
	        'placeholder_amount' => '100.00',
	        'notes' => 'Notes',
        ],
        'donationaddress' => [
	        'label' => 'Donation Address',
	        'plural_label' => 'Donation Addresses',
	        'address' => 'Street address',
	        'address2' => 'Address line #2',
	        'city' => 'City',
	        'province' => 'Province',
	        'country' => 'Country',
	        'postal_code' => 'Postal Code',
        ],
        'receipt' => [
	        'label' => 'Receipt',
	        'plural_label' => 'Receipts',
        ],
    ],
];