<?php include_once "../includes/header.php"; ?>
<section id="content">
<article>
<h2>Leasy CMS</h2>
Fill in the fields and click on "Create page" to create the new page.
</article>
<hr>
<article>
<form id="form" name="form" method="post" action="new_page_parse.php">
<h1>Pagetitle</h1>
<input name="pagetitle" type="text"/><br>
<hr>
<h1>Pagebody</h1>
<textarea name="contentedit"></textarea>
<hr>
<input type="submit" name="button" id="button" value="Create page" />
</form>
</article>
<hr>
<?php include_once "../includes/footer.php"; ?>