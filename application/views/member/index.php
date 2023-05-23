<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">

                <div class="row" style="margin-top: 5rem;">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-12 box-code-freedy px-4 py-3">

                            <div class="d-flex  flex-row">
                                <div class="d-flex flex-column">
                                    <div class="copy-uqcode mt-3 mb-2 me-4 d-flex flex-row align-items-center">
                                        <span class="me-2">UNIQUE CODE : </span>
                                        <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>" readonly>
                                        <a class="btn btn-copy me-2" id="btnuq">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#0066FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-6 my-2">Copy & share your referral link to earn money</span>
                                        <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                                            <input class="me-2 ps-2 py-2" type="text" name="" id="refcode" value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly >
                                            <a class="btn btn-copy me-2" id="btnref">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#0066FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>Thumbnail.png" download class="qrcode-download ms-auto mt-3 d-flex flex-column align-items-center">
                                    <img class="img-fluid" src="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>.png" alt="QR" width="90" height="90">
                                    <div>
                                        <img class="img-fluid d-block d-sm-none" src="<?=base_url()?>assets/img/speedybank/btn-qrdw-mobile.png" alt="dw-qr" width="15" height="auto">
                                    </div>
                                    <div>
                                        <img class="img-fluid d-none d-sm-block" src="<?=base_url()?>assets/img/speedybank/btn-qrdw.png" alt="dw-qr" width="90" height="auto">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 text-center mt-4">
                                <div class="d-inline-block btn-head-crypto">
                                    <a class="crypto px-4 py-2 active" href="<?= base_url() ?>homepage/">FIAT</a>
                                    <a class="crypto px-4 py-2" href="<?= base_url() ?>homepage/crypto">CRYPTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="row d-flex justify-content-center">
                    
                    <div class="row col-12 col-md-10 d-flex justify-content-center">
                        <div class="col-12 mx-auto my-5">
                            <h1 class="text-blue-freedy fw-bolder f-hahmlet text-center">Dashboard</h1>
                        </div>

                        <div class="col-12 menus-list-app mb-2">
                            <div class="row currencies-card mx-auto">
                                <div class="col-12 col-md-6 text-center mx-auto">
                                    <a href="<?= base_url() ?>homepage/setting_currency" class="d-flex align-items-center justify-content-center p-2 my-2">
                                        <img src="<?= base_url()?>assets/img/select-currencies.png" alt="gear">
                                        <span class="ms-2 f-roboto text-blue-freedy fw-bolder btn-select-currencies">Select Currencies</span>
                                    </a>
                                </div>
                                <!-- <div class="col-12 col-md-6 text-center mx-auto">
                                    <a href="<?= base_url() ?>card" class="d-flex align-items-center justify-content-center p-2 my-2 ">
                                        <img class="" src="<?= base_url()?>assets/img/cardhome.png" alt="card">
                                        <span class="ms-5 f-roboto text-blue-freedy fw-bolder btn-select-currencies">Card</span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="col-12 curencies-list-app">
                            <div class="col-12">
                                <?php foreach ($currency as $dt) {
                                    if ($dt->status == 'active') {
                                        if (($dt->currency == "USD") || ($dt->currency == "EUR")) {
                                ?>
                                            <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                                <span class="me-auto"><?= $dt->currency ?></span>
                                                <span><?= $dt->symbol; ?>
                                                    <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                            </a>
                                <?php }
                                    }
                                }
                                ?>
                                <?php foreach ($currency as $dt) {
                                    if ($dt->status == 'active') {
                                        if (($dt->currency != "USD") && ($dt->currency != "EUR")) {
                                ?>
                                            <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                                <span class="me-auto"><?= $dt->currency ?></span>
                                                <span><?= $dt->symbol; ?>
                                                    <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                            </a>
                                <?php }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>