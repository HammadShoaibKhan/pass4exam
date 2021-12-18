@include('layouts.frontend.includes.head_files')

<!--Navbar Start -->
@include('customer.partials.navbar')

<!--Main Body-->
<div class="container-fluid no-padding" style="background: #fff !important;">
    <div class="container">
        <div class="row">
            @include('customer.partials.sidebar')
            <div class="col-md-9 ci-right-body-wrpr">
                <h4>Exam PDF</h4>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Exam</th>
                        <th>View&nbsp;PDF</th>
                        <th>Download&nbsp;PDF</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($userExams as $exam)
                    <tr>
                        <td>{{ $exam->title }}</td>
                        <td><a class="btn btn-info" href="{{ asset('storage/pdf_files/' . getMediaFile('exams', 'pdf_file', $exam->id)) }}" target="_blank">View</a></td>
                        <td><a href="{{ route('exam.pdf.download', $exam->id) }}" class="btn btn-primary">Download</a></td>
                    </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!--Navbar End-->
@include('layouts.frontend.includes.footer_files')
