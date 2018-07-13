<?php include("includes/header.php") ?>
        <div class="page-wrapper">
            <div class="content container-fluid pd-n">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="card task-panel">
                            <div class="card-header panelcolor  px-4 pd-n pt-1">
                                <div class="pull-left">
                                   <h2 class="panel-title text-white pl-3 pt-2">Manage Organizations <small>Manage All Organization here..</small></h2>
                                </div>
                                <ul class="nav pull-right custom-menu">
                                    <li class="nav-item dropdown dropdown-action">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Pending Tasks</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Completed Tasks</a>
                                            <a class="dropdown-item" href="javascript:void(0)">All Tasks</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body pd-n">
                                <div class="task-wrapper">
                                    <div class="row mr-0 fltrclr" >
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4 ml-auto "> 
                                        <ul class="pt-2 mr-0 pb-2">
                                            <li class="d-inline-block col-sm-5 m-l-10 pr-0">
                                                <select class="form-control form-control-sm">
                                                    <option>Abc </option>
                                                    <option>XYZ </option>
                                                </select> 
                                            </li>
                                            
                                            <li class="d-inline-block m-l-10">
                                                <a data-toggle="modal" data-target="#mymodal1" class="btn btn-primary btn-sm btnbg text-white ml-3">
                                                <i class="fa fa-fw fa-plus"></i> Add Record</a>
                                            </li>
                                            <li class="d-inline-block ml-1"> 
                                                <a class="btn btn-default mr-10 txtfltrclr fltrbtn" href="javascript:;"><i class="fa fa-filter fa-lg"></i></a>
                                            </li>
                                            <li class="d-inline-block m-l-10">  
                                                <a href="#" class="text-muted" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h f-s-14"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#."><i class="fa fa-eye m-r-5 "></i></i> View</a>
                                                    <a class="dropdown-item" href="#."><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#."><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="row pd-n mt-3">

                                 <div class="table-responsive">
                                    <table class="table m-b-0 table table-hover table-bordered tabcontent">
                                       <thead>
                                        <tr>
                                          <th><input type="checkbox" name="" id="checkall"></th>
                                          <th> Edit/Delete </th>
                                          <th> OrganizationID</th>
                                          <th>CompanyName</th>
                                          <th>CompanyLogo</th>
                                          <th>Address</th>
                                          <th>City</th>
                                          <th>State</th>
                                          <th>Country</th>
                                          <th>Services</th>
                                          <th>NTN#</th>
                                          <th>Phone#.</th>
                                          <th>OwnerName </th>
                                          <th>Email </th>
                                          <th>Password </th>
                                          <th>Mobile# </th>
                                        </tr>
                                      
                                      </thead>
                                       <tbody>
                                        <tr id="fltrdiv" class=" mt-2">
                                            <th > </th> <th> </th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                            <th><input class="form-control form-control-sm" type="text" /></th>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="" class="chckbx"></td>
                                            <td>
                                               <a href="#" class="text-muted" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h f-s-14"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#."><i class="fa fa-eye m-r-5 "></i></i> View</a>
                                                    <a class="dropdown-item" href="#."><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#."><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>   
                                            </td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>Anna</td>
                                            <td>Pitt</td>
                                            <td>35</td>
                                            <td>New York</td>
                                             <td>USA</td>
                                            <td>Female</td>
                                            <td>Yes</td>
                                            <td>Yes</td>
                                            <td>Yes</td>
                                            <td>Yes</td>
                                        </tr>
                                      
                                      </tbody>
                                    </table>
                                </div>

                              
                            </div>

                                    <!-- <div class="task-list-container">
                                        <div class="task-list-body">
                                            <ul id="task-list">
                                                <li class="task">
                                                    <div class="task-container">
                                                        <span class="task-action-btn task-check">
                                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                                <i class="material-icons">check</i>
                                                            </span>
                                                        </span>
                                                        <span class="task-label" contenteditable="true">Patient appointment booking</span>
                                                        <span class="task-action-btn task-btn-right">
                                                                <span class="action-circle large" title="Assign">
                                                                    <i class="material-icons">person_add</i>
                                                                </span>
                                                        <span class="action-circle large delete-btn" title="Delete Task">
                                                                    <i class="material-icons">delete</i>
                                                                </span>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="task">
                                                    <div class="task-container">
                                                        <span class="task-action-btn task-check">
                                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                                <i class="material-icons">check</i>
                                                            </span>
                                                        </span>
                                                        <span class="task-label" contenteditable="true">Appointment booking with payment gateway</span>
                                                        <span class="task-action-btn task-btn-right">
                                                            <span class="action-circle large" title="Assign">
                                                                <i class="material-icons">person_add</i>
                                                            </span>
                                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                                <i class="material-icons">delete</i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="completed task">
                                                    <div class="task-container">
                                                        <span class="task-action-btn task-check">
                                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                                <i class="material-icons">check</i>
                                                            </span>
                                                        </span>
                                                        <span class="task-label">Doctor available module</span>
                                                        <span class="task-action-btn task-btn-right">
                                                            <span class="action-circle large" title="Assign">
                                                                <i class="material-icons">person_add</i>
                                                            </span>
                                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                                <i class="material-icons">delete</i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="task">
                                                    <div class="task-container">
                                                        <span class="task-action-btn task-check">
                                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                                <i class="material-icons">check</i>
                                                            </span>
                                                        </span>
                                                        <span class="task-label" contenteditable="true">Patient and Doctor video conferencing</span>
                                                        <span class="task-action-btn task-btn-right">
                                                            <span class="action-circle large" title="Assign">
                                                                <i class="material-icons">person_add</i>
                                                            </span>
                                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                                <i class="material-icons">delete</i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="task">
                                                    <div class="task-container">
                                                        <span class="task-action-btn task-check">
                                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                                <i class="material-icons">check</i>
                                                            </span>
                                                        </span>
                                                        <span class="task-label" contenteditable="true">Private chat module</span>
                                                        <span class="task-action-btn task-btn-right">
                                                            <span class="action-circle large" title="Assign">
                                                                <i class="material-icons">person_add</i>
                                                            </span>
                                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                                <i class="material-icons">delete</i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="task">
                                                    <div class="task-container">
                                                        <span class="task-action-btn task-check">
                                                            <span class="action-circle large complete-btn" title="Mark Complete">
                                                                <i class="material-icons">check</i>
                                                            </span>
                                                        </span>
                                                        <span class="task-label" contenteditable="true">Patient Profile add</span>
                                                        <span class="task-action-btn task-btn-right">
                                                            <span class="action-circle large" title="Assign">
                                                                <i class="material-icons">person_add</i>
                                                            </span>
                                                            <span class="action-circle large delete-btn" title="Delete Task">
                                                                <i class="material-icons">delete</i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="task-list-footer">
                                            <div class="new-task-wrapper">
                                                <textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
                                                <span class="error-message hidden">You need to enter a task first</span>
                                                <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                                <span class="cancel-btn btn" id="close-task-panel">Close</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="themes">
                    <div class="themes-icon"><i class="fa fa-cog"></i></div>
                    <div class="themes-body">
                        <ul id="theme-change" class="theme-colors">
                            <li><a href="https://dreamguys.co.in/preadmin/light/index.html"><span class="theme-light"></span></a></li>
                            <li><a href="index.html"><span class="theme-orange"></span></a></li>
                            <li><a href="https://dreamguys.co.in/preadmin/purple/index.html"><span class="theme-purple"></span></a></li>
                            <li><a href="https://dreamguys.co.in/preadmin/blue/index.html"><span class="theme-blue"></span></a></li>
                            <li><a href="https://dreamguys.co.in/preadmin/dark/index.html"><span class="theme-dark"></span></a></li>
                            <li><a href="https://dreamguys.co.in/preadmin/rtl/index.html"><span class="theme-rtl">RTL</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
<?php include("includes/footer.php") ?>
<script type="text/javascript">

    $(document).ready(function(){
        $(".fltrbtn").click(function(){
            // $(this).hide();
             $("#fltrdiv").slideToggle(500);
        });
    });
    $(document).ready(function(){
        $("#checkall").click(function(){
            if(this.checked){
                $(".chckbx").each(function(){
                    this.checked = true;
                })
            }
            else {
                $(".chckbx").each(function(){
                    this.checked = false;
                });
            }
        });

    });


 
</script>