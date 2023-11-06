<?php
/*
Plugin Name: Restore Classic Widgets
Description: Description: Restore and enable the previous classic widgets settings screens and disables the Gutenberg block editor from managing widgets. No expiration date.
Version: 3.5
Text Domain: restoreclassic
Domain Path: /language
Author: Bill Minozzi
Author URI: http://billminozzi.com
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
// Make sure the file is not directly accessible.
if (!defined('ABSPATH')) {
	die('We\'re sorry, but you can not directly access this file.');
}
$restoreclassic_plugin_data = get_file_data(__FILE__, array('Version' => 'Version'), false);
$restoreclassic_plugin_version = $restoreclassic_plugin_data['Version'];
define('RESTORECLASSICPATH', plugin_dir_path(__file__));
define('RESTORECLASSICURL', plugin_dir_url(__file__));
define('RESTORECLASSICVERSION', $restoreclassic_plugin_version);
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');
function wptools_custom_plugin_row_meta($links, $file)
{
	if (strpos($file, 'restore_classic_widgets.php') !== false) {
		if (rand(0, 1) == 0)
			$new_links['other'] = '<a id="restoreclassicmore" href="#" target="_blank"><b><font color="#FF6600">Click To Get More 35 Free Tools</font></b></a>';
		else
			$new_links['other'] = '<a id="restoreclassicmore" href="#" target="_blank"><b><font color="#FF3131">Click To Get More 35 Free Tools</font></b></a>';
		$links = array_merge($links, $new_links);
	}
	return $links;
}
add_action('admin_menu', 'restorecw_init');

function restorecw_init()
{
	add_management_page(
		'More Useful Tools',
		'<font color="#FF6600">More Useful Tools</font>', // string $menu_title
		'manage_options',
		'restorecw_new_more_plugins', // slug
		'restorecw_new_more_plugins',
		1
	);
}
function restorecw_plugin_row_meta($links, $file)
{
	if (strpos($file, 'restore_classic_widgets.php') !== false) {
		if (is_multisite())
			$url = admin_url() . "plugin-install.php?s=sminozzi&tab=search&type=author";
		else
			$url = admin_url() . "admin.php?page=restorecw_new_more_plugins";
		$new_links['Pro'] = '<a href="' . $url . '" target="_blank"><b><font color="#FF6600">Click To see more FREE plugins from same author</font></b></a>';
		$links = array_merge($links, $new_links);
	}
	return $links;
}
add_filter('plugin_row_meta', 'restorecw_plugin_row_meta', 10, 2);


function restorecw_do_ajax() {
	if (!function_exists('wp_get_current_user')) {
		require_once(ABSPATH . "wp-includes/pluggable.php");
	}
	if (is_admin() or is_super_admin()) {
		// add_action('admin_enqueue_scripts', 'restore_classic_load_upsell');
		add_action('wp_ajax_restore_install_plugin2', 'restore_install_plugin2');
		add_action('wp_ajax_nopriv_restore_install_plugin2', 'restore_install_plugin2');
	}
}
add_action('init', "restorecw_do_ajax", 1000);



function restore_install_plugin2()
{
	if (isset($_POST['slug'])) {
		$slug = sanitize_text_field($_POST['slug']);
	} else {
		echo 'Fail error (-5)';
		wp_die();
	}
	if (isset($_POST['nonce'])) {
		$nonce = sanitize_text_field($_POST['nonce']);
		if (!wp_verify_nonce($nonce, 'restoreclassic_install_plugin'))
			die('Bad Nonce');
	} else
		wp_die('nonce not set');

	if ($slug != "database-backup" &&  $slug != "bigdump-restore" &&  $slug != "easy-update-urls" &&  $slug != "s3cloud" &&  $slug != "toolsfors3" && $slug != "antihacker" && $slug != "toolstruthsocial" && $slug != "stopbadbots" && $slug != "wptools" && $slug != "recaptcha-for-all" && $slug != "wp-memory") {
				wp_die('wrong slug');
	}



	$plugin['source'] = 'repo'; // $_GET['plugin_source']; // Plugin source.
	require_once ABSPATH . 'wp-admin/includes/plugin-install.php'; // Need for plugins_api.
	require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php'; // Need for upgrade classes.
	// get plugin information
	$api = plugins_api('plugin_information', array('slug' => $slug, 'fields' => array('sections' => false)));
	if (is_wp_error($api)) {
		echo 'Fail error (-1)';
		wp_die();
		// proceed
	} else {
		// Set plugin source to WordPress API link if available.
		if (isset($api->download_link)) {
			$plugin['source'] = $api->download_link;
			$source =  $api->download_link;
		} else {
			echo 'Fail error (-2)';
			wp_die();
		}
		$nonce = 'install-plugin_' . $api->slug;
		$plugin = $slug;
		// verbose...
		//    $upgrader = new Plugin_Upgrader($skin = new Plugin_Installer_Skin(compact('type', 'title', 'url', 'nonce', 'plugin', 'api')));
		class restore_QuietSkin extends \WP_Upgrader_Skin
		{
			public function feedback($string, ...$args)
			{ /* no output */
			}
			public function header()
			{ /* no output */
			}
			public function footer()
			{ /* no output */
			}
		}
		$skin = new restore_QuietSkin(array('api' => $api));
		$upgrader = new Plugin_Upgrader($skin);
		// var_dump($upgrader);
		try {
			$upgrader->install($source);
			//	get all plugins
			$all_plugins = get_plugins();
			// scan existing plugins
			foreach ($all_plugins as $key => $value) {
				// get full path to plugin MAIN file
				// folder and filename
				$plugin_file = $key;
				$slash_position = strpos($plugin_file, '/');
				$folder = substr($plugin_file, 0, $slash_position);
				// match FOLDER against SLUG
				// if matched then ACTIVATE it
				if ($slug == $folder) {
					// Activate
					$result = activate_plugin(ABSPATH . 'wp-content/plugins/' . $plugin_file);
					if (is_wp_error($result)) {
						// Process Error
						echo 'Fail error (-3)';
						wp_die();
					}
				} // if matched
			}
		} catch (Exception $e) {
			echo 'Fail error (-4)';
			wp_die();
		}
	} // activation
	wp_die('OK');
}
function restorecw_new_more_plugins()
{
	$plugins_to_install = array();
	$plugins_to_install[0]["Name"] = "Anti Hacker Plugin";
	$plugins_to_install[0]["Description"] = "Firewall, Scanner, Login Protect, block user enumeration and TOR, disable Json WordPress Rest API, xml-rpc (xmlrpc) & Pingback and more security tools...";
	$plugins_to_install[0]["image"] = "https://ps.w.org/antihacker/assets/icon-256x256.gif?rev=2524575";
	$plugins_to_install[0]["slug"] = "antihacker";
	$plugins_to_install[1]["Name"] = "Stop Bad Bots";
	$plugins_to_install[1]["Description"] = "Stop Bad Bots, Block SPAM bots, Crawlers and spiders also from botnets. Save bandwidth, avoid server overload and content steal. Blocks also by IP.";
	$plugins_to_install[1]["image"] = "https://ps.w.org/stopbadbots/assets/icon-256x256.gif?rev=2524815";
	$plugins_to_install[1]["slug"] = "stopbadbots";
	$plugins_to_install[2]["Name"] = "WP Tools";
	$plugins_to_install[2]["Description"] = "More than 35 useful tools! It is a swiss army knife, to take your site to the next level.";
	$plugins_to_install[2]["image"] = "https://ps.w.org/wptools/assets/icon-256x256.gif?rev=2526088";
	$plugins_to_install[2]["slug"] = "wptools";
	$plugins_to_install[3]["Name"] = "reCAPTCHA For All";
	$plugins_to_install[3]["Description"] = "Protect ALL Pages of your site against bots (spam, hackers, fake users and other types of automated abuse)
	with invisible reCaptcha V3 (Google). You can also block visitors from China.";
	$plugins_to_install[3]["image"] = "https://ps.w.org/recaptcha-for-all/assets/icon-256x256.gif?rev=2544899";
	$plugins_to_install[3]["slug"] = "recaptcha-for-all";
	$plugins_to_install[4]["Name"] = "WP Memory";
	$plugins_to_install[4]["Description"] = "Check High Memory Usage, Memory Limit, PHP Memory, show result in Site Health Page and fix php low memory limit.";
	$plugins_to_install[4]["image"] = "https://ps.w.org/wp-memory/assets/icon-256x256.gif?rev=2525936";
	$plugins_to_install[4]["slug"] = "wp-memory";

	/*
	$plugins_to_install[5]["Name"] = "Truth Social";
	$plugins_to_install[5]["Description"] = "Tools and feeds for Truth Social new social media platform and Twitter.";
	$plugins_to_install[5]["image"] = "https://ps.w.org/toolstruthsocial/assets/icon-256x256.png?rev=2629666";
	$plugins_to_install[5]["slug"] = "toolstruthsocial";
	*/
	$plugins_to_install[5]["Name"] = "Database Backup";
	$plugins_to_install[5]["Description"] = "Database Backup with just one click.";
	$plugins_to_install[5]["image"] = "https://ps.w.org/database-backup/assets/icon-256x256.gif?rev=2862571";
	$plugins_to_install[5]["slug"] = "database-backup";

	$plugins_to_install[6]["Name"] = "Database Restore Bigdump";
	$plugins_to_install[6]["Description"] = "Database Restore with BigDump script.";
	$plugins_to_install[6]["image"] = "https://ps.w.org/bigdump-restore/assets/icon-256x256.gif?rev=2872393";
	$plugins_to_install[6]["slug"] = "bigdump-restore";


	$plugins_to_install[7]["Name"] = "Easy Update URLs";
	$plugins_to_install[7]["Description"] = "Fix your URLs at database after cloning or moving sites.";
	$plugins_to_install[7]["image"] = "https://ps.w.org/easy-update-urls/assets/icon-256x256.gif?rev=2866408";
	$plugins_to_install[7]["slug"] = "easy-update-urls";

	$plugins_to_install[8]["Name"] = "S3 Cloud Contabo";
	$plugins_to_install[8]["Description"] = "Connect you with your Contabo S3-compatible Object Storage.";
	$plugins_to_install[8]["image"] = "https://ps.w.org/s3cloud/assets/icon-256x256.gif?rev=2855916";
	$plugins_to_install[8]["slug"] = "s3cloud";

	$plugins_to_install[9]["Name"] = "Tools for S3 AWS Amazon";
	$plugins_to_install[9]["Description"] = "Connect you with your Amazon S3-compatible Object Storage.";
	$plugins_to_install[9]["image"] = "https://ps.w.org/toolsfors3/assets/icon-256x256.gif?rev=2862487";
	$plugins_to_install[9]["slug"] =  "toolsfors3";

?>
	<div style="padding-right:20px;">
		<br>
		<h2>Useful FREE Plugins of the same author of Restore Classic Widgets</h2>
		<div id="bill-wrap-install" class="bill-wrap-install" style="display:none">
			<h3>Please wait</h3>
			<big>
				<h4>
					Installing plugin <div id="billpluginslug">...</div>
				</h4>
			</big>
			<img src="/wp-admin/images/wpspin_light-2x.gif" id="billimagewaitfbl" style="display:none;margin-left:0px;margin-top:0px;" />
			<br />
		</div>
		<table style="margin-right:20px; border-spacing: 0 25px; " class="widefat" cellspacing="0" id="restorecw-more-plugins-table">
			<tbody class="restorecw-more-plugins-body">
				<?php
				$counter = 0;
				$total = count($plugins_to_install);
				for ($i = 0; $i < $total; $i++) {
					if ($counter % 2 == 0) {
						echo '<tr style="background:#f6f6f1;">';
					}
					++$counter;
					if ($counter % 2 == 1)
						echo '<td style="max-width:140px; max-height:140px; padding-left: 40px;" >';
					else
						echo '<td style="max-width:140px; max-height:140px;" >';
					echo '<img style="width:100px;" src="' . esc_url($plugins_to_install[$i]["image"]) . '">';
					echo '</td>';
					echo '<td style="width:40%;">';
					echo '<h3>' . esc_attr($plugins_to_install[$i]["Name"]) . '</h3>';
					echo esc_attr($plugins_to_install[$i]["Description"]);
					echo '<br>';
					echo '</td>';
					echo '<td style="max-width:140px; max-height:140px;" >';
					if (restore_plugin_installed($plugins_to_install[$i]["slug"]))
						echo '<a href="#" class="button activate-now">Installed</a>';
					else
						echo '<a href="#" id="' . esc_attr($plugins_to_install[$i]["slug"]) . '"class="button button-primary rc-bill-install-now">Install</a>';
					echo '</td>';
					if ($counter % 2 == 1) {
						echo '<td style="width; 100px; border-left: 1px solid gray;">';
						echo '</td>';
					}
					if ($counter % 2 == 0) {
						echo '</tr>';
					}
				}
				?>
			</tbody>
		</table>
		<?php echo '<div id="restore_nonce" style="display:none;" >' . wp_create_nonce('restoreclassic_install_plugin'); ?>
	</div>
<?php
}
function restore_plugin_installed($slug)
{
	$all_plugins = get_plugins();
	foreach ($all_plugins as $key => $value) {
		$plugin_file = $key;
		$slash_position = strpos($plugin_file, '/');
		$folder = substr($plugin_file, 0, $slash_position);
		// match FOLDER against SLUG
		if ($slug == $folder) {
			return true;
		}
	}
	return false;
}
function restore_classic_load_upsell()
{
	wp_enqueue_style('restore-more2', RESTORECLASSICURL . 'includes/more/more2.css');
	wp_register_script('restore-more2-js', RESTORECLASSICURL . 'includes/more/more2.js', array('jquery'));
	wp_enqueue_script('restore-more2-js');
	wp_localize_script('restore-more2-js', 'restoreclassic', array('url' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'restore_classic_load_upsell', 1000);
function restoreclassic_ajaxurl()
{
	echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}





// 08 2023
require_once ABSPATH . 'wp-includes/pluggable.php';
// check 4 errors...

if(is_admin() and current_user_can("manage_options")){
    if (!class_exists('Bill_Class_Diagnose') and !function_exists('bill_my_custom_hooking_function')) {
		function bill_my_custom_hooking_function() {
            $plugin_slug = "restore-classic-widgets"; // Replace with your actual text domain
            $plugin_text_domain = "restore-classic-widgets"; // Replace with your actual text domain
                $notification_url = "https://wpmemory.com/fix-low-memory-limit/";
			$notification_url2 =
				"https://wptoolsplugin.com/site-language-error-can-crash-your-site/";
            require_once(RESTORECLASSICPATH . "includes/checkup/bill_class_diagnose.php");
            }
		add_action('init', 'bill_my_custom_hooking_function');
    }
}

// catch js errors...

if (! class_exists('bill_catch_errors') and !function_exists('bill_my_custom_hooking_function2')) {
    function bill_my_custom_hooking_function2() {
        require_once(RESTORECLASSICPATH . "includes/checkup/class_bill_catch_errors.php");   
    }
    add_action('init', 'bill_my_custom_hooking_function2');
 }


// run the ajax...
if (!function_exists('bill_get_js_errors')) {
    function bill_get_js_errors()
        {
            if (isset($_REQUEST)) {
                if (!isset($_REQUEST['bill_js_error_catched']))
                    die("empty error");
                if (!wp_verify_nonce($_POST['_wpnonce'], 'jquery-bill')) {
                    status_header(406, 'Invalid nonce');
                    die();
                }
                $bill_js_error_catched = sanitize_text_field($_REQUEST['bill_js_error_catched']);
                $bill_js_error_catched = trim($bill_js_error_catched);
                if (!empty($bill_js_error_catched)) {
                    $txt = 'Javascript ' . $bill_js_error_catched;
                    error_log($txt);
                    // send email
                    // bill_php_error($txt);
                    //set_transient( 'sbb_javascript_error', '1', (3600*24) );
                    //add_option( 'sbb_javascript_error', time() );
                    die('OK!!!');
                }
            }
            die('NOT OK!');
        }
}
