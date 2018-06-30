<?php

use Illuminate\Database\Seeder;
use app\Http\Controllers\PropertiesController;
use app\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    public function run()
    {
        factory(Property::class)->create([
            'id_property' => $propertiesWasi->id_property, 
            'id_company' => $propertiesWasi->id_company, 
            'id_user' => $propertiesWasi->id_user,
            'for_sale' => $propertiesWasi->for_sale,
            'for_rent' => $propertiesWasi->for_rent,
            'for_transfer' => $propertiesWasi->for_transfer,
            'id_property_type' => $propertiesWasi->id_property_type,
            'id_country' => $propertiesWasi->id_country,
            'country_label' => $propertiesWasi->country_label,
            'id_region' => $propertiesWasi->id_region,
            'region_label' => $propertiesWasi->region_label,
            'id_city' => $propertiesWasi->id_city,
            'city_label' => $propertiesWasi->city_label,
            'id_zone' => $propertiesWasi->id_zone,
            'zone' => $propertiesWasi->zone,
            'zone_label' => $propertiesWasi->zone_label,
            'id_currency' => $propertiesWasi->id_currency,
            'iso_currency' => $propertiesWasi->iso_currency,
            'title' => $propertiesWasi->title,
            'address' => $propertiesWasi->address,
            'area' => $propertiesWasi->area,
            'id_unit_area' => $propertiesWasi->id_unit_area,
            'built_area' => $propertiesWasi->built_area,
            'id_unit_built_area' => $propertiesWasi->id_unit_built_area,
            'unit_built_area_label' => $propertiesWasi->unit_built_area_label,
            'maintenance_fee' => $propertiesWasi->maintenance_fee,
            'sale_price' => $propertiesWasi->sale_price,
            'rent_price' => $propertiesWasi->rent_price,
            'bedrooms' => $propertiesWasi->bedrooms,
            'bathrooms' => $propertiesWasi->bathrooms,
            'garages' => $propertiesWasi->garages,
            'floor' => $propertiesWasi->floor,
            'stratum' => $propertiesWasi->stratum,
            'observations' => $propertiesWasi->observations,
            'video' => $propertiesWasi->video,
            'id_property_condition' => $propertiesWasi->id_property_condition,
            'property_condition_label' => $propertiesWasi->property_condition_label,
            'id_status_on_page' => $propertiesWasi->id_status_on_page,
            'status_on_page_label' => $propertiesWasi->status_on_page_label,
            'map' => $propertiesWasi->map,
            'latitude' => $propertiesWasi->latitude,
            'longitude' => $propertiesWasi->longitude,
            'building_date' => $propertiesWasi->building_date,
            'network_share' => $propertiesWasi->network_share,
            'visits' => $propertiesWasi->visits,
            'reference' => $propertiesWasi->reference,
            'comment' => $propertiesWasi->comment,
            'id_rents_type' => $propertiesWasi->id_rents_type,
            'rents_type_label' => $propertiesWasi->rents_type_label,
            'zip_code' => $propertiesWasi->zip_code,
            'id_availability' => $propertiesWasi->id_availability,
            'availability_label' => $propertiesWasi->availability_label,
            'id_publish_on_map' => $propertiesWasi->id_publish_on_map,
            'publish_on_map_label' => $propertiesWasi->publish_on_map_label
        ]);
    }
}
