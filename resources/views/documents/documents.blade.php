@include('template.header');
<body>
    <!-- Background Layer For Filters Opening  -->
    <div class="back-transparent-layer"></div>
    <div class="content">
    @include('template.sidebar');
        <div class="right-side-content">
        @include('template.loginBar');
            <div class="page-name-heading wrap">
                <p>Documents</p>
                <div class="page-name-heading-btns">
                    <a href="./drawingDetails.html" class="page-name-heading-black-box">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0827 18.3337H5.95768C4.5674 18.3337 3.37971 17.8524 2.3946 16.8899C1.40949 15.9274 0.916627 14.751 0.916016 13.3607C0.916016 12.1691 1.27504 11.1073 1.9931 10.1753C2.71115 9.24338 3.65074 8.64755 4.81185 8.38783C5.19379 6.98227 5.95768 5.84408 7.10352 4.97324C8.24935 4.10241 9.54796 3.66699 10.9993 3.66699C12.7868 3.66699 14.3033 4.28971 15.5488 5.53516C16.7942 6.7806 17.4166 8.29677 17.416 10.0837C18.4702 10.2059 19.345 10.6605 20.0404 11.4477C20.7359 12.2348 21.0833 13.1551 21.0827 14.2087C21.0827 15.3545 20.6818 16.3286 19.88 17.131C19.0782 17.9334 18.1041 18.3343 16.9577 18.3337H11.916V11.7795L13.3827 13.2003L14.666 11.917L10.9993 8.25033L7.33268 11.917L8.61601 13.2003L10.0827 11.7795V18.3337Z"
                                fill="white" />
                        </svg>
                        Upload Drawing
                    </a>
                </div>
            </div>
            <div class="right-side-content-inner">
                <div class="right-side-content-inner-filter-row">
                    <div class="right-side-content-inner-filter-row-left">
                        <div class="right-side-content-inner-filter-row-left-single">
                            <p>Search Drawing</p>
                            <div class="documents-search-filter-container">
                                <input type="text" name="" id="" placeholder="Text">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.11628 7.62791C1.11628 11.2242 4.03163 14.1395 7.62791 14.1395C11.2242 14.1395 14.1395 11.2242 14.1395 7.62791C14.1395 4.03163 11.2242 1.11628 7.62791 1.11628C4.03163 1.11628 1.11628 4.03163 1.11628 7.62791ZM7.62791 15.2558C3.41513 15.2558 0 11.8407 0 7.62791C0 3.41513 3.41513 0 7.62791 0C11.8407 0 15.2558 3.41513 15.2558 7.62791C15.2558 9.53341 14.5571 11.2757 13.4019 12.6126L15.8365 15.0472C16.0545 15.2652 16.0545 15.6186 15.8365 15.8365C15.6186 16.0545 15.2652 16.0545 15.0472 15.8365L12.6126 13.4019C11.2757 14.5571 9.5334 15.2558 7.62791 15.2558Z"
                                        fill="#ACACB0" fill-opacity="0.8" />
                                </svg>
                            </div>
                        </div>
                        <div class="right-side-content-inner-filter-row-left-single">
                            <p>Filter By Status</p>
                            <div class="right-side-content-inner-filter-dropdown">
                                <div class="right-side-content-inner-filter-dropdown-clickable">
                                    <input type="text" placeholder="All" readonly>
                                    <svg class="right-side-content-inner-filter-dropdown-icon-down" width="17"
                                        height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L8.12719 7L15.2544 1" stroke="#181F26" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="right-side-content-inner-filter-dropdown-inner">
                                    <div class="right-side-content-inner-filter-dropdown-inner-heading">All
                                        <svg width="17" height="8" viewBox="0 0 17 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16 6.97683L8.87281 1L1.74561 6.97683" stroke="white"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="right-side-content-inner-filter-dropdown-inner-inner">
                                        <!-- <p>Unassigned</p> -->
                                        <div class="document-filter-by-status-inner-option-container">
                                            <div>
                                                <h6>Under work</h6>
                                                <h6>09</h6>
                                            </div>
                                            <div>
                                                <h6>To approval</h6>
                                                <h6>06</h6>
                                            </div>
                                            <div>
                                                <h6>Accepted</h6>
                                                <h6>04</h6>
                                            </div>
                                            <div>
                                                <h6>Rejected</h6>
                                                <h6>02</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-side-content-inner-filter-row-right">
                        <div class="right-side-content-inner-filter-hamburg">
                            <svg class="right-side-content-inner-filter-hamburg-line" width="45" height="46"
                                viewBox="0 0 45 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="45" height="46" rx="8" fill="#D9DBDE" />
                                <g clip-path="url(#clip0_2_19041)">
                                    <path
                                        d="M13.4999 33.5L13.4999 12.5C13.4999 11.6715 14.1715 11 14.9999 11C15.8284 11 16.5 11.6715 16.5 12.5L16.5 33.5C16.5 34.3284 15.8284 35 14.9999 35C14.1715 35 13.4999 34.3284 13.4999 33.5ZM21 33.5L21 12.5C21 11.6715 21.6715 11 22.4999 11C23.3284 11 24 11.6715 24 12.5L24 33.5C24 34.3284 23.3284 35 22.4999 35C21.6715 35 21 34.3284 21 33.5ZM28.5 33.5L28.5 12.5C28.5 11.6715 29.1715 11 30 11C30.8285 11 31.5 11.6715 31.5 12.5L31.5 33.5C31.5 34.3284 30.8285 35 30 35C29.1715 35 28.5 34.3284 28.5 33.5Z"
                                        fill="#181F26" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2_19041">
                                        <rect width="24" height="24" fill="white" transform="translate(10.5 11)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="right-side-content-inner-filter-hamburg-inner">
                                <div class="right-side-content-inner-filter-hamburg-inner-heading">Choose Columns
                                    <svg width="45" height="46" viewBox="0 0 45 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="45" height="46" rx="8" fill="#181F26" />
                                        <g clip-path="url(#clip0_2_19041)">
                                            <path
                                                d="M13.4999 33.5L13.4999 12.5C13.4999 11.6715 14.1715 11 14.9999 11C15.8284 11 16.5 11.6715 16.5 12.5L16.5 33.5C16.5 34.3284 15.8284 35 14.9999 35C14.1715 35 13.4999 34.3284 13.4999 33.5ZM21 33.5L21 12.5C21 11.6715 21.6715 11 22.4999 11C23.3284 11 24 11.6715 24 12.5L24 33.5C24 34.3284 23.3284 35 22.4999 35C21.6715 35 21 34.3284 21 33.5ZM28.5 33.5L28.5 12.5C28.5 11.6715 29.1715 11 30 11C30.8285 11 31.5 11.6715 31.5 12.5L31.5 33.5C31.5 34.3284 30.8285 35 30 35C29.1715 35 28.5 34.3284 28.5 33.5Z"
                                                fill="#fff" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_19041">
                                                <rect width="24" height="24" fill="white"
                                                    transform="translate(10.5 11)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="right-side-content-inner-filter-hamburg-inner-inner">
                                    <p class="right-side-content-inner-filter-hamburg-inner-subheading">
                                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15 20H3C1.89543 20 1 19.1046 1 18V2C1 0.89543 1.89543 0 3 0H15C16.1046 0 17 0.89543 17 2V18C17 19.1046 16.1046 20 15 20ZM5.47063 3.80957C5.08079 3.80957 4.76475 4.12937 4.76475 4.52386C4.76475 4.91834 5.08079 5.23814 5.47063 5.23814H13C13.3899 5.23814 13.7059 4.91834 13.7059 4.52386C13.7059 4.12937 13.3899 3.80957 13 3.80957H5.47063ZM5.47063 7.61909C5.08079 7.61909 4.76475 7.93889 4.76475 8.33338C4.76475 8.72787 5.08079 9.04767 5.47063 9.04767H13C13.3899 9.04767 13.7059 8.72787 13.7059 8.33338C13.7059 7.93889 13.3899 7.61909 13 7.61909H5.47063ZM5.47063 11.4286C5.08079 11.4286 4.76475 11.7484 4.76475 12.1429C4.76475 12.5374 5.08079 12.8572 5.47063 12.8572H8.29416C8.68401 12.8572 9.00005 12.5374 9.00005 12.1429C9.00005 11.7484 8.68401 11.4286 8.29416 11.4286H5.47063Z"
                                                fill="#181F26" />
                                        </svg>
                                        Documents
                                    </p>
                                    <div class="right-side-content-inner-filter-hamburg-inner-inner-filters">
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Drawing No.
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Yard Stick
                                            </label>
                                        </div>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Title
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Format
                                            </label>
                                        </div>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Building No.
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Edit Date
                                            </label>
                                        </div>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Floor
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Last Edited
                                            </label>
                                        </div>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Subject
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Status
                                            </label>
                                        </div>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Serial No.
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Comment
                                            </label>
                                        </div>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Revision
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Actions
                                            </label>
                                        </div>
                                    </div>
                                    <div class="right-side-content-inner-filter-hamburg-inner-inner-btns">
                                        <button
                                            class="right-side-content-inner-filter-hamburg-inner-inner-btn-close">Close</button>
                                        <button>Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-side-content-inner-filter-row-right-sortby">
                            Sort By <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2_19037)">
                                    <path d="M0 5.1742H12L6.00014 0L0 5.1742ZM12 6.80231H0L5.99986 12L12 6.80231Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2_19037">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table>
                        <th>Drawing No.</th>
                        <th>Title</th>
                        <th>Building No.</th>
                        <th>Subject</th>
                        <th>Revision</th>
                        <th>Revision Date</th>
                        <th>Edit Date</th>
                        <th>Last Edited</th>
                        <th>Status</th>
                        <th>Comment</th>
                        <th>Action</th>
                       @foreach($drawing as $item)
                        <tr>
                            <td>
                                {{$item->id}}
                            </td>
                            <td>
                                {{$item->title}}
                                <!-- PM Tool Design -->
                            </td>
                            <td>
                                {{$item->buildingNo}}
                            </td>
                            <td>
                                {{$item->subject}}
                                <!-- Architect -->
                            </td>
                            <td>
                                {{$item->revisionNo}}
                                <!-- A -->
                            </td>
                            <td>
                                {{$item->revisionDate}}
                                <!-- June 20, 2023 -->
                            </td>

                            <td>
                                {{$item->endDate}}
                                <!-- June 20, 2023 -->
                            </td>
                            <td>
                                {{$item->lastEdit}}
                                <!-- Jensen Nesse -->
                            </td>
                            <td class="document-status-box">
                                <p class="document-status-underwork">
                                {{$item->statusDrawing}}
                                </p>
                            </td>
                            <td class="table-comment-box document-table-comment">
                                <p>
                                {{$item->comment}}
                                </p>
                            </td>
                            <td class="table-action-box">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.397436" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <path
                                        d="M14.0007 16.3843L11.642 14.025L12.1133 13.5457L13.6673 15.0997V9.33301H14.334V15.0997L15.8873 13.5463L16.3593 14.025L14.0007 16.3843ZM10.4107 18.6663C10.104 18.6663 9.84798 18.5637 9.64265 18.3583C9.43687 18.1526 9.33398 17.8963 9.33398 17.5897V15.9743H10.0007V17.5897C10.0007 17.6919 10.0433 17.7859 10.1287 17.8717C10.2144 17.957 10.3084 17.9997 10.4107 17.9997H17.5907C17.6929 17.9997 17.7869 17.957 17.8727 17.8717C17.958 17.7859 18.0007 17.6919 18.0007 17.5897V15.9743H18.6673V17.5897C18.6673 17.8963 18.5647 18.1523 18.3593 18.3577C18.1535 18.5635 17.8973 18.6663 17.5907 18.6663H10.4107Z"
                                        fill="#B7A194" />
                                </svg>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.422827" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.91201 14C7.97638 14.1176 8.07107 14.2835 8.19506 14.4818C8.45332 14.8948 8.83599 15.4445 9.33339 15.9926C10.3358 17.097 11.755 18.1429 13.5254 18.1429C15.2958 18.1429 16.715 17.097 17.7174 15.9926C18.2148 15.4445 18.5975 14.8948 18.8557 14.4818C18.9797 14.2835 19.0744 14.1176 19.1388 14C19.0744 13.8823 18.9797 13.7165 18.8557 13.5182C18.5975 13.1052 18.2148 12.5555 17.7174 12.0074C16.715 10.903 15.2958 9.85714 13.5254 9.85714C11.755 9.85714 10.3358 10.903 9.33339 12.0074C8.83599 12.5555 8.45332 13.1052 8.19506 13.5182C8.07107 13.7165 7.97638 13.8823 7.91201 14ZM19.6105 14C19.9816 14.1917 19.9815 14.1918 19.9814 14.192L19.9812 14.1924L19.9807 14.1936L19.9789 14.1971L19.973 14.2091C19.968 14.2192 19.9608 14.2335 19.9514 14.2518C19.9327 14.2883 19.9053 14.3407 19.8695 14.4065C19.7978 14.5382 19.6919 14.7244 19.5528 14.9468C19.2751 15.3909 18.8626 15.984 18.3228 16.5788C17.2507 17.7601 15.6273 19 13.5254 19C11.4235 19 9.80012 17.7601 8.72803 16.5788C8.1882 15.984 7.77565 15.3909 7.49801 14.9468C7.35893 14.7244 7.25302 14.5382 7.18132 14.4065C7.14545 14.3407 7.11809 14.2883 7.09936 14.2518C7.09 14.2335 7.0828 14.2192 7.07776 14.2091L7.07184 14.1971L7.07011 14.1936L7.06955 14.1924L7.06934 14.192C7.06926 14.1918 7.06919 14.1917 7.44028 14C7.06919 13.8083 7.06926 13.8082 7.06934 13.808L7.06955 13.8076L7.07011 13.8064L7.07184 13.8029L7.07776 13.7909C7.0828 13.7808 7.09 13.7665 7.09936 13.7482C7.11809 13.7117 7.14545 13.6593 7.18132 13.5935C7.25302 13.4618 7.35893 13.2757 7.49801 13.0532C7.77565 12.6091 8.1882 12.016 8.72803 11.4212C9.80012 10.2399 11.4235 9 13.5254 9C15.6273 9 17.2507 10.2399 18.3228 11.4212C18.8626 12.016 19.2751 12.6091 19.5528 13.0532C19.6919 13.2757 19.7978 13.4618 19.8695 13.5935C19.9053 13.6593 19.9327 13.7117 19.9514 13.7482C19.9608 13.7665 19.968 13.7808 19.973 13.7909L19.9789 13.8029L19.9807 13.8064L19.9812 13.8076L19.9814 13.808C19.9815 13.8082 19.9816 13.8083 19.6105 14ZM19.6105 14L19.9816 14.1917C20.04 14.071 20.04 13.929 19.9816 13.8083L19.6105 14ZM7.44028 14L7.06919 14.1917C7.01079 14.071 7.01079 13.929 7.06919 13.8083L7.44028 14ZM13.5254 12.7143C12.838 12.7143 12.2807 13.2899 12.2807 14C12.2807 14.7101 12.838 15.2857 13.5254 15.2857C14.2128 15.2857 14.7701 14.7101 14.7701 14C14.7701 13.2899 14.2128 12.7143 13.5254 12.7143ZM11.4509 14C11.4509 12.8165 12.3797 11.8571 13.5254 11.8571C14.6711 11.8571 15.5999 12.8165 15.5999 14C15.5999 15.1835 14.6711 16.1429 13.5254 16.1429C12.3797 16.1429 11.4509 15.1835 11.4509 14Z"
                                        fill="#B7A194" />
                                </svg>
                                <svg class="forwad-doc-btn" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.448217" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.967 9.02244C15.0734 8.97683 15.1958 9.00204 15.2772 9.0863L18.9674 12.9057C19.0208 12.961 19.0508 13.0359 19.0508 13.1141C19.0508 13.1922 19.0208 13.2672 18.9674 13.3224L15.2772 17.1419C15.1958 17.2261 15.0734 17.2514 14.967 17.2057C14.8607 17.1601 14.7913 17.0527 14.7913 16.9335V14.5563C14.5449 14.5121 14.2912 14.489 14.0322 14.489C12.0212 14.489 10.3237 15.8819 9.79251 17.7871C9.75735 17.9132 9.64583 18 9.51901 18C9.3922 18 9.28068 17.9132 9.24552 17.7871C9.11866 17.3321 9.05078 16.8515 9.05078 16.355C9.05078 13.5074 11.2811 11.199 14.0322 11.199C14.2902 11.199 14.5437 11.2193 14.7913 11.2585V9.29464C14.7913 9.17547 14.8607 9.06804 14.967 9.02244ZM15.3606 11.6077C15.3611 11.6313 15.3588 11.6553 15.3536 11.6793C15.3188 11.838 15.1663 11.9374 15.013 11.9014C14.6978 11.8274 14.3696 11.7883 14.0322 11.7883C11.5955 11.7883 9.62009 13.8329 9.62009 16.355C9.62009 16.4518 9.623 16.5479 9.62872 16.6432C10.4649 15.0114 12.1229 13.8998 14.0322 13.8998C14.4123 13.8998 14.7828 13.9439 15.1389 14.0275C15.2732 14.059 15.3636 14.184 15.3606 14.3211C15.3606 14.322 15.3606 14.3228 15.3606 14.3236V16.2223L18.3636 13.1141L15.3606 10.0059V11.6077Z"
                                        fill="#B7A194" />
                                </svg>
                            </td>
                        </tr>
                        @endforeach
                      

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Comment Modal  -->
    <div class="comment-modal">
        <p class="comment-modal-heading">Comment</p>
        <p class="comment-modal-content">Outlines the details of one project, including all its
            phases
            and processes involved, in a single document. It addresses outlines the details of one
            project, including all its phases and processes involved, in a single document.</p>
        <div>
            <button class="comment-modal-ok-btn">Ok</button>
        </div>
    </div>

    <!-- Forwad to Modal -->
    <div class="forwad-doc-modal">
        <p class="forwad-doc-heading">
            <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.303 4.40379V0L18.5689 7.26584L11.303 14.5317V9.56672M11.303 4.41238C10.6421 4.26239 9.95425 4.18321 9.24792 4.18321C4.14045 4.18321 0 8.3237 0 13.4311C0 14.3225 0.126111 15.1844 0.361461 16C1.47466 12.1423 5.03181 9.32093 9.24792 9.32093C9.95425 9.32093 10.6421 9.40016 11.303 9.55008"
                    fill="white" />
            </svg>
            Forwad to
        </p>
        <div class="forwad-doc-inner modal-inner">
            <label for="">Project Manager / Client</label>
            <select>
                <option value="">Name</option>
                <option value="">Adam</option>
                <option value="">Joe</option>
            </select>
            <p class="forwad-selected-heading">Selected</p>
            <div class="forwad-selected-info">
                <span>1234</span>
                PM Tool Design
            </div>
            <div class="forwad-doc-modal-btns-row modal-double-btns-row">
                <button class="comment-modal-ok-btn">Cancel</button>
                <button class="comment-modal-ok-btn">Save</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>