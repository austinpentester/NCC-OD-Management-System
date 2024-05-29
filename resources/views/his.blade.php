<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        /* Custom CSS for sticky sidebar */
        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020; /* Ensure the top bar is above the sidebar */
        }
        /* Adjust sidebar height */
        .sidebar {
            height: 100vh;
            position: sticky;
            top: 0;
            z-index: 1020;
        }
    </style>
</head>

<body>
    <!-- Header -->
    @include('include/header')

    <!-- Main content -->
    <div class="container py-3">
        <h3>Add Cadets Data</h3>
        <form action="">
            <div class="row mt-5">
                <div class="col-lg-3">
                    <input id="datepicker" width="276" placeholder='Form Date' />
                </div>

                <div class="col-lg-3">
                    <input id="datepicker1" width="276" placeholder='To Date' />
                </div>

                <div class="col-md-3 text-center mt-2">
                    <button type="submit" class="btn btn-dark">Get</button>
                </div>
            </div>
        </form>

        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Class No</th>
                    <th scope="col">Year</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    @include('include/footer')

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Bootstrap DatePicker JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap5'
            });
            $('#datepicker1').datepicker({
                uiLibrary: 'bootstrap5'
            });
        });
    </script>
</body>
</html>
