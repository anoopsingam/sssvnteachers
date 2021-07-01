<?php include'header.php';?>
<title><?php echo $theader;?></title>

    <?php       $class=$data['class'];
                $fetch_std=mysqli_query($conn,"SELECT COUNT(studentid) as total_count from student_enrollment where present_class='$class' ");
                $view=mysqli_fetch_assoc($fetch_std);
                $fetch_std_boys=mysqli_query($conn,"SELECT COUNT(studentid) as total_boys from student_enrollment where present_class='$class' and gender='boy' ");
                $view_boys=mysqli_fetch_assoc($fetch_std_boys);
                $fetch_std_girls=mysqli_query($conn,"SELECT COUNT(studentid) as total_girls from student_enrollment where present_class='$class' and gender='girl' ");
                $view_girls=mysqli_fetch_assoc($fetch_std_girls);


    ?>

<section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                <i class="bi bi-people"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Students</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $view['total_count'];?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                <i class="bi bi-gender-male"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total Boys</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $view_boys['total_boys'];?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="bi bi-gender-female"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Total Girls</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $view_girls['total_girls'];?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6 text-nowrap">
                                <div class="card">
                                <div class="card-body px-3 py-4-5">
                                <div class="d-flex align-items-center">
                                   
                                    <div class="ms-1 name">
                                            <span class="font-bold text-muted">Login :</span><br>
                                        <h5 class="font-bold"><?php echo $data['username']?></h5>
                                        <h6 class="text-muted mb-0">@<?php echo $data['class']."Std ".$data['section']?></h6>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                        
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Notifications / Circulars</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Heading</th>
                                                        <th>Content</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="img/logo (2).png">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">Welcome</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Sri Sathya Sai Vidyaniketan Welcomes <?php echo $data['username']?> Digital School Administration!</p>
                                                        </td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                       
                </section>
    <?php include'footer.php';?>