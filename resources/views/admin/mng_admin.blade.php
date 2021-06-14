@include('layouts.admin.admin_head')

<body>
    @if(!empty($status=='add'))
    @include('layouts.admin.admin_add_admin')
    @elseif(!empty($status=='mng'))
    @include('layouts.admin.admin_mngadmin')
    @elseif(!empty($status=='edit'))
    @include('layouts.admin.admin_edit_admin')
    @endif
    @include('layouts.admin.admin_foot')
</body>

</html>