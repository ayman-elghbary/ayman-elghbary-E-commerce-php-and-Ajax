<?php
$current ="category";
require_once 'design/header.php';

?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Category</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="card-body">
                    <?php
                    if (!isset($_GET['do'])) {
                        include 'incloude/categoryTable.php';
                    }

                    elseif ($_GET['do']=="add") {
                        include 'incloude/addcategory.php';
                    }
                    elseif ($_GET['do']=="addp") {
                        include 'incloude/addSonCategory.php';
                    }
                    elseif ($_GET['do']=="edite") {
                        include 'incloude/editecategory.php';
                    }


                    ?>




                        </div>
                   

                </div>
                <!-- /.container-fluid -->

            
            <!-- Footer -->
            <?php
                require_once 'design/footer.php';

                ?>