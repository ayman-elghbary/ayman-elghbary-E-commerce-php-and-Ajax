
              
<a href="?do=add">

<button 
class="btn btn-success">AddNew</button>
</a>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Count</th>
                                            <th>Cover</th>
                                            <th>Brand</th>
                                            <th>Category</th>
                                            <th>Department</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Rate</th>
                                            <th>View</th>
                                            <th>Saller</th>
                                            <th>Date</th>
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>
                                            <th>Count</th>
                                            <th>Cover</th>
                                            <th>Brand</th>
                                            <th>Category</th>
                                            <th>Department</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Rate</th>
                                            <th>View</th>
                                            <th>Saller</th>
                                            <th>Date</th>
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                $query = $conn -> query("SELECT * FROM center");

                                foreach($query as $product) {
         
                                    ?> 
                                        <tr>
                                        <th><?= $product['name'] ?></th>
                                            <th><?= $product['count'] ?></th>
                                            <th><?php $imgname=$product['cover'];
                                            $arr=explode(",","$imgname");
                                            ?>
                                              <img style='width:100px;height:auto' src='incloude/image/<?= $arr[0] ;?>'>
                                              <?php
                                            ?></th>
                                            <th><?php $brandid=$product['brand'];
                                            $brandname=$conn->query("SELECT * FROM brand WHERE id= $brandid");
                                            foreach ($brandname as $key ) {
                                                echo $key['name'];
                                            }
                                            ?></th>
                                            <th><?php $categoryid= $product['category'];
                                             $categoryname=$conn->query("SELECT * FROM category WHERE id= $categoryid");
                                             foreach ($categoryname as $key ) {
                                                 echo $key['name'];
                                             }
                                            ?></th>
                                            <th><?php 
                                            $departmentid= $product['department'];
                                             $departmentname=$conn->query("SELECT * FROM category WHERE id= $departmentid ");
                                             foreach ($departmentname as $key ) {
                                                 echo $key['name'];
                                             }
                                            ?></th>
                                            <th><?= $product['price'] ?></th>
                                            <th><?= $product['description'] ?></th>
                                            <th><?php $rate= $product ['rate'];
                                                    if($rate==0){
                                                    echo "☆☆☆☆☆";
                                                    }elseif($rate==1){
                                                    echo "★☆☆☆☆";
                                                    }elseif($rate==2){
                                                    echo "★★☆☆☆";
                                                    }elseif($rate==3){
                                                    echo "★★★☆☆";
                                                    }elseif($rate==4){
                                                    echo "★★★★☆";
                                                    }elseif($rate==5){
                                                    echo "★★★★★";
                                                    };
    
                                                    ?></th>
                                            <th><?= $product['views'] ?></th>
                                            <th><?php $sallerid= $product['saller'];
                                             $sallername=$conn->query("SELECT * FROM user WHERE id= $sallerid");
                                             foreach ($sallername as $key ) {
                                                 echo $key['name'];
                                             }
                                            ?></th>
                                               <th><?= $product['date'] ?></th>
                                            <th ><a  class="btn btn-info" href="?do=edite&id=<?=  $product['id']  ?>">
                           Edit
                        </a></th>
                        <th > 
                        
                        <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger modaldeleteproduct " data-id="<?= $product['id'] ?>" data-toggle="modal" data-target="#buttondelete">
                  Delete
                </button>

                </th> 
                                        </tr>
                                        <?php
                                         }
                                        ?>
                                        <!-- Modal -->
                <div class="modal fade" id="buttondelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are You Sure
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger confirmdeleteproduct" data-dismiss="modal">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   

                </div>
                <!-- /.container-fluid -->

            

            <!-- Footer -->
            