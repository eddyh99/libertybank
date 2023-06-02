<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <?php $this->load->view("tamplate/banner-nofiat-balance"); ?>
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <span class="me-auto f-hahmlet text-blue-freedy fs-2 title-top-navbar">Confirmation</span>
                        </div>
                    </div>
                    <div class="col-12 infobank-list-app f-jakarta my-4">
                        <div class="col-12 mx-auto py-4">
                            <div class="text-start">
                                <span class="me-auto f-hahmlet text-blue-freedy fs-5 title-top-navbar">Please Note : </span>
                                <br><br>
                                <span class="me-auto f-poppins fs-6 title-top-navbar">This data can be used just once and they are valid up to 24 hours</span>
                            </div>
                        </div>
                    </div>
                    <div class="noted-tutor px-3">
                        <h6 class="mb-3 fw-semibold">                                     
                            *In case you’ve written wrong Causal it is possible to manually recover the funds by clicking the button below:
                        </h6>
                        <div class="d-flex justify-content-start">
                            <a href="">
                                <button class="btn btn-content-silver">Top up support</button>
                            </a>
                        </div>
                        <p class="my-3">                       
                            (the manual recovery operation will cost 25 $) 
                        </p>
                    </div>
                    <div class="col-12 infobank-list-app f-jakarta my-4">
                        <?php if (($_SESSION["currency"] == "EUR") || ($_SESSION["currency"] == "USD")) { ?>
                            <div class="row pt-4">
                                <!-- Recipient name -->
                                <label>Account Holder</label>
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <input class="form-control me-2" type="text" name="" id="inter1" value="<?= @$data->bank_detail->accountHolderName ?>" readonly>
                                    <a class="btn btn-copy" id="btninter1">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                            <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <!-- IBAN / Account -->
                                <?php if (($_SESSION["currency"] == "USD")) { ?>
                                    <label class="form-label">Account Number</label>
                                <?php } else { ?>
                                    <?php if (($_SESSION["currency"] == "EUR")) { ?>
                                        <label class="form-label"> IBAN <small>(country belgium)</small></label>
                                    <?php } else { ?>
                                        <label class="form-label"><?= @$data->content->payinBankAccount->details[1]->label?></label>
                                    <?php } ?>
                                <?php } ?>
                                
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <?php if (($_SESSION["currency"] == "USD")) { ?>
                                        <input class="form-control me-2" type="text" name="" id="inter2" value="<?= @$data->bank_detail->accountNumber ?>" readonly>
                                        <?php } else { ?>
                                            <?php if (($_SESSION["currency"] == "EUR")) { ?>
                                                <input class="form-control me-2" type="text" name="" id="inter2" value="<?= @$data->bank_detail->IBAN ?>" readonly>
                                        <?php } else { ?>
                                            <!-- Masih Belum -->
                                            <label class="form-label"><?= @$data->payinBankAccount->details[1]->label?></label>
                                        <?php } ?>
                                    <?php } ?>
                                    <a class="btn btn-copy" id="btninter2">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                            <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <?php if (($_SESSION["currency"] == "USD")) { ?>
                                <div class="row">
                                    <label class="form-label">ACH Routing Number</label>
                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <input class="form-control me-2" type="text" name="" id="inter6" value="<?= @$data->bank_detail->abartn ?>" readonly>
                                        <a class="btn btn-copy" id="btninter6">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                                <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (($_SESSION["currency"] == "USD")) { ?>
                                <div class="row">
                                    <label class="form-label">Account Type</label>
                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <input class="form-control me-2" type="text" name="" id="inter6" value="<?= @$data->bank_detail->accountType ?>" readonly>
                                        <a class="btn btn-copy" id="btninter6">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                                <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="row">
                                <label>Causal</label>
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <input class="form-control me-2" type="text" name="" id="inter4" value="SC<?= $_SESSION["ucode"] ?>" readonly>
                                    <a class="btn btn-copy" id="btninter4">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                            <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        
                            <div class="row">
                                <label>Company Address</label>
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <input class="form-control me-2" type="text" name="" id="inter5" 
                                        value="<?= $data->bank_detail->address ?>" readonly>
                                    <a class="btn btn-copy" id="btninter5">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                            <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php } else { ?>

                            <div class="row pt-4">
                                <!-- Recipient name -->
                                <label>Account Holder</label>
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <input class="form-control me-2" type="text" name="" id="inter1" value="<?= @$data->bank_detail->accountHolderName ?>" readonly>
                                    <a class="btn btn-copy" id="btninter1">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                            <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <!-- IBAN / Account -->
                                <?php if (
                                        ($_SESSION["currency"] == "NZD") ||
                                        ($_SESSION["currency"] == "CAD") ||
                                        ($_SESSION["currency"] == "HUF") ||
                                        ($_SESSION["currency"] == "RON") ||
                                        ($_SESSION["currency"] == "SGD") ||
                                        ($_SESSION["currency"] == "GBP") ||
                                        ($_SESSION["currency"] == "AUD")
                                    ) { ?> <label class="form-label">Account number</label>

                                <?php } else { ?>
                                    <label class="form-label">IBAN</label>
                                <?php } ?>
                                
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <input class="form-control me-2" type="text" name="" id="inter2" value="<?= @$data->bank_detail->accountNumber?>" readonly>
                                    <a class="btn btn-copy" id="btninter2">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                            <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            
                            <!-- CODE -->
                            <?php if (
                                ($_SESSION["currency"] != "NZD") &&
                                ($_SESSION["currency"] != "HUF") &&
                                ($_SESSION["currency"] != "TRY")
                            ) { ?>
                                <div class="row">
                                    <?php
                                    if (($_SESSION["currency"] == "GBP")) {
                                    ?>
                                        <label class="form-label">Sort code</label>

                                    <?php } elseif (($_SESSION["currency"] == "AUD")) { ?>
                                        <label class="form-label">BSB code</label>

                                    <?php } elseif (($_SESSION["currency"] == "CAD")) { ?>
                                        <label class="form-label">Institution number</label>

                                    <?php } elseif (
                                        ($_SESSION["currency"] == "RON") ||
                                        ($_SESSION["currency"] == "SGD")
                                    ) { ?>
                                        <label class="form-label">Bank code</label>
                                    <?php } else { ?>
                                        <label class="form-label">Swift</label>
                                    <?php } ?>
                                    
                                    
                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <?php if (($_SESSION["currency"] == "AUD")) { ?>
                                            <input class="form-control me-2" type="text" name="" id="inter3" value="<?= @$data->bank_detail->bsbCode ?>" readonly>
                                        <?php } elseif(($_SESSION["currency"] == "SGD")) {?>
                                            <input class="form-control me-2" type="text" name="" id="inter3" value="<?= @$data->bank_detail->bankCode ?>" readonly>
                                        <?php } elseif(($_SESSION["currency"] == "GBP")) {?>
                                            <input class="form-control me-2" type="text" name="" id="inter3" value="<?= @$data->bank_detail->sortCode ?>" readonly>
                                        <?php } elseif(($_SESSION["currency"] == "CAD")) {?>
                                            <input class="form-control me-2" type="text" name="" id="inter3" value="<?= @$data->bank_detail->instituionNumber ?>" readonly>
                                        <?php } ?>
                                        <a class="btn btn-copy" id="btninter3">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                                <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (
                                ($_SESSION["currency"] == "CAD")
                            ) { ?>
                                <div class="row">
                                    <?php if (($_SESSION["currency"] == "CAD")) { ?>
                                        <label class="form-label">Transit number</label>

                                    <?php } else { ?>
                                        <label class="form-label">Transit</label>
                                    <?php } ?>

                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <?php if (($_SESSION["currency"] == "GBP")) { ?>
                                            <input class="form-control me-2" type="text" name="" id="us5" placeholder="Transit Number" value="<?= @$data->bank_detail->accountNumber ?>" readonly>
                                        <?php } elseif(($_SESSION["currency"] == "CAD")) {?>
                                            <input class="form-control me-2" type="text" name="" id="us5" placeholder="Transit Number" value="<?= @$data->bank_detail->transitNumber ?>" readonly>
                                        <?php } ?>
                                        <a class="btn btn-copy" id="btnus5">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                                <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="row">
                                <label>Causal</label>
                                <div class="d-flex flex-row align-items-center mb-3">
                                    <input class="form-control me-2" type="text" name="" id="inter4" value="<?=@$data->causal?>" readonly>
                                    <a class="btn btn-copy" id="btninter4">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                            <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        
                            <?php if (($_SESSION["currency"] != "AUD")) { ?> 
                                <div class="row">
                                    <label>Company Address</label>
                                    <div class="d-flex flex-row align-items-center mb-3">
                                        <input class="form-control me-2" type="text" name="" id="inter5" 
                                            value="<?= $data->bank_detail->address ?>" readonly>
                                        <a class="btn btn-copy" id="btninter5">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.2497 12.0299V17.0699C21.2497 18.5686 21.2481 19.6168 21.1383 20.4204C21.0321 21.1976 20.835 21.654 20.5037 22.0102C20.306 22.2228 20.072 22.4166 19.806 22.585C19.334 22.8838 18.7141 23.0625 17.7146 23.1554C16.7076 23.2491 15.4053 23.2499 13.5997 23.2499C11.7941 23.2499 10.4918 23.2491 9.4848 23.1554C8.48527 23.0625 7.86545 22.8838 7.39345 22.585C7.12745 22.4166 6.89344 22.2228 6.6957 22.0102C6.36444 21.654 6.16736 21.1976 6.06115 20.4204C5.95134 19.6168 5.94971 18.5686 5.94971 17.0699V12.0299C5.94971 10.5311 5.95134 9.48294 6.06115 8.6793C6.16736 7.9021 6.36444 7.44568 6.6957 7.08952C6.89344 6.87692 7.12745 6.68306 7.39345 6.51467C7.86545 6.21588 8.48527 6.03723 9.4848 5.94427C10.4918 5.85062 11.7941 5.84985 13.5997 5.84985C15.4053 5.84985 16.7076 5.85062 17.7146 5.94427C18.7141 6.03723 19.334 6.21588 19.806 6.51467C20.072 6.68306 20.306 6.87692 20.5037 7.08952C20.835 7.44568 21.0321 7.9021 21.1383 8.6793C21.2481 9.48294 21.2497 10.5311 21.2497 12.0299Z" stroke="#0066FF" stroke-width="1.5"/>
                                                <path d="M14.3 0.899902H6.32C3.38185 0.899902 1 3.09371 1 5.7999V15.5999" stroke="#0066FF" stroke-width="1.5"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            <?php }?>

                        <?php } ?>
                        
                        <div class="row ms-1">
                            <span>Amount: </span>
                            <span class="fs-6 text-blue-freedy">
                                <?= @$amount?>
                            </span>
                        </div>
                        <div class="col-12 py-4">
                            <div class="col-12 list-send-wallet d-flex flex-column mb-3">
                            </div>
                            <div class="col-12 d-flex flex-row mt-5">
                                <a href="<?= base_url() ?>receive/localbank" class="btn btn-wallet-cancle py-2 me-auto">Cancel</a>
                                <a href="<?= base_url() ?>homepage/wallet" class="btn btn-confirm" >Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-app fixed-bottom d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex justify-content-start align-items-center top">
        <a href="<?= base_url() ?>receive/localbank" class="d-flex align-items-center border-0">
            <div class="icon-menus d-flex align-items-center home-svg">
                <svg width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="41" height="35" fill="url(#paint0_linear_30_4821)" />
                    <path d="M32.4584 17.5236H8.54175" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20.5001 27.7338L8.54175 17.5245L20.5001 7.31531" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <defs>
                        <linearGradient id="paint0_linear_30_4821" x1="20.5" y1="0" x2="20.5" y2="35" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#0066FF" />
                            <stop offset="1" stop-color="#0053CF" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </a>
    </div>
</div>