Youtube Video Downloader
=========================

This class allows you to get the download links from any youtube video

### Usage ###

```php
require 'Youtube.php';

$youtube = new Zarkiel\Media\Youtube();
$download_links = $youtube->getDownloadLinks('q_gfD3nvh-8'); // Send the url id
print_r($download_links);
```

The output will be some like:

```plain
Array
(
    [MP4] => Array
        (
            [High Quality - 1280x720] => http://...
            [Medium Quality - 480x360] => http://...
        )

    [FLV] => Array
        (
            [Low Quality - 400x226] => http://...
        )

    [3GP] => Array
        (
            [High Quality - 320x240] => http://...
            [Medium Quality - 176x144] => http://...
        )

    [WEBM] => Array
        (
            [Low Quality - 640x360] => http://...
        )
)
```
