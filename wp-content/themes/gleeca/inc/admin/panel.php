<?php
if ( get_magic_quotes_gpc() ) {
    $_POST      = array_map( 'stripslashes_deep', $_POST );
    $_GET       = array_map( 'stripslashes_deep', $_GET );
    $_COOKIE    = array_map( 'stripslashes_deep', $_COOKIE );
    $_REQUEST   = array_map( 'stripslashes_deep', $_REQUEST );
}
$options = array (
 
	array( "name" => "General Settings",
			"type" => "title"),
	 
	array( "type" => "open"),
	
	array( "name" => "Header Logo",
		"desc" => "Enter the Logo URL",
		"id" => "logo",
		"type" => "text",
		"std" => ""),	
	
	array( "name" => "Google Analytics Code",
		"desc" => "Copy & Paste your Google Analytics Code here",
		"id" => "analytics",
		"type" => "textarea",
		"std" => ""),	
	
	array( "type" => "close"),	


	array( "name" => "Home page Settings",
			"type" => "title"),
	 
	array( "type" => "open"),	
	
	array( "name" => "Home Page Meta Title",
		"desc" => "Enter the Home Page Title here",
		"id" => "htitle",
		"type" => "text",
		"std" => ""),
	
	array( "name" => "Home Page Meta Keywords",
		"desc" => "Enter the Home Page Keywords here",
		"id" => "hkeywords",
		"type" => "text",
		"std" => ""),
		
	array( "name" => "Home Page Meta Description",
		"desc" => "Enter the Home Page Description here",
		"id" => "hdescription",
		"type" => "textarea",
		"std" => ""),
		
	array( "name" => "Index Title",
		"desc" => "Enter the Title",
		"id" => "home_title",
		"type" => "text",
		"std" => ""),	

		array( "name" => "Welcome Title",
		"desc" => "Enter the Welcome Title",
		"id" => "welcome_title",
		"type" => "text",
		"std" => ""),		

		array( "name" => "Welcome Content",
		"desc" => "Enter the Welcome Content",
		"id" => "welcome_content",
		"type" => "textarea",
		"std" => ""),	
		array( "name" => "Welcome ReadMore Link",
		"desc" => "Enter the ReadMore Link",
		"id" => "read_more",
		"type" => "text",
		"std" => ""),			
		

array( "name" => "Contact No",
		"desc" => "Enter Header top Contact No",
		"id" => "contact_no",
		"type" => "text",
		"std" => ""),		
array( "name" => "Email Id",
		"desc" => "Enter Header top Email Id",
		"id" => "email_id",
		"type" => "text",
		"std" => ""),		



	// array( "name" => "Index Page Content",
	// 	"desc" => "Enter the Content",
	// 	"id" => "home_content",
	// 	"type" => "textarea",
	// 	"std" => ""),			
		
	array( "type" => "close"),	
	
	array( "name" => "Social Settings",
			"type" => "title"),
	 
	array( "type" => "open"),
	
	array( "name" => "Facebook",
		"desc" => "Enter your Facebook Id.",
		"id" => "facebook",
		"type" => "text",
		"std" => ""),					

	array( "name" => "Twitter",
		"desc" => "Enter your Twitter Id.",
		"id" => "twitter",
		"type" => "text",
		"std" => ""),
		
	array( "name" => "Linked in",
		"desc" => "Enter your Linked in Id.",
		"id" => "linked_in",
		"type" => "text",
		"std" => ""),
		
	array( "name" => "Youtube",
		"desc" => "Enter your Youtube Id.",
		"id" => "youtube",
		"type" => "text",
		"std" => ""),		
				
				
	array( "type" => "close"),	



	
	// array( "name" => "Footer Settings",
	// 		"type" => "title"),
	 
	// array( "type" => "open"),	
	
	// array( "name" => "Quickly Reach Location 1",
	// 	"desc" => "Enter your Location Name.",
	// 	"id" => "location_1",
	// 	"type" => "text",
	// 	"std" => ""),		

	// array( "name" => "Location 1 Landline No",
	// 	"desc" => "Landline No:",
	// 	"id" => "location1_landline",
	// 	"type" => "text",
	// 	"std" => ""),		

	// array( "name" => "Location 1 Mobile No",
	// 	"desc" => "Mobile No:",
	// 	"id" => "location1_mob",
	// 	"type" => "text",
	// 	"std" => ""),		
		
	// 	array( "name" => "Quickly Reach Location 2",
	// 	"desc" => "Enter your Location Name.",
	// 	"id" => "location_2",
	// 	"type" => "text",
	// 	"std" => ""),		

	// array( "name" => "Location 2 Landline No",
	// 	"desc" => "Landline No:",
	// 	"id" => "location2_landline",
	// 	"type" => "text",
	// 	"std" => ""),		

	// array( "name" => "Location 2 Mobile No",
	// 	"desc" => "Mobile No:",
	// 	"id" => "location2_mob",
	// 	"type" => "text",
	// 	"std" => ""),		
	
	// array( "name" => "Footer Copyright Text",
	// 	"desc" => "Enter your Footer Copyright Text",
	// 	"id" => "footer_copyright",
	// 	"type" => "text",
	// 	"std" => "© 2014"),
	
	// array( "type" => "close"),
	
	
	
	
	
	
	
	// 	array( "name" => "Contact Us Page Settings",
	// 		"type" => "title"),
	 
	// array( "type" => "open"),
	
	// array( "name" => "Company Name",
	// 	"desc" => "Enter your Company Name",
	// 	"id" => "cmpname",
	// 	"type" => "text",
	// 	"std" => ""),					

	// array( "name" => "Address Line 1",
	// 	"desc" => "Enter your Address",
	// 	"id" => "address1",
	// 	"type" => "text",
	// 	"std" => ""),
		
	// array( "name" => "Address Line 2",
	// 	"desc" => "Enter your Address",
	// 	"id" => "address2",
	// 	"type" => "text",
	// 	"std" => ""),		
	// array( "name" => "Address Line 3",
	// 	"desc" => "Enter your Address",
	// 	"id" => "address2",
	// 	"type" => "text",
	// 	"std" => ""),		
	// array( "name" => "Mobile No",
	// 	"desc" => "Enter your mobile no",
	// 	"id" => "mobile",
	// 	"type" => "text",
	// 	"std" => ""),		
	// array( "name" => "E-Mail Id",
	// 	"desc" => "Enter your mail id",
	// 	"id" => "mail",
	// 	"type" => "text",
	// 	"std" => ""),		
				
	// array( "type" => "close"),	

		
);

if ( 'save' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		if( $_REQUEST[ $value['id'] ] == '' ) {
			rajesh_update_option( $value['id'], ' ' );
		} else {
			if ( is_array($_REQUEST[ $value['id'] ]) ) {
				$cats = "-1";
				foreach($_REQUEST[ $value['id'] ] as $cat){
					$cats .= "," . $cat;
				}
				rajesh_update_option( $value['id'], str_replace("-1,", "", $cats) );
			}
			else { rajesh_update_option( $value['id'], stripslashes($_REQUEST[ $value['id'] ]) ); }
		}
	}

} else if( 'reset' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		delete_option( $value['id'] ); 
	}
}

$i = 0; 
if ( $_REQUEST['action'] == 'save' ) echo '<div id="message" class="updated fade"><p><strong>' . Rajesh_THEMENAME . ' settings saved.</strong></p></div>'; 
?>

<div class="wrap rm_wrap">
<div id="icon-options-general" class="icon32"></div>
<h2><?php echo Rajesh_THEMENAME ?> Settings</h2>
<br />
<form method="post">
  <div class="rm_opts">
    <?php foreach ($options as $value) {
            


            switch ( $value['type'] ) {
             
            case "open":
            ?>
    <?php break;
             
            case "close":
            ?>
  </div>
  </div>
  <br />
  <?php break;	case "title":	$i++;	?>
  <div class="rm_section">
  <div class="rm_title">
    <h3><img src="<?php echo Rajesh_ADMIN_IMAGES . '/trans.png' ?>" class="inactive" alt=""><?php echo $value['name']; ?></h3>
    <span class="submit">
    <input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
    </span>
    <div class="clearfix"></div>
  </div>
  <div class="rm_option" >
  <?php break;	case 'text':?>
  <div class="rm_input rm_text">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( rajesh_get_option( $value['id'] ) != "") { echo stripslashes(rajesh_get_option( $value['id'])  ); } else { echo $value['std']; } ?>" style="width: 415px; border-color: #ccc;" />
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
  </div>
  <?php break;	case 'image':  ?>
  <div class="rm_input rm_text">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <input type="text" name="<?php echo $value[ 'id' ] ?>" id="<?php echo $value[ 'id' ] ?>" value="<?php if ( rajesh_get_option( $value['id'] ) != "") { echo stripslashes(rajesh_get_option( $value['id'])  ); } else { echo $value['std']; } ?>" style="width: 415px; border-color: #ccc;" />
    <?php echo	'<input type="button" id="button' . $meta_box[ 'id' ] . '" value="Browse" style="width: 60px;" class="button button-rajesh-upload" rel="' . $post->ID . '" />';?> <small><?php echo $value['desc']; ?> </small>
    <div class="clearfix"></div>
  </div>
  <?php	break;	case 'textarea':?>
  <div class="rm_input rm_textarea">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( rajesh_get_option( $value['id'] ) != "") { echo stripslashes(rajesh_get_option( $value['id']) ); } else { echo $value['std']; } ?>
</textarea>
    <small><?php echo $value['desc']; ?></small>
    <div class="clearfix"></div>
  </div>
  <?php break;
            }
            }
            ?>
  <input type="hidden" name="action" value="save" />
</form>
</div>
</div>
<?php 
/**
 * Returns the value of an option from the db if it exists.
 */
function rajesh_get_option( $name ) {
	$options = get_option( Rajesh_THEMEOPTIONS );
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return false;
	}
}
/**
 * Updates/Adds an option to the options db.
*/
function rajesh_update_option( $name, $value ) {
	$options = get_option( Rajesh_THEMEOPTIONS );
	if ( $options and !isset($options[$name]) ) { // Adds new value...
		$options[$name] = $value;
		return update_option( Rajesh_THEMEOPTIONS, $options );
	} else {
		if ( $value != $options[$name] ) { // ...or updates it
			$options[$name] = $value;
			return update_option( Rajesh_THEMEOPTIONS, $options );
		} else {
			return false;
		}
	}
}
?>
