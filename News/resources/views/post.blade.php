<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Abuzaid News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
        </div> --}}
        <!-- Spinner End -->
        @include('layout.sidebar')

        <!-- Content Start -->
        <div class="content">
            @include('layout.nav')
            {{-- title section --}}
            <h3 class="text-center text-dark mb-0   p-2"
                style="background-image: linear-gradient(120deg, #35f58e 0%, #7dfd8e 100%); border-radius:3px;">
                Post News</h3>

                <div style="margin-right: 25px;" class="float-end mb-2 container-fluid">
                    <button type="submit" class="btn-md float-end mt-3 py-2 btn btn-secondary text-light"
                    onclick="window.setTimeout(function() {
                      window.location.href = '/formpost';
                    }, 0)">
                    Add Post<i style="top:2px; left:5px; font-size:22px; position:relative;" class="fas fa-plus-circle"></i>
            </button>
                  </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Full width for the table -->
                        <div class="table-responsive">
                            <table class="table  table-hover">

                                <thead class="bg-secondary">
                                    <tr>
                                        <th class="text-light" scope="col">Author</th>
                                        <th class="text-light" scope="col">Author Image</th>
                                        <th class="text-light " scope="col">Image</th>
                                        <th class="text-light" scope="col">Title</th>
                                        <th class="text-light" scope="col">Category</th>
                                        <th class="text-light" scope="col">Description</th>
                                        <th class="text-light" scope="col">Date/Time</th>

                                        <th class="text-light" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $item)
                                        <tr class="tb">
                                            <td class="align-middle">{{ $item->author->author }}</td>

                                          <td class="align-middle p-0">  <img src="{{ asset('Authors/' . $item->author->image) }}" alt="{{ $item->author->author }}" class="author-image img-thumbnail  p-1">
                                          </td>
                                            <td class="align-middle "><img src="{{ asset('postnews/' . $item->Image) }}"
                                                    alt=""  class="img"></td>
                                            <td class="align-middle">{{ $item->Title }}</td>

                                            <td class="align-middle">{{ $item->Category }}</td>
                                            <td class="align-middle" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                {!! $item->Description !!}
                                            </td>


                                            <td class="align-middle">{{ date('Y-m-d h:i A', strtotime($item->created_at)) }}</td>
                                            <td class="align-middle">
                                                <a class="fas fa-trash-alt fa-lg rounded text-light"
                                                    href="{{ url('/delete_post', $item->id) }}"
                                                    onclick="confirmation(event)"></a>
                                                <a class="text-decoration-none fas fa-edit fa-lg btn-info fa-lg rounded text-light p-2"
                                                    href="{{ url('/updatepost', $item->id) }}"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>
                {{-- end --}}
                <div class="demo">
                    {!! $news->links('vendor.pagination.custom') !!}
                </div>


            </div>

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg border-0 btn-info btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
        </div>


        @include('layout.jslink')
        <style>


.img-thumbnail { width:95px!important ;
   margin-right: 10px !important;
height: 82px !important;

}


        </style>

</body>

</html>
