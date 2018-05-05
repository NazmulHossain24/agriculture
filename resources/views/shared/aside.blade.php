<div class="sidebar sidebar-main sidebar-fixed">
    <div class="sidebar-content">
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->

                    <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="{{action('MainController@index')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>

                    <li class="navigation-divider"></li>

                    <li class="{{ (Request::is('expense/*', 'expense') ? 'active' : '') }}"><a href="#"><i class="icon-cabinet"></i> <span>Expanse</span></a>
                        <ul>
                            <li class="{{(Request::is('extra/list') ? 'active': '')}}"><a href="{{action('ExpenseTransactionController@index')}}">All Expanse</a></li>
                            <li class="{{ (Request::is('expense/list') ? 'active' : '') }}"><a href="{{action('ExpenseController@index')}}">Expanse Category</a></li>
                        </ul>
                    </li>

                    <li class="{{ (Request::is('income/*', 'income') ? 'active' : '') }}"><a href="#"><i class="icon-box-add"></i> <span>Income</span></a>
                        <ul>
                            <li class="{{ (Request::is('intra/list') ? 'active' : '') }}"><a href="{{action('IncomeTransactionController@index')}}">All Income</a></li>
                            <li class="{{ (Request::is('income/list') ? 'active' : '') }}"><a href="{{action('IncomeController@index')}}">Income Category</a></li>
                        </ul>
                    </li>
                    <li class="{{(Request::is('cashbook/list')? 'active' : '')}}"><a href="{{action('CashBookController@index')}}"><i class="icon-coin-dollar"></i> <span>Cash Book</span></a></li>
                    <li class="{{ (Request::is('projects/list') ? 'active' : '') }}"><a href="{{action('ProjectController@index')}}"><i class="icon-database-insert"></i> <span>Project</span></a>
                    </li>
                    <li class="{{ (Request::is('bankbook/*', 'bankbook') ? 'active' : '') }}"><a href="#"><i class="icon-database-insert"></i> <span>Bank Book</span></a>
                        <ul>
                            <li class="{{ (Request::is('banktran/list') ? 'active' : '') }}"><a href="{{action('BankTransactionController@index')}}">Bank Transaction</a></li>
                            <li class="{{ (Request::is('bankinfo/list') ? 'active' : '') }}"><a href="{{action('BankInfoController@index')}}">Bank Info</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-stats-growth"></i> <span>Reports</span></a></li>
                    <li><a href="#"><i class="icon-users"></i> <span>All Users</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>