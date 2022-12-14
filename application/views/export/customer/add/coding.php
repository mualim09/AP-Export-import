<div id="detail">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="coding_type" class="control-label">Type</label>
                <select name="coding_type" class="form-control select2bs4 cod_print coding" id="coding_type" disabled>
                    <option></option>
                    <?php foreach($params['coding'] as $rows) : ?>
                        <option value="<?=$rows->id?>"><?=$rows->name?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="coding_import" class="control-label">Imported by</label>
                <input type="text" name="coding_import" class="form-control cod_print coding" id="coding_import" placeholder="Enter imported by" autocomplete="off" disabled>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="coding_hotline" class="control-label">Consumer hotline</label>
                <input type="text" name="coding_hotline" class="form-control cod_print coding" id="coding_hotline" placeholder="Enter consumer hotline" autocomplete="off" disabled>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="coding_bb" class="control-label">Best before</label>
                <input type="text" name="coding_bb" class="form-control cod_print coding" id="coding_bb" placeholder="Enter best before" autocomplete="off" disabled>
            </div>
        </div>
    </div>

    <div class="row border-bottom">
        <div class="col-md-12">
            <div class="form-group">
                <label for="coding_notes" class="control-label">Notes</label>
                <textarea name="coding_notes" class="form-control upper cod_print" id="coding_notes" placeholder="Enter notes" autocomplete="off" rows="2" disabled></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <input type="button mt-5" class="btn btn-success btn-block" id="btn-coding" value="Add detail(s)">
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <ul class="list-group">
            <li class="list-group-item">
                <table class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Type</th>
                            <th>Imported by</th>
                            <th>Consumer hotline</th>
                            <th>Best before</th>
                            <th><i class="fas fa-ellipsis-h"></i></th>
                        </tr>
                    </thead>
                    <tbody id="data-coding"></tbody>
                </table>
            </li>
        </ul>
    </div>
</div>