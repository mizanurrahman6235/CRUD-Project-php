<?php 
    session_start();
    require 'dbcon.php';
?>

<?php include "includes/header.php"; ?>
    <div class="container mt-5">
        <div class="row mt-3">
            <div class="com md-12">
            <?php  include 'message.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="com md-12">
                <a href="index.php"><button class="btn btn-primary">Home</button></a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Student Edit 
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                        if(isset($_GET['id'])){
                            $student_id = mysqli_real_escape_string( $con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";  
                            $query_run = mysqli_query($con, $query);

                            if( mysqli_num_rows( $query_run ) > 0 ){
                                $student = mysqli_fetch_array( $query_run );
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" id="student_id" value="<?= $student['id']; ?>">
                                    <div class="mb-3">
                                        <label for="name">Student Name</label>
                                        <input class="form-control" type="text" name="name" value="<?= $student['name']; ?>" id="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name">Student Email</label>
                                        <input class="form-control" type="email" name="email" value="<?= $student['email']; ?>" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name">Student Phone</label>
                                        <input class="form-control" type="text" name="phone" value="<?= $student['phone']; ?>" id="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name">Student Course</label>
                                        <input class="form-control" type="text" name="course" value="<?= $student['course']; ?>" id="course">
                                    </div>
                                    <div class="mb-3">                           
                                        <button class="btn btn-primary" type="submit" name="update_student">Update Student</button>                      
                                    </div>
                                </form>
                                <?php    
                            }else{
                                echo "<h4>No such ID found</h4>";
                            }
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
<?php include "includes/footer.php"; ?>