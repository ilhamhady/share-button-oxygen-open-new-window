/* Add this code fuction if your dashicons didn't loaded at the frontend. 
 * You need to install the code snippets plugin to add it. 
 */

function reload_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'reload_dashicons', 999);
