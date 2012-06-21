<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml"> 
  <title>OG Tutorial App</title>
  <script type="text/javascript">
  function postCook()
  {
    FB.api( //cannot send this dynamically yet; fb caching makes it hard to test -->
      '/me/og_chatterbox:cook&recipe='+encodeURIComponent('http://chatterbox.mobi/opengraph/og_cook_obj_dynamic.php?showTitle=ritsayaaa&showImage=buang&fbrefresh=1'), 
      'post',
      function(response) {
        if (!response || response.error) {
          alert('Error occured');
        } else {
            alert('Cook was successful! Action ID: ' + response.id);
        }
    });
  }
  </script>
</head>
<body>
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '197422093706392', // App ID
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
      });
    };

    // Load the SDK Asynchronously
    (function(d){
      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
      js = d.createElement('script'); js.id = id; js.async = true;
      js.src = "//connect.facebook.net/en_US/all.js";
      d.getElementsByTagName('head')[0].appendChild(js);
    }(document));

    function fbLogin() {
     FB.login(function(response) {
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
   } else {
     console.log('User cancelled login or did not fully authorize.');
   }
 }, {scope:'publish_actions'});
};

  </script>
    <button onclick="fbLogin()">Login with Facebook
    </button>
  <form>
    <input type="button" value="Cook" onclick="postCook()" />
  </form>
</body>
</html>