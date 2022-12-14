<div class="row">
    <div class="col-md-6">
        <div class="form-group required">
            <label for="code" class="control-label">COA no.</label>
            <input type="text" name="code" class="form-control" id="code" value="<?=$params['autonumber']?>" readonly>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group required">
            <label for="invoice" class="control-label">Invoice no.</label>
            <select name="invoice" class="form-control select2bs4" id="invoice" required>
                <option></option>
                <?php foreach($params['invoice'] as $rows) : ?>
                    <option value="<?=$rows->invoice_id?>"><?=$rows->invoice_no?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group required">
            <label for="packing" class="control-label">Product name</label>
            <select name="packing" class="form-control select2bs4 grid" id="packing">
                <option></option>
            </select>
            <input type="hidden" class="grid" id="item" name="item">
            <input type="hidden" class="grid" id="qcheck_id" name="qcheck_id">
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group required">
            <label for="batch" class="control-label">Batch number</label>
            <input type="text" name="batch" class="form-control" id="batch" placeholder="Enter batch number" disabled>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group required">
            <label for="product_date" class="control-label">Product date</label>
            <input type="text" name="product_date" class="form-control" id="product_date" placeholder="Enter product date" disabled>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group required">
            <label for="expired_date" class="control-label">Expired date</label>
            <input type="text" name="expired_date" class="form-control" id="expired_date" placeholder="Enter expired date" readonly>
        </div>
    </div>
</div>