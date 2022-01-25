<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">
    <div class="app-sidebar__user"><img width="40 px" class="app-sidebar__user-avatar" src="{{ asset('images/user/'.Auth::user()->image) }}" alt="User Image">

        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->fullname }}</p>
            <p class="app-sidebar__user-designation">User</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>


        <li class="treeview "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-indent"></i><span class="app-menu__label">Orders</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item " href="{{route('invoice.create')}}"><i class="icon fa fa-plus"></i>Create Order </a></li>
                <li><a class="treeview-item" href="{{route('invoice.index')}}"><i class="icon fa fa-edit"></i>Manage Orders</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Customers</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('customer.create')}}"><i class="icon fa fa-plus"></i> Add Customer</a></li>
                <li><a class="treeview-item" href="{{route('customer.index')}}"><i class="icon fa fa-edit"></i> Manage Customers Test</a></li>
                <li><a class="treeview-item" href="{{route('SLCustomerAccount.index')}}"><i class="icon fa fa-edit"></i> Manage Customers Real</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cubes"></i><span class="app-menu__label">Stock Item</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('StockItem.index')}}"><i class="icon fa fa-edit"></i> Manage Stock Item</a></li>
            </ul>
        </li>



    </ul>
</aside>