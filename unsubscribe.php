<?php
include './includes/helpers.php';
loadEnv(__DIR__ . "/.env");

$SPUTNIK_APIKEY = getenv('SPUTNIK_APIKEY');
$SPUTNIK_UNSUBSCRIBE_URL = getenv('SPUTNIK_UNSUBSCRIBE_URL');
$SPUTNIK_ID = getenv('SPUTNIK_ID');

if (!isset($_GET['id']) || !$SPUTNIK_ID || !$SPUTNIK_APIKEY || !$SPUTNIK_UNSUBSCRIBE_URL) {
    die("400");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && (isset($_POST['confirm']) && $_POST['confirm'] === 'yes')) {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?: null;

    $data = [
        'id' => $_GET['id'],
        'ip' => $ip,
        'user_agent' => $user_agent,
    ];
    $headers = [
        "X-Authorization: Apikey {$SPUTNIK_ID}.{$SPUTNIK_APIKEY}",
    ];

    // request to the server;
    $response = postRequest($SPUTNIK_UNSUBSCRIBE_URL, $data, $headers);

    if ($response['status'] === 'success') {
        $success = $response['message'];
    } else {
        $error = 'Error: ' . $response['message'];
    }
} elseif (isset($_POST['confirm']) && $_POST['confirm'] === 'no') {
    header('Location: https://polyfen.com/subscriptions');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thank You! | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php'; ?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Thank You | Polyfen">
    <meta property="og:url" content="https://polyfen.com">
    <meta name="keywords"
        content="Brand, Brand Identity Design, Branding, Agency, Graphic Design, Logo, Creative, Strategy, Consultancy, Business Growth, Contact, Pricing, Message, Email, Call">
    <meta name="description" property="og:description" content="[TBD]">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/polyfen-meta.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="fb:app_id" content="1799272553516195">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Polyfen">
    <meta name="twitter:creator" content="@PolyfenAgency">
    <meta name="twitter:title" content="Contact">
    <meta name="twitter:description" content="[TBD]">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/polyfen-meta.png">
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->

    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->
</head>

<body class="thank-you dark-mode">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- INCLUDE HELLO-BAR.PHP start -->
    <?php include 'includes/hello-bar.php'; ?>
    <!-- INCLUDE HELLO-BAR.PHP end -->

    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php'; ?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- THANK-YOU page start -->
    <main class="thank-you-main fade-in">
        <h1 class="heading-2 align-center">Unsubscribe Confirmation</h1>

        <?php if (isset($error)): ?>
            <div class="align-center" role="alert">
                <small><?php echo htmlspecialchars($error); ?></small>
            </div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <div class="align-center" role="alert">
                <p class="font-bold">Success</p>
                <p><?php echo htmlspecialchars($success); ?></p>
            </div>
        <?php else: ?>
            <form method="post" class="space-y-4">
                <input type="hidden" name="message_id" value="<?php echo htmlspecialchars($message_id); ?>">
                <button type="submit" name="confirm" value="yes">Yes, unsubscribe
                    me</button>
                <button type="submit" name="confirm" value="no">No, keep me
                    subscribed</button>
            </form>
        <?php endif; ?>
    </main>


    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php'; ?>
    <!-- INCLUDE FOOTER.PHP end -->

</body>

</html>