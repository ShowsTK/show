$(document).ready(function() {
  const fields = ['name', 'email', 'website', 'comments'];
  for(let i = 0; i < fields.length; i++) {
    $('.feedback__' + fields[i]).focus(function() {
      $('.feedback__lbl-'+fields[i]).css('top', '-25px').css('font-size', '12px');
      return true;
    })
  }
  for(let i = 0; i < fields.length; i++) {
    $('.feedback__' + fields[i]).blur(function() {
      if($(this).prop('value') === '') {
        $('.feedback__lbl-' + fields[i]).removeAttr('style');
      }
      return true;
    })
  }
  $('.login').click(function() {
    $('#overlay').css('display', 'flex');
    return false;
  });
  $('.btnclose, .btn-submit').click(function() {
    $('#overlay').css('display', 'none');
    return false;
  });
});

