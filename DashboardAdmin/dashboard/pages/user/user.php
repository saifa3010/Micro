<?php

require("get.php");

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
        <?php if(!empty($data)): ?>

            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                           Name
                        </th>
                        <th style="width: 30%">
                           Email
                        </th>
                        <th>
                            Password
                        </th>
                        <th style="width: 8%" class="text-center">
                            Age
                        </th>
                        <th style="width: 8%" class="text-center">
                            Phone
                        </th>
                        <th style="width: 20%">
                        Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($data as $row): ?>
                    <tr>
                        <td>
                           <?php echo $row["id"] ?>
                        </td>
                        <td>
                           <?php echo $row["name"] ?>
                        </td>
                        <td>
                           <?php echo $row["email"] ?>
                        </td>
                        <td>
                           <?php echo $row["password"] ?>
                        </td>
                        <td>
                           <?php echo $row["age"] ?>
                        </td>
                        <td>
                           <?php echo $row["phone"] ?>
                        </td>

                       
                       
                       
                        <td class="project-actions text-right">  
                        <a class="btn btn-info btn-sm" 
                        href="user/edit.php?edit=<?php echo $row['id']; ?>">
                        
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>

                            <a class="btn btn-danger btn-sm" 
                            href="user/delete.php?delete=<?php echo $row['id']; ?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        <?php else: ?>
     <p>No data available.</p>
        <?php endif ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->