<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Abuzaid News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layout.csslink')

</head>

<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        @include('layout.sidebar')

        <!-- Content Start -->
        <div class="content">
            @include('layout.nav')
            {{-- title section --}}
            <h3 class="text-center text-dark mb-0 p-2"
                style="background-image: linear-gradient(120deg, #35f58e 0%, #7dfd8e 100%); border-radius:3px;">
                Manage News Category</h3>
            {{-- end title --}}
            <div class="mx-auto col-xl-6 mt-1">
                <form id="addcategory" method="POST" class="col-md-12 mx-auto p-2">
                    @csrf
                    <div class="d-flex add mt-1">
                        <input type="text" name="category" required class="form-control  rounded-0 shadow-sm"
                            placeholder="Write a Category ">
                        <button class="btn btn-dark rounded-0" name="submit" type="submit"><i
                                class="fa fa-plus"></i></button>
                    </div>
                </form>

                {{-- fetch data in table --}}
                <div id="tableContainer" class="table-responsive">
                    <table class="table  table-hover">
                        <thead class="bg-secondary ">
                            <tr>
                                <th class="text-light " scope="col">Category Name</th>
                                <th class="text-light " scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $item)
                            <tr class="tb">
                                <td class="align-middle text-dark fw-bolder p-3">{{ $item->newscategory }}</td>
                                <td class="align-middle ">
                                    <button id="deletecategory" data-id="{{ $item->id }}"
                                        class="fas fa-trash-alt fa-lg rounded border-0 text-light p-2"></button>
                                    <a id="updatecategory"
                                        class="text-decoration-none fas fa-edit fa-lg bg-primary fa-lg rounded text-light p-2"
                                        href="" data-bs-toggle="modal" data-bs-target="#updateModal"
                                        data-uid="{{ $item->id }}" data-category="{{ $item->newscategory  }}"
                                       ></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="demo">
                        {!! $news->links('vendor.pagination.custom') !!}
                    </div>
                </div>
            </div>
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
    </div>




    <div class="modal fade " id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <form id="updatecategoryform" method="POST">
                @csrf
                <input type="hidden"  id="up_id">
                <div class="modal-header ">
                    <h4 class="modal-title text-dark fw-bold" id="updateModalLabel">Update News Category</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="fw-bold text-dark">Category Name</label>
                        <input type="text" name="updatecategory" id="up_category" placeholder="Write a Category name"
                            class="form-control text-dark bg-light" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="submitbtn" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    @include('layout.jslink')

    <script>
        // show and add data
          $(document).ready(function() {
            $('#addcategory').submit(function(e) {
                e.preventDefault();
        var gformData = new FormData(this);
                $.ajax({
                    url: '{{ url('/addcategory') }}',
                    type: 'POST',
                    data: gformData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                         $('input[name="category"]').val('');
                         $(".table").load(location.href + ' .table'); //fetch the data
                        // Show success message
                             Swal.fire({
                            icon: 'success',
                            title: 'Added successfully',
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    },
                });
            });
         });

           // delete banner
           $(document).ready(function() {
                $(document).on('click', '#deletecategory', function() {
                    var productId = $(this).data('id');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this product!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#fd5c63',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '/deletecategory/' + productId,
                                type: 'DELETE',
                                data: {
                                    "_token": "{{ csrf_token() }}"
                                },
                                success: () => {
                                    Swal.fire('Deleted!', 'The Category has been deleted.',
                                        'success');
                                    // Remove the deleted banner row from the table
                                    $(this).closest('tr').remove();
                                    // Remove the success message after 9ms seconds
                                    setTimeout(() => {
                                        Swal.close();
                                    }, 900);
                                },
                                error: () => {
                                    Swal.fire('Error!',
                                        'An error occurred while deleting the banner.',
                                        'error');
                                },
                            });
                        }
                    });
                });
            });

              // show value in update form
              $(document).ready(function() {
                $(document).on('click', '#updatecategory', function() {
                    let uid = $(this).data('uid');
                    let category = $(this).data('category');
                    // Set the values of the input fields in the update form
                    $('#up_id').val(uid);
                    $('#up_category').val(category);
                });
            });

 // update data

    $(document).ready(function() {
  let formChanged = false; // Flag to track if any form field has been changed

  // Listen for changes in the form fields
  $('#updatecategoryform input').on('input', function() {
    formChanged = true;
  });

  $('#updatecategoryform').submit(function(e) {
    e.preventDefault();

    if (!formChanged) {
      // Display a message asking the user to make some updates
      Swal.fire({
        icon: 'warning',
        title: 'No Changes Made',
        text: 'Please make some changes in the update form before submitting.',
      });
      return;
    }
                    // Get the form data
                    let up_id = $('#up_id').val();
                    let category = $('#up_category').val();

                    let formData = new FormData();
                    formData.append('up_id', up_id);
                    formData.append('up_category', category);
                    $.ajax({
                        url: '{{ url('/updatecategory') }}',
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(response) {
                            $("#updateModal").modal("hide");
                            $("#updateModal form")[0].reset();
                             // Update pagination content after successful update
                             let currentPage = $('.pagination .active')
                                .text(); // Assuming the active page indicator has 'active' class
                            getProducts(currentPage);
                            formChanged = false;
                        },
                    });
                });
            });
// for fetch data in pagination after updates
            function getProducts(page) {
                $.ajax({
                    url: '/pagination/newscategory?page=' + page,
                    success: function(response) {
                        $('#tableContainer').html(response);
                    },
                });
            }

       // pagination
       $(document).ready(function() {
                $(document).on('click', '.pagination a', function(e) {
                    e.preventDefault();
                    let page = $(this).attr('href').split('page=')[1];
                    getProducts(page);
                });

                function getProducts(page) {
                    $.ajax({
                        url: '/pagination/newscategory?page=' + page,
                        success: function(response) {
                            $('#tableContainer').html(response);
                        }
                    });
                }
            });





    </script>
</body>

</html>
