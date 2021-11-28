@include('layouts.frontend.includes.head_files')

<!--Navbar Start -->
@include('customer.partials.navbar')

<!--Main Body-->
<div class="container-fluid no-padding" style="background: #fff !important;">
    <div class="container">
        <div class="row">
            @include('customer.partials.sidebar')
            <div class="col-md-9 ci-right-body-wrpr">
                <h4>Exams</h4>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Certification</th>
                        <th>Exam</th>
                        <th>Start&nbsp;Exam</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($userExams as $exam)
                        <tr>
                            <td>CERT</td>
                            <td>{{ $exam->title }}</td>
                            <td><a href="{{ route('user.premium_exam', [getVendorByID($exam->vendor_id)->slug,$exam->slug]) }}" class="btn btn-primary">Start Exam</a></td>
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
