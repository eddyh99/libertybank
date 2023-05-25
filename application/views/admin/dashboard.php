        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="col-12 box-dashboard-freedy-top px-3 py-5 mt-3 mb-4 d-flex flex-row align-items-center">
                        <h3 class="me-auto fw-bold text-blue-freedy">MASTER WALLET <?=$_SESSION["mwallet"]?></h3>
                        <img src="<?=base_url()?>assets/img/logo-only.svg" alt="" style="height: 75px;" class="me-5">
                    </div>
                    <div class="col-12">
                        <div class="title d-flex flex-row">
                        <?php if($_SESSION["role"]=="admin"){?>
                            <span class="fw-bold text-blue-freedy me-auto">Currency</span>
                            <span class="fw-bold text-blue-freedy">Balance</span>
                        <?php } else {?>
                                <span class="fw-bold text-blue-freedy me-auto">Balance</span>
                                <span class="fw-bold text-blue-freedy">Bank Commission</span>
                        <?php } ?>
                        </div>
                        <div class="list-currency">
                            <?php foreach ($currency as $dt){
                                    if ($dt->currency=="USD"){?>
                            <div class="my-3">
                                <a href="<?=base_url()?>admin/mwallet?cur=USD">
                                    <div class="box-list fw-bold d-flex flex-row py-4 px-4">
                                        <?php foreach($trackless as $tc){
                                                if ($tc->currency=="USD"){    
                                        ?>
                                        <span class="me-auto">USD <?php echo ($_SESSION["role"]=="super admin")? " (".number_format($tc->amount,2).")":"" ?></span>
                                        <?php   break;
                                                }
                                               } 
                                        ?>
                                        <span>&dollar; <?=number_format($dt->amount,2)?></span>
                                    </div>
                                </a>
                            </div>
                            <?php 
                                    break;
                                    }
                                  }
                                foreach ($currency as $dt){
                                    if ($dt->currency=="EUR"){
                            ?>
                            <div class="my-3">
                                <a href="<?=base_url()?>admin/mwallet?cur=EUR">
                                    <div class="box-list fw-bold d-flex flex-row py-4 px-4">
                                    <?php foreach($trackless as $tc){
                                                if ($tc->currency=="EUR"){    
                                        ?>
                                        <span class="me-auto">EUR <?php echo ($_SESSION["role"]=="super admin")? " (".number_format($tc->amount,2).")":"" ?></span>
                                        <?php   break;
                                                }
                                               } 
                                        ?>
                                        <span>&euro; <?=number_format($dt->amount,2)?></span>
                                    </div>
                                </a>
                            </div>
                            <?php   break;
                                    }
                                  }
                                foreach ($currency as $dt){
                                    if (($dt->currency!='USD') && ($dt->currency!='EUR')){
                            ?>
                            <div class="my-3">
                                <a href="<?=base_url()?>admin/mwallet?cur=<?=$dt->currency?>">
                                    <div class="box-list fw-bold d-flex flex-row py-4 px-4">
                                        <?php foreach($trackless as $tc){
                                                if ($tc->currency==$dt->currency){    
                                        ?>
                                        <span class="me-auto"><?=$dt->currency?> <?php echo ($_SESSION["role"]=="super admin")? " (".number_format($tc->amount,2).")":"" ?></span>
                                        <?php   break;
                                                }
                                              }
                                        ?>
                                        <span><?=$dt->symbol?> <?= number_format($dt->amount,2)?></span>
                                    </div>
                                </a>
                            </div>
                            <?php 
                                    }
                                  }
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>