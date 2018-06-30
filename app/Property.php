<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_property', 'id_company', 'id_user','for_sale',
        'for_rent','for_transfer','id_property_type','id_country',
        'country_label','id_region','region_label','id_city',
        'city_label','id_zone','zone','zone_label','id_currency',
        'iso_currency','title','address','area','id_unit_area',
        'unit_area_label','built_area','id_unit_built_area','unit_built_area_label',
        'maintenance_fee','sale_price','rent_price','bedrooms','bathrooms',
        'garages','floor','stratum','observations','video','id_property_condition',
        'property_condition_label','id_status_on_page','status_on_page_label',
        'map','latitude','longitude','building_date','network_share',
        'visits','reference','comment','id_rents_type','rents_type_label',
        'zip_code','id_availability','availability_label','id_publish_on_map',
        'publish_on_map_label','galleries','features','portals','label'

    ];
}
