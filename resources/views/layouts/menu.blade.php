<li class="{{ Request::is('qrcodes*') ? 'active' : '' }}">
    <a href="{{ route('qrcodes.index') }}"><i class="fa fa-edit"></i><span>Qrcodes</span></a>
</li>



<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

