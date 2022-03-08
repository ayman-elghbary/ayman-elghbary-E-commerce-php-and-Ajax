
               <a href="?do=add">

<button 
class="btn btn-success">Add Category</button>
</a>
<a href="?do=addp">

<button style="float: right;" 
class="btn btn-info">Add son category</button>
</a>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>cover</th>
                                            <th>Parent</th> 
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>   
                                        <th>cover</th>
                                        <th>Parent</th>                                            
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
           $query = $conn -> query("SELECT * FROM category ");

           foreach($query as $category) {
         
                                    ?> 
                                        <tr>
                                        <th><?= $category['name'] ?></th>
                                        <th><?php $categorycover=$category['cover'];
                                        echo "<img style='width:100px;height:auto' src='incloude/imagecategory/$categorycover'>";
                                        ?></th>
                                         <th><?= $category['parent'] ?></th>
                                        <th ><a  class="btn btn-info" href="?do=edite&id=<?=  $category['id']  ?>">
                           Edit
                        </a></th>
                        <th>
                        <button type="button" class="btn btn-danger modaldeletecategory" data-id="<?= $category['id'] ?>" data-toggle="modal" data-target="#buttondelete">
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
                        <button type="button" class="btn btn-danger confirmdeletecategory" data-dismiss="modal">Confirm</button>
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
           