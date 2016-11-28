CKEDITOR.editorConfig = function( config )
{
    config.toolbarGroups = [
        { name: 'document',    groups: [ 'mode' ] },
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'links' },
        { name: 'insert' },
        { name: 'tools' }
    ];

    // Remove the redundant buttons from toolbar groups defined above.
    config.removeButtons = 'Save,NewPage,Print,Preview,Cut,Copy,Paste,Find,SelectAll,Flash,Strike,Subscript,Superscript,Smiley,Anchor,Specialchar,Scayt,PageBreak,BGColor,Table,HorizontalRule,Image,Iframe,Styles,Font,ShowBlocks';

    config.toolbarCanCollapse = true;
};
