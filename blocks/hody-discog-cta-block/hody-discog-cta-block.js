wp.blocks.registerBlockType('hody-discog/hody-discog-cta-block', {
    title: 'Discog CTA',
    icon: 'awards',
    category: 'design',
    attributes: {
        ctaTitle: {type: 'string'},
        ctaDescription: {type: 'string'},
        ctaImage: {type: 'file'}
    },
    edit: function(props){
        function updatectaTitle(event){props.setAttributes({ctaTitle: event.target.value})}
        function updatectaDescription(event){props.setAttributes({ctaDescription: event.target.value})}
        function updatectaImage(event){props.setAttributes({ctaImage: event.target.value})}


        return React.createElement("div", null, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("label", null, "CTA Title"), /*#__PURE__*/React.createElement("br", null), /*#__PURE__*/React.createElement("input", {
            type: "text",
            value: props.attributes.ctaTitle,
            placeholder: "HEADING",
            onChange: updatectaTitle
          })), /*#__PURE__*/React.createElement("div", null, "  ", /*#__PURE__*/React.createElement("label", null, "CTA Description"), /*#__PURE__*/React.createElement("br", null), /*#__PURE__*/React.createElement("input", {
            type: "textarea",
            value: props.attributes.ctaDescription,
            placeholder: "Lorem ipsum dolor imet",
            onChange: updatectaDescription
          })), /*#__PURE__*/React.createElement("div", null, "  ", /*#__PURE__*/React.createElement("label", null, "CTA Image"), /*#__PURE__*/React.createElement("br", null), /*#__PURE__*/React.createElement("input", {
            type: "file",
            id: "img",
            name: "img",
            value: props.attributes.ctaImage,
            onChange: updatectaImage
          })));
    },
    save: function(props) {
        return React.createElement("div", {
            class: "wp-block-group alignwide has-foreground-color has-background-background-color has-text-color has-background",
            style: "padding-bottom:5px"
          }, /*#__PURE__*/React.createElement("div", {
            class: "wp-block-group alignwide",
            style: "border-bottom-color:var(--wp--preset--color--separator);border-bottom-width:1px;padding-top:4em;padding-right:20px;padding-bottom:4em;padding-left:20px"
          }, /*#__PURE__*/React.createElement("div", {
            class: "wp-block-columns are-vertically-aligned-center has-border-radius has-accent-background-color has-background",
            style: "padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%"
          }, /*#__PURE__*/React.createElement("div", {
            class: "wp-block-column is-vertically-aligned-center"
          }, /*#__PURE__*/React.createElement("figure", {
            class: "wp-block-image size-large",
            style: "border-top-left-radius:16px;border-bottom-left-radius:16px"
          }, /*#__PURE__*/React.createElement("img", {
            src: "https://via.placeholder.com/1024x750",
            alt: ""
          }))), /*#__PURE__*/React.createElement("div", {
            class: "wp-block-column is-vertically-aligned-center"
          }, /*#__PURE__*/React.createElement("div", {
            class: "wp-block-group",
            style: "padding-right:16%;padding-left:12%"
          }, /*#__PURE__*/React.createElement("h2", null, props.attributes.ctaTitle), /*#__PURE__*/React.createElement("p", {
            class: "with-bottom-margin"
          }, props.attributes.ctaDescription), /*#__PURE__*/React.createElement("p", {
            class: "hody-animation-float has-foreground-color has-text-color",
            style: "font-size:16px;font-style:normal;font-weight:700;letter-spacing:0.15em;line-height:2.5;text-transform:uppercase"
          }, /*#__PURE__*/React.createElement("a", {
            href: "/album"
          }, "Listen now"), /*#__PURE__*/React.createElement("a", {
            rel: "noreferrer noopener",
            target: "_blank"
          })))))));   
    }
    } )