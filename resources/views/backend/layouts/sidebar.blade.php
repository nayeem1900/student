


<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if(Auth::user()->role=='Admin')
        <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage User
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('users.view')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                </li>



            </ul>
        </li>
        @endif
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Manage Profile
                    <i class="fas fa-angle-left right"></i>

                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('profiles.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Your Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profiles.password.view')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Your password</p>
                    </a>
                </li>



            </ul>
        </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Slider
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('sliders.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Slider</p>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Setup
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('setups.student.class.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Student Class</p>
                        </a>
                    </li>

                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('setups.student.year.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Year</p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('setups.student.group.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Group</p>
                        </a>
                    </li>

                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('setups.student.shift.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Student Shift</p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('setups.fee.category.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Fee Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setups.fee.amount.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Fee Category Amount</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setups.exam.type.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Exam Type</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setups.subject.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Subject View</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setups.assign.subject.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Assign Subject</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('setups.designation.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Designation</p>
                        </a>
                    </li>
                </ul>

            <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Students
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('students.registration.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Student Registration</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('students.roll.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Roll Genarate</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('students.reg.fee.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registration Fee</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('students.monthly.fee.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Monthly Fee</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('students.exam.fee.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Exam Fee</p>
                        </a>
                    </li>



                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Employee
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('employees.reg.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Employee Registration</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('employees.salary.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Employee Salary</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('employees.leave.view')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Employee Leave</p>
                        </a>
                    </li>




                </ul>
            </li>


    </ul>
</nav>