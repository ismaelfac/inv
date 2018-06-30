<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use app\Property;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_property')->unique();//Identificador unico de la propiedad. | no modificable
            $table->integer('id_company');// Identificador unico de la empresa propietaria, puede ser de empresa propia o empresa aliada. | no modificable
            $table->integer('id_user');//Identificador unico del usuario asociado a la propiedad, ver la sección Usuarios.
            $table->boolean('for_sale')->nullable($value = true);//Valor booleano (true o false) que indica si el inmueble esta diponible para la venta o no.
            $table->boolean('for_rent')->nullable($value = true);//Valor booleano (true o false) que indica si el inmueble esta diponible para la renta (alquilar, arrendar) o no.
            $table->boolean('for_transfer')->nullable($value = true);//Valor booleano (true o false) que indica si el inmueble esta disponible para permutar (transferencia).
            $table->integer('id_property_type')->nullable($value = true);//Identificador que indica el tipo de propiedad.
            $table->integer('id_country')->nullable($value = true);//Identificador del país de la propiedad.
            $table->string('country_label')->nullable($value = true);//Nombre del país de la propiedad.
            $table->integer('id_region')->nullable($value = true);//Identificador de la región de la propiedad.
            $table->string('region_label')->nullable($value = true);//Nombre de la región de la propiedad.
            $table->integer('id_city')->nullable($value = true);//Identificador de la ciudad de la propiedad.
            $table->string('city_label')->nullable($value = true);//Nombre de la ciudad de la propiedad.
            $table->integer('id_zone')->nullable($value = true);//Identificador de la zona de la propiedad.
            $table->string('zone')->nullable($value = true);//Nombre de la zona de la propiedad. Si no se envía un id_zone, una zona nueva es creada con este campo.
            $table->string('zone_label')->nullable($value = true);//Nombre de la zona de la propiedad.
            $table->integer('id_currency')->nullable($value = true);//Identificador de la moneda de la propiedad.
            $table->string('iso_currency')->nullable($value = true);//Código iso de 3 letras en mayúscula que representa la moneda.
            $table->string('title')->nullable($value = true);//Título de la propiedad.
            $table->string('address')->nullable($value = true);//Dirección de la propiedad.
            $table->integer('area')->nullable($value = true);//Indica el area total/superficie/terreno de la propiedad, ver la sección Areas.
            $table->integer('id_unit_area')->nullable($value = true);//Identificador de la unidad de medida del area de la propiedad, ver la sección Areas.
            $table->string('unit_area_label')->nullable($value = true);//Nombre de la unidad de medida del area de la propiedad, ver la sección Areas.
            $table->integer('built_area')->nullable($value = true);//Indica el area construida o superficie útil de la propiedad, ver la sección Areas.
            $table->integer('id_unit_built_area')->nullable($value = true);//Identificador de la unidad de medida del area construida de la propiedad, ver la sección Areas.
            $table->string('unit_built_area_label')->nullable($value = true);//Nombre de la unidad de medida del area construida de la propiedad, ver la sección Areas.
            $table->integer('maintenance_fee')->nullable($value = true);//Valor de la cuota de mantenimiento o administración de la propiedad.
            $table->integer('sale_price')->nullable($value = true);//Precio de venta de la propiedad.
            $table->integer('rent_price')->nullable($value = true);//Costo de arriendo/renta/alquiler de la propiedad.
            $table->integer('bedrooms')->nullable($value = true);//Número de habitaciones de la propiedad.
            $table->integer('bathrooms')->nullable($value = true);//Número de baños de la propiedad.
            $table->integer('garages')->nullable($value = true);//Número de garajes de la propiedad.
            $table->integer('floor')->nullable($value = true);//Número de piso en el que se encuentra la propiedad o cantidad de niveles que tiene, puede ser un valor vacío o numero de 1 a 30.
            $table->integer('stratum')->nullable($value = true);//Estrato social, usado en Colombia, ver la sección Estratos sociales.
            $table->string('observations')->nullable($value = true);//Observaciones del inmueble.
            $table->string('video')->nullable($value = true);//URL de Youtube o Vimeo con un video del inmueble.
            $table->integer('id_property_condition')->nullable($value = true);//Identificador que indica la condición de la propiedad, ver la sección Condiciones de la propiedad.
            $table->string('property_condition_label')->nullable($value = true);//Nombre de la condición de la propiedad.
            $table->integer('id_status_on_page')->nullable($value = true);//Identificador que indica el estado de la propiedad en la página web, ver la sección Estados en la página web de la propiedad.
            $table->string('status_on_page_label')->nullable($value = true);//Nombre del estado en la página web de la propiedad.
            $table->string('map')->nullable($value = true);//Coordenadas de Google maps (latitude y longitude) de la propiedad, ver la sección Publicación en Google maps de la propiedad.
            $table->string('latitude')->nullable($value = true);//Latitud de Google maps de la propiedad, ver la sección Publicación en Google maps de la propiedad.
            $table->string('longitude')->nullable($value = true);//Logitud de Google maps de la propiedad, ver la sección Publicación en Google maps de la propiedad.
            $table->integer('building_date')->nullable($value = true);//Año de construccion de la propiedad.
            $table->boolean('network_share')->nullable($value = true);//Valor booleano (true o false) que indica si la propiedad se comparte en la red inmobiliaria o no.
            $table->integer('visits')->nullable($value = true);//Número de visitas con las que cuenta un inmueble, ver la sección Visitas de la propiedad.
            $table->timestamps();
            $table->string('reference')->nullable($value = true);//Referencia interna de la propiedad.
            $table->string('comment')->nullable($value = true);//Comentarios internos de la propiedad.
            $table->integer('id_rents_type')->nullable($value = true);//Identificador que indica el tipo de renta de la propiedad, ver la sección Tipos de renta de la propiedad.
            $table->string('rents_type_label')->nullable($value = true);//Nombre del tipo de renta de la propiedad, ver la sección Tipos de renta de la propiedad.
            $table->string('zip_code')->nullable($value = true);//Código postal de la propiedad.
            $table->integer('id_availability')->nullable($value = true);//Identificador que indica la disponibilidad de la propiedad, ver la sección Disponibilidad de la propiedad.
            $table->string('availability_label')->nullable($value = true);//Nombre de la disponibilidad de la propiedad, ver la sección Disponibilidad de la propiedad.
            $table->integer('id_publish_on_map')->nullable($value = true);//Identificador que indica el tipo de publicación en Google maps, ver la sección Publicación en Google maps de la propiedad.
            $table->string('publish_on_map_label')->nullable($value = true);//Nombre del tipo de publicación en Google maps, ver la sección Publicación en Google maps de la propiedad.
            //$table->json('galleries')->nullable($value = true);//Array con las galerías de imágenes asociadas a la propiedad, ver la sección Galerías de imágenes de la propiedad.
            //$table->json('features')->nullable($value = true);//Características internas y externas asociadas a la propiedad, ver la sección Características de la propiedad.
            //$table->json('portals')->nullable($value = true);//Portales activos para la sincronización con la propiedad, ver la sección Portales aliados.
            //$table->string('label')->nullable($value = true);//Etiqueta personalizada asignada al inmueble. Si no tiene una etiqueta asignada devuelve un string vacio.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
