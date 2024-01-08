@include('template.header')
<body>
    <div class="content">
    @include('template.sidebar')
        <div class="right-side-content">
        @include('template.loginBar')
            <div class="page-name-heading wrap">
                <p><?=$page_title;?></p>
            </div>
            <div class="right-side-content-inner padding-zero">
                <div class="addProject-individual-section">
                    <div class="add-task-inner-heading">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29 14.4926C29 19.0035 26.9402 23.0346 23.7065 25.6998C21.2037 27.7523 17.9995 28.9926 14.5 28.9926C11.0079 28.9926 7.80372 27.7597 5.30092 25.6998C2.06721 23.042 0 19.0109 0 14.4926C0 6.48955 6.49695 0 14.5 0C22.5104 0 29 6.48955 29 14.4926Z"
                                fill="black" />
                            <path opacity="0.7"
                                d="M29 14.4926C29 19.0035 26.9402 23.0346 23.7065 25.6998C21.2037 27.7523 17.9995 28.9926 14.5 28.9926C11.0079 28.9926 7.80372 27.7597 5.30092 25.6998C2.06721 23.042 0 19.0109 0 14.4926C0 6.48955 6.49695 0 14.5 0C22.5104 0 29 6.48955 29 14.4926Z"
                                fill="white" />
                            <path
                                d="M14.4971 18.3228C17.3648 18.3228 19.6895 15.9981 19.6895 13.1304C19.6895 10.2627 17.3648 7.93799 14.4971 7.93799C11.6294 7.93799 9.30469 10.2627 9.30469 13.1304C9.30469 15.9981 11.6294 18.3228 14.4971 18.3228Z"
                                fill="white" />
                            <path
                                d="M23.7024 25.7001C21.1996 27.7525 17.9954 28.9928 14.496 28.9928C11.0039 28.9928 7.79967 27.7599 5.29688 25.7001C6.65533 21.7207 9.45344 18.7823 12.8127 18.0366C13.359 17.9185 13.9201 17.8521 14.496 17.8521C15.0718 17.8521 15.6329 17.9185 16.1793 18.0366C19.5459 18.7823 22.3366 21.7207 23.7024 25.7001Z"
                                fill="white" />
                        </svg>
                        USER DETAILS
                    </div>
                    <form method="post" action ="{{route('usersStore')}}">
                        @csrf
                        <div class="add-task-input-box-double">
                            <div class="add-task-input-box">
                                <p>First Name <span class="required-star">*</span></p>
                                <input required type="text" name="fname" id="" placeholder="Adam">
                            </div>
                            <div class="add-task-input-box">
                                <p>Last Name <span class="required-star">*</span></p>
                                <input required type="text" name="lname" id="" placeholder="Smith">
                            </div>
                        </div>
                        <div class="add-task-input-box-double">
                            <div class="add-task-input-box">
                                <p>Phone No. <span class="required-star">*</span></p>
                                <input required type="text" name="phone" id="" placeholder="+1(123) 0000-0000">
                            </div>
                            <div class="add-task-input-box">
                                <p>Email <span class="required-star">*</span> </p>
                                <input required type="email" name="email" id="" placeholder="adam.smith@email.com">
                            </div>
                        </div>
                        <div class="add-task-input-box-double">
                            <div class="add-task-input-box">
                                <p>Company Name <span class="required-star">*</span></p>
                                @php $companies = DB::table('companies')->get(); 
                                @endphp 
                                <select name="companyId" id="" required>
                                @foreach($companies as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                                </select>
                                <!-- <input type="text" name="company" id="" placeholder="Maadi Tech & Co. Private, Ltd."> -->
                            </div>
                            <div class="add-task-input-box">
                                <p>Role</p>
                                @php $types = DB::table('roles')->where('type','user')->whereNotIn('role', ['owner'])->get(); 
                                @endphp 
                                <select name="role" id="" required>
                                @foreach($types as $item)
                                    <option value="{{$item->id}}">{{$item->role}}</option>

                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="add-task-input-box-half">
                            <div class="add-task-input-box">
                                <p>Status <span class="required-star">*</span></p>
                                <select name="status" id="">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <!-- <option value="">Verified</option> -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="add-task-bottom-btns add-Project-bottom-btns">
                        <button type="submit" class="page-name-heading-transparent-box">
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
    <script src="script.js"></script>
</body>

</html>