<a class="nav-link" href="{{ route("notifications.index") }}">
    <span><i class="fas fa-envelope text-primary"></i> @lang("Berichten")</span>
    <span class="badge badge-primary bounce js-notifications"></span>
</a>

<script>
    let poll = function () {
        $.ajax({
            url: "/notification/count",
            success: function (data) {
                $(".js-notifications").text(data);
                if (data > 0) {
                    $(".js-notifications").addClass("animated");
                }
            },
            error: function (xhr, error, status) {
                if (401 === xhr.status) {
                    console.log('logged out', error, status);
                    location.href = '/login';
                }
            }
        });
    };
    poll();
    window.notifications_poll = setInterval(poll, 15000);
</script>
