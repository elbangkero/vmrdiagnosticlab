@include('layouts.admin.admin_head')
<body>

@if(!empty($status=='add'))
@include('layouts.admin.admin_add_patient')
@elseif(!empty($status=='edit'))
@include('layouts.admin.admin_edit_patient')
@endif
@include('layouts.admin.admin_foot')
</body>

</html>