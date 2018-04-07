=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://thisbailiwick.com
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Ditch the GIF is a plugin to implement looping videos in a GIF like fashion but without the expensive bandwidth and cpu usage.

== Description ==
* DtF will take your video file and output it as a `<video>` tag with these attributes `loop playsinline muted autoplay`. These attributes allow the videos to be autoplayed on desktop and mobile devices which support autoplay when the video is muted (even iOS and Android).
* If autoplay is not supported the first frame of the video will be shown.

## Limitations

* For the moment DtG only supports mp4 files.

== Installation ==

* Download or clone the repo and upload to your WP sites plugin folder.
* Activate!
* DtF uses a [shortcode](https://codex.wordpress.org/shortcode) to add the video to the page.
	* Uplaod a video to your media library and copy it's url.
	* DtG only has one attribute, mp4, and it is required.
	* [wp_videojs mp4="http://example.com/wordpress/wp-content/uploads/2018/04/video.mp4"]

== Changelog ==

= 1.0 =
* Initial code