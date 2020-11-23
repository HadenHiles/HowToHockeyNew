<?php

/* Font styles */

$main_font = gridlove_get_font_option( 'main_font' );
$h_font = gridlove_get_font_option( 'h_font' );

$font_size_p = absint( gridlove_get_option( 'font_size_p' ) ); 
$font_size_h1 = absint( gridlove_get_option( 'font_size_h1' ) );
$font_size_h2 = absint( gridlove_get_option( 'font_size_h2' ) );
$font_size_h3 = absint( gridlove_get_option( 'font_size_h3' ) );
$font_size_h4 = absint( gridlove_get_option( 'font_size_h4' ) );
$font_size_h5 = absint( gridlove_get_option( 'font_size_h5' ) );
$font_size_h6 = absint( gridlove_get_option( 'font_size_h6' ) );
$font_size_small = absint( gridlove_get_option( 'font_size_small' ) );



/* General styles */

$color_content_bg = esc_attr( gridlove_get_option( 'color_content_bg' ) );
$color_content_h = esc_attr( gridlove_get_option( 'color_content_h' ) );
$color_content_txt = esc_attr( gridlove_get_option( 'color_content_txt' ) );
$color_content_acc = esc_attr( gridlove_get_option( 'color_content_acc' ) );
$color_content_meta = esc_attr( gridlove_get_option( 'color_content_meta' ) );


?>

.edit-post-visual-editor.editor-styles-wrapper{
    font-size: <?php echo esc_attr( $font_size_p ); ?>px;
}
.edit-post-visual-editor.editor-styles-wrapper h1{
  font-size: <?php echo esc_attr( $font_size_h1 ); ?>px;
}

.edit-post-visual-editor.editor-styles-wrapper h2{
  font-size: <?php echo esc_attr( $font_size_h2 ); ?>px;
}

.edit-post-visual-editor.editor-styles-wrapper h3{
  font-size: <?php echo esc_attr( $font_size_h3 ); ?>px;
}

.edit-post-visual-editor.editor-styles-wrapper h4{
  font-size: <?php echo esc_attr( $font_size_h4 ); ?>px;
}

.edit-post-visual-editor.editor-styles-wrapper h5 {
  font-size: <?php echo esc_attr( $font_size_h5 ); ?>px;
}

.edit-post-visual-editor.editor-styles-wrapper h6{
  font-size: <?php echo esc_attr( $font_size_h6 ); ?>px;
}



.edit-post-visual-editor.editor-styles-wrapper{
  background-color: <?php echo esc_attr( $color_content_bg ); ?>;

  color: <?php echo esc_attr( $color_content_txt ); ?>;
  font-family: <?php echo wp_kses_post( $main_font['font-family'] ); ?>;
  font-weight: <?php echo esc_attr( $main_font['font-weight'] ); ?>;
  <?php if ( isset( $main_font['font-style'] ) && !empty( $main_font['font-style'] ) ):?>
    font-style: <?php echo esc_attr( $main_font['font-style'] ); ?>;
  <?php endif; ?>
}

.editor-styles-wrapper h1, 
.editor-styles-wrapper.edit-post-visual-editor .editor-post-title__block .editor-post-title__input,
.editor-styles-wrapper h2, 
.editor-styles-wrapper h3, 
.editor-styles-wrapper h4,
.editor-styles-wrapper h5,
.editor-styles-wrapper h6,
blockquote,
thead td,
q:before{
  color: <?php echo esc_attr( $color_content_h ); ?>;
  font-family: <?php echo wp_kses_post( $h_font['font-family'] ); ?>;
  font-weight: <?php echo esc_attr( $h_font['font-weight'] ); ?>;
  <?php if ( isset( $h_font['font-style'] ) && !empty( $h_font['font-style'] ) ):?>
  font-style: <?php echo esc_attr( $h_font['font-style'] ); ?>;
  <?php endif; ?>
}

/* Links color */
.editor-styles-wrapper .wp-block a{
  color: <?php echo esc_attr( $color_content_acc ); ?>;  
  border-bottom: 1px solid;
}
.editor-styles-wrapper h1 a,
.editor-styles-wrapper h2 a, 
.editor-styles-wrapper h3 a, 
.editor-styles-wrapper h4 a,
.editor-styles-wrapper h5 a,
.editor-styles-wrapper h6 a{
   color: <?php echo esc_attr( $color_content_h ); ?>;  
}
a:hover{
  color: <?php echo esc_attr( $color_content_acc ); ?>;  
}

p a{
  color: <?php echo esc_attr( $color_content_acc ); ?>; 
  border-color: <?php echo gridlove_hex2rgba( $color_content_acc , 0.8); ?>;
}
p a:hover{
  border-bottom: 1px solid transparent;
}

/* Buttons pills and links */

.submit{
  color:#FFF;
  background-color: <?php echo esc_attr( $color_content_acc ); ?>;  
}
.wp-block-button__link{
  background-color: <?php echo esc_attr( $color_content_acc ); ?>;   
}
.gridlove-button:hover{
  color:#FFF;  
}
.gridlove-pill:hover,
.gridlove-author-links a:hover,
.entry-category a:hover{
  background: #111;
  color: #FFF;
}

/* Highlight */

.gridlove-highlight{
  background: <?php echo esc_attr( $color_highlight_bg ); ?>;
}
.gridlove-highlight,
.gridlove-highlight h4,
.gridlove-highlight a{
  color: <?php echo esc_attr( $color_highlight_txt ); ?>;
}



/* Form elements */
.editor-styles-wrapper .wp-block table.wp-block-table{
	border-color: <?php echo gridlove_hex2rgba( $color_content_txt, 0.1); ?>;  
}
.editor-styles-wrapper .wp-block-table:not(.is-style-stripes) td, 
.editor-styles-wrapper .wp-block-table:not(.is-style-stripes) th{
	border: 1px solid <?php echo gridlove_hex2rgba( $color_content_txt, 0.1); ?>;  
}


.wp-block-cover .wp-block-cover-image-text, .wp-block-cover .wp-block-cover-text, 
.wp-block-cover h2, .wp-block-cover-image .wp-block-cover-image-text, 
.wp-block-cover-image .wp-block-cover-text, .wp-block-cover-image h2{
  font-family: <?php echo wp_kses_post( $h_font['font-family'] ); ?>;
  font-weight: <?php echo esc_attr( $h_font['font-weight'] ); ?>;
  <?php if ( isset( $h_font['font-style'] ) && !empty( $h_font['font-style'] ) ):?>
  font-style: <?php echo esc_attr( $h_font['font-style'] ); ?>;
  <?php endif; ?> 
}
.wp-block-cover-image .wp-block-cover-image-text, .wp-block-cover-image h2{
  font-size: <?php echo esc_attr( $font_size_h2 ); ?>px;  
}

/* Content width*/

.edit-post-visual-editor .wp-block{
	max-width: 650px;
}
.post-type-page .edit-post-visual-editor .wp-block{
	max-width: 650px;
}
.edit-post-visual-editor .wp-block[data-align="wide"],
.post-type-page .edit-post-visual-editor .wp-block[data-align="wide"]{
	max-width: 700px;
}
.edit-post-visual-editor .wp-block[data-align="full"],
.post-type-page .edit-post-visual-editor .wp-block[data-align="full"]{
	max-width: none;
}

/* Code and preformated*/

.wp-block-code,
.editor-styles-wrapper code,
.editor-styles-wrapper pre,
.editor-styles-wrapper pre h2{
	background: <?php echo gridlove_hex2rgba($color_content_txt, 0.1); ?>;
	color: <?php echo esc_attr( $color_content_txt ); ?>;
}
.wp-block-code .editor-plain-text{
  background: transparent;
}
.wp-block-separator{
	border-color: <?php echo gridlove_hex2rgba($color_content_txt, 0.1); ?>;
	border-bottom-width: 1px;	
}
.wp-block-tag-cloud a{
   background: <?php echo gridlove_hex2rgba( $color_content_txt, 0.1); ?>;
   color: <?php echo esc_attr( $color_content_txt ); ?>; 
}

.wp-block .wp-block-search__input{
	border:1px solid <?php echo gridlove_hex2rgba($color_content_txt, 0.3); ?>;	
}
.wp-block .wp-block-search__button{
	background: <?php echo esc_attr( $color_content_acc ); ?>;
	color: <?php echo esc_attr($color_content_bg); ?>; 
}
.wp-block-calendar table th{
	border:1px solid <?php echo gridlove_hex2rgba($color_content_txt, 0.3); ?>;	  
}

<?php

/* Apply uppercase options */

$uppercase = gridlove_get_option( 'uppercase' );
if ( !empty( $uppercase ) ) {
  foreach ( $uppercase as $text_class => $val ) {
    if ( $val ){
      echo '.'.$text_class.'{text-transform: uppercase;}';
    }
  }
}


?>