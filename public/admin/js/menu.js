
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(window).load(function() {
      $('nav li').hover(
  function() {
           
	  $('ul', this).stop().slideDown(10);
  },
	function() {
    $('ul', this).stop().slideUp(10);
  }
);
});


