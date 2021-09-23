<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th><input type="checkbox" class="select-all-checkbox"></th>
      <th>#</th>
      <th>Name</th>
        <th>Vendor</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
      @forelse($certifications as $key => $certification)
        <tr>
          <td><input type="checkbox" class="checkboxes" data-id="{{ $certification->id }}"></td>
          <td>{{ $key + 1 }}</td>
          <td>{{ $certification->title ?? '' }}</td>
            <td>{{ $certification->vendor->title ?? '' }}</td>
          <td>
            @if ($certification->status == 1)
              <span class="badge badge-success">Active</span>
            @endif
            @if ($certification->status == 0)
              <span class="badge badge-danger">Disabled</span>
            @endif

          </td>
          <td>
              <a href="{{ route('admin.certification.edit', $certification->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
              <a href="javascript:;" data-id="{{ $certification->id }}" data-route="{{ route('admin.certification.delete') }}" class="btn btn-sm btn-danger del-certification"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      @empty
      @endforelse
    </tbody>
  </table>

<script>
    $('#datatable').DataTable();
</script>
