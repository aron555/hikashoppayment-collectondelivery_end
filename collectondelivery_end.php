<?php
/**
 * @package	HikaShop for Joomla!
 * @version	4.0.2
 * @author	hikashop.com
 * @copyright	(C) 2010-2019 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?>
<div class="hikashop_collectondelivery_end uk-child-width-1-2@m uk-flex-middle" id="hikashop_collectondelivery_end" uk-grid>
    <div class="">
        <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-text-center" id="hikashop_collectondelivery_end_message">
            <div class="">
                <h3 class="uk-h3 tm-order">
                 <?php
                 echo JText::_('AMOUNT_COLLECTED_ON_DELIVERY');
                 ?>
                </h3>
                <h2 class="uk-heading-hero">
                    <?php
                    //echo JText::_($this->amount);
                    echo JText::_($this->order_number);
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="">
        <h3>
            <?php
            echo JText::_('THANK_YOU_FOR_PURCHASE');
            ?>
        </h3>
       <?php
       echo JText::_('ORDER_IS_COMPLETE');
       ?>
    </div>
</div>
<div class="uk-text-center uk-margin-top">
    <a href="/katalog" class="uk-button uk-button-primary">Продолжить покупки</a>
</div>
<?php
if(!empty($this->payment_params->return_url)){
    $doc = JFactory::getDocument();
    $doc->addScriptDeclaration("window.hikashop.ready( function() {window.location='".$this->payment_params->return_url."'});");
}