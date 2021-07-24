<link rel="stylesheet" href="../styles/showUser.css">
<?php function listUsers($list){?>
<div id="wrapper">
    <table id="usersTable">
        <thead>
            <tr>
                <th class="tableHeaders">
                    <b>ID</b>
                </th>
                <th class="tableHeaders">
                    <b>Email</b>
                </th>
                <th class="tableHeaders">
                   <b>Password</b>
                </th>
                <th class="tableHeaders">
                    Edit
                </th>
            </tr>
        </thead>   
        <tbody>
        <?php foreach ($list as $row): ?>
            <tr>
                <td class="tableRow"><?php echo $row['id']; ?></td>
                <td class="tableRow" ><?php echo $row['email']; ?> </td>
                <td class="tableRow"><?php echo $row['password'];?></td>
                <td class="rableRow"><a href="../controller/update_single.php?id=<?php echo $row['id']; ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <?php    } ?>