(function(api) {

  api.sectionConstructor['danva-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const danva_section_lists = ['banner', 'service'];
  danva_section_lists.forEach(danva_homepage_scroll);

  function danva_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('danva_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);