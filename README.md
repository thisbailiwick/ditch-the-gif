# Ditch the GIF


**Ditch the GIF** is a plugin to implement looping videos in a GIF like fasion but without the expensive bandwidth and cpu usage.
## Use


* Download or clone the repo and upload to your WP sites plugin folder.
* Activate!
* DtF uses a [shortcode](https://codex.wordpress.org/shortcode) to add the video to the page.
	* Uplaod a video to your media library and copy it's url.
	* DtG only has one attribute, mp4, and it is required.
	* [wp_videojs mp4="http://example.com/wordpress/wp-content/uploads/2018/04/video.mp4"]
* DtF will take your video file and output it as a `<video>` tag with these attributes `loop playsinline muted autoplay`. These attributes allow the videos to be autoplayed on desktop and mobile devices which support autoplay when the video is muted (even iOS and Android).
* If autoplay is not supported the first frame of the video will be shown.

## Limitations

* For the moment DtG only supports mp4 files.