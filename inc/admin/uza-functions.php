<?php
// ADMIN PAGE

function uza_add_admin_page(){
    // add_menu_page( 'My Page Title', 'My Page', 'edit_others_posts', 'my_page_slug', 'my_page_function', plugins_url( 'myplugin/images/icon.png' ), 6 );
    add_menu_page('Uza Theme Options', 'Uza', 'manage_options', 'uza_main_page', 'uza_theme_create_main_page', '', 110);

    // Add sub pages
    // Uza main page
    add_submenu_page('uza_main_page', 'Uza Settings', 'Settings', 'manage_options', 'uza_main_page', 'uza_theme_create_main_page');
    // Settings pages
    add_submenu_page('uza_main_page', 'Uza Slider', 'Slider', 'manage_options', 'uza_slider_page', 'uza_theme_create_slider_page');

    // Activate our custom settings
    add_action('admin_init', 'uza_custom_settings');

}
add_action('admin_menu', 'uza_add_admin_page');

require_once 'settings/settings.php';
require_once 'ui/pages-ui.php';

// Create cuatom post type Slider
add_action('init', 'uza_custom_post_type_init');
require_once 'inc/slider-post-type.php';

// Create Metaboxes
add_action('admin_init', 'uza_admin_metabox_init');
require_once 'inc/metaboxes/metabox.php';

// Enqueue scripts and styles
add_action('admin_enqueue_scripts', 'uza_admin_scripts_enqueue');
require_once 'inc/enqueue.php';

// Save slider meta data in DB
add_action('save_post_slider', 'uza_save_slider_post_admin', 10, 3);
require_once 'inc/process/slider_post.php';

// Injection slider meta data to filter
add_filter('the_content', 'uza_slider_data_filter_content');
require_once 'inc/process/slider-data-filter.php';


class irisDemo {
	function __construct(){
		add_action( 'admin_init', array( $this, 'init') );
		add_action( 'admin_menu', array( $this, 'add_options_page') );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts') );
	}

	function init(){
		register_setting( 'iris_options', 'iris_options' );
	}

	function add_options_page(){
		add_options_page( 'Демонстрация Iris Color Picker', 'Демо Iris', 'manage_options', 'iris_color_pick', array( $this, 'options') );
	}

	/**
	 * Страница настроек
	 */
	function options(){
		?>
		<div class="wrap">
			<h2><?php echo get_admin_page_title() ?></h2>
			<form method="post" action="options.php">
	<?php settings_fields( 'iris_options' ); ?>
	<?php $options = get_option( 'iris_options' );?>
	<p>
	<input class="iris_color" name="iris_options[link_color]" id="link-color" type="text" value="<?php echo $options['link_color']; ?>">
	</p>
	<?php submit_button();?>
			</form>
		</div>
		<?php
	}

	/**
	 * Подгружаем стили и скрипты
	 */
	function enqueue_scripts( $hook ) {
		// Убедимся, что это страница настроек нашего плагина
		if( 'settings_page_'.'iris_color_pick' != $hook )
			return;
			wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		// подключаем свой стиль
		// wp_enqueue_script( 'script_123', plugins_url( 'script.js', __FILE__ ), array( 'jquery', 'wp-color-picker' ), false, 1 );
		add_action( 'admin_footer', array( $this, 'admin_footer_script'), 99 );
	}

	/**
	 * Подключаем свой скрпит в подвал
	 */
	function admin_footer_script(){
		?>
		<script type="text/javascript">
		jQuery(document).ready(function($){
			$('.iris_color').wpColorPicker({
	// устанавливает цвет по умолчанию, также цвет по умолчанию
	// из атрибута value у input
	defaultColor: false,
	// функция обратного вызова, срабатывающая каждый раз
	//при выборе цвета (когда водите мышкой по палитре)
	change: function(event, ui){ },
	// функция обратного вызова, срабатывающая при очистке (сбросе) цвета
	clear: function(){ },
	// спрятать ли выбор цвета при загрузке
	// палитра будет появляться при клике
	hide: false,
	// показывать ли группу стандартных цветов внизу палитры
	// можно добавить свои цвета указав их в массиве: ['#125', '#459', '#78b', '#ab0', '#de3', '#f0f']
	palettes: true
			});
		});
		</script>
		<?php
	}

}

new irisDemo();

function wpa82718_scripts() {
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script(
		'iris',
		admin_url( 'js/iris.min.js' ),
		array( 'jquery-ui-draggable', 'jquery-ui-slider', 'jquery-touch-punch' ),
		false,
		1
	);
	wp_enqueue_script(
		'wp-color-picker',
		admin_url( 'js/color-picker.min.js' ),
		array( 'iris' ),
		false,
		1
	);
	$colorpicker_l10n = array(
		'clear' => __( 'Clear' ),
		'defaultString' => __( 'Default' ),
		'pick' => __( 'Select Color' ),
		'current' => __( 'Current Color' )
	);
	wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', $colorpicker_l10n );

}
add_action( 'wp_enqueue_scripts', 'wpa82718_scripts', 100 );
