<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CMS </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1 class="p-3 text-center mt-4 text-danger border-bottom">CMS</h1>
    <form action="{{ route('import.csv') }}" method="POST" id="form_data" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-4 border-end">
            </div>
            <div class="col-sm-4 border-bottom pb-5">
                <input type="file" name="file" class="form-control form-control-sm">
                <div class="text-center mt-4">
                    {{-- <button type="button" onclick="ajaxCall('form_data','{{ route('import.csv') }}',)"
                        class="btn btn-primary btn-sm">Upload File</button> --}}
                    <button type="submit" class="btn btn-primary btn-sm">Upload File</button>
                </div>
            </div>
            <div class="col-sm-4 border-start">

            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        function ajaxCall(form_id, url_name, target_id, method = "POST") {
            // getting the all from form
            const form = document.getElementById(form_id);
            // setting all input into the forData object
            FormData = new FormData(form);
            const formElements_button = Array.from(form.elements).pop();
            // getting the button of the form and passing into the preloader function
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(target_id).innerHTML = this.responseText;

                }
            };
            xhttp.open(method, url_name, true);
            xhttp.send(FormData);
        }
    </script>

</body>

</html>
