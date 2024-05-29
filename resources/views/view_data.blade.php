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
                    <form id="viewForm">
                      @csrf

                      <div class="row mt-5">
                        <div class="col-lg-8">
                        <div class="input-group mb-3">
                        <select id="year" name="year" class="form-select">
                          <option value="Select Year" selected>Select Year</option>
                          <option value="First Year">First Year</option>
                          <option value="Second Year">Second Year</option>
                          <option value="Third Year">Third Year </option>
                        </select>
                            <div class="col-lg-4 text-center mt-2">
                                <button type="submit" id="submitForm" class="btn btn-dark">Add</button>
                            </div>
                      </div>
                    </form>

                    <div class="row">
                      <div class="col">
                      <table id="cadetTable" class="table mt-5">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Class No</th>
                            <th scope="col">Year</th>

                          </tr>
                        </thead>
                        <tbody>

           
                          

                         
                        </tbody>
                  </table>
                      </div>
                    </div>


                </div>   
    </main>
    @include('include/footer')
    <!-- Include jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {




      // ajax for submit a value
        $('#viewForm').on('submit', function(event) {
            event.preventDefault(); 

      

            // Serialize form data
            var formData = $(this).serialize();
            // console.log(formData);

            // Send AJAX request
            $.ajax({
                url: "{{ route('fetchData') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    populateTable(response.data);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    
                    // Optionally, update UI or show error message
                }
            }); //ajax
          }
        );


         // Function to populate the table with data
    function populateTable(data) {
        var tbody = $('#cadetTable tbody');
        tbody.empty(); // Clear previous data

        // Loop through fetched data and append rows to the table
        $.each(data, function(index, cadet) {
            var row = '<tr>' +
                '<th scope="row">' + (index + 1) + '</th>' +
                '<td>' + cadet.name + '</td>' +
                '<td>' + cadet.department + '</td>' +
                '<td>' + cadet.classNo + '</td>' +
                '<td>' + cadet.year + '</td>' +
                '</tr>';
            tbody.append(row);
        });
    }
    });
</script>
</body>
</html>
