jQuery(document).ready(function() {
  ewic_shortcode_ready();
});
jQuery(window).resize(function() {
  ewic_shortcode_ready();
});

function ewic_shortcode_ready() {
  
  tinymce.create('tinymce.plugins.ewic_mce', {
    init: function (ed, url) {
      var c = this;
      c.url = url;
      c.editor = ed;

      ed.addButton('ewic_mce', {
        id:'ewic_gut_shorcode',
		classes: 'ewic_gut_shorcode_btn',
		text: 'Insert Slider',
        title:'Insert Slider',
        cmd:'mceewic_mce',
        image: url + '/img/ewic_scmanager_icon.png'
      });
    },
  });
  tinymce.PluginManager.add('ewic_mce', tinymce.plugins.ewic_mce);
  
}