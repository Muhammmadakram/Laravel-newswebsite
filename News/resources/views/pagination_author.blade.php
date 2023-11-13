<table class="table  table-hover">

    <thead class="bg-secondary">
        <tr>
            <th class="text-light " scope="col">Image</th>
            <th class="text-light " scope="col">Author</th>
            <th class="text-light " scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($author as $item)
        <tr class="tb">
            <td class="align-middle p-0">
                <img src="{{ asset('Authors/' . $item->image) }}"
                    alt="" class="img-thumbnail p-1">
                </td>
            <td class="fw-bold align-middle text-dark">
                {{ $item->author }}
            </td>

            <td class="align-middle ">
                <button id="deleteauthor" data-id="{{ $item->id }}"
                    class="fas fa-trash-alt fa-lg rounded border-0 text-light p-2"></button>
                <a id="updateauthor"
                    class="text-decoration-none fas fa-edit fa-lg bg-primary fa-lg rounded text-light p-2"
                    href="" data-bs-toggle="modal" data-bs-target="#updateModal"
                    data-uid="{{ $item->id }}" data-author="{{ $item->author }}"
                    data-image="{{ $item->image }}"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="demo">
    {!! $author->links('vendor.pagination.custom') !!}
</div>
<style>

    .img-thumbnail { width:95px!important ;
       margin-right: 10px !important;
    height: 82px !important;

    }

    </style>
