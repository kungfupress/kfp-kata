<?php
/**
 * KFP Kata
 *
 * @package  kfp_kata
 * @author   Juanan Ruiz <kungfupress@gmail.com>
 * @license  GPLv2 http://www.gnu.org/licenses/gpl-2.0.txt
 * @link     https://github.com/kungfupress/kfp-kata
 *
 * @wordpress-plugin
 * Plugin Name:  KFP Kata
 * Plugin URI:   https://github.com/kungfupress/kfp-kata
 * Description:  Gestión de Katas de programación
 * Version:      0.0.1
 * Author:       Juanan Ruiz
 * Author URI:   https://kungfupress.com/
 * PHP Version:  7.1
 */

defined( 'ABSPATH' ) || die();

// Constantes que afectan a todos los ficheros del plugin.
define( 'KFP_KATA_DIR', plugin_dir_path( __FILE__ ) );
define( 'KFP_KATA_PLUGIN_FILE', __FILE__ );
define( 'KFP_KATA_URL', plugin_dir_url( __FILE__ ) );
$default_headers = array( 'Version' => 'Version' );
$plugin_data     = get_file_data( __FILE__, $default_headers, 'plugin' );
define( 'KFP_KATA_VERSION', $plugin_data['Version'] );

// Activación del plugin.
require_once KFP_KATA_DIR . 'include/activate.php';
// Inicializa el plugin.
require_once KFP_KATA_DIR . 'include/plugin-init.php';
// Registra el CPT kata.
require_once KFP_KATA_DIR . 'include/kata-cpt-register.php';
// Registra la taxonomía cinturon.
require_once KFP_KATA_DIR . 'include/nivel-tax-register.php';
