<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <a href="<?= base_url()?>homepage/download_qr" class="btn btn-primary col-8 mx-auto mt-3 d-flex flex-column align-items-center">
                <!-- <div>
                    <img class="img-fluid" src="<?=base_url()?>assets/img/speedybank/btn-qrdw.png" alt="dw-qr" width="100" height="auto">
                </div> -->
                DOWNLOAD
            </a>
            <div class="col-12 d-flex justify-content-center mt-4">
                <img class="img-fluid" style="border: 2px solid black;" src="<?= base_url()?>qr/ref/<?= $_SESSION['ucode']?>Thumbnail.png" alt="">
            </div>
        </div>
    </div>
</div>