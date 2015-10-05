<?php
    
    require_once(dirname(dirname(__FILE__)).'/base/getlists.php');



    $current_userid = get_current_user_id( ); 
    $current_user   = wp_get_current_user();
    $newPassKey = Helper::passId();


    $commonAttr = array('class'=>'form-control');
    
    

    $passFormatArray = GetLists::getPassNameFormat($current_userid);    
    
    $passFormatNo = (array_key_exists('pass_count', $passFormatArray )) ? ($passFormatArray['pass_count'] + 1) : 1;
    $defaultTemplateName = $current_user->user_login.'-kns-'.$passFormatNo;

    $companyName = get_user_meta($current_userid , '_companyname',true);
    //$companyName = 'test company';    



    $userName  = $current_user->user_login;
    $userEmail = $current_user->user_email; 

?>




<div class="passContentContainer">




    <h3 class="passHeading"> <?php echo(Helper::_t('head1','heading')); ?> </h3>
    <style type="text/css">
            .next { float: right;}
            .previous { float:right;margin-right: 10px;}
            .alert { width: 98% !important; margin-bottom: 15px; text-align: left; padding: 15px;}
            .alert p { font-size: 13px;}
            .tooltip-inner {text-align:left !important;padding: 7px;}
    </style>

    <div class="row">
        <div id="msgHolder"></div>
    </div> 


    <form action="" id="passbookTempleteFrm" name="passbookTempleteFrm" class="form-horizontal" method="POST" enctype="multipart/form-data" accept="image/png">
    <?php echo Form::input('hidden', 'formAction' , 'createpass' );?>
    <?php echo Form::input('hidden', 'general_userId' , $current_userid );?>
    <?php echo Form::input('hidden', 'general_passKey' , $newPassKey );?>
    <?php echo Form::input('hidden', 'general_organizationName' , $companyName );?>
    <?php echo Form::input('hidden', 'general_userName' , $userName );?>
    <?php echo Form::input('hidden', 'general_userEmail' , $userEmail );?>

    <div class="passFormContainer left">
        
        <div id="passbuilder-container">

        <!-- #section_1 -->
        <div class="section-1">
            <ul id="myTab" class="" role="tablist">
              <li><a class="a-btn activeTabOption" href="#generalTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('general','tabs')); ?></a></li>
              <li><a class="a-btn" href="#appearanceTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('appearance','tabs')); ?></a></li>
              <li><a class="a-btn" href="#data_settingsTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('data_settings','tabs')); ?></a></li>
              <li><a class="a-btn" href="#headerTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('header','tabs')); ?></a></li>
              <li><a class="a-btn" href="#primaryTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('primary','tabs')); ?></a></li>
              <li><a class="a-btn" href="#secondaryTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('secondary','tabs')); ?></a></li>
              <li><a class="a-btn" href="#auxiliaryTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('auxiliary','tabs')); ?></a></li>
              <li><a class="a-btn" href="#back_fieldsTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('back_fields','tabs')); ?></a></li>
              <li><a class="a-btn" href="#relevanceTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('relevance','tabs')); ?></a></li>
              <li><a class="a-btn" href="#distributionTab" role="tab" data-toggle="tab"><?php echo(Helper::_t('distribution','tabs')); ?></a></li>
            </ul>
        </div>
        <!-- #section_2 -->

        <!-- Tab panes -->
        <div class="tab-content">
          

          <div class="tab-pane active" id="generalTab">
                <!--general-form-->

                <div class="pagerHeading">
                    <div class="headingText left">
                        <h3><?php echo(Helper::_t('pass_meta','form')); ?></h3>
                    </div>
                    <div class="pagerContainer right">
                        <div style="padding:10px;">
                            <ul class="pager">
                                <li class="next"><a href="" id="generalNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div><!--@pagerHeading-->



                <table class="dataTable">
                    <tbody>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('name','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('g02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','general_templateName', $defaultTemplateName ,array('class'=>'form-control'));  ?>
                                <small><?php echo(Helper::_t('max_char','msg')); ?></small>
                            </td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('pass_key','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('g03','hlp')); ?>"><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td><b><?php echo($newPassKey); ?></b></td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('category','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('g04','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select( 'general_categoryName' , Data::$category , '' , array('class'=>'form-control','style'=>'width:180px;display:inline-block;')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_Places">
                            <th>
                                <?php echo(Helper::_t('coupon_category','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('g05','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('general_places', Data::$places, '' , array('class'=>'form-control','style'=>'width:180px;') ); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_boardingPassTransit" >
                            <th>
                                <?php echo(Helper::_t('transit','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php  echo(Helper::_t('g06','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('general_boardingPassTransit', Data::$boardingPassTransit ,'' , array('class'=>'form-control','style'=>'width:310px;'))?>
                            </td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('organization','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('g07','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <b><?php echo $companyName; ?></b>
                            </td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('description','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('g08','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('general_organizationDescription','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>    

                    </tbody>    
                </table>    

                <!--@general-form-->
          </div>



          <div class="tab-pane" id="appearanceTab">
            <!--appearance-form -->
            <div id="tabs-2" class="ui-tabs-panel">
                
                    <div class="pagerHeading">
                        <div class="headingText left">
                            <h3><?php echo(Helper::_t('image_text','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                    <li class="next"><a href="" id="appearanceNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                    <li class="previous"><a href="" id="appearanceBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div><!--@pagerHeading-->



                    <table class="dataTable">
                        <tbody>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('icon','form')); ?>: <span class="redMark">*</span>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_iconNameFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('logo','form')); ?>: <span class="redMark">*</span>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_logoNameFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('logo_text','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','appearance_logoText','',array('class'=>'form-control','maxlength'=>25)); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom" id="Widget_genericThumbnailFile">
                                <th>
                                    <?php echo(Helper::_t('thumbnail','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a04','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_genericThumbnailFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom" id="Widget_boardingPassFooterFile">
                                <th>
                                    <?php echo(Helper::_t('footer','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a05','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_boardingPassFooterFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom" id="Widget_couponStripFile">
                                <th>
                                    <?php echo(Helper::_t('strip','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a06','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>    
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_couponStripFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                    <small>
                                            <?php echo(Helper::_t('event_text','msg')); ?>
                                    </small>
                                </td>
                            </tr>
                            <tr class="brd-bottom" id="Widget_storeCardStripFile">
                                <th>
                                    <?php echo(Helper::_t('strip','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a07','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_storeCardStripFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                    <small>
                                            <?php echo(Helper::_t('event_text','msg')); ?>
                                    </small>
                                </td>    
                            </tr>
                            <tr class="brd-bottom" id="Widget_eventTicketStatus">
                                <th>
                                    
                                </th>
                                <td>
                                    <?php echo Form::select('appearance_eventTicketStatus',Data::$appearance_eventTicketStatus,'',$commonAttr);?>
                                </td>    
                            </tr>
                            <tr class="brd-bottom" id="Widget_eventTicketStripFile">
                                <th>
                                    <?php echo(Helper::_t('strip','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a08','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_eventTicketStripFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                    <small>
                                            <?php echo(Helper::_t('event_text','msg')); ?>
                                    </small>
                                </td>    
                            </tr>
                            <tr class="brd-bottom" id="Widget_eventTicketThumbnailFile">
                                <th>
                                    <?php echo(Helper::_t('thumbnail','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a09','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_eventTicketThumbnailFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                    <small>
                                        <?php echo(Helper::_t('recommand_text','msg')); ?>
                                    </small>
                                </td>    
                            </tr>
                            <tr class="brd-bottom" id="Widget_eventTicketBackgroundFile">
                                <th>
                                    <?php echo(Helper::_t('background','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a10','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('file','appearance_eventTicketBackgroundFile','',array('class'=>'form-control','accept'=>'image/png')); ?>
                                    <small>
                                            <?php echo(Helper::_t('recommand_size','msg')); ?>
                                    </small>
                                </td>    
                            </tr>    
                        </tbody>    
                    </table>

                    <h3>Colors</h3>
                    <small style="margin:5px;display:block !important;font-size:12px;">(Event Ticket passes set with a background image will always show the value colors as white, no matter the settings)</small>

                    <table class="dataTable">
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('background','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a11','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                            </th>
                            <td>
                                <?php echo Form::input('text','appearance_backgroundColorCode','', array('class'=>'form-control','style'=>'padding-left:5px;') ); ?>
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('field_label','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a12','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                            </th>
                            <td>
                                <?php echo Form::input('text','appearance_fieldLabelColorCode','', array('class'=>'form-control','style'=>'padding-left:5px;') ); ?>
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('field_value','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('a13','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                            </th>
                            <td>
                                <?php echo Form::input('text','appearance_fieldValueColorCode','', array('class'=>'form-control','style'=>'padding-left:5px;') ); ?>
                            </td>    
                        </tr>
                    </table>        


                </div>
            <!--@appearance-form-->
          </div>
          


          <div class="tab-pane" id="data_settingsTab">
            <!--Data settings-->
            <div id="tabs-3" class="ui-tabs-panel">
                

                <div class="pagerHeading">
                        <div class="headingText left">
                            <h3><?php echo(Helper::_t('pass_data_barcode','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                    <li class="next"><a href="" id="datesettingNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                    <li class="previous"><a href="" id="datesettingBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div><!--@pagerHeading-->


            <table class="dataTable">
                <tr class="brd-bottom">
                    <th style="width:26% !important;">
                        <?php echo(Helper::_t('add_barcode','form')); ?>: <span class="redMark">*</span>&nbsp;
                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                    </th>
                    <td>
                        <?php echo Form::select('datasetting_couponBarcodeStatus', Data::$datasetting_couponBarcodeStatus,'',array('class'=>'form-control','style'=>'width:210px;')); ?>
                    </td>    
                </tr>
                <tr  id="Widget_br">
                    <td class="clearall" colspan="2">
                    <!--#inner-table -->
                    <table class="dataTable">
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('barcode_type','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td><?php echo Form::select('datasetting_couponBarcodeType', Data::$couponBarcode,'',array('class'=>'form-control','style'=>'width:150px;')); ?></td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('barcode_value','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('datasetting_couponBarcodeValueOption', Data::$couponBarcodeValue,'',array('class'=>'form-control','style'=>'width:160px;')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_couponBarcodeFixedValue">
                            <th>
                                <?php echo(Helper::_t('fixed_value','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_04','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('datasetting_couponBarcodeFixedValue','',array('class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_couponBarcodeValueSource">
                            <th>
                                <?php echo(Helper::_t('barcode_value_source','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_05','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('datasetting_couponBarcodeValueSource', Data::$couponBarcodeValueSourc,'',array('class'=>'form-control','style'=>'width:140px;')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_couponAutoGenerateValueType">
                            <th>
                                <?php echo(Helper::_t('auto_generate_value','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_06','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('datasetting_couponAutoGenerateValueType', Data::$couponAutoGenerateValueType,'',array('class'=>'form-control','style'=>'width:170px;display:inline-block;')); ?> 
                                &nbsp;&nbsp;
                                <?php echo Form::select('datasetting_couponAutoGenerateValueLength', Data::$couponAutoGenerateValueLength,'',array('class'=>'form-control','style'=>'width:140px;display:inline-block;')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_couponBarcodeDynamicValue">
                            <th>
                                <?php echo(Helper::_t('dynamic_value','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_07','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('datasetting_couponBarcodeDynamicValue','',$commonAttr); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('barcode_encoding','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_08','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('datasetting_couponBarcodeEncoding', Data::$datasetting_couponBarcodeEncoding,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('alternate_text','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_09','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('datasetting_barcodeAlternateText', Data::$barcodeAlternateText,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_barcodeAlternateFixedText">
                            <th>
                                <?php echo(Helper::_t('fixed_text','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_10','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('datasetting_barcodeAlternateFixedText','', $commonAttr); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom" id="Widget_barcodeAlternateDynamicText">
                            <th>
                                <?php echo(Helper::_t('dynamic_text','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('data_11','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('datasetting_barcodeAlternateDynamicText','', $commonAttr); ?>
                            </td>
                        </tr>    
                    </table>    
                    <!--@inner-table -->
                    </td>
                </tr>    
            </table>


            </div>
            <!--@Data settings-->
          </div>




          <div class="tab-pane" id="headerTab">
            <!--Header-->
            <div id="tabs-4" class="ui-tabs-panel">




                <div class="pagerHeading">
                        <div class="headingText left">
                            <h3><?php echo(Helper::_t('header_fields','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                    <li class="next"><a href="" id="headerNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                    <li class="previous"><a href="" id="headerBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div><!--@pagerHeading-->


                <table class="dataTable">
                    <tr>
                        <th>
                            <?php echo(Helper::_t('label','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                        </th>
                        <td>
                            <?php echo Form::input('text','header_couponHeaderLabel','', array('maxlength'=>25,'class'=>'form-control')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom" >
                        <th>
                            <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;           
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a> 
                        </th>
                        <td>
                            <?php echo Form::checkbox('header_couponHeaderLabelDynamicStatus',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('type','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('header_couponHeaderValueType', Data::$fieldValueType,'', array('class'=>'form-control','style'=>'width:200px;')); ?>
                        </td>    
                    </tr>
                    <tr id="header1">
                        <td class="clearall" colspan="2">
                        <!--#inner-table2 -->
                        <table class="dataTable">
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','header_couponHeaderTextValue','', array('maxlength'=> 25 , 'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('header_couponHeaderTextDynamicStatus',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>    
                        <!--@inner-table2 -->    
                        </td>    
                    </tr>
                    <tr id="header2">
                        <td class="clearall" colspan="2">
                        <!--#inner-table3 -->
                        <table class="dataTable">
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','header_couponHeaderValueDate','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                    <?php echo Form::input('text','header_couponHeaderValueTime','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                    <?php echo Form::select('header_couponHeaderValueTimezone', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                </td>    
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('header_couponHeaderValueDateFormate', Data::$dateFormat,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('header_couponHeaderValueTimeFormate', Data::$timeFormat,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                </td>
                            </tr>    
                        </table>    
                        <!--@inner-table3 -->    
                        </td>    
                    </tr>

                    <tr id="header3">
                        <td class="clearall" colspan="2">
                        <!--#inner-table4 -->
                        <table class="dataTable">
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','header_couponHeaderNumberValue','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('header_couponHeaderNumberFormate', Data::$numberFormat,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                                </td>
                            </tr>
                        </table>    
                        <!--@inner-table4 -->    
                        </td>    
                    </tr>
                    <tr id="header4">
                        <td class="clearall" colspan="2">
                        <!--#inner-table5 -->
                        <table class="dataTable">
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','header_couponHeaderCurrencyValue','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('header_couponHeaderCurrencyCode', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;')); ?>
                                </td>
                            </tr>
                        </table>    
                        <!--@inner-table5 -->    
                        </td>    
                    </tr>
                    <tr>
                        <th>
                            <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('header_couponHeaderAlignmnet', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                        </td>
                    </tr>    

                </table>

                </div>
            <!--@Header-->
          </div>




          <div class="tab-pane" id="primaryTab"> 
            <!--Primary-->
            <div id="tabs-5" class="ui-tabs-panel">
                

                <div class="pagerHeading">
                        <div class="headingText left">
                            <h3><?php echo(Helper::_t('primary_fields','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                    <li class="next"><a href="" id="primaryNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                    <li class="previous"><a href="" id="primaryBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div><!--@pagerHeading-->   
                

                <table class="dataTable">
                    <tr>
                        <th>
                            <?php echo(Helper::_t('label','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::input('text','primary_couponPrimaryFieldLabel','',array('maxlength'=>25,'class'=>'form-control')); ?>
                        </td>
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::checkbox('primary_couponPrimaryFieldLabelDynamicStatus',false, array('class'=>'form-control','style'=>'width:10px;')); ?>
                        </td>
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('type','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('primary_couponPrimaryFieldValueType', Data::$fieldValueType,'', array('class'=>'form-control','style'=>'width:300px;')); ?>
                        </td>
                    </tr>
                    <tr id="primary1">
                        <td class="clearall" colspan="2">
                        <!--#inner-->
                        <table class="dataTable">
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('value_text','form')); ?> &nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','primary_couponPrimaryFieldTextValue','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('primary_couponPrimaryFieldTextDynamicStatus',false, array('class'=>'form-control','style'=>'width:10px;')); ?>
                                </td>
                            </tr>
                        </table>    
                        <!--@inner-->    
                        </td>    
                    </tr>

                    <tr id="primary2">
                        <td class="clearall" colspan="2">
                        <!--#inner-->
                        <table class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','primary_couponPrimaryFieldValueDate','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                    <?php echo Form::input('text','primary_couponPrimaryFieldValueTime','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                    <?php echo Form::select('primary_couponPrimaryFieldValueTimezone', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('primary_couponPrimaryFieldValueDateFormate', Data::$dateFormat,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('primary_couponPrimaryFieldValueTimeFormate', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                                </td>
                            </tr>
                        </table>
                        <!--@inner-->    
                        </td>    
                    </tr>

                    <tr id="primary3">
                        <td class="clearall" colspan="2">
                        <!--#inner-->
                        <table class="dataTable">
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','primary_couponPrimaryFieldNumberValue','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('primary_couponPrimaryFieldNumberFormate', Data::$numberFormat,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                                </td>
                            </tr>
                        </table>
                        <!--@inner-->    
                        </td>    
                    </tr>

                    <tr id="primary4">
                        <td class="clearall" colspan="2">
                        <!--#inner-->
                        <table class="dataTable">
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','primary_couponPrimaryFieldCurrencyValue','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::select('primary_couponPrimaryFieldCurrencyCode', Data::$currencyCodes,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                                </td>
                            </tr>
                        </table>
                        <!--@inner-->    
                        </td>    
                    </tr>    
                </table>    



                   
                </div>
            <!--@Primary-->
          </div>



          <div class="tab-pane" id="secondaryTab">
            <!--@Secondary-->
            <div id="tabs-6" class="ui-tabs-panel">
                

                <div class="pagerHeading">
                        <div class="headingText left">
                            <h3><?php echo(Helper::_t('secondary_fields','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                <li class="next"><a href="" id="secondaryNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                <li class="previous"><a href="" id="secondaryBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div><!--@pagerHeading-->


            <table id="sf" class="dataTable">
                <tr class="brd-bottom">
                    <th>
                        <?php echo(Helper::_t('total_secondary_fields','form')); ?>
                    </th>
                    <td>
                        <?php echo Form::select('secondary_couponSecondaryFieldTotalFields', Data::$no4,'', array('class'=>'form-control','style'=>'width:100px;')); ?>
                    </td>
                </tr>
            </table>


            <!-- $secondary_One -->
            <div id="sf1" class="secondary_container">
                <div id="wrapper-head-1" class="field-header-container">
                    <h4> <?php echo(Helper::_t('secondary_fields_1','form')); ?> </h4>
                </div>
                <table  class="dataTable">
                    <tr>
                        <th>
                            <?php echo(Helper::_t('label','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::input('text','secondary_couponSecondaryFieldLabelOne','', array('maxlength'=>25,'class'=>'form-control')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::checkbox('secondary_couponSecondaryFieldLabelDynamicStatusOne',false, array('class'=>'form-control','style'=>'width:10px;')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('type','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldValueTypeOne', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                        </td>    
                    </tr>

                    <tr id="sf11">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldTextValueOne','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::checkbox('secondary_couponSecondaryFieldTextDynamicStatusOne',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                    </td>
                                </tr>   
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf12">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueDateOne','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueTimeOne','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimezoneOne', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                    </td>
                                </tr>    
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueDateFormateOne', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimeFormateOne', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf13">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldNumberValueOne','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldNumberFormateOne', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf14">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldCurrencyValueOne','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldCurrencyCodeOne', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>
                    <tr>
                        <th>
                            <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldAlignmnetOne', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                        </td>
                    </tr>    
                </table>    
            </div><!--@secondary_wrapper1-->

            <!-- $secondary_Two -->
            <div id="sf2" class="secondary_container">
                <div id="" class="field-header-container">
                    <h4> <?php echo(Helper::_t('secondary_fields_2','form')); ?></h4>
                </div>
                <table  class="dataTable">
                    <tr>
                        <th>
                            <?php echo(Helper::_t('label','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::input('text','secondary_couponSecondaryFieldLabelTwo','', array('maxlength'=>25,'class'=>'form-control')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::checkbox('secondary_couponSecondaryFieldLabelDynamicStatusTwo',false, array('class'=>'form-control','style'=>'width:10px;')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('type','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldValueTypeTwo', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                        </td>    
                    </tr>

                    <tr id="sf21">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldTextValueTwo','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::checkbox('secondary_couponSecondaryFieldTextDynamicStatusTwo',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                    </td>
                                </tr>   
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf22">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueDateTwo','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueTimeTwo','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimezoneTwo', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                    </td>
                                </tr>    
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueDateFormateTwo', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimeFormateTwo', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf23">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldNumberValueTwo','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldNumberFormateTwo', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf24">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldCurrencyValueTwo','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldCurrencyCodeTwo', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>
                    <tr>
                        <th>
                            <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldAlignmnetTwo', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                        </td>
                    </tr>    
                </table>    
            </div><!--@secondary_wrapper2-->


            <!-- $secondary_Three -->
            <div id="sf3" class="secondary_container">
                <div id="" class="field-header-container">
                    <h4> <?php echo(Helper::_t('secondary_fields_3','form')); ?></h4>
                </div>
                <table  class="dataTable">
                    <tr>
                        <th>
                            <?php echo(Helper::_t('label','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::input('text','secondary_couponSecondaryFieldLabelThree','', array('maxlength'=>25,'class'=>'form-control')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::checkbox('secondary_couponSecondaryFieldLabelDynamicStatusThree',false, array('class'=>'form-control','style'=>'width:10px;')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('type','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldValueTypeThree', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                        </td>    
                    </tr>

                    <tr id="sf31">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldTextValueThree','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::checkbox('secondary_couponSecondaryFieldTextDynamicStatusThree',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                    </td>
                                </tr>   
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf32">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueDateThree','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueTimeThree','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimezoneThree', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                    </td>
                                </tr>    
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueDateFormateThree', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimeFormateThree', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf33">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldNumberValueThree','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldNumberFormateThree', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf34">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldCurrencyValueThree','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldCurrencyCodeThree', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>
                    <tr>
                        <th>
                            <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldAlignmnetThree', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                        </td>
                    </tr>    
                </table>    
            </div><!--@secondary_wrapper3-->


            <!-- $secondary_Four -->
            <div id="sf4" class="secondary_container">
                <div id="" class="field-header-container">
                    <h4> <?php echo(Helper::_t('secondary_fields_4','form')); ?> </h4>
                </div>
                <table  class="dataTable">
                    <tr>
                        <th>
                            <?php echo(Helper::_t('label','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::input('text','secondary_couponSecondaryFieldLabelFour','', array('maxlength'=>25,'class'=>'form-control')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::checkbox('secondary_couponSecondaryFieldLabelDynamicStatusFour',false, array('class'=>'form-control','style'=>'width:10px;')); ?>
                        </td>    
                    </tr>
                    <tr class="brd-bottom">
                        <th>
                            <?php echo(Helper::_t('type','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldValueTypeFour', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                        </td>    
                    </tr>

                    <tr id="sf41">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldTextValueFour','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::checkbox('secondary_couponSecondaryFieldTextDynamicStatusFour',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                    </td>
                                </tr>   
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf42">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueDateFour','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldValueTimeFour','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimezoneFour', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                    </td>
                                </tr>    
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueDateFormateFour', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldValueTimeFormateFour', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                    </td>
                                </tr> 
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf43">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldNumberValueFour','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldNumberFormateFour', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>

                    <tr id="sf44">
                        <td class="clearall" colspan="2">
                            <!--#inner-table -->
                            <table class="dataTable">
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::input('text','secondary_couponSecondaryFieldCurrencyValueFour','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                        <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                    </th>
                                    <td>
                                        <?php echo Form::select('secondary_couponSecondaryFieldCurrencyCodeFour', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                    </td>
                                </tr>    
                            </table>    
                            <!--@inner-table -->
                        </td>    
                    </tr>
                    <tr>
                        <th>
                            <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                        </th>
                        <td>
                            <?php echo Form::select('secondary_couponSecondaryFieldAlignmnetFour', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                        </td>
                    </tr>    
                </table>    
            </div><!--@secondary_wrapper4-->


            </div>
            <!--@Secondary-->
          </div>




          <div class="tab-pane" id="auxiliaryTab">
          <!--@Auxiliary-->
          <div id="tabs-7" class="ui-tabs-panel">
            

                <div class="pagerHeading">
                        <div class="headingText left">
                           <h3><?php echo(Helper::_t('auxiliary_fields','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                    <li class="next"><a href="" id="auxiliaryNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                    <li class="previous"><a href="" id="auxiliaryBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div><!--@pagerHeading-->

          
          <p id="haf">
            <?php echo(Helper::_t('auxiliary_text','msg')); ?>
          </p>

          <table id="af" class="dataTable">
                <tr class="brd-bottom">
                    <th>
                        <?php echo(Helper::_t('total_auxiliary','form')); ?>
                    </th>
                    <td>
                        <?php echo Form::select('auxiliary_couponAuxiliaryFieldTotalFields', Data::$no4,'', array('class'=>'form-control','style'=>'width:100px;') ); ?>
                    </td>
                </tr>
            </table>

                <!-- $Auxiliary_One -->
                <div id="af1" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('auxiliary_field_1','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldLabelOne','',array('maxlength'=>25,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldLabelDynamicStatusOne',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('type','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTypeOne', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                            </td>
                        </tr>
                        <tr id="af11">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldTextValueOne','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldTextDynamicStatusOne',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                            </td>
                                        </tr>   
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af12">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueDateOne','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueTimeOne','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimezoneOne', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueDateFormateOne', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimeFormateOne', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af13">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldNumberValueOne','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldNumberFormateOne', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af14">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldCurrencyValueOne','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldCurrencyCodeOne', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldAlignmnetOne', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                            </td>
                        </tr>
                </table>
            </div><!-- @Auxiliary_One -->       
        
            <!-- $Auxiliary_Two -->
            <div id="af2" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('auxiliary_field_2','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldLabelTwo','',array('maxlength'=>25,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldLabelDynamicStatusTwo',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('type','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTypeTwo', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                            </td>
                        </tr>
                        <tr id="af21">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldTextValueTwo','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldTextDynamicStatusTwo',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                            </td>
                                        </tr>   
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af22">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueDateTwo','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueTimeTwo','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimezoneTwo', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueDateFormateTwo', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimeFormateTwo', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af23">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldNumberValueTwo','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldNumberFormateTwo', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af24">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldCurrencyValueTwo','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldCurrencyCodeTwo', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldAlignmnetTwo', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                            </td>
                        </tr>
                </table>
            </div><!-- @Auxiliary_Two -->

            <!-- $Auxiliary_Three -->
            <div id="af3" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('auxiliary_field_3','form')); ?></h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldLabelThree','',array('maxlength'=>25,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldLabelDynamicStatusThree',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('type','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTypeThree', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                            </td>
                        </tr>
                        <tr id="af31">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldTextValueThree','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldTextDynamicStatusThree',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                            </td>
                                        </tr>   
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af32">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueDateThree','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueTimeThree','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimezoneThree', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueDateFormateThree', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimeFormateThree', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af33">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldNumberValueThree','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldNumberFormateThree', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af34">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldCurrencyValueThree','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldCurrencyCodeThree', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldAlignmnetThree', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                            </td>
                        </tr>
                </table>
            </div><!-- @Auxiliary_Three -->

            <!-- $Auxiliary_Four -->
            <div id="af4" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('auxiliary_field_4','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldLabelFour','',array('maxlength'=>25,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldLabelDynamicStatusFour',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('type','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('type_select','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTypeFour', Data::$fieldValueType,'',array('class'=>'form-control','style'=>'width:250px;')); ?>
                            </td>
                        </tr>
                        <tr id="af41">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('value_text','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldTextValueFour','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                            </th>
                                            <td>
                                                <?php echo Form::checkbox('auxiliary_couponAuxiliaryFieldTextDynamicStatusFour',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                            </td>
                                        </tr>   
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af42">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_date_time','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueDateFour','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldValueTimeFour','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimezoneFour', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('date_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('date_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueDateFormateFour', Data::$dateFormat ,'', array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('time_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('time_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldValueTimeFormateFour', Data::$dateFormat2,'',array('class'=>'form-control','style'=>'width:250px;') ); ?>
                                        </td>
                                    </tr> 
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af43">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_number','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldNumberValueFour','', array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('number_format','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('number_style_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldNumberFormateFour', Data::$numberFormat,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr id="af44">
                            <td class="clearall" colspan="2">
                                <!--#inner-table -->
                                <table class="dataTable">
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('value_currency','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_txt_for_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::input('text','auxiliary_couponAuxiliaryFieldCurrencyValueFour','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <?php echo(Helper::_t('currency_code','form')); ?>&nbsp;
                                            <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('currency_code_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                        </th>
                                        <td>
                                            <?php echo Form::select('auxiliary_couponAuxiliaryFieldCurrencyCodeFour', Data::$currencyCodes,'', array('class'=>'form-control','style'=>'width:300px;') ); ?>
                                        </td>
                                    </tr>    
                                </table>    
                                <!--@inner-table -->
                            </td>    
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('alignment','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('align_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('auxiliary_couponAuxiliaryFieldAlignmnetFour', Data::$alignments,'',array('class'=>'form-control','style'=>'width:150px;')); ?>
                            </td>
                        </tr>
                </table>
            </div><!-- @Auxiliary_Four -->




          </div>
          <!--@Auxiliary-->
          </div>
          




          <div class="tab-pane" id="back_fieldsTab">
          <!--@Backfields-->
          <div id="tabs-8" class="ui-tabs-panel">
          <!--@Backfields-->

                <div class="pagerHeading">
                        <div class="headingText left">
                           <h3><?php echo(Helper::_t('back_fields','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                    <li class="next"><a href="" id="backfieldsNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                    <li class="previous"><a href="" id="backfieldsBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div><!--@pagerHeading-->


            <table id="bf" class="dataTable">
                <tr class="brd-bottom">
                    <th>
                        <?php echo(Helper::_t('total_back_fields','form')); ?>
                    </th>
                    <td>
                        <?php echo Form::select('backfields_couponBackFieldTotalFields', Data::$no10,'', array('class'=>'form-control','style'=>'width:100px;') ); ?>
                    </td>
                </tr>
            </table>



                <!-- #backfield_One -->
                <div id="bf1" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_1','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelOne','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusOne',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueOne','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusOne',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_One -->                  

                <!-- #backfield_Two -->
                <div id="bf2" class="secondary_container">
                        <div class="field-header-container">
                            <h4><?php echo(Helper::_t('back_field_2','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelTwo','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusTwo',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueTwo','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusTwo',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Two -->
                      
                <!-- #backfield_Three -->
                <div id="bf3" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_3','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelThree','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusThree',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueThree','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusThree',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Three -->

                <!-- #backfield_Four -->
                <div id="bf4" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_4','form')); ?></h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelFour','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusFour',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueFour','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusFour',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Four -->

                <!-- #backfield_Five -->
                <div id="bf5" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_5','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelFive','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusFive',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueFive','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusFive',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Five -->

                <!-- #backfield_Six -->
                <div id="bf6" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_6','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelSix','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusSix',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueSix','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusSix',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Six -->

                <!-- #backfield_Seven -->
                <div id="bf7" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_7','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelSeven','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusSeven',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueSeven','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusSeven',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Seven -->

                <!-- #backfield_Eight -->
                <div id="bf8" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_8','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelEight','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusEight',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueEight','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusEight',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Eight -->

                <!-- #backfield_Nine -->
                <div id="bf9" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_9','form')); ?></h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelNine','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusNine',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueNine','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusNine',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Nine -->

                <!-- #backfield_Ten -->
                <div id="bf10" class="secondary_container">
                        <div class="field-header-container">
                            <h4> <?php echo(Helper::_t('back_field_10','form')); ?> </h4>
                        </div>
                        <table  class="dataTable">
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('label','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('label_txt_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::input('text','backfields_couponBackFieldLabelTen','',array('maxlength'=>25,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr class="brd-bottom">
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldLabelDynamicStatusTen',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('value','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('value_of_field','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::textarea('backfields_couponBackFieldTextValueTen','', array('maxlength'=>250,'class'=>'form-control')); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dynamic_status','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                                </th>
                                <td>
                                    <?php echo Form::checkbox('backfields_couponBackFieldTextDynamicStatusTen',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                                </td>
                            </tr>    
                        </table>
                </div><!-- @backfield_Ten -->

          </div>
          </div>
          




          <div class="tab-pane" id="relevanceTab">
          <!--@Relevance-->
          <div id="tabs-9" class="ui-tabs-panel">
          <!--@Relevance-->

                <div class="pagerHeading">
                        <div class="headingText left">
                           <h3><?php echo(Helper::_t('relevance_info','form')); ?></h3>
                        </div>
                        <div class="pagerContainer right">
                            <div style="padding:10px;">
                                <ul class="pager">
                                    <li class="next"><a href="" id="relevanceNext"><?php echo(Helper::_t('next','msg')); ?></a></li>
                                    <li class="previous"><a href="" id="relevanceBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                </div><!--@pagerHeading-->

          
            <table id="rl" class="dataTable">
                <tr class="brd-bottom">
                    <th>
                        <?php echo(Helper::_t('total_relevance','form')); ?>
                    </th>
                    <td>
                        <?php echo Form::select('relevance_couponRelevanceLocationTotalFields', Data::$no10,'', array('class'=>'form-control','style'=>'width:100px;') ); ?>
                    </td>
                </tr>
            </table>


                <!-- #Relevance_One -->
                <div id="rl1" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_1','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressOne','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextOne','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusOne',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_One -->    

                <!-- #Relevance_Two -->
                <div id="rl2" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_2','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressTwo','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextTwo','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusTwo',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Two -->                            

                <!-- #Relevance_Three -->
                <div id="rl3" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_3','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressThree','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextThree','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusThree',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Three -->

                <!-- #Relevance_Four -->
                <div id="rl4" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_4','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressFour','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextFour','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusFour',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Four -->

                <!-- #Relevance_Five -->
                <div id="rl5" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_5','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressFive','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextFive','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusFive',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Five -->

                <!-- #Relevance_Six -->
                <div id="rl6" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_6','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressSix','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextSix','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusSix',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Six -->

                <!-- #Relevance_Seven -->
                <div id="rl7" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_7','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressSeven','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextSeven','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusSeven',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Seven -->

                <!-- #Relevance_Eight -->
                <div id="rl8" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_9','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressEight','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextEight','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusEight',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Eight -->

                <!-- #Relevance_Nine -->
                <div id="rl9" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_9','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressNine','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextNine','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusNine',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Nine -->

                <!-- #Relevance_Ten -->
                <div id="rl10" class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_field_10','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_address','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationAddressTen','', array('class'=>'form-control' , 'placeholder'=>'Enter a location', 'autocomplete'=>'off')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_text','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::textarea('relevance_couponRelevanceLocationTextTen','', array('maxlength'=>100,'class'=>'form-control')); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <?php echo(Helper::_t('dynamic','form')); ?>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('rel_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::checkbox('relevance_couponRelevanceLocationTextDynamicStatusTen',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>
                        </tr>    
                    </table>
                </div><!-- @Relevance_Ten -->


                <br>
                <!-- #Time_Info-->
                <div class="secondary_container">
                    <div class="field-header-container">
                        <h4> <?php echo(Helper::_t('relevance_date_time_info','form')); ?> </h4>
                    </div>
                    <table  class="dataTable">
                        <tr>
                            <th>
                                <?php echo(Helper::_t('relevance_date_time','form')); ?>
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo Tooltip::$relevanceDateTime; ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationDate','',array('class'=>'form-control','style'=>'display:inline-block;width:72px;')); ?>
                                <?php echo Form::input('text','relevance_couponRelevanceLocationTime','', array('class'=>'form-control','style'=>'display:inline-block;width:60px;')); ?>
                                <?php echo Form::select('relevance_couponRelevanceLocationTimezone', Data::$timeZones,'',array('class'=>'form-control','style'=>'display:inline-block;width:150px;')); ?>
                            </td>
                        </tr>
                    </table>
                </div><!-- @Time_Info-->        



          </div>
          </div>

          <div class="tab-pane" id="distributionTab">
              <!--@Distribution-->
              <div id="tabs-10" class="ui-tabs-panel">
                  <!--@Distribution-->


                  <div class="pagerHeading">
                        <div class="headingText left">
                               <h3><?php echo(Helper::_t('distribution','form')); ?></h3>
                        </div>
                            <div class="pagerContainer right">
                                <div style="padding:10px;">
                                    <ul class="pager">
                                        <li class="previous"><a href="" id="distributionBack"><?php echo(Helper::_t('back','msg')); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                    </div><!--@pagerHeading-->


                  <table id="ads" class="dataTable">
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('publish','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_01','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                            </th>
                            <td>
                                <?php echo Form::checkbox('distribution_distributionStatus',false, array('class'=>'form-control','style'=>'width:10px;') ); ?>
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('pass_link_type','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_02','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                            </th>
                            <td>
                                <?php echo Form::select('distribution_passLinkType', Data::$passLinkType,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                            </td>
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('disallow_multi_installs','form')); ?>: <span class="redMark">*</span>&nbsp;
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_03','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>            
                            </th>
                            <td>
                                <?php echo Form::checkbox('distribution_restrictMultiple',false, array('class'=>'form-control','style'=>'height:10px;width:10px;display:inline-block;')); ?> Limit to 1 pass per user
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('void_passes','form')); ?>: <span class="redMark">*</span>&nbsp;          
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_04','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>  
                            </th>
                            <td>
                                <?php echo Form::checkbox('distribution_voidPasses',false, array('class'=>'form-control','style'=>'height:10px;width:10px;display:inline-block;')); ?> Flag All passes as expired
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('auto_expire_pass_after','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_05','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','distribution_passExpirationDate','', array('class'=>'form-control','style'=>'width:100px;') ); ?>
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('quantity_restriction','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_06','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('distribution_quantityRestriction', Data::$quantityRestriction,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                            </td>    
                        </tr>
                        <tr id="Widget_limitValue" class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('stop_issuing','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_07','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('number','distribution_limitValue','', array('value'=>'1000','class'=>'form-control')); ?>
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('date_restriction','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_08','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('distribution_dateRestriction', Data::$dateRestriction,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                            </td>    
                        </tr>
                        <tr id="Widget_restrictedDate" class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('stop_issuing_after','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_09','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','distribution_restrictedDate','',array('class'=>'form-control','style'=>'width:100px;')); ?>
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                               <?php echo(Helper::_t('need_password_issue','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_10','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('distribution_passwordIssueStatus', Data::$passwordIssueStatus,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                            </td>    
                        </tr>
                        <tr id="Widget_fixedIssuePassword" class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('issue_password','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_11','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','distribution_fixedIssuePassword','',array('maxlength'=>255,'class'=>'form-control')); ?>
                            </td>    
                        </tr>
                        <tr id="Widget_singleUsePasswords" class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('single_use_password','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_12','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','distribution_singleUsePasswords','',array('maxlength'=>255,'class'=>'form-control')); ?>
                            </td>    
                        </tr>
                        <tr class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('need_password_to_update','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_13','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::select('distribution_passwordUpdateStatus', Data::$passwordUpdateStatus,'',array('class'=>'form-control','style'=>'width:300px;')); ?>
                            </td>    
                        </tr>
                        <tr id="Widget_fixedUpdatePassword" class="brd-bottom">
                            <th>
                                <?php echo(Helper::_t('update_password','form')); ?>: <span class="redMark">*</span>&nbsp;            
                                <a data-toggle="tooltip" data-placement="top" title="<?php echo(Helper::_t('dist_14','hlp')); ?>" ><span class="glyphicon glyphicon-question-sign"></span></a>
                            </th>
                            <td>
                                <?php echo Form::input('text','distribution_fixedUpdatePassword','',array('maxlength'=>255,'class'=>'form-control')); ?>
                            </td>    
                        </tr>
                    </table>



              </div>
          </div>
        </div>
       </div><!--@passbuilder-container-->

       <br/><br/><br/>

    </div><!--@passFormContainer-->    



    <div class="iphoneLivePreviewContainer right">
        
        <div class="buttonContainer">
            <input id="submitPassBtn" type="submit" class="btn btn-primary" value="<?php echo(Helper::_t('save_pass_btn','form')); ?>" >    
            <input type="email" class="form-control" style="width:300px; display:inline-block;text-align:center;" name="myemail" id="myemail" placeholder="Enter email">                                 
        </div><!--@buttonContainer-->

        <!--#preview-box-->    
                <div id="previewContainer" class="iphone-container">

                    <div class="col2">
                      <div align="center" class="save-page">
                      <!--#inner-->
                      
                      <!--@inner-->
                      </div>
                      <div class="clr"></div>
                    </div>


                    <div id="preview-box2">
                        <div class="scrollbox" style="position: static;">

                            <div class="phonepreview">
                                 <div style="height:35px;" ></div>
                                 <div class="show-saving-cantainer" align="center" style="display:none">Saving Pass Template...</div>

                                 <div id="previewScreenContainer" class="screen-container">
                                      <!--Here pass contents will displayed -->
                                 </div>   


                            </div><!--@phonepreview-->    

                        </div><!--@scrollbox-->
                    </div><!--@preview-box2-->    



            </div>   
            <!--@preview-box-->


    </div> <!-- @iphoneLivePreviewContainer-->
    

    </form>




    <div class="clear"></div>
</div><!--@passContentContainer--> 





<script type="text/javascript">
        jQuery(function($){


            $('#popoverData').popover({html:true});
            $('#categoryScreen').popover({html:true});



            var messages = {
                templateName:'<?php echo(Helper::_t('name','validate')); ?>',
                organizationName:'<?php echo(Helper::_t('organization','validate')); ?>',
                organizationDescription:'<?php echo(Helper::_t('des','validate')); ?>',
                barcodeValue:'<?php echo(Helper::_t('barcode','validate')); ?>',
                icon : 'Icon image must select to upload. Please try again.',
                logoText : 'Atleast add Logo Image or Logo Text.Please try again.',
                expirationDate : '<?php echo(Helper::_t('auto_expire','validate')); ?>',
            }
            
            $( "#passbookTempleteFrm" ).submit(function( event ) {
                var errors = [];
                var icon = $('#widget-appearance_iconNameFile .browseBtn').css('display');

                if($('#general_templateName').val() === ''){
                    errors.push({ name: 'general_templateName' , message: messages.templateName } );        
                }
                if($('#general_organizationName').val() === ''){
                    errors.push({ name: 'general_organizationName' , message: messages.organizationName } );        
                }
                if($('#general_organizationDescription').val() === ''){
                    errors.push({ name: 'general_organizationDescription' , message: messages.organizationDescription } );        
                }
                if($('#Widget_couponBarcodeFixedValue').css("display") != 'none'){
                    if($('#datasetting_couponBarcodeFixedValue').val() == '' ){
                        errors.push({ name: 'datasetting_couponBarcodeFixedValue' , message: messages.barcodeValue } );        
                    }    
                }
                if($('#Widget_couponBarcodeDynamicValue').css("display") != 'none' ){
                    if($('#datasetting_couponBarcodeDynamicValue').val() == '' ){
                        errors.push({ name: 'datasetting_couponBarcodeDynamicValue' , message: messages.barcodeValue } );        
                    } 
                }
                /*if($('#appearance_iconNameFile').val() == '' ){
                    errors.push({ name: 'appearance_iconNameFile' , message: messages.icon } );                    
                }*/

                /*if($('#appearance_logoText').val() == '' && $('#appearance_logoNameFile').val() == ''){
                        errors.push({ name: 'appearance_logoNameFile' , message: messages.logoText } );        
                }*/
                
                if($('#distribution_passExpirationDate').val() === ''){
                    errors.push({ name: 'distribution_passExpirationDate' , message: messages.expirationDate } );        
                }

                if(errors.length > 0){
                    var _htmlString = '<div class="alert alert-danger" role="alert">';
                    _htmlString += '<strong>Errors!</strong> <br>';
                    for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                        var error = errors[i] , pointer = i+1;
                        _htmlString += '<p>'+pointer+'. '+error.message+'</p>';
                    }
                    _htmlString += '</div>';

                    $('#msgHolder').html(_htmlString);
                    event.preventDefault();
                }

            });
            
            
            //apply form validation
           /* var fields = [
            {name:'general_templateName',message : 'One '},
            {name:'general_organizationName',message : 'Two'}
            ]; 

            var formValidate = new FormValidator('passbookTempleteFrm',fields);
*/


            // tabs
            var $tabs = $('li#myTab');

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                selectTabOption($(this).attr('href'));
            });


            function selectTabOption(currentTab){    
                var myArray = [ '#generalTab', '#appearanceTab', '#data_settingsTab' , '#headerTab' , '#primaryTab' , '#secondaryTab' , '#auxiliaryTab' , '#back_fieldsTab', '#relevanceTab', '#distributionTab' ];
                myArray.forEach( printElement );
                $('a[href="'+currentTab+'"]').addClass('activeTabOption');
                function printElement( elem ) {
                    if(elem != currentTab){
                        if($('a[href="'+elem+'"]').hasClass('activeTabOption')){
                            $('a[href="'+elem+'"]').removeClass('activeTabOption');
                        }                         
                    }
                }
            }


            $('#generalNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#appearanceTab"]').tab('show');
            });
            $('#appearanceNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#data_settingsTab"]').tab('show');
            });
            $('#appearanceBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#generalTab"]').tab('show');
            });
            $('#datesettingNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#headerTab"]').tab('show');
            });
            $('#datesettingBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#appearanceTab"]').tab('show');
            });
            $('#headerNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#primaryTab"]').tab('show');
            });
            $('#headerBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#data_settingsTab"]').tab('show');
            });
            $('#primaryNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#secondaryTab"]').tab('show');
            });
            $('#primaryBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#headerTab"]').tab('show');
            });
            $('#secondaryNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#auxiliaryTab"]').tab('show');
            });
            $('#secondaryBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#primaryTab"]').tab('show');
            });
            $('#auxiliaryNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#back_fieldsTab"]').tab('show');
            });
            $('#auxiliaryBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#secondaryTab"]').tab('show');
            });

            $('#backfieldsNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#relevanceTab"]').tab('show');
            });
            $('#backfieldsBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#auxiliaryTab"]').tab('show');
            });

            $('#relevanceNext').on('click', function(e) {
                e.preventDefault();
                $('a[href="#distributionTab"]').tab('show');
            });
            $('#relevanceBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#back_fieldsTab"]').tab('show');
            });

            $('#distributionBack').on('click', function(e) {
                e.preventDefault();
                $('a[href="#relevanceTab"]').tab('show');
            });


            $('#appearance_iconNameFile').fileUpload({
                showImage: true,
                imgSrc : '<?php echo plugins_url( "assets/images/mCouponsLogoIcon58x58.png" , dirname(__FILE__) );?>'
                ,
            });
            $('#appearance_logoNameFile').fileUpload({});
            $('#appearance_couponStripFile').fileUpload({});
            $('#appearance_genericThumbnailFile').fileUpload({});
            $('#appearance_boardingPassFooterFile').fileUpload({});
            $('#appearance_eventTicketStripFile').fileUpload({});
            $('#appearance_eventTicketThumbnailFile').fileUpload({});
            $('#appearance_eventTicketBackgroundFile').fileUpload({});
            $('#appearance_storeCardStripFile').fileUpload({});



            //date widgets
            $('#distribution_passExpirationDate').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#distribution_restrictedDate').datetimepicker({timepicker:false,format:'m/d/Y'});
            
            $('#relevance_couponRelevanceLocationDate').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#relevance_couponRelevanceLocationTime').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            
            $('#primary_couponPrimaryFieldValueDate').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#primary_couponPrimaryFieldValueTime').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            
            $('#header_couponHeaderValueDate').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#header_couponHeaderValueTime').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});


            $('#secondary_couponSecondaryFieldValueDateOne').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#secondary_couponSecondaryFieldValueTimeOne').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            $('#secondary_couponSecondaryFieldValueDateTwo').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#secondary_couponSecondaryFieldValueTimeTwo').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            $('#secondary_couponSecondaryFieldValueDateThree').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#secondary_couponSecondaryFieldValueTimeThree').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            $('#secondary_couponSecondaryFieldValueDateFour').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#secondary_couponSecondaryFieldValueTimeFour').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});


            $('#auxiliary_couponAuxiliaryFieldValueDateOne').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#auxiliary_couponAuxiliaryFieldValueTimeOne').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            $('#auxiliary_couponAuxiliaryFieldValueDateTwo').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#auxiliary_couponAuxiliaryFieldValueTimeTwo').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            $('#auxiliary_couponAuxiliaryFieldValueDateThree').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#auxiliary_couponAuxiliaryFieldValueTimeThree').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});
            $('#auxiliary_couponAuxiliaryFieldValueDateFour').datetimepicker({timepicker:false,format:'m/d/Y'});
            $('#auxiliary_couponAuxiliaryFieldValueTimeFour').datetimepicker({datepicker:false,format:'h:i a',formatTime:'h:i a'});



            $('.dataTable a').tooltip({html:true});


            //$('#myCat').hide();
            

        });//@  

        



        //


    </script>





