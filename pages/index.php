<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Panal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- TO-CHANGE -->
    <link rel="stylesheet" href="../css/login-modal.css">
    <link rel="stylesheet" href="../css/login-form.css">
    <link rel="stylesheet" href="../css/theme.css">

    <!-- TO-CHANGE -->
</head>

<body>


    <div class="container-fluid p-0 bg-light">
        <div class="row fullHighetContainer w-100 p-0 m-0">

            <!-- side navbar -->
            <!-- <div class="col-1 myBtn p-2 h-100"></div> -->
            <!-- side navbar -->

            <!-- main container -->
            <div class="col-12 p-0">

                <!-- top control-panal -->
                <div class="shadow w-100 py-4 bg-white">
                    <div class="d-flex align-items-center w-100 topControlPanalItems">

                        <!-- burgerMenu button -->
                        <!-- <div id="btnToggleSideNav" class="flex-fill topControlPanalItems d-flex justify-content-start">
                            <button class="btn btn-sm myBtn px-3 ms-5" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF"
                                    class="bi bi-chevron-expand burgerMenu visually-hidden" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF"
                                    class="bi bi-chevron-contract burgerMenu " viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M3.646 13.854a.5.5 0 0 0 .708 0L8 10.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708zm0-11.708a.5.5 0 0 1 .708 0L8 5.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div> -->
                        <!-- burgerMenu button -->

                        <div class="d-flex align-items-center justify-content-start p-0">
                            <a id="btnCredits" class="btn myBtnAccent topControlPanalItems text-uppercase" href="credits.html">credits</a>
                        </div>

                        <!-- search bar -->
                        <div class="flex-grow-1 d-flex align-items-center justify-content-center">

                            <div id="inputSearchGroup" class="input-group topControlPanalItems">
                                <input id="inputSearch" type="text" class="form-control bg-light" placeholder="search for a task Title/Decription/Tag" aria-label="search for a task Title/Decription/Tag">
                                <span class="input-group-text btn btn-sm myBtn">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#fff" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>

                                </span>
                            </div>
                        </div>
                        <!-- search bar -->

                        <!-- notification area -->
                        <div class="d-flex align-items-center  justify-content-end p-0">

                            <!-- Menstions -->
                            <button id="btnMentions" class="rounded-circle btn btn-sm myBtn position-relative text-white fs-5 me-4" type="submit">
                                @
                                <span id="txtMenstions" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    88+
                                </span>
                            </button>
                            <!-- Menstions -->

                            <!-- AssignedToMe -->
                            <button id="btnAssignedToMe" class="rounded-circle btn btn-sm myBtn position-relative text-white fs-5" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z" />
                                </svg>
                                <span id="txtAssignedToMe" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    99+
                                </span>
                            </button>
                            <!-- AssignedToMe -->

                            <div id="verticalLine" class="verticalLine mx-5"> </div>


                            <div id="btnProfileGroup" class="dropdown topControlPanalItems">
                                <button class="circular_image btn myBtn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#FFF" class="bi bi-person-fill" viewBox="8 0 7 24">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">

                                    <li><a id="btnLogin" class="dropdown-item" href="#"> Login/Register </a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Metions</a></li>
                                    <li><a class="dropdown-item" href="#">AssignedToMe</a></li>
                                </ul>
                            </div>




                        </div>
                        <!-- notification area -->

                    </div>
                </div>
                <!-- top control-panal -->


                <!-- dashboard -->
                <div class="d-flex flex-column h-100 w-100">

                    <!-- summary-board -->
                    <div class="align-self-start p-2 w-100">

                        <div class="row p-5">


                            <!-- All Work Spaces Card -->
                            <div class="col-xxl-3 col-lg-6 col-md-12 mb-3">
                                <div class="card mySummaryCard myCardSecondry shadow p-3">
                                    <div class="d-flex flex-row">
                                        <p class="fs-4">All Work Spaces : <strong id="txtNumberOfSpaces">4</strong> </p>
                                        <div class="d-flex flex-fill justify-content-end">
                                            <p class="fs-4 text-black-50">Total Tasks: <strong id="txtAllSpacesTotalTasks" class="text-black">73</strong> </p>
                                        </div>
                                    </div>

                                    <div class="labelProgressbarContainer align-items-center mb-2">

                                        <div class="labelProgressbarChild1 txtSecondary fs-5 me-2">TODO</div>

                                        <div id="progressbarAllSpacesTodoContainer" class="progress labelProgressbarChild2" role="progressbar" aria-label="Animated striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 28px;">

                                            <div id="progressbarAllSpacesTodo" class="progress-bar bgSecondary progress-bar-striped progress-bar-animated fs-5" style="width: 25%"> 25%</div>
                                        </div>

                                    </div>

                                    <div class="labelProgressbarContainer align-items-center mb-2">

                                        <div class="labelProgressbarChild1 txtAccent fs-5 me-2">IN-PROGRESS</div>

                                        <div class="progress labelProgressbarChild2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 28px">

                                            <div id="progressbarAllSpacesInProgress" class="progress-bar bgAccent progress-bar-striped progress-bar-animated fs-5" style="width: 50%">50%</div>
                                        </div>

                                    </div>

                                    <div class="labelProgressbarContainer  align-items-center mb-2">

                                        <div class="labelProgressbarChild1 txtPrimary fs-5 me-2">DONE</div>

                                        <div class="progress labelProgressbarChild2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 28px">

                                            <div id="progressbarAllSpacesDone" class="progress-bar bg-primary progress-bar-striped progress-bar-animated fs-5" style="width: 75%">75%</div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- All Work Spaces Card -->

                            <!-- Current Work Space Card -->
                            <div class="col-xxl-3 col-lg-6 col-md-12 mb-3">
                                <div class="card mySummaryCard myCardPrimary shadow p-3">

                                    <div class="d-flex flex-row">
                                        <p class="fs-4">Current Work Space</p>
                                        <div class="d-flex flex-fill justify-content-end">
                                            <p class="fs-4 text-black-50">Total Tasks: <strong id="txtCurrentSpaceTotalTasks" class="text-black">38</strong> </p>
                                        </div>
                                    </div>

                                    <div class="labelProgressbarContainer  align-items-center mb-2">

                                        <div class="labelProgressbarChild1 txtSecondary fs-5 me-2">TODO</div>

                                        <div class=" progress labelProgressbarChild2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 28px">

                                            <div id="progressbarCurrentSpaceTodo" class="progress-bar bgSecondary progress-bar-striped progress-bar-animated fs-5" style="width: 25%"> 25%</div>
                                        </div>

                                    </div>

                                    <div class="labelProgressbarContainer  align-items-center mb-2">

                                        <div class="labelProgressbarChild1 txtAccent fs-5 me-2">IN-PROGRESS</div>

                                        <div class=" progress labelProgressbarChild2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 28px">

                                            <div id="progressbarCurrentSpaceInProgress" class="progress-bar bgAccent progress-bar-striped progress-bar-animated fs-5" style="width: 50%">50%</div>
                                        </div>

                                    </div>

                                    <div class="labelProgressbarContainer  align-items-center mb-2">

                                        <div class="labelProgressbarChild1 txtPrimary fs-5 me-2">DONE</div>

                                        <div class=" progress labelProgressbarChild2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 28px">

                                            <div id="progressbarCurrentSpaceDone" class="progress-bar bg-primary progress-bar-striped progress-bar-animated fs-5" style="width: 75%">75%</div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <!-- Current Work Space Card -->

                            <!-- Due Today -->
                            <div class="col-xxl-3 col-lg-6 col-md-12 mb-3">
                                <div class="card mySummaryCard myCardAccent shadow p-3">

                                    <div class="d-flex flex-row">
                                        <p class="fs-4">Due Today</p>
                                        <div class="d-flex flex-fill justify-content-end">
                                            <p class="fs-4 text-black-50">Total Tasks: <strong id="txtTitleAllSpaceDueToday" class="text-black">11</strong> </p>
                                        </div>
                                    </div>

                                    <div class>
                                        <p class="p-1"> Total Number of Due today tasks is<strong id="txtAllSpaceDueToday" class="ms-1">
                                                11</strong>,
                                            <strong id="txtCurrentSpaceDueToday" class="mx-1"> 9 </strong> of them in
                                            current space.
                                        </p>

                                        <div class="d-flex">
                                            <button id="btnDisplayAllSpacesDueToday" class="btn myBtnAccent bgAccent flex-fill text-uppercase mx-1">Display All Due
                                                Today</button>
                                            <button id="btnDisplayCurrentSpaceDueToday" class="btn myBtnAccent bgAccent flex-fill text-uppercase mx-1">Display Space Due
                                                Today</button>
                                        </div>



                                    </div>


                                </div>
                            </div>
                            <!-- Due Today -->

                            <!-- High Priority Tasks -->
                            <div class="col-xxl-3 col-lg-6 col-md-12 mb-3">
                                <div class="card mySummaryCard myCardPriorityHigh shadow p-3">

                                    <div class="d-flex flex-row">
                                        <p class="fs-4">High Priority</p>
                                        <div class="d-flex flex-fill justify-content-end">
                                            <p class="fs-4 text-black-50">Total Tasks: <strong id="txtTitleAllSpacesHighPriority" class="text-black">6</strong>
                                            </p>
                                        </div>
                                    </div>

                                    <div class>
                                        <p class="p-1"> Total Number of High Priority tasks is<strong id="txtAllSpacesHighPriority" class="ms-1">
                                                6</strong>,
                                            <strong id="txtAllSpacesHighPriority" class="mx-1"> 2 </strong> of them in
                                            current space.
                                        </p>

                                        <div class="d-flex">
                                            <button id="btnDisplyAllSpacesHighPriority" class="btn myBtnPriorityHigh bgAccent flex-fill text-uppercase mx-1">Display All
                                                High Priority</button>
                                            <button id="btnDisplyCurrentSpacesHighPriority" class="btn myBtnPriorityHigh bgAccent flex-fill text-uppercase mx-1">Display Space
                                                High Priority</button>
                                        </div>


                                    </div>
                                </div>

                                <!-- High Priority Tasks -->

                            </div>



                        </div>
                        <!-- summary-board -->


                        <!-- tasks-board -->



                        <!-- tasks-board -->



                    </div>
                    <!-- summary-board -->


                    <!-- task-board -->
                    <div class="row justify-content-center px-5">

                        <div class="col-12 px-4">


                            <div class="card shadow p-2">

                                <!-- top-section -->
                                <div class="d-flex topSectionContainer align-items-top w-100 py-2 px-3 border border-top-0 border-start-0 border-end-0 overflowXAuto">

                                    <div class="d-flex flex-fill justify-content-start">

                                        <div id="btnSelectedSpaceDropdown" class="dropdown">
                                            <button class="btn myBtnPrimary dropdown-toggle fs-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Current Space
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Current Space</a></li>

                                            </ul>
                                        </div>


                                        <button id="btnAddTask" class="btn myBtn mx-3 text-uppercase text-white">
                                            Add Task
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                            </svg>
                                        </button>


                                    </div>

                                    <div class="d-flex flex-fill justify-content-center">

                                        <button id="btnFilterTodo" class="btn myBtnStatusTodo text-uppercase mx-1">TODO</button>
                                        <button id="btnFilterInProgress" class="btn myBtnStatusInProgress text-uppercase mx-1">IN
                                            PROGRESS</button>
                                        <button id="btnFilterDone" class="btn myBtnStatusDone mx-1">DONE</button>

                                    </div>

                                    <div class="d-flex flex-fill justify-content-end">
                                        <button id="btnFilterHighPriorityTask" class="btn myBtnSmall myBtnPriorityHigh text-uppercase mx-1">H</button>
                                        <button id="btnFilterMeduimPriorityTask" class="btn myBtnSmall myBtnPriorityMedium text-uppercase mx-1">M</button>
                                        <button id="btnFilterLowPriorityTask" class="btn myBtnSmall myBtnPriorityLow text-uppercase mx-1">L</button>

                                        <div class="dropdown mx-1">
                                            <button id="btnSortDropdown" class="btn myBtn myBtnFilter dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                    <path d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.498.498 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707V12.5zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />

                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Sort By Priority (High - Low) </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Sort By Due Date (Ascending) </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Sort By Due Date (Descending) </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Sort By ID (Ascending) </a></li>
                                                <li><a class="dropdown-item" href="#">Sort By ID (Descending) </a></li>
                                                <li><a class="dropdown-item" href="#">Sort By Priority (Low - High) </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>


                                </div>
                                <!-- top-section -->

                                <!-- tasks-section -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="table-light">
                                                <th scope="col" class="display-6 fs-4 fw-bold">#id</th>
                                                <th scope="col" class="display-6 fs-4 fw-bold">Task Title</th>
                                                <th scope="col" class="display-6 fs-4 fw-bold">Priority</th>
                                                <th scope="col" class="display-6 fs-4 fw-bold">Status</th>
                                                <th scope="col" class="taskDueDate display-6 fs-4 fw-bold">Due Date</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider myTasksTable">

                                            <tr id="taskRow_1" class="pointer">
                                                <td id="taskId" scope="row" class="display-6 fs-4">1</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityLow mx-1">LOW
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusTodo mx-1">TODO</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr class="pointer">
                                                <td id="taskId" scope="row" class="display-6 fs-4">2</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityMedium mx-1">MEDIUM
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusInProgress mx-1">IN
                                                        PROGRESS</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr class="pointer">
                                                <td id="taskId" scope="row" class="display-6 fs-4">3</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityHigh mx-1">HIGH
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusDone mx-1">DONE</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>





                                            <tr>
                                                <td id="taskId" scope="row" class="display-6 fs-4">4</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityLow mx-1">LOW
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusTodo mx-1">TODO</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr>
                                                <td id="taskId" scope="row" class="display-6 fs-4">5</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityMedium mx-1">MEDIUM
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusInProgress mx-1">IN
                                                        PROGRESS</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr>
                                                <td id="taskId" scope="row" class="display-6 fs-4">6</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityHigh mx-1">HIGH
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusDone mx-1">DONE</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr>
                                                <td id="taskId" scope="row" class="display-6 fs-4">7</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityLow mx-1">LOW
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusTodo mx-1">TODO</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr>
                                                <td id="taskId" scope="row" class="display-6 fs-4">8</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityMedium mx-1">MEDIUM
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusInProgress mx-1">IN
                                                        PROGRESS</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr>
                                                <td id="taskId" scope="row" class="display-6 fs-4">9</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityHigh mx-1">HIGH
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusDone mx-1">DONE</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                            <tr>
                                                <td id="taskId" scope="row" class="display-6 fs-4">10</td>
                                                <td id="taskTitle" class="taskTitle  display-6 fs-4">Some TaskSome
                                                    TaskSome TaskSome</td>

                                                <td class="display-6 fs-4">
                                                    <div id="btnTaskPriority" class="btn myBtnPriority myBtnPriorityHigh mx-1">HIGH
                                                    </div>
                                                <td class="display-6 fs-4">
                                                    <div id="taskStatus" class="btn myBtnStatusDone mx-1">DONE</div>
                                                </td>

                                                </td>
                                                <td id="taskDate" class="display-6 fs-4">12-SEP-2025</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- tasks-section -->

                                <!-- bottom-section -->
                                <div class="d-flex align-items-center w-100 py-2 px-0">

                                    <div class="d-flex flex-grow-1 justify-content-end">

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">

                                                        <span class="btnPaginationText_sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                                <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                            </svg></i></span>
                                                        <span class="btnPaginationText_lg">Previous</span>

                                                    </a></li>
                                                <li class="page-item"><a class="page-link" href="#">1 / 3</a></li>

                                                <li class="page-item"><a class="page-link" href="#">

                                                        <span class="btnPaginationText_lg">Next</span>

                                                        <span class="btnPaginationText_sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                                                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                                                            </svg></span>
                                                    </a></li>
                                            </ul>
                                        </nav>

                                    </div>


                                </div>
                                <!-- bottom-section -->



                            </div>

                        </div>
                        <!-- task-board -->


                    </div>
                    <!-- dashboard -->

                </div>

            </div>
            <!-- main container -->

        </div>
    </div>

    <!-- modal-login -->
    <div id="loginModalOverlay" class="modal-overlay">
        <div id="loginModal" class="modal">
            <!-- close modal -->
            <a id="btnLoginModalClose" class="close-modal">
                <svg viewBox="0 0 20 20">
                    <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                    </path>
                </svg>
            </a>
            <!-- close modal -->

            <!-- content -->
            <div class="myLoginForm">



                <!-- login form -->
                <div class="myLoginFormChild px-5">

                    <h1 class="display-4 mb-3">Login</h1>

                    <div class="form-floating mb-3">
                        <input id="inputLoginEmail" type="email" class="form-control" placeholder="name@example.com">
                        <label for="inputLoginEmail">Email address</label>
                        <div id="inputLoginEmailValidation" class="invalid-feedback">
                            Please write your Email.
                        </div>
                    </div>
                    <div class="form-floating">
                        <input id="inputLoginPassword" type="password" class="form-control" placeholder="Password">
                        <label for="inputLoginPassword">Password</label>
                        <div id="inputLoginPasswordValidation" class="invalid-feedback">
                            Please write your Password.
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-5">
                        <a href="#"> Forget Password </a>
                    </div>


                    <div class="d-flex justify-content-center px-2">
                        <button id="btnFormLogin" class="btn myBtnPrimary text-uppercase flex-grow-1"> Login </button>
                    </div>
                </div>
                <!-- login form -->

                <!-- register form -->
                <div class="myLoginFormChild px-5">

                    <h1 class="display-4 mb-3">Register</h1>

                    <div class="form-floating mb-3">
                        <input id="inputRegisterFullName" type="text" class="form-control" placeholder="user_name">
                        <label for="inputRegisterFullName">FullName</label>
                        <div id="inputRegisterFullNameValidation" class="invalid-feedback">
                            Please write your FullName.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input id="inputRegisterEmail" type="email" class="form-control" placeholder="name@example.com">
                        <label for="inputRegisterEmail">Email address</label>
                        <div id="inputRegisterEmailValidation" class="invalid-feedback">
                            Please write your Email.
                        </div>
                    </div>
                    <div class="form-floating mb-5">
                        <input id="inputRegisterPassword" type="password" class="form-control" placeholder="Password">
                        <label for="inputRegisterPassword">Password</label>
                        <div id="inputRegisterPasswordValidation" class="invalid-feedback">
                            Please write your Password.
                        </div>
                    </div>


                    <div class="d-flex justify-content-center px-2">
                        <button id="btnFormRegister" class="btn myBtnPrimary text-uppercase flex-grow-1"> Register
                        </button>
                    </div>


                </div>
                <!-- register form -->

                <div id="formOverlay" class="my-overlay">
                    <buttn id="btnFormOverlayText" class="btn btn-lg btn-outline-light text-uppercase">
                        Register
                    </buttn>
                </div>

            </div>
            <!-- content -->

        </div><!-- modal -->
    </div>
    <!-- modal-login -->


    <!-- modal-add-task -->
    <div id="addTaskModalOverlay" class="modal-overlay">
        <div id="addTaskModal" class="modal">
            <!-- close modal -->
            <a id="btnAddTaskModalClose" class="close-modal">
                <svg viewBox="0 0 20 20">
                    <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                    </path>
                </svg>
            </a>
            <!-- close modal -->

            <!-- content -->
            <div class="myLoginForm">

                <!-- add task form -->
                <div class="myLoginFormChild px-5">

                    <h1 class="display-4 mb-3">Add a New Task</h1>

                    <div class="form-floating mb-3">
                        <input id="inputAddTaskTitle" type="text" class="form-control" placeholder="name@example.com">
                        <label for="inputAddTaskTitle">Task Title</label>
                        <div id="inputAddTaskTitleValidation" class="invalid-feedback">
                            Write Task Title.
                        </div>
                    </div>

                    <div class="row justify-content-around my-3">
                        <div class="col-sm-12 col-lg-4 mb-2">

                            <select id="selectAddTaskPriority" class="form-select form-select-lg myAddTaskSelect mb-3" aria-label="Large select example">
                                <option selected value="-1">Select Priority</option>
                                <option value="low">LOW</option>
                                <option value="medium">MEDIUM</option>
                                <option value="high">HIGH</option>
                            </select>

                        </div>

                        <div class="col-sm-12 col-lg-4 mb-2">

                            <select id="selectAddTaskStatus" class="form-select form-select-lg myAddTaskSelect mb-3" aria-label="Large select example">
                                <option selected value="-1">Select Status</option>
                                <option value="todo">TODO</option>
                                <option value="in_progrss">IN PROGRESS</option>
                                <option value="done">DONE</option>
                            </select>

                        </div>

                        <div class="col-sm-12 col-lg-4 mb-2">

                            <div class="form-floating">
                                <input id="inputAddTaskDueDate" type="date" class="form-control" placeholder="Task Due Date" min="getCurrentDate()">
                                <label for="inputAddTaskDueDate">Task Due Date</label>
                                <div id="inputAddTaskDueDateValidation" class="invalid-feedback">
                                    Please Select Due Date.
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="form-floating mb-3">
                        <textarea id="inputAddTaskDescription" class="form-control myAddTaskDesc" placeholder="Write Task Description."></textarea>
                        <label for="inputAddTaskDescription">Description</label>
                        <div id="inputAddTaskDescriptionValidation" class="invalid-feedback">
                            Write Task Description.
                        </div>
                    </div>



                    <div class="d-flex justify-content-center mt-2 px-2">
                        <button id="btnFormLogin" class="btn btn-lg myBtnPrimary text-uppercase flex-grow-1"> Add Task </button>
                    </div>
                </div>
                <!-- add task form -->


            </div>
            <!-- content -->

        </div>
        <!-- modal -->
    </div>
    <!-- modal-add-task -->


    <!-- modal-edit-task -->
    <div id="editTaskModalOverlay" class="modal-overlay">
        <div id="editTaskModal" class="modal">
            <!-- close modal -->
            <a id="btnEditTaskModalClose" class="close-modal">
                <svg viewBox="0 0 20 20">
                    <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                    </path>
                </svg>
            </a>
            <!-- close modal -->

            <!-- content -->
            <div class="myLoginForm">

                <!-- edit task form -->
                <div class="myLoginFormChild px-5">

                    <h1 class="display-4 mb-3">Edit Task</h1>

                    <div class="form-floating mb-3">
                        <input id="inputEditTaskTitle" type="text" class="form-control" placeholder="name@example.com">
                        <label for="inputEditTaskTitle">Task Title</label>
                        <div id="inputEditTaskTitleValidation" class="invalid-feedback">
                            Write Task Title.
                        </div>
                    </div>

                    <div class="row justify-content-around my-3">
                        <div class="col-sm-12 col-lg-4 mb-2">

                            <select id="selectEditTaskPriority" class="form-select form-select-lg myAddTaskSelect mb-3" aria-label="Large select example">
                                <option selected value="-1">Select Priority</option>
                                <option value="low">LOW</option>
                                <option value="medium">MEDIUM</option>
                                <option value="high">HIGH</option>
                            </select>

                        </div>

                        <div class="col-sm-12 col-lg-4 mb-2">

                            <select id="selectEditTaskStatus" class="form-select form-select-lg myAddTaskSelect mb-3" aria-label="Large select example">
                                <option selected value="-1">Select Status</option>
                                <option value="todo">TODO</option>
                                <option value="in_progrss">IN PROGRESS</option>
                                <option value="done">DONE</option>
                            </select>

                        </div>

                        <div class="col-sm-12 col-lg-4 mb-2">

                            <div class="form-floating">
                                <input id="inputEditTaskDueDate" type="date" class="form-control" placeholder="Task Due Date" min="getCurrentDate()">
                                <label for="inputEditTaskDueDate">Task Due Date</label>
                                <div id="inputEditTaskDueDateValidation" class="invalid-feedback">
                                    Please Select Due Date.
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="form-floating mb-3">
                        <textarea id="inputEditTaskDescription" class="form-control myAddTaskDesc" placeholder="Write Task Description."></textarea>
                        <label for="inputEditTaskDescription">Description</label>
                        <div id="inputEditTaskDescriptionValidation" class="invalid-feedback">
                            Write Task Description.
                        </div>
                    </div>



                    <div class="d-flex justify-content-center mt-2 px-2">
                        <button id="btnFormLogin" class="btn btn-lg myBtnPrimary text-uppercase flex-grow-1"> Edit Task </button>
                    </div>
                </div>
                <!-- edit task form -->


            </div>
            <!-- content -->

        </div>
        <!-- modal -->
    </div>
    <!-- modal-edit-task -->


    <script type="module" src="../js/controllers/login-form.js"></script>
    <script type="module" src="../js/controllers/login-modal.js"></script>
    <script type="module" src="../js/controllers/add-task-modal.js"></script>
    <script type="module" src="../js/controllers/edit-task-modal.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>