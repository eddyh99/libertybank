<?php if($card != 'confirm' && $card != 'success' && $requestcard != 'detailcard' && $requestcard_physical != 'success' && $requestcard_physical != 'summary'){?>
<div class="navbar-app fixed-top d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex flex-row justify-content-start align-items-center bottom">
        <a href="<?= base_url() ?>homepage" class="d-flex align-items-center border-0 ms-0 me-auto">
            <div class="icon-menus d-flex align-items-center home-svg py-0">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/logo.png" alt="logo">
            </div>
        </a>

        <a href="<?= base_url() ?>search" class=" icon-soon align-items-center border-0 mx-2">
            <div class="icon-menus d-flex align-items-center home-svg py-0">
                <svg width="34" height="29" viewBox="0 0 34 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.787598" width="32.5366" height="29" rx="2" fill="#0066FF"/>
                    <path d="M24.7876 22L20.9209 18.1333M15.8987 8.66667C18.3533 8.66667 20.3432 10.6565 20.3432 13.1111M23.0098 13.1111C23.0098 17.0385 19.8261 20.2222 15.8987 20.2222C11.9714 20.2222 8.7876 17.0385 8.7876 13.1111C8.7876 9.18375 11.9714 6 15.8987 6C19.8261 6 23.0098 9.18375 23.0098 13.1111Z" stroke="#003A91" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
    </div>
</div>
<?php }?>

<?php if($card != 'success' && $requestcard_physical != 'success' ){?>  
<div class="navbar-app fixed-bottom d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex justify-content-center align-items-center top">
        <!-- Start Back -->
        <a href="
        
            <?php if($requestcard == 'requestcard' ) {?>
                <?= base_url() ?>homepage
            <?php }?>

            <?php if($requestcard == 'virtual' ) {?>
                <?= base_url() ?>card
            <?php }?>

            <?php if($requestcard == 'activenow' ) {?>
                <?= base_url() ?>card/requestcard?requestcard=<?= base64_encode('virtual')?>
            <?php }?>

            <?php if($requestcard == 'detailcard' ) {?>
                <?= base_url() ?>card/requestcard?requestcard=<?= base64_encode('activenow')?>
            <?php }?>

            <?php if($card == 'card' ) {?>
                <?= base_url() ?>homepage
            <?php }?>

            <?php if($card == 'topup' ) {?>
                <?= base_url() ?>card
            <?php }?>

            <?php if($card == 'confirm' ) {?>
                <?= base_url() ?>card/topupcard
            <?php }?>

            <?php if($card == 'history' ) {?>
                <?= base_url() ?>card
            <?php }?>

            <?php if($requestcard_physical == 'requestcard_physical' ) {?>
                <?= base_url() ?>card
            <?php }?>

            <?php if($requestcard_physical == '3dpassword' ) {?>
                <?= base_url() ?>card/requestcard_physical?requestcard_physical=<?= base64_encode('requestcard_physical')?>
            <?php }?>

            <?php if($requestcard_physical == 'shippingdetails' ) {?>
                <?= base_url() ?>card/requestcard_physical?requestcard_physical=<?= base64_encode('requestcard_physical')?>
            <?php }?>
            
            <?php if($requestcard_physical == 'summary' ) {?>
                <?= base_url() ?>card/requestcard_physical?requestcard_physical=<?= base64_encode('3dpassword')?>
            <?php }?>



        " class="d-flex align-items-center me-auto">
            <div class="icon-menus d-flex align-items-center home-svg">
                <span class="fs-6 py-0 py-md-1">Go back</span>
            </div>
        </a>
        <!-- End back -->
        
        <!-- Start logout -->
        <a href="<?= base_url() ?>auth/logout" class="d-flex align-items-center logout">
            <div class="icon-menus d-flex align-items-center home-svg">
                <span class="fs-6 py-0 py-md-1">Log out</span>
            </div>
        </a>
        <!-- End Logout -->
    </div>
</div>
<?php }?>