<?php
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.'));
?>
<script  src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<form id="duplicate_post_settings_form" method="post" action="options.php" style="clear: both">
		<input type="hidden" name="option_page" value="duplicate_post_group"><input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="2ca06f69e1"><input type="hidden" name="_wp_http_referer" value="/wp-admin/options-general.php?page=duplicatepost">
		<header role="tablist" aria-label="Secciones de ajustes" class="nav-tab-wrapper">
			<button type="button" role="tab" class="nav-tab nav-tab-active" aria-selected="true" aria-controls="what-tab" id="what">Calculadora</button>
		</header>

		<section tabindex="0" role="tabpanel" id="what-tab" aria-labelledby="what">
			<h2 class="hide-if-js">Calculadora</h2>
            <h4>Configura la url de tu api, que quedará guardada en la base de datos. Indica tu operando A, tu operando B y la función que quieres realizar.</h4>
            <div id="#formCredentials" class="wrap">
                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="user">URL de la API</label></th>
                            <td><input name="url" type="text" id="url" value="" class="regular-text"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="user">Operando A</label></th>
                            <td><input name="number" type="text" id="operandoA" value="" class="regular-text"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="user">Operando B</label></th>
                            <td><input name="number" type="text" id="operandoB" value="" class="regular-text"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label>Operación</label></th>
                            <td>
                                <select id="operacion">
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicar">Multiplicar</option>
                                    <option value="restar">Dividir</option>
                                    <option value="raiz">Raiz</option>
                                    <option value="porcentaje">Porcentaje</option>                                
                                </select>    
                            </td>                        
                        </tr>
                        <tr>
                            <td><div class="notice inline notice-warning notice-alt"><p>Resultado: </p><input name="number" type="text" id="resultado" value="" class="regular-text"></div></td>                        
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="submit">
			    <input style="text-align: center;" id="operar" class="button button-primary" value="Operar">
			    <input style="text-align: center;" id="guardar" class="button button-secundary" value="Guardar URL">
		    </p>
			
		</section>
		
	</form>
    <script type="text/javascript" src="../wp-content/plugins/pluginConnectApi/includes/js/scripts.js"></script>




