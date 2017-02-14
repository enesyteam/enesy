
tinymce.PluginManager.add('ccSimpleUploader', function(editor, url) {

    function jbBox() {
        editor.windowManager.open({
            title: 'Upload an Video',
            file : url + '/dialog-v4.htm',
            width : 600,
            height: 350,
            buttons: [{
                text: 'Upload',
                classes:'widget btn primary first abs-layout-item',
                disabled : true,
                onclick: 'close'
                },
                {
                    text: 'Close',
                    onclick: 'close'
            }]
        });
    }
    function ccSimpleUploader(field_name, url, type, win) {    
        var strPluginPath = url;                               // get the path to the uploader plugin    
        alert(strPluginPath);
        var strUploaderURL = strPluginPath + "/uploader.php";                                                           // generate the path to the uploader script    
        var strUploadPath = tinyMCE.activeEditor.getParam('plugin_ccSimpleUploader_upload_path');                       // get the relative upload path
        var strSubstitutePath = tinyMCE.activeEditor.getParam('plugin_ccSimpleUploader_upload_substitute_path');        // get the path we'll substitute for the for the upload path (i.e. fully qualified)

        if (strUploaderURL.indexOf("?") < 0)                                                                            // if we were called without any GET params
            strUploaderURL = strUploaderURL + "?type=" + type + "&d=" + strUploadPath + "&subs=" + strSubstitutePath;   // add our own params 
        else
            strUploaderURL = strUploaderURL + "&type=" + type + "&d=" + strUploadPath + "&subs=" + strSubstitutePath;

        editor.windowManager.open({                                                                       // open the plugin popup
            file            : strUploaderURL,
            title           : 'cc Simple Uploader',
            width           : 450,  
            height          : 150,
            resizable       : "yes", 
            inline          : 1,        // This parameter only has an effect if you use the inlinepopups plugin!
            close_previous  : "no"
            }, {
                window : win,
                input : field_name
        });

    }
    // This function will get called when the uploader is done uploading the file and ready to update
    // calling dialog and close the upload popup
    // strReturnURL should be the string with the path to the uploaded file
    function ClosePluginPopup (strReturnURL) {
        var win = tinyMCEPopup.getWindowArg("window");                                          // insert information now
        if (!win)
            tinyMCE.activeEditor.execCommand('mceInsertContent', false, strReturnURL);
        else
        {
            win.document.getElementById(tinyMCEPopup.getWindowArg("input")).value = strReturnURL;    
            if (typeof(win.ImageDialog) != "undefined")                                             // are we an image browser
            {        
                if (win.ImageDialog.getImageData) win.ImageDialog.getImageData();                   // we are, so update image dimensions and preview if necessary
                if (win.ImageDialog.showPreviewImage) win.ImageDialog.showPreviewImage(strReturnURL);
            }    
        }
        tinyMCEPopup.close();                                                                        // close popup window
    }    

    // Add a button that opens a window
    editor.addButton('ccSimpleUploader', {
        tooltip: 'Upload an video',
        icon : 'video',
        text: '',
        image: url + '/img/ccSimpleUploader.png',        
        onclick: ccSimpleUploader
    });

    // Adds a menu item to the tools menu
    editor.addMenuItem('ccSimpleUploader', {
        text: 'Upload video',
        icon : 'video',
        context: 'insert',
        onclick: ccSimpleUploader
    });
});