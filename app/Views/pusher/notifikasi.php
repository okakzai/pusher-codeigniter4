<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('5598ce61805bbf937e44', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('codeigniter4');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data['message']));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <!-- <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p> -->
</body>