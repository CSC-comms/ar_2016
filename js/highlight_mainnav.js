$(function() {
  var loc = window.location.href; // returns the full URL
  if(/investments/.test(loc)) {
    $('a.investments').addClass('active');
  }
  else if(/performance/.test(loc)) {
    $('a.performance').addClass('active');
  }
  else if(/csc-board/.test(loc)) {
    $('a.csc-board').addClass('active');
  }
  else if(/governance/.test(loc)) {
    $('a.governance').addClass('active');
  }
  else if(/super-schemes/.test(loc)) {
    $('a.super-schemes').addClass('active');
  }
  else if(/introduction/.test(loc)){
	$('a.introduction').addClass('active');
  }
  else if(/financial-statements/.test(loc)) {
    $('a.finstatements').addClass('active');
  }
  else if(/appendices/.test(loc)) {
    $('a.appendices').addClass('active');
  }

});