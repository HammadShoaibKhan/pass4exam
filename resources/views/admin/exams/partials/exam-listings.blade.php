<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th><input type="checkbox" class="select-all-checkbox"></th>
      <th>Exam&nbspCode</th>
      <th>Name</th>
      <th>Vendor</th>
      <th>Certification</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
      @forelse($exams as $key => $exam)
        <tr>
          <td><input type="checkbox" class="checkboxes" data-id="{{ $exam->id }}"></td>
          <td>{{ $exam->exam_code ?? '' }}</td>
          <td>{{ $exam->title ?? '' }}</td>
          <td>{{ $exam->vendor->title ?? '' }}</td>
          <td>{{ $exam->certification->title ?? '' }}</td>
          <td>
            @if ($exam->status == 1)
              <span class="badge badge-success">Active</span>
            @endif
            @if ($exam->status == 0)
              <span class="badge badge-danger">Disabled</span>
            @endif

          </td>
          <td>
              <a href="{{ route('admin.exam.edit', $exam->id) }}" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
{{--              <a href="javascript:;" data-id="{{ $exam->id }}" data-route="{{ route('admin.exam.delete') }}" class="btn btn-sm btn-danger del-exam"><i class="fas fa-trash-alt"></i></a>--}}
          </td>
        </tr>
      @empty
      @endforelse
    </tbody>
  </table>

<script>
    $('#datatable').DataTable();
</script>
