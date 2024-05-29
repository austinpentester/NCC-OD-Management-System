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
                    <h3>Make OD</h3>
              
                  <div class="row mt-5">
                      <div class="col text-center mt-2">
                          <button type="submit" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">MakeOD</button>
                      </div>
                    </div>
            

                  <table id="finalTable" class="table mt-5">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Options</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($allDates as $allDate)
                        <tr id="{{$allDate->id}}">
                          <td>{{$loop->iteration}}</td>
                          <td>{{$allDate->Date}}</td>
                          <td>
    <a href="/view_OD/{{$allDate->id}}" target="_blank" class="btn btn-success">View</a>
    <button class="btn btn-danger delete-btn" data-bs-toggle="modal" data-cadet-id="{{$allDate->id}}">Delete</button>
</td>

                        </tr>
                          @endforeach
                        </tbody>
                  </table>


                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        
         
                <div class="row">
                <div class="alert alert-success d-none" role="alert">
                    Cadets Added Successfully
                </div>
                <div class="alert alert-danger d-none" role="alert">
                If there are any missing fields, please check if day, date, year, or checkedIds are empty.
                </div>
                    <div class="col">
                        <form id="viewForm">
                            @csrf
                            <div class="input-group mb-3">
                                <select id="year" name="year" class="form-select">
                                    <option value="Select Year" selected>Select Year</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year </option>
                                </select>
                            </div>
                        </form>
                    </div>

                    <div class="col">
                     
               
                            <div class="input-group mb-3">
                                <select id="day" name="day" class="form-select">
                                    <option value="Select Day" selected>Select Day</option>
                                    <option value="Full Day">Full Day</option>
                                    <option value="Half Day">Half Day</option>
                                    
                                </select>
                            </div>
               
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <input name="date" type="text" class="form-control" placeholder="Enter Date" id="date">
                        </div>
                    </div>
                </div>
       
                <div class="row">
                    <div class="col">
                        <table id="cadetTable" class="table mt-5">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Uniq ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Class No</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Present</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Table rows will be dynamically added here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  id="add">ADD</button>
            </div>
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

        $(document).on('click','#add',function() {

            let checkedIds = [];
            $('#cadetTable input[type="checkbox"]:checked').each(function() {
                checkedIds.push($(this).closest('tr').find('td:eq(0)').text());
            });
            console.log(checkedIds);

            let day = $("#day").val();
            let date = $("#date").val();
            let year = $("#year").val();

            // validation alert
            if (day === "" || date === "" || year === "" || checkedIds.length === 0) {
                $('.alert-danger').removeClass('d-none'); // Show the alert
                setTimeout(function() {
                    $('.alert-danger').addClass('d-none'); // Hide the alert after 3 seconds
                }, 5000);
            }else if(day === "Select Day"){
                $('.alert-danger').removeClass('d-none'); // Show the alert
                setTimeout(function() {
                    $('.alert-danger').addClass('d-none'); // Hide the alert after 3 seconds
                }, 5000);
            }else{
          
                $.ajax({
                    url: "{{ route('MakeODController.insertOD') }}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                            day: day,
                            date: date,
                            year: year,
                            checkedIds: checkedIds
                        }, // Send serialized form data
                    success: function(response) {
                        $('.alert-success').removeClass('d-none'); // Show the alert
                        setTimeout(function() {
                            $('.alert-success').addClass('d-none'); // Hide the alert after 3 seconds
                        }, 3000);
                        $('#viewForm')[0].reset();
                        console.log(response);
                        populateTable(response.data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
            

        });
        




// AJAX for delete button
$(document).on('click', '.delete-btn', function() {
    var cadetId = $(this).data('cadet-id'); 
    console.log(cadetId);
    // Send AJAX request to delete the cadet
    $.ajax({
        url: "/delete-Date/" + cadetId, // Add "/" before "delete-cadet"
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


        
// ajax for submit a value
// ajax for submit a value
$('#year').on('change', function(event) {
    event.preventDefault(); 

    // Serialize form data
    var formData = $('#viewForm').serialize();

    // Send AJAX request
    $.ajax({
        url: "{{ route('MakeODController.fetchData') }}",
        type: "POST",
        data: formData, // Send serialized form data
        success: function(response) {
            // Handle success response
            console.log(response);
            populateTable(response.data);


            
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error(xhr.responseText);
        }
    });
});



         // Function to populate the table with data
    function populateTable(data) {
        var tbody = $('#cadetTable tbody');
        tbody.empty(); // Clear previous data

        // Loop through fetched data and append rows to the table
        $.each(data, function(index, cadet) {
            var row = '<tr>' +
                '<th scope="row">' + (index + 1) + '</th>' +
                '<td>' + cadet.id + '</td>' +
                '<td>' + cadet.name + '</td>' +
                '<td>' + cadet.department + '</td>' +
                '<td>' + cadet.classNo + '</td>' +
                '<td>' + cadet.year + '</td>' +
                '<td>' + '<div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></div>' + '</td>'+
                '</tr>';
            tbody.append(row);
        });
    }
    });
</script>

</body>
</html>
