CKEDITOR.editorConfig = function( config )
{
    config.toolbarGroups = [
        { name: 'document',    groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'editing',     groups: [ 'find', 'selection' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },
        { name: 'links' },
        { name: 'insert' },
        { name: 'styles' },
        { name: 'colors' },
        { name: 'tools' },
        { name: 'others' }
    ];

    // Remove the redundant buttons from toolbar groups defined above.
    config.removeButtons = 'Save,NewPage,Print,Preview,SelectAll,Flash,Strike,Subscript,Superscript,Smiley,Anchor,Specialchar,Scayt,PageBreak,BGColor';

    config.toolbarCanCollapse = true;
};

// The names of available toolbar buttons:
//
// 'Source', 'Save', 'NewPage', 'DocProps', 'Preview', 'Print', 'Templates',
// 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', 'Undo', 'Redo',
// 'Find', 'Replace', 'SelectAll', 'Scayt',
// 'CreatePlaceholder', 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley',
// 'SpecialChar', 'PageBreak', 'Iframe', 'InsertPre',
// 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField',
// 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'RemoveFormat',
// 'NumberedList', 'BulletedList', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv', 'JustifyLeft',
// 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'BidiLtr', 'BidiRtl',
// 'Link', 'Unlink', 'Anchor',
// 'Styles', 'Format', 'Font', 'FontSize',
// 'TextColor', 'BGColor',
// 'UIColor', 'Maximize', 'ShowBlocks',
// 'About',

