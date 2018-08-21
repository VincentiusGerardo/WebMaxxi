<script src="<?php echo base_url('js/setTable/Admin/masterMenu.js'); ?>"></script>
<div class="container">
    <div clas="row">
        <h1 class="judulHalaman">Master Menu</h1>
        <div id="msg"><?php echo $this->session->flashdata('message'); ?></div>
        <button class="btn btn-primary btn-sm tombolAdd" data-toggle="modal" data-target="#addMenu"><span class="glyphicon glyphicon-plus"></span> Add</button>
        <table id="msMenu" data-height="450" data-search="true">
            <tbody>
                <?php 
                    $i = 1;
                    foreach($menu as $m){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $m->NamaMenu; ?></td>
                    <td><?php echo $m->URL; ?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?php echo $m->ID_Menu; ?>">
                            <span class="glyphicon glyphicon-edit"></span>
                        </button>
                        &nbsp;
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo $m->ID_Menu; ?>">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </td>
                </tr>
                <?php 
                    $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modals -->
<!-- Add -->
<div class="modal fade" id="addMenu" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Master Menu</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="formInput" action="<?php echo $path . 'doInsertMenu' ?>" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Menu Name:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="namaMenu"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">URL:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="url"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4"></label>
                        <div class="col-sm-7">
                            <p style="color: red;">Kosongkan Jika URL sama dengan Nama Menu</p>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php foreach($menu as $m){ ?>
<!--Update-->
<div class="modal fade" id="update<?php echo $m->ID_Menu; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Master Menu</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="formInput" action="<?php echo $path . 'doUpdateMenu' ?>" method="POST">
                    <input type="hidden" name="kode" value="<?php echo $m->ID_Menu; ?>"/>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Menu Name:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="namaMenu" value="<?php echo $m->NamaMenu; ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">URL:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="url" value="<?php echo $m->URL; ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4"></label>
                        <div class="col-sm-7">
                            <p style="color: red;">Kosongkan Jika URL sama dengan Nama Menu</p>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Save changes</button>
    		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="delete<?php echo $m->ID_Menu; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Master Menu</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="formInput" action="<?php echo $path . 'doDeleteMenu' ?>" method="POST">
                    <input type="hidden" name="kode" value="<?php echo $m->ID_Menu; ?>"/>
                    <h1 style="text-align: center;">Are You Sure?</h1>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="delete">Delete</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>
