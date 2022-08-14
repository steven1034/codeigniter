<?= $this->extend("layouts/default")?>
<?= $this->section("title")?>Home<?= $this->endSection()?>
<?= $this->section("content")?>

    <div class="container">
        <div class="row">
            <div class="col-md-12-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Data</h4>
                    </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Designation</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($employee as $row) : ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['first_name'] ?></td>
                                        <td><?= $row['last_name'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['designation'] ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>

        </div>
    </div>

<?= $this->endSection()?>
