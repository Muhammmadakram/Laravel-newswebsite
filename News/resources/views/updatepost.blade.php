<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Abuzaid news</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    @include('layout.csslink')

</head>

<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> --}}
        @include('layout.sidebar')

        <!-- Content Start -->
        <div class="content">
            @include('layout.nav')
            {{-- title section --}}
            <h3 class="text-center text-dark mb-0   p-2"
                style="background-image: linear-gradient(120deg, #35f58e 0%, #7dfd8e 100%); border-radius:3px;">
                Update Post</h3>
            {{-- end title --}}


            <div class="modal-content border-info bg-light row mx-auto">
                <form action="{{ url('update_post', $updatepost->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body row mx-auto">
                        <div class="form-group col-md-6">
                            <label class="fw-bold text-dark">Title</label>
                            <input type="text" name="title" value="{{ $updatepost->Title }}"
                                placeholder="Write a banner title" class="form-control text-dark bg-light" required>
                        </div>

                        <div class="form-group col-md-6 ">
                            <label class="fw-bold text-dark">Author</label>
                            <select name="author_id" class="form-control" required>
                                <option class="d-none" selected="" value="">Select the Author</option>
                                @foreach ($des as $author)
                                    <option class="text-dark" value="{{ $author->id }}"
                                        @if ($author->id === $updatepost->author_id) selected @endif>
                                        {{ $author->author }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 mt-3">
                            <label class="fw-bold text-dark">Category</label>
                            <select name="category" id="company" class="form-control text-dark fw-bold" required>
                                <option class="d-none" selected="" value="{{ $updatepost->Category }}">Select the
                                    Category</option>
                                @foreach ($category as $prod)
                                    <option class="text-dark" value="{{ $prod->newscategory }}"
                                        @if ($prod->newscategory === $updatepost->Category) selected @endif>
                                        {{ $prod->newscategory }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6 mt-3">

                            <label class="fw-bold text-dark">Image</label>
                            <input type="file" name="postimage" value="{{ $updatepost->Image }}"
                                placeholder="Write a name" class="form-control text-dark bg-light">

                        </div>

                        <div class="form-group col-12    mt-3">
                            <img src="{{ asset('postnews/' . $updatepost->Image) }}" alt=""
                                class="img img-thumbnail">

                            <label class="fw-bold row ms-3 text-dark">Description</label>
                            <textarea id="description" class="form-control" name="description">{{ $updatepost->Description }}</textarea>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" name="submitbtn"
                                class="btn btn-secondary text-light   p-2 w-25">Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
        </div>

        <script>
            $('#description').summernote({
                placeholder: 'Write a description...',
                tabsize: 2,
                height: 130
            });
        </script>
        @include('layout.jslink')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @include('sweetalert::alert')
        <style>
            .img {
                height: 100 !important;
                width: 150px !important;
                border-radius: 5%;
                object-fit: cover;

            }
        </style>


</body>

</html>
