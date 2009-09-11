<?php
    $t = mktime();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>facybox 1.2</title>
  <link href="facybox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="demo/faceplant.css" media="screen" rel="stylesheet" type="text/css" />
  
  <!-- always get the last jquery version -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
  <script src="facybox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facybox]').facybox({
        noAutoload: true
      }) 
    })
  </script>
</head>

<body>
  <div id="main">
    <div id="shadow">
      <div id="content">
        <div id="logo">
          <a href="#info" rel="facybox">View div info in the facybox</a> | 
          <a href="http://fc05.deviantart.com/fs28/f/2009/254/c/9/Heavenly_Eyes_by_Wontherlf.jpg?<?= mktime() ?>" rel="facybox">image</a> | 
          <a  rel="facybox" href="del.php">sleep</a>
        </div>

        <div class="example">
          <h2>What is it?</h2>
          <p> 
            facybox is a jQuery-based, Facebook-style lightbox which can display images, divs, or entire remote pages.  
          </p> 

          <p> 
            It's simple to use and easy on the eyes.  Download the tarball, view the examples, then start enjoying the curves.
          </p>

        </div>

        <div class="example">
          <h2>Why another lightbox?</h2>
          <p>
            Because we wanted, nay, <em>needed</em> a Facebook-style lightbox on <a href="http://famspam.com">FamSpam</a>.
          </p>
        </div>

        <div class="example">
          <h2>Download</h2>

          <p>Requires <a href="http://jquery.com">jQuery >= 1.2.1</a>.</p>
          <p>
            You'll need a loading image, close label, four corners, and solid border images in addition to the javascript and css files.  All are included
            in the tarball.
          </p>
          <p>
            <strong><a href="releases/facybox-1.2.tar.gz">Download facybox v1.2</a></strong>
          </p>

          <p> 
            Want to live on the edge?  The code is kept in <strong><a href="http://github.com">GitHub</a></strong> at <a href="http://github.com/defunkt/facybox">http://github.com/defunkt/facybox</a>
          </p>
        </div>


        <div class="example">
          <h2>Help!</h2>

          <p> Need help?  Join our <a href="http://groups.google.com/group/facybox/">Google Groups mailing list</a>.</p>
        </div>

        <div class="example">
          <h2>Images</h2>

          <p> <a href="demo/stairs.jpg" rel="facybox">View 'demo/stairs.jpg' in the facybox</a> </p>

          <div class="code">
            <h3>The Code</h3>
            <code>&lt;a href="demo/stairs.jpg" rel="facybox"&gt;text&lt;/a&gt;</code>
          </div>
        </div>

        <div class="example">
          <h2>Galleries</h2>

          <p>
            <a id="open_gallery">open gallery</a>
            you can navigate by left-arrow/right-arrow too
          </p>
          <script>
            jQuery('#open_gallery').click(function(){
              jQuery.facybox({images:['demo/stairs.jpg','demo/logo.png']})
            });
          </script>
          <div class="code">
            <h3>The Code</h3>
            <code>
            <pre>
jQuery('#open_gallery').click(function(){
  jQuery.facybox({images:['demo/stairs.jpg','demo/logo.png']})
});            </pre>
            </code>
          </div>
        </div>

        <div class="example">
          <h2>Divs</h2>

          <p> <a href="#info" rel="facybox">View the 'info' div in the facybox</a> </p>

          <div class="code">
            <h3>The Code</h3>
            <code>&lt;a href="#info" rel="facybox"&gt;text&lt;/a&gt;</code>
          </div>
        </div>

        <div class="example">
          <h2>Ajaxes</h2>

          <p> <a href="demo/remote.html" rel="facybox">View 'remote.html' in the facybox</a> </p>

          <div class="code">
            <h3>The Code</h3>
            <code>&lt;a href="demo/remote.html" rel="facybox"&gt;text&lt;/a&gt;</code>
          </div>
        </div>

        <div class="example">
          <h2>Load Dependencies</h2>

          <p>Make sure jQuery is loaded before facybox.</p>

          <div class="code">
            <code>
              &lt;script src="jquery.js" type="text/javascript"&gt;&lt;/script&gt;<br/>
              &lt;link href="facybox.css" media="screen" rel="stylesheet" type="text/css"/&gt;<br/>
              &lt;script src="facybox.js" type="text/javascript"&gt;&lt;/script&gt;
            </code>
          </div>
        </div>

        <div class="example">
          <h2>Attach It onLoad</h2>

          <p>While calling <code>facybox()</code> on any anchor tag will do the trick, it's easier to give your facyboxy links a <code>rel="facybox"</code> and hit them all onLoad.</p>

          <div class="code">
            <code>
              jQuery(document).ready(function($) {<br/>
                &nbsp;&nbsp;$('a[rel*=facybox]').facybox() <br/>
              })
            </code>
          </div>
        </div>

        <div class="example">
          <h2>Extra Classes</h2>
          <p> 
            You can give the facybox container an extra class (to fine-tune the display of reusable remote pages)
            with the <code>facybox[.class]</code> rel syntax.
          </p>
          <p>
            Maybe your <i>Terms and Conditions</i> can be loaded standalone or via facybox.  When loaded in facybox, 
            you might want to tweak some styles -- like making the <code>h1</code> positioned absolutely?  
            We do this on FamSpam.
          </p>
          <p>
            <a href="demo/remote.html" rel="facybox.bolder">
              View an an example which makes the <code>remote.html</code> page bigger and bolder using css.
            </a>
          </p>

          <div class="code">
            <h3>The Code</h3>
            <code>&lt;a href="demo/remote.html" rel="facybox.bolder"&gt;text&lt;/a&gt;</code>
          </div>
        </div>

        <div class="example">
          <h2>Controlling facybox Programmatically</h2>
          <p> 
            It's possible to attain a higher level control over facybox by calling methods directly.
            The following will open the facybox and insert the passed string into it:
          </p>

          <div class="code">
            <h3>Arbitrary Text</h3>
            <code>
				jQuery.facybox('something cool');<br/>
            	jQuery.facybox('something cool', 'my-groovy-style');
			</code>
			<h3>Remote files</h3>
            <code>
				jQuery.facybox({ ajax: 'demo/remote.html' });<br/>
				jQuery.facybox({ ajax: 'demo/remote.html' }, 'my-groovy-style');
			</code>
			<h3>Image</h3>
            <code>
			    jQuery.facybox({ image: 'demo/stairs.jpg' });<br/>
			    jQuery.facybox({ image: 'demo/stairs.jpg' }, 'my-groovy-style');
			</code>
			<h3>A Page Element</h3>
            <code>
			    jQuery.facybox({ div: '#box' });<br/>
			    jQuery.facybox({ div: '#box' }, 'my-groovy-style');
			</code>
          </div>

          <p>
            If you plan to fill the facybox with the result of an Ajax call, you'll want the loading graphic
            displayed whilst your asynchronus task runs.  This is the automatic behavior if the <code>facybox()</code>
            method is passed a function.
          </p>

          <div class="code">
            <h3>Loading Image Displayed</h3>
            <code>
              jQuery.facybox(function() { <br/>
                &nbsp;&nbsp;jQuery.get('code.js', function(data) {<br/>
                  &nbsp;&nbsp;&nbsp;&nbsp;jQuery.facybox('&lt;textarea&gt;' + data + '&lt;/textarea&gt;')<br/>
                &nbsp;&nbsp;})<br/>
              })
            </code>
          </div>
        </div>

        <div class="example">
          <h2>Screenshots</h2>
          <p>
            See it in action on <a href="http://famspam.com">FamSpam</a>!
          </p>
          <ul id="screenshots">
            <li><a href="screenshots/photo.png" rel="facybox"><img src="screenshots/photo_small.png"></a></li>
            <li><a href="screenshots/error.png" rel="facybox"><img src="screenshots/error_small.png"></a></li>
            <li><a href="screenshots/success.png" rel="facybox"><img src="screenshots/success_small.png"></a></li>
            <li><a href="screenshots/preview.png" rel="facybox"><img src="screenshots/preview_small.png"></a></li>
          </ul>
          <p>
            You may also want to check out <a href="http://stafftool.com/">Stafftool</a>, which uses facybox.
          </p>
        </div>

        <div class="example">
          <h2>Thanks <span class="amp">&amp;</span> Contact</h2>
          <p> 
            Thanks to Facebook for the idea and style.  Thanks to Mindy Tchieu for her help in getting this working.
          </p>
          <p>
            Comments, concerns, complaints, criticisms, confessions?  Email me: <a href="mailto:chris@ozmm.org">chris@ozmm.org</a>
        </div>
      </div>
    </div>

    <div id="footer">
      <p class="right">
        <a href="mailto:chris@ozmm.org">Contact</a>
      </p>

      <ul>
        <li> Code &copy;2007/2008 Chris Wanstrath </li>
        <li> Style &copy;2007 Facebook </li>
        <li>MIT License</li>
      </ul>
    </div>
  </div>

  <div id="info" style="display:none;">
    <p> Hey, I'm the 'info' div! </p>
    <p> I look like this: </p>
    <code> 
      &lt;div id="info" style="display:none;"&gt; <br/>
        &nbsp;&nbsp;text<br/>
      &lt;/div&gt;
    </code>
  </div>
</body>
</html>
