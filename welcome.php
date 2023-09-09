<?php
function wporg_simple_role() {
    add_role(
        'demo_admin',
        'Demo Admin',
        array(
            'read'            => true, 
            'create_posts'      => true, 
            'edit_posts'        => true, 
            'edit_others_posts' => true, 
            'publish_posts' => true, 
            'manage_categories' => true,
            'mycustom_capy' =>true,
            'plugins'            => true,
            'edit_plugins'            => false,
            'activate_plugins'            => false,
            'deactivate_plugins'            => false,
            'update_plugins'            => false,
            'install_plugins'            => false,
            'delete_plugins'            => false,
            'manage_woocommerce'            => true,
            'view_woocommerce_reports'            => true,
            'edit_product'            => true,
            'read_product'            => true,
            'delete_product'            => true,
            'edit_products'            => true,
            'edit_others_products'            => true,
            'publish_products'            => true,
            'edit_published_products'            => true,
            'manage_product_terms'            => true,
            'assign_product_terms'            => true,
            'edit_shop_order'            => true,
            'read_shop_order'            => true,
            'delete_shop_order'            => true,
            'edit_shop_orders'            => true,
            'edit_others_shop_orders'            => true,
            'publish_shop_orders'            => true,
            'manage_shop_order_terms'            => true,
            'edit_shop_coupon'            => true,
            'read_shop_coupon'            => true,
            'delete_shop_coupon'            => true,
            'edit_shop_coupon'            => true,
            'edit_others_shop_coupons'            => true,
            'publish_shop_coupons'            => true,
            'read_private_shop_coupons'            => true,
            'update_core'            => true,
            'list_users'            => true,
            'remove_users'            => true,
            'promote_users'            => true,
            'create_users'            => true,
            'create_edit'            => true,
            'unfiltered_upload'            => true,
            'unfiltered_html'            => true,
            'edit_dashboard'            => true,
            'moderate_comments'            => true,
            'manage_links'            => true,
            'upload_file'            => true,
            'import'            => true,
            'level_10'            => true,
            'level_9'            => true,
            'level_8'            => true,
            'level_7'            => true,
            'level_6'            => true,
            'level_5'            => true,
            'level_4'            => true,
            'level_3'            => true,
            'level_2'            => true,
            'level_1'            => true,
            'level_0'            => true,
            'edit_dashboard'            => true,
        ),
    );  
    $admin_role_set = get_role( 'administrator' )->capabilities;
         

}
add_action( 'init', 'wporg_simple_role' );

function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        'Custom Menu Title',
        'custom menu',
        'mycustom_capy',
        'my_menu_slug',
        'my_menu_callback',
        '',
        6
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

function my_menu_callback(){
    echo 'udayyy';

}
     
 add_action('wp_footer','mybutton');
function mybutton(){

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Access To Bazzar Demo
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-popup" id="myForm">
  
        <form id="formdata" method="post" action="">
      
          <input  id="fname1" name="fname1" type="text" placeholder="Enter Your Name" /> <span id="first"></span><br><br>
          <input class="input" id="email1" name="email1" type="email" placeholder="Enter Your Email"/> <span id="require"></span><br><br>
          <input class="input" id="number" name="number" type="number" placeholder="Enter Your Number(Optional)" style="width:100%;"/><br><br>
          
         <?php
          $countries_obj   = new WC_Countries();
    $countries   = $countries_obj->__get('countries');
    
    
    woocommerce_form_field('my_country_field', array(
    'type'       => 'select',
    'class'      => array( 'chzn-drop' ),
     'label'      => __('Select A Country'),
    'placeholder'    => __('Enter something'),
    'options'    => $countries
    )
    );
    
    ?>
       <a id="data_sbt" id="show" class="tijarah-btn" type="button" href="">submit</a>
          
        </form>

    
   
      </div>
      </div>
     
    </div>
  </div>
</div>
<?php
}
add_action( 'wp_enqueue_scripts', 'my_enqueue1' );
    function my_enqueue1() {
        wp_enqueue_script( 'ajax-script-js', plugins_url( 'mypublic.js', __FILE__ ));
   
    wp_localize_script( 'ajax-script-js', 'ajax_object1',
            array( 'ajax_url1' => admin_url( 'admin-ajax.php' )) );
            
    }

    function my_action1(){
     
        if(isset($_POST['fname1']) && isset($_POST['email1']) && isset($_POST['number']) && isset($_POST['my_country_field']) ){
        
        
            global $wpdb; 
        
            $fname1=$_POST['fname1'];
            $email1=$_POST['email1']; 
            $number=$_POST['number']; 
            $my_country_field=$_POST['my_country_field']; 
            $usertype='';
            $remark='';
            $other='';
            $ip='';
         
          
        
        
                $wp_custom_plugin = $wpdb->prefix . 'contactus_detail';
        
                $sql = $wpdb->prepare("INSERT INTO $wp_custom_plugin (fname, email, contact, interest, usertype, remark, other, ip) VALUES
                 (%s, %s, %s, %s, %s, %s, %s, %s)", $fname1."(".$my_country_field.")",$email1,$number,$interst,$usertype,$remark,$other,$ip);
        
                $wpdb->query($sql);
                
                // get the inserted record id.
        
                $id = $wpdb->insert_id;
        }
        
    }  
        add_action( 'wp_ajax_my_action1', 'my_action1' );
        add_action( 'wp_ajax_nopriv_my_action1', 'my_action1' ); 

      
     