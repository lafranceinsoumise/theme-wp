export default {
  init() {
    // JavaScript to be fired on all pages
    $('.menu-item-has-children').addClass('dropdown');
    $('.sub-menu').addClass('dropdown-menu');
    $('.sub-menu .menu-item').addClass('dropdown-item');
    $('.menu-item-has-children > a').attr('data-toggle', 'dropdown').dropdown();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
