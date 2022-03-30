<html>
<head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
<a class="nav-link" href="{{ route("notifications.index") }}">
    <span><i class="fas fa-envelope text-primary"></i> @lang("Berichten")</span>
    <span class="badge badge-primary bounce js-notifications"></span>
</a>
    <div id="app">

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let poll = function () {
            $.ajax({
                url: "/notifications/count",
                success: function (data) {
                    $(".js-notifications").text(data);
                    if (data > 0) {
                        $(".js-notifications").addClass("animated");    }
                },
                    error: function (xhr, error, status) {
                    if (401 === xhr.status) {
                        console.log('logged out', error, status);
                        location.href = '/login';
                    }
                }
            });
        };
        const pusher = new Pusher('98d2a1a0e8469f0666ce', {
            cluster: 'eu',
            forceTLS: true
        });

        const channel = pusher.subscribe('notifications');
        channel.bind('App\\Events\\MessageNotification', function (data){
            poll();
        })
        // poll();
        // window.notifications_poll = setInterval(poll, 15000);
    </script>
</body>
</html>
