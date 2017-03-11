<?php
add_action( 'admin_menu', 'amit_add_admin_menu' );
add_action( 'admin_init', 'amit_settings_init' );


function amit_add_admin_menu(  ) { 

	add_menu_page( 'Theme Options', 'Theme Options', 'manage_options', 'theme_options', 'amit_options_page' );

}


function amit_settings_init(  ) { 

	register_setting( 'pluginPage', 'amit_settings' );

	add_settings_section(
		'amit_pluginPage_section', 
		__( 'Your section description', 'amit' ), 
		'amit_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'amit_select_field_0', 
		__( 'Settings field description', 'amit' ), 
		'amit_select_field_0_render', 
		'pluginPage', 
		'amit_pluginPage_section' 
	);

	add_settings_field( 
		'amit_textarea_field_1', 
		__( 'Settings field description', 'amit' ), 
		'amit_textarea_field_1_render', 
		'pluginPage', 
		'amit_pluginPage_section' 
	);

	add_settings_field( 
		'amit_radio_field_2', 
		__( 'Settings field description', 'amit' ), 
		'amit_radio_field_2_render', 
		'pluginPage', 
		'amit_pluginPage_section' 
	);

	add_settings_field( 
		'amit_checkbox_field_3', 
		__( 'Settings field description', 'amit' ), 
		'amit_checkbox_field_3_render', 
		'pluginPage', 
		'amit_pluginPage_section' 
	);

	add_settings_field( 
		'amit_text_field_4', 
		__( 'Settings field description', 'amit' ), 
		'amit_text_field_4_render', 
		'pluginPage', 
		'amit_pluginPage_section' 
	);


}


function amit_select_field_0_render(  ) { 

	$options = get_option( 'amit_settings' );
	?>
	<select name='amit_settings[amit_select_field_0]'>
		<option value='1' <?php selected( $options['amit_select_field_0'], 1 ); ?>>Option 1</option>
		<option value='2' <?php selected( $options['amit_select_field_0'], 2 ); ?>>Option 2</option>
	</select>

<?php

}


function amit_textarea_field_1_render(  ) { 

	$options = get_option( 'amit_settings' );
	?>
	<textarea cols='40' rows='5' name='amit_settings[amit_textarea_field_1]'> 
		<?php echo $options['amit_textarea_field_1']; ?>
 	</textarea>
	<?php

}


function amit_radio_field_2_render(  ) { 

	$options = get_option( 'amit_settings' );
	?>
	<input type='radio' name='amit_settings[amit_radio_field_2]' <?php checked( $options['amit_radio_field_2'], 1 ); ?> value='1'>
	<?php

}


function amit_checkbox_field_3_render(  ) { 

	$options = get_option( 'amit_settings' );
	?>
	<input type='checkbox' name='amit_settings[amit_checkbox_field_3]' <?php checked( $options['amit_checkbox_field_3'], 1 ); ?> value='1'>
	<?php

}


function amit_text_field_4_render(  ) { 

	$options = get_option( 'amit_settings' );
	?>
	<input type='text' name='amit_settings[amit_text_field_4]' value='<?php echo $options['amit_text_field_4']; ?>'>
	<?php

}


function amit_settings_section_callback(  ) { 

	echo __( 'This section description', 'amit' );

}


function amit_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>Theme Options</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>
