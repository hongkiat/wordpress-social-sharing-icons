<?php

/*
* Enqueue stylesheets of the child theme
*/
function theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/*
* Add the custom social sharing icons
*/
function add_social_sharing() { ?>
	<h3>Share this post</h3>
	<ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Ftestsite&t=Test%20site" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Facebook.png"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Flocalhost%2Ftestsite&text=Test%20site:%20http%3A%2F%2Flocalhost%2Ftestsite" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Twitter.png"></a></li>
  <li><a href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Ftestsite" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Google+.png"></a></li>
  <li><a href="http://www.tumblr.com/share?v=3&u=http%3A%2F%2Flocalhost%2Ftestsite&t=Test%20site&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Tumblr.png"></a></li>
  <li><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Flocalhost%2Ftestsite&description=Test%20site" target="_blank" title="Pin it" onclick="window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.URL) + '&description=' +  encodeURIComponent(document.title)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Pinterest.png"></a></li>
  <li><a href="https://getpocket.com/save?url=http%3A%2F%2Flocalhost%2Ftestsite&title=Test%20site" target="_blank" title="Add to Pocket" onclick="window.open('https://getpocket.com/save?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Pocket.png"></a></li>
  <li><a href="http://www.reddit.com/submit?url=http%3A%2F%2Flocalhost%2Ftestsite&title=Test%20site" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Reddit.png"></a></li>
  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Flocalhost%2Ftestsite&title=Test%20site&summary=Test%20site&source=http%3A%2F%2Flocalhost%2Ftestsite" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/LinkedIn.png"></a></li>
  <li><a href="http://wordpress.com/press-this.php?u=http%3A%2F%2Flocalhost%2Ftestsite&t=Test%20site&s=Test%20site" target="_blank" title="Publish on WordPress" onclick="window.open('http://wordpress.com/press-this.php?u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Wordpress.png"></a></li>
  <li><a href="https://pinboard.in/popup_login/?url=http%3A%2F%2Flocalhost%2Ftestsite&title=Test%20site&description=Test%20site" target="_blank" title="Save to Pinboard" onclick="window.open('https://pinboard.in/popup_login/?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Pinboard.png"></a></li>
  <li><a href="mailto:?subject=Test%20site&body=Test%20site:%20http%3A%2F%2Flocalhost%2Ftestsite" target="_blank" title="Email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img src="http://your-wp-site.com/wp-content/themes/twentyfifteen-child/images/flat_web_icon_set/black/Email.png"></a></li>
</ul>

<?php }
add_action( 'custom_social_share', 'add_social_sharing' );