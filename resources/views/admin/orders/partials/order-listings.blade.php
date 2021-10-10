<table id="datatable" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th><input type="checkbox" class="select-all-checkbox"></th>
        <th>Email</th>
        <th>Total</th>
        <th>Discount</th>
        <th>Paid</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @forelse($orders as $key => $order)
        <tr>
            <td><input type="checkbox" class="checkboxes" data-id="{{ $order->id }}"></td>
            <td>{{ $order->user_email ?? '' }}</td>
            <td>{{ $order->total_bill ?? 0 }}</td>
            <td>{{ $order->total_discount ?? 0 }}</td>
            <td>
                @if ($order->paid == 1)
                    <span class="badge badge-success">YES</span>
                @else
                    <span class="badge badge-danger">NO</span>
                @endif
            </td>
            <td>
                @if ($order->status == 1)
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-danger">Disabled</span>
                @endif
            </td>
            <td>
                <a href="{{ route('admin.order.view', $order->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
            </td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>
<script>
    $('#datatable').DataTable();
</script>
