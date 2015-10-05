<?php

//'' => '',



class Tooltip{

    static $default = 'Set Tooltip text';


    // General
    static $templateName = 'Technical or internal name for the pass. Used for internal reference to distinguish passes in this account.';
    static $passKey = 'PassKey is the unique key which identifies the Pass Template. This is used on pass dynamic url to generate passes dynamically.';
    static $categoryName = 'Select the category depending how and when this pass will come into use. Select &quot;Generic&quot; if its for general use. This setting cannot be edit after creating the template.';
    static $places = 'Select coupon category';
    static $boardingPassTransit = 'Please select type of transit. Required for boarding passes.';
    static $organizationName = 'The organization name is displayed on the lock screen when your pass is relevant and by apps such as Mail which act as a conduit for passes. Choose a name that users will recognize and associate with your organization or company.';
    static $organizationDescription = 'The description lets VoiceOver make your pass accessible to blind and low vision users. The value for the description key in the pass specifies the description. The description should start with a high-level term such as ';
    

    // Appearnes
    static $icon = 'The icon is displayed when a pass is shown on the lock screen, notifications, mail when showing a pass attached to an email. The expected dimensions are the same as a small icon 58x58 pixels, as described by Apple specifications. A shine effect is automatically applied to the icon for you. By default it is a yellow star icon if none is uploaded. ';
    static $logo = 'The logo image is displayed in the top left corner of the pass, next to the logo text. The allotted space is 320x100 pixels. In most cases it should be narrower. To engrave the logo so that it matches the logo text, add a black drop shadow with a 1 pixel y offset, a 1 pixel blur, and a 35% opacity.';
    static $logoText = 'This option adds logo text value next to your logo. Useful for square logos, not rectangular logos.';
    
    static $genericThumbnail = 'An additional image displayed on the front of the pass. For example, on a membership card, the thumbnail could be used to a picture of the cardholder.';    
    static $boardingPassFooter = 'Footer images appear near the barcode.';
    static $couponStrip = 'The strip image is displayed behind the primary fields. The allotted space is 624x168 pixels for event tickets, 624x220 pixels for other pass styles with a square barcode, and 624x246 pixels in all other cases.';
    static $storeCardStrip = 'The strip image is displayed behind the primary fields. The allotted space is 624x168 pixels for event tickets, 624x220 pixels for other pass styles with a square barcode, and 624x246 pixels in all other cases.';

    static $eventTicketStrip = 'The strip image is displayed behind the primary fields. The allotted space is 624x168 pixels for event tickets, 624x220 pixels for other pass styles with a square barcode, and 624x246 pixels in all other cases.';
    static $eventTicketThumbnail = 'An additional image displayed on the front of the pass. For example, on a membership card, the thumbnail could be used to a picture of the cardholder.';
    static $eventTicketBackground = 'The image displayed as the background of the front of the pass.';
    
    static $backgroundColorCode = 'Set pass background color.';
    static $fieldLabelColorCode = 'Set field labels font color.';
    static $fieldValueColorCode = 'Set field values font color.';


    //Data Settings
    static $couponBarcodeStatus = 'This option can be selected to send barcode in a pass. This will allow you to set different options for sending barcode in the pass.';
    static $couponBarcodeType   = 'Type of barcode that is supported by the device which scans this barcode.';
    static $couponBarcodeValueOption = 'Barcode value remains same for all passes if &quot;Fixed&quot; is selected. If &quot;Dynamic&quot; is selected, barcode value would change according to what the API or CSV upload dictate the customized value to be.  If there is no API or CSV, then the barcode will default to the &quot;Fixed&quot; value. ';
    static $couponBarcodeFixedValue = '&quot;Fixed Barcode Value&quot; is considered as Barcode value for all the passes generated using this template. &quot;Default Barcode Value&quot; is considered as Default in the case where Dynamic value is not generated or missing from the API request or in CSV.';
    static $couponBarcodeValueSourc = 'Technique to generate barcode values.';
    static $couponAutoGenerateValueType = 'Barcode values are dynamically auto generated based on this setting.';
    static $couponBarcodeDynamicValue = '';
    static $couponBarcodeEncoding = 'Text encoding that is used to convert the message from the string representation to a data representation to render the barcode.';
    static $barcodeAlternateText = 'Text displayed near the barcode. A human-readable version. This can be default or can be dynamically inserted using API.';
    static $barcodeAlternateFixedText = '&quot;Fixed Text&quot; is considered as Alternate text for all the passes generated using this template.&quot;Default Text&quot; is considered as Default in the case where Dynamic Text is not generated or missing from the API request or in the CSV.';
    static $barcodeAlternateDynamicText = '&quot;Fixed Text&quot; is considered as Alternate text for all the passes generated using this template.&quot;Default Text&quot; is considered as Default in the case where Dynamic Text is not generated or missing from the API request or in the CSV.';


    //header
    static $couponHeaderLabel = 'Label text for the field.';
    static $couponHeaderLabelDynamicStatus = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $couponHeaderValueType = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $couponHeaderTextValue = 'Value of the field.';
    static $couponHeaderTextDynamicStatus = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $couponHeaderValueDate = 'Value of the field.';
    static $couponHeaderValueDateFormate = 'Select the date style for the field.';
    static $couponHeaderValueTimeFormate = 'Select the time style for the field.';
    static $couponHeaderNumberValue = 'Value of the field.';
    static $couponHeaderNumberFormate = 'Select the number style for the field.';
    static $couponHeaderCurrencyValue = 'Value of the field.';
    static $couponHeaderCurrencyCode = "Currency code for the field's value.";
    static $couponHeaderAlignmnet = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';


    //primary
    static $couponPrimaryFieldLabel = 'Label text for the field.';
    static $couponPrimaryFieldLabelDynamicStatus = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $couponPrimaryFieldValueType = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $couponPrimaryFieldTextValue = 'Value text for the field.';
    static $couponPrimaryFieldTextDynamicStatus = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $couponPrimaryFieldValueDate = 'Value text for the field.';
    static $couponPrimaryFieldValueDateFormate = 'Select the date style for the field.';
    static $couponPrimaryFieldValueTimeFormate = 'Select the time style for the field.';
    static $couponPrimaryFieldNumberValue = 'Value text for the field.';
    static $couponPrimaryFieldNumberFormate = 'Select the number style for the field.';
    static $couponPrimaryFieldCurrencyValue = 'Value text for the field.';
    static $couponPrimaryFieldCurrencyCode = "Currency code for the field's value.";

    //secondary
    static $secondarLabelOne = 'Label text for the field.';
    static $secondarDynamicOne = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $secondarTypeOne = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $seconValOne = 'Value text for the field.';
    static $seconDynOne = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $seconDateTimeOne = 'Value text for the field.';
    static $seconDateFormatOne = 'Select the date style for the field.';
    static $seconTimeFormatOne = 'Select the time style for the field.';
    static $seconValNumOne = 'Value text for the field.';
    static $seconNumFormatOne = 'Select the number style for the field.';
    static $seconValCurrOne = 'Value text for the field.';
    static $seconCurrCodeOne = "Currency code for the field's value.";
    static $seconAlignOne = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';

    static $secondarLabelTwo = 'Label text for the field.';
    static $secondarDynamicTwo = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $secondarTypeTwo = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $seconValTwo = 'Value text for the field.';
    static $seconDynTwo = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $seconDateTimeTwo = 'Value text for the field.';
    static $seconDateFormatTwo = 'Select the date style for the field.';
    static $seconTimeFormatTwo = 'Select the time style for the field.';
    static $seconValNumTwo = 'Value text for the field.';
    static $seconNumFormatTwo = 'Select the number style for the field.';
    static $seconValCurrTwo = 'Value text for the field.';
    static $seconCurrCodeTwo = "Currency code for the field's value.";
    static $seconAlignTwo = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';

    static $secondarLabelThree = 'Label text for the field.';
    static $secondarDynamicThree = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $secondarTypeThree = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $seconValThree = 'Value text for the field.';
    static $seconDynThree = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $seconDateTimeThree = 'Value text for the field.';
    static $seconDateFormatThree = 'Select the date style for the field.';
    static $seconTimeFormatThree = 'Select the time style for the field.';
    static $seconValNumThree = 'Value text for the field.';
    static $seconNumFormatThree = 'Select the number style for the field.';
    static $seconValCurrThree = 'Value text for the field.';
    static $seconCurrCodeThree = "Currency code for the field's value.";
    static $seconAlignThree = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';

    static $secondarLabelFour = 'Label text for the field.';
    static $secondarDynamicFour = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $secondarTypeFour = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $seconValFour = 'Value text for the field.';
    static $seconDynFour = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $seconDateTimeFour = 'Value text for the field.';
    static $seconDateFormatFour = 'Select the date style for the field.';
    static $seconTimeFormatFour = 'Select the time style for the field.';
    static $seconValNumFour = 'Value text for the field.';
    static $seconNumFormatFour = 'Select the number style for the field.';
    static $seconValCurrFour = 'Value text for the field.';
    static $seconCurrCodeFour = "Currency code for the field's value.";
    static $seconAlignFour = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';
    

    static $auxiliaryLabelOne = 'Label text for the field.';
    static $auxiliaryDynamicOne = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryTypeOne = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $auxiliaryValOne = 'Value text for the field.';
    static $auxiliaryDynOne = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryDateTimeOne = 'Value text for the field.';
    static $auxiliaryDateFormatOne = 'Select the date style for the field.';
    static $auxiliaryTimeFormatOne = 'Select the time style for the field.';
    static $auxiliaryValNumOne = 'Value text for the field.';
    static $auxiliaryNumFormatOne = 'Select the number style for the field.';
    static $auxiliaryValCurrOne = 'Value text for the field.';
    static $auxiliaryCurrCodeOne = "Currency code for the field's value.";
    static $auxiliaryAlignOne = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';

    static $auxiliaryLabelTwo = 'Label text for the field.';
    static $auxiliaryDynamicTwo = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryTypeTwo = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $auxiliaryValTwo = 'Value text for the field.';
    static $auxiliaryDynTwo = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryDateTimeTwo = 'Value text for the field.';
    static $auxiliaryDateFormatTwo = 'Select the date style for the field.';
    static $auxiliaryTimeFormatTwo = 'Select the time style for the field.';
    static $auxiliaryValNumTwo = 'Value text for the field.';
    static $auxiliaryNumFormatTwo = 'Select the number style for the field.';
    static $auxiliaryValCurrTwo = 'Value text for the field.';
    static $auxiliaryCurrCodeTwo = "Currency code for the field's value.";
    static $auxiliaryAlignTwo = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';
    
    static $auxiliaryLabelThree = 'Label text for the field.';
    static $auxiliaryDynamicThree = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryTypeThree = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $auxiliaryValThree = 'Value text for the field.';
    static $auxiliaryDynThree = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryDateTimeThree = 'Value text for the field.';
    static $auxiliaryDateFormatThree = 'Select the date style for the field.';
    static $auxiliaryTimeFormatThree = 'Select the time style for the field.';
    static $auxiliaryValNumThree = 'Value text for the field.';
    static $auxiliaryNumFormatThree = 'Select the number style for the field.';
    static $auxiliaryValCurrThree = 'Value text for the field.';
    static $auxiliaryCurrCodeThree = "Currency code for the field's value.";
    static $auxiliaryAlignThree = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';

    static $auxiliaryLabelFour = 'Label text for the field.';
    static $auxiliaryDynamicFour = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryTypeFour = 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.';
    static $auxiliaryValFour = 'Value text for the field.';
    static $auxiliaryDynFour = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $auxiliaryDateTimeFour = 'Value text for the field.';
    static $auxiliaryDateFormatFour = 'Select the date style for the field.';
    static $auxiliaryTimeFormatFour = 'Select the time style for the field.';
    static $auxiliaryValNumFour = 'Value text for the field.';
    static $auxiliaryNumFormatFour = 'Select the number style for the field.';
    static $auxiliaryValCurrFour = 'Value text for the field.';
    static $auxiliaryCurrCodeFour = "Currency code for the field's value.";
    static $auxiliaryAlignFour = '1. Left - Aligns the text to the left in a given space.<br>
2. Center - Aligns the text to the center in a given space.<br>
3. Right - Aligns the text to the right in a given space.<br>
4. Natural - Aligns the text appropriately based on its script direction.';

    //backfields
    static $backfieldLabelOne = 'Label text for the field.';
    static $backfieldDynOne = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValOne = 'Value text for the field.';
    static $backfieldDynamicOne = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelTwo = 'Label text for the field.';
    static $backfieldDynTwo = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValTwo = 'Value text for the field.';
    static $backfieldDynamicTwo = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelThree = 'Label text for the field.';
    static $backfieldDynThree = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValThree = 'Value text for the field.';
    static $backfieldDynamicThree = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelFour = 'Label text for the field.';
    static $backfieldDynFour = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValFour = 'Value text for the field.';
    static $backfieldDynamicFour = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelFive = 'Label text for the field.';
    static $backfieldDynFive = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValFive = 'Value text for the field.';
    static $backfieldDynamicFive = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelSix = 'Label text for the field.';
    static $backfieldDynSix = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValSix = 'Value text for the field.';
    static $backfieldDynamicSix = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelSeven = 'Label text for the field.';
    static $backfieldDynSeven = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValSeven = 'Value text for the field.';
    static $backfieldDynamicSeven = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelEight = 'Label text for the field.';
    static $backfieldDynEight = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValEight = 'Value text for the field.';
    static $backfieldDynamicEight = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelNine = 'Label text for the field.';
    static $backfieldDynNine = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValNine = 'Value text for the field.';
    static $backfieldDynamicNine = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $backfieldLabelTen = 'Label text for the field.';
    static $backfieldDynTen = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $backfieldValTen = 'Value text for the field.';
    static $backfieldDynamicTen = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';


    //Relevance
    static $relevanceAddressOne = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextOne = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicOne = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressTwo = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextTwo = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicTwo = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressThree = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextThree = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicThree = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressFour = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextFour = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicFour = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressFive = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextFive = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicFive = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressSix = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextSix = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicSix = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressSeven = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextSeven = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicSeven = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressEight = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextEight = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicEight = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressNine = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextNine = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicNine = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';

    static $relevanceAddressTen = 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.';
    static $relevanceTextTen = 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.';
    static $relevanceDynamicTen = 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.';
    static $relevanceDateTime = 'Relevant date and time for the pass. Appears on the lock screen of the passholder.';


    // Distrubution
    static $distributionPublishPass = 'Check this box to publish your pass';
    static $distributionPassLinkType = 'Check this box to activate the pass links. Unchecking will prevenet any more passes being distributed.';
    static $distributionMultiplePass = 'You can configure your pass to allow only one install per customer. This option is not appropriate for tickets, storecards or membership passes where a user may ligitimately wish to install more than one pass';
    static $distributionVoidPass = 'Selecting this option will deliver passes with a greyed out barcode and an expiry message.  Note that this will affect only iOS7 passes.';
    static $distributionAutoExpire = 'After the expiry date has passed, the barcode will be greyed out and an expiry message will be appear under the barcode.  Note that this will only affect iOS7 passes.';
    static $distributionQuntityRestriction = 'You can choose if you wish to limit the number of passes';
    static $distributionNoStopPass = 'Enter the total number of passes to be distributed';
    static $distributionDateRestriction = 'You can choose if you wish to limit the availability of passes';
    static $distributionStopIssuePass = "Enter the date and time after which passes can no longer be issued. This field uses the time zone for the pass which can be set in the 'Pass Settings' section";
    static $distributionNeedPassIssue = 'You can choose to restrict the pass creation page with a Password';
    static $distributionIssuePass = 'Enter a password to be supplied before a pass can be issued';
    static $distributionSinglePass = 'Enter a single used password to be supplied before a pass can be issued';
    static $distributionNeedPass = 'You can choose to restrict the pass update page with a Password';
    static $distributionUpdatePass = 'Enter a password to be supplied before a pass can be updated';
    static $distributionSharing = 'Enable the sharing sidebar on the pass.is distribution page';

    static $abc = '';
    


}//


class Helper
{
    public function passId() {
        return sha1(uniqid(mt_rand(), true));
    }
    
    public function randomDirName() {
        return md5(uniqid(mt_rand(), true));
    }

    public static function ping(){
        return 'Insidees';
    }

    public static function getValue($key,$array){

    }

    public static function getRole () {
        global $current_user;
        get_currentuserinfo();
        $user_roles = $current_user->roles;
        $user_role = array_shift($user_roles);
        return $user_role;
    }

    public static function drawPaging($currentPointer, $cursorNo , $totalRecords ,  $pageSize=10){
        $totalPages = ceil( $totalRecords / $pageSize );
        
        //echo $totalPages;

        $htmlString = '<div class="navigation">';
        $htmlString .= '<ul class="pagination">';
        $htmlString .= ($cursorNo > 1) ? '<li><a href="?pass-builder=templates&page='.$currentPointer.'">« Previous</a></li>' : '<li class="disabled"><span>« Previous</span></li>'; 
        
        for($i=1; $i <= $totalPages; $i++){
            $htmlString .= ($i == ($cursorNo)) ? '<li class="active"><span>'.$i.'</span></li>' : '<li><a href="?pass-builder=templates&page='.$i.'">'.$i.'</a></li>';
        }
        
        $htmlString .= ($totalPages > $cursorNo) ? '<li><a href="?pass-builder=templates&page='.($cursorNo+1).'">Next »</a></li>' : '<li class="disabled"> <span>Next »</span></li>'; 
        $htmlString .= '</ul>';
        $htmlString .= '</div>';
        return $htmlString;
    }


    

    //translations
    static $tabsText = array(
        'general'=> array(
            'en' => 'General',
            'da' => 'Generelt'
            ),
        'appearance'=> array(
            'en' => 'Appearance',
            'da' => 'Udseende'
            ),
        'data_settings'=> array(
            'en' => 'Data Settings',
            'da' => 'Stregkode'
            ),
        'header'=> array(
            'en' => 'Header',
            'da' => 'Header'
            ),
        'primary'=> array(
            'en' => 'Primary',
            'da' => 'Hovedtekst'
            ),
        'secondary'=> array(
            'en' => 'Secondary',
            'da' => 'Undertekst'
            ),
        'auxiliary'=> array(
            'en' => 'Auxiliary',
            'da' => 'Ekstra'
            ),
        'back_fields'=> array(
            'en' => 'Back Fields',
            'da' => 'Bagside'
            ),
        'relevance'=> array(
            'en' => 'Relevance',
            'da' => 'Lokationer'
            ),
        'distribution'=> array(
            'en' => 'Distribution',
            'da' => 'Distribution'
            )
        );
    
    static $validationText = array(
        'name'=>array(
            'en' => 'Name cannot be empty. Please try again.',
            'da' => 'Navn kan ikke være tomt.'
            ),
        'organization'=>array(
            'en' => 'Organization cannot be empty. Please try again.',
            'da' => 'Organisation kan ikke være tomt.'
            ),
        'des'=>array(
            'en' => 'Description cannot be empty. Please try again.',
            'da' => 'Beskrivelse kan ikke være tomt.'
            ),
        'barcode'=>array(
            'en' => 'Barcode value cannot be empty (or) zero. Please try again.',
            'da' => 'Stregkode kan ikke være tom eller nul.'
            ),
        'auto_expire'=>array(
            'en' => '"Auto Expire Pass After" cannot be empty. Please try again.',
            'da' => 'Udløbsdato kan ikke være tomt.'
            ),

        );

    static $messageText = array(
        'next'=> array(
            'en' => 'Next',
            'da' => 'Næste'
            ),
        'back'=> array(
            'en' => 'Back',
            'da' => 'Tilbage'
            ),
        'max_char'=> array(
            'en' => '50 chars max.',
            'da' => 'Maks. 50 karakterer'
            ),
        'event_text'=> array(
            'en' => 'Event Ticket - Recommended 624 x 168px (Aztec/QR/PDF417 Barcode). <br>
                                            Other Passes - Recommended 624 x 220px (Aztec/QR). 624 x 246px (PDF417).<br>
                                            Recommended size 200 KB. Size &gt; 200KB are compressed automatically.',
            'da' => 'Billet - Anbefalet 624 x 168px (Aztec/QR/PDF417 stregkode). <br>
                                            Andre Pass - Anbefalet 624 x 220px (Aztec/QR). 624 x 246px (PDF417).<br>
                                            Anbefalet størrelse 200 KB. Størrelse &gt; 200KB komprimeres automatisk.'
            ),
        'recommand_text'=> array(
            'en' => 'Recommended 180 x 180px. Recommended size 200 KB.<br>
                                            Size &gt; 200KB are compressed automatically. <br>
                                            The aspect ratio should be in the range of 2:3 to 3:2, otherwise image is cropped.<br>',
            'da' => 'Anbefalet 180 x 180px. Anbefalet størrelse 200 KB.<br>
                                            Størrelse &gt; 200KB komprimeres automatisk. <br>
                                            Aspekt ration skal være i 2:3 til 3:2 range, ellers croppes billede.<br>'
            ),
        'recommand_size'=> array(
            'en' => 'Recommended 224 x 283px. Recommended size 200 KB.<br>
                                            Size &gt; 200KB are compressed automatically.',
            'da' => 'Anbefalet 224 x 283px. Anbefalet størrelse 200 KB.<br>
                                            Størrelse &gt; 200KB komprimeres automatisk.'
            ),
        'auxiliary_text'=> array(
            'en' => 'NOTE: Auxiliary fields are not supported in this case.</br>
                "Generic" Pass with "Aztec/QR Barcode" do not support Auxiliary Fields.',
            'da' => 'NOTE: Ekstra felter understøttes ikke i dette tilfælde.</br>
                "Generisk" Pass med "Aztec/QR stregkode" understøtter ikke ekstra felter.'
            ),
        'template' => array(
            'en'=> 'Template',
            'da'=> 'Skabelon'
            )
        );
    
    static $headingText = array(
        'head1'=> array(
            'en'=> 'Create Pass Template',
            'da'=> 'Opret Pass skabelon'
            ),
        'head2'=> array(
            'en' => 'Modify Pass Template',
            'da' => 'Tilret Pass skabelon'
            ),
        'head3' => array(
            'en'=> 'Pass Templates',
            'da'=> 'Pass skabelon'
            )
        );

    static $formFields = array(
        'pass_meta'=> array(
            'en' => 'Pass Metadata',
            'da' => 'Pass Metadata'
            ),
        'name'=> array(
            'en' => 'Name',
            'da' => 'Navn'
            ),
        'pass_key'=> array(
            'en' => 'PassKey',
            'da' => 'Pass nøgle'
            ),
        'category'=> array(
            'en' => 'Category',
            'da' => 'Kategori'
            ),
        'coupon_category'=> array(
            'en' => 'Coupon Category',
            'da' => 'Kupon kategori'
            ),
        'transit'=> array(
            'en' => 'Transit',
            'da' => 'Transit'
            ),
        'organization'=> array(
            'en' => 'Organization',
            'da' => 'Organisation'
            ),
        'description'=> array(
            'en' => 'Description',
            'da' => 'Beskrivelse'
            ),
        'image_text'=> array(
            'en' => 'Image and Text',
            'da' => 'Billede og tekst'
            ),
        'icon'=> array(
            'en' => 'Icon',
            'da' => 'Ikon'
            ),
        'logo'=> array(
            'en' => 'Logo',
            'da' => 'Logo'
            ),
        'logo_text'=> array(
            'en' => 'Logo Text',
            'da' => 'Logo tekst'
            ),
        'thumbnail'=> array(
            'en' => 'Thumbnail',
            'da' => 'Thumbnail'
            ),
        'footer'=> array(
            'en' => 'Footer',
            'da' => 'Footer'
            ),
        'strip'=> array(
            'en' => 'Strip',
            'da' => 'Strip'
            ),
        'background'=> array(
            'en' => 'Background',
            'da' => 'Baggrund'
            ),
        'field_label'=> array(
            'en' => 'Field Label',
            'da' => 'Felt label'
            ),
        'field_value'=> array(
            'en' => 'Field Value',
            'da' => 'Felt værdi'
            ),
        'pass_data_barcode'=> array(
            'en' => 'Pass Data Barcode Data',
            'da' => 'Pass data stregkodedata'
            ),
        'add_barcode'=> array(
            'en' => 'Add Barcode',
            'da' => 'Tilføj stregkode'
            ),
        'barcode_type'=> array(
            'en' => 'Barcode Type',
            'da' => 'Stregkode type'
            ),
        'barcode_value'=> array(
            'en' => 'Barcode Value',
            'da' => 'Stregkode værdi'
            ),
        'fixed_value'=> array(
            'en' => 'Fixed Value',
            'da' => 'Fast værdi'
            ),
        'barcode_value_source'=> array(
            'en' => 'Barcode Value Source',
            'da' => 'Kilde til stregkodeværdier'
            ),
        'auto_generate_value'=> array(
            'en' => 'Auto Generate Value',
            'da' => 'Auto generer værdi'
            ),
        'dynamic_value'=> array(
            'en' => 'Dynamic Value',
            'da' => 'Dynamisk værdi'
            ),
        'barcode_encoding'=> array(
            'en' => 'Barcode Encoding',
            'da' => 'Stregkode encoding'
            ),
        'alternate_text'=> array(
            'en' => 'Alternate Text',
            'da' => 'Alternativ tekst'
            ),
        'fixed_text'=> array(
            'en' => 'Fixed Text',
            'da' => 'Fast tekst'
            ),
        'dynamic_text'=> array(
            'en' => 'Dynamic Text',
            'da' => 'Dynamisk tekst'
            ),
        'header_fields'=> array(
            'en' => 'Header Fields',
            'da' => 'Header felter'
            ),
        'label'=> array(
            'en' => 'Label',
            'da' => 'Label'
            ),
        'value' =>array(
            'en' => 'Value',
            'da' => 'Værdi'
            ),
        'dynamic'=> array(
            'en' => 'Dynamic',
            'da' => 'Dynamisk'
            ),
        'type'=> array(
            'en' => 'Type',
            'da' => 'Type'
            ),
        'value_text'=> array(
            'en' => 'Value (Text)',
            'da' => 'Værdi (tekst)'
            ),
        'value_date_time'=> array(
            'en' => 'Value (Date and Time)',
            'da' => 'Værdi (dato og tid)'
            ),
        'date_format'=> array(
            'en' => 'Date Format',
            'da' => 'Dato format'
            ),
        'time_format'=> array(
            'en' => 'Time Format',
            'da' => 'Tid format'
            ),
        'value_number'=> array(
            'en' => 'Value (Number)',
            'da' => 'Værdi (tal)'
            ),
        'number_format'=> array(
            'en' => 'Number Format',
            'da' => 'Tal format'
            ),
        'value_currency'=> array(
            'en' => 'Value (Currency)',
            'da' => 'Værdi (valuta)'
            ),
        'currency_code'=> array(
            'en' => 'Currency Code',
            'da' => 'Valuta kode'
            ),
        'alignment'=> array(
            'en' => 'Alignment',
            'da' => 'Alignment'
            ),
        'primary_fields'=> array(
            'en' => 'Primary Fields',
            'da' => 'Hovedfelter'
            ),


        'secondary_fields'=> array(
            'en' => 'Secondary Fields',
            'da' => 'Underfelter'
            ),
        'total_secondary_fields'=> array(
            'en' => 'Total Secondary Fields',
            'da' => 'Totale antal underfelter'
            ),
        'secondary_fields_1'=> array(
            'en' => 'Secondary Field 1 of 4',
            'da' => 'Underfelt 1 af 4'
            ),
        'secondary_fields_2'=> array(
            'en' => 'Secondary Field 2 of 4',
            'da' => 'Underfelt 2 af 4'
            ),
        'secondary_fields_3'=> array(
            'en' => 'Secondary Field 3 of 4',
            'da' => 'Underfelt 3 af 4'
            ),
        'secondary_fields_4'=> array(
            'en' => 'Secondary Field 4 of 4',
            'da' => 'Underfelt 4 af 4'
            ),


        'auxiliary_fields'=> array(
            'en' => 'Auxiliary Fields',
            'da' => 'Ekstra felter'
            ),
        'total_auxiliary'=> array(
            'en' => 'Total Auxiliary Fields',
            'da' => 'Totale antal ekstra felter'
            ),
        'auxiliary_field_1'=> array(
            'en' => 'Auxiliary Field 1 of 4 ',
            'da' => 'Ekstra felt 1 af 4'
            ),
        'auxiliary_field_2'=> array(
            'en' => 'Auxiliary Field 2 of 4 ',
            'da' => 'Ekstra felt 2 af 4'
            ),
        'auxiliary_field_3'=> array(
            'en' => 'Auxiliary Field 3 of 4 ',
            'da' => 'Ekstra felt 3 af 4'
            ),
        'auxiliary_field_4'=> array(
            'en' => 'Auxiliary Field 4 of 4 ',
            'da' => 'Ekstra felt 4 af 4'
            ),


        'back_fields'=> array(
            'en' => 'Back Fields',
            'da' => 'Bagside felter'
            ),
        'total_back_fields'=> array(
            'en' => 'Total Back Fields',
            'da' => 'Totale antal bagside felter'
            ),
        'back_field_1'=> array(
            'en' => 'Back Fields 1 of 10',
            'da' => 'Bagside felt 1 af 10'
            ),
        'back_field_2'=> array(
            'en' => 'Back Fields 2 of 10',
            'da' => 'Bagside felt 2 af 10'
            ),
        'back_field_3'=> array(
            'en' => 'Back Fields 3 of 10',
            'da' => 'Bagside felt 3 af 10'
            ),
        'back_field_4'=> array(
            'en' => 'Back Fields 4 of 10',
            'da' => 'Bagside felt 4 af 10'
            ),
        'back_field_5'=> array(
            'en' => 'Back Fields 5 of 10',
            'da' => 'Bagside felt 5 af 10'
            ),
        'back_field_6'=> array(
            'en' => 'Back Fields 6 of 10',
            'da' => 'Bagside felt 6 af 10'
            ),
        'back_field_7'=> array(
            'en' => 'Back Fields 7 of 10',
            'da' => 'Bagside felt 7 af 10'
            ),
        'back_field_8'=> array(
            'en' => 'Back Fields 8 of 10',
            'da' => 'Bagside felt 8 af 10'
            ),
        'back_field_9'=> array(
            'en' => 'Back Fields 9 of 10',
            'da' => 'Bagside felt 9 af 10'
            ),
        'back_field_10'=> array(
            'en' => 'Back Fields 10 of 10',
            'da' => 'Bagside felt 10 af 10'
            ),


        'relevance_info'=> array(
            'en' => 'Relevancy Information',
            'da' => 'Information om relevante lokationer'
            ),
        'total_relevance'=> array(
            'en' => 'Total Relevant Locations',
            'da' => 'Totale antal relevante lokationer'
            ),
        'relevance_field_1'=> array(
            'en' => 'Relevance - Location Info ( 1 of 10 )',
            'da' => 'Lokation 1 af 10'
            ),
        'relevance_field_2'=> array(
            'en' => 'Relevance - Location Info ( 2 of 10 )',
            'da' => 'Lokation 2 af 10'
            ),
        'relevance_field_3'=> array(
            'en' => 'Relevance - Location Info ( 3 of 10 )',
            'da' => 'Lokation 3 af 10'
            ),
        'relevance_field_4'=> array(
            'en' => 'Relevance - Location Info ( 4 of 10 )',
            'da' => 'Lokation 4 af 10'
            ),
        'relevance_field_5'=> array(
            'en' => 'Relevance - Location Info ( 5 of 10 )',
            'da' => 'Lokation 5 af 10'
            ),
        'relevance_field_6'=> array(
            'en' => 'Relevance - Location Info ( 6 of 10 )',
            'da' => 'Lokation 6 af 10'
            ),
        'relevance_field_7'=> array(
            'en' => 'Relevance - Location Info ( 7 of 10 )',
            'da' => 'Lokation 7 af 10'
            ),
        'relevance_field_8'=> array(
            'en' => 'Relevance - Location Info ( 8 of 10 )',
            'da' => 'Lokation 8 af 10'
            ),
        'relevance_field_9'=> array(
            'en' => 'Relevance - Location Info ( 9 of 10 )',
            'da' => 'Lokation 9 af 10'
            ),
        'relevance_field_10'=> array(
            'en' => 'Relevance - Location Info ( 10 of 10 )',
            'da' => 'Lokation 10 af 10'
            ),
        'relevance_address'=> array(
            'en' => 'Relevant Address',
            'da' => 'Relevant adresse'
            ),
        'relevance_text'=> array(
            'en' => 'Relevant Text',
            'da' => 'Relevant tekst'
            ),


        'relevance_date_time_info'=> array(
            'en' => 'Relevance - Date & Time Info',
            'da' => 'Information om relevant dato og tid'
            ),
        'relevance_date_time'=> array(
            'en' => 'Relevant Date &amp; Time',
            'da' => 'Relevant dato og tid'
            ),


        'distribution'=> array(
            'en' => 'Distribution',
            'da' => 'Distribution'
            ),
        'publish'=> array(
            'en' => 'Publish',
            'da' => 'Publish'
            ),
        'pass_link_type'=> array(
            'en' => 'Pass Link Type',
            'da' => 'Pass link type'
            ),
        'disallow_multi_installs'=> array(
            'en' => 'Disallow Mulltiple Installs',
            'da' => 'Bloker for gentagne installationer'
            ),
        'void_passes'=> array(
            'en' => 'Void Passes',
            'da' => 'Gør alle Pass ugyldige'
            ),
        'auto_expire_pass_after'=> array(
            'en' => 'Auto Expire Pass After',
            'da' => 'Automatisk udløb for Pass'
            ),
        'quantity_restriction' => array(
            'en' => 'Quantity Restriction',
            'da' => 'Begrænset antal'
            ),
        'stop_issuing'=> array(
            'en' => 'Stop issuing passes after',
            'da' => 'Stop udstedelse af Pass efter'
            ),
        'date_restriction'=> array(
            'en' => 'Date Restriction',
            'da' => 'Dato begrænsning'
            ),
        'stop_issuing_after'=> array(
            'en' => 'Stop issuing passes after',
            'da' => 'Stop med at udstede Pass efter'
            ),
        'need_password_issue'=> array(
            'en' => 'Need password to issue',
            'da' => 'Behov for kodeord for at udstede'
            ),
        'issue_password'=> array(
            'en' => 'Issue password',
            'da' => 'Kodeord'
            ),
        'single_use_password'=> array(
            'en' => 'Single-use passwords',
            'da' => 'Engangskodeord'
            ),
        'need_password_to_update'=> array(
            'en' => 'Need password to update',
            'da' => 'Behov for kodeord for at Opdater'
            ),
        'update_password'=> array(
            'en' => 'Update password',
            'da' => 'Opdater kodeord'
            ),
        'social_sharing'=> array(
            'en' => 'Social Sharing',
            'da' => 'Social deling'
            ),

        'save_pass_btn'=> array(
            'en' => 'SAVE PASS TEMPLATE',
            'da' => 'GEM PASS SKABELON'
            ),

        );

    static $helpText = array(
        'g01'=> array(
            'en' => 'Set Tooltip text',
            'da' => 'Sæt tool tekst'
            ),
        'g02'=> array(
            'en' => 'Technical or internal name for the pass. Used for internal reference to distinguish passes in this account.',
            'da' => 'Teknisk eller internt navn for Pass skabelon. Anvendes alene som intern reference.'
            ),
        'g03'=> array(
            'en' => 'PassKey is the unique key which identifies the Pass Template. This is used on pass dynamic url to generate passes dynamically.',
            'da' => 'Pass nøgle er en unik nøgle, som identificere Pass skabelonen. Den anvendes til dynamisk Pass URL til at genere Pass dynamisk.'
            ),
        'g04'=> array(
            'en' => 'Select the category depending how and when this pass will come into use. Select &quot;Generic&quot; if its for general use. This setting cannot be edit after creating the template.',
            'da' => 'Vælg type af Pass. Denne paramtere kan ikke ændres efterfølgende.'
            ),
        'g05'=> array(
            'en' => 'Select coupon category',
            'da' => 'Vælg kuponkategori'
            ),
        'g06'=> array(
            'en' => 'Please select type of transit. Required for boarding passes.',
            'da' => 'Vælg type af transit. Påkrævet for boarding pass.'
            ),
        'g07'=> array(
            'en' => 'The organization name is displayed on the lock screen when your pass is relevant and by apps such as Mail which act as a conduit for passes. Choose a name that users will recognize and associate with your organization or company.',
            'da' => 'Organisationsnavnet vises på låsskærmen, når dit Pass er relevant.'
            ),
        'g08'=> array(
            'en' => 'The description lets VoiceOver make your pass accessible to blind and low vision users. The value for the description key in the pass specifies the description. The description should start with a high-level term such as ',
            'da' => 'Beskrivelsen er den tekst, som fremgår af mCoupons app. Den kan samtidig anvendes til VoiceOver.'
            ),
        'a01'=> array(
            'en' => 'The icon is displayed when a pass is shown on the lock screen, notifications, mail when showing a pass attached to an email. The expected dimensions are the same as a small icon 58x58 pixels, as described by Apple specifications. A shine effect is automatically applied to the icon for you. By default it is a yellow star icon if none is uploaded. ',
            'da' => 'Ikonet vises på låsskærmen.'
            ),
        'a02'=> array(
            'en' => 'The logo image is displayed in the top left corner of the pass, next to the logo text. The allotted space is 320x100 pixels. In most cases it should be narrower. To engrave the logo so that it matches the logo text, add a black drop shadow with a 1 pixel y offset, a 1 pixel blur, and a 35% opacity.',
            'da' => 'Logo billedet vises i øverste venstre hjørne af Pass.'
            ),
        'a03'=> array(
            'en' => 'This option adds logo text value next to your logo. Useful for square logos, not rectangular logos.',
            'da' => 'Denne muligh tilføjer en logo tekst værdi ved siden af logoet. Brugbart til kvadratisk logoer - ikke rektangulære'
            ),
        'a04'=> array(
            'en' => 'An additional image displayed on the front of the pass. For example, on a membership card, the thumbnail could be used to a picture of the cardholder.',
            'da' => 'Et ekstra billede, som vises på forsiden af Pass. Hvis det er et medlemskort, så kan det være et billede af kortholderen.'
            ),
        'a05'=> array(
            'en' => 'Footer images appear near the barcode.',
            'da' => 'Footer billedet vises tæt på stregkoden.'
            ),
        'a06'=> array(
            'en' => 'The strip image is displayed behind the primary fields. The allotted space is 624x168 pixels for event tickets, 624x220 pixels for other pass styles with a square barcode, and 624x246 pixels in all other cases.',
            'da' => 'Strip billedet vises bag hovedtekstten. Den tilladte størrelse er 624x168 pixels for billetter, 624x220 pixels for andre Pass med en kvadratisk stregkode, og 624x246 i all andre tilfælde.'
            ),
        'a07'=> array(
            'en' => 'The strip image is displayed behind the primary fields. The allotted space is 624x168 pixels for event tickets, 624x220 pixels for other pass styles with a square barcode, and 624x246 pixels in all other cases.',
            'da' => 'Strip billedet vises bag hovedtekstten. Den tilladte størrelse er 624x168 pixels for billetter, 624x220 pixels for andre Pass med en kvadratisk stregkode, og 624x246 i all andre tilfælde.'
            ),
        'a08'=> array(
            'en' => 'The strip image is displayed behind the primary fields. The allotted space is 624x168 pixels for event tickets, 624x220 pixels for other pass styles with a square barcode, and 624x246 pixels in all other cases.',
            'da' => 'Strip billedet vises bag hovedtekstten. Den tilladte størrelse er 624x168 pixels for billetter, 624x220 pixels for andre Pass med en kvadratisk stregkode, og 624x246 i all andre tilfælde.'
            ),
        'a09'=> array(
            'en' => 'An additional image displayed on the front of the pass. For example, on a membership card, the thumbnail could be used to a picture of the cardholder.',
            'da' => 'Et ekstra billede, som vises på forsiden af Pass. Hvis det er et medlemskort, så kan det være et billede af kortholderen.'
            ),
        'a10'=> array(
            'en' => 'The image displayed as the background of the front of the pass.',
            'da' => 'Billedet vises som baggrund på forsiden af Pass.'
            ),
        'a11'=> array(
            'en' => 'Set pass background color.',
            'da' => 'Baggrundsfarve'
            ),
        'a12'=> array(
            'en' => 'Set field labels font color.',
            'da' => 'Font farve for label felter'
            ),
        'a13'=> array(
            'en' => 'Set field values font color.',
            'da' => 'Font farve for værdi felter'
            ),
        'data_01'=> array(
            'en' => 'This option can be selected to send barcode in a pass. This will allow you to set different options for sending barcode in the pass.',
            'da' => 'Denne mulighed kan vælges for at sende stregkode i et Pass. Det giver mulighed for at sætte forskellige muligheder for at sende stregkoden i Pass.'
            ),
        'data_02'=> array(
            'en' => 'Type of barcode that is supported by the device which scans this barcode.',
            'da' => 'Type af stregkode, som understøttes af den enhed der scanner denne stregkode.'
            ),
        'data_03'=> array(
            'en' => 'Barcode value remains same for all passes if &quot;Fixed&quot; is selected. If &quot;Dynamic&quot; is selected, barcode value would change according to what the API or CSV upload dictate the customized value to be.  If there is no API or CSV, then the barcode will default to the &quot;Fixed&quot; value. ',
            'da' => 'Stregkode værdien er den samme for alle, hvis &quot;Fast&quot; er valgt. Hvis &quot;Dynamisk&quot; er valgt, vil stregkoden ændre sig iht. hvad API eller CSV fil dikterer at den skræddersyede værdi skal være. HVis der ikke er nogen API eller CSV, så vil stregkoden som defalt anvende &quot;Fast&quot; værdi. '
            ),
        'data_04'=> array(
            'en' => '&quot;Fixed Barcode Value&quot; is considered as Barcode value for all the passes generated using this template. &quot;Default Barcode Value&quot; is considered as Default in the case where Dynamic value is not generated or missing from the API request or in CSV.',
            'da' => '&quot;Fast stregkodeværdi&quot; anvendes som stregkodeværdi for alle udstedte Pass baseret på denne skabelon. &quot;Default stregkodeværdi&quot; anvendes som default i tilfælde af at den dynamiske værdi ikke er genereret eller manger fra API eller i CSV.' 
            ),
        'data_05'=> array(
            'en' => 'Technique to generate barcode values.',
            'da' => 'Teknik, som anvendes til at generere stregkode værdier'
            ),
        'data_06'=> array(
            'en' => 'Barcode values are dynamically auto generated based on this setting.',
            'da' => 'Stregkode værdier auto-genereres dynamisk basseret på denne indstilling.'
            ),
        'data_07'=> array(
            'en' => 'Text encoding that is used to convert the message from the string representation to a data representation to render the barcode.',
            'da' => 'Tekst encoding, som anvendes til at konvertere beskeden fra en string repræsentation til en data repræsentation.'
            ),
        'data_08'=> array(
            'en' => 'Text displayed near the barcode. A human-readable version. This can be default or can be dynamically inserted using API.',
            'da' => 'Tekst som vises nær stregkoden. En menneskelig-læsbar version. Den kan være fast eller kan kan indsættes dynamisk via API.'
            ),
        'data_09'=> array(
            'en' => '&quot;Fixed Text&quot; is considered as Alternate text for all the passes generated using this template.&quot;Default Text&quot; is considered as Default in the case where Dynamic Text is not generated or missing from the API request or in the CSV.',
            'da' => '&quot;Fast tekst&quot; betragtes som en alternativ tekst for alle Pass, der genereres på baggrund af denne skabelon. &quot;Default Tekst&quot; betragtes som default i tilfælde af at den dynamiske tekst ikke er genereret eller mangler i API eller CSV.'
            ),
        'data_10'=> array(
            'en' => '&quot;Fixed Text&quot; is considered as Alternate text for all the passes generated using this template.&quot;Default Text&quot; is considered as Default in the case where Dynamic Text is not generated or missing from the API request or in the CSV.',
            'da' => '&quot;Fast tekst&quot; betragtes som en alternativ tekst for alle Pass, der genereres på baggrund af denne skabelon. &quot;Default Tekst&quot; betragtes som default i tilfælde af at den dynamiske tekst ikke er genereret eller mangler i API eller CSV.'
            ),
        'data_11'=> array(
            'en' => '&quot;Fixed Text&quot; is considered as Alternate text for all the passes generated using this template.&quot;Default Text&quot; is considered as Default in the case where Dynamic Text is not generated or missing from the API request or in the CSV.',
            'da' => '&quot;Fast tekst&quot; betragtes som en alternativ tekst for alle Pass, der genereres på baggrund af denne skabelon. &quot;Default Tekst&quot; betragtes som default i tilfælde af at den dynamiske tekst ikke er genereret eller mangler i API eller CSV.'
            ),


        'label_txt_field'=> array(
            'en' => 'Label text for the field.',
            'da' => 'Label tekst'
            ),
        'dynamic_status'=> array(
            'en' => 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.',
            'da' => 'Hvis denne option er valgt forventes det at denne label er dynamisk. Hvis den dynamiske label mangler, så vil label defineret i denne skabelon blive anvendt. Dynamiske variable accepteres ikke med mindre dette felt er markeret.'
            ),
        'type_select'=> array(
            'en' => 'Select if the field value is a special type like Date, Currency, Time, Number to set it to proper format.',
            'da' => 'Vælg denne felt værdi, hvis feltværdi er en special type, f.eks. dato, valuta, tid eller tal.'
            ),
        'value_of_field'=> array(
            'en' => 'Value of the field.',
            'da' => 'Feltværdi'
            ),
        'date_style_field'=> array(
            'en' => 'Select the date style for the field.',
            'da' => 'Vælg datoformat'
            ),
        'time_style_field'=> array(
            'en' => 'Select the time style for the field.',
            'da' => 'Vælg tidsformat'
            ),
        'number_style_field'=> array(
            'en' => 'Select the number style for the field.',
            'da' => 'Vælg talformat'
            ),
        'currency_code_field'=> array(
            'en' => "Currency code for the field's value.",
            'da' => 'Valutakode'
            ),
        'align_field'=> array(
            'en' => '1. Left - Aligns the text to the left in a given space.<br>
                     2. Center - Aligns the text to the center in a given space.<br>
                     3. Right - Aligns the text to the right in a given space.<br>
                     4. Natural - Aligns the text appropriately based on its script direction.',
            'da' => '1. Venstre - Aligner tekst til venstre.<br>
                     2. Centrer - Aligner teksten i midten.<br>
                     3. Højre - Aligner teksten til højre.<br>
                     4. Naturligt - Aligner teksten naturligt.',

            ),
        'value_txt_for_field'=> array(
            'en' => 'Value text for the field.',
            'da' => 'Feltværdi'
            ),

        'bk_01'=> array(
            'en' => 'Label text for the field.',
            'da' => 'Labelt tekst'
            ),
        'bk_02'=> array(
            'en' => 'Value text for the field.',
            'da' => 'Værdi tekst'
            ),
        
        'rel_01'=> array(
            'en' => 'Relevant location for the pass. Start typing the address and select it from the suggestion dropdown menu.',
            'da' => 'Relevant lokation for Pass. Start med at skrive og vælg ud fra forslag. Feltet skal vise en grøn farve før det virker.'
            ),
        'rel_02'=> array(
            'en' => 'Set the relevant text that appears on the lock screen when the passholder is near the relevant location.',
            'da' => 'Den relevant tekst, som kommer frem på skærmen når brugeren er tæt på den relevante lokation.'
            ),
        'rel_03'=> array(
            'en' => 'If this option is selected then this label is expected to be dynamic. If the dynamic label is missing then the label set in this template is taken as default.  No dynamic variable will be accepted unless this is checked.',
            'da' => 'Hvis denne option er valgt forventes det at denne label er dynamisk. Hvis den dynamiske label mangler, så vil label defineret i denne skabelon blive anvendt. Dynamiske variable accepteres ikke med mindre dette felt er markeret.'
            ),

        'dist_01'=> array(
            'en' => 'Check this box to publish your pass',
            'da' => 'Marker dette felt for at publisere din kupon i mCoupons app eller andre apps.'
            ),
        'dist_02'=> array(
            'en' => 'Check this box to activate the pass links. Unchecking will prevenet any more passes being distributed.',
            'da' => 'NOTE: Understøttes ikke i mCoupons BETA version.'
            ),
        'dist_03'=> array(
            'en' => 'You can configure your pass to allow only one install per customer. This option is not appropriate for tickets, storecards or membership passes where a user may ligitimately wish to install more than one pass',
            'da' => 'NOTE: Understøttes ikke i mCoupons BETA version.'
            ),
        'dist_04'=> array(
            'en' => 'Selecting this option will deliver passes with a greyed out barcode and an expiry message.  Note that this will affect only iOS7 passes.',
            'da' => 'NOTE: Understøttes ikke i mCoupons BETA version.'
            ),
        'dist_05'=> array(
            'en' => 'After the expiry date has passed, the barcode will be greyed out and an expiry message will be appear under the barcode.  Note that this will only affect iOS7 passes.',
            'da' => 'NOTE: Understøttes ikke i mCoupons BETA version.'
            ),
        'dist_06'=> array(
            'en' => 'You can choose if you wish to limit the number of passes',
            'da' => 'Du kan vælge at begrænse antallet af Pass.'
            ),
        'dist_07'=> array(
            'en' => 'Enter the total number of passes to be distributed',
            'da' => 'Indtast det totale antal Pass, som må udstedes.'
            ),
        'dist_08'=> array(
            'en' => 'You can choose if you wish to limit the availability of passes',
            'da' => 'Du kan vælge at begrænse tilgængeligheden af Pass.'
            ),
        'dist_09'=> array(
            'en' => "Enter the date and time after which passes can no longer be issued. This field uses the time zone for the pass which can be set in the 'Pass Settings' section",
            'da' => 'Indtast dato og tid, hvorfra Pass ikke længere skal udstedes.'
            ),
        'dist_10'=>array(
            'en' => 'You can choose to restrict the pass creation page with a Password',
            'da' => 'Du kan vælge at begrænse Pass med et kodeord.'
            ),
        'dist_11'=>array(
            'en' => 'Enter a password to be supplied before a pass can be issued',
            'da' => 'Indtast et kodeord, der skal indtastes for at udstede et Pass.'
            ),
        'dist_12'=>array(
            'en' => 'Enter a single used password to be supplied before a pass can be issued',
            'da' => 'Indtast et engangskodeord, som skal indtastes for at udstede Pass.'
            ),
        'dist_13'=>array(
            'en' => 'You can choose to restrict the pass update page with a Password',
            'da' => 'Du kan vælge at begrænse PAss med et kodeord.'
            ),
        'dist_14'=>array(
            'en' => 'Enter a password to be supplied before a pass can be updated',
            'da' => 'Indtast kodeord, som skal indtastes for at opdate Pass.'
            ),
        'dist_15'=>array(
            'en' => 'Enable the sharing sidebar on the pass.is distribution page',
            'da' => 'Aktivere dele sidebar på Pass.'
            )
        
        );

    public function _t( $key , $arrayName ){
        $translationArray = self::getTranslationArray($arrayName);
        if(array_key_exists($key , $translationArray ) ){
            return $translationArray[$key][ICL_LANGUAGE_CODE];
        }
    }

    static function replcSpecChar($string){
      $string = ereg_replace("æ", "&aelig;", $string);
      $string = ereg_replace("ø", "&oslash;", $string);
      $string = ereg_replace("å", "&aring;", $string);
      $string = ereg_replace("Æ", "&AElig;", $string);
      $string = ereg_replace("Ø", "&Oslash;", $string);
      $string = ereg_replace("Å", "&Aring;", $string);
        
      return $string;
    }

    public static function getTranslationArray($arrayName){
        $translationArray = array();
        switch($arrayName){
            case 'tabs': $translationArray = self::$tabsText; break;
            case 'validate': $translationArray = self::$validationText; break;
            case 'msg': $translationArray = self::$messageText; break;
            case 'heading': $translationArray = self::$headingText; break;
            case 'form': $translationArray = self::$formFields; break;
            case 'hlp': $translationArray = self::$helpText; break;
            
        }
        return $translationArray;
    }

    

}

class Data{
   
   static $no4 = array(0=>'0', 1=>'1',2=>'2',3=>'3',4=>'4');
   
   static $no10 = array(
        0=>'0', 
        1=>'1',
        2=>'2',
        3=>'3',
        4=>'4',
        5=>'5',
        6=>'6',
        7=>'7',
        8=>'8',
        9=>'9',
        10=>'10',
        );

   static $category = array(
            'Coupon' => 'Coupon',
            'Generic' => 'Generic',
            'Boarding Pass' => 'Boarding Pass',
            'Event Ticket' => 'Event Ticket',
            'Store Card' => 'Store Card'
        );

   static $places = array(
        "22" => "None",
        "1" => "Arts & Crafts",
        "2" => "Books & Magazines",
        "3" => "Children & Babies",
        "4" => "Clothing",
        "5" => "Department Store",
        "6" => "Electronics",
        "7" => "Entertainment",
        "8" => "Furniture",
        "9" => "Groceries",
        "10" => "Health & Beauty",
        "11" => "Home & Garden",
        "12" => "Jewelry",
        "13" => "Office Supply",
        "14" => "Outlet Stores",
        "15" => "Pet Supplies",
        "16" => "Restaurants",
        "17" => "Shoes",
        "18" => "Sporting Goods",
        "19" => "Tools & Automotive",
        "20" => "Toys & Games",
        "21" => "Travel & Transport",
    );



   static $boardingPassTransit = array(
        'PKTransitTypeAir' => 'Air',
        'PKTransitTypeBus' => 'Bus',
        'PKTransitTypeTrain' => 'Train',
        'PKTransitTypeBoat' => 'Boat',
        'PKTransitTypeGeneric' => 'Generic'
        );

   static $appearance_eventTicketStatus = array(
        'Layout 1: Strip'=> 'Layout 1: Strip',
        'Layout 2: Background/Thumbnail' => 'Layout 2: Background/Thumbnail'
    );

   static $datasetting_couponBarcodeStatus = array(
        'show' => 'Show Barcode on the Pass',
        'hide' => 'Hide Barcode on the Pass'
    );

   static $couponBarcode = array(
        'PKBarcodeFormatQR'=>'QRCode',
        'PKBarcodeFormatAztec'=>'Aztec',
        'PKBarcodeFormatPDF417'=>'PDF417',
        );

   static $couponBarcodeValue = array(
        'Static' => 'Fixed Value',
        'Dynamic'=>'Dynamic Value',
    );

    static $couponBarcodeValueSourc = array(
        'autogen'=>'Auto-Generate',
        'Dynamic'=>'Dynamic',
    );

    static $couponAutoGenerateValueType = array(
        'type'=>'-Select Type-',
        'Numeric'=>'Type: Numeric Value',
        'Alphabet'=>'Type: Alphabet Value',
        'Alphanumeric'=>'Type: Alphanumeric Value',
        );

    static $couponAutoGenerateValueLength = array(
        "length"=>"-Select Length-",
        "4"=>"Length: 4 Chars",
        "5"=>"Length: 5 Chars",
        "6"=>"Length: 6 Chars",
        "7"=>"Length: 7 Chars",
        "8"=>"Length: 8 Chars",
        "9"=>"Length: 9 Chars",
        "10"=>"Length: 10 Chars",
        "11"=>"Length: 11 Chars",
        "12"=>"Length: 12 Chars",
        "13"=>"Length: 13 Chars",
        "14"=>"Length: 14 Chars",
        "15"=>"Length: 15 Chars"
    );


    static $datasetting_couponBarcodeEncoding = array(
        'encoding' => 'ISO-8859-1'
        );

    static $barcodeAlternateText = array(
        'same'=>'Same as Barcode Value',
        'static'=>'Fixed Text',
        'dynamic'=>'Dynamic Text',
        );

    static $fieldValueType = array(
        'text'=>'Text',
        'datentime'=>'Date and Time',
        'number'=>'Number',
        'currency'=>'Currency',
    );    

    static $dateFormat = array(
        'PKDateStyleShort' => 'Short - (Ex: 01/22/14)',
        'PKDateStyleMedium' => 'Medium - (Ex: Jan 22, 2014)',
        'PKDateStyleLong' => 'Long - (Ex: January 22, 2014)',
        'PKDateStyleFull' => 'Full - (Ex: Wednesday, January 22, 2014)',
        );

    static $dateFormat2 = array(
        'PKDateStyleShort' => 'Short - (Ex: 5:08 AM)',
        'PKDateStyleMedium' => 'Medium - (Ex: 5:08:37 AM)',
        'PKDateStyleLong' => 'Long - (Ex: 5:08:37 AM EDT)',
        'PKDateStyleFull' => 'Full - (Ex: 5:08:37 AM Eastern Daylight Time)',
        );


    static $timeFormat = array(
        'PKDateStyleShort' => 'Short - (Ex: 5:08 AM)',
        'PKDateStyleMedium' => 'Medium - (Ex: 5:08:37 AM)',
        'PKDateStyleLong' => 'Long - (Ex: 5:08:37 AM EDT)',
        'PKDateStyleFull' => 'Full - (Ex: 5:08:37 AM Eastern Daylight Time)',
        );

    static $numberFormat = array(
        'PKNumberStyleDecimal' => 'Decimal - (Ex: 1234567=1,234,567)',
        'PKNumberStylePercent' => 'Percent - (Ex: 0.5=50%, 1=100%)',
        'PKNumberStyleScientific' => 'Scientific - (Ex: 123456789=12345678E8)'
        );
    
    static $alignments = array(
        'PKTextAlignmentLeft' => 'Left',
        'PKTextAlignmentCenter' => 'Center',
        'PKTextAlignmentRight' => 'Right',
        'PKTextAlignmentNatural' => 'Natural',
        );

    static $passLinkType = array(
        "public"=>"public",
        "private"=>"private",
    );

    static $quantityRestriction  = array(
        "unlimited"=>"Unlimited Quantity",
        "limited"=>"Limited Quantity",
    );

    static $dateRestriction  = array(
        "permanent"=>"Pass is permanently available",
        "restricted"=>"Do not issue passes after a date"
    );

    static $passwordIssueStatus = array(
        "nopass"=>"No password Required ",
        "fixedpass"=>"Fixed password ",
        "singleusepass"=>"Single-use password"
    );

    static $passwordUpdateStatus = array(
        "nopass"=>"No password Required ",
        "fixedpass"=>"Fixed password "
    );

    static $currencyCodes = array(
        "DKK" => "DKK",
        "USD" => "USD",
                                                                                                                    "AED" => "AED",
                                                                                                                    "AFN" => "AFN",
                                                                                                                    "ALL" => "ALL",
                                                                                                                    "AMD" => "AMD",
                                                                                                                    "ANG" => "ANG",
                                                                                                                    "AON" => "AON",
                                                                                                                    "ARS" => "ARS",
                                                                                                                    "AUD" => "AUD",
                                                                                                                    "AWG" => "AWG",
                                                                                                                    "AZM" => "AZM",
                                                                                                                    "BAD" => "BAD",
                                                                                                                    "BBD" => "BBD",
                                                                                                                    "BDT" => "BDT",
                                                                                                                    "BGL" => "BGL",
                                                                                                                    "BHD" => "BHD",
                                                                                                                    "BIF" => "BIF",
                                                                                                                    "BMD" => "BMD",
                                                                                                                    "BND" => "BND",
                                                                                                                    "BOB" => "BOB",
                                                                                                                    "BRL" => "BRL",
                                                                                                                    "BSD" => "BSD",
                                                                                                                    "BTN" => "BTN",
                                                                                                                    "BWP" => "BWP",
                                                                                                                    "BYR" => "BYR",
                                                                                                                    "BZD" => "BZD",
                                                                                                                    "CAD" => "CAD",
                                                                                                                    "CDF" => "CDF",
                                                                                                                    "CHF" => "CHF",
                                                                                                                    "CLP" => "CLP",
                                                                                                                    "CNY" => "CNY",
                                                                                                                    "COP" => "COP",
                                                                                                                    "CRC" => "CRC",
                                                                                                                    "CUP" => "CUP",
                                                                                                                    "CVE" => "CVE",
                                                                                                                    "CYP" => "CYP",
                                                                                                                    "CZK" => "CZK",
                                                                                                                    "DJF" => "DJF",
                                                                                                                    "DOP" => "DOP",
                                                                                                                    "DZD" => "DZD",
                                                                                                                    "ECS" => "ECS",
                                                                                                                    "EEK" => "EEK",
                                                                                                                    "EGP" => "EGP",
                                                                                                                    "ERN" => "ERN",
                                                                                                                    "ETB" => "ETB",
                                                                                                                    "EUR" => "EUR",
                                                                                                                    "FJD" => "FJD",
                                                                                                                    "FKP" => "FKP",
                                                                                                                    "GBP" => "GBP",
                                                                                                                    "GHS" => "GHS",
                                                                                                                    "GIP" => "GIP",
                                                                                                                    "GMD" => "GMD",
                                                                                                                    "GNF" => "GNF",
                                                                                                                    "GTQ" => "GTQ",
                                                                                                                    "GYD" => "GYD",
                                                                                                                    "HKD" => "HKD",
                                                                                                                    "HNL" => "HNL",
                                                                                                                    "HRK" => "HRK",
                                                                                                                    "HTG" => "HTG",
                                                                                                                    "HUF" => "HUF",
                                                                                                                    "IDR" => "IDR",
                                                                                                                    "ILS" => "ILS",
                                                                                                                    "INR" => "INR",
                                                                                                                    "IQD" => "IQD",
                                                                                                                    "IRR" => "IRR",
                                                                                                                    "ISK" => "ISK",
                                                                                                                    "JEP" => "JEP",
                                                                                                                    "JMD" => "JMD",
                                                                                                                    "JOD" => "JOD",
                                                                                                                    "JPY" => "JPY",
                                                                                                                    "KES" => "KES",
                                                                                                                    "KGS" => "KGS",
                                                                                                                    "KHR" => "KHR",
                                                                                                                    "KMF" => "KMF",
                                                                                                                    "KPW" => "KPW",
                                                                                                                    "KRW" => "KRW",
                                                                                                                    "KWD" => "KWD",
                                                                                                                    "KYD" => "KYD",
                                                                                                                    "KZT" => "KZT",
                                                                                                                    "LAK" => "LAK",
                                                                                                                    "LBP" => "LBP",
                                                                                                                    "LKR" => "LKR",
                                                                                                                    "LRD" => "LRD",
                                                                                                                    "LSL" => "LSL",
                                                                                                                    "LTL" => "LTL",
                                                                                                                    "LVL" => "LVL",
                                                                                                                    "LYD" => "LYD",
                                                                                                                    "MAD" => "MAD",
                                                                                                                    "MDL" => "MDL",
                                                                                                                    "MGF" => "MGF",
                                                                                                                    "MKD" => "MKD",
                                                                                                                    "MMK" => "MMK",
                                                                                                                    "MNT" => "MNT",
                                                                                                                    "MOP" => "MOP",
                                                                                                                    "MRO" => "MRO",
                                                                                                                    "MUR" => "MUR",
                                                                                                                    "MVR" => "MVR",
                                                                                                                    "MWK" => "MWK",
                                                                                                                    "MXN" => "MXN",
                                                                                                                    "MYR" => "MYR",
                                                                                                                    "MZM" => "MZM",
                                                                                                                    "NAD" => "NAD",
                                                                                                                    "NGN" => "NGN",
                                                                                                                    "NIO" => "NIO",
                                                                                                                    "NOK" => "NOK",
                                                                                                                    "NPR" => "NPR",
                                                                                                                    "NZD" => "NZD",
                                                                                                                    "OMR" => "OMR",
                                                                                                                    "PAB" => "PAB",
                                                                                                                    "PEN" => "PEN",
                                                                                                                    "PGK" => "PGK",
                                                                                                                    "PHP" => "PHP",
                                                                                                                    "PKR" => "PKR",
                                                                                                                    "PLN" => "PLN",
                                                                                                                    "PYG" => "PYG",
                                                                                                                    "QAR" => "QAR",
                                                                                                                    "RON" => "RON",
                                                                                                                    "RSD" => "RSD",
                                                                                                                    "RUB" => "RUB",
                                                                                                                    "RWF" => "RWF",
                                                                                                                    "SAR" => "SAR",
                                                                                                                    "SBD" => "SBD",
                                                                                                                    "SCR" => "SCR",
                                                                                                                    "SDG" => "SDG",
                                                                                                                    "SEK" => "SEK",
                                                                                                                    "SGD" => "SGD",
                                                                                                                    "SHP" => "SHP",
                                                                                                                    "SLL" => "SLL",
                                                                                                                    "SOS" => "SOS",
                                                                                                                    "SRD" => "SRD",
                                                                                                                    "SSP" => "SSP",
                                                                                                                    "STD" => "STD",
                                                                                                                    "SVC" => "SVC",
                                                                                                                    "SYP" => "SYP",
                                                                                                                    "SZL" => "SZL",
                                                                                                                    "THB" => "THB",
                                                                                                                    "TJS" => "TJS",
                                                                                                                    "TMT" => "TMT",
                                                                                                                    "TND" => "TND",
                                                                                                                    "TOP" => "TOP",
                                                                                                                    "TRY" => "TRY",
                                                                                                                    "TTD" => "TTD",
                                                                                                                    "TWD" => "TWD",
                                                                                                                    "TZS" => "TZS",
                                                                                                                    "UAH" => "UAH",
                                                                                                                    "UGX" => "UGX",
                                                                                                                    "USD" => "USD",
                                                                                                                    "UYU" => "UYU",
                                                                                                                    "UZS" => "UZS",
                                                                                                                    "VEF" => "VEF",
                                                                                                                    "VND" => "VND",
                                                                                                                    "VUV" => "VUV",
                                                                                                                    "XAF" => "XAF",
                                                                                                                    "XCD" => "XCD",
                                                                                                                    "XOF" => "XOF",
                                                                                                                    "XPF" => "XPF",
                                                                                                                    "YER" => "YER",
                                                                                                                    "ZAR" => "ZAR",
                                                                                                                    "ZMK" => "ZMK",
                                                                                                                    "ZWD" => "ZWD"        
        );


    static $timeZones = array(

    "0"=>"- Time zone -",
    "447__+05:00"=>"(GMT+05:00) Islamabad",
    "471__+01:00"=>"(GMT+01:00) Algiers",
    "418__+02:00"=>"(GMT+02:00) Amsterdam",
    "473__+02:00"=>"(GMT+02:00) Andorra",
    "295__+00:00"=>"(GMT-00:00) Azores",
    "419__+02:00"=>"(GMT+02:00) Belgrade",
    "420__+02:00"=>"(GMT+02:00) Berlin",
    "421__+02:00"=>"(GMT+02:00) Bern",
    "422__+02:00"=>"(GMT+02:00) Bratislava",
    "423__+02:00"=>"(GMT+02:00) Brussels",
    "424__+02:00"=>"(GMT+02:00) Budapest",
    "129__-01:00"=>"(GMT-01:00) Cape Verde Is.",
    "425__+02:00"=>"(GMT+02:00) Copenhagen",
    "485__+01:00"=>"(GMT+01:00) Libreville",
    "426__+02:00"=>"(GMT+02:00) Ljubljana",
    "427__+02:00"=>"(GMT+02:00) Madrid",
    "479__+02:00"=>"(GMT+02:00) Olso",
    "156__+02:00"=>"(GMT+02:00) Paris",
    "301__+02:00"=>"(GMT+02:00) Prague",
    "428__+02:00"=>"(GMT+02:00) Rome",
    "429__+02:00"=>"(GMT+02:00) Sarajevo",
    "430__+02:00"=>"(GMT+02:00) Skopje",
    "431__+02:00"=>"(GMT+02:00) Stockholm",
    "6__+02:00"=>"(GMT+02:00) Tirane",
    "133__+02:00"=>"(GMT+02:00) Vienna",
    "432__+02:00"=>"(GMT+02:00) Warsaw",
    "270__+01:00"=>"(GMT+01:00) West Central Africa",
    "49__+02:00"=>"(GMT+02:00) Zagreb",
    "484__+03:00"=>"(GMT+03:00) Amman",
    "433__+03:00"=>"(GMT+03:00) Athens",
    "300__+03:00"=>"(GMT+03:00) Bucharest",
    "142__+02:00"=>"(GMT+02:00) Cairo",
    "434__+02:00"=>"(GMT+02:00) Harare",
    "435__+03:00"=>"(GMT+03:00) Helsinki",
    "436__+03:00"=>"(GMT+03:00) Istanbul",
    "189__+03:00"=>"(GMT+03:00) Jerusalem",
    "437__+03:00"=>"(GMT+03:00) Kyiv",
    "62__-02:00"=>"(GMT-02:00) Mid-Atlantic",
    "349__+03:00"=>"(GMT+03:00) Minsk",
    "403__+02:00"=>"(GMT+02:00) Pretoria",
    "438__+03:00"=>"(GMT+03:00) Riga",
    "439__+03:00"=>"(GMT+03:00) Sofia",
    "440__+03:00"=>"(GMT+03:00) Tallinn",
    "149__+03:00"=>"(GMT+03:00) Vilnius",
    "487__+03:00"=>"(GMT+03:00) Aden",
    "193__+03:00"=>"(GMT+03:00) Baghdad",
    "69__-02:00"=>"(GMT-02:00) Brasilia",
    "413__-03:00"=>"(GMT-03:00) Buenos Aires",
    "480__+03:00"=>"(GMT+03:00) Doha",
    "20__-03:00"=>"(GMT-03:00) Georgetown",
    "165__-02:00"=>"(GMT-02:00) Greenland",
    "441__+03:00"=>"(GMT+03:00) Kuwait",
    "442__+04:00"=>"(GMT+04:00) Moscow",
    "201__+03:00"=>"(GMT+03:00) Nairobi",
    "319__+03:00"=>"(GMT+03:00) Riyadh",
    "289__-02:00"=>"(GMT-02:00) Saint Pierre et Miquelon",
    "83__-02:30"=>"(GMT-02:30) Newfoundland",
    "194__+04:30"=>"(GMT+04:30) Tehran",
    "444__+04:00"=>"(GMT+04:00) Abu Dhabi",
    "84__-03:00"=>"(GMT-03:00) Atlantic Time (Canada)",
    "445__+04:00"=>"(GMT+04:00) Baku",
    "472__-04:00"=>"(GMT-04:00) Barbados",
    "489__-03:00"=>"(GMT-03:00) Hamilton",
    "394__-04:00"=>"(GMT-04:00) La Paz",
    "279__+04:00"=>"(GMT+04:00) Muscat",
    "482__-04:00"=>"(GMT-04:00) San Juan",
    "118__-03:00"=>"(GMT-03:00) Santiago",
    "486__-04:00"=>"(GMT-04:00) Santo Domingo",
    "443__+04:00"=>"(GMT+04:00) St. Petersburg",
    "446__+04:00"=>"(GMT+04:00) Tbilisi",
    "303__+04:00"=>"(GMT+04:00) Volgograd",
    "160__+04:00"=>"(GMT+04:00) Yerevan",
    "412__-04:30"=>"(GMT-04:30) Caracas",
    "3__+04:30"=>"(GMT+04:30) Kabul",
    "410__-05:00"=>"(GMT-05:00) Bogota",
    "474__-04:00"=>"(GMT-04:00) Eastern Time (Canada)",
    "362__-04:00"=>"(GMT-04:00) Eastern Time (US & Canada)",
    "340__+05:00"=>"(GMT+05:00) Iles Kerguelen",
    "366__-04:00"=>"(GMT-04:00) Indiana (East)",
    "447__+05:00"=>"(GMT+05:00) Islamabad",
    "448__+05:00"=>"(GMT+05:00) Karachi",
    "481__-05:00"=>"(GMT-05:00) Kingston",
    "411__-05:00"=>"(GMT-05:00) Lima",
    "488__-04:00"=>"(GMT-04:00) Nassau",
    "126__-05:00"=>"(GMT-05:00) Quito",
    "287__+05:00"=>"(GMT+05:00) Tashkent",
    "449__+05:30"=>"(GMT+05:30) Chennai",
    "450__+05:30"=>"(GMT+05:30) Kolkata",
    "451__+05:30"=>"(GMT+05:30) Mumbai",
    "191__+05:30"=>"(GMT+05:30) New Delhi",
    "222__+05:30"=>"(GMT+05:30) Sri Jayawardenepura",
    "274__+05:45"=>"(GMT+05:45) Kathmandu",
    "453__+06:00"=>"(GMT+06:00) Astana",
    "271__-06:00"=>"(GMT-06:00) Central America",
    "475__-05:00"=>"(GMT-05:00) Central Time (Canada)",
    "372__-05:00"=>"(GMT-05:00) Central Time (US & Canada)",
    "51__+06:00"=>"(GMT+06:00) Dhaka",
    "408__-05:00"=>"(GMT-05:00) Guadalajara",
    "409__-05:00"=>"(GMT-05:00) Mexico City",
    "252__-05:00"=>"(GMT-06:00) Monterrey",
    "100__-06:00"=>"(GMT-06:00) Saskatchewan",
    "306__+06:00"=>"(GMT+06:00) Yekaterinburg",
    "239__+06:30"=>"(GMT+06:30) Rangoon",
    "452__+07:00"=>"(GMT+07:00) Almaty",
    "381__-06:00"=>"(GMT-06:00) Arizona",
    "454__+07:00"=>"(GMT+07:00) Bangkok",
    "406__-06:00"=>"(GMT-06:00) Chihuahua",
    "455__+07:00"=>"(GMT+07:00) Hanoi",
    "342__+07:00"=>"(GMT+07:00) Jakarta",
    "407__-06:00"=>"(GMT-06:00) La Paz",
    "258__-06:00"=>"(GMT-06:00) Mazatlan",
    "476__-06:00"=>"(GMT-06:00) Mountain Time (Canada)",
    "378__-06:00"=>"(GMT-06:00) Mountain Time (US & Canada)",
    "308__+07:00"=>"(GMT+07:00) Novosibirsk",
    "203__+07:00"=>"(GMT+07:00) Phnom Penh",
    "456__+08:00"=>"(GMT+08:00) Beijing",
    "457__+08:00"=>"(GMT+08:00) Chongqing",
    "458__+08:00"=>"(GMT+08:00) Hong Kong",
    "310__+08:00"=>"(GMT+08:00) Krasnoyarsk",
    "460__+08:00"=>"(GMT+08:00) Kuala Lumpur",
    "478__+08:00"=>"(GMT+08:00) Manila",
    "477__-07:00"=>"(GMT-07:00) Pacific Time (Canada)",
    "382__-07:00"=>"(GMT-07:00) Pacific Time (US & Canada)",
    "44__+08:00"=>"(GMT+08:00) Perth",
    "324__+08:00"=>"(GMT+08:00) Singapore",
    "352__+08:00"=>"(GMT+08:00) Taipei",
    "179__+08:00"=>"(GMT+08:00) Urumqi",
    "383__-08:00"=>"(GMT-08:00) Alaska",
    "459__+09:00"=>"(GMT+09:00) Irkutsk",
    "461__+09:00"=>"(GMT+09:00) Osaka",
    "462__+09:00"=>"(GMT+09:00) Sapporo",
    "210__+09:00"=>"(GMT+09:00) Seoul",
    "200__+09:00"=>"(GMT+09:00) Tokyo",
    "311__+09:00"=>"(GMT+09:00) Ulaan Bataar",
    "42__+10:30"=>"(GMT+10:30) Adelaide",
    "43__+09:30"=>"(GMT+09:30) Darwin",
    "40__+10:00"=>"(GMT+10:00) Brisbane",
    "463__+11:00"=>"(GMT+11:00) Canberra",
    "464__+10:00"=>"(GMT+10:00) Guam",
    "388__-09:00"=>"(GMT-09:00) Hawaii",
    "35__+11:00"=>"(GMT+11:00) Hobart",
    "465__+11:00"=>"(GMT+11:00) Melbourne",
    "176__+10:00"=>"(GMT+10:00) Port Moresby",
    "18__+10:00"=>"(GMT+10:00) Station Dumont-d'Urville",
    "38__+11:00"=>"(GMT+11:00) Sydney",
    "312__+10:00"=>"(GMT+10:00) Yakutsk",
    "360__-11:00"=>"(GMT-11:00) Midway Island",
    "313__+11:00"=>"(GMT+11:00) Vladivostok",
    "468__+13:00"=>"(GMT+13:00) Auckland",
    "469__+12:00"=>"(GMT+12:00) Fiji",
    "361__+12:00"=>"(GMT-12:00) International Date Line West",
    "470__+12:00"=>"(GMT+12:00) Kamchatka",
    "466__+12:00"=>"(GMT+12:00) Magadan",
    "467__+12:00"=>"(GMT+12:00) New Caledonia",
    "315__+12:00"=>"(GMT+12:00) Solomon Is.",
    "277__+13:00"=>"(GMT+13:00) Wellington",
    "348__+13:00"=>"(GMT+13:00) Nuku'alofa",
    "400__+14:00"=>"(GMT-14:00) Samoa",
    "483__+00:00"=>"(GMT) Accra",
    "414__+01:00"=>"(GMT) Casablanca",
    "415__+01:00"=>"(GMT) Edinburgh",
    "416__+01:00"=>"(GMT) Greenwich Mean Time : Dublin",
    "417__+01:00"=>"(GMT) Lisbon",
    "341__+00:00"=>"(GMT) Lome",
    "158__+01:00"=>"(GMT) London",
    "229__+01:00"=>"(GMT) Monrovia",
    );
} //@ Data
