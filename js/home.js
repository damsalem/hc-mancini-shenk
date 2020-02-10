jQuery(document).ready(function($) {

	'use strict';
   
      var userFeed = new Instafeed({
  get: 'user',
  userId: '1776523527',
  limit: 6,
  resolution: 'standard_resolution',
  accessToken: '1776523527.05d9ad2.c16e59d55d71403082204ef86a9c1fe3',
  sortBy: 'most-recent',
  template: '<div class="col-lg-4 col-sm-6 gallery insta-gal"><a href="{{link}}" target="_blank" id="{{id}}" style="background-image: url({{image}}); background-size: cover; min-height: 375px; background-position: center center; float: left; width: 100%;"></a></div>',
});
userFeed.run();
 


});

        