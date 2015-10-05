

function  uniqId(){
    return Math.round(new Date().getTime() + (Math.random() * 100));
}
function isEmpty(value, trim) {
    return value === null || value === undefined || value == []
        || value === '' || trim && $.trim(value) === '';
}

(function($) {
    $.fn.fileUpload = function(options){

        var fileFieldId = $(this).attr('id');

        var self = this ,     widgetId = 'widget-' + fileFieldId;    //widgetId = 'widget-'+uniqId();
        self.after(self);

        var _html = '<div class="fileupload-widget" id="'+widgetId+'"></div>';
        self.before(_html);

        var defaults = {
            imgWidth  : 58,
            imgHeight : 58,
            imageCaption : '',
            imgSrc    : '',
            loaderImg : '',
            showImage : false,
            hiddenField: '',
            FILE_UPLOAD_TEMPLATE: '<div class="btn btn-primary browseBtn">\n'+
                                    '<i class="glyphicon glyphicon glyphicon-upload"></i> &nbsp;Upload PNG … \n'+
                                    '<span></span> \n'+
                                    '</div>\n',
            FILE_PREVIEW_TEMPLATE : '<div class="image-view-container">\n'+
                                        '<div class="imageview-frame">\n'+
                                        '</div>\n'+
                                        '<div class="close closeBtn">x</div>\n'+
                                        '<div class="clearfix"></div>\n'+    
                                    '</div>\n',
            IMAGE_CAPTION_TEMPLATE : '<div class="image-caption-container">\n'+
                                         '<div class="image-caption">\n'+
                                         '</div>\n'+
                                         '<div class="close closeBtn">x</div>\n'+
                                         '<div class="clearfix"></div>\n'+   
                                     '</div>\n',

        };

        var settings = $.extend( {}, defaults, options );

        init();
        function init(){
            $( "#"+widgetId ).append(settings.FILE_UPLOAD_TEMPLATE);
            $( "#"+widgetId+" span").append(self);

            $( "#"+widgetId ).append(settings.FILE_PREVIEW_TEMPLATE);
            var defaultImage = '<img class="imageFile" src="'+settings.imgSrc+'" width="'+settings.imgWidth+'" height="'+settings.imgHeight+'" >'
            $( "#"+widgetId+" .imageview-frame").append(defaultImage);

            $( "#"+widgetId ).append(settings.IMAGE_CAPTION_TEMPLATE);


            if(settings.showImage){
                if(isEmpty(settings.imgSrc)){
                    $( "#"+widgetId+" .image-view-container").hide();
                }else{
                    $( "#"+widgetId+" .browseBtn").hide();
                }
                $( "#"+widgetId+" .image-caption-container").hide();
            }else{
                if(isEmpty(settings.imageCaption)){
                    $( "#"+widgetId+" .browseBtn").show();
                    $( "#"+widgetId+" .image-caption-container").hide();
                    $( "#"+widgetId+" .image-view-container").hide();
                }else{
                    $( "#"+widgetId+" .image-caption").html(settings.imageCaption);
                    $( "#"+widgetId+" .browseBtn").hide();
                    $( "#"+widgetId+" .image-view-container").hide();
                }
            }


        } //@init

        // @_actions
        $( "#"+widgetId+" .closeBtn").click(function(event){
            if(settings.showImage){
                $( "#"+widgetId+" .image-view-container").hide();
            }else{
                $( "#"+widgetId+" .image-caption-container").hide();
            }
            $( "#"+widgetId+" .browseBtn").show();

            //reset hidden field value
            if ( $( settings.hiddenField ).length ) {
                $( settings.hiddenField).val('');
            }
        });

        this.change(function(){
            // default loader
            if(settings.loaderImg){
                $( "#"+widgetId ).append('<img id="loaderImage" src="'+settings.loaderImg+'" />');
            }

            var file = this.files[0];
            var reader = new FileReader();
            reader.onerror = function (evt) {
                console.log(evt, caption);
            };
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                var dataURL = e.target.result;
                var mimeType = dataURL.split(",")[0].split(":")[1].split(";")[0];
                if('image/png' != mimeType){
                    if(settings.showImage){
                        $( "#"+widgetId+" .image-view-container").show();
                        $( "#"+widgetId+" img.imageFile").attr('src',settings.imgSrc);
                        $( "#"+widgetId+" .browseBtn").hide();
                    }else{

                    }
                }else{
                    if(settings.loaderImg){
                        $( "#"+widgetId+" #loaderImage").remove();
                    }
                    if(settings.showImage){
                        var strText = e.target.result;
                        $( "#"+widgetId+" .image-view-container").show();
                        $( "#"+widgetId+" img.imageFile").attr('src',strText);
                    }else{
                        var selectedfile = $( "#"+widgetId+" input[type=file]").val();
                        $( "#"+widgetId+" .image-caption").html(selectedfile);
                        $( "#"+widgetId+" .image-caption-container").show();
                    }
                    $( "#"+widgetId+" .browseBtn").hide();
                }

            };
        });

        return this;
    };

})( jQuery );



//$(element).is(":visible")