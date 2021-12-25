<!DOCTYPE html>
<html>
<head>
    <title>Laravel Autocomplete Search using Bootstrap Typeahead JS - shouts.dev</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Laravel Autocomplete Search using Bootstrap Typeahead JS - shouts.dev</h1>
    <input class="typeahead form-control" type="text">
</div>

<script type="text/javascript">
    var path = "{{ route('search.post') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { title: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

</body>
</html>
