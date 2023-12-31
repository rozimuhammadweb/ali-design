<?php

use frontend\widgets\About;
use frontend\widgets\Contact;
use frontend\widgets\Costs;
use frontend\widgets\MainBanner;
use frontend\widgets\Projects;
use frontend\widgets\SliderServices;

?>
<?= MainBanner::widget() ?>
<?= About::widget() ?>
<?= SliderServices::widget() ?>
<?= Costs::widget() ?>
<?= Projects::widget() ?>
<?= Contact::widget() ?>