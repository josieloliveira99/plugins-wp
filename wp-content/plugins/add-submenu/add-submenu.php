<?php
/**
 * Plugin Name: Add Submenu
 * Plugin URI:  https://example.com/plugins/the-basics/
 * Description: Add submenu item
 * Version:     1.0
 * Author:      Josiel Q. de Oliveira
 * Author URI:  https://author.example.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: add-submenu
 * Domain Path: /languages
 */

 add_action('admin_menu', 'registrar_submenu');

 function registrar_submenu(){
  
  add_submenu_page(
    'options-general.php', /*onde irá aparecer*/
    'Página de configuração', /*titulo da pagina*/
    'Menu Plugin', /*nome do menu*/
    'manage_options',/*permissão do usuario*/
    'smenu_slug_config',/*identificador unico*/
    'smenu_slug_config_cb'/*funcao de callback que criara a pagina*/
  );

  add_submenu_page(
    'themes.php', /*onde irá aparecer*/
    'Página de tema', /*titulo da pagina*/
    'Menu Plugin', /*nome do menu*/
    'edit_theme_options',/*permissão do usuario*/
    'smenu_slug_theme',/*identificador unico*/
    'smenu_slug_theme_cb'/*funcao de callback que criara a pagina*/
  );

  add_menu_page(
    'Página de configuracao', /*titulo do menu*/
    'Configuracoes personalizadas', /*titulo da pagina*/
    'manage_options',/*permissão do usuario*/
    'smenu_slug_page',/*identificador unico*/
    'smenu_slug_page_cb',/*callback*/
    'dashicons-hammer',/*funcao de callback que criara a pagina*/
    9
  );

 }

 function smenu_slug_config_cb(){
   echo "<h1>Página de configuração do plugin 1</h1>";
 }

 function smenu_slug_theme_cb(){
   echo "<h1>Página de configuração do plugin 2</h1>";
 }
 
 function smenu_slug_page_cb(){
   echo "<h1>Página de configuração do plugin 3</h1>";
   echo "<pre>";
   print_r(wp_upload_dir());
 }



