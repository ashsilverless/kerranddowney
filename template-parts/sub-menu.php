<?php if(get_field('sub_menu') == "planning"):
	wp_nav_menu( array( 
	'theme_location' => 'k&d-planning-menu', 
	'container_class' => 'planning-menu-class' ) ); 	
endif; ?>		        

	<?php if(get_field('sub_menu') == "about"):
	wp_nav_menu( array( 
	'theme_location' => 'k&d-about-menu', 
	'container_class' => 'planning-menu-class' ) ); 	
endif; ?>		        

<?php if(get_field('sub_menu') == "gallery"):
	wp_nav_menu( array( 
	'theme_location' => 'k&d-gallery-menu', 
	'container_class' => 'planning-menu-class gallery' ) ); 	
endif; ?>		   

<?php if(get_field('sub_menu') == "safari"):
	wp_nav_menu( array( 
	'theme_location' => 'k&d-safari-menu', 
	'container_class' => 'planning-menu-class' ) ); 	
endif; ?>		