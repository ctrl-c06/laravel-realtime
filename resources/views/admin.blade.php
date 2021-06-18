<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
         <script src="https://cdn.socket.io/3.1.3/socket.io.min.js" integrity="sha384-cPwlPLvBTa3sKAgddT6krw0cJat7egBga3DJepJyrLl4Q9/5WLra3rrnMcyTyOnh" crossorigin="anonymous"></script>
    <script>
        // Process for listening to an event push.
        // too lazy to make a single source of socket.io connection
        // you can do it on your own :)
        const socket = io.connect('http://192.168.1.2:3030');
        socket.on('order_processed', (data) => {
            console.log(data);
            alert(`New order! ${data.order_code} from a user`);
        });
    </script>
</body>
</html>