const { registerBlockType } = wp.blocks;

registerBlockType( 'gutenberg-block/test-block', {
    title: 'Custom block',
    icon: 'admin-users',
    category: 'layout',
    edit: ( { className } ) => <div className={ className }>Hi this is a gutenberg block!</div>,
    save: () => <div>Hi this is a gutenberg block!</div>,

});
