<script src="<?php echo base_url('js/setTable/Admin/showsubrole.js'); ?>"></script>
<form action="<?php echo base_url('Administrator/doInsertAuthMenu'); ?>" method="POST">
    <input type="hidden" name="kodeK" value="<?php echo $kode; ?>" />
    <table class="table" id="tableSubRoles" data-height="400">
        <tbody>
        <?php foreach($menu as $m){ ?>
            <tr>
                <td><input type="checkbox" name="menu[]" value="<?php echo $m->ID_SubMenu; ?>"/></td>
                <td><?php echo $m->NamaSubMenu; ?></td>
            </tr>
        <?php } ?>   
        </tbody>
    </table>
    <div style="margin-top: 5px;">
        <input type="submit" value="Submit" class="btn btn-success pull-right"/>
    </div>
</form>