<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Employee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('layout.csslink')

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
                Update Home news</h3>
            {{-- end title --}}


            <div class="modal-content border-info bg-light row mx-auto">
                <form action="{{ url('updhome', $homenews->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body row mx-auto">
                        <div class="form-group col-md-6">
                            <label class="fw-bold text-dark">Title</label>
                            <input type="text" name="description" value="{{ $homenews->discription }}" placeholder="Write a banner title"
                                class="form-control text-dark bg-light" required>
                        </div>
                        <div class="form-group col-md-6 mt-3">
                        <img src="{{ asset('homenews/' . $homenews->image) }}"
                        alt="" class="img img-thumbnail">
                        </div>
                        <div class="form-group col-md-6">

                            <label class="fw-bold text-dark">Image</label>
                            <input type="file" name="image" value="{{ $homenews->image }}"
                                placeholder="Write a name" class="form-control text-dark bg-light" required>

                        </div>


                    <div class="text-center mt-3">
                        <button type="submit" name="submitbtn" class="btn btn-secondary text-light   p-2 w-25">Update
                        </button>
                    </div>
            </div>

        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    @include('layout.jslink')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')
    <style>
        .img {
        height: 100 !important;
        width: 150px !important;
        border-radius: 5%;
        object-fit:cover;

    }
    </style>


</body>

</html>
