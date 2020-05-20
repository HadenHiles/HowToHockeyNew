<?php

/* Branding */
Redux::setSection( $opt_name , array(
        'icon'      => ' el-icon-smiley',
        'title'     => esc_html__( 'Branding', 'gridlove' ),
        'desc'     => esc_html__( 'Personalize theme by adding your own images', 'gridlove' ),
        'fields'    => array(

            array(
                'id'        => 'logo',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Logo', 'gridlove' ),
                'subtitle'      => esc_html__( 'Upload your logo image here, or leave empty to show the website title instead.', 'gridlove' ),
                'default' => gridlove_get_default_option( 'logo' ),            ),

            array(
                'id'        => 'logo_retina',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Retina logo (2x)', 'gridlove' ),
                'subtitle'      => esc_html__( 'Optionally upload another logo for devices with retina displays. It should be double the size of your standard logo', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'logo_retina' ),
            ),

            array(
                'id'        => 'logo_mini',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Mini logo', 'gridlove' ),
                'subtitle'      => esc_html__( 'Optionally upload another logo which may be used as mobile/tablet logo', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'logo_mini' ),
            ),

            array(
                'id'        => 'logo_mini_retina',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Mini retina logo (2x)', 'gridlove' ),
                'subtitle'      => esc_html__( 'Upload double sized mini logo for devices with retina displays', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'logo_mini_retina' ),
            ),

            array(
                'id'        => 'logo_custom_url',
                'type'      => 'text',
                'title'     => esc_html__( 'Custom logo URL', 'gridlove' ),
                'subtitle'  => esc_html__( 'Optionally specify custom URL if you want logo to point out to some other page/website instead of your home page', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'logo_custom_url' ),
            ),

            array(
                'id'        => 'default_fimg',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__( 'Default featured image', 'gridlove' ),
                'subtitle'      => esc_html__( 'Upload your default featured image/placeholder. It will be displayed for posts that do not have a featured image set.', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'default_fimg' ),
            )

        ) )
);


/* Header */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-bookmark',
        'title'     => esc_html__( 'Header', 'gridlove' ),
        'fields'    => array(
        ) ) );


/* Main header area */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Main', 'gridlove' ),
        'desc'     => esc_html__( 'Modify and style your main header area', 'gridlove' ),
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'header_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Header layout', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose a layout for your header', 'gridlove' ),
                'options'   => array(
                    1 => array( 'title' => esc_html__( 'Layout 1', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_1.png' ) ),
                    2 => array( 'title' => esc_html__( 'Layout 2', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_2.png' ) ),
                    3 => array( 'title' => esc_html__( 'Layout 3', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_3.png' ) ),
                    4 => array( 'title' => esc_html__( 'Layout 4', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_4.png' ) ),
                    5 => array( 'title' => esc_html__( 'Layout 5', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_5.png' ) ),
                    6 => array( 'title' => esc_html__( 'Layout 6', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_6.png' ) )
                ),
                'default'   => gridlove_get_default_option( 'header_layout' ),

            ),

            array(
                'id'        => 'header_site_desc',
                'type'      => 'switch',
                'title'     => esc_html__( 'Enable site description', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display site description below logo', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_site_desc' ),

            ),

            array(
                'id'        => 'header_actions',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Enable special elements in header', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and reorder special elements you want to display', 'gridlove' ),
                'options'   => array(
                    'search-button' => esc_html__( 'Search button', 'gridlove' ),
                    'sidebar-button' => esc_html__( 'Header Sidebar button', 'gridlove' ),
                    'search-form' => esc_html__( 'Search form', 'gridlove' ),
                    'social-menu-drop' => esc_html__( 'Social menu button', 'gridlove' ),
                    'social-menu' => esc_html__( 'Social menu icons list', 'gridlove' ),
                    'login-form' => esc_html__( 'Login form (icon/dropdown)', 'gridlove' ),
                ),
                'default'   => gridlove_get_default_option( 'header_actions' ),

            ),


            array(
                'id' => 'header_height',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Height', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify height for your main header area', 'gridlove' ),
                'desc' => esc_html__( 'Note: Height value is in px.', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_height' ),
                'validate' => 'numeric'
            ),

            array(
                'id' => 'color_header_main_bg',
                'type' => 'color',
                'title' => esc_html__( 'Background color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_main_bg' ),
            ),


            array(
                'id' => 'color_header_main_txt',
                'type' => 'color',
                'title' => esc_html__( 'Text color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_main_txt' ),
            ),

            array(
                'id' => 'color_header_main_acc',
                'type' => 'color',
                'title' => esc_html__( 'Accent color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_main_acc' ),
            ),

            array(
                'id' => 'color_header_bottom_bg',
                'type' => 'color',
                'title' => esc_html__( 'Bottom bar background color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_bottom_bg' ),
                'required' => array( 'header_layout', '=', array( 3, 4, 5, 6 ) )
            ),

            array(
                'id' => 'color_header_bottom_txt',
                'type' => 'color',
                'title' => esc_html__( 'Bottom bar text color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_bottom_txt' ),
                'required' => array( 'header_layout', '=', array( 3, 4, 5, 6 ) )
            ),

            array(
                'id' => 'color_header_bottom_acc',
                'type' => 'color',
                'title' => esc_html__( 'Bottom bar accent color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_bottom_acc' ),
                'required' => array( 'header_layout', '=', array( 3, 4, 5, 6 ) )
            ),

            array(
                'id'        => 'logo_bg',
                'type'      => 'switch',
                'title'     => esc_html__( 'Enable logo background', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to add background color to logo area', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'logo_bg' ),
            ),

            array(
                'id' => 'color_logo_bg',
                'type' => 'color',
                'title' => esc_html__( 'Logo background color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_logo_bg' ),
                'required' => array( 'logo_bg', '=', true )
            ),



            array(
                'id'        => 'header_orientation',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Header orientation', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose if header elements follow site content or browser width ', 'gridlove' ),
                'options'   => array(
                    'content' => array( 'title' => esc_html__( 'Site content', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_content.png' ) ),
                    'wide' => array( 'title' => esc_html__( 'Browser (full width)', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_wide.png' ) ),
                ),


            ),

            array(
                'id'        => 'header_shadow',
                'type'      => 'switch',
                'title'     => esc_html__( 'Apply bottom shadow', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to apply bottom shadow on header (usually good when header is white)', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_shadow' ),
            ),

        ) )
);


/* Top Bar */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Top Bar', 'gridlove' ),
        'desc'     => esc_html__( 'Modify and style your header top bar', 'gridlove' ),
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'header_top',
                'type'      => 'switch',
                'title'     => esc_html__( 'Header top bar', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to enable header top bar', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_top' ),
            ),


            array(
                'id' => 'color_header_top_bg',
                'type' => 'color',
                'title' => esc_html__( 'Background color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_top_bg' ),
                'required' => array( 'header_top', '=', true )
            ),

            array(
                'id' => 'color_header_top_txt',
                'type' => 'color',
                'title' => esc_html__( 'Text color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_top_txt' ),
                'required' => array( 'header_top', '=', true )
            ),

            array(
                'id' => 'color_header_top_acc',
                'type' => 'color',
                'title' => esc_html__( 'Accent color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_top_acc' ),
                'required' => array( 'header_top', '=', true )
            ),

            array(
                'id' => 'header_top_l',
                'type' => 'select',
                'title' => esc_html__( 'Left slot', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose an element to display in left slot of header top bar', 'gridlove' ),
                'options' => gridlove_get_header_top_elements(),
                'default'   => gridlove_get_default_option( 'header_top_l' ),
                'required' => array( 'header_top', '=', true )
            ),

            array(
                'id' => 'header_top_c',
                'type' => 'select',
                'title' => esc_html__( 'Center slot', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose an element to display in center slot of header top bar', 'gridlove' ),
                'options' => gridlove_get_header_top_elements(),
                'default'   => gridlove_get_default_option( 'header_top_c' ),
                'required' => array( 'header_top', '=', true )
            ),

            array(
                'id' => 'header_top_r',
                'type' => 'select',
                'title' => esc_html__( 'Right slot', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose an element to display in right slot of header top bar', 'gridlove' ),
                'options' => gridlove_get_header_top_elements(),
                'default'   => gridlove_get_default_option( 'header_top_r' ),
                'required' => array( 'header_top', '=', true )
            ),



        ) )
);


/* Sticky header area */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Sticky Header', 'gridlove' ),
        'desc'     => esc_html__( 'Modify and style your sticky header area', 'gridlove' ),
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'header_sticky',
                'type'      => 'switch',
                'title'     => esc_html__( 'Display sticky header', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to enable sticky header', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_sticky' ),
            ),

            array(
                'id'        => 'header_sticky_offset',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Sticky header offset', 'gridlove' ),
                'subtitle'  => esc_html__( 'Specify after how many px of scrolling the sticky header appears', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_sticky_offset' ),
                'validate'  => 'numeric',
                'required' => array( 'header_sticky', '=', true )
            ),

            array(
                'id'        => 'header_sticky_up',
                'type'      => 'switch',
                'title'     => esc_html__( 'Smart sticky', 'gridlove' ),
                'subtitle'  => esc_html__( 'Sticky header appears only if you scroll up', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_sticky_up' ),
                'required' => array( 'header_sticky', '=', true )
            ),

            array(
                'id'        => 'header_sticky_logo',
                'type'      => 'radio',
                'title'     => esc_html__( 'Sticky header logo', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose which logo to display on sticky header', 'gridlove' ),
                'options'   => array(
                    'main' => esc_html__( 'Main logo', 'gridlove' ),
                    'mini' => esc_html__( 'Mini (mobile) logo', 'gridlove' ),
                ),
                'default'   => gridlove_get_default_option( 'header_sticky_logo' ),
                'required' => array( 'header_sticky', '=', true )
            ),

            array(
                'id'        => 'header_sticky_colors',
                'type'      => 'radio',
                'title'     => esc_html__( 'Choose sticky header colors from', 'gridlove' ),
                'options'   => array(
                    'main' => esc_html__( 'Main header colors', 'gridlove' ),
                    'bottom' => esc_html__( 'Header bottom bar colors', 'gridlove' ),
                    'sticky' =>esc_html__( 'Custom colors', 'gridlove' )
                ),
                'default'   => gridlove_get_default_option( 'header_sticky_colors' ),
                'required' => array( 'header_sticky', '=', true )
            ),

            array(
                'id' => 'color_header_sticky_bg',
                'type' => 'color',
                'title' => esc_html__( 'Background color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_sticky_bg' ),
                'required' => array( 'header_sticky_colors', '=', 'sticky' )
            ),

            array(
                'id' => 'color_header_sticky_txt',
                'type' => 'color',
                'title' => esc_html__( 'Text color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_sticky_txt' ),
                'required' => array( 'header_sticky_colors', '=', 'sticky' )
            ),

            array(
                'id' => 'color_header_sticky_acc',
                'type' => 'color',
                'title' => esc_html__( 'Accent color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_header_sticky_acc' ),
                'required' => array( 'header_sticky_colors', '=', 'sticky' )
            ),

            array(
                'id'        => 'header_sticky_customize',
                'type'      => 'switch',
                'title'     => esc_html__( 'Customize elements and layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Enable this option if you want to customize sticky header layout, menu and special elements', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'header_sticky_customize' ),
            ),

            array(
                'id'        => 'header_sticky_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Layout', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose a layout for your sticky header', 'gridlove' ),
                'options'   => array(
                    1 => array( 'title' => esc_html__( 'Layout 1', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_1.png' ) ),
                    2 => array( 'title' => esc_html__( 'Layout 2', 'gridlove' ),       'img' =>  get_parent_theme_file_uri( '/assets/img/admin/header_layout_2.png' ) )
                ),
                'default'   => gridlove_get_default_option( 'header_sticky_layout' ),
                'required' => array( 'header_sticky_customize', '=', true )

            ),

            array(
                'id' => 'header_sticky_menu',
                'type' => 'select',
                'title' => esc_html__( 'Menu', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose different menu for sticky header', 'gridlove' ),
                'options' => gridlove_get_sticky_header_menus(),
                'default'   => gridlove_get_default_option( 'header_sticky_menu' ),
                'required' => array( 'header_sticky_customize', '=', true )
            ),

            array(
                'id'        => 'header_sticky_actions',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Special elements', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and reorder special elements you want to display', 'gridlove' ),
                'options'   => array(
                    'search-button' => esc_html__( 'Search button', 'gridlove' ),
                    'sidebar-button' => esc_html__( 'Header Sidebar button', 'gridlove' ),
                    'search-form' => esc_html__( 'Search form', 'gridlove' ),
                    'social-menu-drop' => esc_html__( 'Social menu button', 'gridlove' ),
                    'social-menu' => esc_html__( 'Social menu icons list', 'gridlove' ),
                    'login-form' => esc_html__( 'Login form (icon/dropdown)', 'gridlove' ),
                ),
                'default'   => gridlove_get_default_option( 'header_sticky_actions' ),
                'required' => array( 'header_sticky_customize', '=', true )
            ),

        ) ) );

/* Responsive header menu */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Responsive Menu', 'gridlove' ),
        'desc'     => esc_html__( 'Modify and style your responsive menu', 'gridlove' ),
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'responsive_secondary_nav',
                'type'      => 'switch',
                'title'     => esc_html__( 'Append secondary navigation', 'gridlove' ),
                'subtitle'  => esc_html__( 'If secondary menus are used, it will be applied to the bottom of the main navigation', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'responsive_secondary_nav' ),
            ),

            array(
                'id'        => 'responsive_more_link',
                'type'      => 'switch',
                'title'     => esc_html__( 'Group secondary menus under the "more" link', 'gridlove' ),
                'subtitle'  => esc_html__( 'Enable this option if you want to group secondary menus under a single "more" link', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'responsive_more_link' ),
                'required' => array( 'responsive_secondary_nav', '=', 1 )
            ),

            array(
                'id'        => 'responsive_social_nav',
                'type'      => 'switch',
                'title'     => esc_html__( 'Append social menu', 'gridlove' ),
                'subtitle'  => esc_html__( 'If social menu is used, it will be applied to the bottom of the main navigation', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'responsive_social_nav' ),
            ),

        ) ) );




/* Content */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-screen',
        'title'     => esc_html__( 'Content', 'gridlove' ),
        'desc'     => esc_html__( 'Manage your main content styling options', 'gridlove' ),
        'fields'    => array(

            array(
                'id' => 'color_body_bg',
                'type' => 'color',
                'title' => esc_html__( 'Body background color', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify body background color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_body_bg' ),
            ),

            array(
                'id'       => 'background_image',
                'type'     => 'background',
                'background-color' => false,
                'title'    => esc_html__( 'Body background image', 'gridlove' ),
                'subtitle' => esc_html__( 'Optionally, set body background image or pattern instead of color', 'gridlove' ),
                'default'   => gridlove_get_default_option( 'background_image' ),
            ),

            array(
                'id' => 'color_module_h',
                'type' => 'color',
                'title' => esc_html__( 'Module heading color', 'gridlove' ),
                'subtitle' => esc_html__( 'This color applies to archive titles and module titles ', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_module_h' ),
            ),

            array(
                'id' => 'color_content_bg',
                'type' => 'color',
                'title' => esc_html__( 'Content/box background color', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify main content background color', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_content_bg' ),
            ),

            array(
                'id' => 'color_content_h',
                'type' => 'color',
                'title' => esc_html__( 'Content heading color', 'gridlove' ),
                'subtitle' => esc_html__( 'This color applies to post/page titles, widget titles, etc... ', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_content_h' ),
            ),

            array(
                'id' => 'color_content_txt',
                'type' => 'color',
                'title' => esc_html__( 'Text color', 'gridlove' ),
                'subtitle' => esc_html__( 'This color applies to standard text', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_content_txt' ),
            ),

            array(
                'id' => 'color_content_acc',
                'type' => 'color',
                'title' => esc_html__( 'Accent color', 'gridlove' ),
                'subtitle' => esc_html__( 'This color applies to links, buttons, pagination, etc...', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_content_acc' ),
            ),

            array(
                'id' => 'color_content_meta',
                'type' => 'color',
                'title' => esc_html__( 'Meta color', 'gridlove' ),
                'subtitle' => esc_html__( 'This color applies to miscellaneous elements like post meta data (author link, date, etc...)', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_content_meta' ),
            ),

            array(
                'id' => 'color_highlight_bg',
                'type' => 'color',
                'title' => esc_html__( 'Highlight background color', 'gridlove' ),
                'subtitle' => esc_html__( 'Background color for highlighted elements', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_highlight_bg' ),
            ),

            array(
                'id' => 'color_highlight_txt',
                'type' => 'color',
                'title' => esc_html__( 'Highlight text color', 'gridlove' ),
                'subtitle' => esc_html__( 'Text color for highlighted elements', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_highlight_txt' ),
            ),
            array(
                'id' => 'color_highlight_acc',
                'type' => 'color',
                'title' => esc_html__( 'Highlight accent color', 'gridlove' ),
                'subtitle' => esc_html__( 'Accent color for highlighted elements', 'gridlove' ),
                'transparent' => false,
                'default'   => gridlove_get_default_option( 'color_highlight_acc' ),
            ),
        ) )
);




/* Footer */

Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-bookmark-empty',
        'title'     => esc_html__( 'Footer', 'gridlove' ),
        'desc'     => esc_html__( 'Manage options for your footer area', 'gridlove' ),
        'fields'    => array(

            array(
                'id' => 'color_footer_bg',
                'type' => 'color',
                'title' => esc_html__( 'Background color', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify footer background color', 'gridlove' ),
                'transparent' => false,
                'default' => gridlove_get_default_option( 'color_footer_bg' ),
            ),

            array(
                'id' => 'color_footer_txt',
                'type' => 'color',
                'title' => esc_html__( 'Text color', 'gridlove' ),
                'subtitle' => esc_html__( 'This is the standard text color for footer', 'gridlove' ),
                'transparent' => false,
                'default' => gridlove_get_default_option( 'color_footer_txt' ),
            ),

            array(
                'id' => 'color_footer_acc',
                'type' => 'color',
                'title' => esc_html__( 'Accent color', 'gridlove' ),
                'subtitle' => esc_html__( 'This color will apply to buttons, links, etc...', 'gridlove' ),
                'transparent' => false,
                'default' => gridlove_get_default_option( 'color_footer_acc' ),
            ),

            array(
                'id' => 'footer_widgets',
                'type' => 'switch',
                'switch' => true,
                'title' => esc_html__( 'Display footer widgetized area', 'gridlove' ),
                'subtitle' => wp_kses( sprintf( __( 'Check if you want to include footer widgetized area in your theme. You can manage the footer content in the <a href="%s">Appearance -> Widgets</a> settings.', 'gridlove' ), admin_url( 'widgets.php' ) ), wp_kses_allowed_html( 'post' ) ),
                'default' => gridlove_get_default_option( 'footer_widgets' ),
            ),

            array(
                'id'        => 'footer_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Footer columns', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose number of columns to display in footer area', 'gridlove' ),
                'desc'  => wp_kses( sprintf( __( 'Note: Each column represents one Footer Sidebar in <a href="%s">Appearance -> Widgets</a> settings.', 'gridlove' ), admin_url( 'widgets.php' ) ), wp_kses_allowed_html( 'post' ) ),
                'options'   => array(
                    '1_12' => array( 'title' => esc_html__( '1 Column', 'gridlove' ),       'img' => get_parent_theme_file_uri( '/assets/img/admin/footer_col_1.png' ) ),
                    '2_6' => array( 'title' => esc_html__( '2 Columns', 'gridlove' ),       'img' => get_parent_theme_file_uri( '/assets/img/admin/footer_col_2.png' ) ),
                    '3_4' => array( 'title' => esc_html__( '3 Columns', 'gridlove' ),       'img' => get_parent_theme_file_uri( '/assets/img/admin/footer_col_3.png' ) ),
                    '4_3' => array( 'title' => esc_html__( '4 Columns', 'gridlove' ),       'img' => get_parent_theme_file_uri( '/assets/img/admin/footer_col_4.png' ) )
                ),
                'default' => gridlove_get_default_option( 'footer_layout' ),
                'required' => array( 'footer_widgets', '=', true )
            ),

            array(
                'id' => 'footer_bottom',
                'type' => 'switch',
                'title' => esc_html__( 'Display footer bottom bar', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display footer bottom bar', 'gridlove' ),
                'default' => gridlove_get_default_option( 'footer_bottom' ),
            ),

            array(
                'id' => 'footer_copyright',
                'type' => 'editor',
                'title' => esc_html__( 'Copyright', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify the copyright text to show at the bottom of the website', 'gridlove' ),
                'args'   => array(
                    'textarea_rows'    => 3  ,
                    'default_editor' => 'html'                          ),
                'default' => gridlove_get_default_option( 'footer_copyright' ),
                'required' => array( 'footer_bottom', '=', true )
            ),


        ) )
);

/* Sidebars */
Redux::setSection( $opt_name , array(
        'icon'      => ' el-icon-list',
        'title'     => esc_html__( 'Sidebars', 'gridlove' ),
        'class'     => 'sidgen',
        'desc' => wp_kses( sprintf( __( 'Use this panel to generate additional sidebars. You can manage sidebars content in the <a href="%s">Appearance -> Widgets</a> settings.', 'gridlove' ), admin_url( 'widgets.php' ) ), wp_kses_allowed_html( 'post' ) ),
        'fields'    => array(

            array(
                'id'        => 'sidebars',
                'type'      => 'sidgen',
                'title'     => '',
                'default' => gridlove_get_default_option( 'sidebars' ),
            ),
        ) ) );

/* Cover Area */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-stop',
        'title'     => esc_html__( 'Cover Area', 'gridlove' ),
        'heading' => false,
        'fields'    => array(
        ) )
);

/* Cover */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Image', 'gridlove' ),
        'desc'     => esc_html__( 'Please note that each time you change the values for cover area image sizes, you need to run Force Regenerate Thumbnails plugin, as described in theme documentation.', 'gridlove' ),
        'subsection' => true,
        'fields'    => array(


            array(
                'id' => 'cover_type',
                'type' => 'radio',
                'title' => esc_html__( 'Cover image format', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose how to display cover images', 'gridlove' ),
                'options' => array(
                    'fixed' =>  esc_html__( 'Fixed size (crop both width and height)', 'gridlove' ),
                    'original' =>  esc_html__( 'Keep original ratio (scale to height)', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'cover_type' ),
            ),

            array(
                'id' => 'cover_w',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Cover image width', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify width for your cover image in px', 'gridlove' ),
                'validate'  => 'numeric',
                'default' => gridlove_get_default_option( 'cover_w' ),
                'required'  => array( 'cover_type', '=', 'fixed' )
            ),

            array(
                'id' => 'cover_h',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Cover image height', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify height for your cover image in px', 'gridlove' ),
                'validate'  => 'numeric',
                'default' => gridlove_get_default_option( 'cover_h' ),
            ),

            array(
                'id' => 'cover_overlay',
                'type' => 'radio',
                'title' => esc_html__( 'Cover image overlay style', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose your prefered style for gradients and overlays on cover images', 'gridlove' ),
                'options' => array(
                    'dark' =>  esc_html__( 'Dark (default)', 'gridlove' ),
                    'soft-dark' =>  esc_html__( 'Soft-dark (lighter overlays)', 'gridlove' ),
                    'off' =>  esc_html__( 'Off (remove overlays completely)', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'cover_overlay' ),
            )


        ) ) );


/* Cover Layout 1 */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout 1', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'section_cover_1',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_cover_1.png' ) ).'"/>'.esc_html__( 'Layout 1', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for cover Layout 1', 'gridlove' ),
                'indent'   => false
            ),

            array(
                'id' => 'cover_1_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_1_cat' ),
            ),

            array(
                'id' => 'cover_1_excerpt',
                'type' => 'switch',
                'title' => esc_html__( 'Display text excerpt', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a post excerpt', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_1_excerpt' ),
            ),

            array(
                'id' => 'cover_1_excerpt_limit',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Excerpt limit', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify max number of characters to limit excerpt', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_1_excerpt_limit' ),
                'validate' => 'numeric',
                'required'  => array( 'cover_1_excerpt', '=', true )
            ),

            array(
                'id'        => 'lay_cover_1_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_cover_1_meta' ),
            ),

            array(
                'id' => 'cover_1_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_1_icon' ),
            ),

            array(
                'id' => 'cover_1_autoplay',
                'type' => 'switch',
                'title' => esc_html__( 'Autoplay (rotate)', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to auto rotate items in cover area sliders', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_1_autoplay' ),
            ),
            array(
                'id' => 'cover_1_autoplay_time',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Autoplay time', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify autoplay time per slide', 'gridlove' ),
                'desc' => esc_html__( 'Note: Please specify number in seconds', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_1_autoplay_time' ),
                'validate' => 'numeric',
                'required'  => array( 'cover_1_autoplay', '=', true )
            ),




        ) ) );



/* Cover Layout 2 */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout 2', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'section_cover_2',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_cover_2.png' ) ).'"/>'.esc_html__( 'Layout 2', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for cover Layout 2', 'gridlove' ),
                'indent'   => false
            ),

            array(
                'id' => 'cover_2_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_2_cat' ),
            ),

            array(
                'id' => 'cover_2_excerpt',
                'type' => 'switch',
                'title' => esc_html__( 'Display text excerpt', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a post excerpt', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_2_excerpt' ),
            ),

            array(
                'id' => 'cover_2_excerpt_limit',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Excerpt limit', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify max number of characters to limit excerpt', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_2_excerpt_limit' ),
                'validate' => 'numeric',
                'required'  => array( 'cover_2_excerpt', '=', true )
            ),

            array(
                'id'        => 'lay_cover_2_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_cover_2_meta' ),
            ),

            array(
                'id' => 'cover_2_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_2_icon' ),
            ),

            array(
                'id' => 'cover_2_autoplay',
                'type' => 'switch',
                'title' => esc_html__( 'Autoplay (rotate)', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to auto rotate items in cover area sliders', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_2_autoplay' ),
            ),
            array(
                'id' => 'cover_2_autoplay_time',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Autoplay time', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify autoplay time per slide', 'gridlove' ),
                'desc' => esc_html__( 'Note: Please specify number in seconds', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_2_autoplay_time' ),
                'validate' => 'numeric',
                'required'  => array( 'cover_2_autoplay', '=', true )
            ),




        ) ) );

/* Cover Layout 3 */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout 3', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'section_cover_3',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_cover_3.png' ) ).'"/>'.esc_html__( 'Layout 3', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for cover Layout 3', 'gridlove' ),
                'indent'   => false
            ),

            array(
                'id' => 'cover_3_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_3_cat' ),
            ),


            array(
                'id'        => 'lay_cover_3_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_cover_3_meta' ),
            ),

            array(
                'id' => 'cover_3_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_3_icon' ),
            ),

            array(
                'id' => 'cover_3_autoplay',
                'type' => 'switch',
                'title' => esc_html__( 'Autoplay (rotate)', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to auto rotate items in cover area sliders', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_3_autoplay' ),
            ),
            array(
                'id' => 'cover_3_autoplay_time',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Autoplay time', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify autoplay time per slide', 'gridlove' ),
                'desc' => esc_html__( 'Note: Please specify number in seconds', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_3_autoplay_time' ),
                'validate' => 'numeric',
                'required'  => array( 'cover_3_autoplay', '=', true )
            ),



        ) ) );

/* Cover Layout 4 */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout 4', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'section_cover_4',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_cover_4.png' ) ).'"/>'.esc_html__( 'Layout 4', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for cover Layout 1', 'gridlove' ),
                'indent'   => false
            ),

            array(
                'id' => 'cover_4_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_4_cat' ),
            ),


            array(
                'id'        => 'lay_cover_4_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_cover_4_meta' ),
            ),

            array(
                'id' => 'cover_4_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_4_icon' ),
            ),

            array(
                'id' => 'cover_4_autoplay',
                'type' => 'switch',
                'title' => esc_html__( 'Autoplay (rotate)', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to auto rotate items in cover area sliders', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_4_autoplay' ),
            ),
            array(
                'id' => 'cover_4_autoplay_time',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Autoplay time', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify autoplay time per slide', 'gridlove' ),
                'desc' => esc_html__( 'Note: Please specify number in seconds', 'gridlove' ),
                'default' => gridlove_get_default_option( 'cover_4_autoplay_time' ),
                'validate' => 'numeric',
                'required'  => array( 'cover_4_autoplay', '=', true )
            ),

        ) ) );



/* Layout settings */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-th-large',
        'title'     => esc_html__( 'Main Layouts', 'gridlove' ),
        'heading' => false,
        'fields'    => array(
        ) )
);


/* Layout A */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout A', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(
            array(
                'id'        => 'section_layout_a',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_a.png' ) ).'"/>'.esc_html__( 'Layout A', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for posts displayed in Layout A', 'gridlove' ),
                'indent'   => false
            ),

            array(
                'id' => 'lay_a_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_a_cat' ),
            ),


            array(
                'id'        => 'lay_a_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_a_meta' ),
            ),

            array(
                'id' => 'lay_a_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_a_icon' ),
            ),



        ) ) );

/* Layout B */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout B', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'section_layout_b',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_b.png' ) ).'"/>'.esc_html__( 'Layout B', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for posts displayed in Layout B', 'gridlove' ),
                'indent' => false
            ),

            array(
                'id' => 'lay_b_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_b_cat' ),
            ),


            array(
                'id'        => 'lay_b_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_b_meta' ),            ),

            array(
                'id' => 'lay_b_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_b_icon' ),            ),



        ) ) );




/* Layout C */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout C', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'section_layout_c',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_c.png' ) ).'"/>'.esc_html__( 'Layout C', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for posts displayed in Layout C', 'gridlove' ),
                'indent' => false
            ),

            array(
                'id' => 'lay_c_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_c_cat' ),            ),


            array(
                'id'        => 'lay_c_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_c_meta' ),            ),

            array(
                'id' => 'lay_c_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_c_icon' ),            ),


        ) ) );


/* Layout D */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout D', 'gridlove' ),
        'heading' => false,
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'section_layout_d',
                'type'      => 'gridlove_section',
                'title'     => '<img src="'.esc_url( get_parent_theme_file_uri( '/assets/img/admin/layout_d.png' ) ).'"/>'.esc_html__( 'Layout D', 'gridlove' ),
                'subtitle'  => esc_html__( 'Manage options for posts displayed in Layout D', 'gridlove' ),
                'indent'   => false
            ),

            array(
                'id' => 'lay_d_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_d_cat' ),            ),


            array(
                'id'        => 'lay_d_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_d_meta' ),            ),

            array(
                'id' => 'lay_d_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'lay_d_icon' ),            ),


        ) ) );



/* Highlight */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-heart',
        'title'     => esc_html__( 'Highlight Posts', 'gridlove' ),
        'desc'     => esc_html__( 'You can choose posts by a specific criteria and they will be displayed in different color/styling in order to stand out among other posts on all post listing templates.', 'gridlove' ),
        'fields'    => array(

            array(
                'id'        => 'use_highlight',
                'type'      => 'switch',
                'title'     => esc_html__( 'Enable highlight posts', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to enable and use the highlight feature', 'gridlove' ),
                'default' => gridlove_get_default_option( 'use_highlight' ),            ),


            array(
                'id'        => 'highlight_cat',
                'type'      => 'select',
                'data'      => 'categories',
                'multi'     => true,
                'title'     => esc_html__( 'In category', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to highlight posts that belong to a particular category', 'gridlove' ),
                'desc'      => esc_html__( 'Note: You can select one or more categories.', 'gridlove' ),
                'required' => array( 'use_highlight', '=', true ),
                'default' => gridlove_get_default_option( 'highlight_cat' ),
            ),

            array(
                'id'        => 'highlight_tag',
                'type'      => 'select',
                'data'      => 'tags',
                'multi'     => true,
                'title'     => esc_html__( 'Tagged with', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to highlight posts that are tagged with a specific tag(s)', 'gridlove' ),
                'required' => array( 'use_highlight', '=', true ),
                'default' => gridlove_get_default_option( 'highlight_tag' ),
            ),

            array(
                'id'        => 'highlight_comments',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'With more than "x" comments', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to highlight posts which have at least a certain number of comments', 'gridlove' ),
                'desc'      => esc_html__( 'i.e. If you put 50, posts with more than 50 comments will be highlighted ', 'gridlove' ),
                'validate'  => 'numeric',
                'default' => gridlove_get_default_option( 'highlight_comments' ),
                'required' => array( 'use_highlight', '=', true )
            ),

            array(
                'id'        => 'highlight_views',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'With more than "x" views', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to highlight posts which have at least a certain number of views', 'gridlove' ),
                'desc'      => esc_html__( 'i.e. If you put 50, posts with more than 50 views will be highlighted ', 'gridlove' ),
                'validate'  => 'numeric',
                'default' => gridlove_get_default_option( 'highlight_views' ),
                'required' => array( 'use_highlight', '=', true )
            ),

            array(
                'id'        => 'highlight_manual',
                'type'      => 'select',
                'data'      => 'post',
                'multi'     => true,
                'sortable'     => true,
                'title'     => esc_html__( 'Pick manually', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your highlight posts manually', 'gridlove' ),
                'args' => array( 'posts_per_page' => 100, 'post_type' => array( 'post' ) ),
                'required' => array( 'use_highlight', '=', true ),
                'default' => gridlove_get_default_option( 'highlight_manual' ),
            ),

            array(
                'id'        => 'highlight_manual_ids',
                'type'      => 'text',
                'title'     => esc_html__( 'Choose posts by IDs', 'gridlove' ),
                'subtitle'  => esc_html__( 'Due to certain limitations, the previous select option lets you pick from latest 100 posts. Use this option to manually specify posts by their IDs if they cannot be found in the option above', 'gridlove' ),
                'desc'      => esc_html__( 'Note: This option has a priority over the above option. Separate post IDs by comma, i.e. 43,56,26,187', 'gridlove' ),
                'required' => array( 'use_highlight', '=', true ),
                'default' => gridlove_get_default_option( 'highlight_manual_ids' ),
            ),


        ) )
);

/* Single Post */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-pencil',
        'title'     => esc_html__( 'Single Post', 'gridlove' ),
        'heading' => false,
        'fields'    => array(
        ) )
);

/* Single - Layout */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Layout', 'gridlove' ),
        'desc'     => esc_html__( 'Manage general layout options for your single posts', 'gridlove' ),
        'subsection' => true,
        'fields'    => array(


            array(
                'id'        => 'single_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Single post default layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Note: You can override this option for each particular post', 'gridlove' ),
                'options'   => gridlove_get_single_layouts( false ),
                'default' => gridlove_get_default_option( 'single_layout' ),            ),

            array(
                'id'        => 'single_sidebar_position',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Display sidebar', 'gridlove' ),
                'desc' => esc_html__( 'Note: You can override this option for each particular post', 'gridlove' ),
                'options'   => gridlove_get_sidebar_layouts(),
                'default' => gridlove_get_default_option( 'single_sidebar_position' ),            ),

            array(
                'id'        => 'single_sidebar_standard',
                'type'      => 'select',
                'title'     => esc_html__( 'Post standard sidebar', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a single post standard sidebar', 'gridlove' ),
                'options'   => gridlove_get_sidebars_list(),
                'default' => gridlove_get_default_option( 'single_sidebar_standard' ),
                'required'  => array( 'single_sidebar_position', '!=', 'none' )
            ),

            array(
                'id'        => 'single_sidebar_sticky',
                'type'      => 'select',
                'title'     => esc_html__( 'Post sticky sidebar', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a single post sticky sidebar', 'gridlove' ),
                'options'   => gridlove_get_sidebars_list(),
                'default' => gridlove_get_default_option( 'single_sidebar_sticky' ),
                'required'  => array( 'single_sidebar_position', '!=', 'none' )
            ),


        ) )
);


/* Single - Display */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Display', 'gridlove' ),
        'desc'     => esc_html__( 'Manage general display options for your single posts', 'gridlove' ),
        'subsection' => true,
        'fields'    => array(

            array(
                'id' => 'single_cat',
                'type' => 'switch',
                'title' => esc_html__( 'Display category link', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display a category link', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_cat' ),            ),

            array(
                'id'        => 'lay_single_meta',
                'type'      => 'sortable',
                'mode'      => 'checkbox',
                'title'     => esc_html__( 'Meta data', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check and re-order which meta data you want to display', 'gridlove' ),
                'options'   => gridlove_get_meta_opts(),
                'default' => gridlove_get_default_option( 'lay_single_meta' ),            ),

            array(
                'id' => 'single_icon',
                'type' => 'switch',
                'title' => esc_html__( 'Display format icon', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to display post format icon for non-standard posts (i.e video, audio, gallery...)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_icon' ),            ),


            array(
                'id' => 'single_share',
                'type' => 'switch',
                'title' => esc_html__( 'Display sticky share buttons', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display sticky share buttons', 'gridlove' ),
                'desc' => !function_exists( 'meks_ess_share' ) ? wp_kses_post( sprintf( __( 'Note: <a href="%s">Meks Easy Social Share plugin</a> must be activated to use this option.', 'gridlove' ),  admin_url( 'themes.php?page=install-required-plugins' ) ) ): '',
                'default' => gridlove_get_default_option( 'single_share' ),            
            ),
            
            array(
                'id' => 'single_share_content',
                'type' => 'switch',
                'title' => esc_html__( 'Display share buttons in content', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display share buttons inside the content', 'gridlove' ),
                'desc' => !function_exists( 'meks_ess_share' ) ? wp_kses_post( sprintf( __( 'Note: <a href="%s">Meks Easy Social Share plugin</a> must be activated to use this option.', 'gridlove' ),  admin_url( 'themes.php?page=install-required-plugins' ) ) ): '',
                'default' => gridlove_get_default_option( 'single_share_content' ),            
            ),

            array(
                'id' => 'single_share_position',
                'type' => 'radio',
                'title' => esc_html__( 'Select share buttons position in content', 'gridlove' ),
                'subtitle' => esc_html__( 'Select where you want to display share buttons in content', 'gridlove' ),
                'options' => array(
                    'above' => esc_html__( 'Above', 'gridlove' ),
                    'bellow' => esc_html__( 'Bellow', 'gridlove' ),
                    'above_bellow' => esc_html__( 'Above and bellow', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'single_share_position' ),
                'required' => array( 'single_share_content', '=', true)            
            ),

            array(
                'id' => 'single_fimg',
                'type' => 'switch',
                'title' => esc_html__( 'Display featured image', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display the featured image', 'gridlove' ),
                'desc' => esc_html__( 'Note: this option will only apply post layouts with no cover image', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_fimg' ),            ),

            array(
                'id' => 'single_fimg_cap',
                'type' => 'switch',
                'title' => esc_html__( 'Display featured image caption', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display the featured image captions', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_fimg_cap' ),
                'required'  => array( 'single_fimg', '=', true )
            ),

            array(
                'id' => 'single_headline',
                'type' => 'switch',
                'title' => esc_html__( 'Display headline (excerpt)', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display post excerpt at the beginning of the post', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_headline' ),            ),

            array(
                'id' => 'single_tags',
                'type' => 'switch',
                'title' => esc_html__( 'Display tags', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display tags', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_tags' ),            ),


            array(
                'id' => 'single_author',
                'type' => 'switch',
                'title' => esc_html__( 'Display author area', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display the author area.', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_author' ),            ),

            array(
                'id' => 'single_prev_next',
                'type' => 'switch',
                'title' => esc_html__( 'Display prev/next posts', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display previous/next post links', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_prev_next' ),            
            ),

            array(
                'id' => 'single_prev_next_in_category',
                'type' => 'switch',
                'title' => esc_html__( 'Display prev/next posts in same category', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to load previous/next post in the same category', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_prev_next_in_category' ),            
            ),

            array(
                'id' => 'single_infinite_scroll',
                'type' => 'switch',
                'title' => esc_html__( 'Enable infinite scroll loading', 'gridlove' ),
                'subtitle' => esc_html__( 'If you check this option, next posts will be automatically loaded while you scroll to the end of a current post', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_infinite_scroll' ),            ),


        ) )
);


/* Single - related */
Redux::setSection( $opt_name , array(
        'icon'      => '',
        'title'     => esc_html__( 'Related', 'gridlove' ),
        'desc'     => esc_html__( 'Manage options for "related posts" section below single post content', 'gridlove' ),
        'subsection' => true,
        'fields'    =>  array(

            array(
                'id' => 'single_related',
                'type' => 'switch',
                'title' => esc_html__( 'Display "related" posts', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose if you want to display related posts', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_related' ),            ),

            array(
                'id' => 'single_related_using',
                'type' => 'rwdo',
                'title' => esc_html__( 'Pull related posts by using', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose whether you want to use builtin related posts algorithm or one of supported plugins', 'gridlove' ),
                'options'  => gridlove_get_related_posts_plugins(),
                'desc' => esc_html__( 'Note: You need to install and activate one of suggested plugins in order to select and use it with this option', 'gridlove' ),
                'default' => gridlove_get_default_option( 'single_related_using' ),            ),

            array(
                'id'        => 'related_limit',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Related area posts number limit', 'gridlove' ),
                'default' => gridlove_get_default_option( 'related_limit' ),
                'validate'  => 'numeric',
                'required'  => array(
                    array( 'single_related', '=', true ),
                    array( 'single_related_using', '=', 'default' )
                )
            ),

            array(
                'id'        => 'related_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Related posts layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a layout for related posts', 'gridlove' ),
                'options'   => gridlove_get_main_layouts(),
                'default' => gridlove_get_default_option( 'related_layout' ),
                'required'  => array( 'single_related', '=', true ),
            ),

            array(
                'id'        => 'related_type',
                'type'      => 'radio',
                'title'     => esc_html__( 'Related area chooses from posts', 'gridlove' ),
                'options'   => array(
                    'cat' => esc_html__( 'Located in the same category', 'gridlove' ),
                    'tag' => esc_html__( 'Tagged with at least one same tag', 'gridlove' ),
                    'cat_or_tag' => esc_html__( 'Located in the same category OR tagged with a same tag', 'gridlove' ),
                    'cat_and_tag' => esc_html__( 'Located in the same category AND tagged with a same tag', 'gridlove' ),
                    'author' => esc_html__( 'By the same author', 'gridlove' ),
                    '0' => esc_html__( 'All posts', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'related_layout' ),
                'required'  => array(
                    array( 'single_related', '=', true ),
                    array( 'single_related_using', '=', 'default' )
                )
            ),

            array(
                'id'        => 'related_order',
                'type'      => 'radio',
                'title'     => esc_html__( 'Related posts are ordered by', 'gridlove' ),
                'options'   => gridlove_get_post_order_opts(),
                'default' => gridlove_get_default_option( 'related_order' ),
                'required'  => array(
                    array( 'single_related', '=', true ),
                    array( 'single_related_using', '=', 'default' )
                )
            ),

            array(
                'id'        => 'related_time',
                'type'      => 'radio',
                'title'     => esc_html__( 'Related posts are not older than', 'gridlove' ),
                'options'   => gridlove_get_time_diff_opts(),
                'default' => gridlove_get_default_option( 'related_time' ),
                'required'  => array(
                    array( 'single_related', '=', true ),
                    array( 'single_related_using', '=', 'default' )
                )
            ),

        )
    )
);

/* Page */
Redux::setSection( $opt_name ,  array(
        'icon'      => 'el-icon-file-edit',
        'title'     => esc_html__( 'Page', 'gridlove' ),
        'desc'     => esc_html__( 'Manage default settings for your pages', 'gridlove' ),
        'fields'    => array(

            array(
                'id'        => 'page_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Page default layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Note: You can override this option for each particular page', 'gridlove' ),
                'options'   => gridlove_get_page_layouts( false ),
                'default' => gridlove_get_default_option( 'page_layout' ),            ),

            array(
                'id'        => 'page_sidebar_position',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Display sidebar', 'gridlove' ),
                'desc' => esc_html__( 'Note: You can override this option for each particular page', 'gridlove' ),
                'options'   => gridlove_get_sidebar_layouts(),
                'default' => gridlove_get_default_option( 'page_sidebar_position' ),            ),

            array(
                'id'        => 'page_sidebar_standard',
                'type'      => 'select',
                'title'     => esc_html__( 'Page standard sidebar', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a page standard sidebar', 'gridlove' ),
                'options'   => gridlove_get_sidebars_list(),
                'default' => gridlove_get_default_option( 'page_sidebar_standard' ),
                'required'  => array( 'page_sidebar_position', '!=', 'none' )
            ),

            array(
                'id'        => 'page_sidebar_sticky',
                'type'      => 'select',
                'title'     => esc_html__( 'Page sticky sidebar', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a page sticky sidebar', 'gridlove' ),
                'options'   => gridlove_get_sidebars_list(),
                'default' => gridlove_get_default_option( 'page_sidebar_sticky' ),
                'required'  => array( 'page_sidebar_position', '!=', 'none' )
            ),

            array(
                'id' => 'page_fimg',
                'type' => 'switch',
                'title' => esc_html__( 'Display featured image', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display featured image', 'gridlove' ),
                'default' => gridlove_get_default_option( 'page_fimg' ),
            ),

            array(
                'id' => 'page_fimg_cap',
                'type' => 'switch',
                'title' => esc_html__( 'Display featured image caption', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to display featured image caption', 'gridlove' ),
                'default' => gridlove_get_default_option( 'page_fimg_cap' ),
                'required'  => array( 'page_fimg', '=', true )
            ),

        ) )
);

/* Categories */
Redux::setSection( $opt_name ,  array(
        'icon'      => 'el-icon-folder',
        'title'     => esc_html__( 'Category Template', 'gridlove' ),
        'desc'     => esc_html__( 'Manage settings for category template.', 'gridlove' ),
        'fields'    => array(


            array(
                'id'        => 'category_cover_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Cover area layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose cover area layout', 'gridlove' ),
                'options'   => gridlove_get_cover_layouts( false, true, array( 'custom' ) ),
                'default' => gridlove_get_default_option( 'category_cover_layout' ),
            ),

            array(
                'id'        => 'category_cover_limit',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Number of cover area posts', 'gridlove' ),
                'subtitle'  => esc_html__( 'Specify max number of posts to display in cover area', 'gridlove' ),
                'default' => gridlove_get_default_option( 'category_cover_limit' ),
                'required'  => array( 'category_cover_layout', '!=', 'none' ),
            ),

            array(
                'id'        => 'category_cover_order',
                'type'      => 'radio',
                'title'     => esc_html__( 'Cover area displays', 'gridlove' ),
                'options'   => array(
                    'date' =>  esc_html__( 'Latest posts', 'gridlove' ),
                    'comment_count' =>  esc_html__( 'Most commented posts', 'gridlove' ),
                    'views' =>  esc_html__( 'Most viewed posts', 'gridlove' ),
                ),
                'default' => gridlove_get_default_option( 'category_cover_order' ),
                'required'  => array( 'category_cover_layout', '!=', 'none' ),
            ),

            array(
                'id'        => 'category_cover_unique',
                'type'      => 'switch',
                'title'     => esc_html__( 'Make cover posts unique', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to exclude cover posts from main post listing below ', 'gridlove' ),
                'default' => gridlove_get_default_option( 'category_cover_unique' ),
                'required'  => array( 'category_cover_layout', '!=', 'none' ),
            ),


            array(
                'id'        => 'category_layouts_type',
                'type'      => 'radio',
                'title'     => esc_html__( 'Layout Type', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your main post layout type', 'gridlove' ),
                'options'   => array(
                    'simple' => esc_html__( 'Simple', 'gridlove' ),
                    'masonry' => esc_html__( 'Masonry', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'category_layouts_type' ),
            ),

            array(
                'id'        => 'category_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your simple post layout', 'gridlove' ),
                'options'   => gridlove_get_simple_layouts(),
                'default' => gridlove_get_default_option( 'category_layout' ),
                'required'  => array( 'category_layouts_type', '=', 'simple' ),
            ),

            array(
                'id'        => 'category_layout_masonry',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your masonry post layout', 'gridlove' ),
                'options'   => gridlove_get_masonry_layouts(),
                'default' => gridlove_get_default_option( 'category_layout_masonry' ),
                'required'  => array( 'category_layouts_type', '=', 'masonry' ),
            ),

            array(
                'id'        => 'category_ppp',
                'type'      => 'radio',
                'title'     => esc_html__( 'Posts per page', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose how many posts per page you want to display', 'gridlove' ),
                'options'   => array(
                    'inherit' => wp_kses( sprintf( __( 'Inherit from global option in <a href="%s">Settings->Reading</a>', 'gridlove' ), admin_url( 'options-general.php' ) ), wp_kses_allowed_html( 'post' ) ),
                    'custom' => esc_html__( 'Custom number', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'category_ppp' ),
            ),

            array(
                'id'        => 'category_ppp_num',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Number of posts per page', 'gridlove' ),
                'default' => gridlove_get_default_option( 'category_ppp_num' ),
                'required'  => array( 'category_ppp', '=', 'custom' ),
                'validate'  => 'numeric'
            ),


            array(
                'id'        => 'category_pag',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Pagination', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a pagination type for category template', 'gridlove' ),
                'desc'  => esc_html__( 'Note: You can override this option for each category separately', 'gridlove' ),
                'options'   => gridlove_get_pagination_layouts(),
                'default' => gridlove_get_default_option( 'category_pag' ),            ),

            array(
                'id'        => 'category_combo',
                'type'      => 'switch',
                'title'     => esc_html__( 'Combo layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'If you check this option, you can choose an additonal layout to append it on top of main post layout', 'gridlove' ),
                'default' => gridlove_get_default_option( 'category_combo' ),
            ),

            array(
                'id'        => 'category_combo_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Combo layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose combo layout', 'gridlove' ),
                'description'  => esc_html__( 'Note: Combo layout will be displayed on the first page only', 'gridlove' ),
                'options'   => gridlove_get_combo_layouts( false ),
                'default' => gridlove_get_default_option( 'category_combo_layout' ),
                'required'  => array( 'category_combo', '=', true ),

            ),

            array(
                'id'        => 'category_show_children',
                'type'      => 'switch',
                'title'     => esc_html__( 'Display child category links', 'gridlove' ),
                'subtitle'  => esc_html__( 'If you check this option and current category has child categories, their links will be diplayed below category page title', 'gridlove' ),
                'default' => gridlove_get_default_option( 'category_show_children' ),
            ),


        ) )
);


/* Tags */
Redux::setSection( $opt_name , array(
        'icon'      => ' el-icon-tag',
        'title'     => esc_html__( 'Tag Template', 'gridlove' ),
        'desc'     => esc_html__( 'Manage settings for tag template', 'gridlove' ),
        'fields'    => array(


            array(
                'id'        => 'tag_layouts_type',
                'type'      => 'radio',
                'title'     => esc_html__( 'Layout Type', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your main post layout type', 'gridlove' ),
                'options'   => array(
                    'simple' => esc_html__( 'Simple', 'gridlove' ),
                    'masonry' => esc_html__( 'Masonry', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'tag_layouts_type' ),            ),

            array(
                'id'        => 'tag_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your simple post layout', 'gridlove' ),
                'options'   => gridlove_get_simple_layouts(),
                'default' => gridlove_get_default_option( 'tag_layout' ),
                'required'  => array( 'tag_layouts_type', '=', 'simple' ),
            ),

            array(
                'id'        => 'tag_layout_masonry',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your masonry post layout', 'gridlove' ),
                'options'   => gridlove_get_masonry_layouts(),
                'default' => gridlove_get_default_option( 'tag_layout_masonry' ),
                'required'  => array( 'tag_layouts_type', '=', 'masonry' ),
            ),

            array(
                'id'        => 'tag_ppp',
                'type'      => 'radio',
                'title'     => esc_html__( 'Posts per page', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose how many posts per page you want to display', 'gridlove' ),
                'options'   => array(
                    'inherit' => wp_kses( sprintf( __( 'Inherit from global option in <a href="%s">Settings->Reading</a>', 'gridlove' ), admin_url( 'options-general.php' ) ), wp_kses_allowed_html( 'post' ) ),
                    'custom' => esc_html__( 'Custom number', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'tag_ppp' ),            ),

            array(
                'id'        => 'tag_ppp_num',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Number of posts per page', 'gridlove' ),
                'default' => gridlove_get_default_option( 'tag_ppp_num' ),
                'required'  => array( 'tag_ppp', '=', 'custom' ),
                'validate'  => 'numeric'
            ),


            array(
                'id'        => 'tag_pag',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Pagination', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a pagination type for tag template', 'gridlove' ),
                'options'   => gridlove_get_pagination_layouts(),
                'default' => gridlove_get_default_option( 'tag_pag' ),
            ),

        ) )
);

/* Author */
Redux::setSection( $opt_name ,  array(
        'icon'      => 'el-icon-user',
        'title'     => esc_html__( 'Author Template', 'gridlove' ),
        'desc'     => esc_html__( 'Manage settings for author template', 'gridlove' ),
        'fields'    => array(


            array(
                'id'        => 'author_layouts_type',
                'type'      => 'radio',
                'title'     => esc_html__( 'Layout Type', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your main post layout type', 'gridlove' ),
                'options'   => array(
                    'simple' => esc_html__( 'Simple', 'gridlove' ),
                    'masonry' => esc_html__( 'Masonry', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'author_layouts_type' ),
            ),

            array(
                'id'        => 'author_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your simple post layout', 'gridlove' ),
                'options'   => gridlove_get_simple_layouts(),
                'default' => gridlove_get_default_option( 'author_layout' ),
                'required'  => array( 'author_layouts_type', '=', 'simple' ),
            ),

            array(
                'id'        => 'author_layout_masonry',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your masonry post layout', 'gridlove' ),
                'options'   => gridlove_get_masonry_layouts(),
                'default' => gridlove_get_default_option( 'author_layout_masonry' ),
                'required'  => array( 'author_layouts_type', '=', 'masonry' ),
            ),

            array(
                'id'        => 'author_ppp',
                'type'      => 'radio',
                'title'     => esc_html__( 'Posts per page', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose how many posts per page you want to display', 'gridlove' ),
                'options'   => array(
                    'inherit' => wp_kses( sprintf( __( 'Inherit from global option in <a href="%s">Settings->Reading</a>', 'gridlove' ), admin_url( 'options-general.php' ) ), wp_kses_allowed_html( 'post' ) ),
                    'custom' => esc_html__( 'Custom number', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'author_ppp' ),            ),

            array(
                'id'        => 'author_ppp_num',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Number of posts per page', 'gridlove' ),
                'default' => gridlove_get_default_option( 'author_ppp_num' ),
                'required'  => array( 'author_ppp', '=', 'custom' ),
                'validate'  => 'numeric'
            ),

            array(
                'id'        => 'author_pag',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Pagination', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a pagination type for author template', 'gridlove' ),
                'options'   => gridlove_get_pagination_layouts(),
                'default' => gridlove_get_default_option( 'author_pag' ),            ),

        ) )
);

/* Search */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-search',
        'title'     => esc_html__( 'Search Template', 'gridlove' ),
        'desc'     => esc_html__( 'Manage settings for search results template', 'gridlove' ),
        'fields'    => array(


            array(
                'id'        => 'search_layouts_type',
                'type'      => 'radio',
                'title'     => esc_html__( 'Layout Type', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your main post layout type', 'gridlove' ),
                'options'   => array(
                    'simple' => esc_html__( 'Simple', 'gridlove' ),
                    'masonry' => esc_html__( 'Masonry', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'search_layouts_type' ),            ),

            array(
                'id'        => 'search_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your simple post layout', 'gridlove' ),
                'options'   => gridlove_get_simple_layouts(),
                'default' => gridlove_get_default_option( 'search_layout' ),
                'required'  => array( 'search_layouts_type', '=', 'simple' ),
            ),

            array(
                'id'        => 'search_layout_masonry',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your masonry post layout', 'gridlove' ),
                'options'   => gridlove_get_masonry_layouts(),
                'default' => gridlove_get_default_option( 'search_layout_masonry' ),
                'required'  => array( 'search_layouts_type', '=', 'masonry' ),
            ),

            array(
                'id'        => 'search_ppp',
                'type'      => 'radio',
                'title'     => esc_html__( 'Posts per page', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose how many posts per page you want to display', 'gridlove' ),
                'options'   => array(
                    'inherit' => wp_kses( sprintf( __( 'Inherit from global option in <a href="%s">Settings->Reading</a>', 'gridlove' ), admin_url( 'options-general.php' ) ), wp_kses_allowed_html( 'post' ) ),
                    'custom' => esc_html__( 'Custom number', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'search_ppp' ),
            ),

            array(
                'id'        => 'search_ppp_num',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Number of posts per page', 'gridlove' ),
                'default' => gridlove_get_default_option( 'search_ppp_num' ),
                'required'  => array( 'search_ppp', '=', 'custom' ),
                'validate'  => 'numeric'
            ),

            array(
                'id'        => 'search_pag',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Pagination', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a pagination type for search template', 'gridlove' ),
                'options'   => gridlove_get_pagination_layouts(),
                'default' => gridlove_get_default_option( 'search_pag' ),            ),

        ) )
);

/* Archives */

Redux::setSection( $opt_name ,  array(
        'icon'      => 'el-icon-folder-open',
        'title'     => esc_html__( 'Archive Templates', 'gridlove' ),
        'desc'     => esc_html__( 'Manage settings for miscellaneous templates, i.e. date archives, post format archives, index (latest posts), etc...', 'gridlove' ),
        'fields'    => array(

            array(
                'id'        => 'archive_layouts_type',
                'type'      => 'radio',
                'title'     => esc_html__( 'Layout Type', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your main post layout type', 'gridlove' ),
                'options'   => array(
                    'simple' => esc_html__( 'Simple', 'gridlove' ),
                    'masonry' => esc_html__( 'Masonry', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'archive_layouts_type' ),            ),

            array(
                'id'        => 'archive_layout',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your simple post layout', 'gridlove' ),
                'options'   => gridlove_get_simple_layouts(),
                'default' => gridlove_get_default_option( 'archive_layout' ),
                'required'  => array( 'archive_layouts_type', '=', 'simple' ),
            ),

            array(
                'id'        => 'archive_layout_masonry',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Main layout', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose your masonry post layout', 'gridlove' ),
                'options'   => gridlove_get_masonry_layouts(),
                'default' => gridlove_get_default_option( 'archive_layout_masonry' ),
                'required'  => array( 'archive_layouts_type', '=', 'masonry' ),
            ),


            array(
                'id'        => 'archive_ppp',
                'type'      => 'radio',
                'title'     => esc_html__( 'Posts per page', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose how many posts per page you want to display', 'gridlove' ),
                'options'   => array(
                    'inherit' => wp_kses( sprintf( __( 'Inherit from global option in <a href="%s">Settings->Reading</a>', 'gridlove' ), admin_url( 'options-general.php' ) ), wp_kses_allowed_html( 'post' ) ),
                    'custom' => esc_html__( 'Custom number', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'archive_ppp' ),            ),

            array(
                'id'        => 'archive_ppp_num',
                'type'      => 'text',
                'class'     => 'small-text',
                'title'     => esc_html__( 'Number of posts per page', 'gridlove' ),
                'default' => gridlove_get_default_option( 'archive_ppp_num' ),
                'required'  => array( 'archive_ppp', '=', 'custom' ),
                'validate'  => 'numeric'
            ),

            array(
                'id'        => 'archive_pag',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Pagination', 'gridlove' ),
                'subtitle'  => esc_html__( 'Choose a pagination type for archive templates', 'gridlove' ),
                'options'   => gridlove_get_pagination_layouts(),
                'default' => gridlove_get_default_option( 'archive_pag' ),            ),

        ) )
);

/* Typography */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-fontsize',
        'title'     => esc_html__( 'Typography', 'gridlove' ),
        'desc'     => esc_html__( 'Manage fonts and typography settings', 'gridlove' ),
        'fields'    => array(

            array(
                'id'          => 'main_font',
                'type'        => 'typography',
                'title'       => esc_html__( 'Main text font', 'gridlove' ),
                'google'      => true,
                'font-backup' => false,
                'font-size' => false,
                'color' => false,
                'line-height' => false,
                'text-align' => false,
                'units'       =>'px',
                'subtitle'    => esc_html__( 'This is your main font, used for standard text', 'gridlove' ),
                'default' => gridlove_get_default_option( 'main_font' ),
                'preview' => array(
                    'always_display' => true,
                    'font-size' => '16px',
                    'line-height' => '26px',
                    'text' => 'This is a font used for your main content on the website. Here at MeksHQ, we believe that readability is a very important part of any WordPress theme. This is an example of how a simple paragraph of text will look like on your website.'
                )
            ),

            array(
                'id'          => 'h_font',
                'type'        => 'typography',
                'title'       => esc_html__( 'Headings font', 'gridlove' ),
                'google'      => true,
                'font-backup' => false,
                'font-size' => false,
                'color' => false,
                'line-height' => false,
                'text-align' => false,
                'units'       =>'px',
                'subtitle'    => esc_html__( 'This is a font used for titles and headings', 'gridlove' ),
                'default' => gridlove_get_default_option( 'h_font' ),
                'preview' => array(
                    'always_display' => true,
                    'font-size' => '24px',
                    'line-height' => '30px',
                    'text' => 'There is no good blog without great readability'
                )

            ),

            array(
                'id'          => 'nav_font',
                'type'        => 'typography',
                'title'       => esc_html__( 'Navigation font', 'gridlove' ),
                'google'      => true,
                'font-backup' => false,
                'font-size' => false,
                'color' => false,
                'line-height' => false,
                'text-align' => false,
                'units'       =>'px',
                'subtitle'    => esc_html__( 'This is a font used for main website navigation', 'gridlove' ),
                'default' => gridlove_get_default_option( 'nav_font' ),
                'preview' => array(
                    'always_display' => true,
                    'font-size' => '16px',
                    'text' => 'Home &nbsp;&nbsp;About &nbsp;&nbsp;Blog &nbsp;&nbsp;Contact'
                )

            ),

            array(
                'id'          => 'finetune',
                'type'        => 'section',
                'indent' => false,
                'title'       => esc_html__( 'Fine-tune typography', 'gridlove' ),
                'subtitle'    => esc_html__( 'Advanced options to adjust font sizes', 'gridlove' )
            ),


            array(
                'id'       => 'font_size_p',
                'type'     => 'spinner',
                'title'    => esc_html__( 'Main text font size', 'gridlove' ),
                'subtitle' => esc_html__( 'This is your body text font size, used for default text on single posts and pages', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_p' ),
                'min'      => '14',
                'step'     => '1',
                'max'      => '22',
            ),

            array(
                'id'       => 'font_size_nav',
                'type'     => 'spinner',
                'title'    => esc_html__( 'Navigation font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to main website navigation', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_nav' ),
                'min'      => '14',
                'step'     => '1',
                'max'      => '22',
            ),

            array(
                'id'       => 'font_size_module',
                'type'     => 'spinner',
                'title'    => esc_html__( 'Modules text font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to text excerpts in post modules', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_module' ),
                'min'      => '12',
                'step'     => '1',
                'max'      => '22',
            ),

            array(
                'id'       => 'font_size_small',
                'type'     => 'spinner',
                'title'    => esc_html__( 'Small text (widget) font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to widgets and some special elements', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_small' ),
                'min'      => '12',
                'step'     => '1',
                'max'      => '20',
            ),

            array(
                'id'       => 'font_size_h1',
                'type'     => 'spinner',
                'title'    => esc_html__( 'H1 font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to H1 elements and single post/page titles', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_h1' ),
                'min'      => '30',
                'step'     => '1',
                'max'      => '60',
            ),

            array(
                'id'       => 'font_size_h2',
                'type'     => 'spinner',
                'title'    => esc_html__( 'H2 (archive/module title) font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to H2 elements, archive titles and module titles', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_h2' ),
                'min'      => '22',
                'step'     => '1',
                'max'      => '40',
            ),

            array(
                'id'       => 'font_size_h3',
                'type'     => 'spinner',
                'title'    => esc_html__( 'H3 (module post title) font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to H3 elements and post titles in modules', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_h3' ),
                'min'      => '18',
                'step'     => '1',
                'max'      => '26',
            ),

            array(
                'id'       => 'font_size_h4',
                'type'     => 'spinner',
                'title'    => esc_html__( 'H4 (widget title) font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to H4 elements and widget titles', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_h4' ),
                'min'      => '16',
                'step'     => '1',
                'max'      => '26',
            ),

            array(
                'id'       => 'font_size_h5',
                'type'     => 'spinner',
                'title'    => esc_html__( 'H5 font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to H5 elements', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_h5' ),
                'min'      => '14',
                'step'     => '1',
                'max'      => '24',
            ),

            array(
                'id'       => 'font_size_h6',
                'type'     => 'spinner',
                'title'    => esc_html__( 'H6 font size', 'gridlove' ),
                'subtitle' => esc_html__( 'Applies to H6 elements', 'gridlove' ),
                'default' => gridlove_get_default_option( 'font_size_h6' ),
                'min'      => '14',
                'step'     => '1',
                'max'      => '22',
            ),

            array(
                'id' => 'uppercase',
                'type' => 'checkbox',
                'multi' => true,
                'title' => esc_html__( 'Uppercase text', 'gridlove' ),
                'subtitle' => esc_html__( 'Check if you want to show CAPITAL LETTERS for specific elements', 'gridlove' ),
                'options' => array(
                    'site-title' => esc_html__( 'Site title', 'gridlove' ),
                    'gridlove-site-description' => esc_html__( 'Site description', 'gridlove' ),
                    'gridlove-main-navigation' => esc_html__( 'Main navigation', 'gridlove' ),
                    'entry-title' => esc_html__( 'Post/Page titles', 'gridlove' ),
                    'module-title' => esc_html__( 'Module/Archive titles', 'gridlove' ),
                    'widget-title' => esc_html__( 'Widget titles', 'gridlove' )


                ),
                'default' => gridlove_get_default_option( 'uppercase' ),
            ),

        ) )
);


/* Ads */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-usd',
        'title'     => esc_html__( 'Ads', 'gridlove' ),
        'desc'     => esc_html__( 'Use these options to fill your ads slots. Both image and JavaScript related ads are allowed.', 'gridlove' ),
        'fields'    => array(

            array(
                'id' => 'ad_header',
                'type' => 'editor',
                'title' => esc_html__( 'Header ad slot', 'gridlove' ),
                'subtitle' => esc_html__( 'This ad will be displayed in website header. You can enable it in header main area settings', 'gridlove' ),
                'default' => gridlove_get_default_option( 'uppercase' ),
                'desc' => esc_html__( 'Note: If you want to paste HTML or js code, use "text" mode in editor. Suggested size of an ad banner is 728x90', 'gridlove' ),
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),


            array(
                'id' => 'ad_below_header',
                'type' => 'editor',
                'title' => esc_html__( 'Below header', 'gridlove' ),
                'subtitle' => esc_html__( 'This ad will be displayed between your header and website content', 'gridlove' ),
                'default' => gridlove_get_default_option( 'ad_below_header' ),
                'desc' => esc_html__( 'Note: If you want to paste HTML or JavaScript code, use "text" mode in editor', 'gridlove' ),
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

            array(
                'id' => 'ad_above_footer',
                'type' => 'editor',
                'title' => esc_html__( 'Above footer', 'gridlove' ),
                'subtitle' => esc_html__( 'This ad will be displayed between your footer and website content', 'gridlove' ),
                'default' => gridlove_get_default_option( 'ad_above_footer' ),
                'desc' => esc_html__( 'Note: If you want to paste HTML or JavaScript code, use "text" mode in editor', 'gridlove' ),
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

            array(
                'id' => 'ad_above_single',
                'type' => 'editor',
                'title' => esc_html__( 'Above single post content', 'gridlove' ),
                'subtitle' => esc_html__( 'This ad will be displayed above post content on your single post templates', 'gridlove' ),
                'default' => gridlove_get_default_option( 'ad_above_single' ),
                'desc' => esc_html__( 'Note: If you want to paste HTML or JavaScript code, use "text" mode in editor', 'gridlove' ),
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

            array(
                'id' => 'ad_below_single',
                'type' => 'editor',
                'title' => esc_html__( 'Below single post content', 'gridlove' ),
                'subtitle' => esc_html__( 'This ad will be displayed below post content on your single post templates', 'gridlove' ),
                'default' => gridlove_get_default_option( 'ad_below_single' ),
                'desc' => esc_html__( 'Note: If you want to paste HTML or JavaScript code, use "text" mode in editor', 'gridlove' ),
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

            array(
                'id' => 'ad_archive',
                'type' => 'editor',
                'title' => esc_html__( 'Archive ad (between posts)', 'gridlove' ),
                'subtitle' => esc_html__( 'This ad will be displayed between posts listing on archive pages such as category, tags, author etc..', 'gridlove' ),
                'default' => gridlove_get_default_option( 'ad_archive' ),
                'desc' => esc_html__( 'Note: If you want to paste HTML or JavaScript code, use "text" mode in editor', 'gridlove' ),
                'args'   => array(
                    'textarea_rows'    => 5,
                    'default_editor' => 'html'
                )
            ),

            array(
                'id' => 'ad_archive_position',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Archive ad position', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose a position for your archive ad (i.e. if you put 4, it will be displayed instead of the 4th post)', 'gridlove' ),
                'default' => gridlove_get_default_option( 'ad_archive_position' ),
                'validate' => 'numeric'
            ),

            array(
                'id'       => 'ad_exclude_404',
                'type'     => 'switch',
                'title'    => esc_html__( 'Do not show ads on 404 page', 'gridlove' ),
                'subtitle' => esc_html__( 'Disable ads on 404 error page', 'gridlove' ),
                'default' => gridlove_get_default_option( 'ad_exclude_404' ),
            ),

            array(
                'id'       => 'ad_exclude_from_pages',
                'type'     => 'select',
                'title'    => esc_html__( 'Do not show ads on specific pages', 'gridlove' ),
                'subtitle' => esc_html__( 'Select pages on which you don\'t want to display ads', 'gridlove' ),
                'multi'    => true,
                'sortable' => true,
                'data'     => 'page',
                'args'     => array(
                    'posts_per_page' => - 1,
                ),
                'default' => gridlove_get_default_option( 'ad_exclude_from_pages' ),
            ),

        )
    )
);

/* Misc. */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-wrench',
        'title'     => esc_html__( 'Misc.', 'gridlove' ),
        'desc'     => esc_html__( 'These are some additional miscellaneous theme settings', 'gridlove' ),
        'fields'    => array(

            array(
                'id' => 'rtl_mode',
                'type' => 'switch',
                'title' => esc_html__( 'RTL mode (right to left)', 'gridlove' ),
                'subtitle' => esc_html__( 'Enable this option if you are using right to left writing/reading', 'gridlove' ),
                'default' => gridlove_get_default_option( 'rtl_mode' ),
            ),

            array(
                'id' => 'rtl_lang_skip',
                'type' => 'text',
                'title' => esc_html__( 'Skip RTL for specific language(s)', 'gridlove' ),
                'subtitle' => wp_kses_post( sprintf( __( 'Paste specific WordPress language <a href="http://wpcentral.io/internationalization/" target="_blank">locale code</a> to exclude it from the RTL mode', 'gridlove' ) ) ),
                'desc' => esc_html__( 'i.e. If you are using Arabic and English versions on the same WordPress installation you should put "en_US" in this field and its version will not be displayed as RTL. Note: To exclude multiple languages, separate by comma: en_US, de_DE', 'gridlove' ),
                'default' => gridlove_get_default_option( 'rtl_lang_skip' ),
                'required' => array( 'rtl_mode', '=', true )
            ),


            array(
                'id' => 'more_string',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'More string', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify your "more" string to append after limited post excerpts', 'gridlove' ),
                'default' => gridlove_get_default_option( 'more_string' ),
                'validate' => 'no_html'
            ),

            array(
                'id' => 'views_forgery',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Post views forgery', 'gridlove' ),
                'subtitle' => esc_html__( 'Specify a value to add to the real number of entry views for each post', 'gridlove' ),
                'desc' => esc_html__( 'i.e. If a post has 45 views and you put 100, your post will display 145 views', 'gridlove' ),
                'default' => gridlove_get_default_option( 'views_forgery' ),
                'validate' => 'numeric'
            ),

            array(
                'id' => 'gridlove_bultin_gallery',
                'type' => 'switch',
                'title'     => esc_html__( 'Use gridlove gallery style', 'gridlove' ),
                'subtitle'  => esc_html__( 'Check if you want to use our built in gallery style or disable if you want to use default WordPress gallery or some other gallery plugin', 'gridlove' ),
                'default' => gridlove_get_default_option( 'gridlove_bultin_gallery' ),
            ),

            array(
                'id' => 'on_single_img_popup',
                'type' => 'switch',
                'title' => esc_html__( 'Open content image(s) in pop-up', 'gridlove' ),
                'subtitle' => esc_html__( 'Enable this option if you want regular images inserted in post/page content to be open in pop-up', 'gridlove' ),
                'default' => gridlove_get_default_option( 'on_single_img_popup' ),
            ),

            array(
                'id' => 'featured_paginated_image',
                'type' => 'radio',
                'title' => esc_html__( 'Paginated posts display featured image', 'gridlove' ),
                'subtitle' => esc_html__( 'Choose wheter to display featured images for paginated/multi-page posts', 'gridlove' ),
                'options'   => array(
                    'always' => esc_html__( 'Always', 'gridlove' ),
                    'first_page' => esc_html__( 'Only on first page', 'gridlove' ),
                    'never' => esc_html__( 'Never', 'gridlove' )
                ),
                'default' => gridlove_get_default_option( 'featured_paginated_image' ),
            ),

            array(
                'id'        => 'breadcrumbs',
                'type'      => 'rwdo',
                'title'     => esc_html__( 'Enable breadcrumbs support', 'gridlove' ),
                'subtitle'  => esc_html__( 'Select a plugin you are using for breadcrumbs', 'gridlove' ),
                'options'   => gridlove_get_breadcrumbs_plugins(),
                'default' => gridlove_get_default_option( 'breadcrumbs' ),
            ),

            array(
                'id' => 'primary_category',
                'type' => 'switch',
                'title' => esc_html__( 'Primary category support', 'gridlove' ),
                'subtitle' => esc_html__( 'This option supports primary category feature from Yoast SEO plugin. If a post is assigned to multiple categories, only selected primary category will be displayed for that post in all listing layouts', 'gridlove' ),
                'default' => gridlove_get_default_option( 'primary_category' ),
            ),

            array(
                'id' => 'words_read_per_minute',
                'type' => 'text',
                'class' => 'small-text',
                'title' => esc_html__( 'Words to read per minute', 'gridlove' ),
                'subtitle' => esc_html__( 'Use this option to set number of words your visitors read per minute, in order to fine-tune calculation of post reading time meta data', 'gridlove' ),
                'validate' => 'numeric',
                'default' => gridlove_get_default_option( 'words_read_per_minute' ),
            ),

            array(
                'id'       => 'post_modified_date',
                'type'     => 'switch',
                'title' => esc_html__( 'Use "last modified" date for post meta data', 'gridlove' ),
                'subtitle' => esc_html__( 'Enable this option if you want posts to display modified date instead of publish date.', 'gridlove' ),
                'default' => gridlove_get_default_option( 'post_modified_date' ),
            ),

            array(
                'id'       => 'back_to_top',
                'type'     => 'switch',
                'title' => esc_html__( 'Back to top', 'gridlove' ),
                'subtitle' => esc_html__( 'Enable this option if you want to use back to top button.', 'gridlove' ),
                'default' => gridlove_get_default_option( 'back_to_top' ),
            )

        )
    )
);

/* WooCommerce */

if ( gridlove_is_woocommerce_active()) {

    Redux::setSection( $opt_name , array(
            'icon'      => 'el-icon-shopping-cart',
            'title' => esc_html__( 'WooCommerce', 'gridlove' ),
            'desc' => esc_html__( 'Manage options for WooCommerce pages', 'gridlove' ),
            'fields' => array(
                array(
                    'id'        => 'product_sidebar_position',
                    'type'      => 'image_select',
                    'title'     => esc_html__( 'Product sidebar layout', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sidebar layout for WooCommerce products', 'gridlove' ),
                    'options'   => gridlove_get_sidebar_layouts(),
                    'default' => gridlove_get_default_option( 'product_sidebar_position' ),                ),

                array(
                    'id'        => 'product_sidebar_standard',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Product standard sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose standard sidebar for WooCommerce products', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'product_sidebar_position' ),
                    'required'  => array( 'product_sidebar_position', '!=', 'none' )
                ),

                array(
                    'id'        => 'product_sidebar_sticky',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Product sticky sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sticky sidebar for WooCommerce products', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'product_sidebar_sticky' ),
                    'required'  => array( 'product_sidebar_position', '!=', 'none' )
                ),

                array(
                    'id'        => 'product_archive_sidebar_position',
                    'type'      => 'image_select',
                    'title'     => esc_html__( 'Product archives sidebar layout', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sidebar layout for WooCommerce products category, tag, archive etc...', 'gridlove' ),
                    'options'   => gridlove_get_sidebar_layouts(),
                    'default' => gridlove_get_default_option( 'product_archive_sidebar_position' ),                ),

                array(
                    'id'        => 'product_archive_sidebar_standard',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Product archives standard sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose standard sidebar for WooCommerce products category, tag, archive etc...', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'product_archive_sidebar_standard' ),
                    'required'  => array( 'product_archive_sidebar_position', '!=', 'none' )
                ),

                array(
                    'id'        => 'product_archive_sidebar_sticky',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Product archives sticky sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sticky sidebar for WooCommerce products category, tag, archive etc...', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'product_archive_sidebar_sticky' ),
                    'required'  => array( 'product_archive_sidebar_position', '!=', 'none' )
                )
            ) )
    );
}

/* bbPress */

if ( gridlove_is_bbpress_active() ) {
    Redux::setSection( $opt_name , array(
            'icon'      => 'el-icon-quotes',
            'title' => esc_html__( 'bbPress', 'gridlove' ),
            'desc' => esc_html__( 'Manage options for bbPress pages', 'gridlove' ),
            'fields' => array(
                array(
                    'id'        => 'forum_sidebar_position',
                    'type'      => 'image_select',
                    'title'     => esc_html__( 'Forum sidebar layout', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sidebar layout for bbPress forums', 'gridlove' ),
                    'options'   => gridlove_get_sidebar_layouts(),
                    'default' => gridlove_get_default_option( 'forum_sidebar_position' ),                ),

                array(
                    'id'        => 'forum_sidebar_standard',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Forum standard sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose standard sidebar for bbPress forums', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'forum_sidebar_standard' ),
                    'required'  => array( 'forum_sidebar_position', '!=', 'none' )
                ),

                array(
                    'id'        => 'forum_sidebar_sticky',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Forum sticky sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sticky sidebar for bbPress forums', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'forum_sidebar_sticky' ),
                    'required'  => array( 'forum_sidebar_position', '!=', 'none' )
                ),

                array(
                    'id'        => 'topic_sidebar_position',
                    'type'      => 'image_select',
                    'title'     => esc_html__( 'Topic sidebar layout', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sidebar layout for bbPress topics', 'gridlove' ),
                    'options'   => gridlove_get_sidebar_layouts(),
                    'default' => gridlove_get_default_option( 'topic_sidebar_position' ),                ),

                array(
                    'id'        => 'topic_sidebar_standard',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Topic standard sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose standard sidebar for bbPress topics', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'topic_sidebar_standard' ),
                    'required'  => array( 'topic_sidebar_position', '!=', 'none' )
                ),

                array(
                    'id'        => 'topic_sidebar_sticky',
                    'type'      => 'select',
                    'title'     => esc_html__( 'Topic sticky sidebar', 'gridlove' ),
                    'subtitle'  => esc_html__( 'Choose sticky sidebar for bbPress topics', 'gridlove' ),
                    'options'   => gridlove_get_sidebars_list(),
                    'default' => gridlove_get_default_option( 'topic_sidebar_sticky' ),
                    'required'  => array( 'topic_sidebar_position', '!=', 'none' )
                )


            ) )
    );
}



Redux::setSection( $opt_name , array(
        'type' => 'divide',
        'id' => 'gridlove-divide',
    ) );

/* Translation Options */

$translate_options[] = array(
    'id' => 'enable_translate',
    'type' => 'switch',
    'switch' => true,
    'title' => esc_html__( 'Enable theme translation?', 'gridlove' ),
    'default' => gridlove_get_default_option( 'enable_translate' ),
);

$translate_strings = gridlove_get_translate_options();

foreach ( $translate_strings as $string_key => $string ) {
    $translate_options[] = array(
        'id' => 'tr_'.$string_key,
        'type' => 'text',
        'title' => esc_html( $string['text'] ),
        'subtitle' => isset( $string['desc'] ) ? $string['desc'] : '',
        'default' => ''
    );
}

Redux::setSection( $opt_name, array(
        'icon'      => 'el-icon-globe-alt',
        'title' => esc_html__( 'Translation', 'gridlove' ),
        'desc' => wp_kses_post( __( 'Use these settings to quckly translate or change the text in this theme. If you want to remove the text completely instead of modifying it, you can use <strong>"-1"</strong> as a value for particular field translation. <br/><br/><strong>Note:</strong> If you are using this theme for a multilingual website, you need to disable these options and use multilanguage plugins (such as WPML) and manual translation with .po and .mo files located inside the "languages" folder.', 'gridlove' ) ),
        'fields' => $translate_options
    ) );

/* Performance */
Redux::setSection( $opt_name , array(
        'icon'      => 'el-icon-dashboard',
        'title'     => esc_html__( 'Performance', 'gridlove' ),
        'desc'     => esc_html__( 'Use these options to put your theme to a high speed as well as save your server resources!', 'gridlove' ),
        'fields'    => array(

            array(
                'id' => 'minify_css',
                'type' => 'switch',
                'title' => esc_html__( 'Use minified CSS', 'gridlove' ),
                'subtitle' => esc_html__( 'Load all theme css files combined and minified into a single file.', 'gridlove' ),
                'default' => gridlove_get_default_option( 'minify_css' ),
            ),

            array(
                'id' => 'minify_js',
                'type' => 'switch',
                'title' => esc_html__( 'Use minified JS', 'gridlove' ),
                'subtitle' => esc_html__( 'Load all theme js files combined and minified into a single file.', 'gridlove' ),
                'default' => gridlove_get_default_option( 'minify_js' ),
            ),

            array(
                'id' => 'disable_img_sizes',
                'type' => 'checkbox',
                'multi' => true,
                'title' => esc_html__( 'Disable additional image sizes', 'gridlove' ),
                'subtitle' => esc_html__( 'By default, theme generates additional image size for each of the layouts it offers. You can use this option to avoid creating additional sizes if you are not using particular layout in order to save your server space.', 'gridlove' ),
                'options' => array(
                    'cover' => esc_html__( 'Cover image', 'gridlove' ),
                    'single' => esc_html__( 'Single post image (also used for pages)', 'gridlove' ),
                    'a' => esc_html__( 'Layout A image', 'gridlove' ),
                    'b' => esc_html__( 'Layout B image', 'gridlove' ),
                    'd' => esc_html__( 'Layout D image (also used for cover 3 and 4)', 'gridlove' ),

                ),

                'default' => gridlove_get_default_option( 'disable_img_sizes' ),
            ),



        ) ) );


?>