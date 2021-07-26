<?php function listUsers($list){?>
<link rel="stylesheet" href="../styles/showUser.css">
<h1 id="tittle">Lista de usuários</h1>
<div id="wrapper">
    <table id="usersTable">
        <thead>
            <tr>
                <th class="tableHeaders">
                    ID
                </th>
                <th class="tableHeaders">
                    Email
                </th>
                <th class="tableHeaders">
                   Password
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
                <td class="tableRow"><button class="buttonEdit"><a href="../controller/update_single.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <?php    } ?>