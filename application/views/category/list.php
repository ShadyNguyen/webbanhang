<div class="container">
    <div class="card">
        <div class="card-header">
            List Category
        </div>
        <?php
            if($this->session->flashdata('success')){
                ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success') ?></div>
                <?php
                }
                elseif($this->session->flashdata('error'))
                {?>
                <div class="alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
                <?php 
                }
           ?>
        <div class="card-body">
        <a href="<?php echo base_url('category/create') ?>" class="btn btn-primary">Add</a>
           <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Manager</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($category as $key => $cat){
                ?>
                <tr>
                <th scope="row"><?php echo $key ?></th>
                <td><?php echo $cat->title ?></td>
                <td><?php echo $cat->description ?></td>
                
                <td>
                    <img src=" <?php echo base_url('uploads/category/'.$cat->image)  ?>" width="150" height="150" alt="">
                </td>
                <td>
                    <?php
                        if($cat->status==1){
                            echo 'Active';
                        }
                        else{
                            echo 'Inactive';
                        }
                    ?>
                </td>
                <td>
                    <a href="<?php echo base_url('category/edit/'.$cat->id) ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo base_url('category/delete/'.$cat->id) ?>" class="btn btn-danger">Delete</a>
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