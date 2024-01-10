@php
    use App\Models\Companies;
    use App\Models\User;
    use Illuminate\Support\Facades\DB;
@endphp
@include('template.header');
<body>
    <!-- Background Layer For Filters Opening  -->
    <div class="back-transparent-layer"></div>
    <div class="content">
    @include('template.sidebar');
        <div class="right-side-content">
        @include('template.loginBar');
            <div class="page-name-heading wrap">
                <p><?=$page_title;?></p>
            </div>
            <div class="right-side-content-inner padding-zero">
                <div class="addProject-individual-section">
                    <div class="add-task-inner-heading">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.9758 1.76804H16.7678V0.640039C16.7678 0.480909 16.7046 0.328297 16.5921 0.215775C16.4796 0.103253 16.327 0.0400391 16.1678 0.0400391H13.5518C13.3927 0.0400391 13.2401 0.103253 13.1276 0.215775C13.015 0.328297 12.9518 0.480909 12.9518 0.640039V1.76804H7.04783V0.640039C7.04783 0.480909 6.98461 0.328297 6.87209 0.215775C6.75957 0.103253 6.60696 0.0400391 6.44783 0.0400391H3.83183C3.6727 0.0400391 3.52009 0.103253 3.40756 0.215775C3.29504 0.328297 3.23183 0.480909 3.23183 0.640039V1.76804H1.02383C0.864698 1.76804 0.712086 1.83125 0.599564 1.94378C0.487042 2.0563 0.423828 2.20891 0.423828 2.36804V19.36C0.423828 19.5192 0.487042 19.6718 0.599564 19.7843C0.712086 19.8968 0.864698 19.96 1.02383 19.96H18.9758C19.135 19.96 19.2876 19.8968 19.4001 19.7843C19.5126 19.6718 19.5758 19.5192 19.5758 19.36V2.36804C19.5758 2.20891 19.5126 2.0563 19.4001 1.94378C19.2876 1.83125 19.135 1.76804 18.9758 1.76804ZM14.1518 1.24004H15.5678V2.84804H14.1518V1.24004ZM4.43183 1.24004H5.84783V2.84804H4.43183V1.24004ZM7.83983 16.84C7.83983 16.9992 7.77661 17.1518 7.66409 17.2643C7.55157 17.3768 7.39896 17.44 7.23983 17.44H4.35983C4.2007 17.44 4.04809 17.3768 3.93556 17.2643C3.82304 17.1518 3.75983 16.9992 3.75983 16.84V14.2C3.75983 14.0409 3.82304 13.8883 3.93556 13.7758C4.04809 13.6633 4.2007 13.6 4.35983 13.6H7.23983C7.31862 13.6 7.39664 13.6156 7.46944 13.6457C7.54223 13.6759 7.60838 13.7201 7.66409 13.7758C7.71981 13.8315 7.764 13.8976 7.79416 13.9704C7.82431 14.0432 7.83983 14.1212 7.83983 14.2V16.84ZM7.83983 11.56C7.83983 11.6388 7.82431 11.7169 7.79416 11.7896C7.764 11.8624 7.71981 11.9286 7.66409 11.9843C7.60838 12.04 7.54223 12.0842 7.46944 12.1144C7.39664 12.1445 7.31862 12.16 7.23983 12.16H4.35983C4.2007 12.16 4.04809 12.0968 3.93556 11.9843C3.82304 11.8718 3.75983 11.7192 3.75983 11.56V8.92004C3.75983 8.76091 3.82304 8.6083 3.93556 8.49577C4.04809 8.38325 4.2007 8.32004 4.35983 8.32004H7.23983C7.31862 8.32004 7.39664 8.33556 7.46944 8.36571C7.54223 8.39586 7.60838 8.44006 7.66409 8.49577C7.71981 8.55149 7.764 8.61763 7.79416 8.69043C7.82431 8.76322 7.83983 8.84125 7.83983 8.92004V11.56ZM16.2398 16.12H9.75983V14.92H16.2398V16.12ZM16.2398 10.84H9.75983V9.64004H16.2398V10.84ZM18.3758 5.68004H1.62383V2.96804H3.23183V3.42404C3.23183 3.58317 3.29504 3.73578 3.40756 3.8483C3.52009 3.96082 3.6727 4.02404 3.83183 4.02404H6.44783C6.60696 4.02404 6.75957 3.96082 6.87209 3.8483C6.98461 3.73578 7.04783 3.58317 7.04783 3.42404V2.96804H12.9518V3.42404C12.9518 3.58317 13.015 3.73578 13.1276 3.8483C13.2401 3.96082 13.3927 4.02404 13.5518 4.02404H16.1678C16.327 4.02404 16.4796 3.96082 16.5921 3.8483C16.7046 3.73578 16.7678 3.58317 16.7678 3.42404V2.96804H18.3758V5.68004Z"
                                fill="#181F26" />
                        </svg>
                        PROJECT DETAILS
                    </div>
                    <form action="{{route('ProjectsStore')}}" method="post" id="project" enctype="multipart/form-data">
                    @csrf
                    <div class="add-task-input-box">
                        <p>Company <span class="required-star">*</span></p>
                        @php 
                        $companies = Companies::all();
                        @endphp
                        <select required name="companyId" id="company">
                        <option  value="">Choose Company</option>
                           @foreach($companies as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="add-task-input-box-double" class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Project No. <span class="required-star">*</span></p>
                            <input required  type="text" name="projectNo" id="" placeholder="Project Number">
                        </div>
                        <div class="add-task-input-box">
                            <p>Project Name <span class="required-star">*</span> </p>
                            <input required type="text" name="name" id="" placeholder="Project Name">
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Project Manager <span class="required-star">*</span></p>
                           
                            <select name="managerId" id="users">
                                <option value="">Project Manger</option>
                                
                            </select>
                        </div>
                        <div class="add-task-input-box">
                            <p>Project Executive</p>
                            <input required name="projectExective" type="text" placeholder="Project Executive">
                        </div>
                    </div>
                    <div class="add-task-input-box-half">
                        <div class="add-task-input-box">
                            <p>Description <span class="required-star">*</span></p>
                            <textarea required name="description" id="" cols="30" rows="5"
                                placeholder="Write Something about Task"></textarea>
                        </div>
                    </div>
                </div>
                <div id="projectdemo" class="addProject-individual-section add-role-section">
                    <div class="add-task-inner-heading">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.25 3.31265C7.13095 1.85685 4.18953 1.1939 1.99433 0.945842C0.896423 0.82178 0 1.73859 0 2.86975V14.1345C0 15.2657 0.896423 16.1828 1.99433 16.3069C4.18953 16.5549 7.13095 17.2179 9.25 18.6737V3.31265ZM10.75 18.6737C12.869 17.2179 15.8105 16.5549 18.0057 16.3069C19.1036 16.1828 20 15.2657 20 14.1345V2.86975C20 1.73859 19.1036 0.82178 18.0057 0.945842C15.8105 1.1939 12.869 1.85685 10.75 3.31265V18.6737ZM2.25884 6.07443C2.32223 5.66509 2.70545 5.38465 3.11478 5.44804C4.41756 5.6498 5.88471 5.98704 7.27051 6.52293C7.65684 6.67232 7.84892 7.10662 7.69952 7.49295C7.55012 7.87928 7.11583 8.07136 6.7295 7.92196C5.47085 7.43524 4.11399 7.12067 2.88522 6.93037C2.47588 6.86698 2.19544 6.48376 2.25884 6.07443ZM3.11478 9.44804C2.70545 9.38465 2.32223 9.66509 2.25884 10.0744C2.19544 10.4838 2.47588 10.867 2.88522 10.9304C3.50446 11.0263 4.15813 11.154 4.81653 11.3201C5.21815 11.4215 5.62588 11.178 5.72721 10.7764C5.82854 10.3748 5.5851 9.96704 5.18347 9.86572C4.47447 9.68683 3.77452 9.55022 3.11478 9.44804Z"
                                fill="#181F26" />
                        </svg>
                        ADD ROLE
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Member Name <span class="required-star">*</span></p>
                            @php 
                                $role_id =DB::table('roles')->where('role','Owner')->first();
                                $users=User::whereNotIn('role_id', [$role_id->id])->get();
        
                            @endphp
                            <select name="members[]" id="">
                                @foreach($users as $item)    
                                    <option value="{{$item->id}}">{{$item->fname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="add-task-input-box">
                            <p>Role <span class="required-star">*</span></p>
                            <select name="role[]" id="">
                                @php 
                                    $role_id =DB::table('roles')->where('role','Owner')->first();
                                    $roles = DB::table('roles')->where('type','user')->whereNotIn('id', [$role_id->id])->get();
                                @endphp
                                @foreach($roles as $r)
                                    <option value="{{$r->id}}">{{$r->role}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>

                    <div class="add-project-add-role-plus-btn-row add-role-btn-add-project-btn-row">
                        <button class="add-role-btn-add-project">Add Role +</button>
                    </div>
                </div>
                <div class="addProject-individual-section">
                    <div class="add-task-inner-heading">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.7031 17.7227C13.0915 17.7227 13.4062 17.4079 13.4062 17.0195C13.4062 16.6312 13.0915 16.3164 12.7031 16.3164C12.3148 16.3164 12 16.6312 12 17.0195C12 17.4079 12.3148 17.7227 12.7031 17.7227Z"
                                fill="black" />
                            <path
                                d="M18.3535 15.6387C18.7418 15.6387 19.0566 15.3239 19.0566 14.9355C19.0566 14.5472 18.7418 14.2324 18.3535 14.2324C17.9652 14.2324 17.6504 14.5472 17.6504 14.9355C17.6504 15.3239 17.9652 15.6387 18.3535 15.6387Z"
                                fill="black" />
                            <path
                                d="M19.4102 9.6377C19.7985 9.6377 20.1133 9.3229 20.1133 8.93457C20.1133 8.54625 19.7985 8.23145 19.4102 8.23145C19.0218 8.23145 18.707 8.54625 18.707 8.93457C18.707 9.3229 19.0218 9.6377 19.4102 9.6377Z"
                                fill="black" />
                            <path
                                d="M9.74154 6.49464C9.30256 7.12159 9.2352 7.91969 9.56651 8.61555L11.2642 9.8043C12.0314 9.87761 12.7583 9.54138 13.1973 8.91442C14.3507 7.26724 13.6232 5.13564 13.0868 4.01163C12.9649 3.75616 12.7136 3.60255 12.4308 3.61066C12.149 3.61881 11.9078 3.78597 11.8013 4.04697C11.6143 4.50517 11.4246 4.85861 11.2374 5.09749C11.0033 5.39617 10.8147 5.52049 10.6149 5.65211C10.3683 5.81458 10.0887 5.9988 9.74154 6.49464ZM10.4199 10.9298C10.1098 11.8198 9.36819 13.1572 7.95144 15.1805C5.13017 19.2097 0.714122 24.4188 0.077935 23.9733C-0.558253 23.5278 2.82631 17.5965 5.64758 13.5673C7.06433 11.544 8.06731 10.3897 8.79762 9.79385L10.4199 10.9298Z"
                                fill="black" />
                            <path
                                d="M7.23811 18.5247C7.32067 18.813 7.42983 19.0931 7.56418 19.3612C8.20093 20.6309 9.36868 21.5233 10.768 21.8096C10.8668 21.8298 10.9679 21.8491 11.0682 21.8668C11.7074 21.9798 12.3553 22.0367 13.0044 22.037C15.244 22.037 17.4265 21.3534 19.2993 20.0419C21.7096 18.3543 23.3183 15.829 23.8293 12.9313C24.3402 10.0337 23.6922 7.11044 22.0045 4.70018C20.3168 2.28991 17.7916 0.681162 14.8939 0.170178C11.9964 -0.340619 9.07299 0.307287 6.66272 1.99502C4.25246 3.68266 2.64371 6.20796 2.13272 9.10563L2.11144 9.22737C1.99814 9.87494 2.2163 10.5261 2.69503 10.969C3.19538 11.4319 3.89663 11.605 4.57097 11.4323C4.87402 11.3546 5.19085 11.3344 5.50449 11.3711C6.44471 10.1303 7.23713 9.25169 7.90814 8.70419L8.06414 8.57693C7.81355 7.59377 7.99636 6.53454 8.58914 5.68802C9.09028 4.97219 9.54193 4.67463 9.84075 4.47776C9.99975 4.37294 10.0375 4.34805 10.1301 4.22997C10.1785 4.16815 10.3115 3.97479 10.4988 3.51555C10.814 2.74333 11.5563 2.22888 12.3901 2.20493C12.4106 2.20432 12.4313 2.20399 12.4516 2.20399C13.2722 2.20399 14.0017 2.66449 14.3556 3.40601C15.5093 5.82429 15.507 8.06697 14.3488 9.72101C14.0579 10.1362 13.6807 10.4836 13.2431 10.7395C12.8055 10.9953 12.3177 11.1536 11.8133 11.2034L11.7474 11.3925C11.3658 12.4878 10.5008 13.9907 9.10285 15.9871C8.5305 16.8045 7.89535 17.6677 7.23811 18.5247ZM19.4104 11.0437C18.2473 11.0437 17.301 10.0974 17.301 8.9343C17.301 7.77119 18.2473 6.82493 19.4104 6.82493C20.5735 6.82493 21.5198 7.77119 21.5198 8.9343C21.5198 10.0974 20.5735 11.0437 19.4104 11.0437ZM16.2428 14.9355C16.2428 13.7724 17.1891 12.8261 18.3522 12.8261C19.5153 12.8261 20.4616 13.7724 20.4616 14.9355C20.4616 16.0986 19.5153 17.0449 18.3522 17.0449C17.1891 17.0449 16.2428 16.0986 16.2428 14.9355ZM10.5933 17.0197C10.5933 15.8566 11.5396 14.9103 12.7027 14.9103C13.8658 14.9103 14.812 15.8566 14.812 17.0197C14.812 18.1828 13.8658 19.1291 12.7027 19.1291C11.5396 19.1291 10.5933 18.1828 10.5933 17.0197Z"
                                fill="black" />
                        </svg>
                        DRAWING DETAILS
                    </div>
                    <div class="add-task-input-box">
                        <p>Title <span class="required-star">*</span></p>
                        <input required type="text" name="title" id="" placeholder="Test">
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Building No. <span class="required-star">*</span></p>
                            <select name="buildingNo" id="">
                                <option value="4">4</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="add-task-input-box">
                            <p>Floor <span class="required-star">*</span></p>
                            <select name="floor" id="floor">
                                <option value="3">3</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Subject <span class="required-star">*</span></p>
                            <select name="subject" id="">
                                <option value="Architect">Architect</option>
                                <option value="Computing">Computing</option>
                                <option value="Medicine">Medicine</option>
                                <option value="Science">Science</option>
                            </select>
                        </div>
                        <div class="add-task-input-box">
                            <p>Revision <span class="required-star">*</span></p>
                            <select name="revisionNo" id="">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Revision Date <span class="required-star">*</span></p>
                            <input required name="revisionDate" type="date">
                        </div>
                        <div class="add-task-input-box">
                            <p>Yard Stick <span class="required-star">*</span></p>
                            <select name="yardStick" id="">
                                <option value="1:100">1:100</option>
                                <option value="2:100">2:100</option>
                                <option value="3:100">3:100</option>
                                <option value="4:100">4:100</option>
                            </select>
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Format <span class="required-star">*</span></p>
                            <select name="format" id="">
                                <option value="A3">A3</option>
                                <option value="A4">A4</option>
                                <option value="Landscape">Landscape</option>
                                <option value="Portrait">Portrait</option>
                            </select>
                        </div>
                        <div class="add-task-input-box">
                            <p>End Date <span class="required-star">*</span></p>
                            <input required name= "endDate" type="date">
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Last Edited (Name) <span class="required-star">*</span></p>
                            <select required name="lastEdit" id="lastEdit">
                                <option >Select Comapny First</option>
                            </select>
                        </div>
                        <div class="add-task-input-box">
                            <p>Status Drawing <span class="required-star">*</span></p>
                            <select name="statusDrawing" id="statusDrawing">
                                <option value="work">During Work</option>
                                <option value="holidays">During Holidays</option>
                            </select>
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Comment <span class="required-star">*</span></p>
                            <textarea  required class="addproject-comment-field" name="comment" id="" cols="20" rows="5"
                                placeholder="Outlines the details of one project, including all its phases and processes involved, in a single document. It addresses its phases..."></textarea>
                        </div>
                        <div class="add-task-input-box">
                            <p>Drawing <span class="required-star">*</span></p>
                            <input required type="file" name="image" id="upload-drawing-input">
                            <label class="upload-drawing-label" for="upload-drawing-input">
                                <svg width="56" height="39" viewBox="0 0 56 39" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M50.4 20.5333H48.5333C48.5333 14.3472 43.5195 9.33333 37.3333 9.33333H36.2376C34.0219 3.86213 28.6664 0 22.4 0C14.1531 0 7.46667 6.6864 7.46667 14.9333V16.8C3.3432 16.8 0 20.1432 0 24.2667C0 28.3901 3.3432 31.7333 7.46667 31.7333H50.4C53.4931 31.7333 56 29.2264 56 26.1333C56 23.0403 53.4931 20.5333 50.4 20.5333Z"
                                        fill="#085DB7" fill-opacity="0.19" />
                                    <path d="M24.5071 11.7051L40.9675 23.4102H19.569V21.0692H14.6309L24.5071 11.7051Z"
                                        fill="#C4CCCC" />
                                    <path
                                        d="M14.6309 21.7381L24.8729 11.7051L35.1149 21.7381H29.9939V38.0417H19.7519V21.7381H14.6309Z"
                                        fill="#085DB7" />
                                </svg>
                                Choose File for Upload</label>
                        </div>
                    </div>
                </div>
                <div class="addProject-individual-section">
                    <div class="add-task-inner-heading">
                        <svg width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 4.25V0.5975C11.3658 0.699137 11.6996 0.892494 11.9697 1.15925L14.8407 4.03025C15.1079 4.30026 15.3015 4.63408 15.4032 5H11.75C11.5511 4.9998 11.3605 4.92072 11.2199 4.78011C11.0793 4.6395 11.0002 4.44885 11 4.25ZM15.5 6.5V19.25C15.4994 19.8466 15.2622 20.4185 14.8403 20.8403C14.4185 21.2622 13.8466 21.4994 13.25 21.5H2.75C2.15345 21.4994 1.5815 21.2622 1.15967 20.8403C0.73784 20.4185 0.500596 19.8466 0.5 19.25V2.75C0.500596 2.15345 0.73784 1.5815 1.15967 1.15967C1.5815 0.73784 2.15345 0.500596 2.75 0.5H9.5V4.25C9.5006 4.84655 9.73784 5.4185 10.1597 5.84033C10.5815 6.26216 11.1534 6.4994 11.75 6.5H15.5ZM4.25 14.75C4.25 14.6017 4.20601 14.4567 4.1236 14.3333C4.04119 14.21 3.92406 14.1139 3.78701 14.0571C3.64997 14.0003 3.49917 13.9855 3.35368 14.0144C3.2082 14.0434 3.07456 14.1148 2.96967 14.2197C2.86478 14.3246 2.79335 14.4582 2.76441 14.6037C2.73547 14.7492 2.75032 14.9 2.80709 15.037C2.86386 15.1741 2.95999 15.2912 3.08332 15.3736C3.20666 15.456 3.35166 15.5 3.5 15.5C3.69891 15.5 3.88968 15.421 4.03033 15.2803C4.17098 15.1397 4.25 14.9489 4.25 14.75ZM4.25 11.75C4.25 11.6017 4.20601 11.4567 4.1236 11.3333C4.04119 11.21 3.92406 11.1139 3.78701 11.0571C3.64997 11.0003 3.49917 10.9855 3.35368 11.0144C3.2082 11.0434 3.07456 11.1148 2.96967 11.2197C2.86478 11.3246 2.79335 11.4582 2.76441 11.6037C2.73547 11.7492 2.75032 11.9 2.80709 12.037C2.86386 12.1741 2.95999 12.2912 3.08332 12.3736C3.20666 12.456 3.35166 12.5 3.5 12.5C3.69891 12.5 3.88968 12.421 4.03033 12.2803C4.17098 12.1397 4.25 11.9489 4.25 11.75ZM4.25 8.75C4.25 8.60166 4.20601 8.45666 4.1236 8.33332C4.04119 8.20999 3.92406 8.11386 3.78701 8.05709C3.64997 8.00032 3.49917 7.98547 3.35368 8.01441C3.2082 8.04335 3.07456 8.11478 2.96967 8.21967C2.86478 8.32456 2.79335 8.4582 2.76441 8.60368C2.73547 8.74917 2.75032 8.89997 2.80709 9.03701C2.86386 9.17406 2.95999 9.29119 3.08332 9.3736C3.20666 9.45601 3.35166 9.5 3.5 9.5C3.69891 9.5 3.88968 9.42098 4.03033 9.28033C4.17098 9.13968 4.25 8.94891 4.25 8.75ZM13.25 14.75C13.25 14.5511 13.171 14.3603 13.0303 14.2197C12.8897 14.079 12.6989 14 12.5 14H5.75C5.55109 14 5.36032 14.079 5.21967 14.2197C5.07902 14.3603 5 14.5511 5 14.75C5 14.9489 5.07902 15.1397 5.21967 15.2803C5.36032 15.421 5.55109 15.5 5.75 15.5H12.5C12.6989 15.5 12.8897 15.421 13.0303 15.2803C13.171 15.1397 13.25 14.9489 13.25 14.75ZM13.25 11.75C13.25 11.5511 13.171 11.3603 13.0303 11.2197C12.8897 11.079 12.6989 11 12.5 11H5.75C5.55109 11 5.36032 11.079 5.21967 11.2197C5.07902 11.3603 5 11.5511 5 11.75C5 11.9489 5.07902 12.1397 5.21967 12.2803C5.36032 12.421 5.55109 12.5 5.75 12.5H12.5C12.6989 12.5 12.8897 12.421 13.0303 12.2803C13.171 12.1397 13.25 11.9489 13.25 11.75ZM13.25 8.75C13.25 8.55109 13.171 8.36032 13.0303 8.21967C12.8897 8.07902 12.6989 8 12.5 8H5.75C5.55109 8 5.36032 8.07902 5.21967 8.21967C5.07902 8.36032 5 8.55109 5 8.75C5 8.94891 5.07902 9.13968 5.21967 9.28033C5.36032 9.42098 5.55109 9.5 5.75 9.5H12.5C12.6989 9.5 12.8897 9.42098 13.0303 9.28033C13.171 9.13968 13.25 8.94891 13.25 8.75Z"
                                fill="black" />
                        </svg>
                        INVOICING DETAILS
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Start Date <span class="required-star">*</span></p>
                            <input required type="date" name="startDate" id="">
                        </div>
                        <div class="add-task-input-box">
                            <p>End Date <span class="required-star">*</span></p>
                            <input required type="date" name="endDate" id="">
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Status Invoicing <span class="required-star">*</span></p>
                            <select required name="statusInvoice" id="">
                                <option value="Finished">Finished</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="add-task-input-box">
                            <p>Status of Building Case</p>
                            <select required name="statusBuilding" id="">
                                <option value="Work">During Work</option>
                               
                            </select>
                        </div>
                    </div>
                </div>
                <div class="addProject-individual-section">
                    <div class="add-task-inner-heading">
                        <svg width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 4.25V0.5975C11.3658 0.699137 11.6996 0.892494 11.9697 1.15925L14.8407 4.03025C15.1079 4.30026 15.3015 4.63408 15.4032 5H11.75C11.5511 4.9998 11.3605 4.92072 11.2199 4.78011C11.0793 4.6395 11.0002 4.44885 11 4.25ZM15.5 6.5V19.25C15.4994 19.8466 15.2622 20.4185 14.8403 20.8403C14.4185 21.2622 13.8466 21.4994 13.25 21.5H2.75C2.15345 21.4994 1.5815 21.2622 1.15967 20.8403C0.73784 20.4185 0.500596 19.8466 0.5 19.25V2.75C0.500596 2.15345 0.73784 1.5815 1.15967 1.15967C1.5815 0.73784 2.15345 0.500596 2.75 0.5H9.5V4.25C9.5006 4.84655 9.73784 5.4185 10.1597 5.84033C10.5815 6.26216 11.1534 6.4994 11.75 6.5H15.5ZM4.25 14.75C4.25 14.6017 4.20601 14.4567 4.1236 14.3333C4.04119 14.21 3.92406 14.1139 3.78701 14.0571C3.64997 14.0003 3.49917 13.9855 3.35368 14.0144C3.2082 14.0434 3.07456 14.1148 2.96967 14.2197C2.86478 14.3246 2.79335 14.4582 2.76441 14.6037C2.73547 14.7492 2.75032 14.9 2.80709 15.037C2.86386 15.1741 2.95999 15.2912 3.08332 15.3736C3.20666 15.456 3.35166 15.5 3.5 15.5C3.69891 15.5 3.88968 15.421 4.03033 15.2803C4.17098 15.1397 4.25 14.9489 4.25 14.75ZM4.25 11.75C4.25 11.6017 4.20601 11.4567 4.1236 11.3333C4.04119 11.21 3.92406 11.1139 3.78701 11.0571C3.64997 11.0003 3.49917 10.9855 3.35368 11.0144C3.2082 11.0434 3.07456 11.1148 2.96967 11.2197C2.86478 11.3246 2.79335 11.4582 2.76441 11.6037C2.73547 11.7492 2.75032 11.9 2.80709 12.037C2.86386 12.1741 2.95999 12.2912 3.08332 12.3736C3.20666 12.456 3.35166 12.5 3.5 12.5C3.69891 12.5 3.88968 12.421 4.03033 12.2803C4.17098 12.1397 4.25 11.9489 4.25 11.75ZM4.25 8.75C4.25 8.60166 4.20601 8.45666 4.1236 8.33332C4.04119 8.20999 3.92406 8.11386 3.78701 8.05709C3.64997 8.00032 3.49917 7.98547 3.35368 8.01441C3.2082 8.04335 3.07456 8.11478 2.96967 8.21967C2.86478 8.32456 2.79335 8.4582 2.76441 8.60368C2.73547 8.74917 2.75032 8.89997 2.80709 9.03701C2.86386 9.17406 2.95999 9.29119 3.08332 9.3736C3.20666 9.45601 3.35166 9.5 3.5 9.5C3.69891 9.5 3.88968 9.42098 4.03033 9.28033C4.17098 9.13968 4.25 8.94891 4.25 8.75ZM13.25 14.75C13.25 14.5511 13.171 14.3603 13.0303 14.2197C12.8897 14.079 12.6989 14 12.5 14H5.75C5.55109 14 5.36032 14.079 5.21967 14.2197C5.07902 14.3603 5 14.5511 5 14.75C5 14.9489 5.07902 15.1397 5.21967 15.2803C5.36032 15.421 5.55109 15.5 5.75 15.5H12.5C12.6989 15.5 12.8897 15.421 13.0303 15.2803C13.171 15.1397 13.25 14.9489 13.25 14.75ZM13.25 11.75C13.25 11.5511 13.171 11.3603 13.0303 11.2197C12.8897 11.079 12.6989 11 12.5 11H5.75C5.55109 11 5.36032 11.079 5.21967 11.2197C5.07902 11.3603 5 11.5511 5 11.75C5 11.9489 5.07902 12.1397 5.21967 12.2803C5.36032 12.421 5.55109 12.5 5.75 12.5H12.5C12.6989 12.5 12.8897 12.421 13.0303 12.2803C13.171 12.1397 13.25 11.9489 13.25 11.75ZM13.25 8.75C13.25 8.55109 13.171 8.36032 13.0303 8.21967C12.8897 8.07902 12.6989 8 12.5 8H5.75C5.55109 8 5.36032 8.07902 5.21967 8.21967C5.07902 8.36032 5 8.55109 5 8.75C5 8.94891 5.07902 9.13968 5.21967 9.28033C5.36032 9.42098 5.55109 9.5 5.75 9.5H12.5C12.6989 9.5 12.8897 9.42098 13.0303 9.28033C13.171 9.13968 13.25 8.94891 13.25 8.75Z"
                                fill="black" />
                        </svg>
                        ACTIVITIES/TASK
                    </div>
                    <div class="activity-task-outer">
                        <div class="activity-task-activity-box">
                            Activity
                        </div>
                        <div class="add-task-input-box">
                            <p>Title <span class="required-star">*</span></p>
                            <input required type="text" name="activityTitle" id="" placeholder="Activity">
                        </div>
                        <div class="add-task-input-box">
                            <p>Description <span class="required-star">*</span></p>
                            <textarea name="activityName" id="" cols="30" rows="5"
                                placeholder="Write Something about Activity"></textarea>
                        </div>
                        <div class="add-project-activity-bottom-fields">
                            <div class="add-task-input-box-double ">
                                <div class="add-task-input-box">
                                    <p>Assigned To <span class="required-star">*</span></p>
                                    <select name="activityAssignedTo" >
                                    @foreach($users as $u)
                                        <option value="{{$u->id}}">{{$u->fname}}</option>
                                    <!-- <input name="activityAssignedTo" type="text" placeholder="Adam Smith"> -->
                               
                                    @endforeach
                                    </select>
                                   
                                    </div>
                                <div class="add-task-input-box">
                                    <p>Status</p>
                                    <select name="activityAssignedStatus" id="">
                                        <option value="progress">In Progress</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="add-task-input-box-double">
                                <div class="add-task-input-box">
                                    <p>Start Date <span class="required-star">*</span></p>
                                    <input required name="activityStartDate" type="date">
                                </div>
                                <div class="add-task-input-box">
                                    <p>End Date <span class="required-star">*</span></p>
                                    <input required name="activityEndDate" type="date">
                                </div>
                            </div>
                        </div>
                        <div class="activity-task-activity-box-btn-row">
                            <button>Add Activity</button>
                            <!-- <button>Delete Activity</button> -->
                            <button type="button" class="activity-task-activity-box-btn-add-task">Add Task</button>
                        </div>
                        <div class="activity-task-inner">
                            <div class="activity-task-activity-box">
                                Task
                            </div>
                            <div class="add-task-input-box">
                                <p>Description <span class="required-star">*</span></p>
                                <textarea name="taskDescription" id="" cols="30" rows="5"
                                    placeholder="Write Something about Task"></textarea>
                            </div>
                            <div class="add-task-input-box-double">
                                <div class="add-task-input-box">
                                    <p>Assigned To <span class="required-star">*</span></p>
                                    <select>
                                        @foreach($users as $u)
                                            <option value="{{$u->id}}">{{$u->fname}}</option>
                                        @endforeach
                                    <select>
                                    <!-- <input name="taskAssignedTo" type="text" placeholder="Adam Smith"> -->
                                </div>
                                <div class="add-task-input-box">
                                    <p>Status</p>
                                    <select name="taskStatus" id="" style="background-color: #fff; opacity: 0.8;">
                                        <option value="progress">In Progress</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="add-task-input-box-double">
                                <div class="add-task-input-box">
                                    <p>Start Date <span class="required-star">*</span></p>
                                    <input name="taskStartDate" type="date">
                                </div>
                                <div class="add-task-input-box">
                                    <p>End Date <span class="required-star">*</span></p>
                                    <input name="taskEndDate" type="date">
                                </div>
                            </div>
                            <div class="activity-task-activity-box-btn-row">
                                <button type="button">Add Task</button>
                                <button>Delete Task</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-task-bottom-btns add-Project-bottom-btns">
                    <button class="page-name-heading-transparent-box page-end-back-btn">
                        Back
                    </button>
                    <button class="page-name-heading-black-box">
                        Save
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function() {
            $('#company').change(function() {
                var companyId = $(this).val();

                $.ajax({
                    url: '/get-users/' + companyId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        var usersSelect = $('#users');
                        var editors =$('#lastEdit');
                        editors.empty();
                        usersSelect.empty();
                        editors.append('<option value="">Select Last Editor</option>');
                        usersSelect.append('<option value="">Select Project  Manager</option>');
                        $.each(data, function(key, value) {
                            usersSelect.append('<option value="' + value.id + '">' + value.fname + '</option>');
                            editors.append('<option value="' + value.id + '">' + value.fname + '</option>');
                        
                        });
                    }
                });
            });
        });

    </script>
</body>

</html>