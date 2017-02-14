/*<![CDATA[*/
tinymce.init({
    mode : "exact",
    elements : "content,description",
    cleanup : true,
    relative_urls : true,  
    convert_urls : false,  
    plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor,jbimages,ccSimpleUploader"
    ],

    toolbar1: " bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | copy paste | bullist numlist | outdent indent blockquote | forecolor backcolor",
    toolbar2: "undo redo | link unlink | formatselect  fontsizeselect | table jbimages | media image code preview",
    toolbar3: " ",


    menubar: true,
    //toolbar_items_size: 'small',

    width:'98%',
    height:400,
    fontsize_formats: "8px 10px 12px 14px 16px 18px 24px 36px" ,
    extended_valid_elements : "a[!href|target|title],br,strong/b,em/i,u,li,ul,ol",
    entity_encoding : "raw",
    paste_webkit_styles :"none",
    paste_remove_styles_if_webkit: true,
    paste_retain_style_properties: "color",
    //paste_word_valid_elements: "b,strong,i,em,h1,h2",


    removeformat_selector : "h2,h3,h4,br,b,strong,em,i,pre,span",
    inline_styles : false,    

    paste_auto_cleanup_on_paste : true,
    paste_remove_styles: true,    
    paste_strip_class_attributes: 'all',
    //paste_as_text: true,

    paste_preprocess: function(plugin, args) {
        args.content = strip_tags(args.content,'<table><tr><td><p><img><em>');
        args.content = args.content.replace(/ class="([^"]+)"/gi, '');
        args.content = args.content.replace(/ class=([\-\w]+)/gi, '');
    },

    style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});

function strip_tags (str, allowed_tags)
{
    var key = '', allowed = false;
    var matches = [];    var allowed_array = [];
    var allowed_tag = '';
    var i = 0;
    var k = '';
    var html = ''; 
    var replacer = function (search, replace, str) {
        return str.split(search).join(replace);
    };
    // Build allowes tags associative array
    if (allowed_tags) {
        allowed_array = allowed_tags.match(/([a-zA-Z0-9]+)/gi);
    }
    str += '';

    // Match tags
    matches = str.match(/(<\/?[\S][^>]*>)/gi);
    // Go through all HTML tags
    for (key in matches) {
        if (isNaN(key)) {
            // IE7 Hack
            continue;        }

        // Save HTML tag
        html = matches[key].toString();
        // Is tag not in allowed list? Remove from str!
        allowed = false;

        // Go through all allowed tags
        for (k in allowed_array) {            // Init
            allowed_tag = allowed_array[k];
            i = -1;

            if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+'>');}           
            if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+' ');}
            if (i != 0) { i = html.toLowerCase().indexOf('</'+allowed_tag)   ;}

            // Determine
            if (i == 0) {                
                allowed = true;
                break;
            }
        }
        if (!allowed) {
            str = replacer(html, "", str); // Custom replace. No regexing
        }
    }

    return str;    
}
 /*]]>*/  