<div class="container">
    <div class="card">
        <div class="card-header">
            List Brands
        </div>
        <div class="card-body">
           <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Manager</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($brand as $key => $bra){
                ?>
                <tr>
                <th scope="row"><?php echo $key ?></th>
                <td><?php echo $bra->title ?></td>
                <td><?php echo $bra->slug ?></td>
                <td><?php echo $bra->description ?></td>
                
                <td>
                    <img src=" <?php echo base_url('uploads/brand'.$bra->image)  ?>" width="150" height="150" alt="">
                </td>
                <td>
                    <?php
                        if($bra->status==1){
                            echo 'Active';
                        }
                        else{
                            echo 'Inactive';
                        }
                    ?>
                </td>
                <td>
                    <a href="<?php echo base_url('brand/edit/'.$bra->id) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo base_url('brand/delete/'.$bra->id) ?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>

                <?php
                    }
                ?>
               
            </tbody>
            </table>

           
            </table>
        </div>
    </div>
</div>