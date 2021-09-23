<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th><input type="checkbox" class="select-all-checkbox"></th>
        <th>Name</th>
        <th>Email</th>
        <th>Type</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @forelse($users as $key => $user)
        <tr>
            <td><input type="checkbox" class="checkboxes" data-id="{{ $user->id }}"></td>
            <td>{{ $user->name ?? '' }}</td>
            <td>{{ $user->email ?? '' }}</td>
            <td>
                @if ($user->type == 1)
                    Admin
                @endif
                @if ($user->type == 2)
                    Customer
                @endif

            </td>
            <td>
                @if ($user->status == 1)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-danger">Disabled</span>
                @endif
            </td>
            <td>
                <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                <a href="javascript:;" data-id="{{ $user->id }}" data-route="{{ route('admin.vendor.delete') }}" class="btn btn-sm btn-danger del-vendor"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>
<script>
    $('#datatable').DataTable();
</script>
