<div class="row">
    <div class="col-md-4">
        <div class="form-group required">
            <label for="cp_name" class="control-label">Name</label>
            <input type="text" name="cp_name" class="form-control upper" id="cp_name" placeholder="Enter name" autocomplete="off" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group required">
            <label for="cp_phone" class="control-label">Phone number</label>
            <input type="text" name="cp_phone" class="form-control" id="cp_phone" placeholder="Enter phone number" autocomplete="off" required oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*?)\..*/g, '$1');">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group required">
            <label for="cp_email" class="control-label">Email</label>
            <input type="email" name="cp_email" class="form-control" id="cp_email" placeholder="Enter email" autocomplete="off" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group required">
            <label for="cp_top" class="control-label">Terms of Payment</label>
            <select name="cp_top" class="form-control select2bs4" id="cp_top" required>
                <option></option>
                <?php foreach($params['top'] as $rows) : ?>
                    <option value="<?=$rows->id?>"><?=$rows->name?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group required">
            <label for="cp_dp" class="control-label">DP (in %)</label>
            <input type="text" name="cp_dp" class="form-control" id="cp_dp" placeholder="Enter DP" autocomplete="off" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group required">
            <label for="cp_balancing" class="control-label">Balancing (in %)</label>
            <input type="text" name="cp_balancing" class="form-control" id="cp_balancing" value="100" readonly style="background-color: white;">
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group required">
            <label for="cp_currency" class="control-label">Currency for Payment</label>
            <select name="cp_currency" class="form-control select2bs4" id="cp_currency" required>
                <option></option>
                <?php foreach($params['currency'] as $rows) : ?>
                    <option value="<?=$rows->id?>"><?=$rows->code.' - '.$rows->name?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group required">
            <label for="cp_incoterm" class="control-label">Incoterm</label>
            <select name="cp_incoterm" class="form-control select2bs4" id="cp_incoterm" required>
                <option></option>
                <?php foreach($params['incoterm'] as $rows) : ?>
                    <option value="<?=$rows->id?>"><?=$rows->code.' - '.$rows->name?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>