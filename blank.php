<?php include("includes/header.php") ?>
        <div class="page-wrapper" >
            <div class="content container-fluid pd-n">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="card task-panel m-b-0">
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
                            <div class="task-wrapper">
                                <div class="row mr-0 fltrclr" >
                                    <div class="col-md-12 d-flex pd-n">
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
                                                        <a class="dropdown-item" href="#."><i class="fa fa-eye m-r-5 "></i> View</a>
                                                        <a class="dropdown-item" href="#."><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#."><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>                                                
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="card-body pd-tp hghtauto pd-n bdyght">
                                
                            </div>    --> 
                            <div class="brdrclr pd-0 mr-0"> </div>
                            <div class="card-body pd-tp d-table w-100" style="min-height: calc(100vh - 224px);  overflow-x: auto;">
                                    <div class="row h-100">
                                        <div class="col-sm-12   my-auto  text-center">
                                            <img src="assets/img/norec.png" class="img-responsive"> <br> 
                                                     No Record Found
                                        </div>
                                    </div>


                              
                            </div>
                            <div class="brdrclr pd-0 mr-0"> </div>
                            <div class="card-footer pd-tpn">
                                <div class="task-wrapper">
                                    <div class="row">
                                        <div class="col-sm-6">
                                               Record Per Page #
                                        </div>
                                        <div class="col-sm-6">
                                            <nav aria-label="Page navigation example ">
                                              <ul class="pagination justify-content-end align-middle">
                                                <li class="pr-3">
                                                    <select class="form-control form-control-sm">
                                                        <option> 10 </option>
                                                        <option> 20 </option>
                                                        <option> 30 </option>
                                                        <option> 40 </option>
                                                        <option> 50 </option>
                                                        <option> 75 </option>
                                                        <option> 100 </option>
                                                        <option> 200 </option>
                                                    </select> 
                                                </li>
                                                <li class="pr-3 pt-1"> Recordrs Per Page </li>
                                                <li class="page-item disabled">
                                                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                  <a class="page-link" href="#">Next</a>
                                                </li>
                                              </ul>
                                            </nav>
                                        </div>
                                    </div>
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