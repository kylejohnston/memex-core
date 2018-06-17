# memex core
A simple PHP appliction that reads all images from a directory displays them on a page. Images are displayed in a masonry layout using CSS grid. Features a CSS-only lightbox and lazy loading with beLazy.js

This is a bare bones, starter version of the application. View my [memex repository](https://github.com/kylejohnston/memex) to see how I'm using it as my personal [morgue file](https://en.wikipedia.org/wiki/Morgue_file) or flat file – kind of a self-hosted Pinterest that I use for design inspiration.

The term memex comes from [Vanner Bush’s](https://en.wikipedia.org/wiki/Vannevar_Bush) 1945 The Atlantic Monthly article “ [As We May Think](https://www.theatlantic.com/magazine/archive/1945/07/as-we-may-think/303881/).” The memex is described as “a device in which an individual stores all his books, records, and communications, and which is mechanized so that it may be consulted with exceeding speed and flexibility” and an “enlarged intimate supplement to memory.”

# How it works
On each page, a snippet of PHP defines the path to an image directory:

```
$www_root = 'http://your-url/img/';
$dir = 'img/';
include('includes/renderer.php');
```

**renderer.php** looks for any images in that directory, including JPGs, PNGs, and GIFs. For each image found, it renders in a DIV with a link to view the image in a lightbox.

The images are displayed in a masonry-style layout using CSS grid. beLazy.js is used to lazy load the images.
