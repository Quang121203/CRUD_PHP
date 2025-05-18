<?php
include './app/Views/layouts/header.php';
include './app/Views/layouts/navbar.php';
?>

<div class="container my-2 col-12 d-flex flex-column align-items-center" style="min-height: 72vh">
    <h4 class="my-4">List User</h4>

    <div class="col-12  d-flex justify-content-end mb-4">
        <button type="button" class="btn btn-primary" onclick="openModal(0)">
            <i class="fa fa-user-plus"></i>
        </button>
    </div>

    <table class="table table-info table-striped">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="25%">Email</th>
                <th width="15%">Name</th>
                <th width="15%">Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <th><?php echo $user['id']; ?></th>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary col-2"
                            onclick="openModal(<?php echo $user['id']; ?>,'info')">
                            <i class="fa fa-info"></i>
                        </button>
                        <button type="button" class="btn btn-info col-2" onclick="openModal(<?php echo $user['id']; ?>)">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger col-2"
                            onclick="userConfirm(<?php echo $user['id']; ?>)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<?php
include './app/Views/users/modalUser.php';
include './app/Views/users/modalDelete.php';
include './app/Views/layouts/footer.php';
?>