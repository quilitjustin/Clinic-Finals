<?php
    require_once dirname(__DIR__).'/header.php';
    //no login no entry
    if(!isset($_SESSION['auth'])){
        header('Location: ../index.php');
        die();
    }

    require_once dirname(__DIR__).'/utils/consult.view.php';
    if(isset($_GET['alert'])){
        echo $_GET['alert'];
    }
?>
<div class="d-flex justify-content-center" style="height:100vh; width:100vw;">
    <div class="row align-self-center">
        <div class="col-lg-12 mb-5">
            <div class="p-3 shadow d-inline" style="width: 25rem;">
                <h3 class="text-primary d-inline" style="margin-right: 1em;">Request Consultation</h3>
                <a href="../utils/consult.control.php" class="btn btn-outline-success">Request</a>
                <a href="../utils/logout.php" class="btn btn-outline-danger" style="text-decoration:none;">Logout</a>
            </div>
        </div>
        <div class="col-lg-12 text-center mb-2">
            <h3 class="text-primary font-weight-bold">Consultation Record</h3>
        </div>
        <div class="col-lg-12 text-center" style="height:50vh; overflow-y:scroll">
            <table class="shadow table table-striped table-bordered border-secondary text-center">
                <thead class="table-dark" style="position: sticky; top: 0; z-index: 1;">
                    <tr>
                        <th scope="col">Nurse</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Time of appointment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(!empty($conReqRecords)){
                        foreach($conReqRecords as $req){ ?>
                        <tr>
                            <td><?= $req['nurse'] ?></td>
                            <td><?= $req['name'] ?></td>
                            <td><?= $req['age'] ?></td>
                            <td><?= $req['gender'] ?></td>
                            <td><?= $req['address'] ?></td>
                            <td><?= $req['date'] ?></td>
                        </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    require_once dirname(__DIR__).'/footer.php';
?>