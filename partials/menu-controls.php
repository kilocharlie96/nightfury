<ul class="menu controls">

<?php 

	foreach ( $pages as $file ){
		$page = basename($file, '.php');
        if($page == 'index'){
            $page = 'všetko';
        }
        echo '<li><a href="'.$file.'">'.$page.'</a></li>';

	}

?>

    <!-- <li data-from="left"><a href="index.php">Všetko</a></li>
    <li data-from="right"><a href="web.php">Web</a></li>
    <li data-from="left"><a href="branding.php">Branding</a></li>
    <li data-from="right"><a href="fotografia.php">Fotografia</a></li>
    <li data-from="left"><a href="video.php">Video</a></li> -->
</ul>