@include('layouts.admin.admin_header')

@include('layouts.admin.admin_overlay')
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <!-- Simple Datatable start -->
    <div class="card-box mb-30">
        <div class="pd-20">

            <a style="float:right" class="btn btn-primary btn-sm" href="{{route('add_admin')}}" role="button"><span class="fa fa-plus"></span> Add Account</a>
            <h4 class="text-blue h4">Account List</h4>
        </div>
        <div class="pb-20">
            @if ($message = Session::get('delete'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table id="datatable-responsive" class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th>Account ID</th>
                        <th class="table-plus datatable-nosort">Name</th>
                        <th>Email</th>
                        <th>Time Created</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user_list as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td class="table-plus">{{$list->name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->created_at}}</td> 
                        <td>
                            <div class="table-actions">
                                <a href="{{route('edit_admin',$list->id)}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                <a onclick="return confirmSubmit()" href="{{route('delete_admin',$list->id)}}" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Simple Datatable End -->

</div>
<script>
    function confirmSubmit() {
        var agree = confirm("Are you sure you wish to continue?");
        if (agree)
            return true;
        else
            return false;
    }
</script>