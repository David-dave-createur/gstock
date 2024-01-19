<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Session</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">21,459</h3>
                                    <p class="text-success mb-0">(+29%)</p>
                                </div>
                                <p class="mb-0">Total Users</p>
                            </div>
                            <span class="badge bg-label-primary rounded p-2">
                                <i class="ti ti-user ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Paid Users</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">4,567</h3>
                                    <p class="text-success mb-0">(+18%)</p>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <span class="badge bg-label-danger rounded p-2">
                                <i class="ti ti-user-plus ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Active Users</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">19,860</h3>
                                    <p class="text-danger mb-0">(-14%)</p>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <span class="badge bg-label-success rounded p-2">
                                <i class="ti ti-user-check ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="content-left">
                                <span>Pending Users</span>
                                <div class="d-flex align-items-center my-2">
                                    <h3 class="mb-0 me-2">237</h3>
                                    <p class="text-success mb-0">(+42%)</p>
                                </div>
                                <p class="mb-0">Last week analytics</p>
                            </div>
                            <span class="badge bg-label-warning rounded p-2">
                                <i class="ti ti-user-exclamation ti-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                    <div class="col-md-4 user_role"></div>
                    <div class="col-md-4 user_plan"></div>
                    <div class="col-md-4 user_status"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row me-2">
                        <div class="col-md-2">
                            <div class="me-3">
                                <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                            name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div
                                class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input
                                            type="search" class="form-control" placeholder="Search.."
                                            aria-controls="DataTables_Table_0"></label></div>
                                <div class="dt-buttons btn-group flex-wrap">
                                    <div class="btn-group"><button
                                            class="btn btn-secondary buttons-collection dropdown-toggle btn-label-secondary mx-3"
                                            tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                            aria-haspopup="dialog" aria-expanded="false"><span><i
                                                    class="ti ti-screen-share me-1 ti-xs"></i>Export</span><span
                                                class="dt-down-arrow"></span></button></div> <button
                                        class="btn btn-secondary add-new btn-primary" tabindex="0"
                                        aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasAddUser"><span><i
                                                class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                                                class="d-none d-sm-inline-block">Add New User</span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-users table dataTable no-footer dtr-column" id="DataTables_Table_0"
                        aria-describedby="DataTables_Table_0_info">
                        <thead class="border-top">
                            <tr>
                                
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 5%;" 
                                    aria-label="Img: activate to sort column ascending">img</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                     rowspan="1" colspan="1" style="width: 20%;"
                                    aria-label="Nom & prenom: activate to sort column ascending">Nom & prenom</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 20%;"
                                    aria-label="Role: activate to sort column ascending">Role</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 20%;"
                                    aria-label="Billing: activate to sort column ascending">Equipe</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 20%;"
                                    aria-label="Status: activate to sort column ascending">Status</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 15%;"
                                    aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up"
                                        aria-label="Christina Parker" data-bs-original-title="Christina Parker">
                                        <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-medium">Angular Project</span>
                                </td>
                                <td>Albert Cook</td>
                                <td>
                                    <span class="fw-medium">Informatique</span>
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td style="text-align: center ; justify-content:center;" >
                                    <div class="actionbutton">
                                        <button class="dropdown-item"><i class="ti ti-pencil me-1"></i></button>
                                        <button class="dropdown-item " ><i class="ti ti-trash me-1" style="color: darkred"></i> </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mx-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                               Affichage de 0 à 0 de 0 entrées</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                            aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="0"
                                            class="page-link">Précédent</a></li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                            aria-controls="DataTables_Table_0" aria-disabled="true" aria-role="link"
                                            data-dt-idx="next" tabindex="0" class="page-link">Suivant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Offcanvas to add new user -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                    <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
                        onsubmit="return false" novalidate="novalidate">
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="add-user-fullname">Full Name</label>
                            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe"
                                name="userFullname" aria-label="John Doe">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="add-user-email">Email</label>
                            <input type="text" id="add-user-email" class="form-control"
                                placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-contact">Contact</label>
                            <input type="text" id="add-user-contact" class="form-control phone-mask"
                                placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-user-company">Company</label>
                            <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer"
                                aria-label="jdoe1" name="companyName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">Country</label>
                            <div class="position-relative"><select id="country"
                                    class="select2 form-select select2-hidden-accessible" data-select2-id="country"
                                    tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="1" style="width: 337px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-country-container"><span
                                                class="select2-selection__rendered" id="select2-country-container"
                                                role="textbox" aria-readonly="true"><span
                                                    class="select2-selection__placeholder">Select
                                                    Country</span></span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="user-role">User Role</label>
                            <select id="user-role" class="form-select">
                                <option value="subscriber">Subscriber</option>
                                <option value="editor">Editor</option>
                                <option value="maintainer">Maintainer</option>
                                <option value="author">Author</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="user-plan">Select Plan</label>
                            <select id="user-plan" class="form-select">
                                <option value="basic">Basic</option>
                                <option value="enterprise">Enterprise</option>
                                <option value="company">Company</option>
                                <option value="team">Team</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Submit</button>
                        <button type="reset" class="btn btn-label-secondary waves-effect"
                            data-bs-dismiss="offcanvas">Cancel</button>
                        <input type="hidden">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>