
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
                <tr class="tb ">
                    <td class="align-middle p-0  "><img
                            src="{{ asset('newsbanner/' . $item->bannerimage) }}" alt=""
                            class="img img-thumbnail"></td>
                    <td class="fw-bold p-0 align-middle text-dark">
                        {{ $item->bannertitle }}</td>
                    <td class="align-middle ">
                        <button id="deletebanner" data-id="{{ $item->id }}"
                            class="fas fa-trash-alt fa-lg rounded border-0 text-light p-2"></button>

                            <a id="updatebanner"
                            class="text-decoration-none fas fa-edit fa-lg bg-primary fa-lg rounded text-light p-2"
                            href=""
                            data-bs-toggle="modal"
                            data-bs-target="#updateModal"
                            data-uid="{{ $item->id}}"
                            data-title="{{ $item->bannertitle}}"
                            data-image="{{ $item->bannerimage}}"
                            ></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="demo">
        {!! $banner->links('vendor.pagination.custom') !!}
    </div>

