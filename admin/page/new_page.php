<?php include_once "../includes/header.php"; ?>
Fill in the fields and click on "Create page" to create the new page.
<hr>
<form id="form" name="form" method="post" action="new_page_parse.php">
<h3>Pagetitle</h3>
<input class="form-control" name="pagetitle" type="text"/><br>
<hr>
<h3>Pagebody</h3>
<textarea name="contentedit"></textarea>
<hr>
<input type="submit" name="button" id="button" value="Create page" />
</form>
<?php include_once "../includes/footer.php"; ?>