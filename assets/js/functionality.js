/**
 * Created by numerah on 6/16/14.
 */


//$(function() {
jQuery(function($){    
    


    


    //google validations
    $( "#relevance_couponRelevanceLocationAddressOne" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressTwo" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressThree" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressFour" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressFive" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressSix" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressSeven" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressEight" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressNine" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });

    $( "#relevance_couponRelevanceLocationAddressTen" ).blur(function() {
            var me = $(this);var addressString = me.val();var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': addressString }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    me.removeClass('error_field');me.addClass('success_field');
                    //console.log(results[0].geometry.location.lat()+','+results[0].geometry.location.lng());    
                }else{
                    me.removeClass('success_field');me.addClass('error_field');       
                }
            });
            setTimeout(function(){me.removeClass('success_field');}, 3500);
    });









    $(document).on("click","#myform input[type=submit]",function(event){
        if($("#datasetting_couponBarcodeFixedValue").val() == ""
            && $("#datasetting_couponBarcodeStatus").val() == "show"
            && $("#datasetting_couponBarcodeDynamicValue").val() == ""
            && $("#datasetting_couponAutoGenerateValueLength").val() == "length"
            && $("#datasetting_barcodeAlternateDynamicText").val() == ""
            && $("#datasetting_barcodeAlternateFixedText").val() == "")
        {
            event.preventDefault();
            alert("barcode value cannot be empty");
        }
        else if($("#general_templateName").val() == ""
            || $("#general_organizationName").val() == ""
            || $("#general_organizationDescription").val() == ""
            || $("#appearance_logoText").val() == "")
        {
            event.preventDefault();
            alert("Name ,Template , Organization , Organizational Description and Logo cannot be empty");
        }

        else{
        }
    });

$('#appearance_backgroundColorCode').minicolors({
    opacity: false,
    defaultValue: '#ffffff',
    control: 'hue',
    position: 'top right',
    textfield: false,
    change: function(hex, opacity) {
    $('#picker').val(hex);
    colourSet = hex;
    $('#colour').val(colourSet);
    }
});

$('#appearance_fieldLabelColorCode').minicolors({
    opacity: false,
    defaultValue: '#000000',
    control: 'hue',
    position: 'top right',
    textfield: false,
    change: function(hex, opacity) {
    $('#picker').val(hex);
    colourSet = hex;
    $('#colour').val(colourSet);
    }
});
$('#appearance_fieldValueColorCode').minicolors({
    opacity: false,
    defaultValue: '#000000',
    control: 'hue',
    position: 'top right',
    textfield: false,
    change: function(hex, opacity) {
    $('#picker').val(hex);
    colourSet = hex;
    $('#colour').val(colourSet);
    }
});

$('#relevance_couponRelevanceLocationAddressOne').geocomplete();
$('#relevance_couponRelevanceLocationAddressTwo').geocomplete();
$('#relevance_couponRelevanceLocationAddressThree').geocomplete();
$('#relevance_couponRelevanceLocationAddressFour').geocomplete();
$('#relevance_couponRelevanceLocationAddressFive').geocomplete();
$('#relevance_couponRelevanceLocationAddressSix').geocomplete();
$('#relevance_couponRelevanceLocationAddressSeven').geocomplete();
$('#relevance_couponRelevanceLocationAddressEight').geocomplete();
$('#relevance_couponRelevanceLocationAddressNine').geocomplete();
$('#relevance_couponRelevanceLocationAddressTen').geocomplete();

    
    $('#Widget_genericThumbnailFile').hide();
    //$("#appearance_genericThumbnailFile").hide();
    //$('label[for=appearance_genericThumbnailFile]').hide();
    
    $('#Widget_limitValue').show();
    //$("#distribution_limitValue").hide();
    //$('label[for=distribution_limitValue]').hide();
    

    $('#Widget_restrictedDate').hide();
    //$("#distribution_restrictedDate").hide();
    //$('label[for=distribution_restrictedDate]').hide();
    
    $('#Widget_fixedIssuePassword').hide();
    //$("#distribution_fixedIssuePassword").hide();
    //$('label[for=distribution_fixedIssuePassword]').hide();
    
    $('#Widget_singleUsePasswords').hide();
    //$("#distribution_singleUsePasswords").hide();
    //$('label[for=distribution_singleUsePasswords]').hide();
    

    $('#Widget_fixedUpdatePassword').hide();
    //$("#distribution_fixedUpdatePassword").hide();
    //$('label[for=distribution_fixedUpdatePassword]').hide();

    //$( "#tabs" ).tabs();
    $('#Widget_boardingPassTransit').hide();

    //$("#general_boardingPassTransit").hide();
    

    $('#Widget_couponBarcodeValueSource').hide();
    //$("#datasetting_couponBarcodeValueSource").hide();
    //$('label[for=datasetting_couponBarcodeValueSource]').hide();
    
    $('#Widget_couponAutoGenerateValueType').hide();
    //$("#datasetting_couponAutoGenerateValueType").hide();
    //$('label[for=datasetting_couponAutoGenerateValueType]').hide();
    //$("#datasetting_couponAutoGenerateValueLength").hide();

    $('#Widget_couponBarcodeDynamicValue').hide();
    //$("#datasetting_couponBarcodeDynamicValue").hide();
    //$('label[for=datasetting_couponBarcodeDynamicValue]').hide();
    
    $('#Widget_barcodeAlternateFixedText').hide();
    //$("#datasetting_barcodeAlternateFixedText").hide();
    //$('label[for=datasetting_barcodeAlternateFixedText]').hide();
    

    $('#Widget_barcodeAlternateDynamicText').hide();
    //$("#datasetting_barcodeAlternateDynamicText").hide();
    //$('label[for=datasetting_barcodeAlternateDynamicText]').hide();
    //$('label[for=general_boardingPassTransit]').hide();
    
    $('#Widget_boardingPassFooterFile').hide();
    //$("#appearance_boardingPassFooterFile").hide();
    //$('label[for=appearance_boardingPassFooterFile]').hide();
    
    $('#Widget_couponStripFile').show();
    //$("#appearance_couponStripFile").show();
    //$('label[for=appearance_couponStripFile]').show();
    
    $('#Widget_storeCardStripFile').hide();
    //$("#appearance_storeCardStripFile").hide();
    //$('label[for=appearance_storeCardStripFile]').hide();
    
    $('#Widget_eventTicketStatus').hide();
    //$("#appearance_eventTicketStatus").hide();
    //$('label[for=appearance_eventTicketStatus]').hide();
    
    $('#Widget_eventTicketStripFile').hide();
    //$("#appearance_eventTicketStripFile").hide();
    //$('label[for=appearance_eventTicketStripFile]').hide();
    
    $('#Widget_eventTicketThumbnailFile').hide();
    //$("#appearance_eventTicketThumbnailFile").hide();
    //$('label[for=appearance_eventTicketThumbnailFile]').hide();
    
    $('#Widget_eventTicketBackgroundFile').hide();
    //$("#appearance_eventTicketBackgroundFile").hide();
    //$('label[for=appearance_eventTicketBackgroundFile]').hide();

    $("#header1").show();
    $("#header2").hide();
    $("#header3").hide();
    $("#header4").hide();
    $("#primary1").show();
    $("#primary2").hide();
    $("#primary3").hide();
    $("#primary4").hide();
    $("#sf11").show();
    $("#sf12").hide();
    $("#sf13").hide();
    $("#sf14").hide();
    $("#sf21").show();
    $("#sf22").hide();
    $("#sf23").hide();
    $("#sf24").hide();
    $("#sf31").show();
    $("#sf32").hide();
    $("#sf33").hide();
    $("#sf34").hide();
    $("#sf41").show();
    $("#sf42").hide();
    $("#sf43").hide();
    $("#sf44").hide();
    $("#af11").show();
    $("#af12").hide();
    $("#af13").hide();
    $("#af14").hide();
    $("#af21").show();
    $("#af22").hide();
    $("#af23").hide();
    $("#af24").hide();
    $("#af31").show();
    $("#af32").hide();
    $("#af33").hide();
    $("#af34").hide();
    $("#af41").show();
    $("#af42").hide();
    $("#af43").hide();
    $("#af44").hide();
    $("#sf1").hide();
    $("#sf2").hide();
    $("#sf3").hide();
    $("#sf4").hide();
    $("#haf").hide();
    $("#af1").hide();
    $("#af2").hide();
    $("#af3").hide();
    $("#af4").hide();
    $("#bf1").hide();
    $("#bf2").hide();
    $("#bf3").hide();
    $("#bf4").hide();
    $("#bf5").hide();
    $("#bf6").hide();
    $("#bf7").hide();
    $("#bf8").hide();
    $("#bf9").hide();
    $("#bf10").hide();
    $("#rl1").hide();
    $("#rl2").hide();
    $("#rl3").hide();
    $("#rl4").hide();
    $("#rl5").hide();
    $("#rl6").hide();
    $("#rl7").hide();
    $("#rl8").hide();
    $("#rl9").hide();
    $("#rl10").hide();
    $("#ads2").hide();

    $("#distribution_quantityRestriction").change(function(){

        if($(this).val() == 'limited') {

            $('#Widget_limitValue').show();
            //$("#distribution_limitValue").show();
            //$('label[for=distribution_limitValue]').show();
        }
        else
        {
            $('#Widget_limitValue').hide();
            //$("#distribution_limitValue").hide();
            //$('label[for=distribution_limitValue]').hide();
        }

    });

    $("#distribution_dateRestriction").change(function(){

        if($(this).val() == 'date') {

            $('#Widget_restrictedDate').show();
            //$("#distribution_restrictedDate").show();
            //$('label[for=distribution_restrictedDate]').show();
        }
        else
        {
            $('#Widget_restrictedDate').hide();
            //$("#distribution_restrictedDate").hide();
            //$('label[for=distribution_restrictedDate]').hide();
        }

    });
    $("#distribution_passwordIssueStatus").change(function(){

        if($(this).val() == 'fixedpass') {

            $('#Widget_fixedIssuePassword').show();
            //$("#distribution_fixedIssuePassword").show();
            //$('label[for=distribution_fixedIssuePassword]').show();
            
            $('#Widget_singleUsePasswords').hide();
            //$('label[for=distribution_singleUsePasswords]').hide();
            //$("#distribution_singleUsePasswords").hide();
        }
        else if ($(this).val() == 'singleusepass')
        {
            $('#Widget_fixedIssuePassword').hide();
            //$("#distribution_fixedIssuePassword").hide();
            //$('label[for=distribution_fixedIssuePassword]').hide();
            
            $('#Widget_singleUsePasswords').show();
            //$('label[for=distribution_singleUsePasswords]').show();
            //$("#distribution_singleUsePasswords").show();
        }
        else
        {
            $('#Widget_fixedIssuePassword').hide();
            //$("#distribution_fixedIssuePassword").hide();
            //$('label[for=distribution_fixedIssuePassword]').hide();
            
            $('#Widget_singleUsePasswords').hide();
            //$('label[for=distribution_singleUsePasswords]').hide();
            //$("#distribution_singleUsePasswords").hide();
        }

    });

    $("#distribution_passwordUpdateStatus").change(function(){

        if($(this).val() == 'fixedpass') {

            $('#Widget_fixedUpdatePassword').show();
            //$("#distribution_fixedUpdatePassword").show();
            //$('label[for=distribution_fixedUpdatePassword]').show();
        }
        else{
            
            $('#Widget_fixedUpdatePassword').hide();
            //$("#distribution_fixedUpdatePassword").hide();
            //$('label[for=distribution_fixedUpdatePassword]').hide();
        }

    });

    $("#advanced_limitTotalPass").change(function(){

        if($(this).val() == 'set') {

            $("#ads2").show();
        }
        else{
            $("#ads2").hide();
        }

    });

    $("#advanced_passGenerateSetting").change(function(){

        if($(this).val() == 'unique') {

            $("#ads1").show();
        }
        else{
            $("#ads1").hide();
        }

    });

    $("#relevance_couponRelevanceLocationTotalFields").change(function(){

        if($(this).val() == 0) {

            $("#rl1").hide();
            $("#rl2").hide();
            $("#rl3").hide();
            $("#rl4").hide();
            $("#rl5").hide();
            $("#rl6").hide();
            $("#rl7").hide();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();

        }
        else if($(this).val() == 1){

            $("#rl1").show();
            $("#rl2").hide();
            $("#rl3").hide();
            $("#rl4").hide();
            $("#rl5").hide();
            $("#rl6").hide();
            $("#rl7").hide();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();
        }
        else if($(this).val() == 2){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").hide();
            $("#rl4").hide();
            $("#rl5").hide();
            $("#rl6").hide();
            $("#rl7").hide();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();
        }
        else if($(this).val() == 3){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").hide();
            $("#rl5").hide();
            $("#rl6").hide();
            $("#rl7").hide();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();
        }
        else if($(this).val() == 4){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").show();
            $("#rl5").hide();
            $("#rl6").hide();
            $("#rl7").hide();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();
        }
        else if($(this).val() == 5){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").show();
            $("#rl5").show();
            $("#rl6").hide();
            $("#rl7").hide();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();

        }
        else if($(this).val() == 6){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").show();
            $("#rl5").show();
            $("#rl6").show();
            $("#rl7").hide();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();
        }
        else if($(this).val() == 7){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").show();
            $("#rl5").show();
            $("#rl6").show();
            $("#rl7").show();
            $("#rl8").hide();
            $("#rl9").hide();
            $("#rl10").hide();
        }
        else if($(this).val() == 8){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").show();
            $("#rl5").show();
            $("#rl6").show();
            $("#rl7").show();
            $("#rl8").show();
            $("#rl9").hide();
            $("#rl10").hide();
        }
        else if($(this).val() == 9){


            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").show();
            $("#rl5").show();
            $("#rl6").show();
            $("#rl7").show();
            $("#rl8").show();
            $("#rl9").show();
            $("#rl10").hide();
        }
        else if($(this).val() == 10){

            $("#rl1").show();
            $("#rl2").show();
            $("#rl3").show();
            $("#rl4").show();
            $("#rl5").show();
            $("#rl6").show();
            $("#rl7").show();
            $("#rl8").show();
            $("#rl9").show();
            $("#rl10").show();
        }
        else{

        }

    });
    $("#secondary_couponSecondaryFieldTotalFields").change(function(){

        if($(this).val() == 0) {

            $("#sf1").hide();
            $("#sf2").hide();
            $("#sf3").hide();
            $("#sf4").hide();
        }
        else if($(this).val() == 1){

            $("#sf1").show();
            $("#sf2").hide();
            $("#sf3").hide();
            $("#sf4").hide();
        }
        else if($(this).val() == 2){

            $("#sf1").show();
            $("#sf2").show();
            $("#sf3").hide();
            $("#sf4").hide();
        }
        else if($(this).val() == 3){
            if ($("#general_categoryName").val() == "Coupon"){
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").hide();
                $("#sf4").hide();
            }
            else {
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").show();
                $("#sf4").hide();
            }
        }
        else if($(this).val() == 4){

            if ($("#general_categoryName").val() == "Coupon"){
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").hide();
                $("#sf4").hide();
            }
            else {
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").show();
                $("#sf4").show();
            }
        }
        else{

        }

    });
    $("#auxiliary_couponAuxiliaryFieldTotalFields").change(function(){

        $("#haf").hide();
        if($(this).val() == 0) {

            $("#af1").hide();
            $("#af2").hide();
            $("#af3").hide();
            $("#af4").hide();
        }
        else if($(this).val() == 1){

            $("#af1").show();
            $("#af2").hide();
            $("#af3").hide();
            $("#af4").hide();
        }
        else if($(this).val() == 2){

            $("#af1").show();
            $("#af2").show();
            $("#af3").hide();
            $("#af4").hide();
        }
        else if($(this).val() == 3){
            if ($("#general_categoryName").val() == "Coupon"){
                $("#af1").show();
                $("#af2").show();
                $("#af3").hide();
                $("#af4").hide();
            }
            else {
                $("#af1").show();
                $("#af2").show();
                $("#af3").show();
                $("#af4").hide();
            }
        }
        else if($(this).val() == 4){

            if ($("#general_categoryName").val() == "Coupon"){
                $("#af1").show();
                $("#af2").show();
                $("#af3").hide();
                $("#af4").hide();
            }
            else {
                $("#af1").show();
                $("#af2").show();
                $("#af3").show();
                $("#af4").show();
            }
        }
        else{

        }

    });
    $("#backfields_couponBackFieldTotalFields").change(function(){

        if($(this).val() == 0) {

            $("#bf1").hide();
            $("#bf2").hide();
            $("#bf3").hide();
            $("#bf4").hide();
            $("#bf5").hide();
            $("#bf6").hide();
            $("#bf7").hide();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 1){

            $("#bf1").show();
            $("#bf2").hide();
            $("#bf3").hide();
            $("#bf4").hide();
            $("#bf5").hide();
            $("#bf6").hide();
            $("#bf7").hide();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 2){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").hide();
            $("#bf4").hide();
            $("#bf5").hide();
            $("#bf6").hide();
            $("#bf7").hide();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 3){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").hide();
            $("#bf5").hide();
            $("#bf6").hide();
            $("#bf7").hide();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 4){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").show();
            $("#bf5").hide();
            $("#bf6").hide();
            $("#bf7").hide();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 5){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").show();
            $("#bf5").show();
            $("#bf6").hide();
            $("#bf7").hide();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 6){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").show();
            $("#bf5").show();
            $("#bf6").show();
            $("#bf7").hide();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 7){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").show();
            $("#bf5").show();
            $("#bf6").show();
            $("#bf7").show();
            $("#bf8").hide();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 8){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").show();
            $("#bf5").show();
            $("#bf6").show();
            $("#bf7").show();
            $("#bf8").show();
            $("#bf9").hide();
            $("#bf10").hide();
        }
        else if($(this).val() == 9){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").show();
            $("#bf5").show();
            $("#bf6").show();
            $("#bf7").show();
            $("#bf8").show();
            $("#bf9").show();
            $("#bf10").hide();
        }
        else if($(this).val() == 10){

            $("#bf1").show();
            $("#bf2").show();
            $("#bf3").show();
            $("#bf4").show();
            $("#bf5").show();
            $("#bf6").show();
            $("#bf7").show();
            $("#bf8").show();
            $("#bf9").show();
            $("#bf10").show();
        }
        else{

        }

    });
    $("#auxiliary_couponAuxiliaryFieldValueTypeOne").change(function(){

        if($(this).val() == "text") {

            $("#af11").show();
            $("#af12").hide();
            $("#af13").hide();
            $("#af14").hide();

        }
        else if($(this).val() == "datentime"){

            $("#af11").hide();
            $("#af12").show();
            $("#af13").hide();
            $("#af14").hide();
        }
        else if($(this).val() == "number"){

            $("#af11").hide();
            $("#af12").hide();
            $("#af13").show();
            $("#af14").hide();

        }
        else if($(this).val() == "currency"){

            $("#af11").hide();
            $("#af12").hide();
            $("#af13").hide();
            $("#af14").show();

        }
        else{

        }


    });
    $("#auxiliary_couponAuxiliaryFieldValueTypeTwo").change(function(){

        if($(this).val() == "text") {

            $("#af21").show();
            $("#af22").hide();
            $("#af23").hide();
            $("#af24").hide();

        }
        else if($(this).val() == "datentime"){

            $("#af21").hide();
            $("#af22").show();
            $("#af23").hide();
            $("#af24").hide();
        }
        else if($(this).val() == "number"){

            $("#af21").hide();
            $("#af22").hide();
            $("#af23").show();
            $("#af24").hide();

        }
        else if($(this).val() == "currency"){

            $("#af21").hide();
            $("#af22").hide();
            $("#af23").hide();
            $("#af24").show();

        }
        else{

        }

    });
    $("#auxiliary_couponAuxiliaryFieldValueTypeThree").change(function(){

        if($(this).val() == "text") {

            $("#af31").show();
            $("#af32").hide();
            $("#af33").hide();
            $("#af34").hide();

        }
        else if($(this).val() == "datentime"){

            $("#af31").hide();
            $("#af32").show();
            $("#af33").hide();
            $("#af34").hide();
        }
        else if($(this).val() == "number"){

            $("#af31").hide();
            $("#af32").hide();
            $("#af33").show();
            $("#af34").hide();

        }
        else if($(this).val() == "currency"){

            $("#af31").hide();
            $("#af32").hide();
            $("#af33").hide();
            $("#af34").show();

        }
        else{

        }

    });
    $("#auxiliary_couponAuxiliaryFieldValueTypeFour").change(function(){

        if($(this).val() == "text") {

            $("#af41").show();
            $("#af42").hide();
            $("#af43").hide();
            $("#af44").hide();

        }
        else if($(this).val() == "datentime"){

            $("#af41").hide();
            $("#af42").show();
            $("#af43").hide();
            $("#af44").hide();
        }
        else if($(this).val() == "number"){

            $("#af41").hide();
            $("#af42").hide();
            $("#af43").show();
            $("#af44").hide();

        }
        else if($(this).val() == "currency"){

            $("#af41").hide();
            $("#af42").hide();
            $("#af43").hide();
            $("#af44").show();

        }
        else{

        }


    });
    $("#secondary_couponSecondaryFieldValueTypeOne").change(function(){

        if($(this).val() == "text") {

            $("#sf11").show();
            $("#sf12").hide();
            $("#sf13").hide();
            $("#sf14").hide();

        }
        else if($(this).val() == "datentime"){

            $("#sf11").hide();
            $("#sf12").show();
            $("#sf13").hide();
            $("#sf14").hide();
        }
        else if($(this).val() == "number"){

            $("#sf11").hide();
            $("#sf12").hide();
            $("#sf13").show();
            $("#sf14").hide();

        }
        else if($(this).val() == "currency"){

            $("#sf11").hide();
            $("#sf12").hide();
            $("#sf13").hide();
            $("#sf14").show();

        }
        else{

        }

    });
    $("#secondary_couponSecondaryFieldValueTypeTwo").change(function(){

        if($(this).val() == "text") {

            $("#sf21").show();
            $("#sf22").hide();
            $("#sf23").hide();
            $("#sf24").hide();

        }
        else if($(this).val() == "datentime"){

            $("#sf21").hide();
            $("#sf22").show();
            $("#sf23").hide();
            $("#sf24").hide();
        }
        else if($(this).val() == "number"){

            $("#sf21").hide();
            $("#sf22").hide();
            $("#sf23").show();
            $("#sf24").hide();

        }
        else if($(this).val() == "currency"){

            $("#sf21").hide();
            $("#sf22").hide();
            $("#sf23").hide();
            $("#sf24").show();

        }
        else{

        }


    });
    $("#secondary_couponSecondaryFieldValueTypeThree").change(function(){

        if($(this).val() == "text") {

            $("#sf31").show();
            $("#sf32").hide();
            $("#sf33").hide();
            $("#sf34").hide();

        }
        else if($(this).val() == "datentime"){

            $("#sf31").hide();
            $("#sf32").show();
            $("#sf33").hide();
            $("#sf34").hide();
        }
        else if($(this).val() == "number"){

            $("#sf31").hide();
            $("#sf32").hide();
            $("#sf33").show();
            $("#sf34").hide();

        }
        else if($(this).val() == "currency"){

            $("#sf31").hide();
            $("#sf32").hide();
            $("#sf33").hide();
            $("#sf34").show();

        }
        else{

        }

    });
    $("#secondary_couponSecondaryFieldValueTypeFour").change(function(){

        if($(this).val() == "text") {

            $("#sf41").show();
            $("#sf42").hide();
            $("#sf43").hide();
            $("#sf44").hide();

        }
        else if($(this).val() == "datentime"){

            $("#sf41").hide();
            $("#sf42").show();
            $("#sf43").hide();
            $("#sf44").hide();
        }
        else if($(this).val() == "number"){

            $("#sf41").hide();
            $("#sf42").hide();
            $("#sf43").show();
            $("#sf44").hide();

        }
        else if($(this).val() == "currency"){

            $("#sf41").hide();
            $("#sf42").hide();
            $("#sf43").hide();
            $("#sf44").show();

        }
        else{

        }

    });
    $("#primary_couponPrimaryFieldValueType").change(function(){

        if($(this).val() == "text") {

            $("#primary1").show();
            $("#primary2").hide();
            $("#primary3").hide();
            $("#primary4").hide();
        }
        else if($(this).val() == "datentime"){


            $("#primary1").hide();
            $("#primary2").show();
            $("#primary3").hide();
            $("#primary4").hide();
        }
        else if($(this).val() == "number"){

            $("#primary1").hide();
            $("#primary2").hide();
            $("#primary3").show();
            $("#primary4").hide();
        }
        else if($(this).val() == "currency"){

            $("#primary1").hide();
            $("#primary2").hide();
            $("#primary3").hide();
            $("#primary4").show();

        }
        else{

        }

    });

    $("#header_couponHeaderValueType").change(function(){

        if($(this).val() == "text")
        {

            $("#header1").show();
            $("#header2").hide();
            $("#header3").hide();
            $("#header4").hide();

        }
        else if($(this).val() == "datentime")
        {

            $("#header1").hide();
            $("#header2").show();
            $("#header3").hide();
            $("#header4").hide();
        }
        else if($(this).val() == "number"){

            $("#header1").hide();
            $("#header2").hide();
            $("#header3").show();
            $("#header4").hide();
        }
        else if($(this).val() == "currency"){

            $("#header1").hide();
            $("#header2").hide();
            $("#header3").hide();
            $("#header4").show();
        }
        else{

        }

    });
    $("#datasetting_couponBarcodeType").change(function() {
        if ($("#general_categoryName").val() == "Generic"){
            if($(this).val() == 'PDF417'){
                $("#af").show();
                $("#haf").hide();
            }
            else{
                $("#af").hide();
                $("#haf").show();
            }

        }
        else{
            $("#af").show();
            $("#haf").hide();
        }
    });
    $("#datasetting_couponBarcodeValueOption").change(function(){

        if($(this).val() == "Static") {

            $('#Widget_couponBarcodeFixedValue').show();
            //$("#datasetting_couponBarcodeFixedValue").show();
            //$('label[for=datasetting_couponBarcodeFixedValue]').show();
            
            $('#Widget_couponBarcodeValueSource').hide();
            //$("#datasetting_couponBarcodeValueSource").hide();
            //$('label[for=datasetting_couponBarcodeValueSource]').hide();
            
            $('#Widget_couponAutoGenerateValueType').hide();
            //$("#datasetting_couponAutoGenerateValueType").hide();
            //$('label[for=datasetting_couponAutoGenerateValueType]').hide();
            //$("#datasetting_couponAutoGenerateValueLength").hide();
            
            $('#Widget_couponBarcodeDynamicValue').hide();
            //$("#datasetting_couponBarcodeDynamicValue").hide();
            //$('label[for=datasetting_couponBarcodeDynamicValue]').hide();

        }

        else{

            $('#Widget_couponBarcodeFixedValue').hide();
            //$("#datasetting_couponBarcodeFixedValue").hide();
            //$('label[for=datasetting_couponBarcodeFixedValue]').hide();
            
            $('#Widget_couponBarcodeValueSource').show();
            //$("#datasetting_couponBarcodeValueSource").show();
            //$('label[for=datasetting_couponBarcodeValueSource]').show();
            
            $('#Widget_couponAutoGenerateValueType').show();
            //$("#datasetting_couponAutoGenerateValueType").show();
            //$('label[for=datasetting_couponAutoGenerateValueType]').show();
            //$("#datasetting_couponAutoGenerateValueLength").show();
            
            $('#Widget_couponBarcodeDynamicValue').show();
            //$("#datasetting_couponBarcodeDynamicValue").show();
            //$('label[for=datasetting_couponBarcodeDynamicValue]').show();

        }

    });
    $("#datasetting_couponBarcodeValueSource").change(function(){

        if($(this).val() == "autogen") {
            
            $('#Widget_couponAutoGenerateValueType').show();
            //$("#datasetting_couponAutoGenerateValueType").show();
            //$('label[for=datasetting_couponAutoGenerateValueType]').show();
            //$("#datasetting_couponAutoGenerateValueLength").show();
            
            $('#Widget_couponBarcodeDynamicValue').hide();
            //$("#datasetting_couponBarcodeDynamicValue").hide();
            //$('label[for=datasetting_couponBarcodeDynamicValue]').hide();

        }

        else{

            $('#Widget_couponBarcodeDynamicValue').show();
            //$("#datasetting_couponBarcodeDynamicValue").show();
            //$('label[for=datasetting_couponBarcodeDynamicValue]').show();
            
            $('#Widget_couponAutoGenerateValueType').hide();
            //$("#datasetting_couponAutoGenerateValueType").hide();
            //$('label[for=datasetting_couponAutoGenerateValueType]').hide();
            //$("#datasetting_couponAutoGenerateValueLength").hide();

        }

    });
    $("#datasetting_barcodeAlternateText").change(function(){

        if($(this).val() == "static") {

            $('#Widget_barcodeAlternateFixedText').show();
            //$("#datasetting_barcodeAlternateFixedText").show();
            //$('label[for=datasetting_barcodeAlternateFixedText]').show();
            
            $('#Widget_barcodeAlternateDynamicText').hide();
            //$("#datasetting_barcodeAlternateDynamicText").hide();
            //$('label[for=datasetting_barcodeAlternateDynamicText]').hide();

        }

        else if($(this).val() == "dynamic") {
            
            $('#Widget_barcodeAlternateFixedText').hide();
            //$("#datasetting_barcodeAlternateFixedText").hide();
            //$('label[for=datasetting_barcodeAlternateFixedText]').hide();
            
            $('#Widget_barcodeAlternateDynamicText').show();
            //$("#datasetting_barcodeAlternateDynamicText").show();
            //$('label[for=datasetting_barcodeAlternateDynamicText]').show();

        }
        else {
            
            $('#Widget_barcodeAlternateFixedText').hide();
            //$("#datasetting_barcodeAlternateFixedText").hide();
            //$('label[for=datasetting_barcodeAlternateFixedText]').hide();
            
            $('#Widget_barcodeAlternateDynamicText').hide();
            //$("#datasetting_barcodeAlternateDynamicText").hide();
            //$('label[for=datasetting_barcodeAlternateDynamicText]').hide();
        }

    });
    $("#datasetting_couponBarcodeStatus").change(function(){

        if($(this).val() == "show") {
            $('#Widget_br').show();
        }

        else{
            $('#Widget_br').hide();
        }
    });
    $("#appearance_eventTicketStatus").change(function() {
        if($(this).val() == 'Layout 1: Strip'){
            
            $('#Widget_eventTicketStripFile').show();
            //$("#appearance_eventTicketStripFile").show();
            //$('label[for=appearance_eventTicketStripFile]').show();
            
            $('#Widget_eventTicketThumbnailFile').hide();
            //$("#appearance_eventTicketThumbnailFile").hide();
            //$('label[for=appearance_eventTicketThumbnailFile]').hide();
            
            $('#Widget_eventTicketBackgroundFile').hide();
            //$("#appearance_eventTicketBackgroundFile").hide();
            //$('label[for=appearance_eventTicketBackgroundFile]').hide();
        }
        else if($(this).val() == 'Layout 2: Background/Thumbnail'){
            
            $('#Widget_eventTicketThumbnailFile').show();
            //$("#appearance_eventTicketThumbnailFile").show();
            //$('label[for=appearance_eventTicketThumbnailFile]').show();
            
            $('#Widget_eventTicketBackgroundFile').show();
            //$("#appearance_eventTicketBackgroundFile").show();
            //$('label[for=appearance_eventTicketBackgroundFile]').show();
            
            $('#Widget_eventTicketStripFile').hide();
            //$("#appearance_eventTicketStripFile").hide();
            //$('label[for=appearance_eventTicketStripFile]').hide();
        }
        else{
            $('#Widget_eventTicketThumbnailFile').show();
            //$("#appearance_eventTicketThumbnailFile").show();
            //$('label[for=appearance_eventTicketThumbnailFile]').show();
            
            $('#Widget_eventTicketBackgroundFile').show();
            //$("#appearance_eventTicketBackgroundFile").show();
            //$('label[for=appearance_eventTicketBackgroundFile]').show();
            
            $('#Widget_eventTicketStripFile').hide();
            //$("#appearance_eventTicketStripFile").hide();
            //$('label[for=appearance_eventTicketStripFile]').hide();
        }
    });

    $("#general_categoryName").change(function() {
        if ($(this).val() == "Generic"){
            if($("#datasetting_couponBarcodeType").val() == 'PDF417'){
                $("#af").show();
                $("#haf").hide();
            }
            else{
                $("#af").hide();
                $("#haf").show();
            }

        }
        else{
            $("#af").show();
            $("#haf").hide();
        }

        if ($(this).val() == "Coupon") {
            if($("#secondary_couponSecondaryFieldTotalFields").val() == 3 || $("#secondary_couponSecondaryFieldTotalFields").val() == 4){
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").hide();
                $("#sf4").hide();
            }
            if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 3 || $("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 4){
                $("#af1").show();
                $("#af2").show();
                $("#af3").hide();
                $("#af4").hide();
            }
        }

        else{
            if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 0) {
                $("#af1").hide();
                $("#af2").hide();
                $("#af3").hide();
                $("#af4").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 1){
                $("#af1").show();
                $("#af2").hide();
                $("#af3").hide();
                $("#af4").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 2){
                $("#af1").show();
                $("#af2").show();
                $("#af3").hide();
                $("#af4").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 3){
                $("#af1").show();
                $("#af2").show();
                $("#af3").show();
                $("#af4").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 4){
                $("#af1").show();
                $("#af2").show();
                $("#af3").show();
                $("#af4").show();
            }
            else{
                //
            }

            if($("#secondary_couponSecondaryFieldTotalFields").val() == 0) {
                $("#sf1").hide();
                $("#sf2").hide();
                $("#sf3").hide();
                $("#sf4").hide();
            }
            else if($("#secondary_couponSecondaryFieldTotalFields").val() == 1){
                $("#sf1").show();
                $("#sf2").hide();
                $("#sf3").hide();
                $("#sf4").hide();
            }
            else if($("#secondary_couponSecondaryFieldTotalFields").val() == 2){
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").hide();
                $("#sf4").hide();
            }
            else if($("#secondary_couponSecondaryFieldTotalFields").val() == 3){
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").show();
                $("#sf4").hide();
            }
            else if($("#secondary_couponSecondaryFieldTotalFields").val() == 4){
                $("#sf1").show();
                $("#sf2").show();
                $("#sf3").show();
                $("#sf4").show();
            }
            else{
            }
        }
        // foo is the id of the other select box
        if ($(this).val() == "Boarding Pass") {

            $('#Widget_boardingPassTransit').show();
            //$("#general_boardingPassTransit").show();
            //$('label[for=general_boardingPassTransit]').show();
            
            $('#Widget_boardingPassFooterFile').show();
            //$("#appearance_boardingPassFooterFile").show();
            //$('label[for=appearance_boardingPassFooterFile]').show();
            $('#Widget_genericThumbnailFile').hide();
            //$("#appearance_genericThumbnailFile").hide();
            //$('label[for=appearance_genericThumbnailFile]').hide();
            
            $('#Widget_couponStripFile').hide();
            //$("#appearance_couponStripFile").hide();
            //$('label[for=appearance_couponStripFile]').hide();

            $('#Widget_storeCardStripFile').hide();
            //$("#appearance_storeCardStripFile").hide();
            //$('label[for=appearance_storeCardStripFile]').hide();
            

            $('#Widget_eventTicketStatus').hide();
            //$("#appearance_eventTicketStatus").hide();
            //$('label[for=appearance_eventTicketStatus]').hide();
            
            $('#Widget_eventTicketStripFile').hide();
            //$("#appearance_eventTicketStripFile").hide();
            //$('label[for=appearance_eventTicketStripFile]').hide();
            
            $('#Widget_eventTicketThumbnailFile').hide();
            //$("#appearance_eventTicketThumbnailFile").hide();
            //$('label[for=appearance_eventTicketThumbnailFile]').hide();

            $('#Widget_eventTicketBackgroundFile').hide();
            //$("#appearance_eventTicketBackgroundFile").hide();
            //$('label[for=appearance_eventTicketBackgroundFile]').hide();
            
            $('#Widget_Places').hide();
            //$("#general_places").hide();
            //$('label[for=general_places]').hide();

            $("#af").show();
            $("#haf").hide();

        }
        else if ($(this).val() == "Generic") {
            $('#Widget_genericThumbnailFile').show();
            //$("#appearance_genericThumbnailFile").show();
            //$('label[for=appearance_genericThumbnailFile]').show();
            $('#Widget_boardingPassTransit').hide();
            //$("#general_boardingPassTransit").hide();
            //$('label[for=general_boardingPassTransit]').hide();

            $('#Widget_boardingPassFooterFile').hide();
            //$("#appearance_boardingPassFooterFile").hide();
            //$('label[for=appearance_boardingPassFooterFile]').hide();
            
            $('#Widget_couponStripFile').hide();
            //$("#appearance_couponStripFile").hide();
            //$('label[for=appearance_couponStripFile]').hide();

            $('#Widget_storeCardStripFile').hide();
            //$("#appearance_storeCardStripFile").hide();
            //$('label[for=appearance_storeCardStripFile]').hide();

            $('#Widget_eventTicketStatus').hide();
            //$("#appearance_eventTicketStatus").hide();
            //$('label[for=appearance_eventTicketStatus]').hide();
            
            $('#Widget_eventTicketStripFile').hide();
            //$("#appearance_eventTicketStripFile").hide();
            //$('label[for=appearance_eventTicketStripFile]').hide();
            
            $('#Widget_eventTicketThumbnailFile').hide();
            //$("#appearance_eventTicketThumbnailFile").hide();
            //$('label[for=appearance_eventTicketThumbnailFile]').hide();
            
            $('#Widget_eventTicketBackgroundFile').hide();
            //$("#appearance_eventTicketBackgroundFile").hide();
            //$('label[for=appearance_eventTicketBackgroundFile]').hide();
            $('#Widget_Places').hide();
            //$("#general_places").hide();
            //$('label[for=general_places]').hide();

        }
        else if ($(this).val() == "Coupon") {
            
            $('#Widget_couponStripFile').show();
            //$("#appearance_couponStripFile").show();
            //$('label[for=appearance_couponStripFile]').show();
            
            $('#Widget_genericThumbnailFile').hide();
            //$("#appearance_genericThumbnailFile").hide();
            //$('label[for=appearance_genericThumbnailFile]').hide();
            $('#Widget_boardingPassTransit').hide();
            //$("#general_boardingPassTransit").hide();
            //$('label[for=general_boardingPassTransit]').hide();
            
            $('#Widget_boardingPassFooterFile').hide();
            //$("#appearance_boardingPassFooterFile").hide();
            //$('label[for=appearance_boardingPassFooterFile]').hide();
            
            $('#Widget_storeCardStripFile').hide();
            //$("#appearance_storeCardStripFile").hide();
            //$('label[for=appearance_storeCardStripFile]').hide();
            
            $('#Widget_eventTicketStatus').hide();
            //$("#appearance_eventTicketStatus").hide();
            //$('label[for=appearance_eventTicketStatus]').hide();
            
            $('#Widget_eventTicketStripFile').hide();
            //$("#appearance_eventTicketStripFile").hide();
            //$('label[for=appearance_eventTicketStripFile]').hide();
            
            $('#Widget_eventTicketThumbnailFile').hide();
            //$("#appearance_eventTicketThumbnailFile").hide();
            //$('label[for=appearance_eventTicketThumbnailFile]').hide();
            
            $('#Widget_eventTicketBackgroundFile').hide();
            //$("#appearance_eventTicketBackgroundFile").hide();
            //$('label[for=appearance_eventTicketBackgroundFile]').hide();
            
            $('#Widget_Places').show();
            //$("#general_places").show();
            //$('label[for=general_places]').show();
            $("#af").show();
            $("#haf").hide();
        }
        else if ($(this).val() == "Event Ticket") {

            $('#Widget_eventTicketStatus').show();
            //$("#appearance_eventTicketStatus").show();
            //$('label[for=appearance_eventTicketStatus]').show();
            
            $('#Widget_eventTicketStripFile').show();
            //$("#appearance_eventTicketStripFile").show();
            //$('label[for=appearance_eventTicketStripFile]').show();
            
            $('#Widget_eventTicketThumbnailFile').hide();
            //$("#appearance_eventTicketThumbnailFile").hide();
            //$('label[for=appearance_eventTicketThumbnailFile]').hide();
            
            $('#Widget_eventTicketBackgroundFile').hide();
            //$("#appearance_eventTicketBackgroundFile").hide();
            //$('label[for=appearance_eventTicketBackgroundFile]').hide();

            $('#Widget_genericThumbnailFile').hide();
            //$("#appearance_genericThumbnailFile").hide();
            //$('label[for=appearance_genericThumbnailFile]').hide()
            $('#Widget_boardingPassTransit').hide();
            //$("#general_boardingPassTransit").hide();
            //$('label[for=general_boardingPassTransit]').hide();
            
            $('#Widget_boardingPassFooterFile').hide();
            //$("#appearance_boardingPassFooterFile").hide();
            //$('label[for=appearance_boardingPassFooterFile]').hide();
            
            $('#Widget_couponStripFile').hide();
            //$("#appearance_couponStripFile").hide();
            //$('label[for=appearance_couponStripFile]').hide();

            $('#Widget_storeCardStripFile').hide();
            //$("#appearance_storeCardStripFile").hide();
            //$('label[for=appearance_storeCardStripFile]').hide();
            $('#Widget_Places').hide();
            //$("#general_places").hide();
            //$('label[for=general_places]').hide();
            $("#af").show();
            $("#haf").hide();
        }
        else if ($(this).val() == "Store Card") {

            $('#Widget_storeCardStripFile').show();
            //$("#appearance_storeCardStripFile").show();
            //$('label[for=appearance_storeCardStripFile]').show();

            $('#Widget_genericThumbnailFile').hide();
            //$("#appearance_genericThumbnailFile").hide();
            //$('label[for=appearance_genericThumbnailFile]').hide();
            $('#Widget_boardingPassTransit').hide();
            //$("#general_boardingPassTransit").hide();
            //$('label[for=general_boardingPassTransit]').hide();

            $('#Widget_boardingPassFooterFile').hide();
            //$("#appearance_boardingPassFooterFile").hide();
            //$('label[for=appearance_boardingPassFooterFile]').hide();
            
            $('#Widget_couponStripFile').hide();
            //$("#appearance_couponStripFile").hide();
            //$('label[for=appearance_couponStripFile]').hide();
            
            $('#Widget_eventTicketStatus').hide();
            //$("#appearance_eventTicketStatus").hide();
            //$('label[for=appearance_eventTicketStatus]').hide();
            
            $('#Widget_eventTicketStripFile').hide();
            //$("#appearance_eventTicketStripFile").hide();
            //$('label[for=appearance_eventTicketStripFile]').hide();
            
            $('#Widget_eventTicketThumbnailFile').hide();
            //$("#appearance_eventTicketThumbnailFile").hide();
            //$('label[for=appearance_eventTicketThumbnailFile]').hide();
            
            $('#Widget_eventTicketBackgroundFile').hide();
            //$("#appearance_eventTicketBackgroundFile").hide();
            //$('label[for=appearance_eventTicketBackgroundFile]').hide();
            
            $('#Widget_Places').hide();
            //$("#general_places").hide();
            //$('label[for=general_places]').hide();
            $("#af").show();
            $("#haf").hide();
        }
        else{ //
        }
    });


});//@



