== Change Log ==

= 1.9.5 =

* Added: Masonry Layout A post listing in 4 columns
* Added: Official support for WP Forms WordPress plugin
* Added: Options to choose multiple stylings for social sharing in the plugin settings in dashboard (Settings -> Meks Easy Social Share)
* Added: Option to choose whether prev/next posts will load the posts from the same category
* Fixed: Several minor styling issues

= 1.9.4 =

* Fixed: Removing modules in admin not working properly in the previous version

= 1.9.3 =

* Fixed: Issue with creating new custom sidebars
* Fixed: Back to top button functionality
* Fixed: Several minor styling issues

= 1.9.2 =

* Fixed: Several minor styling issues

= 1.9.1 =

* Fixed: Problem with the access to Theme options

= 1.9 =

* Added: Styling support for the latest WordPress blocks (introduced in WordPress 5.2)
* Added: Admin panel styling for WP 5.0+ editor and all blocks
* Fixed: Several minor styling issues

Mandatory changes to accommodate the latest Envato/ThemeForest requirements:
* Theme Options panel is removed from the theme. To make it appear again, you need to install and activate Redux Framework Plugin via Appearance -> Gridlove plugins
* All theme associated widgets cannot be a part of the theme anymore and are now removed. To get your widgets back, please install and activate Gridlove Buddy plugin in Appearance -> Gridlove plugins
* Social sharing functionality cannot be a part of the theme anymore. To enable social sharing, please install and activate Meks Easy Social Share plugin in Appearance -> Gridlove plugins
* Additional JS field is not allowed in Theme options anymore thus it is removed from the theme. As an alternative, you can use Insert Headers and Footers WordPress Plugin
* Additional CSS field is not allowed in Theme options anymore and is now patched into the WordPress native field in Appearance -> Customize -> Additional CSS

= 1.8 =

* Added: New layout combinations for posts listing, the two-columned Layout D (inside Simple and Masonry layouts in Modules or Archive templates)
* Added: Another ad slot (Archive Ad) to be displayed between posts on all archive templates (Theme Options -> Ads)
* Added: Option to display user login icon/form as an element inside the header (Theme Options -> Header)
* Added: Responsive menu options. Now you can append secondary menus and social menu to mobile/responsive navigation (Theme Options -> Header -> Responsive Menu )
* Added: Options to choose different layout, menu and elements for sticky header (Theme Options -> Sticky)
* Added: Option to display "back to top" button (Theme Options -> Misc.)
* Fixed: Modules not displaying in page admin screen when Classic Editor was used
* Fixed: Several minor styling issues

= 1.7.2 =

* Added: Styling for Blocks (coming with the new WordPress editor in version 5.0)
* Added: Option to display modified/last updated date in post meta data instead of the publish date
* Added: Support for Telegram icon in social menu in header
* Improved: Fully tested and ready for WordPress 5.0
* Improved: Envato Market plugin is now recommended for theme updates
* Fixed: Several minor styling issues

= 1.7.1 =

* Added: Initial support for the upcoming new WordPress content editor (Gutenberg)
* Fixed: "Do not duplicate" option in Cover area on Modules template not working (bug appeared in the previous version 1.7)
* Fixed: Several minor styling issues

= 1.7 =

* Added: Option to add category featured image (thumbnail) so it can be displayed in Category modules
* Added: Support for displaying Custom Post Types in Cover area on Modules Template (if custom post type is registered, it will be detected automatically and you can choose it instead of standard posts)
* Added: Option to disable ads on specific pages, i.e contact, 404, etc... (Theme Options -> Ads)
* Improved: Styling for GDPR cookie consent checkbox field in comment form
* Improved: Password protected functionality is now supported in Modules Template
* Fixed: Several minor styling issues

= 1.6 =

* Added: Instagram Widget (by using Meks Easy Instagram widget WordPress plugin)
* Added: When choosing posts manually inside modules, now you have a search field for an easier selection instead of entering post IDs (Modules Template)
* Added: Neat support for some of the most popular related posts plugins. The theme can now use plugins' algorithm for detecting related posts but with native theme styling applied (Theme Options -> Single Post -> Related )
* Added: Option to specify "number of words per minute" in order to fine-tune calculation of posts "reading time" (Theme Options -> Misc.)
* Fixed: Masonry layout not displaying properly in some special cases
* Fixed: Minor styling issues in various browsers and responsive mode

= 1.5 =
* Added: Masonry layouts! Now you can use masonry layouts in post modules as well as archive templates
* Added: Category module! With which you can display your categories inside modules (Modules Template)
* Added: Options to include/exclude categories and tags when selecting posts in modules (Modules Template)
* Added: Option to choose Layout (A, B, C or D) for related posts (Theme Options -> Single Post -> Related )
* Added: Support for Yoast SEO plugin's "primary category" feature (Theme Options -> Misc.)
* Added: New Google Fonts (Theme Options -> Typography)
* Improved: Social icons list now falls back to drop-down mode in mobile navigation
* Improved: Gridlove Posts Widget now automatically excludes current post from the post list inside the widget
* Fixed: Slider layout not working properly on Custom Post Type modules
* Fixed: Author twitter URL conflict with some plugins in special cases
* Fixed: Minor styling issues in various browsers and responsive mode


= 1.4.2 =
* Added: Option to soften gradients and overlays on cover images, or to remove them completely (Theme Options -> Cover Area -> Image)
* Added: WhatsApp share button option (Theme Options -> Single Post -> Display)
* Added: Option to display child category links below category page title on category archive template (Theme Options -> Category Template)
* Improved: Styling for new WordPress widgets (Video, Audio, Image)
* Fixed: Problem with importing menus with demo importer in PHP7
* Fixed: Several styling issues on mobile


= 1.4.1 =
* Fixed: Featured image not displaying on single layouts 1-6


= 1.4 =
* Added: Support for Co Authors Plus WordPress Plugin (for multi authors on a single post)
* Added: Option to display custom content inside cover area in modules pages (Modules Template)
* Added: Option to specify custom logo URL if you want to point out logo to different location instead of your home page (Theme Options -> Branding)
* Added: Option to upload body background image or pattern (Theme Options -> Content)
* Added: Option to switch off our built in gallery style (if you prefer to use some other gallery plugin) (Theme Options -> Misc.)
* Added: Option to choose whether to display featured image on paginated/multi-page posts (Theme Options -> Misc.)
* Improved: Gallery shortcode is now fully supported in text module
* Improved: Support for WooCommerce WordPress plugin (tested with version 3.0+)
* Fixed: Injected custom content in modules not working in some specific positions
* Fixed: Minor styling issues


= 1.3 =
* Added: Option to inject custom content in post modules (i.e. display an ad, text. html or shortcode instead of a post)
* Added: Support for Custom Post Types in modules (Modules Template). If website is using custom post type, it will automatically be detected and ready for use.
* Added: Option to display breadcrumbs using SEO by Yoast or Breadcrumb NavXT WordPress plugin (Theme Options -> Misc.)
* Added: Option to temporarily activate/deactivate module (Modules Template)
* Added: vKontakte share icon (Theme Options -> Single -> Display)
* Added: Added options to specify social profiles for each users/author
* Improved: Images are now properly adjusted to fit all layouts in some versions of IE and Safari
* Improved: URL and page title now properly change when using "infinite scroll" or "load more"
* Fixed: Bug with share icons repeating on mobile in infinite scroll mode on single post
* Fixed: Gridlove categories widget always showing "count" even if option was unchecked
* Fixed: Minor styling issues in various browsers


= 1.2 =
* Added: Support for WooCommerce WordPress plugin
* Added: Support for bbPress WordPress plugin
* Added: Options to override (On/Off) display options per each post separately
* Added: Authors Page Template which lists all blog authors
* Added: Options to autoplay (auto rotate) slider module, cover area slider and posts widget slider
* Added: Option to enable infinite scroll loading on single posts (Theme Options -> Single Post -> Display)
* Added: Option to choose mini logo for Sticky header (Theme Options -> Header -> Sticky header)
* Added: Option to open regular content images in popup (Theme Options -> Misc.)
* Added: Translation options for comment form fields i.e. Name, Email, Website, etc... (Theme Options -> Translation)
* Fixed: Filtering by tags not working in Cover Area options on Modules Template
* Fixed: Minor styling issues in various browsers


= 1.1 =
* Added: Possibility to override layout options for each category separately (cover layout, main layout, combo layout and pagination)
* Added: Option to translate search button text (Theme Options -> Translation)
* Improved: Lots of minor styling issues regarding desktop, responsive and RTL
* Improved: If search form element is added into header, responsive menu will always display search button instead of entire form
* Fixed: Demo importer not working on specific WordPress configurations


= 1.0 =
* Initial release