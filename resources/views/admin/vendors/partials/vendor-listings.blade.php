<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th><input type="checkbox" class="select-all-checkbox"></th>
      <th>#</th>
      <th>Name</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
      @forelse($vendors as $key => $vendor)
        <tr>
          <td><input type="checkbox" class="checkboxes" data-id="{{ $vendor->id }}"></td>
          <td>{{ $key + 1 }}</td>
          <td>{{ $vendor->title ?? '' }}</td>
          <td>
            @if ($vendor->status == 1)
              <span class="badge badge-success">Active</span>
            @endif
            @if ($vendor->status == 0)
              <span class="badge badge-danger">Disabled</span>
            @endif
            
          </td>
          <td> 
              <a href="{{ route('admin.vendors.edit', $vendor->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
              <a href="javascript:;" data-id="{{ $vendor->id }}" data-route="{{ route('admin.vendor.delete') }}" class="btn btn-sm btn-danger del-vendor"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @empty
      @endforelse
    </tbody>
  </table>

  <script>
      $('#datatable').DataTable();
  </script>