<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th><input type="checkbox" class="select-all-checkbox"></th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Approved</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @forelse($testimonials as $key => $testimonial)
        <tr>
            <td><input type="checkbox" class="checkboxes" data-id="{{ $testimonial->id }}"></td>
            <td>{{ $testimonial->name ?? '' }}</td>
            <td>{{ $testimonial->email ?? '' }}</td>
            <td>{{ $testimonial->subject ?? '' }}</td>
            <td>
                @if ($testimonial->approved == 1)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-danger">Disabled</span>
                @endif
            </td>
            <td>
                <a href="{{ route('admin.testimonial.view', $testimonial->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                <a href="javascript:;" data-id="{{ $testimonial->id }}" data-route="{{ route('admin.testimonial.delete') }}" class="btn btn-sm btn-danger del-testimonial"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>
<script>
    $('#datatable').DataTable();
</script>
