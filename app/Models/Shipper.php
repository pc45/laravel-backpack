<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'shippers';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'ownername',
        'dba',
        'addressline1',
        'addressline2',
        'city',
        'state',
        'zipcode',
        'licensenumber',
        'licensetype',
        'status',
        'effectivedate',
        'expirationdate',
        'lengthoflicense',
        'contactname',
        'emailaddress',
        'contactphone',
        'mailingaddressline1',
        'mailingaddresscity',
        'mailingaddressstate',
        'mailingaddresszip',
        'issuedate',
        'currentissuedate',
        'parent_shipper_id',
        'parent_shipper_name',
        'processed',
        'primary_number',
        'street_name',
        'street_predirection',
        'street_postdirection',
        'street_suffix',
        'secondary_number',
        'secondary_designator',
        'city_name',
        'default_city_name',
        'state_abbreviation',
        'ss_zipcode',
        'plus4_code',
        'delivery_point',
        'delivery_point_check_digit',
        'record_type',
        'rdi',
        'smartystreet_response',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
