<?
  $titleStr = "Ladnai Koong";
  if(isset($_GET['cat'])) {
    $titleOption = $_GET['cat'];
    if($titleOption==1) $titleStr = "GSom Tum"; 
    else if($titleOption==2) $titleStr = "GKaoNaew"; 
    else $titleStr = "GKaiYang";
  }
  
  if(isset($_POST['cat'])) {
    $titleOption = $_POST['cat'];
    if($titleOption==1) $titleStr = "PSom Tum_"+$titleOption; 
    else if($titleOption==2) $titleStr = "PKaoNaew_"+$titleOption;  
    else $titleStr = "PKaiYang_"+$titleOption;
  }
  
?>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"
      xmlns:fb="https://www.facebook.com/2008/fbml"> 
 <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# og_chatterbox: http://ogp.me/ns/fb/og_chatterbox#">
  <meta property="fb:app_id" content="197422093706392" /> 
  <meta property="og:type"   content="og_chatterbox:recipe" /> 
  <meta property="og:url"    content="http://chatterbox.mobi/opengraph/og_cook_obj_5.php?cat=1" /> <!-- these get parameter determine the details -->
  <meta property="og:title"  content="<?= $titleStr ?>" /> 
  <meta property="og:image"  content="http://fbwerks.com:8000/zhen/cookie.jpg" /> 

  <title>OG Tutorial App</title>
  <script type="text/javascript">
  function postCook()
  {
      FB.api(
        '/me/og_chatterbox:cook&recipe=http://chatterbox.mobi/opengraph/og_cook_obj_5.php',
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
    <button onclick="fbLogin()">
             Login with Facebook
    </button>

  <h3>Stuffed Cookies</h3>
  <p>
    <img title="Stuffed Cookies" 
         src="http://fbwerks.com:8000/zhen/cookie.jpg" 
         width="550"/>
  </p>
  <br>
  <form>
    <input type="button" value="Cook" onclick="postCook()" />
  </form>
  <fb:activity actions="og_recipebox:cook"></fb:activity>
</body>
</html>