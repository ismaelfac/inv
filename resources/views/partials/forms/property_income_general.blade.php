<!-- widget-search-property -->
<aside class="widget widget-search-property">
    <div class="row">
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item custom-select form-group">                  
                <select class="selectpicker" title="Soy un" data-hide-disabled="true" data-live-search="true">
                    <optgroup disabled="disabled" label="disabled">
                        <option>Hidden</option>
                    </optgroup>
                    <optgroup label="Agente">
                        <option>Eliana Robles</option>
                        <option>Ismael Lastre</option>
                        <option>Sinforoso Gumersindo</option>
                    </optgroup>
                    <optgroup label="Cliente">
                        <option>Carolina Herrera</option>
                        <option>Maia Tarazona</option>
                        <option>Jose Gomez</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12 form-group">
            <div class="find-home-item input-group">
                <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </div>
                <input type="text" name="title_inmueble" placeholder="Nombre corto para identificar el inmueble">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item  custom-select">                  
                <select class="selectpicker" title="Tipo de Inmueble" data-hide-disabled="true">
                    <optgroup  label="1">
                        <option label="1">ApartaEstudio</option>
                        <option>Casa</option>
                        <option>Casa Campestre</option>
                        <option>Bodega</option>
                        <option>Apartamento</option>
                    </optgroup>
                </select>
            </div> 
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item  custom-select">                  
                <select class="selectpicker" title="Tipo de Negocio" data-hide-disabled="true">
                    <optgroup  label="Venta">
                        <option label="1">Venta</option>
                        <option>Alquiler</option>
                        <option>Permutar</option>
                    </optgroup>
                </select>
            </div> 
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item">
                <input type="text" name="sale_price" placeholder="Precio de Venta | Solo números">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item">
                <input type="text" name="rental_price" placeholder="Precio de Alquiler | Solo números">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item  custom-select">                  
                <select class="selectpicker" title="Tiempo" data-hide-disabled="true">
                    <optgroup  label="Mensual">
                        <option label="1">Mensual</option>
                        <option>Quincenal</option>
                        <option>Semanal</option>
                        <option>Diario</option>
                    </optgroup>
                </select>
            </div> 
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item">
                <input type="text" name="rental_price" placeholder="Valor de la Administración | Solo números">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item  custom-select">                  
                <select class="selectpicker" title="Tipo Moneda" data-hide-disabled="true">
                    <optgroup  label="Pesos Colombianos">
                        <option label="1">Pesos Colombianos</option>
                        <option>$ Dolares</option>
                        <option>Euros</option>
                        <option>Pesos Argentinos</option>
                    </optgroup>
                </select>
            </div> 
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item  custom-select">                  
                <select class="selectpicker" title="Estado Físico de la Propiedad" data-hide-disabled="true">
                    <optgroup  label="Usado">
                        <option label="1">Usado</option>
                        <option>Nuevo</option>
                        <option>Proyecto</option>
                        <option>En Construcción</option>
                    </optgroup>
                </select>
            </div> 
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item">
                <input type="text" name="min-area" placeholder="Min area (sqft)">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item">
                <input type="text" name="max-area" placeholder="Max area (sqft)">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item  custom-select">                  
                <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                    <optgroup  label="1">
                        <option label="1">1 Beadrooms</option>
                        <option>2 Beadrooms</option>
                        <option>3 Beadrooms</option>
                        <option>4 Beadrooms</option>
                        <option>5 Beadrooms</option>
                    </optgroup>
                </select>
            </div> 
        </div>
        
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-sm-7 col-xs-12">
                    <div class="find-home-item">
                        <!-- shop-filter -->
                        <div class="shop-filter">
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit"  value="You range :"/> 
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</aside>