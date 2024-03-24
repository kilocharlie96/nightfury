<ul class="menu controls">

<?php 

	foreach ( $pages as $file ){
		$page = basename($file, '.php');

        if($page_name == $page){
            if($page == 'index'){
                $page = 'všetko';
            }
            echo '<li class="selected"><a href="' .$file. '">' .$page. '</a></li>';
        } else {
            if($page == 'index'){
                $page = 'všetko';
            }
            echo '<li><a href="' .$file. '">' .$page. '</a></li>';
        }
	}
//todo skúsiť vynechať jeden if v rámci DRY metodiky
?>

</ul>