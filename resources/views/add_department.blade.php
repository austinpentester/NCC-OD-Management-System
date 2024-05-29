<!doctype html>
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
 


         <!-- heaader  -->
  @include('include/header')


                <!-- Main content -->
                <div class="col py-3">
                    <h3>Add Cadets Data</h3>
                    <form id="departmentForm" method="POST" action="/add_department">
                      @csrf

                        <div class="row mt-5">
                            <div class="col-lg-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Department</span>
                                    </div>
                                    <input type="text" name="department" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center mt-2">
                                <button type="submit" id="submitForm" class="btn btn-dark">Add</button>
                            </div>
                        </div>
                    </form>

                  <table class="table mt-5">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Department</th>
                            <th scope="col">Options</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($departments as $department)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$department->department}}</td>
                            <form method="POST" action="{{ route('adddepartments.delete', ['id' => $department->id]) }}">
                                @csrf
                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                            </form>

                          </tr>
                          @endforeach
        
                        </tbody>
                  </table>


                </div>   
    </main>
    @include('include/footer')
    <!-- Include jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
