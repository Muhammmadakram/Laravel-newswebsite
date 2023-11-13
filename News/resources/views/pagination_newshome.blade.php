<table class="table  table-hover ">

    <thead class="bg-secondary">
        <tr>
            <th class="text-light " scope="col">Image</th>
            <th class="text-light " scope="col">Description</th>
            <th class="text-light " scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="items-list">
        @foreach ($homenews as $item)
<tr class="tb">
<td class="align-middle p-0"><img src="{{ asset('homenews/' . $item->image) }}"
alt="" class="img img-fluid p-1"></td>
<td class="fw-bold align-middle text-dark">
{{ $item->discription }}</td>

<td class="align-middle ">
    <button id="deletebanner" data-id="{{ $item->id }}"
        class="fas fa-trash-alt fa-lg rounded border-0 text-light p-2"></button>

        <a id="updatenews"
        class="text-decoration-none fas fa-edit fa-lg bg-primary fa-lg rounded text-light p-2"
        href="" data-bs-toggle="modal" data-bs-target="#updateModal"
        data-uid="{{ $item->id }}" data-des="{{ $item->discription }}"
        data-image="{{ $item->image }}"></a>
</td>
</tr>
@endforeach
    </tbody>
</table>

<div class="demo">
    {!! $homenews->links('vendor.pagination.custom') !!}
</div>
