@extends('layouts.backend')
@section('content')
    <div class="container-fluid">
        <!--  Owl carousel -->
        <div class="owl-carousel counter-carousel owl-theme">
            <div class="item">
                <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/backend/images/svgs/icon-user-male.svg')}}" width="50" height="50" class="mb-3"
                                alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-primary mb-1">
                                Employees
                            </p>
                            <h5 class="fw-semibold text-primary mb-0">96</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/backend/images/svgs/icon-briefcase.svg')}}" width="50" height="50" class="mb-3"
                                alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-warning mb-1">Clients</p>
                            <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/backend/images/svgs/icon-mailbox.svg')}}" width="50" height="50" class="mb-3"
                                alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-info mb-1">Projects</p>
                            <h5 class="fw-semibold text-info mb-0">356</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-danger-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/backend/images/svgs/icon-favorites.svg')}}" width="50" height="50" class="mb-3"
                                alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-danger mb-1">Events</p>
                            <h5 class="fw-semibold text-danger mb-0">696</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-success-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/backend/images/svgs/icon-speech-bubble.svg')}}" width="50" height="50"
                                class="mb-3" alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-success mb-1">Payroll</p>
                            <h5 class="fw-semibold text-success mb-0">$96k</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('assets/backend/images/svgs/icon-connect.svg')}}" width="50" height="50" class="mb-3"
                                alt="modernize-img" />
                            <p class="fw-semibold fs-3 text-info mb-1">Reports</p>
                            <h5 class="fw-semibold text-info mb-0">59</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Revenue Updates</h5>
                                <p class="card-subtitle mb-0">Overview of Profit</p>
                            </div>
                            <select class="form-select w-auto">
                                <option value="1">March 2023</option>
                                <option value="2">April 2023</option>
                                <option value="3">May 2023</option>
                                <option value="4">June 2023</option>
                            </select>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div id="chart" class="mx-n6"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="hstack mb-4 pb-1">
                                    <div
                                        class="p-8 bg-primary-subtle rounded-1 me-3 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-grid-dots text-primary fs-6"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-0 fs-7 fw-semibold">$63,489.50</h4>
                                        <p class="fs-3 mb-0">Total Earnings</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-baseline mb-4">
                                        <span class="round-8 text-bg-primary rounded-circle me-6"></span>
                                        <div>
                                            <p class="fs-3 mb-1">Earnings this month</p>
                                            <h6 class="fs-5 fw-semibold mb-0">$48,820</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-baseline mb-4 pb-1">
                                        <span class="round-8 text-bg-secondary rounded-circle me-6"></span>
                                        <div>
                                            <p class="fs-3 mb-1">Expense this month</p>
                                            <h6 class="fs-5 fw-semibold mb-0">$26,498</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary w-100">
                                            View Full Report
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch flex-column">
                <!-- Yearly Breakup -->
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h5 class="card-title mb-9 fw-semibold">
                                    Yearly Breakup
                                </h5>
                                <h4 class="fw-semibold mb-3">$36,358</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <span
                                        class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-arrow-up-left text-success"></i>
                                    </span>
                                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                    <p class="fs-3 mb-0">last year</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                        <span class="round-8 text-bg-primary rounded-circle me-2 d-inline-block"></span>
                                        <span class="fs-2">2023</span>
                                    </div>
                                    <div>
                                        <span class="round-8 bg-primary-subtle rounded-circle me-2 d-inline-block"></span>
                                        <span class="fs-2">2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-center">
                                    <div id="breakup"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Monthly Earnings -->
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col-8">
                                <h5 class="card-title mb-9 fw-semibold">
                                    Monthly Earnings
                                </h5>
                                <h4 class="fw-semibold mb-3">$6,820</h4>
                                <div class="d-flex align-items-center pb-1">
                                    <span
                                        class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-arrow-down-right text-danger"></i>
                                    </span>
                                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                    <p class="fs-3 mb-0">last year</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex justify-content-end">
                                    <div
                                        class="text-white text-bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-currency-dollar fs-6"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="earning"></div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title fw-semibold mb-1">
                                Employee Salary
                            </h5>
                            <p class="card-subtitle mb-0">Every month</p>
                            <div id="salary" class="mb-7 pb-8 mx-n4"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="bg-primary-subtle rounded me-8 p-8 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-grid-dots text-primary fs-6"></i>
                                    </div>
                                    <div>
                                        <p class="fs-3 mb-0 fw-normal">Salary</p>
                                        <h6 class="fw-semibold text-dark fs-4 mb-0">
                                            $36,358
                                        </h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="text-bg-light rounded me-8 p-8 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-grid-dots text-muted fs-6"></i>
                                    </div>
                                    <div>
                                        <p class="fs-3 mb-0 fw-normal">Profit</p>
                                        <h6 class="fw-semibold text-dark fs-4 mb-0">
                                            $5,296
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch flex-column">
                <div class="row">
                    <!-- Customers -->
                    <div class="col-sm-6 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body pb-0 mb-xxl-4 pb-1">
                                <p class="mb-1 fs-3">Customers</p>
                                <h4 class="fw-semibold fs-7">36,358</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <span
                                        class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-arrow-down-right text-danger"></i>
                                    </span>
                                    <p class="text-dark fs-3 mb-0">+9%</p>
                                </div>
                            </div>
                            <div id="customers"></div>
                        </div>
                    </div>
                    <!-- Projects -->
                    <div class="col-sm-6 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <p class="mb-1 fs-3">Projects</p>
                                <h4 class="fw-semibold fs-7">78,298</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <span
                                        class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-arrow-up-left text-success"></i>
                                    </span>
                                    <p class="text-dark fs-3 mb-0">+9%</p>
                                </div>
                                <div id="projects"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comming Soon -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-7 pb-2">
                            <div class="me-3 pe-1">
                                <img src="{{ asset('assets/backend/images/profile/user-2.jpg')}}" class="shadow-warning rounded-2"
                                    alt="modernize-img" width="72" height="72" />
                            </div>
                            <div>
                                <h5 class="fw-semibold fs-5 mb-2">
                                    Super awesome, Vue coming soon!
                                </h5>
                                <p class="fs-3 mb-0">22 March, 2023</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="hstack mb-0">
                                <li class="ms-n8">
                                    <a href="javascript:void(0)" class="me-1">
                                        <img src="{{ asset('assets/backend/images/profile/user-2.jpg')}}"
                                            class="rounded-circle border border-2 border-white" width="44"
                                            height="44" alt="modernize-img" />
                                    </a>
                                </li>
                                <li class="ms-n8">
                                    <a href="javascript:void(0)" class="me-1">
                                        <img src="{{ asset('assets/backend/images/profile/user-3.jpg')}}"
                                            class="rounded-circle border border-2 border-white" width="44"
                                            height="44" alt="modernize-img" />
                                    </a>
                                </li>
                                <li class="ms-n8">
                                    <a href="javascript:void(0)" class="me-1">
                                        <img src="{{ asset('assets/backend/images/profile/user-4.jpg')}}"
                                            class="rounded-circle border border-2 border-white" width="44"
                                            height="44" alt="modernize-img" />
                                    </a>
                                </li>
                                <li class="ms-n8">
                                    <a href="javascript:void(0)" class="me-1">
                                        <img src="{{ asset('assets/backend/images/profile/user-5.jpg')}}"
                                            class="rounded-circle border border-2 border-white" width="44"
                                            height="44" alt="modernize-img" />
                                    </a>
                                </li>
                            </ul>
                            <a href="javascript:void(0)"
                                class="text-bg-light rounded py-1 px-8 d-flex align-items-center text-decoration-none">
                                <i class="ti ti-message-2 fs-6 text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card text-bg-primary border-0 w-100">
                    <div class="card-body pb-0">
                        <h5 class="fw-semibold mb-1 text-white card-title">
                            Best Selling Products
                        </h5>
                        <p class="fs-3 mb-3 text-white">Overview 2023</p>
                        <div class="text-center mt-3">
                            <img src="{{ asset('assets/backend/images/backgrounds/piggy.png')}}" class="img-fluid" alt="modernize-img" />
                        </div>
                    </div>
                    <div class="card mx-2 mb-2 mt-n2">
                        <div class="card-body">
                            <div class="mb-7 pb-1">
                                <div class="d-flex justify-content-between align-items-center mb-6">
                                    <div>
                                        <h6 class="mb-1 fs-4 fw-semibold">MaterialPro</h6>
                                        <p class="fs-3 mb-0">$23,568</p>
                                    </div>
                                    <div>
                                        <span class="badge bg-primary-subtle text-primary fw-semibold fs-3">55%</span>
                                    </div>
                                </div>
                                <div class="progress bg-primary-subtle h-4">
                                    <div class="progress-bar w-50" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-6">
                                    <div>
                                        <h6 class="mb-1 fs-4 fw-semibold">Flexy Admin</h6>
                                        <p class="fs-3 mb-0">$23,568</p>
                                    </div>
                                    <div>
                                        <span class="badge bg-secondary-subtle text-secondary fw-bold fs-3">20%</span>
                                    </div>
                                </div>
                                <div class="progress bg-secondary-subtle h-4">
                                    <div class="progress-bar text-bg-secondary w-25" role="progressbar"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">Weekly Stats</h5>
                        <p class="card-subtitle mb-0">Average sales</p>
                        <div id="stats" class="my-4"></div>
                        <div class="position-relative">
                            <div class="d-flex align-items-center justify-content-between mb-7">
                                <div class="d-flex">
                                    <div
                                        class="p-6 bg-primary-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-grid-dots text-primary fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-4 fw-semibold">Top Sales</h6>
                                        <p class="fs-3 mb-0">Johnathan Doe</p>
                                    </div>
                                </div>
                                <div class="bg-primary-subtle badge">
                                    <p class="fs-3 text-primary fw-semibold mb-0">+68</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-7">
                                <div class="d-flex">
                                    <div
                                        class="p-6 bg-success-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-grid-dots text-success fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-4 fw-semibold">Best Seller</h6>
                                        <p class="fs-3 mb-0">MaterialPro Admin</p>
                                    </div>
                                </div>
                                <div class="bg-success-subtle badge">
                                    <p class="fs-3 text-success fw-semibold mb-0">+68</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div
                                        class="p-6 bg-danger-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-grid-dots text-danger fs-6"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fs-4 fw-semibold">
                                            Most Commented
                                        </h6>
                                        <p class="fs-3 mb-0">Ample Admin</p>
                                    </div>
                                </div>
                                <div class="bg-danger-subtle badge">
                                    <p class="fs-3 text-danger fw-semibold mb-0">+68</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                            <div class="mb-3 mb-sm-0">
                                <h4 class="card-title fw-semibold">Top Performers</h4>
                                <p class="card-subtitle">Best Employees</p>
                            </div>
                            <div>
                                <select class="form-select">
                                    <option value="1">March 2024</option>
                                    <option value="2">April 2024</option>
                                    <option value="3">May 2024</option>
                                    <option value="4">June 2024</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-nowrap mb-0">
                                <thead>
                                    <tr class="text-muted fw-semibold">
                                        <th scope="col" class="ps-0">Assigned</th>
                                        <th scope="col">Project</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Budget</th>
                                    </tr>
                                </thead>
                                <tbody class="border-top">
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <img src="{{ asset('assets/backend/images/profile/user-3.jpg')}}" class="rounded-circle"
                                                        width="40" height="40" alt="modernize-img" />
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                                    <p class="fs-2 mb-0 text-muted">
                                                        Web Designer
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 fs-3">Elite Admin</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge fw-semibold py-1 w-85 bg-primary-subtle text-primary">Low</span>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0">$3.9K</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <img src="{{ asset('assets/backend/images/profile/user-5.jpg')}}" class="rounded-circle"
                                                        width="40" height="40" alt="modernize-img" />
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">John Deo</h6>
                                                    <p class="fs-2 mb-0 text-muted">
                                                        Web Developer
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 fs-3">Flexy Admin</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge fw-semibold py-1 w-85 bg-warning-subtle text-warning">Medium</span>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0">$24.5K</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <img src="{{ asset('assets/backend/images/profile/user-6.jpg')}}" class="rounded-circle"
                                                        width="40" height="40" alt="modernize-img" />
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                                    <p class="fs-2 mb-0 text-muted">
                                                        Web Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 fs-3">Material Pro</p>
                                        </td>
                                        <td>
                                            <span class="badge fw-semibold py-1 w-85 bg-info-subtle text-info">High</span>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0">$12.8K</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <img src="{{ asset('assets/backend/images/profile/user-7.jpg')}}" class="rounded-circle"
                                                        width="40" height="40" alt="modernize-img" />
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">Yuvraj Sheth</h6>
                                                    <p class="fs-2 mb-0 text-muted">
                                                        Project Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 fs-3">Xtreme Admin</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge fw-semibold py-1 w-85 bg-success-subtle text-success">Low</span>
                                        </td>
                                        <td>
                                            <p class="fs-3 text-dark mb-0">$4.8K</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 ps-0">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 pe-1">
                                                    <img src="{{ asset('assets/backend/images/profile/user-8.jpg')}}" class="rounded-circle"
                                                        width="40" height="40" alt="modernize-img" />
                                                </div>
                                                <div>
                                                    <h6 class="fw-semibold mb-1">Micheal Doe</h6>
                                                    <p class="fs-2 mb-0 text-muted">
                                                        Content Writer
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <p class="mb-0 fs-3">Helping Hands WP Theme</p>
                                        </td>
                                        <td class="border-0">
                                            <span
                                                class="badge fw-semibold py-1 w-85 bg-danger-subtle text-danger">High</span>
                                        </td>
                                        <td class="border-0">
                                            <p class="fs-3 text-dark mb-0">$9.3K</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
