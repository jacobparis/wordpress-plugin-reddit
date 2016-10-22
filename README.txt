=== Reddit Featured ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://www.jacobpariseau.com/plugin-reddit-featured/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed a Reddit thread into your site

== Description ==

Reddit Featured is a WordPress plugin that allows you to feature any Reddit thread on your blog or website. Use it to embed a customizable widget that displays the original post and top comments of any Reddit post. Whether you want off-site commenting or just to share a post you’re discussing, it’s just one line of code away. In your `single` or `content-single` files, embed the widget with this line:

`do_action('display_featured_post', $post->ID);`

Then, in your post, add a Custom Field called “Reddit Link” with the path to the post you’d like to embed

`r/{subreddit}/comments/{123ab4}`

== Installation ==

Clone this git repository into your `/wp-content/plugins/` directory

https://github.com/JacobPariseau/Reddit-Featured

Place '<?php do_action('display_featured_post', $post->ID); ?>' in your templates
