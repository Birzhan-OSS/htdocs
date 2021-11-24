<?php
use oat\tao\helpers\Template;
use oat\taoDelivery\helper\Delivery;

$resumableDeliveries = get_data('resumableDeliveries');
$availableDeliveries = get_data('availableDeliveries');
$warningMessage = get_data('warningMessage');
?>
<div class="test-listing">

        <h1><?= __("My Tests"); ?></h1>

    <div class="permanent-feedback"></div>
   <div class="test__listing__elements">
    <i class="fa fa-th-large th" aria-hidden="true"></i> 
    <i class="fa fa-bars bar" aria-hidden="true"></i>
    </div>
    <?php if (count($resumableDeliveries) > 0) : ?>
        <h2 class="info">
            <?= __("In progress") ?>: <?= count($resumableDeliveries); ?>
        </h2>

        <ul class="entry-point-box plain">
            <?php foreach ($resumableDeliveries as $delivery): ?>
                <li>
                    <a class="block entry-point entry-point-started-deliveries" data-launch_url="<?= $delivery[Delivery::LAUNCH_URL] ?>">
                        <h3><?= _dh($delivery[Delivery::LABEL]) ?></h3>

                        <?php foreach ($delivery[Delivery::DESCRIPTION] as $desc) : ?>
                        <p><?= $desc?></p>
                        <?php endforeach; ?>

                       
								 <div class="clearfix">
            						<button class="li__btn_con">ПРОДОЛЖИТЬ</button>
        						</div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if (count($availableDeliveries) > 0) : ?>
        <h2>
            <?= __("Available") ?>: <?= count($availableDeliveries); ?>
        </h2>
        <ul class="entry-point-box plain">
            <?php foreach ($availableDeliveries as $delivery) : ?>
                <?php Template::inc('DeliveryServer/delivery_entry.tpl', null, ['delivery' => $delivery]); ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
