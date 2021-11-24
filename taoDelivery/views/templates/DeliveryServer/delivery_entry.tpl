<?php
use oat\taoDelivery\helper\Delivery;
$delivery = get_data('delivery');
?>
<li class="animate__animated animate__slideInUp">
    <a class="block entry-point entry-point-all-deliveries <?= ($delivery["TAO_DELIVERY_TAKABLE"]) ? "" : "disabled" ?>"
        data-launch_url="<?= ($delivery["TAO_DELIVERY_TAKABLE"]) ? $delivery[Delivery::LAUNCH_URL] : "#" ?>">
        <h3><?= _dh($delivery[Delivery::LABEL]) ?></h3>

        <?php foreach ($delivery[Delivery::DESCRIPTION] as $desc) : ?>
        <p><?= $desc?></p>
        <?php endforeach; ?>
        <div class="clearfix">
            <button class="li__btn">НАЧАТЬ</button>
				
        </div>

    </a>
</li>
