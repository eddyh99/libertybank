<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountNumber" placeholder="accountNumber">
</div>
<div class="align-items-center my-3">
    <select name="bankCode" class="form-control me-2" id="bankCode">
        <option value="">--Bank Code--</option>
        <?php foreach ($codecur as $dt) { ?>
        <option value="<?= $dt->code ?>"><?= $dt->title ?></option>
        <?php } ?>
    </select>
</div>
<div class="align-items-center my-3">
    <select name="branchCode" class="form-control me-2" id="branchCode">
    </select>
</div>