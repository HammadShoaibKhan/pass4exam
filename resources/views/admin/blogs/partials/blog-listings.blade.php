<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th><input type="checkbox" class="select-all-checkbox"></th>
        <th>Title</th>
        <th>Approved</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @forelse($blogs as $key => $blog)
        <tr>
            <td><input type="checkbox" class="checkboxes" data-id="{{ $blog->id }}"></td>
            <td>{{ $blog->title ?? '' }}</td>
            <td>
                @if ($blog->status == 1)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-danger">Disabled</span>
                @endif
            </td>
            <td>
                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                <a href="javascript:;" data-id="{{ $blog->id }}" data-route="{{ route('admin.blog.delete') }}" class="btn btn-sm btn-danger del-blog"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>
