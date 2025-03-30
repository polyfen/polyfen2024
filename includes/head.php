<!-- META General -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta property="og:type" content="website">
<meta name="author"  content="The Polyfen Group LLC">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="fb:app_id" content="1799272553516195">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="Polyfen">
<meta name="twitter:creator" content="@We_are_Polyfen">
<meta name="p:domain_verify" content="defdac0db8bc98b64145d03def30a79f">

<!-- FAVICON -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#7537f8">
<meta name="msapplication-TileColor" content="#7537f8">
<meta name="theme-color" content="#7537f8">

<!-- CSS General -->
<link rel="stylesheet" href="/app/css/styles-min.css?v=25.1.4" type="text/css">

<!-- FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

<!-- targetCountry -->
<script>
(function() {
  window.targetCountry = null;
  
  fetch('get_ipinfo.php')
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      window.targetCountry = data.targetCountry;
      console.log('Global get_ipinfo:', data);
    })
    .catch(function(error) {
      console.error('Error:', error);
      window.targetCountry = false;
    });
})();
</script>

<!-- GTM -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P25JFWC');</script>
<!-- End Google Tag Manager -->

<!-- Images preload -->
<link rel="preload" as="image" href="/imgs/icons/arrow-square-out-fill.svg">
<link rel="preload" as="image" href="/imgs/icons/copy-fill.svg">
<link rel="preload" as="image" href="/imgs/icons/google-drive-logo-fill.svg">


<!-- Global javascript -->
<script defer src="/app/js/main.js"></script>
<script defer src="/app/js/timezone.js"></script>
<script defer src="/app/js/subtle.js"></script>
<script defer src="/app/js/modal-position.js"></script>
<script defer src="/app/js/scrollfooter.js"></script>
<script defer src="/app/js/svgmenu.js"></script>
<script defer src="/app/js/leadership-parallax.js"></script>

<!-- jQuery -->
<script
src="https://code.jquery.com/jquery-3.6.3.min.js"
integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>
