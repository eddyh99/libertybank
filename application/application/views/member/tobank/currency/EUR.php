<?php if ($type == 'local') { ?>
<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="IBAN" placeholder="IBAN">
</div>
<?php } ?>

<?php if ($type == 'inter') { ?>
<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="accountNumber" placeholder="Account Number">
</div>
<div class="align-items-center my-3">
    <input class="form-control me-2" type="text" name="swiftCode" placeholder="Swift Code">
</div>
<?php } ?>