$(function() {		
			
JQTWEET = {
     
    // Set twitter hash/user, number of tweets & id/class to append tweets
    // You need to clear tweet-date.txt before toggle between hash and user
    // for multiple hashtags, you can separate the hashtag with OR, eg:
    // hash: '%23jquery OR %23css'			    
    search: '', //leave this blank if you want to show user's tweet
    user: 'StMarysNursery', //username
    numTweets: 10, //number of tweets
    appendTo: '.twitter-content',
    template: '<div class="media"> \
    		     <div class="media-left"> \
                   <img class="media-object rounded" src="{IMG_SRC}"> \
    		     </div> \
                 <div class="media-body"> \
    			   <a href="http://twitter.com/{SCREEN_NAME}"> \
    				 <strong>{NAME}</strong> @{SCREEN_NAME} \
                   </a> \
    			   <p class="twitter-text"> \
    				 {AGO}\
    			   </p> \
                 </div> \
    			 <p class="twitter-text">{BODY_TEXT}</p>\
    		     {IMG} \
    		   </div>',
     
    // core function of jqtweet
    // https://dev.twitter.com/docs/using-search
    loadTweets: function() {

        var request;
         
        // different JSON request {hash|user}
        if (JQTWEET.search) {
          request = {
              q: JQTWEET.search,
              count: JQTWEET.numTweets,
              api: 'search_tweets'
          }
        } else {
          request = {
              q: JQTWEET.user,
              count: JQTWEET.numTweets,
              api: 'statuses_userTimeline'
          }
        }

        $.ajax({
            url: '/api/TwitterController/getTweets',
            type: 'POST',
            dataType: 'json',
            data: request,
            success: function(data, textStatus, xhr) {
	            
	            if (data.httpstatus == 200) {
	            	if (JQTWEET.search) data = data.statuses;

                var text, name, img;	         
                	                
                try {
                  // append tweets into page
                  for (var i = 0; i < JQTWEET.numTweets; i++) {		
                  
                    img = '';
                    try {
                      if (data[i].entities['media'][0].media_url) {
                        img = '<img class="tweet-img" src="' + data[i].entities['media'][0].media_url + '" />';
                      }
                    } catch (e) {  
                      //no media
                    }
                  
                    $(JQTWEET.appendTo).append( JQTWEET.template.replace('{IMG_SRC}', data[i].user.profile_image_url )
                        .replace( '{NAME}', data[i].user.name )
                        .replace( '{SCREEN_NAME}', data[i].user.screen_name )
                        .replace( '{SCREEN_NAME}', data[i].user.screen_name )
                        .replace( '{AGO}', JQTWEET.timeAgo(data[i].created_at) )
                        .replace( '{BODY_TEXT}', JQTWEET.ify.clean(data[i].text) )
                        .replace( '{IMG}', img )
                        );
                  }
                
                } catch (e) {
                  //item is less than item count
                }               
               } else alert('no data returned');
             
            },
        	error: function(data, textStatus, xhr) {
        		console.log("Failure");
        		console.log(data);
        	}
        	
 
        });
 
    }, 
     
         
    /**
      * relative time calculator FROM TWITTER
      * @param {string} twitter date string returned from Twitter API
      * @return {string} relative time like "2 minutes ago"
      */
    timeAgo: function(dateString) {
        var rightNow = new Date();
        var then = new Date(dateString);
        var months = new Array ("Jan", "Feb", "Mar", "Apr", "May", "Jun",
        			  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        var date = months[then.getMonth()] + " " + then.getDate();
        
        var second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24,
        week = day * 7;
         
        if ($.browser.msie) {
            // IE can't parse these crazy Ruby dates
            then = Date.parse(dateString.replace(/( \+)/, ' UTC$1'));
        }
 
        var diff = rightNow - then;
 
        var second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24,
        week = day * 7;
 
        if (diff >= day * 365) {
            date = date + " " + then.getYear();
        }
        return date;
    }, // timeAgo()
     
     
    /**
      * The Twitalinkahashifyer!
      * http://www.dustindiaz.com/basement/ify.html
      * Eg:
      * ify.clean('your tweet text');
      */
    ify:  {
      link: function(tweet) {
        return tweet.replace(/\b(((https*\:\/\/)|www\.)[^\"\']+?)(([!?,.\)]+)?(\s|$))/g, function(link, m1, m2, m3, m4) {
          var http = m2.match(/w/) ? 'http://' : '';
          return '<a class="twtr-hyperlink" target="_blank" href="' + http + m1 + '">' + ((m1.length > 25) ? m1.substr(0, 24) + '...' : m1) + '</a>' + m4;
        });
      },
 
      at: function(tweet) {
        return tweet.replace(/\B[@]([a-zA-Z0-9_]{1,20})/g, function(m, username) {
          return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/intent/user?screen_name=' + username + '">@' + username + '</a>';
        });
      },
 
      list: function(tweet) {
        return tweet.replace(/\B[@]([a-zA-Z0-9_]{1,20}\/\w+)/g, function(m, userlist) {
          return '<a target="_blank" class="twtr-atreply" href="http://twitter.com/' + userlist + '">@' + userlist + '</a>';
        });
      },
 
      hash: function(tweet) {
        return tweet.replace(/(^|\s+)#(\w+)/gi, function(m, before, hash) {
          return before + '<a target="_blank" class="twtr-hashtag" href="http://twitter.com/search?q=%23' + hash + '">#' + hash + '</a>';
        });
      },
 
      clean: function(tweet) {
        return this.hash(this.at(this.list(this.link(tweet))));
      }
    } // ify
};		

});

// start jqtweet!
$(document).ready(function () {
// start jqtweet!
JQTWEET.loadTweets();
});

jQuery(function($) {
	$("#twitter-div").bind('scroll', function() {
		if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
            //alert('end reached');
        }
	})
});
// JavaScript Document