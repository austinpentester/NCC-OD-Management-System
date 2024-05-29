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
 


         <!-- heaader  -->
  @include('include/header')


                <!-- Main content -->
                <div class="col py-3">
                    <h3>Add Cadets Data</h3>
                  <form id="addCadetForm">
                  @csrf

                  <div class="row mt-5">
                      <div class="col-lg-3">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                          </div>
                          <input type="text" name="name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                      </div>

                      <div class="col-lg-3">
                      <div class="input-group mb-3">
                      <select id="department" name="department" class="form-select">
                        <option value="Select Department" selected>Select Department</option>
                        @foreach($departments as $department)
                        <option value="{{$department->department}}">{{$department->department}}</option>
                        @endforeach
                      </select>
                          
                        </div>
                      </div>

                      <div class="col-lg-3">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Class No</span>
                          </div>
                          <input type="text" name="classNo" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                      </div>
                      
                      <div class="col-lg-3">
                      <div class="input-group mb-3">
                      <select id="year" name="year" class="form-select">
                        <option value="Select Year" selected>Select Year</option>
                        <option value="First Year">First Year</option>
                        <option value="Second Year">Second Year</option>
                        <option value="Third Year">Third Year </option>
                      </select>
                          
                        </div>
                      </div>


                      <div class="col-md-12 text-center mt-2">
                          <button  class="btn btn-dark">Add</button>
                      </div>


                    </div>
                  </form>

                  <table id="cadetTable" class="table mt-5">
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

                        @foreach($cadetData as $data)
                          <tr id="{{$data->id}}">
                              <th id="rowid" scope="row">{{$loop->iteration}}</th>
                              <td>{{$data->name}}</td>
                              <td>{{$data->department}}</td>
                              <td>{{$data->classNo}}</td>
                              <td>{{$data->year}}</td>
                              <td><button  class="btn btn-danger rounded-circle delete-btn" data-cadet-id="{{$data->id}}">Delete</button></td>
                          </tr>
                        @endforeach

                         
                        </tbody>
                  </table>


                </div>
            </div>
        </div>
    </main>
    @include('include/footer')
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {




      // ajax for submit a value
        $('#addCadetForm').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            let selectedValue = $('#department').val();
            let selectedValue1 = $('#year').val();
            if(selectedValue == "Select Department"){
              alert('Please Select a Department');
            }else if(selectedValue1 == "Select Year"){
              alert('Please Select a Year');
            }else{


            // Serialize form data
            var formData = $(this).serialize();

            // Send AJAX request
            $.ajax({
                url: "{{ route('addcadetdataController.store') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    let rowval = $('#cadetTable tbody tr:last-child #rowid').text(); // Get ID of the last row
                    let final = parseInt(rowval)+1;
                    // Append the new row to the table
                    // $('tbody').append(
                    //     '<tr>' +
                    //         '<th scope="row">' + final + '</th>' +
                    //         '<td>' + response.data.name + '</td>' +
                    //         '<td>' + response.data.department + '</td>' +
                    //         '<td>' + response.data.classNo + '</td>' +
                    //         '<td>' + response.data.year + '</td>' +
                    //         '<td><button  class="btn btn-danger rounded-circle">Delete</button></td>' +
                    //     '</tr>'
                    // );
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    location.reload();
                    console.error(xhr.responseText);
                    // Optionally, update UI or show error message
                    
                }
            }); //ajax
          }



        });// add cadet code close 

        // AJAX for delete button

         // AJAX for delete button
$(document).on('click', '.delete-btn', function() {
    var cadetId = $(this).data('cadet-id'); // Get the cadet ID from the clicked button
    // Send AJAX request to delete the cadet
    $.ajax({
        url: "/delete-cadet/" + cadetId, // Add "/" before "delete-cadet"
        type: "POST",
        data: {
            _token: '{{ csrf_token() }}', // Include CSRF token in the request data
            _method: 'DELETE' // Use method spoofing to send a DELETE request as it's a POST request
        },
        success: function(response) {
            // Handle success response
            console.log(response);
            // Optionally, update UI or show success message

            $('#'+cadetId).remove()
           
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error(xhr.responseText);
            // Optionally, update UI or show error message
        }
    });
});


});

  
</script>


     
</body>
</html>
