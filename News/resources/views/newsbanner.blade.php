<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Abuzaid News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('layout.csslink')
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        @include('layout.sidebar')

        <!-- Content Start -->
        <div class="content">
            @include('layout.nav')
            {{-- title section --}}
            <h3 class="text-center text-dark mb-0   p-2"
                style="background-image: linear-gradient(120deg, #35f58e 0%, #7dfd8e 100%); border-radius:3px;">
                Banner</h3>
            {{-- end title --}}
            <div style="margin-right: 25px;" class="float-end  py-2 container-fluid">
                <button type="button" class="btn-md float-end mt-3 py-2 btn btn-secondary text-light"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add News<i style="top:2px; left:5px; font-size:22px; position:relative;"
                        class="fas fa-plus-circle"></i>
                </button>
            </div>

            <!-- Edit Modal HTML -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <form id="addBannerForm" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header ">
                                <h4 class="modal-title text-dark fw-bold" id="exampleModalLabel">Add News Banner</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Title News</label>
                                    <input type="text" name="news" placeholder="Write a news"
                                        class="form-control text-dark bg-light" required>
                                </div>


                                <div class="form-group mt-2">
                                    <label class="fw-bold text-dark">Banner Image</label>
                                    <input type="file" name="bannerimage" class="form-control text-dark bg-light"
                                        required>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="submitbtn" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal HTML -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Full width for the table -->
                        <div id="tableContainer" class="table-responsive">
                            <table class="table  table-hover ">

                                <thead class="bg-secondary">
                                    <tr>
                                        <th class="text-light " scope="col">Banner Image</th>
                                        <th class="text-light " scope="col">Banner Title</th>
                                        <th class="text-light " scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="items-list">
                                    @foreach ($banner as $item)
                                    <tr class="tb">
                                        <td class="align-middle p-0"><img
                                                src="{{ asset('newsbanner/' . $item->bannerimage) }}" alt=""
                                                class="img img-fluid p-1"></td>
                                        <td class="fw-bold p-0 align-middle text-dark">
                                            {{ $item->bannertitle }}</td>
                                        <td class="align-middle ">
                                            <button id="deletebanner" data-id="{{ $item->id }}"
                                                class="fas fa-trash-alt fa-lg rounded border-0 text-light p-2"></button>
                                            <a id="updatebanner"
                                                class="text-decoration-none fas fa-edit fa-lg bg-primary fa-lg rounded text-light p-2"
                                                href="" data-bs-toggle="modal" data-bs-target="#updateModal"
                                                data-uid="{{ $item->id }}" data-title="{{ $item->bannertitle }}"
                                                data-image="{{ $item->bannerimage }}"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="demo">
                                {!! $banner->links('vendor.pagination.custom') !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to Top -->
        <div>
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

    </div>

    {{-- <script>
        function confirmation(ev) {
                ev.preventDefault();
                var urlToRedirect = ev.currentTarget.getAttribute('href');
                console.log(urlToRedirect);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#fd5c63',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your Banner has been deleted.',
                            'success'
                        )
                        window.location.href = urlToRedirect;
                    }
                })
            }
    </script> --}}

    @include('updatebanner')
    @include('layout.jslink')
    <script>
        // show and add data
        $(document).ready(function() {
            $('#addBannerForm').submit(function(e) {
                e.preventDefault();
                // Get the form data
                var gformData = new FormData(this);
                $.ajax({
                    url: '{{ url('/addbanner') }}',
                    type: 'POST',
                    data: gformData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("#exampleModal").modal("hide"); // Close the modal
                        $("#exampleModal form")[0].reset(); // Reset the form
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
            $(document).on('click', '#deletebanner', function() {
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
                            url: '/deletebanner/' + productId,
                            type: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: () => {
                                Swal.fire('Deleted!', 'The banner has been deleted.',
                                    'success');
                                // Remove the deleted banner row from the table
                                $(this).closest('tr').remove();
                                // Remove the success message after 2 seconds
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

        // pagination
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                getProducts(page);
            });

            function getProducts(page) {
                $.ajax({
                    url: '/pagination/pagination-data?page=' + page,
                    success: function(response) {
                        $('#tableContainer').html(response);
                    }
                });
            }
        });
        // show value in update form
        $(document).ready(function() {
            $(document).on('click', '#updatebanner', function() {
                let uid = $(this).data('uid');
                let titl = $(this).data('title');
                let img = $(this).data('image');
                // Set the values of the input fields in the update form
                $('#up_id').val(uid);
                $('#up_title').val(titl);
                $('#up_image').val(img);
            });
        });
        // update data
        $(document).ready(function() {
            let formChanged = false; // Flag to track if any form field has been changed
            // Listen for changes in the form fields
            $('#updateBannerForm input').on('input', function() {
                formChanged = true;
            });

            $('#updateBannerForm').submit(function(e) {
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
                let title = $('#up_title').val();
                let image = $('#up_image').prop('files')[0];

                let formData = new FormData();
                formData.append('up_id', up_id);
                formData.append('up_title', title);
                formData.append('up_image', image);

                $.ajax({
                    url: '{{ route('updatebanner') }}',
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
               let currentPage = $('.pagination .active').text();
                // Assuming the active page indicator has 'active' class
                getProducts(currentPage);
             // Reset the formChanged flag after successful submission
               formChanged = false;
                    },
                });
            });
        });

        function getProducts(page) {
            $.ajax({
                url: '/pagination/pagination-data?page=' + page,
                success: function(response) {
                    $('#tableContainer').html(response);
                },
            });
        }
    </script>

</body>

</html>
