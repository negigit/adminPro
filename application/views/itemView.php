<!DOCTYPE HTML>
<HTML>
    <head></head>
    <body>
        <input type="button" name="btnAdd" value="add" size="25" onclick=""/>
        <input type="button" name="btnEdit" value="edit" size="25"/>
        <input type="button" name="btnDelete" value="delete" size="25"/></br>
        <p>Categories</p>
        <ul style="list-style-type: circle">
            <?php foreach($cat as $item):?>
            <li><?php echo $item['categories']; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</HTML>