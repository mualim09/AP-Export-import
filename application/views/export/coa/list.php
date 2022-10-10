<div class="card">
    <div class="card-header">
        <h6><i class="fas fa-list-alt mr-2"></i><?=$header?></h6>
    </div>
    <div class="card-body">
        <table id="tcoalist" class="table table-sm table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>COA no.</th>
                    <th>Invoice no.</th>
                    <th>Product name</th>
                    <th>Images</th>
                    <th>Created at</th>
                    <th><i class="fas fa-ellipsis-h"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($params['list'] as $rows) : ?>
                    <tr class="align-middle">
                        <td class="text-center"><?=$no?>.</td>
                        <td class="text-center"><?=$rows->code?></td>
                        <td class="text-center"><?=$rows->invoice_no?></td>
                        <td><?=$rows->item_name?></td>
                        <td class="text-center">
                            <?php if($rows->attachment) : ?>
                            <a href="<?=base_url($rows->attachment)?>" target="_blank">
                                    <i class="fas fa-file-download"></i>
                            </a>
                            <?php endif; ?>
                        </td>
                        <td class="text-center"><?=$rows->created_at?></td>
                        <td class="text-center">
                            <a href="<?=site_url('export/coa/print/'.$rows->id)?>" class="btn btn-sm btn-warning" target="_blank">
                                <i class="fas fa-print"></i>
                            </a>
                        </td>
                    </tr>
                <?php $no++; endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="float-right">
            <small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small>
        </div>
    </div>
</div>