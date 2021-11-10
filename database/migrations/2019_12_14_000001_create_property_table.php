<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('contact_id'); // owner
            $table->integer('property_type');
            $table->integer('ownership_type');
            $table->string('street_address', 254);
            $table->string('building', 15);
            $table->string('apn', 15);
            $table->string('city', 75);
            $table->string('state', 75);
            $table->string('zip', 75);
            $table->string('country', 75);
            $table->string('mls_area', 75);
            $table->string('mondel_name')->nullable();
            $table->integer('nr_beds');
            $table->string('full_baths');
            $table->string('partial_baths')->nullable();
            $table->float('living_space_sqft');
            $table->integer('nr_stories_in_house');
            $table->integer('nr_floors_in_house')->nullable();
            $table->integer('unit_floor_nr')->nullable();
            $table->integer('total_units')->nullable();
            $table->integer('property_faces')->nullable();
            $table->integer('unit_features')->nullable();
            $table->integer('secundary_living_space')->nullable();
            $table->integer('year_build');
            $table->integer('zunning');
            $table->integer('lot_sqft');
            $table->integer('lot_acres')->nullable();
            $table->boolean('elementary_school_district');
            $table->string('elementary_school_name', 254)->nullable();
            $table->boolean('middle_school_district');
            $table->string('middle_school_name', 254)->nullable();
            $table->boolean('high_school_district');
            $table->string('high_school_name', 254)->nullable();
            $table->string('land_use', 254)->nullable();
            $table->boolean('is_city_limits');
            $table->boolean('is_incorporated_area');
            $table->string('cross_street', 254);
            $table->string('directions', 254);
            $table->integer('listing_status');
            $table->boolean('is_point_of_sale');
            $table->boolean('is_city_transfer_tax');
            $table->datetime('list_date')->nullable();
            $table->datetime('expiration_date')->nullable();
            $table->float('list_price', 12, 8);
            $table->datetime('list_date');
            $table->float('pre_market_price')->nullable();
            $table->datetime('sale_date')->nullable();
            $table->datetime('coe_date')->nullable();
            $table->float('close_sale_price', 12, 8)->nullable();
            $table->integer('buyer_financing');
            $table->string('sold_remarks')->nullable();
            $table->integer('possesion_notice')->nullable();
            $table->integer('acceptsble_financial_terms')->nullable();
            $table->float('total_assumable_loans', 12, 8)->nullable();
            $table->integer('loan_rate')->nullable();
            $table->float('cash_assume', 12, 8)->nullable();
            $table->float('monthly_payment', 12, 8)->nullable();
            $table->float('current_rent', 12, 8)->nullable();
            $table->integer('special_listing_condition');
            $table->boolean('is_fire_place');
            $table->integer('nr_fire_places')->nullable();
            $table->integer('fireplace')->nullable();
            $table->integer('accessibility')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('communication')->nullable();
            $table->integer('cooling');
            $table->integer('dinning_room');
            $table->integer('family_room');
            $table->integer('flooring')->nullable();
            $table->integer('heating');
            $table->integer('interior_amenities')->nullable();
            $table->integer('kitchen')->nullable();
            $table->integer('laundry')->nullable();
            $table->integer('other_rooms')->nullable();
            $table->integer('security')->nullable();
            $table->boolean('is_there_a_swimming_pool');
            $table->integer('pool_spa')->nullable();
            $table->boolean('is_horse_property');
            $table->integer('horse_property')->nullable();
            $table->integer('nr_garage_spaces');
            $table->integer('carport_spaces')->nullable();
            $table->integer('nr_parking_spaces');
            $table->integer('parking');
            $table->integer('utilities');
            $table->integer('parking');
            $table->integer('electric_vehicle_hookup');
            $table->integer('water');
            $table->integer('electric_vehicle_hookup');
            $table->integer('construction_type');
            $table->integer('energy_saving');
            $table->integer('exterior_amenities');
            $table->integer('fence');
            $table->integer('foundation');
            $table->integer('lot_description')->nullable();
            $table->integer('offer_structures')->nullable();
            $table->integer('offer_structure_size')->nullable();
            $table->text('offer_structure_size')->nullable();
            $table->integer('property_condition')->nullable();
            $table->integer('roof');
            $table->integer('soil_description')->nullable();
            $table->integer('style')->nullable();
            $table->integer('view_description')->nullable();
            $table->boolean('is_property_in_community');
            $table->text('community_name')->nullable();
            $table->integer('nr_units_in_community')->nullable();
            $table->integer('community_amenities')->nullable();
            $table->integer('community_restrictions');
            $table->boolean('is_hoa');
            $table->string('hoa_name', 75)->nullable();
            $table->string('hoa_phone', 25)->nullable();
            $table->float('hoa_fee')->nullable();
            $table->integer('hoa_fee_frequency');
            $table->integer('hoa_fee_covers')->nullable();
            $table->integer('hoa_docs')->nullable();
            $table->float('hoa_transfer_fee')->nullable();
            $table->float('hoa_document_fee')->nullable();
            $table->string('builder_name')->nullable();
            $table->string('track_name')->nullable();
            $table->boolean('is_new_construction');
            $table->integer('construction_status');
            $table->datetime('estimated_completion_date');
            $table->float('price_range_low')->nullable();
            $table->float('price_range_high')->nullable();
            $table->string('virtual_branded_tour_url')->nullable();
            $table->string('virtual_unbranded_tour_url')->nullable();
            $table->string('branded_3d_tour_url')->nullable();
            $table->string('unbranded_3d_tour_url')->nullable();
            $table->string('branded_drone_tour_url')->nullable();
            $table->string('unbranded_drone_tour_url')->nullable();
            $table->string('branded_additional_tour_url')->nullable();
            $table->string('unbranded_additional_tour_url')->nullable();
            $table->string('public_remarks')->nullable();
            $table->boolean('is_consummer_website');
            $table->boolean('is_vow_idx_avm');
            $table->boolean('allow_vow_idx_avm');
            $table->integer('public_listing_address_format');
            $table->float('cooperatin_broker_comission');
            $table->integer('dual_variable');
            $table->text('private_remarks')->nullable();
            $table->integer('listing_service')->nullable();
            $table->integer('listing_type');
            $table->integer('hazard_disclosures');
            $table->integer('other_disclosures');
            $table->text('disclosure_url')->nullable();
            $table->boolean('is_green_rated_home')->nullable();
            $table->boolean('is_tic_agreement')->nullable();
            $table->integer('occupied_by');
            $table->integer('contact_type');
            $table->string('contact_name', 75)->nullable();
            $table->string('contact_phone', 75)->nullable();
            $table->string('gate_code', 254)->nullable();
            $table->integer('showing_instructions');
            $table->text('additional_showing_instructions');
            $table->datetime('open_house_date')->nullable();
            $table->datetime('open_house_starts_at')->nullable();
            $table->datetime('open_house_ends_at')->nullable();
            $table->integer('hosted_by')->nullable();
            $table->text('remarks')->nullable();
            $table->datetime('property_tour_date')->nullable();
            $table->text('property_tour_sponsor')->nullable();
            $table->string('property_tour_name', 75)->nullable();
            $table->string('agent_full_name', 75)->nullable();
            $table->string('agent_license')->nullable();
            $table->string('agent_phone', 75)->nullable();
            $table->string('agent_email', 75)->nullable();
            $table->string('office_name', 75)->nullable();
            $table->string('office_code', 75)->nullable();
            $table->string('office_phone', 75);
            $table->string('co_agent_full_name', 75)->nullable();
            $table->string('co_agent_license', 75)->nullable();
            $table->string('co_agent_phone', 75)->nullable();
            $table->string('selling_agent_full_name', 75);
            $table->string('selling_agent_license', 75)->nullable();
            $table->string('selling_agent_phone', 75)->nullable();
            $table->string('selling_agent_email', 75)->nullable();
            $table->string('selling_office_name', 75);
            $table->string('selling_office_code', 75)->nullable();
            $table->string('selling_office_phone', 75)->nullable();
            $table->string('selling_agent_full_name', 75)->nullable();
            $table->string('selling_agent_office_name', 75)->nullable();
            $table->datetime('agent_signature_date')->nullable();
            $table->datetime('seller_signature_date')->nullable();
            $table->datetime('broker_signature_date')->nullable();
            $table->string('agent_signature')->nullable();
            $table->string('seller_signature')->nullable();
            $table->string('broker_signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
}
