
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
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>                                           
                                            <th>Edite</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
           $query = $conn -> query("SELECT * FROM brand");

           foreach($query as $brand) {
         
                                    ?> 
                                        <tr>
                                        <th><?= $brand['name'] ?></th>
                                        <th ><a  class="btn btn-info" href="?do=edite&id=<?=  $brand['id']  ?>">
                           Edit
                        </a></th>
                        <th>
                        <button type="button" class="btn btn-danger modaldeletebrand" data-id="<?= $brand['id'] ?>" data-toggle="modal" data-target="#buttondelete">
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
                        <button type="button" class="btn btn-danger confirmdeletebrand" data-dismiss="modal">Confirm</button>
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
           