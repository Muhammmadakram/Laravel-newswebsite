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
            <h3 class="text-center text-light mb-0 fw-normal  p-2"
                style="background-image: linear-gradient(120deg, #35f58e 0%, #7dfd8e 100%); border-radius:3px;">
               Update Category</h3>
            {{-- end title --}}
            <div class="mx-auto col-xl-4 mt-1">
                <form action="{{ url('update_category',$category->id) }}" method="POST" class="col-md-12 mx-auto p-2">
                    @csrf
                    <div class="d-flex add mt-1">
                        <input type="text" name="updatecategory" required class="form-control  rounded-0 shadow-sm"
                            placeholder="You can update category " value="{{ $category->newscategory }}">
                        <button class="btn btn-secondary rounded-0" value="Update" name="submit" type="submit">
                             Update  </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>



    @include('layout.jslink')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

</body>

</html>
