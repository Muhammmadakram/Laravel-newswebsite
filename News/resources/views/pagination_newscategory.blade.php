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
                    class="text-decoration-none fas fa-edit fa-lg bg-primary fa-lg rounded text-light p-2" href=""
                    data-bs-toggle="modal" data-bs-target="#updateModal" data-uid="{{ $item->id }}"
                    data-category="{{ $item->newscategory  }}"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="demo">
    {!! $news->links('vendor.pagination.custom') !!}
</div>
