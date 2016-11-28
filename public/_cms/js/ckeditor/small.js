CKEDITOR.editorConfig = function( config )
{
    config.toolbarGroups = [
        { name: 'document',    groups: [ 'mode' ] },
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'editing',     groups: [ 'find', 'selection' ] },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'align' ] },
        { name: 'links' },
        { name: 'insert' },
        { name: 'styles' },
        { name: 'tools' }
    ];

    // Remove the redundant buttons from toolbar groups defined above.
    config.removeButtons = 'Save,NewPage,Print,Preview,SelectAll,Flash,Strike,Subscript,Superscript,Smiley,Anchor,Specialchar,Scayt,PageBreak,BGColor,Table,HorizontalRule,Iframe,Styles,Font,ShowBlocks';

    config.toolbarCanCollapse = true;
};
