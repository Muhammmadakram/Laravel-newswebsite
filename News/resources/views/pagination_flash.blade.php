<table class="table  table-hover">

                                <thead class="bg-secondary">
                                    <tr>
                                        <th class="text-light " scope="col">Title Flash</th>
                                        <th class="text-light " scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                       @foreach ($items as $item)
                        <tr class="tb">
                      <td class="fw-bold align-middle text-dark">
                         {{ $item->newsflash }}</td>
                <td class="align-middle">
             <button id="deleteflash" data-id="{{ $item->id }}"
             class="fas fa-trash-alt fa-lg rounded border-0 text-light p-2"></button>
              <a id="updateflash"  class="text-decoration-none fas fa-edit fa-lg bg-primary fa-lg rounded text-light p-2"
         href="" data-bs-toggle="modal" data-bs-target="#updateModal"
              data-uid="{{ $item->id }}" data-flash="{{ $item->newsflash }}"
     ></a>
             </td>
      </tr>
         @endforeach
            </tbody>
                            </table>
                            <div class="demo">
                                {!! $items->links('vendor.pagination.custom') !!}
                            </div>