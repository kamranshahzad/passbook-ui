/**
 * Created by numerah on 6/16/14.
 */

jQuery(function($){ 








    if($("#distribution_quantityRestriction").val() == 'limited') {

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

    if($("#distribution_dateRestriction").val() == 'date') {

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
    if($("#distribution_passwordIssueStatus").val() == 'fixedpass') {

        $('#Widget_fixedIssuePassword').show();
        //$("#distribution_fixedIssuePassword").show();
        //$('label[for=distribution_fixedIssuePassword]').show();

        $('#Widget_singleUsePasswords').hide();
        //$('label[for=distribution_singleUsePasswords]').hide();
        //$("#distribution_singleUsePasswords").hide();
    }
    else if ($("#distribution_passwordIssueStatus").val() == 'singleusepass')
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

    if($("#distribution_passwordUpdateStatus").val() == 'fixedpass') {

        $('#Widget_fixedUpdatePassword').show();
        //$("#distribution_fixedUpdatePassword").show();
        //$('label[for=distribution_fixedUpdatePassword]').show();
    }
    else{

        $('#Widget_fixedUpdatePassword').hide();
        //$("#distribution_fixedUpdatePassword").hide();
        //$('label[for=distribution_fixedUpdatePassword]').hide();
    }

    if($("#advanced_limitTotalPass").val() == 'set') {

        $("#ads2").show();
    }
    else{
        $("#ads2").hide();
    }
    if($("#advanced_passGenerateSetting").val() == 'unique') {

        $("#ads1").show();
    }
    else{
        $("#ads1").hide();
    }

    if($("#relevance_couponRelevanceLocationTotalFields").val() == 0) {

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 1){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 2){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 3){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 4){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 5){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 6){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 7){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 8){

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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 9){


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
    else if($("#relevance_couponRelevanceLocationTotalFields").val() == 10){

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

        if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "text") {

            $("#sf11").show();
            $("#sf12").hide();
            $("#sf13").hide();
            $("#sf14").hide();

        }
        else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "datentime"){

            $("#sf11").hide();
            $("#sf12").show();
            $("#sf13").hide();
            $("#sf14").hide();
        }
        else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "number"){

            $("#sf11").hide();
            $("#sf12").hide();
            $("#sf13").show();
            $("#sf14").hide();

        }
        else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "currency"){

            $("#sf11").hide();
            $("#sf12").hide();
            $("#sf13").hide();
            $("#sf14").show();

        }
        else{

        }
    }
    else if($("#secondary_couponSecondaryFieldTotalFields").val() == 2){

        $("#sf1").show();
        $("#sf2").show();
        $("#sf3").hide();
        $("#sf4").hide();

        if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "text") {

            $("#sf11").show();
            $("#sf12").hide();
            $("#sf13").hide();
            $("#sf14").hide();

        }
        else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "datentime"){

            $("#sf11").hide();
            $("#sf12").show();
            $("#sf13").hide();
            $("#sf14").hide();
        }
        else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "number"){

            $("#sf11").hide();
            $("#sf12").hide();
            $("#sf13").show();
            $("#sf14").hide();

        }
        else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "currency"){

            $("#sf11").hide();
            $("#sf12").hide();
            $("#sf13").hide();
            $("#sf14").show();

        }
        else{

        }
        if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "text") {

            $("#sf21").show();
            $("#sf22").hide();
            $("#sf23").hide();
            $("#sf24").hide();

        }
        else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "datentime"){

            $("#sf21").hide();
            $("#sf22").show();
            $("#sf23").hide();
            $("#sf24").hide();
        }
        else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "number"){

            $("#sf21").hide();
            $("#sf22").hide();
            $("#sf23").show();
            $("#sf24").hide();

        }
        else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "currency"){

            $("#sf21").hide();
            $("#sf22").hide();
            $("#sf23").hide();
            $("#sf24").show();

        }
        else{

        }
    }
    else if($("#secondary_couponSecondaryFieldTotalFields").val() == 3){
        if ($("#general_categoryName").val() == "Coupon"){
            $("#sf1").show();
            $("#sf2").show();
            $("#sf3").hide();
            $("#sf4").hide();

            if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "text") {

                $("#sf11").show();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "datentime"){

                $("#sf11").hide();
                $("#sf12").show();
                $("#sf13").hide();
                $("#sf14").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "number"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").show();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "currency"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").show();

            }
            else{

            }
            if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "text") {

                $("#sf21").show();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "datentime"){

                $("#sf21").hide();
                $("#sf22").show();
                $("#sf23").hide();
                $("#sf24").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "number"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").show();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "currency"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").show();

            }
            else{

            }
        }
        else {
            $("#sf1").show();
            $("#sf2").show();
            $("#sf3").show();
            $("#sf4").hide();

            if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "text") {

                $("#sf11").show();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "datentime"){

                $("#sf11").hide();
                $("#sf12").show();
                $("#sf13").hide();
                $("#sf14").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "number"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").show();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "currency"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").show();

            }
            else{

            }
            if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "text") {

                $("#sf21").show();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "datentime"){

                $("#sf21").hide();
                $("#sf22").show();
                $("#sf23").hide();
                $("#sf24").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "number"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").show();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "currency"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").show();

            }
            else{

            }
            if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "text") {

                $("#sf31").show();
                $("#sf32").hide();
                $("#sf33").hide();
                $("#sf34").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "datentime"){

                $("#sf31").hide();
                $("#sf32").show();
                $("#sf33").hide();
                $("#sf34").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "number"){

                $("#sf31").hide();
                $("#sf32").hide();
                $("#sf33").show();
                $("#sf34").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "currency"){

                $("#sf31").hide();
                $("#sf32").hide();
                $("#sf33").hide();
                $("#sf34").show();

            }
            else{

            }
        }
    }
    else if($("#secondary_couponSecondaryFieldTotalFields").val() == 4){

        if ($("#general_categoryName").val() == "Coupon"){
            $("#sf1").show();
            $("#sf2").show();
            $("#sf3").hide();
            $("#sf4").hide();

            if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "text") {

                $("#sf11").show();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "datentime"){

                $("#sf11").hide();
                $("#sf12").show();
                $("#sf13").hide();
                $("#sf14").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "number"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").show();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "currency"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").show();

            }
            else{

            }
            if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "text") {

                $("#sf21").show();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "datentime"){

                $("#sf21").hide();
                $("#sf22").show();
                $("#sf23").hide();
                $("#sf24").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "number"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").show();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "currency"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").show();

            }
            else{

            }
        }
        else {
            $("#sf1").show();
            $("#sf2").show();
            $("#sf3").show();
            $("#sf4").show();

            if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "text") {

                $("#sf11").show();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "datentime"){

                $("#sf11").hide();
                $("#sf12").show();
                $("#sf13").hide();
                $("#sf14").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "number"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").show();
                $("#sf14").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeOne").val() == "currency"){

                $("#sf11").hide();
                $("#sf12").hide();
                $("#sf13").hide();
                $("#sf14").show();

            }
            else{

            }
            if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "text") {

                $("#sf21").show();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "datentime"){

                $("#sf21").hide();
                $("#sf22").show();
                $("#sf23").hide();
                $("#sf24").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "number"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").show();
                $("#sf24").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeTwo").val() == "currency"){

                $("#sf21").hide();
                $("#sf22").hide();
                $("#sf23").hide();
                $("#sf24").show();

            }
            else{

            }
            if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "text") {

                $("#sf31").show();
                $("#sf32").hide();
                $("#sf33").hide();
                $("#sf34").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "datentime"){

                $("#sf31").hide();
                $("#sf32").show();
                $("#sf33").hide();
                $("#sf34").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "number"){

                $("#sf31").hide();
                $("#sf32").hide();
                $("#sf33").show();
                $("#sf34").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeThree").val() == "currency"){

                $("#sf31").hide();
                $("#sf32").hide();
                $("#sf33").hide();
                $("#sf34").show();

            }
            else{

            }
            if($("#secondary_couponSecondaryFieldValueTypeFour").val() == "text") {

                $("#sf41").show();
                $("#sf42").hide();
                $("#sf43").hide();
                $("#sf44").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeFour").val() == "datentime"){

                $("#sf41").hide();
                $("#sf42").show();
                $("#sf43").hide();
                $("#sf44").hide();
            }
            else if($("#secondary_couponSecondaryFieldValueTypeFour").val() == "number"){

                $("#sf41").hide();
                $("#sf42").hide();
                $("#sf43").show();
                $("#sf44").hide();

            }
            else if($("#secondary_couponSecondaryFieldValueTypeFour").val() == "currency"){

                $("#sf41").hide();
                $("#sf42").hide();
                $("#sf43").hide();
                $("#sf44").show();

            }
            else{

            }
        }
    }
    else{

    }

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

        if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "text") {

            $("#af11").show();
            $("#af12").hide();
            $("#af13").hide();
            $("#af14").hide();

        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "datentime"){

            $("#af11").hide();
            $("#af12").show();
            $("#af13").hide();
            $("#af14").hide();
        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "number"){

            $("#af11").hide();
            $("#af12").hide();
            $("#af13").show();
            $("#af14").hide();

        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "currency"){

            $("#af11").hide();
            $("#af12").hide();
            $("#af13").hide();
            $("#af14").show();

        }
        else{

        }
    }
    else if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 2){

        $("#af1").show();
        $("#af2").show();
        $("#af3").hide();
        $("#af4").hide();

        if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "text") {

            $("#af11").show();
            $("#af12").hide();
            $("#af13").hide();
            $("#af14").hide();

        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "datentime"){

            $("#af11").hide();
            $("#af12").show();
            $("#af13").hide();
            $("#af14").hide();
        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "number"){

            $("#af11").hide();
            $("#af12").hide();
            $("#af13").show();
            $("#af14").hide();

        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "currency"){

            $("#af11").hide();
            $("#af12").hide();
            $("#af13").hide();
            $("#af14").show();

        }
        else{

        }

        if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "text") {

            $("#af21").show();
            $("#af22").hide();
            $("#af23").hide();
            $("#af24").hide();

        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "datentime"){

            $("#af21").hide();
            $("#af22").show();
            $("#af23").hide();
            $("#af24").hide();
        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "number"){

            $("#af21").hide();
            $("#af22").hide();
            $("#af23").show();
            $("#af24").hide();

        }
        else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "currency"){

            $("#af21").hide();
            $("#af22").hide();
            $("#af23").hide();
            $("#af24").show();

        }
        else{

        }
    }
    else if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 3){
        if ($("#general_categoryName").val() == "Coupon"){
            $("#af1").show();
            $("#af2").show();
            $("#af3").hide();
            $("#af4").hide();

            if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "text") {

                $("#af11").show();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "datentime"){

                $("#af11").hide();
                $("#af12").show();
                $("#af13").hide();
                $("#af14").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "number"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").show();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "currency"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").show();

            }
            else{

            }

            if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "text") {

                $("#af21").show();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "datentime"){

                $("#af21").hide();
                $("#af22").show();
                $("#af23").hide();
                $("#af24").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "number"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").show();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "currency"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").show();

            }
            else{

            }
        }
        else {
            $("#af1").show();
            $("#af2").show();
            $("#af3").show();
            $("#af4").hide();

            if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "text") {

                $("#af11").show();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "datentime"){

                $("#af11").hide();
                $("#af12").show();
                $("#af13").hide();
                $("#af14").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "number"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").show();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "currency"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").show();

            }
            else{

            }

            if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "text") {

                $("#af21").show();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "datentime"){

                $("#af21").hide();
                $("#af22").show();
                $("#af23").hide();
                $("#af24").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "number"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").show();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "currency"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").show();

            }
            else{

            }
            if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "text") {

                $("#af31").show();
                $("#af32").hide();
                $("#af33").hide();
                $("#af34").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "datentime"){

                $("#af31").hide();
                $("#af32").show();
                $("#af33").hide();
                $("#af34").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "number"){

                $("#af31").hide();
                $("#af32").hide();
                $("#af33").show();
                $("#af34").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "currency"){

                $("#af31").hide();
                $("#af32").hide();
                $("#af33").hide();
                $("#af34").show();

            }
            else{

            }
        }
    }
    else if($("#auxiliary_couponAuxiliaryFieldTotalFields").val() == 4){

        if ($("#general_categoryName").val() == "Coupon"){
            $("#af1").show();
            $("#af2").show();
            $("#af3").hide();
            $("#af4").hide();

            if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "text") {

                $("#af11").show();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "datentime"){

                $("#af11").hide();
                $("#af12").show();
                $("#af13").hide();
                $("#af14").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "number"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").show();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "currency"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").show();

            }
            else{

            }

            if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "text") {

                $("#af21").show();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "datentime"){

                $("#af21").hide();
                $("#af22").show();
                $("#af23").hide();
                $("#af24").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "number"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").show();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "currency"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").show();

            }
            else{

            }
        }
        else {
            $("#af1").show();
            $("#af2").show();
            $("#af3").show();
            $("#af4").show();

            if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "text") {

                $("#af11").show();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "datentime"){

                $("#af11").hide();
                $("#af12").show();
                $("#af13").hide();
                $("#af14").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "number"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").show();
                $("#af14").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeOne").val() == "currency"){

                $("#af11").hide();
                $("#af12").hide();
                $("#af13").hide();
                $("#af14").show();

            }
            else{

            }

            if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "text") {

                $("#af21").show();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "datentime"){

                $("#af21").hide();
                $("#af22").show();
                $("#af23").hide();
                $("#af24").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "number"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").show();
                $("#af24").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeTwo").val() == "currency"){

                $("#af21").hide();
                $("#af22").hide();
                $("#af23").hide();
                $("#af24").show();

            }
            else{

            }
            if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "text") {

                $("#af31").show();
                $("#af32").hide();
                $("#af33").hide();
                $("#af34").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "datentime"){

                $("#af31").hide();
                $("#af32").show();
                $("#af33").hide();
                $("#af34").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "number"){

                $("#af31").hide();
                $("#af32").hide();
                $("#af33").show();
                $("#af34").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeThree").val() == "currency"){

                $("#af31").hide();
                $("#af32").hide();
                $("#af33").hide();
                $("#af34").show();

            }
            else{

            }
            if($("#auxiliary_couponAuxiliaryFieldValueTypeFour").val() == "text") {

                $("#af41").show();
                $("#af42").hide();
                $("#af43").hide();
                $("#af44").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeFour").val() == "datentime"){

                $("#af41").hide();
                $("#af42").show();
                $("#af43").hide();
                $("#af44").hide();
            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeFour").val() == "number"){

                $("#af41").hide();
                $("#af42").hide();
                $("#af43").show();
                $("#af44").hide();

            }
            else if($("#auxiliary_couponAuxiliaryFieldValueTypeFour").val() == "currency"){

                $("#af41").hide();
                $("#af42").hide();
                $("#af43").hide();
                $("#af44").show();

            }
            else{

            }
        }
    }
    else{

    }
    if($("#backfields_couponBackFieldTotalFields").val() == 0) {

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 1){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 2){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 3){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 4){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 5){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 6){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 7){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 8){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 9){

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
    else if($("#backfields_couponBackFieldTotalFields").val() == 10){

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

    if($("#primary_couponPrimaryFieldValueType").val() == "text") {

        $("#primary1").show();
        $("#primary2").hide();
        $("#primary3").hide();
        $("#primary4").hide();
    }
    else if($("#primary_couponPrimaryFieldValueType").val() == "datentime"){


        $("#primary1").hide();
        $("#primary2").show();
        $("#primary3").hide();
        $("#primary4").hide();
    }
    else if($("#primary_couponPrimaryFieldValueType").val() == "number"){

        $("#primary1").hide();
        $("#primary2").hide();
        $("#primary3").show();
        $("#primary4").hide();
    }
    else if($("#primary_couponPrimaryFieldValueType").val() == "currency"){

        $("#primary1").hide();
        $("#primary2").hide();
        $("#primary3").hide();
        $("#primary4").show();

    }
    else{

    }
    if($("#header_couponHeaderValueType").val() == "text")
    {

        $("#header1").show();
        $("#header2").hide();
        $("#header3").hide();
        $("#header4").hide();

    }
    else if($("#header_couponHeaderValueType").val() == "datentime")
    {

        $("#header1").hide();
        $("#header2").show();
        $("#header3").hide();
        $("#header4").hide();
    }
    else if($("#header_couponHeaderValueType").val() == "number"){

        $("#header1").hide();
        $("#header2").hide();
        $("#header3").show();
        $("#header4").hide();
    }
    else if($("#header_couponHeaderValueType").val() == "currency"){

        $("#header1").hide();
        $("#header2").hide();
        $("#header3").hide();
        $("#header4").show();
    }
    else{

    }
    if ($("#general_categoryName").val() == "Generic"){
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
    if($("#datasetting_couponBarcodeValueOption").val() == "Static") {
        
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
        
        if($("#datasetting_couponBarcodeValueSource").val() == "autogen") {
            
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

        $('#Widget_couponBarcodeDynamicValue').show();
        //$("#datasetting_couponBarcodeDynamicValue").show();
        //$('label[for=datasetting_couponBarcodeDynamicValue]').show();

    }

    if($("#datasetting_barcodeAlternateText").val() == "static") {
        
        $('#Widget_barcodeAlternateFixedText').show();
        //$("#datasetting_barcodeAlternateFixedText").show();
        //$('label[for=datasetting_barcodeAlternateFixedText]').show();
        
        $('#Widget_barcodeAlternateDynamicText').hide();
        //$("#datasetting_barcodeAlternateDynamicText").hide();
        //$('label[for=datasetting_barcodeAlternateDynamicText]').hide();

    }

    else if($("#datasetting_barcodeAlternateText").val() == "dynamic") {
        
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
    if($("#datasetting_couponBarcodeStatus").val() == "show") {
        $('#Widget_br').show();
    }

    else{
        $('#Widget_br').hide();
    }
    if ($("#general_categoryName").val() == "Generic"){
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

    // foo is the id of the other select box
    if ($("#general_categoryName").val() == "Boarding Pass") {
        $('#Widget_boardingPassTransit').show();
        //$("#general_boardingPassTransit").show();
        //$('label[for=general_boardingPassTransit]').show();
        $("#appearance_boardingPassFooter").show();
        $('label[for=appearance_boardingPassFooter]').show();
        $("#appearance_genericThumbnail").hide();
        $('label[for=appearance_genericThumbnail]').hide();
        $("#appearance_couponStrip").hide();
        $('label[for=appearance_couponStrip]').hide();
        $("#appearance_storeCardStrip").hide();
        $('label[for=appearance_storeCardStrip]').hide();
        
        $('#Widget_eventTicketStatus').hide();
        //$("#appearance_eventTicketStatus").hide();
        //$('label[for=appearance_eventTicketStatus]').hide();
        $("#appearance_eventTicketStrip").hide();
        $('label[for=appearance_eventTicketStrip]').hide();
        $("#appearance_eventTicketThumbnail").hide();
        $('label[for=appearance_eventTicketThumbnail]').hide();
        $("#appearance_eventTicketBackground").hide();
        $('label[for=appearance_eventTicketBackground]').hide();
        $('#Widget_Places').hide();
        //$("#general_places").hide();
        //$('label[for=general_places]').hide();

        $("#af").show();
        $("#haf").hide();

    }
    else if ($("#general_categoryName").val() == "Generic") {
        $("#appearance_genericThumbnail").show();
        $('label[for=appearance_genericThumbnail]').show();
        $('#Widget_boardingPassTransit').hide();
        //$("#general_boardingPassTransit").hide();
        //$('label[for=general_boardingPassTransit]').hide();
        $("#appearance_boardingPassFooter").hide();
        $('label[for=appearance_boardingPassFooter]').hide();
        $("#appearance_couponStrip").hide();
        $('label[for=appearance_couponStrip]').hide();
        $("#appearance_storeCardStrip").hide();
        $('label[for=appearance_storeCardStrip]').hide();
        
        $('#Widget_eventTicketStatus').hide();
        //$("#appearance_eventTicketStatus").hide();
        //$('label[for=appearance_eventTicketStatus]').hide();
        $("#appearance_eventTicketStrip").hide();
        $('label[for=appearance_eventTicketStrip]').hide();
        $("#appearance_eventTicketThumbnail").hide();
        $('label[for=appearance_eventTicketThumbnail]').hide();
        $("#appearance_eventTicketBackground").hide();
        $('label[for=appearance_eventTicketBackground]').hide();
        
        $('#Widget_Places').hide();
        //$("#general_places").hide();
        //$('label[for=general_places]').hide();

    }
    else if ($("#general_categoryName").val() == "Coupon") {
        $("#appearance_couponStrip").show();
        $('label[for=appearance_couponStrip]').show();
        $("#appearance_genericThumbnail").hide();
        $('label[for=appearance_genericThumbnail]').hide();
        $('#Widget_boardingPassTransit').hide();
        //$("#general_boardingPassTransit").hide();
        //$('label[for=general_boardingPassTransit]').hide();
        $("#appearance_boardingPassFooter").hide();
        $('label[for=appearance_boardingPassFooter]').hide();
        $("#appearance_storeCardStrip").hide();
        $('label[for=appearance_storeCardStrip]').hide();
        
        $('#Widget_eventTicketStatus').hide();
        //$("#appearance_eventTicketStatus").hide();
        //$('label[for=appearance_eventTicketStatus]').hide();
        $("#appearance_eventTicketStrip").hide();
        $('label[for=appearance_eventTicketStrip]').hide();
        $("#appearance_eventTicketThumbnail").hide();
        $('label[for=appearance_eventTicketThumbnail]').hide();
        $("#appearance_eventTicketBackground").hide();
        $('label[for=appearance_eventTicketBackground]').hide();
        $('#Widget_Places').show();
        //$("#general_places").show();
        //$('label[for=general_places]').show();
        $("#af").show();
        $("#haf").hide();
    }
    else if ($("#general_categoryName").val() == "Event Ticket") {
        
        $('#Widget_eventTicketStatus').show();
        //$("#appearance_eventTicketStatus").show();
        //$('label[for=appearance_eventTicketStatus]').show();
        $("#appearance_eventTicketStrip").show();
        $('label[for=appearance_eventTicketStrip]').show();
        $("#appearance_eventTicketThumbnail").hide();
        $('label[for=appearance_eventTicketThumbnail]').hide();
        $("#appearance_eventTicketBackground").hide();
        $('label[for=appearance_eventTicketBackground]').hide();

        $("#appearance_genericThumbnail").hide();
        $('label[for=appearance_genericThumbnail]').hide()
        $('#Widget_boardingPassTransit').hide();
        //$("#general_boardingPassTransit").hide();
        //$('label[for=general_boardingPassTransit]').hide();
        $("#appearance_boardingPassFooter").hide();
        $('label[for=appearance_boardingPassFooter]').hide();
        $("#appearance_couponStrip").hide();
        $('label[for=appearance_couponStrip]').hide();
        $("#appearance_storeCardStrip").hide();
        $('label[for=appearance_storeCardStrip]').hide();
        $('#Widget_Places').hide();
        //$("#general_places").hide();
        //$('label[for=general_places]').hide();
        $("#af").show();
        $("#haf").hide();
        if($("#appearance_eventTicketStatus").val() == 'Layout 1: Strip'){
            $("#appearance_eventTicketStrip").show();
            $('label[for=appearance_eventTicketStrip]').show();
            $("#appearance_eventTicketThumbnail").hide();
            $('label[for=appearance_eventTicketThumbnail]').hide();
            $("#appearance_eventTicketBackground").hide();
            $('label[for=appearance_eventTicketBackground]').hide();
        }
        else if($("#appearance_eventTicketStatus").val() == 'Layout 2: Background/Thumbnail'){
            $("#appearance_eventTicketThumbnail").show();
            $('label[for=appearance_eventTicketThumbnail]').show();
            $("#appearance_eventTicketBackground").show();
            $('label[for=appearance_eventTicketBackground]').show();
            $("#appearance_eventTicketStrip").hide();
            $('label[for=appearance_eventTicketStrip]').hide();
        }
        else{
            $("#appearance_eventTicketThumbnail").show();
            $('label[for=appearance_eventTicketThumbnail]').show();
            $("#appearance_eventTicketBackground").show();
            $('label[for=appearance_eventTicketBackground]').show();
            $("#appearance_eventTicketStrip").hide();
            $('label[for=appearance_eventTicketStrip]').hide();
        }
    }
    else if ($("#general_categoryName").val() == "Store Card") {
        $("#appearance_storeCardStrip").show();
        $('label[for=appearance_storeCardStrip]').show();

        $("#appearance_genericThumbnail").hide();
        $('label[for=appearance_genericThumbnail]').hide();
        $('#Widget_boardingPassTransit').hide();
        //$("#general_boardingPassTransit").hide();
        //$('label[for=general_boardingPassTransit]').hide();
        $("#appearance_boardingPassFooter").hide();
        $('label[for=appearance_boardingPassFooter]').hide();
        $("#appearance_couponStrip").hide();
        $('label[for=appearance_couponStrip]').hide();
        
        $('#Widget_eventTicketStatus').hide();
        //$("#appearance_eventTicketStatus").hide();
        //$('label[for=appearance_eventTicketStatus]').hide();
        $("#appearance_eventTicketStrip").hide();
        $('label[for=appearance_eventTicketStrip]').hide();
        $("#appearance_eventTicketThumbnail").hide();
        $('label[for=appearance_eventTicketThumbnail]').hide();
        $("#appearance_eventTicketBackground").hide();
        $('label[for=appearance_eventTicketBackground]').hide();
        $('#Widget_Places').hide();
        //$("#general_places").hide();
        //$('label[for=general_places]').hide();
        $("#af").show();
        $("#haf").hide();
    }
    else{ //
    }
});
