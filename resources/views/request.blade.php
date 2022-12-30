<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>
</head>
<body>
    <p name="response" id="response">failed</p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        let baseUrl = "http://127.0.0.1:8000/api";
        // get api
        $.ajax({
            url: baseUrl,
            type: 'GET',
            success: function (data) {
                console.log(data);
            }
        });
        // get api
        $.get(baseUrl, function(data, status){
            console.log(data,status);
            $("#response").html(status);
        });
    });
    </script>

</body>
</html>
