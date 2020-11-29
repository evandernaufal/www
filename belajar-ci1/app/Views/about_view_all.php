<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <title>About Web</title>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrapper">
        <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Admin</h3>
                </div>
                <ul class="list-unstyled components">
                <p>EVANDER NAUFAL</p>
                    <li>
                        <a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/users'); ?>">Master User</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/news'); ?>">Master Berita</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/page'); ?>">Master Halaman</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('admin/aboutweb'); ?>">About Web</a>
                    </li>
                </ul>
                <ul class="list-unstyled components">
                    <li>
                        <a href="<?php echo base_url('admin/login/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">  
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </nav>          
                <div class="container mt-5">
                    <h2> About Web </h2>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <table class="table table-striped" id="tableUser">
                                <thead>
                                    <tr style="text-align:center">
                                        <th>Photo</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($aboutweb): ?>
                                    <?php foreach ($aboutweb as $reading): ?>
                                    <tr>
                                        <td><img src="<?= base_url('images/'.$reading['foto'])?>" class="img-thumbnail" alt="Image" width="300" height="230"></td>
                                        <td><?= $reading['deskripsi']; ?></td>
                                        <td style="text-align:center">
                                            <a href="<?= base_url('admin/aboutweb/edit/'.$reading['id']); ?>" class="btn btn-success">Edit</a><br><br>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
<script>
    $(document).ready( function () {
    } );
</script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    $('#tableUser').DataTable();
    });
</script>