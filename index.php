<?php
    require_once 'header.php';

    //$_SESSION['auth'] is a boolean
    //if true; the user is already logged in
    if(isset($_SESSION['auth'])){
        if($_SESSION['auth']){
            header('Location: files/dashboard.php');
            die();
        }
    }
?>

<div class="d-flex justify-content-center" style="height:100vh; width:100vw; background-color: #E3F0EF">
    <div class="row align-self-center">
        <div class="col-lg-12">
            <?php
                if(isset($_GET['msg'])){   
                    echo $_GET['msg'];
                }
            ?>
            <h3 class="text-success text-center">Sign up to proceed</h3>
            <form class="shadow p-5 bg-white rounded" method="POST" action="utils/register.control.php" style="width:25rem;">
                <div class="mb-3">
                    <label for="name" class="form-label text-primary">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label text-primary">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Your Address" required>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="age" class="form-label text-primary">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Your Age" required>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="gender" class="form-label text-primary">Gender</label>
                        <select class="form-select p-1" name="gender" id="gender" style="display:block;" required>
                            <option selected>Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php';
?>