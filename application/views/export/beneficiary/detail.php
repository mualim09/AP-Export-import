<div class="card">
    <div class="card-header">
        <h6><i class="fas fa-plus-circle mr-2"></i><?=$header?></h6>
    </div>
    <div class="card-body">
        <form id="form-beneficiary-detail">
            <input type="hidden" id="id" name="id" value="<?=$params['detail']->id?>">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group required">
                        <label for="company" class="control-label">Company name</label>
                        <input type="text" name="company" class="form-control upper" id="company" placeholder="Enter company name" autocomplete="off" autofocus required value="<?=$params['detail']->company_name?>">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group required">
                        <label for="office" class="control-label">Office</label>
                        <input type="text" name="office" class="form-control upper" id="office" placeholder="Enter office" autocomplete="off" required value="<?=$params['detail']->office?>">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group required">
                        <label for="country" class="control-label">Country</label>
                        <select name="country" class="form-control select2bs4" id="country" required>
                            <option></option>
                            <?php foreach($params['country'] as $rows) : ?>
                                <option value="<?=$rows->id?>" <?=($params['detail']->country_id==$rows->id?'selected':'-')?>><?=$rows->code.' - '.$rows->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group required">
                        <label for="cp" class="control-label">Contact person name</label>
                        <input type="text" name="cp" class="form-control upper" id="cp" placeholder="Enter contact person name" autocomplete="off" required value="<?=$params['detail']->cp_name?>">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="phone" class="control-label">Phone number</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" value="<?=$params['detail']->phone?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group required">
                        <label for="address" class="control-label">Address</label>
                        <textarea name="address" class="form-control upper" id="address" placeholder="Enter address" autocomplete="off" rows="3" required><?=$params['detail']->address?></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-block btn-default cancel" href="<?=site_url('export/beneficiary')?>">
                        <i class="fas fa-ban mr-2"></i>Cancel
                    </a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-block btn-success save">
                        <i class="fas fa-save mr-2"></i>Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div class="float-right">
            <small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small>
        </div>
    </div>
</div>