<?php include 'include/header-panel.php'; ?>
<h1>My ads</h1>
<div class="tbl">
    <table class="my_ads pure-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Until the end</th>
                <th>Edit</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($showAll as $adw): ?>
            <tr>
                <td class='td_name'><a href='/page?id=<?php echo $adw['id']; ?>'><?php echo $adw['name']; ?></a></td>
                <td>
                    <?php
                        $datetime1 = new DateTime($adw['data_end']);
                        $datetime2 = new DateTime($adw['data']);
                        $interval = $datetime1->diff($datetime2);
                        echo $datetime1 == $datetime2 ? 'Oferta zakończona' : $interval->format('<span class="info_box-red">%a dni</span>');
                    ?>
                </td>
                <td><a href='/edit?id=<?php echo $adw['id']; ?>'><i class="fa fa-edit"></i> edit</a></td>
                <td><a href='/page?id=<?php echo $adw['id']; ?>'><i class="fa fa-search"></i> show</a></td>
                <td><a href='/your?id=<?php echo $adw['id']; ?>'><i class="fa fa-trash-alt"></i> delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'include/footer.php'; ?>