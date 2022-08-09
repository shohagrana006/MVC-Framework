<?php view('partials/header.php') ?>

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
            <h2 class="text-center bg-success my-3">User list</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0;foreach ($datas as $dat) { ?>
                        <tr>
                            <td><?php echo ++$i  ?></td>
                            <td><?php echo $dat['name'] ?></td>
                            <td><?php echo $dat['email'] ?></td>
                            <td><?php echo $dat['created_at'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   

<?php view('partials/footer.php') ?>