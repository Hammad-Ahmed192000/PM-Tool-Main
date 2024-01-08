@php
use Illuminate\Support\Facades\DB;
@endphp
@include('template.header')
<body>
    <div class="content">
    @include('template.sidebar')
        <div class="right-side-content">
        @include('template.loginBar')
            <div class="page-name-heading wrap">
                <p><?=$page_title.' local-development'?></p>
            </div>
            <div class="right-side-content-inner padding-zero">
                <div class="addProject-individual-section">
                    <div class="add-task-inner-heading">
                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5084 14.7092V10.3039C17.5084 10.1088 17.3584 10.0038 17.2083 10.1088L12.7054 12.7054C12.6079 12.758 12.5103 12.9081 12.5103 13.0582V18.259C12.5103 18.4615 12.6604 18.5591 12.8105 18.4615L16.6079 16.2627L20.3152 18.4091L10.6567 23.985L10.6341 24L10.6041 23.985L4.06754 20.2026L0.968105 18.4015L4.65296 16.2626L8.45779 18.4615C8.60783 18.5591 8.75793 18.4091 8.70539 18.2139V13.0056C8.70539 12.8555 8.65291 12.758 8.50281 12.6604L4 10.0563C3.90244 10.0038 3.69981 10.1088 3.69981 10.2589V14.6567L0 16.8105V5.606L9.7561 0V4.30019L5.95122 6.50657C5.80113 6.55159 5.80113 6.80675 5.95122 6.85178L10.454 9.45591C10.5591 9.50844 10.7092 9.55347 10.8593 9.45591L15.3621 6.85178C15.5122 6.80675 15.5122 6.60413 15.3621 6.50657L11.5572 4.30019V0L21.2158 5.606V16.788L17.5084 14.7092Z"
                                fill="#181F26" />
                        </svg>

                        COMPANY DETAILS
                    </div>
                    <form action="{{route('CompaniesStore')}}" method="post">
                        @csrf
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Company Name <span class="required-star">*</span></p>
                            <input type="text" required name="companyName" id="" placeholder="Maadi Tech & Co. Private, Ltd.">
                        </div>
                        <div class="add-task-input-box">
                            <p>Organization No. <span class="required-star">*</span></p>
                            <input type="text" required name="orgNo" id="" placeholder="Organization Number">
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Company Phone No. <span class="required-star">*</span></p>
                            <input type="text" required name="phone" id="" placeholder="+1(123) 0000-0000">
                        </div>
                        <div class="add-task-input-box">
                            <p>Company Email <span class="required-star">*</span> </p>
                            <input type="email" name="email" required id="" placeholder="john.doe@email.com">
                        </div>
                    </div>
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Company Invoice Address <span class="required-star">*</span></p>
                            <input type="text" name="invoice" required id="" placeholder="Company Invoice Address">
                        </div>
                        <div class="add-task-input-box">
                            <p>Company Address</p>
                            <input type="text"  name="address" required placeholder="Unit 6 Centrepoint , Liosban Industrial Estate">
                        </div>
                    </div>
                    <div class="add-task-input-box-half">
                        <div class="add-task-input-box">
                            <p>Type <span class="required-star">*</span></p>
                            @php $types = DB::table('roles')->where('type','company')->get(); 
                           
                            @endphp 
                           
                            <select name="type" id="" required>
                            @foreach($types as $item)
                                <option value="{{$item->id}}">{{$item->role}}</option>

                            @endforeach
                            </select>

                           
                        </div>
                    </div>
                </div>
                <div class="addProject-individual-section">
                    <div class="add-task-inner-heading">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_533_9852)">
                                <path
                                    d="M8.82319 9.40031C11.2453 9.40031 13.2089 7.29598 13.2089 4.70015C13.2089 2.10433 11.2453 0 8.82319 0C6.40104 0 4.4375 2.10433 4.4375 4.70015C4.4375 7.29598 6.40104 9.40031 8.82319 9.40031Z"
                                    fill="black" />
                                <path
                                    d="M16.1216 13.3561C15.1538 11.9554 13.6045 11.0491 11.9078 10.9193L9.54862 13.8857C9.20005 14.3474 8.44646 14.3473 8.09795 13.8857L5.72636 10.9038C2.81052 11.1296 0.504771 13.6122 0.503284 16.6313L0.500977 20.7931H2.61123V18.495H4.46482V20.7931H12.4488C12.3375 20.3124 12.2815 19.8185 12.2815 19.3149C12.2814 16.7033 13.8125 14.3963 16.1216 13.3561ZM18.8169 14.63C16.2353 14.63 14.135 16.7316 14.135 19.3149C14.135 21.8982 16.2353 23.9999 18.8169 23.9999C21.3986 23.9999 23.4989 21.8982 23.4989 19.3149C23.4988 16.7316 21.3985 14.63 18.8169 14.63ZM19.6796 22.6249H17.9817V18.7096H19.6796V22.6249ZM18.8169 18.1363C18.2276 18.1363 17.75 17.6592 17.75 17.0706C17.75 16.4821 18.2276 16.0049 18.8169 16.0049C19.4062 16.0049 19.8839 16.4821 19.8839 17.0706C19.8839 17.6592 19.4062 18.1363 18.8169 18.1363Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_533_9852">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        CUSTOMER DEATILS
                    </div>
                    <!-- <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Customer Name <span class="required-star">*</span></p>
                            <select name="" id="">
                                <option value="">Adam Smith</option>
                                <option value="">John</option>
                                <option value="">Doe</option>
                                <option value="">Adam</option>
                            </select>
                        </div> 
                       
                    </div> -->
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                                <p>Customer Name<span class="required-star">*</span></p>
                                <div class="add-task-input-box">
                                    <input type="text" required name="customerName" id="" placeholder="Adam Smith">
                                </div>
                        </div>
                        <div class="add-task-input-box">
                            <p>Customer Address <span class="required-star">*</span></p>
                            <div class="add-task-input-box">
                                <input type="text"  required name="customerAddress" id=""
                                    placeholder="Unit 6 Centrepoint , Liosban Industrial Estate">
                            </div>
                        </div>
                    </div>
                       
                    
                    <div class="add-task-input-box-double">
                        <div class="add-task-input-box">
                            <p>Customer Phone No. <span class="required-star">*</span></p>
                            <div class="add-task-input-box">
                                <input type="text" required name="customerPhone" id="" placeholder="+1(123) 0000-0000">
                            </div>
                        </div>
                        <div class="add-task-input-box">
                            <p>Customer Email <span class="required-star">*</span></p>
                            <div class="add-task-input-box">
                                <input type="text"required  name="customerEmail" id="" placeholder="john.doe@email.com">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="add-task-bottom-btns add-Project-bottom-btns">
                    <button class="page-name-heading-transparent-box">
                        Back
                    </button>
                    <button class="page-name-heading-black-box" type="submit">
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