const { registerBlockType } = wp.blocks;
var el = wp.element.createElement;
registerBlockType( 'gutenberg-block/test-block', {
    title: 'Custom block',
    icon: 'admin-users',
    category: 'layout',
    //Getting something dynamic
    attributes: {
        title: {type: 'string'}
    },

    edit: function(props) {
        function updateTitle(event) {
            props.setAttributes({title: event.target.value})
        }
        return React.createElement(
            "div",
            null,
            React.createElement(
                "h3",
                null,
            ),
            React.createElement("input", { type: "text", value: props.attributes.title, onChange: updateTitle })
        );
    },
    save: function(props) {
        return el(
            "h3",
            { className: 'title' },
            props.attributes.title,
        );
    }
});
