<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard - FLATY Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--base css styles-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <!--page specific css styles-->
    <!--flaty css styles-->
    <link rel="stylesheet" href="../css/flaty.css">
    <link rel="stylesheet" href="../css/flaty-responsive.css">
    <link rel="stylesheet" type="text/css" href="../assets/noti/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/noti/css/alertify.rtl.min.css">
    <link rel="stylesheet" href="../assets/data-tables/bootstrap3/dataTables.bootstrap.css" />
    <link rel="shortcut icon" href="img/favicon.html">

    <script src="../assets/noti/notify.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

<script>
    function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}

function noti(text,type) {
    $.notify(text, {
      className: type,
      position: 'bottom right' 
  });
}
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}   
</script>