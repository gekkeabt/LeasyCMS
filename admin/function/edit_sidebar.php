<?php include_once "../includes/header.php"; ?><section id="content"><article><h2>Leasy CMS</h2>On this page you can edit the sidebar of your website.</article><hr><article><form id="form" name="form" method="post" action="edit_sidebar_parse.php"><h1>Content of Sidebar</h1><textarea name="contentedit"><?php echo $content ?></textarea><hr><input name="pid" type="hidden" value="<?php echo $pid; ?>" /><input type="submit" name="button" id="button" value="Update sidebar" /></form></article><hr><?php include_once "../includes/footer.php"; ?>