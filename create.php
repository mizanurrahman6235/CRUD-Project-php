<?php 
    session_start();
?>

<?php include "includes/header.php"; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="com md-12">
                <a href="index.php"><button class="btn btn-primary">Home</button></a>
            </div>
        </div>
        <?php  include 'message.php'; ?>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Student Add 
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label for="name">Student Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="name">Student Email</label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="name">Student Phone</label>
                            <input class="form-control" type="text" name="phone" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="name">Student Course</label>
                            <input class="form-control" type="text" name="course" id="course">
                        </div>
                        <div class="mb-3">                           
                            <button class="btn btn-primary" type="submit" name="save_student">Save Student</button>                      
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include "includes/footer.php"; ?>