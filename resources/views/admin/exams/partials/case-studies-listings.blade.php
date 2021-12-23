<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @forelse($exam->caseStudies as $key => $caseStudy)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td><a href="{{ route('admin.case-study.questions', $caseStudy->id) }}" target="_blank">{{ $caseStudy->name }}</a></td>
            <td><a class="btn btn-danger btn-sm del-case-study" href="javascript:;" data-exam-id="{{ $exam->id }}" data-case-study-id="{{ $caseStudy->id }}" data-route="{{ route('admin.case-study.delete') }}"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>

<script>
    $('#datatable').DataTable();
</script>
