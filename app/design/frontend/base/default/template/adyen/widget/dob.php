<?php
/**
 * @see Mage_Customer_Block_Widget_Dob
 */
?>
<label for="<?php echo $this->getFieldId('month')?>"<?php if ($this->isRequired()) echo ' class="required"' ?>><?php if ($this->isRequired()) echo '<em>*</em>' ?><?php echo $this->__('Date of Birth') ?></label>
<div class="input-box customer-dob customer-dob-adyen-openinvoice">
    <?php
    $this->setDateInput('d',
        '<div class="dob-day">
             <input type="text" id="' . $this->getFieldId('day') . '" name="' . $this->getFieldName('day') . '" value="' . $this->getDay() . '" title="' . $this->__('Day') . '" class="input-text required-entry validate-custom" ' . $this->getFieldParams() . ' />
             <label for="' . $this->getFieldId('day') . '">' . $this->__('DD') . '</label>
         </div>'
    );
    $this->setDateInput('m',
        '<div class="dob-month">
             <input type="text" id="' . $this->getFieldId('month') . '" name="' . $this->getFieldName('month') . '" value="' . $this->getMonth()  . '" title="' . $this->__('Month')  . '" class="input-text required-entry validate-custom" ' . $this->getFieldParams()  . ' />
             <label for="' . $this->getFieldId('month') . '">' . $this->__('MM')  . '</label>
         </div>'
    );
    $this->setDateInput('y',
        '<div class="dob-year">
             <input type="text" id="' . $this->getFieldId('year') . '" name="' . $this->getFieldName('year') . '" value="' . $this->getYear()  . '" title="' . $this->__('Year')  . '" class="input-text required-entry validate-custom" ' . $this->getFieldParams()  . ' />
             <label for="' . $this->getFieldId('year') . '">' . $this->__('YYYY')  . '</label>
         </div>'
    );
    ?>
    <?php echo $this->getSortedDateInputs() ?>
    <div class="dob-full" style="display:none;">
        <input type="hidden" id="<?php echo $this->getFieldId('dob')?>" name="<?php echo $this->getFieldName('dob')?>" />
    </div>

    <div class="validation-advice" style="display:none;"></div>
</div>
<script type="text/javascript">
    //<![CDATA[
    var customer_dob = new Varien.DOB('.customer-dob-adyen-openinvoice', <?php echo $this->isRequired() ? 'true' : 'false' ?>, '<?php echo $this->getDateFormat() ?>');
    //]]>
</script>