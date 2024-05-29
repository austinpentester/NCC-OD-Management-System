<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <div class="m-4">
        <div class="row mt-5">
            <div class="col">
        <!-- first year full day OD -->
        @if(!empty($fd_fy))
                <p class="text-center h4">First Year - Full Day - {{$thisdate}}</p>
            <table id="oDTable" class="table mt-3 ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class No</th>
                    </tr>
                </thead>
                <tbody>
            
            @foreach ($fd_fy as $cadet)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cadet->name}}</td> <!-- Assuming 'name' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->department}}</td> <!-- Assuming 'department' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->classNo}}</td> <!-- Assuming 'class_no' is an attribute in the AddCadetData model -->
                </tr>

            @endforeach 
            </tbody>
            </table>
        @endif

        <!-- first year half day OD -->
        @if(!empty($hd_fy))
                <p class="text-center h4 mt-5">First Year - Half Day - {{$thisdate}}</p>
            <table id="oDTable" class="table mt-3 ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class No</th>
                    </tr>
                </thead>
                <tbody>
            
            @foreach ($hd_fy as $cadet)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cadet->name}}</td> <!-- Assuming 'name' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->department}}</td> <!-- Assuming 'department' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->classNo}}</td> <!-- Assuming 'class_no' is an attribute in the AddCadetData model -->
                </tr>

            @endforeach 
            </tbody>
            </table>
        @endif


        <!-- second year full day OD -->
        @if(!empty($fd_sy))
                <p class="text-center h4 mt-5">Second Year - Full Day - {{$thisdate}}</p>
            <table id="oDTable" class="table mt-3 ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class No</th>
                    </tr>
                </thead>
                <tbody>
            
            @foreach ($fd_sy as $cadet)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cadet->name}}</td> <!-- Assuming 'name' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->department}}</td> <!-- Assuming 'department' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->classNo}}</td> <!-- Assuming 'class_no' is an attribute in the AddCadetData model -->
                </tr>

            @endforeach 
            </tbody>
            </table>
        @endif
       


         <!-- second year half day OD -->
         @if(!empty($hd_sy))
                <p class="text-center h4 mt-5">Second Year - Half Day - {{$thisdate}}</p>
            <table id="oDTable" class="table mt-3 ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class No</th>
                    </tr>
                </thead>
                <tbody>
            
            @foreach ($hd_sy as $cadet)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cadet->name}}</td> <!-- Assuming 'name' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->department}}</td> <!-- Assuming 'department' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->classNo}}</td> <!-- Assuming 'class_no' is an attribute in the AddCadetData model -->
                </tr>

            @endforeach 
            </tbody>
            </table>
        @endif

        <!-- third  year full day OD -->
        @if(!empty($fd_ty))
                <p class="text-center h4 mt-5">Third Year - Full Day - {{$thisdate}}</p>
            <table id="oDTable" class="table mt-3 ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class No</th>
                    </tr>
                </thead>
                <tbody>
            
            @foreach ($fd_ty as $cadet)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cadet->name}}</td> <!-- Assuming 'name' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->department}}</td> <!-- Assuming 'department' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->classNo}}</td> <!-- Assuming 'class_no' is an attribute in the AddCadetData model -->
                </tr>

            @endforeach 
            </tbody>
            </table>
        @endif


        <!-- third  year half day OD -->
        @if(!empty($hd_ty))
                <p class="text-center h4 mt-5">Third Year - Half Day - {{$thisdate}}</p>
            <table id="oDTable" class="table mt-3 ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class No</th>
                    </tr>
                </thead>
                <tbody>
            
            @foreach ($hd_ty as $cadet)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cadet->name}}</td> <!-- Assuming 'name' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->department}}</td> <!-- Assuming 'department' is an attribute in the AddCadetData model -->
                    <td>{{$cadet->classNo}}</td> <!-- Assuming 'class_no' is an attribute in the AddCadetData model -->
                </tr>

            @endforeach 
            </tbody>
            </table>
        @endif


        </div>
        </div>
    </div>
   
    <!-- Include jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

    <script>
    $(document).ready(function() {
        // Print button click event handler
        $('#printBtn').click(function() {
            var printContents = $('#oDTable').html();
            var printWindow = window.open('view_OD', '_blank');
            if (printWindow) {
                printWindow.onload = function() {
                    var body = printWindow.document.querySelector('tbody');
                    body.innerHTML = printContents;
                };
            } else {
                alert('Pop-up blocker is enabled. Please disable it to print.');
            }
        });
    });
</script>


   
</body>
</html>
