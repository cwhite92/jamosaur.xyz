<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jamosaur</title>
    <meta name="description" content="whoa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
@yield('content')
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>
    var $toggle = $('#header-toggle');
    var $menu = $('#header-menu');

    $toggle.click(function() {
        $(this).toggleClass('is-active');
        $menu.toggleClass('is-active');
    });

    $(".working-on").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".work").offset().top
        }, 1500);
    });
</script>
</body>
</html>