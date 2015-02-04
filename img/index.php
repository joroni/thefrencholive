<!DOCTYPE><html><head><meta charset="utf-8" /><title>How to get all images form folder using PHP</title>
<link rel="image_src" href="http://www.webinfopedia.com/images/fbshareimg/show-all-images-in-a-directory.jpg" />
<meta name="author" content="webinfopedia" /><meta name="copyright" content="webinfopedia.com" />
<meta name="Robots" content="index, follow" /><meta name="language" content="English" />
<link rel="icon" type="image/x-icon" href="http://www.webinfopedia.com/favicon.ico" />

<style type="text/css">body,td,th {font-family: Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 12px; 	color: #333;}body {margin-left:0px;}.maindiv{ width:690px; margin:0 auto;}.textbox{ padding:2px 4px; width:200px;}.submit{ border:solid 1px #008000; background:#008000; color:#FFF; font-weight:bold;}</style></head><body><div style="width:730px; margin:0 auto;">
</div>  
<div class="maindiv">
<?php
	//Path to folder which contains images
    $dirname = "uploads/";
    //Use glob function to get the files
	//Note that we have used " * " inside this function. If you want to get only JPEG or PNG use
	//below line and commnent $images variable currently in use
    $images = glob($dirname."*");
    //Display image using foreach loop
    foreach($images as $image) {
        //print the image to browser with anchor tag (Use if you want really :) )
        echo '<div style="width:200px; float:left;"><a href="'.$image.'" target="_blank"><img src="'.$image.'" style="max-width:100%; min-width:100%;"/></a></div>';
    }

    ?><div>
</div></div><div style="width:730px; margin:0 auto; padding:8px 0px;"></div><div style="padding:4px; text-align:right;"></div></body></html>