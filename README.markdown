facybox
=======
Demo: [facybox homepage](http://bitbonsai.com/facybox/) or open index.html.  
Need help?  Join the [Original Facebox Google Groups mailing list](http://groups.google.com/group/facebox/)

Benefits compared to original
=============================
 - Faster page load (does the heavy lifting when a facybox is opened and not at startup)
 - Smaller file size (smaller code + minified using YUI)
 - Locally testable (does not require you to host a server just to try locally)
 - Gallery mode available
 - Useable as modal dialog (additional mode that does not allow users to dismiss the box)
 - Clean seperation between JS/CSS (no images/styles inside JS)
 - Seperate centralize method to re-center the facybox externally
 - No need to edit CSS (paths are set to images/facybox instead of /facybox)
 - afterClose event is fired


Installation
============
Download and unpack (use download button above), images go into /images/facybox , if not you can overwrite them in css.

Options
=======
    #name        : default
    noAutoload   : false #do not generate facybox box at start, saves time (use when infrequently used)
    opacity      : 0.3
    overlay      : true
    modal        : false #do not allow the user to dismiss the dialog
    imageTypes   : [ 'png', 'jpg', 'jpeg', 'gif' ]

TODO
====
 - add modal mode demo
 - show loading during whole Ajax/Images load
 - galleries not working

Author
======
Original: [defunkt](http://defunkt.github.com/)  
Enhancements: [Michael Grosser](http://pragmatig.wordpress.com)
Fancybox port: [Mauricio Wolff](http://bitbonsai.com)
