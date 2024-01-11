@php 

@endphp
@include('template.header');
<body>
    <!-- Background Layer For Filters Opening  -->
    <div class="back-transparent-layer"></div>
    <div class="content">
        <div class="sidebar">
            <div>
                <div class="sidebar-cross-icon-row">
                    <svg class="sidebar-cross-icon" xmlns="http://www.w3.org/2000/svg" height="16" width="12"
                        viewBox="0 0 384 512">
                        <path
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </div>
                <img src="./images/logo.svg" alt="">
                <ul>
                    <li>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_180_316" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 10C8.65685 10 10 8.65685 10 7C10 5.34315 8.65685 4 7 4C5.34315 4 4 5.34315 4 7C4 8.65685 5.34315 10 7 10ZM17 20C18.6569 20 20 18.6569 20 17C20 15.3431 18.6569 14 17 14C15.3431 14 14 15.3431 14 17C14 18.6569 15.3431 20 17 20ZM14 6C14 4.89543 14.8954 4 16 4H18C19.1046 4 20 4.89543 20 6V8C20 9.10457 19.1046 10 18 10H16C14.8954 10 14 9.10457 14 8V6ZM6 14C4.89543 14 4 14.8954 4 16V18C4 19.1046 4.89543 20 6 20H8C9.10457 20 10 19.1046 10 18V16C10 14.8954 9.10457 14 8 14H6Z"
                                        fill="#28303F" />
                                </mask>
                                <g mask="url(#mask0_180_316)">
                                    <rect width="24" height="24" fill="#8F9095" />
                                </g>
                            </svg>
                            Dashboard
                        </div>
                    </li>
                    <li>
                        <div class="sidebar-option-main">
                            <div>
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5084 14.7092V10.3039C17.5084 10.1088 17.3584 10.0038 17.2083 10.1088L12.7054 12.7054C12.6079 12.758 12.5103 12.9081 12.5103 13.0582V18.259C12.5103 18.4615 12.6604 18.5591 12.8105 18.4615L16.6079 16.2627L20.3152 18.4091L10.6567 23.985L10.6341 24L10.6041 23.985L4.06754 20.2026L0.968105 18.4015L4.65296 16.2626L8.45779 18.4615C8.60783 18.5591 8.75793 18.4091 8.70539 18.2139V13.0056C8.70539 12.8555 8.65291 12.758 8.50281 12.6604L4 10.0563C3.90244 10.0038 3.69981 10.1088 3.69981 10.2589V14.6567L0 16.8105V5.606L9.7561 0V4.30019L5.95122 6.50657C5.80113 6.55159 5.80113 6.80675 5.95122 6.85178L10.454 9.45591C10.5591 9.50844 10.7092 9.55347 10.8593 9.45591L15.3621 6.85178C15.5122 6.80675 15.5122 6.60413 15.3621 6.50657L11.5572 4.30019V0L21.2158 5.606V16.788L17.5084 14.7092Z"
                                        fill="#8F9095" />
                                </svg>
                                Companies
                            </div>
                            <svg class="sidebar-caret-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2_9387" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41438 9.53151C6.67313 9.20806 7.1451 9.15562 7.46855 9.41438L12 13.0396L16.5315 9.41438C16.855 9.15562 17.3269 9.20806 17.5857 9.53151C17.8444 9.85495 17.792 10.3269 17.4685 10.5857L12.4685 14.5857C12.1946 14.8048 11.8054 14.8048 11.5315 14.5857L6.53151 10.5857C6.20806 10.3269 6.15562 9.85495 6.41438 9.53151Z"
                                        fill="#28303F" />
                                </mask>
                                <g mask="url(#mask0_2_9387)">
                                    <rect width="24" height="24" fill="#8F9095" />
                                </g>
                            </svg>
                        </div>
                        <div class="sidebar-option-dropdown">
                            <a href="./companies.html">
                                Companies List
                            </a>
                            <a href="./addCompany.html">
                                Add Company
                            </a>
                        </div>
                    </li>
                    <li class="sidebar-active-page">
                        <div class="sidebar-option-main">
                            <div>
                                <svg class="sidebar-option-back-shadow" xmlns="http://www.w3.org/2000/svg" width="73"
                                    height="48" viewBox="0 0 73 48" fill="none">
                                    <g opacity="0.3" filter="url(#filter0_f_533_17777)">
                                        <circle cx="19" cy="12" r="38" fill="url(#paint0_radial_533_17777)" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_533_17777" x="-35" y="-42" width="108" height="108"
                                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                result="shape" />
                                            <feGaussianBlur stdDeviation="8"
                                                result="effect1_foregroundBlur_533_17777" />
                                        </filter>
                                        <radialGradient id="paint0_radial_533_17777" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(19 12) rotate(90) scale(38)">
                                            <stop stop-color="#E0FDFF" />
                                            <stop offset="1" stop-color="white" stop-opacity="0.04" />
                                        </radialGradient>
                                    </defs>
                                </svg>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.9778 1.76804H16.7698V0.640039C16.7698 0.480909 16.7066 0.328297 16.594 0.215775C16.4815 0.103253 16.3289 0.0400391 16.1698 0.0400391H13.5538C13.3947 0.0400391 13.242 0.103253 13.1295 0.215775C13.017 0.328297 12.9538 0.480909 12.9538 0.640039V1.76804H7.04978V0.640039C7.04978 0.480909 6.98657 0.328297 6.87404 0.215775C6.76152 0.103253 6.60891 0.0400391 6.44978 0.0400391H3.83378C3.67465 0.0400391 3.52204 0.103253 3.40952 0.215775C3.29699 0.328297 3.23378 0.480909 3.23378 0.640039V1.76804H1.02578C0.866651 1.76804 0.714039 1.83125 0.601517 1.94378C0.488995 2.0563 0.425781 2.20891 0.425781 2.36804V19.36C0.425781 19.5192 0.488995 19.6718 0.601517 19.7843C0.714039 19.8968 0.866651 19.96 1.02578 19.96H18.9778C19.1369 19.96 19.2895 19.8968 19.402 19.7843C19.5146 19.6718 19.5778 19.5192 19.5778 19.36V2.36804C19.5778 2.20891 19.5146 2.0563 19.402 1.94378C19.2895 1.83125 19.1369 1.76804 18.9778 1.76804ZM14.1538 1.24004H15.5698V2.84804H14.1538V1.24004ZM4.43378 1.24004H5.84978V2.84804H4.43378V1.24004ZM7.84178 16.84C7.84178 16.9992 7.77857 17.1518 7.66604 17.2643C7.55352 17.3768 7.40091 17.44 7.24178 17.44H4.36178C4.20265 17.44 4.05004 17.3768 3.93752 17.2643C3.82499 17.1518 3.76178 16.9992 3.76178 16.84V14.2C3.76178 14.0409 3.82499 13.8883 3.93752 13.7758C4.05004 13.6633 4.20265 13.6 4.36178 13.6H7.24178C7.32057 13.6 7.39859 13.6156 7.47139 13.6457C7.54419 13.6759 7.61033 13.7201 7.66604 13.7758C7.72176 13.8315 7.76596 13.8976 7.79611 13.9704C7.82626 14.0432 7.84178 14.1212 7.84178 14.2V16.84ZM7.84178 11.56C7.84178 11.6388 7.82626 11.7169 7.79611 11.7896C7.76596 11.8624 7.72176 11.9286 7.66604 11.9843C7.61033 12.04 7.54419 12.0842 7.47139 12.1144C7.39859 12.1445 7.32057 12.16 7.24178 12.16H4.36178C4.20265 12.16 4.05004 12.0968 3.93752 11.9843C3.82499 11.8718 3.76178 11.7192 3.76178 11.56V8.92004C3.76178 8.76091 3.82499 8.6083 3.93752 8.49577C4.05004 8.38325 4.20265 8.32004 4.36178 8.32004H7.24178C7.32057 8.32004 7.39859 8.33556 7.47139 8.36571C7.54419 8.39586 7.61033 8.44006 7.66604 8.49577C7.72176 8.55149 7.76596 8.61763 7.79611 8.69043C7.82626 8.76322 7.84178 8.84125 7.84178 8.92004V11.56ZM16.2418 16.12H9.76178V14.92H16.2418V16.12ZM16.2418 10.84H9.76178V9.64004H16.2418V10.84ZM18.3778 5.68004H1.62578V2.96804H3.23378V3.42404C3.23378 3.58317 3.29699 3.73578 3.40952 3.8483C3.52204 3.96082 3.67465 4.02404 3.83378 4.02404H6.44978C6.60891 4.02404 6.76152 3.96082 6.87404 3.8483C6.98657 3.73578 7.04978 3.58317 7.04978 3.42404V2.96804H12.9538V3.42404C12.9538 3.58317 13.017 3.73578 13.1295 3.8483C13.242 3.96082 13.3947 4.02404 13.5538 4.02404H16.1698C16.3289 4.02404 16.4815 3.96082 16.594 3.8483C16.7066 3.73578 16.7698 3.58317 16.7698 3.42404V2.96804H18.3778V5.68004Z"
                                        fill="#8F9095" />
                                </svg>
                                Project List
                            </div>
                            <svg class="sidebar-caret-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2_9387" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41438 9.53151C6.67313 9.20806 7.1451 9.15562 7.46855 9.41438L12 13.0396L16.5315 9.41438C16.855 9.15562 17.3269 9.20806 17.5857 9.53151C17.8444 9.85495 17.792 10.3269 17.4685 10.5857L12.4685 14.5857C12.1946 14.8048 11.8054 14.8048 11.5315 14.5857L6.53151 10.5857C6.20806 10.3269 6.15562 9.85495 6.41438 9.53151Z"
                                        fill="#28303F" />
                                </mask>
                                <g mask="url(#mask0_2_9387)">
                                    <rect width="24" height="24" fill="#8F9095" />
                                </g>
                            </svg>
                        </div>
                        <div class="sidebar-option-dropdown sidebar-option-dropdown-active">
                            <a href="./projects.html">
                                Projects
                            </a>
                            <a href="./projectList.html">
                                Card View
                            </a>
                            <a href="#">
                                Timeline View
                            </a>
                            <a href="./addProject.html">
                                Add Project
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="sidebar-option-main">
                            <div>
                                <svg width="23" height="20" viewBox="0 0 23 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.5 3.49967H10.5133L8.48 1.46634C8.07333 1.05301 7.52667 0.833008 6.94667 0.833008H1.5C0.673333 0.833008 0 1.50634 0 2.33301V17.6663C0 18.493 0.673333 19.1663 1.5 19.1663H21.5C22.3267 19.1663 23 18.493 23 17.6663V4.99967C23 4.17301 22.3267 3.49967 21.5 3.49967ZM21.3333 6.83301H1.66667V2.49967H6.94667C7.08 2.49967 7.20667 2.55301 7.3 2.64634L9.58 4.91967C9.73333 5.07301 9.94667 5.16634 10.1667 5.16634H21.3333V6.83301Z"
                                        fill="#8F9095" />
                                </svg>
                                Projects
                            </div>
                            <svg class="sidebar-caret-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2_9387" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41438 9.53151C6.67313 9.20806 7.1451 9.15562 7.46855 9.41438L12 13.0396L16.5315 9.41438C16.855 9.15562 17.3269 9.20806 17.5857 9.53151C17.8444 9.85495 17.792 10.3269 17.4685 10.5857L12.4685 14.5857C12.1946 14.8048 11.8054 14.8048 11.5315 14.5857L6.53151 10.5857C6.20806 10.3269 6.15562 9.85495 6.41438 9.53151Z"
                                        fill="#28303F" />
                                </mask>
                                <g mask="url(#mask0_2_9387)">
                                    <rect width="24" height="24" fill="#8F9095" />
                                </g>
                            </svg>
                        </div>
                        <div class="sidebar-option-dropdown">
                            <a href="./folders.html">
                                Folders
                            </a>
                            <a href="./documents.html">
                                Documents
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="sidebar-option-main">
                            <div>
                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 1.55625C0 0.696757 0.707817 0 1.58095 0H15.4933C16.3665 0 17.0743 0.696757 17.0743 1.55625V18.3638C17.0743 19.2232 16.3665 19.92 15.4933 19.92H1.58095C0.707817 19.92 0 19.2232 0 18.3638V1.55625ZM6.7981 4.66875C6.7981 4.32495 7.08122 4.04625 7.43048 4.04625H13.9914C14.3407 4.04625 14.6238 4.32495 14.6238 4.66875C14.6238 5.01255 14.3407 5.29125 13.9914 5.29125H7.43048C7.08122 5.29125 6.7981 5.01255 6.7981 4.66875ZM2.68762 3.42375C2.60031 3.42375 2.52952 3.49343 2.52952 3.57938V5.91375C2.52952 5.9997 2.60031 6.06938 2.68762 6.06938H5.05905C5.14636 6.06938 5.21714 5.9997 5.21714 5.91375V3.57938C5.21714 3.49343 5.14636 3.42375 5.05905 3.42375H2.68762ZM6.7981 15.7959C6.7981 15.4521 7.08122 15.1734 7.43048 15.1734H13.9914C14.3407 15.1734 14.6238 15.4521 14.6238 15.7959C14.6238 16.1397 14.3407 16.4184 13.9914 16.4184H7.43048C7.08122 16.4184 6.7981 16.1397 6.7981 15.7959ZM2.68762 14.5509C2.60031 14.5509 2.52952 14.6206 2.52952 14.7066V17.0409C2.52952 17.1269 2.60031 17.1966 2.68762 17.1966H5.05905C5.14636 17.1966 5.21714 17.1269 5.21714 17.0409V14.7066C5.21714 14.6206 5.14636 14.5509 5.05905 14.5509H2.68762ZM6.7981 10.4269C6.7981 10.0831 7.08122 9.80437 7.43048 9.80437H13.9914C14.3407 9.80437 14.6238 10.0831 14.6238 10.4269C14.6238 10.7707 14.3407 11.0494 13.9914 11.0494H7.43048C7.08122 11.0494 6.7981 10.7707 6.7981 10.4269ZM5.85597 9.38032C5.96731 9.24789 5.94851 9.05169 5.81397 8.94209C5.67944 8.83249 5.48013 8.851 5.36879 8.98343L3.68563 10.9855L2.74527 10.1215C2.6176 10.0042 2.41752 10.011 2.29837 10.1367C2.17922 10.2624 2.18612 10.4593 2.31378 10.5766L3.74485 11.8914L5.85597 9.38032Z"
                                        fill="#8F9095" fill-opacity="0.8" />
                                </svg>
                                Tasks
                            </div>
                            <svg class="sidebar-caret-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2_9387" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41438 9.53151C6.67313 9.20806 7.1451 9.15562 7.46855 9.41438L12 13.0396L16.5315 9.41438C16.855 9.15562 17.3269 9.20806 17.5857 9.53151C17.8444 9.85495 17.792 10.3269 17.4685 10.5857L12.4685 14.5857C12.1946 14.8048 11.8054 14.8048 11.5315 14.5857L6.53151 10.5857C6.20806 10.3269 6.15562 9.85495 6.41438 9.53151Z"
                                        fill="#28303F" />
                                </mask>
                                <g mask="url(#mask0_2_9387)">
                                    <rect width="24" height="24" fill="#8F9095" />
                                </g>
                            </svg>
                        </div>
                        <div class="sidebar-option-dropdown">
                            <a href="./tasks.html">
                                Task List
                            </a>
                            <a href="./addTask.html">
                                Add Task
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="sidebar-option-main">
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_2_9458" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="24" height="24">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11ZM12 21C15.866 21 19 19.2091 19 17C19 14.7909 15.866 13 12 13C8.13401 13 5 14.7909 5 17C5 19.2091 8.13401 21 12 21Z"
                                            fill="#28303F" />
                                    </mask>
                                    <g mask="url(#mask0_2_9458)">
                                        <rect width="24" height="24" fill="#8F9095" />
                                    </g>
                                </svg>
                                Users
                            </div>
                            <svg class="sidebar-caret-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2_9387" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.41438 9.53151C6.67313 9.20806 7.1451 9.15562 7.46855 9.41438L12 13.0396L16.5315 9.41438C16.855 9.15562 17.3269 9.20806 17.5857 9.53151C17.8444 9.85495 17.792 10.3269 17.4685 10.5857L12.4685 14.5857C12.1946 14.8048 11.8054 14.8048 11.5315 14.5857L6.53151 10.5857C6.20806 10.3269 6.15562 9.85495 6.41438 9.53151Z"
                                        fill="#28303F" />
                                </mask>
                                <g mask="url(#mask0_2_9387)">
                                    <rect width="24" height="24" fill="#8F9095" />
                                </g>
                            </svg>
                        </div>
                        <div class="sidebar-option-dropdown">
                            <a href="./users.html">
                                User List
                            </a>
                            <a href="./addUsers.html">
                                Add User
                            </a>
                        </div>
                    </li>
                    <li class="single-sidebar-option">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2_9473" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="24" height="24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.1515 4H12.8485C13.7857 4 14.5455 4.71634 14.5455 5.6C14.5455 6.61122 15.6274 7.25412 16.5156 6.77065L16.6058 6.72154C17.4174 6.27972 18.4553 6.54192 18.9239 7.30719L19.7724 8.69283C20.241 9.45809 19.9629 10.4366 19.1512 10.8785C18.2627 11.3622 18.2627 12.6378 19.1512 13.1215C19.9629 13.5634 20.241 14.5419 19.7724 15.3072L18.9239 16.6928C18.4553 17.4581 17.4174 17.7203 16.6058 17.2785L16.5156 17.2294C15.6274 16.7459 14.5455 17.3888 14.5455 18.4C14.5455 19.2837 13.7857 20 12.8485 20H11.1515C10.2143 20 9.45454 19.2837 9.45454 18.4C9.45454 17.3888 8.37259 16.7459 7.48444 17.2294L7.39424 17.2785C6.58258 17.7203 5.54473 17.4581 5.07612 16.6928L4.22763 15.3072C3.75903 14.5419 4.03712 13.5634 4.84877 13.1215C5.73734 12.6378 5.73734 11.3622 4.84877 10.8785C4.03712 10.4366 3.75903 9.45808 4.22764 8.69281L5.07612 7.30717C5.54473 6.54191 6.58259 6.27971 7.39424 6.72153L7.48444 6.77064C8.37259 7.25411 9.45454 6.61121 9.45454 5.6C9.45454 4.71634 10.2143 4 11.1515 4ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3432 9 9.00001 10.3431 9.00001 12C9.00001 13.6569 10.3432 15 12 15Z"
                                        fill="#28303F" />
                                </mask>
                                <g mask="url(#mask0_2_9473)">
                                    <rect width="24" height="24" fill="#8F9095" />
                                </g>
                            </svg>
                            Settings
                        </div>
                    </li>
                </ul>
            </div>
            <div>
                <div class="sidebar-user-info">
                    <p>E</p>
                    <p>Elveria Buket</p>
                </div>
            </div>
        </div>
        <div class="right-side-content">
            <header class="wrap">
                <svg class="hamburg-lines" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                    viewBox="0 0 448 512">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>

                <!-- <div class="header-search-row">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.75 11.5C2.75 16.3325 6.66751 20.25 11.5 20.25C16.3325 20.25 20.25 16.3325 20.25 11.5C20.25 6.66751 16.3325 2.75 11.5 2.75C6.66751 2.75 2.75 6.66751 2.75 11.5ZM11.5 21.75C5.83908 21.75 1.25 17.1609 1.25 11.5C1.25 5.83908 5.83908 1.25 11.5 1.25C17.1609 1.25 21.75 5.83908 21.75 11.5C21.75 14.0605 20.8111 16.4017 19.2589 18.1982L22.5303 21.4697C22.8232 21.7626 22.8232 22.2374 22.5303 22.5303C22.2374 22.8232 21.7626 22.8232 21.4697 22.5303L18.1982 19.2589C16.4017 20.8111 14.0605 21.75 11.5 21.75Z"
                            fill="#ACACB0" fill-opacity="0.8" />
                    </svg>
                    <input type="text" placeholder="Search companies, projects etc">
                </div> -->
                <div class="header-user-box">
                    <img class="header-user-dp" src="./images/user-dp.svg" alt="">
                    <div>
                        <p>Elveria Buket</p>
                        <p>elveria1@gmail.com</p>
                    </div>
                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.414376 0.531506C0.673133 0.20806 1.1451 0.155619 1.46855 0.414376L6.00003 4.03956L10.5315 0.414376C10.855 0.155619 11.3269 0.20806 11.5857 0.531506C11.8444 0.854953 11.792 1.32692 11.4685 1.58568L6.46855 5.58568C6.19464 5.80481 5.80542 5.80481 5.53151 5.58568L0.531506 1.58568C0.20806 1.32692 0.155619 0.854953 0.414376 0.531506Z"
                            fill="#181F26" />
                    </svg>
                    <div class="header-user-box-profile-info">
                        <ul>
                            <li>
                                <a href=".">My Company</a>
                            </li>
                            <li>
                                <a href=".">My Profile</a>
                            </li>
                            <li>
                                <a href=".">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="page-name-heading wrap">
                <p>Projects</p>
                <div class="page-name-heading-btns">
                    <a href="./addProject.html" class="page-name-heading-black-box width-auto">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_2_9362" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="22" height="22">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6875 5.5C11.6875 5.1203 11.3797 4.8125 11 4.8125C10.6203 4.8125 10.3125 5.1203 10.3125 5.5V10.3125H5.5C5.1203 10.3125 4.8125 10.6203 4.8125 11C4.8125 11.3797 5.1203 11.6875 5.5 11.6875H10.3125V16.5C10.3125 16.8797 10.6203 17.1875 11 17.1875C11.3797 17.1875 11.6875 16.8797 11.6875 16.5V11.6875H16.5C16.8797 11.6875 17.1875 11.3797 17.1875 11C17.1875 10.6203 16.8797 10.3125 16.5 10.3125H11.6875V5.5Z"
                                    fill="#28303F" />
                            </mask>
                            <g mask="url(#mask0_2_9362)">
                                <rect width="22" height="22" fill="white" />
                            </g>
                        </svg>
                        Add New Project
                    </a>
                </div>
            </div>
            <div class="right-side-content-inner">
                <div class="right-side-content-inner-filter-row">
                    <div class="right-side-content-inner-filter-row-left">
                        <!-- <div class="right-side-content-inner-filter-row-left-single">
                            <p>Filter By Name</p>
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
                                        <p>Unassigned</p>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Maadi Innovative Website
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Maadi Innovative Website
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Last Few Words Design
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Kendra Conn Website
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="right-side-content-inner-filter-row-left-single">
                            <p>Search By Name</p>
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
                        <div class="right-side-content-inner-filter-row-left-single second-filter">
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
                                        <p>Unassigned</p>
                                        <div>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                In Progress
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                To Do
                                            </label>
                                            <label for="">
                                                <input type="checkbox" name="" id="">
                                                Done
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-side-content-inner-filter-row-left-single single-filter-box">
                            <p></p>
                            <div>
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.5 0.75H11C12.0484 0.75 12.9293 1.46706 13.1791 2.4375H14.75C15.0607 2.4375 15.3125 2.68934 15.3125 3C15.3125 3.31066 15.0607 3.5625 14.75 3.5625H13.1791C12.9293 4.53294 12.0484 5.25 11 5.25H9.5C8.25736 5.25 7.25 4.24264 7.25 3C7.25 1.75736 8.25736 0.75 9.5 0.75ZM1.25 2.4375C0.93934 2.4375 0.6875 2.68934 0.6875 3C0.6875 3.31066 0.93934 3.5625 1.25 3.5625H5C5.31066 3.5625 5.5625 3.31066 5.5625 3C5.5625 2.68934 5.31066 2.4375 5 2.4375H1.25ZM11 8.4375C10.6893 8.4375 10.4375 8.68934 10.4375 9C10.4375 9.31066 10.6893 9.5625 11 9.5625H14.75C15.0607 9.5625 15.3125 9.31066 15.3125 9C15.3125 8.68934 15.0607 8.4375 14.75 8.4375H11ZM6.5 6.75H5C3.95159 6.75 3.07066 7.46706 2.82088 8.4375H1.25C0.93934 8.4375 0.6875 8.68934 0.6875 9C0.6875 9.31066 0.93934 9.5625 1.25 9.5625H2.82088C3.07066 10.5329 3.95159 11.25 5 11.25H6.5C7.74264 11.25 8.75 10.2426 8.75 9C8.75 7.75736 7.74264 6.75 6.5 6.75Z"
                                        fill="#181F26" />
                                </svg>
                                Filters
                            </div>
                        </div>
                    </div>
                    <div class="right-side-content-inner-filter-row-right">
                        <div class="right-side-content-inner-filter-hamburg" style="position: static;">
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
                            <div class="right-side-content-inner-filter-hamburg-inner  project-page-column-filter">

                                <div class="right-side-content-inner-filter-hamburg-inner-heading">Choose Columns
                                    <svg class="project-choose-column-cross-btn" width="26" height="26"
                                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.2654 5.73527C20.6884 6.15834 20.6884 6.84427 20.2654 7.26733L7.26538 20.2673C6.84231 20.6904 6.15638 20.6904 5.73332 20.2673C5.31025 19.8443 5.31025 19.1583 5.73332 18.7353L18.7333 5.73527C19.1564 5.3122 19.8423 5.3122 20.2654 5.73527Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.73332 5.73527C6.15638 5.3122 6.84231 5.3122 7.26538 5.73527L20.2654 18.7353C20.6884 19.1583 20.6884 19.8443 20.2654 20.2673C19.8423 20.6904 19.1564 20.6904 18.7333 20.2673L5.73332 7.26733C5.31025 6.84427 5.31025 6.15834 5.73332 5.73527Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div class="right-side-content-inner-filter-hamburg-inner-inner">
                                    <div class="project-page-column-filter-inner">
                                        <div class="project-page-column-filter-inner-col">
                                            <p class="right-side-content-inner-filter-hamburg-inner-subheading">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.552 1.728H16.344V0.6C16.344 0.44087 16.2808 0.288258 16.1683 0.175736C16.0557 0.0632141 15.9031 0 15.744 0H13.128C12.9689 0 12.8163 0.0632141 12.7037 0.175736C12.5912 0.288258 12.528 0.44087 12.528 0.6V1.728H6.624V0.6C6.624 0.44087 6.56078 0.288258 6.44826 0.175736C6.33574 0.0632141 6.18313 0 6.024 0H3.408C3.24887 0 3.09626 0.0632141 2.98374 0.175736C2.87121 0.288258 2.808 0.44087 2.808 0.6V1.728H0.6C0.44087 1.728 0.288258 1.79121 0.175736 1.90374C0.0632141 2.01626 0 2.16887 0 2.328V19.32C0 19.4791 0.0632141 19.6317 0.175736 19.7443C0.288258 19.8568 0.44087 19.92 0.6 19.92H18.552C18.7111 19.92 18.8637 19.8568 18.9763 19.7443C19.0888 19.6317 19.152 19.4791 19.152 19.32V2.328C19.152 2.16887 19.0888 2.01626 18.9763 1.90374C18.8637 1.79121 18.7111 1.728 18.552 1.728ZM13.728 1.2H15.144V2.808H13.728V1.2ZM4.008 1.2H5.424V2.808H4.008V1.2ZM7.416 16.8C7.416 16.9591 7.35279 17.1117 7.24026 17.2243C7.12774 17.3368 6.97513 17.4 6.816 17.4H3.936C3.77687 17.4 3.62426 17.3368 3.51174 17.2243C3.39921 17.1117 3.336 16.9591 3.336 16.8V14.16C3.336 14.0009 3.39921 13.8483 3.51174 13.7357C3.62426 13.6232 3.77687 13.56 3.936 13.56H6.816C6.89479 13.56 6.97281 13.5755 7.04561 13.6057C7.1184 13.6358 7.18455 13.68 7.24026 13.7357C7.29598 13.7915 7.34017 13.8576 7.37033 13.9304C7.40048 14.0032 7.416 14.0812 7.416 14.16V16.8ZM7.416 11.52C7.416 11.5988 7.40048 11.6768 7.37033 11.7496C7.34017 11.8224 7.29598 11.8885 7.24026 11.9443C7.18455 12 7.1184 12.0442 7.04561 12.0743C6.97281 12.1045 6.89479 12.12 6.816 12.12H3.936C3.77687 12.12 3.62426 12.0568 3.51174 11.9443C3.39921 11.8317 3.336 11.6791 3.336 11.52V8.88C3.336 8.72087 3.39921 8.56826 3.51174 8.45574C3.62426 8.34321 3.77687 8.28 3.936 8.28H6.816C6.89479 8.28 6.97281 8.29552 7.04561 8.32567C7.1184 8.35582 7.18455 8.40002 7.24026 8.45574C7.29598 8.51145 7.34017 8.57759 7.37033 8.65039C7.40048 8.72319 7.416 8.80121 7.416 8.88V11.52ZM15.816 16.08H9.336V14.88H15.816V16.08ZM15.816 10.8H9.336V9.6H15.816V10.8ZM17.952 5.64H1.2V2.928H2.808V3.384C2.808 3.54313 2.87121 3.69574 2.98374 3.80826C3.09626 3.92079 3.24887 3.984 3.408 3.984H6.024C6.18313 3.984 6.33574 3.92079 6.44826 3.80826C6.56078 3.69574 6.624 3.54313 6.624 3.384V2.928H12.528V3.384C12.528 3.54313 12.5912 3.69574 12.7037 3.80826C12.8163 3.92079 12.9689 3.984 13.128 3.984H15.744C15.9031 3.984 16.0557 3.92079 16.1683 3.80826C16.2808 3.69574 16.344 3.54313 16.344 3.384V2.928H17.952V5.64Z"
                                                        fill="#181F26" />
                                                </svg>
                                                Projects No.
                                            </p>
                                            <div>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Project Name
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Company Name
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Start Date
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    End Date
                                                </label>

                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Status
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Action
                                                </label>

                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Status
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Activity Name
                                                </label>
                                                <p class="right-side-content-inner-filter-hamburg-inner-subheading">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.552 1.728H16.344V0.6C16.344 0.44087 16.2808 0.288258 16.1683 0.175736C16.0557 0.0632141 15.9031 0 15.744 0H13.128C12.9689 0 12.8163 0.0632141 12.7037 0.175736C12.5912 0.288258 12.528 0.44087 12.528 0.6V1.728H6.624V0.6C6.624 0.44087 6.56078 0.288258 6.44826 0.175736C6.33574 0.0632141 6.18313 0 6.024 0H3.408C3.24887 0 3.09626 0.0632141 2.98374 0.175736C2.87121 0.288258 2.808 0.44087 2.808 0.6V1.728H0.6C0.44087 1.728 0.288258 1.79121 0.175736 1.90374C0.0632141 2.01626 0 2.16887 0 2.328V19.32C0 19.4791 0.0632141 19.6317 0.175736 19.7443C0.288258 19.8568 0.44087 19.92 0.6 19.92H18.552C18.7111 19.92 18.8637 19.8568 18.9763 19.7443C19.0888 19.6317 19.152 19.4791 19.152 19.32V2.328C19.152 2.16887 19.0888 2.01626 18.9763 1.90374C18.8637 1.79121 18.7111 1.728 18.552 1.728ZM13.728 1.2H15.144V2.808H13.728V1.2ZM4.008 1.2H5.424V2.808H4.008V1.2ZM7.416 16.8C7.416 16.9591 7.35279 17.1117 7.24026 17.2243C7.12774 17.3368 6.97513 17.4 6.816 17.4H3.936C3.77687 17.4 3.62426 17.3368 3.51174 17.2243C3.39921 17.1117 3.336 16.9591 3.336 16.8V14.16C3.336 14.0009 3.39921 13.8483 3.51174 13.7357C3.62426 13.6232 3.77687 13.56 3.936 13.56H6.816C6.89479 13.56 6.97281 13.5755 7.04561 13.6057C7.1184 13.6358 7.18455 13.68 7.24026 13.7357C7.29598 13.7915 7.34017 13.8576 7.37033 13.9304C7.40048 14.0032 7.416 14.0812 7.416 14.16V16.8ZM7.416 11.52C7.416 11.5988 7.40048 11.6768 7.37033 11.7496C7.34017 11.8224 7.29598 11.8885 7.24026 11.9443C7.18455 12 7.1184 12.0442 7.04561 12.0743C6.97281 12.1045 6.89479 12.12 6.816 12.12H3.936C3.77687 12.12 3.62426 12.0568 3.51174 11.9443C3.39921 11.8317 3.336 11.6791 3.336 11.52V8.88C3.336 8.72087 3.39921 8.56826 3.51174 8.45574C3.62426 8.34321 3.77687 8.28 3.936 8.28H6.816C6.89479 8.28 6.97281 8.29552 7.04561 8.32567C7.1184 8.35582 7.18455 8.40002 7.24026 8.45574C7.29598 8.51145 7.34017 8.57759 7.37033 8.65039C7.40048 8.72319 7.416 8.80121 7.416 8.88V11.52ZM15.816 16.08H9.336V14.88H15.816V16.08ZM15.816 10.8H9.336V9.6H15.816V10.8ZM17.952 5.64H1.2V2.928H2.808V3.384C2.808 3.54313 2.87121 3.69574 2.98374 3.80826C3.09626 3.92079 3.24887 3.984 3.408 3.984H6.024C6.18313 3.984 6.33574 3.92079 6.44826 3.80826C6.56078 3.69574 6.624 3.54313 6.624 3.384V2.928H12.528V3.384C12.528 3.54313 12.5912 3.69574 12.7037 3.80826C12.8163 3.92079 12.9689 3.984 13.128 3.984H15.744C15.9031 3.984 16.0557 3.92079 16.1683 3.80826C16.2808 3.69574 16.344 3.54313 16.344 3.384V2.928H17.952V5.64Z"
                                                            fill="#181F26" />
                                                    </svg>
                                                    ADD PROJECTS
                                                </p>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Project Manager
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Project Executive
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Description
                                                </label>
                                            </div>

                                        </div>
                                        <div class="project-page-column-filter-inner-col">
                                            <p class="right-side-content-inner-filter-hamburg-inner-subheading">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11.25 5.37808C9.13095 3.92228 6.18953 3.25933 3.99433 3.01127C2.89642 2.88721 2 3.80402 2 4.93518V16.2C2 17.3311 2.89642 18.2483 3.99433 18.3723C6.18953 18.6204 9.13095 19.2833 11.25 20.7391V5.37808ZM12.75 20.7391C14.869 19.2833 17.8105 18.6204 20.0057 18.3723C21.1036 18.2483 22 17.3311 22 16.2V4.93518C22 3.80402 21.1036 2.88721 20.0057 3.01127C17.8105 3.25933 14.869 3.92228 12.75 5.37808V20.7391ZM4.25884 8.13986C4.32223 7.73052 4.70545 7.45008 5.11478 7.51347C6.41756 7.71523 7.88471 8.05247 9.27051 8.58836C9.65684 8.73775 9.84892 9.17205 9.69952 9.55838C9.55012 9.94471 9.11583 10.1368 8.7295 9.98739C7.47085 9.50067 6.11399 9.1861 4.88522 8.9958C4.47588 8.93241 4.19544 8.54919 4.25884 8.13986ZM5.11478 11.5135C4.70545 11.4501 4.32223 11.7305 4.25884 12.1399C4.19544 12.5492 4.47588 12.9324 4.88522 12.9958C5.50446 13.0917 6.15813 13.2195 6.81653 13.3856C7.21815 13.4869 7.62588 13.2435 7.72721 12.8418C7.82854 12.4402 7.5851 12.0325 7.18347 11.9311C6.47447 11.7523 5.77452 11.6156 5.11478 11.5135Z"
                                                        fill="#181F26" />
                                                </svg>
                                                Add Role
                                            </p>
                                            <div>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Member Name
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Role
                                                </label>
                                                <p class="right-side-content-inner-filter-hamburg-inner-subheading">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_533_11966)">
                                                            <path
                                                                d="M12.7031 17.7227C13.0915 17.7227 13.4062 17.4079 13.4062 17.0195C13.4062 16.6312 13.0915 16.3164 12.7031 16.3164C12.3148 16.3164 12 16.6312 12 17.0195C12 17.4079 12.3148 17.7227 12.7031 17.7227Z"
                                                                fill="black" />
                                                            <path
                                                                d="M18.3528 15.6387C18.7411 15.6387 19.0559 15.3239 19.0559 14.9355C19.0559 14.5472 18.7411 14.2324 18.3528 14.2324C17.9645 14.2324 17.6497 14.5472 17.6497 14.9355C17.6497 15.3239 17.9645 15.6387 18.3528 15.6387Z"
                                                                fill="black" />
                                                            <path
                                                                d="M19.4111 9.6377C19.7995 9.6377 20.1143 9.3229 20.1143 8.93457C20.1143 8.54625 19.7995 8.23145 19.4111 8.23145C19.0228 8.23145 18.708 8.54625 18.708 8.93457C18.708 9.3229 19.0228 9.6377 19.4111 9.6377Z"
                                                                fill="black" />
                                                            <path
                                                                d="M9.74154 6.49464C9.30256 7.12159 9.2352 7.91969 9.56651 8.61555L11.2642 9.8043C12.0314 9.87761 12.7583 9.54138 13.1973 8.91442C14.3507 7.26724 13.6232 5.13564 13.0868 4.01163C12.9649 3.75616 12.7136 3.60255 12.4308 3.61066C12.149 3.61881 11.9078 3.78597 11.8013 4.04697C11.6143 4.50517 11.4246 4.85861 11.2374 5.09749C11.0033 5.39617 10.8147 5.52049 10.6149 5.65211C10.3683 5.81458 10.0887 5.9988 9.74154 6.49464ZM10.4199 10.9298C10.1098 11.8198 9.36819 13.1572 7.95144 15.1805C5.13017 19.2097 0.714122 24.4188 0.077935 23.9733C-0.558253 23.5278 2.82631 17.5965 5.64758 13.5673C7.06433 11.544 8.06731 10.3897 8.79762 9.79385L10.4199 10.9298Z"
                                                                fill="black" />
                                                            <path
                                                                d="M7.23811 18.5247C7.32067 18.813 7.42983 19.0931 7.56418 19.3612C8.20093 20.6309 9.36868 21.5233 10.768 21.8096C10.8668 21.8298 10.9679 21.8491 11.0682 21.8668C11.7074 21.9798 12.3553 22.0367 13.0044 22.037C15.244 22.037 17.4265 21.3534 19.2993 20.0419C21.7096 18.3543 23.3183 15.829 23.8293 12.9313C24.3402 10.0337 23.6922 7.11044 22.0045 4.70018C20.3168 2.28991 17.7916 0.681162 14.8939 0.170178C11.9964 -0.340619 9.07299 0.307287 6.66272 1.99502C4.25246 3.68266 2.64371 6.20796 2.13272 9.10563L2.11144 9.22737C1.99814 9.87494 2.2163 10.5261 2.69503 10.969C3.19538 11.4319 3.89663 11.605 4.57097 11.4323C4.87402 11.3546 5.19085 11.3344 5.50449 11.3711C6.44471 10.1303 7.23713 9.25169 7.90814 8.70419L8.06414 8.57693C7.81355 7.59377 7.99636 6.53454 8.58914 5.68802C9.09028 4.97219 9.54193 4.67463 9.84075 4.47776C9.99975 4.37294 10.0375 4.34805 10.1301 4.22997C10.1785 4.16815 10.3115 3.97479 10.4988 3.51555C10.814 2.74333 11.5563 2.22888 12.3901 2.20493C12.4106 2.20432 12.4313 2.20399 12.4516 2.20399C13.2722 2.20399 14.0017 2.66449 14.3556 3.40601C15.5093 5.82429 15.507 8.06697 14.3488 9.72101C14.0579 10.1362 13.6807 10.4836 13.2431 10.7395C12.8055 10.9953 12.3177 11.1536 11.8133 11.2034L11.7474 11.3925C11.3658 12.4878 10.5008 13.9907 9.10285 15.9871C8.5305 16.8045 7.89535 17.6677 7.23811 18.5247ZM19.4104 11.0437C18.2473 11.0437 17.301 10.0974 17.301 8.9343C17.301 7.77119 18.2473 6.82493 19.4104 6.82493C20.5735 6.82493 21.5198 7.77119 21.5198 8.9343C21.5198 10.0974 20.5735 11.0437 19.4104 11.0437ZM16.2428 14.9355C16.2428 13.7724 17.1891 12.8261 18.3522 12.8261C19.5153 12.8261 20.4616 13.7724 20.4616 14.9355C20.4616 16.0986 19.5153 17.0449 18.3522 17.0449C17.1891 17.0449 16.2428 16.0986 16.2428 14.9355ZM10.5933 17.0197C10.5933 15.8566 11.5396 14.9103 12.7027 14.9103C13.8658 14.9103 14.812 15.8566 14.812 17.0197C14.812 18.1828 13.8658 19.1291 12.7027 19.1291C11.5396 19.1291 10.5933 18.1828 10.5933 17.0197Z"
                                                                fill="black" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_533_11966">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    Drawing
                                                </p>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Drawings
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Status Drawings
                                                </label>
                                                <p class="right-side-content-inner-filter-hamburg-inner-subheading">
                                                    <svg width="15" height="24" viewBox="0 0 15 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_533_11963)">
                                                            <path
                                                                d="M10 5.25V1.5975C10.3658 1.69914 10.6996 1.89249 10.9697 2.15925L13.8407 5.03025C14.1079 5.30026 14.3015 5.63408 14.4032 6H10.75C10.5511 5.9998 10.3605 5.92072 10.2199 5.78011C10.0793 5.6395 10.0002 5.44885 10 5.25ZM14.5 7.5V20.25C14.4994 20.8466 14.2622 21.4185 13.8403 21.8403C13.4185 22.2622 12.8466 22.4994 12.25 22.5H1.75C1.15345 22.4994 0.581495 22.2622 0.159667 21.8403C-0.26216 21.4185 -0.499404 20.8466 -0.5 20.25V3.75C-0.499404 3.15345 -0.26216 2.5815 0.159667 2.15967C0.581495 1.73784 1.15345 1.5006 1.75 1.5H8.5V5.25C8.5006 5.84655 8.73784 6.4185 9.15967 6.84033C9.5815 7.26216 10.1534 7.4994 10.75 7.5H14.5ZM3.25 15.75C3.25 15.6017 3.20601 15.4567 3.1236 15.3333C3.04119 15.21 2.92406 15.1139 2.78701 15.0571C2.64997 15.0003 2.49917 14.9855 2.35368 15.0144C2.2082 15.0434 2.07456 15.1148 1.96967 15.2197C1.86478 15.3246 1.79335 15.4582 1.76441 15.6037C1.73547 15.7492 1.75032 15.9 1.80709 16.037C1.86386 16.1741 1.95999 16.2912 2.08332 16.3736C2.20666 16.456 2.35166 16.5 2.5 16.5C2.69891 16.5 2.88968 16.421 3.03033 16.2803C3.17098 16.1397 3.25 15.9489 3.25 15.75ZM3.25 12.75C3.25 12.6017 3.20601 12.4567 3.1236 12.3333C3.04119 12.21 2.92406 12.1139 2.78701 12.0571C2.64997 12.0003 2.49917 11.9855 2.35368 12.0144C2.2082 12.0434 2.07456 12.1148 1.96967 12.2197C1.86478 12.3246 1.79335 12.4582 1.76441 12.6037C1.73547 12.7492 1.75032 12.9 1.80709 13.037C1.86386 13.1741 1.95999 13.2912 2.08332 13.3736C2.20666 13.456 2.35166 13.5 2.5 13.5C2.69891 13.5 2.88968 13.421 3.03033 13.2803C3.17098 13.1397 3.25 12.9489 3.25 12.75ZM3.25 9.75C3.25 9.60166 3.20601 9.45666 3.1236 9.33332C3.04119 9.20999 2.92406 9.11386 2.78701 9.05709C2.64997 9.00032 2.49917 8.98547 2.35368 9.01441C2.2082 9.04335 2.07456 9.11478 1.96967 9.21967C1.86478 9.32456 1.79335 9.4582 1.76441 9.60368C1.73547 9.74917 1.75032 9.89997 1.80709 10.037C1.86386 10.1741 1.95999 10.2912 2.08332 10.3736C2.20666 10.456 2.35166 10.5 2.5 10.5C2.69891 10.5 2.88968 10.421 3.03033 10.2803C3.17098 10.1397 3.25 9.94891 3.25 9.75ZM12.25 15.75C12.25 15.5511 12.171 15.3603 12.0303 15.2197C11.8897 15.079 11.6989 15 11.5 15H4.75C4.55109 15 4.36032 15.079 4.21967 15.2197C4.07902 15.3603 4 15.5511 4 15.75C4 15.9489 4.07902 16.1397 4.21967 16.2803C4.36032 16.421 4.55109 16.5 4.75 16.5H11.5C11.6989 16.5 11.8897 16.421 12.0303 16.2803C12.171 16.1397 12.25 15.9489 12.25 15.75ZM12.25 12.75C12.25 12.5511 12.171 12.3603 12.0303 12.2197C11.8897 12.079 11.6989 12 11.5 12H4.75C4.55109 12 4.36032 12.079 4.21967 12.2197C4.07902 12.3603 4 12.5511 4 12.75C4 12.9489 4.07902 13.1397 4.21967 13.2803C4.36032 13.421 4.55109 13.5 4.75 13.5H11.5C11.6989 13.5 11.8897 13.421 12.0303 13.2803C12.171 13.1397 12.25 12.9489 12.25 12.75ZM12.25 9.75C12.25 9.55109 12.171 9.36032 12.0303 9.21967C11.8897 9.07902 11.6989 9 11.5 9H4.75C4.55109 9 4.36032 9.07902 4.21967 9.21967C4.07902 9.36032 4 9.55109 4 9.75C4 9.94891 4.07902 10.1397 4.21967 10.2803C4.36032 10.421 4.55109 10.5 4.75 10.5H11.5C11.6989 10.5 11.8897 10.421 12.0303 10.2803C12.171 10.1397 12.25 9.94891 12.25 9.75Z"
                                                                fill="black" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_533_11963">
                                                                <rect width="15" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>

                                                    Invoicing Details
                                                </p>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Start Date
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    End Date
                                                </label>

                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Status of Building Case
                                                </label>
                                                <label for="">
                                                    <input type="checkbox" name="" id="">
                                                    Status Invoicing
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div
                                        class="right-side-content-inner-filter-hamburg-inner-inner-btns project-page-column-filter-btns">
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
                    <table class="project-table">
                        <th>Project No.</th>
                        <th>Project Name</th>
                        <th>Company Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                        <tr class="project-page-tr-dropdown">
                            <td>
                                <input type="checkbox" name="" id=""> P1234
                            </td>
                            <td>
                                Maadi Innovative Website
                            </td>
                            <td>
                                Maadi Tech & Co. Private, Ltd.
                            </td>
                            <td>
                                20th Aug, 2022
                            </td>
                            <td>
                                18th Feb, 2023
                            </td>
                            <td class="table-status-box">
                                <select name="" id="">
                                    <option value="">In Progress</option>
                                    <option value="">To Do</option>
                                    <option value="">Done</option>
                                </select>
                            </td>
                            <td class="table-action-box">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.397436" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M9.13408 17.6H9.19895L12.3287 16.9189C12.3896 16.9088 12.4461 16.8805 12.4908 16.8378L17.7935 11.5352C17.9852 11.3438 18.137 11.1162 18.24 10.8657C18.343 10.6151 18.3952 10.3466 18.3935 10.0757C18.3942 9.52429 18.1788 8.99453 17.7935 8.60005C17.6021 8.40829 17.3745 8.25649 17.124 8.15349C16.8734 8.05048 16.6049 7.99834 16.334 8.00008C16.0616 7.99766 15.7915 8.0511 15.5405 8.15708C15.2895 8.26306 15.0629 8.41934 14.8746 8.61629L9.58812 13.9189C9.54148 13.9564 9.50751 14.0074 9.49081 14.0649L8.80976 17.1946C8.80059 17.25 8.80462 17.3068 8.82153 17.3603C8.83843 17.4138 8.86774 17.4626 8.90707 17.5027C8.96695 17.5638 9.04854 17.5988 9.13408 17.6ZM16.334 8.64872C17.1132 8.64866 17.7449 9.28027 17.7449 10.0594L17.7448 10.0757C17.7474 10.2594 17.7129 10.4417 17.6432 10.6117C17.5735 10.7817 17.4702 10.9359 17.3394 11.0649L15.3449 9.05409C15.475 8.92478 15.6293 8.82242 15.7991 8.75286C15.9688 8.6833 16.1506 8.64791 16.334 8.64872ZM14.8908 9.52439L16.8854 11.519L12.2638 16.1243L10.2692 14.1459L14.8908 9.52439ZM10.0097 14.7946L11.6151 16.4L9.55568 16.8541L10.0097 14.7946ZM19.4313 19.3513H8.56651C8.38739 19.3513 8.24219 19.4965 8.24219 19.6757C8.24219 19.8548 8.38739 20 8.56651 20H19.4313C19.6104 20 19.7556 19.8548 19.7556 19.6757C19.7556 19.4965 19.6104 19.3513 19.4313 19.3513Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12" height="12" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.374" y="1.19236" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M18.1974 11.659C18.0568 11.659 17.922 11.7148 17.8227 11.8142C17.7233 11.9136 17.6675 12.0484 17.6675 12.1889V18.1192C17.6523 18.3871 17.5318 18.6382 17.3323 18.8178C17.1328 18.9973 16.8704 19.0908 16.6023 19.0778H12.3736C12.1055 19.0908 11.8432 18.9973 11.6437 18.8178C11.4442 18.6382 11.3237 18.3871 11.3085 18.1192V12.1889C11.3085 12.0484 11.2527 11.9136 11.1533 11.8142C11.0539 11.7148 10.9191 11.659 10.7786 11.659C10.638 11.659 10.5033 11.7148 10.4039 11.8142C10.3045 11.9136 10.2487 12.0484 10.2487 12.1889V18.1192C10.2638 18.6683 10.4959 19.189 10.8942 19.5673C11.2925 19.9457 11.8245 20.1507 12.3736 20.1376H16.6023C17.1515 20.1507 17.6835 19.9457 18.0818 19.5673C18.48 19.189 18.7122 18.6683 18.7273 18.1192V12.1889C18.7273 12.0484 18.6715 11.9136 18.5721 11.8142C18.4727 11.7148 18.3379 11.659 18.1974 11.659ZM18.7273 10.0692H16.6076V9.00941C16.6076 8.86886 16.5518 8.73408 16.4524 8.6347C16.353 8.53532 16.2183 8.47949 16.0777 8.47949H12.8982C12.7577 8.47949 12.6229 8.53532 12.5235 8.6347C12.4242 8.73408 12.3683 8.86886 12.3683 9.00941V10.0692H10.2487C10.1081 10.0692 9.97334 10.1251 9.87396 10.2244C9.77458 10.3238 9.71875 10.4586 9.71875 10.5991C9.71875 10.7397 9.77458 10.8745 9.87396 10.9739C9.97334 11.0732 10.1081 11.1291 10.2487 11.1291H18.7273C18.8678 11.1291 19.0026 11.0732 19.102 10.9739C19.2014 10.8745 19.2572 10.7397 19.2572 10.5991C19.2572 10.4586 19.2014 10.3238 19.102 10.2244C19.0026 10.1251 18.8678 10.0692 18.7273 10.0692ZM13.4281 10.0692V9.53932H15.5478V10.0692H13.4281Z"
                                            fill="#B7A194" />
                                        <path
                                            d="M13.9583 16.9581V13.2487C13.9583 13.1081 13.9024 12.9733 13.8031 12.874C13.7037 12.7746 13.5689 12.7188 13.4284 12.7188C13.2878 12.7188 13.153 12.7746 13.0536 12.874C12.9543 12.9733 12.8984 13.1081 12.8984 13.2487V16.9581C12.8984 17.0986 12.9543 17.2334 13.0536 17.3328C13.153 17.4321 13.2878 17.488 13.4284 17.488C13.5689 17.488 13.7037 17.4321 13.8031 17.3328C13.9024 17.2334 13.9583 17.0986 13.9583 16.9581ZM16.0779 16.9581V13.2487C16.0779 13.1081 16.0221 12.9733 15.9227 12.874C15.8233 12.7746 15.6886 12.7188 15.548 12.7188C15.4075 12.7188 15.2727 12.7746 15.1733 12.874C15.0739 12.9733 15.0181 13.1081 15.0181 13.2487V16.9581C15.0181 17.0986 15.0739 17.2334 15.1733 17.3328C15.2727 17.4321 15.4075 17.488 15.548 17.488C15.6886 17.488 15.8233 17.4321 15.9227 17.3328C16.0221 17.2334 16.0779 17.0986 16.0779 16.9581Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12.7179" height="12.7179" fill="white"
                                                transform="translate(8.12891 7.94922)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>
                        <tr class="project-activity-card">
                            <td colspan="10" class="">
                                <svg class="project-activity-card-dir-arrow" width="64" height="310"
                                    viewBox="0 0 64 310" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 67H0.5V67.5H1V67ZM63.3536 67.3536C63.5488 67.1583 63.5488 66.8417 63.3536 66.6464L60.1716 63.4645C59.9763 63.2692 59.6597 63.2692 59.4645 63.4645C59.2692 63.6597 59.2692 63.9763 59.4645 64.1716L62.2929 67L59.4645 69.8284C59.2692 70.0237 59.2692 70.3403 59.4645 70.5355C59.6597 70.7308 59.9763 70.7308 60.1716 70.5355L63.3536 67.3536ZM0.5 0V2.09375H1.5V0H0.5ZM0.5 6.28125V10.4688H1.5V6.28125H0.5ZM0.5 14.6562V18.8438H1.5V14.6562H0.5ZM0.5 23.0312V27.2188H1.5V23.0312H0.5ZM0.5 31.4062V35.5938H1.5V31.4062H0.5ZM0.5 39.7812V43.9688H1.5V39.7812H0.5ZM0.5 48.1562V52.3438H1.5V48.1562H0.5ZM0.5 56.5312V60.7188H1.5V56.5312H0.5ZM0.5 64.9062V67H1.5V64.9062H0.5ZM1 67.5H2.9375V66.5H1V67.5ZM6.8125 67.5H10.6875V66.5H6.8125V67.5ZM14.5625 67.5H18.4375V66.5H14.5625V67.5ZM22.3125 67.5H26.1875V66.5H22.3125V67.5ZM30.0625 67.5H33.9375V66.5H30.0625V67.5ZM37.8125 67.5H41.6875V66.5H37.8125V67.5ZM45.5625 67.5H49.4375V66.5H45.5625V67.5ZM53.3125 67.5H57.1875V66.5H53.3125V67.5ZM61.0625 67.5H63V66.5H61.0625V67.5Z"
                                        fill="black" />
                                    <path
                                        d="M1 306H0.5V306.5H1V306ZM63.3536 306.354C63.5488 306.158 63.5488 305.842 63.3536 305.646L60.1716 302.464C59.9763 302.269 59.6597 302.269 59.4645 302.464C59.2692 302.66 59.2692 302.976 59.4645 303.172L62.2929 306L59.4645 308.828C59.2692 309.024 59.2692 309.34 59.4645 309.536C59.6597 309.731 59.9763 309.731 60.1716 309.536L63.3536 306.354ZM0.5 0V2.01316H1.5V0H0.5ZM0.5 6.03947V10.0658H1.5V6.03947H0.5ZM0.5 14.0921V18.1184H1.5V14.0921H0.5ZM0.5 22.1447V26.1711H1.5V22.1447H0.5ZM0.5 30.1974V34.2237H1.5V30.1974H0.5ZM0.5 38.25V42.2763H1.5V38.25H0.5ZM0.5 46.3026V50.3289H1.5V46.3026H0.5ZM0.5 54.3553V58.3816H1.5V54.3553H0.5ZM0.5 62.4079V66.4342H1.5V62.4079H0.5ZM0.5 70.4605V74.4868H1.5V70.4605H0.5ZM0.5 78.5131V82.5395H1.5V78.5131H0.5ZM0.5 86.5658V90.5921H1.5V86.5658H0.5ZM0.5 94.6184V98.6447H1.5V94.6184H0.5ZM0.5 102.671V106.697H1.5V102.671H0.5ZM0.5 110.724V114.75H1.5V110.724H0.5ZM0.5 118.776V122.803H1.5V118.776H0.5ZM0.5 126.829V130.855H1.5V126.829H0.5ZM0.5 134.882V138.908H1.5V134.882H0.5ZM0.5 142.934V146.961H1.5V142.934H0.5ZM0.5 150.987V155.013H1.5V150.987H0.5ZM0.5 159.039V163.066H1.5V159.039H0.5ZM0.5 167.092V171.118H1.5V167.092H0.5ZM0.5 175.145V179.171H1.5V175.145H0.5ZM0.5 183.197V187.224H1.5V183.197H0.5ZM0.5 191.25V195.276H1.5V191.25H0.5ZM0.5 199.303V203.329H1.5V199.303H0.5ZM0.5 207.355V211.382H1.5V207.355H0.5ZM0.5 215.408V219.434H1.5V215.408H0.5ZM0.5 223.461V227.487H1.5V223.461H0.5ZM0.5 231.513V235.54H1.5V231.513H0.5ZM0.5 239.566V243.592H1.5V239.566H0.5ZM0.5 247.619V251.645H1.5V247.619H0.5ZM0.5 255.671V259.698H1.5V255.671H0.5ZM0.5 263.724V267.75H1.5V263.724H0.5ZM0.5 271.776V275.803H1.5V271.776H0.5ZM0.5 279.829V283.855H1.5V279.829H0.5ZM0.5 287.882V291.908H1.5V287.882H0.5ZM0.5 295.934V299.961H1.5V295.934H0.5ZM0.5 303.987V306H1.5V303.987H0.5ZM1 306.5H2.9375V305.5H1V306.5ZM6.8125 306.5H10.6875V305.5H6.8125V306.5ZM14.5625 306.5H18.4375V305.5H14.5625V306.5ZM22.3125 306.5H26.1875V305.5H22.3125V306.5ZM30.0625 306.5H33.9375V305.5H30.0625V306.5ZM37.8125 306.5H41.6875V305.5H37.8125V306.5ZM45.5625 306.5H49.4375V305.5H45.5625V306.5ZM53.3125 306.5H57.1875V305.5H53.3125V306.5ZM61.0625 306.5H63V305.5H61.0625V306.5Z"
                                        fill="black" />
                                </svg>

                                <div class="project-activity-card-inner">
                                    <p class="project-activity-card-heading">
                                        Activity
                                    </p>
                                    <table>
                                        <th>Description</th>
                                        <tr>
                                            <td>outlines the details of one project, including all its phases and
                                                processes involved, in a single document. It addresses outlines the
                                                details of one project, including all its phases and processes involved,
                                                in a single document. It addresses...</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="project-activity-card-inner project-activity-task-card-inner">
                                    <p class="project-activity-card-heading">
                                        Task 1
                                    </p>
                                    <table>
                                        <th>Description</th>
                                        <th style="width: 112px;">Assigned To</th>
                                        <th style="width: 123px;">Status</th>
                                        <th style="width: 130px;">Start Date</th>
                                        <th style="width: 128px;">End Date</th>
                                        <tr>
                                            <td>outlines the details of one project, including all its phases and
                                                processes
                                                involved, in a single document. It addresses...</td>
                                            <td>John Doe</td>
                                            <td class="table-status-box">
                                                <p>In Progress</p>
                                            </td>
                                            <td>20th Aug, 2022</td>
                                            <td>18th Feb, 2023</td>
                                        </tr>
                                    </table>
                                    <div class="project-activity-task-card-inner-btn-row">
                                        <button>
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_533_12388" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11.6875 5.5C11.6875 5.1203 11.3797 4.8125 11 4.8125C10.6203 4.8125 10.3125 5.1203 10.3125 5.5V10.3125H5.5C5.1203 10.3125 4.8125 10.6203 4.8125 11C4.8125 11.3797 5.1203 11.6875 5.5 11.6875H10.3125V16.5C10.3125 16.8797 10.6203 17.1875 11 17.1875C11.3797 17.1875 11.6875 16.8797 11.6875 16.5V11.6875H16.5C16.8797 11.6875 17.1875 11.3797 17.1875 11C17.1875 10.6203 16.8797 10.3125 16.5 10.3125H11.6875V5.5Z"
                                                        fill="#28303F" />
                                                </mask>
                                                <g mask="url(#mask0_533_12388)">
                                                    <rect width="22" height="22" fill="white" />
                                                </g>
                                            </svg>
                                            Add Task
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tr>
                        <tr class="project-page-tr-dropdown">
                            <td>
                                <input type="checkbox" name="" id=""> P1234
                            </td>
                            <td>
                                Maadi Innovative Website
                            </td>
                            <td>
                                Maadi Tech & Co. Private, Ltd.
                            </td>
                            <td>
                                20th Aug, 2022
                            </td>
                            <td>
                                18th Feb, 2023
                            </td>
                            <td class="table-status-box">
                                <select name="" id="">
                                    <option value="">In Progress</option>
                                    <option value="">To Do</option>
                                    <option value="">Done</option>
                                </select>
                            </td>
                            <td class="table-action-box">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.397436" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M9.13408 17.6H9.19895L12.3287 16.9189C12.3896 16.9088 12.4461 16.8805 12.4908 16.8378L17.7935 11.5352C17.9852 11.3438 18.137 11.1162 18.24 10.8657C18.343 10.6151 18.3952 10.3466 18.3935 10.0757C18.3942 9.52429 18.1788 8.99453 17.7935 8.60005C17.6021 8.40829 17.3745 8.25649 17.124 8.15349C16.8734 8.05048 16.6049 7.99834 16.334 8.00008C16.0616 7.99766 15.7915 8.0511 15.5405 8.15708C15.2895 8.26306 15.0629 8.41934 14.8746 8.61629L9.58812 13.9189C9.54148 13.9564 9.50751 14.0074 9.49081 14.0649L8.80976 17.1946C8.80059 17.25 8.80462 17.3068 8.82153 17.3603C8.83843 17.4138 8.86774 17.4626 8.90707 17.5027C8.96695 17.5638 9.04854 17.5988 9.13408 17.6ZM16.334 8.64872C17.1132 8.64866 17.7449 9.28027 17.7449 10.0594L17.7448 10.0757C17.7474 10.2594 17.7129 10.4417 17.6432 10.6117C17.5735 10.7817 17.4702 10.9359 17.3394 11.0649L15.3449 9.05409C15.475 8.92478 15.6293 8.82242 15.7991 8.75286C15.9688 8.6833 16.1506 8.64791 16.334 8.64872ZM14.8908 9.52439L16.8854 11.519L12.2638 16.1243L10.2692 14.1459L14.8908 9.52439ZM10.0097 14.7946L11.6151 16.4L9.55568 16.8541L10.0097 14.7946ZM19.4313 19.3513H8.56651C8.38739 19.3513 8.24219 19.4965 8.24219 19.6757C8.24219 19.8548 8.38739 20 8.56651 20H19.4313C19.6104 20 19.7556 19.8548 19.7556 19.6757C19.7556 19.4965 19.6104 19.3513 19.4313 19.3513Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12" height="12" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.374" y="1.19236" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M18.1974 11.659C18.0568 11.659 17.922 11.7148 17.8227 11.8142C17.7233 11.9136 17.6675 12.0484 17.6675 12.1889V18.1192C17.6523 18.3871 17.5318 18.6382 17.3323 18.8178C17.1328 18.9973 16.8704 19.0908 16.6023 19.0778H12.3736C12.1055 19.0908 11.8432 18.9973 11.6437 18.8178C11.4442 18.6382 11.3237 18.3871 11.3085 18.1192V12.1889C11.3085 12.0484 11.2527 11.9136 11.1533 11.8142C11.0539 11.7148 10.9191 11.659 10.7786 11.659C10.638 11.659 10.5033 11.7148 10.4039 11.8142C10.3045 11.9136 10.2487 12.0484 10.2487 12.1889V18.1192C10.2638 18.6683 10.4959 19.189 10.8942 19.5673C11.2925 19.9457 11.8245 20.1507 12.3736 20.1376H16.6023C17.1515 20.1507 17.6835 19.9457 18.0818 19.5673C18.48 19.189 18.7122 18.6683 18.7273 18.1192V12.1889C18.7273 12.0484 18.6715 11.9136 18.5721 11.8142C18.4727 11.7148 18.3379 11.659 18.1974 11.659ZM18.7273 10.0692H16.6076V9.00941C16.6076 8.86886 16.5518 8.73408 16.4524 8.6347C16.353 8.53532 16.2183 8.47949 16.0777 8.47949H12.8982C12.7577 8.47949 12.6229 8.53532 12.5235 8.6347C12.4242 8.73408 12.3683 8.86886 12.3683 9.00941V10.0692H10.2487C10.1081 10.0692 9.97334 10.1251 9.87396 10.2244C9.77458 10.3238 9.71875 10.4586 9.71875 10.5991C9.71875 10.7397 9.77458 10.8745 9.87396 10.9739C9.97334 11.0732 10.1081 11.1291 10.2487 11.1291H18.7273C18.8678 11.1291 19.0026 11.0732 19.102 10.9739C19.2014 10.8745 19.2572 10.7397 19.2572 10.5991C19.2572 10.4586 19.2014 10.3238 19.102 10.2244C19.0026 10.1251 18.8678 10.0692 18.7273 10.0692ZM13.4281 10.0692V9.53932H15.5478V10.0692H13.4281Z"
                                            fill="#B7A194" />
                                        <path
                                            d="M13.9583 16.9581V13.2487C13.9583 13.1081 13.9024 12.9733 13.8031 12.874C13.7037 12.7746 13.5689 12.7188 13.4284 12.7188C13.2878 12.7188 13.153 12.7746 13.0536 12.874C12.9543 12.9733 12.8984 13.1081 12.8984 13.2487V16.9581C12.8984 17.0986 12.9543 17.2334 13.0536 17.3328C13.153 17.4321 13.2878 17.488 13.4284 17.488C13.5689 17.488 13.7037 17.4321 13.8031 17.3328C13.9024 17.2334 13.9583 17.0986 13.9583 16.9581ZM16.0779 16.9581V13.2487C16.0779 13.1081 16.0221 12.9733 15.9227 12.874C15.8233 12.7746 15.6886 12.7188 15.548 12.7188C15.4075 12.7188 15.2727 12.7746 15.1733 12.874C15.0739 12.9733 15.0181 13.1081 15.0181 13.2487V16.9581C15.0181 17.0986 15.0739 17.2334 15.1733 17.3328C15.2727 17.4321 15.4075 17.488 15.548 17.488C15.6886 17.488 15.8233 17.4321 15.9227 17.3328C16.0221 17.2334 16.0779 17.0986 16.0779 16.9581Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12.7179" height="12.7179" fill="white"
                                                transform="translate(8.12891 7.94922)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>
                        <tr class="project-activity-card">
                            <td colspan="10" class="">
                                <svg class="project-activity-card-dir-arrow" width="64" height="71" viewBox="0 0 64 71"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 67H0.5V67.5H1V67ZM63.3536 67.3536C63.5488 67.1583 63.5488 66.8417 63.3536 66.6464L60.1716 63.4645C59.9763 63.2692 59.6597 63.2692 59.4645 63.4645C59.2692 63.6597 59.2692 63.9763 59.4645 64.1716L62.2929 67L59.4645 69.8284C59.2692 70.0237 59.2692 70.3403 59.4645 70.5355C59.6597 70.7308 59.9763 70.7308 60.1716 70.5355L63.3536 67.3536ZM0.5 0V2.09375H1.5V0H0.5ZM0.5 6.28125V10.4688H1.5V6.28125H0.5ZM0.5 14.6562V18.8438H1.5V14.6562H0.5ZM0.5 23.0312V27.2188H1.5V23.0312H0.5ZM0.5 31.4062V35.5938H1.5V31.4062H0.5ZM0.5 39.7812V43.9688H1.5V39.7812H0.5ZM0.5 48.1562V52.3438H1.5V48.1562H0.5ZM0.5 56.5312V60.7188H1.5V56.5312H0.5ZM0.5 64.9062V67H1.5V64.9062H0.5ZM1 67.5H2.9375V66.5H1V67.5ZM6.8125 67.5H10.6875V66.5H6.8125V67.5ZM14.5625 67.5H18.4375V66.5H14.5625V67.5ZM22.3125 67.5H26.1875V66.5H22.3125V67.5ZM30.0625 67.5H33.9375V66.5H30.0625V67.5ZM37.8125 67.5H41.6875V66.5H37.8125V67.5ZM45.5625 67.5H49.4375V66.5H45.5625V67.5ZM53.3125 67.5H57.1875V66.5H53.3125V67.5ZM61.0625 67.5H63V66.5H61.0625V67.5Z"
                                        fill="black" />
                                </svg>
                                <div class="project-activity-card-inner">
                                    <p class="project-activity-card-heading">
                                        Activity
                                    </p>
                                    <table>
                                        <th>Description</th>
                                        <th style="width: 112px;">Assigned To</th>
                                        <th style="width: 123px;">Status</th>
                                        <th style="width: 130px;">Start Date</th>
                                        <th style="width: 128px;">End Date</th>
                                        <tr>
                                            <td>outlines the details of one project, including all its phases and
                                                processes
                                                involved, in a single document. It addresses...</td>
                                            <td>John Doe</td>
                                            <td class="table-status-box">
                                                <p>In Progress</p>
                                            </td>
                                            <td>20th Aug, 2022</td>
                                            <td>18th Feb, 2023</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr class="project-page-tr-dropdown">
                            <td>
                                <input type="checkbox" name="" id=""> P1234
                            </td>
                            <td>
                                Maadi Innovative Website
                            </td>
                            <td>
                                Maadi Tech & Co. Private, Ltd.
                            </td>
                            <td>
                                20th Aug, 2022
                            </td>
                            <td>
                                18th Feb, 2023
                            </td>
                            <td class="table-status-box">
                                <select name="" id="">
                                    <option value="">In Progress</option>
                                    <option value="">To Do</option>
                                    <option value="">Done</option>
                                </select>
                            </td>
                            <td class="table-action-box">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.397436" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M9.13408 17.6H9.19895L12.3287 16.9189C12.3896 16.9088 12.4461 16.8805 12.4908 16.8378L17.7935 11.5352C17.9852 11.3438 18.137 11.1162 18.24 10.8657C18.343 10.6151 18.3952 10.3466 18.3935 10.0757C18.3942 9.52429 18.1788 8.99453 17.7935 8.60005C17.6021 8.40829 17.3745 8.25649 17.124 8.15349C16.8734 8.05048 16.6049 7.99834 16.334 8.00008C16.0616 7.99766 15.7915 8.0511 15.5405 8.15708C15.2895 8.26306 15.0629 8.41934 14.8746 8.61629L9.58812 13.9189C9.54148 13.9564 9.50751 14.0074 9.49081 14.0649L8.80976 17.1946C8.80059 17.25 8.80462 17.3068 8.82153 17.3603C8.83843 17.4138 8.86774 17.4626 8.90707 17.5027C8.96695 17.5638 9.04854 17.5988 9.13408 17.6ZM16.334 8.64872C17.1132 8.64866 17.7449 9.28027 17.7449 10.0594L17.7448 10.0757C17.7474 10.2594 17.7129 10.4417 17.6432 10.6117C17.5735 10.7817 17.4702 10.9359 17.3394 11.0649L15.3449 9.05409C15.475 8.92478 15.6293 8.82242 15.7991 8.75286C15.9688 8.6833 16.1506 8.64791 16.334 8.64872ZM14.8908 9.52439L16.8854 11.519L12.2638 16.1243L10.2692 14.1459L14.8908 9.52439ZM10.0097 14.7946L11.6151 16.4L9.55568 16.8541L10.0097 14.7946ZM19.4313 19.3513H8.56651C8.38739 19.3513 8.24219 19.4965 8.24219 19.6757C8.24219 19.8548 8.38739 20 8.56651 20H19.4313C19.6104 20 19.7556 19.8548 19.7556 19.6757C19.7556 19.4965 19.6104 19.3513 19.4313 19.3513Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12" height="12" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.374" y="1.19236" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M18.1974 11.659C18.0568 11.659 17.922 11.7148 17.8227 11.8142C17.7233 11.9136 17.6675 12.0484 17.6675 12.1889V18.1192C17.6523 18.3871 17.5318 18.6382 17.3323 18.8178C17.1328 18.9973 16.8704 19.0908 16.6023 19.0778H12.3736C12.1055 19.0908 11.8432 18.9973 11.6437 18.8178C11.4442 18.6382 11.3237 18.3871 11.3085 18.1192V12.1889C11.3085 12.0484 11.2527 11.9136 11.1533 11.8142C11.0539 11.7148 10.9191 11.659 10.7786 11.659C10.638 11.659 10.5033 11.7148 10.4039 11.8142C10.3045 11.9136 10.2487 12.0484 10.2487 12.1889V18.1192C10.2638 18.6683 10.4959 19.189 10.8942 19.5673C11.2925 19.9457 11.8245 20.1507 12.3736 20.1376H16.6023C17.1515 20.1507 17.6835 19.9457 18.0818 19.5673C18.48 19.189 18.7122 18.6683 18.7273 18.1192V12.1889C18.7273 12.0484 18.6715 11.9136 18.5721 11.8142C18.4727 11.7148 18.3379 11.659 18.1974 11.659ZM18.7273 10.0692H16.6076V9.00941C16.6076 8.86886 16.5518 8.73408 16.4524 8.6347C16.353 8.53532 16.2183 8.47949 16.0777 8.47949H12.8982C12.7577 8.47949 12.6229 8.53532 12.5235 8.6347C12.4242 8.73408 12.3683 8.86886 12.3683 9.00941V10.0692H10.2487C10.1081 10.0692 9.97334 10.1251 9.87396 10.2244C9.77458 10.3238 9.71875 10.4586 9.71875 10.5991C9.71875 10.7397 9.77458 10.8745 9.87396 10.9739C9.97334 11.0732 10.1081 11.1291 10.2487 11.1291H18.7273C18.8678 11.1291 19.0026 11.0732 19.102 10.9739C19.2014 10.8745 19.2572 10.7397 19.2572 10.5991C19.2572 10.4586 19.2014 10.3238 19.102 10.2244C19.0026 10.1251 18.8678 10.0692 18.7273 10.0692ZM13.4281 10.0692V9.53932H15.5478V10.0692H13.4281Z"
                                            fill="#B7A194" />
                                        <path
                                            d="M13.9583 16.9581V13.2487C13.9583 13.1081 13.9024 12.9733 13.8031 12.874C13.7037 12.7746 13.5689 12.7188 13.4284 12.7188C13.2878 12.7188 13.153 12.7746 13.0536 12.874C12.9543 12.9733 12.8984 13.1081 12.8984 13.2487V16.9581C12.8984 17.0986 12.9543 17.2334 13.0536 17.3328C13.153 17.4321 13.2878 17.488 13.4284 17.488C13.5689 17.488 13.7037 17.4321 13.8031 17.3328C13.9024 17.2334 13.9583 17.0986 13.9583 16.9581ZM16.0779 16.9581V13.2487C16.0779 13.1081 16.0221 12.9733 15.9227 12.874C15.8233 12.7746 15.6886 12.7188 15.548 12.7188C15.4075 12.7188 15.2727 12.7746 15.1733 12.874C15.0739 12.9733 15.0181 13.1081 15.0181 13.2487V16.9581C15.0181 17.0986 15.0739 17.2334 15.1733 17.3328C15.2727 17.4321 15.4075 17.488 15.548 17.488C15.6886 17.488 15.8233 17.4321 15.9227 17.3328C16.0221 17.2334 16.0779 17.0986 16.0779 16.9581Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12.7179" height="12.7179" fill="white"
                                                transform="translate(8.12891 7.94922)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>
                        <tr class="project-activity-card">
                            <td colspan="10" class="">
                                <svg class="project-activity-card-dir-arrow" width="64" height="71" viewBox="0 0 64 71"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 67H0.5V67.5H1V67ZM63.3536 67.3536C63.5488 67.1583 63.5488 66.8417 63.3536 66.6464L60.1716 63.4645C59.9763 63.2692 59.6597 63.2692 59.4645 63.4645C59.2692 63.6597 59.2692 63.9763 59.4645 64.1716L62.2929 67L59.4645 69.8284C59.2692 70.0237 59.2692 70.3403 59.4645 70.5355C59.6597 70.7308 59.9763 70.7308 60.1716 70.5355L63.3536 67.3536ZM0.5 0V2.09375H1.5V0H0.5ZM0.5 6.28125V10.4688H1.5V6.28125H0.5ZM0.5 14.6562V18.8438H1.5V14.6562H0.5ZM0.5 23.0312V27.2188H1.5V23.0312H0.5ZM0.5 31.4062V35.5938H1.5V31.4062H0.5ZM0.5 39.7812V43.9688H1.5V39.7812H0.5ZM0.5 48.1562V52.3438H1.5V48.1562H0.5ZM0.5 56.5312V60.7188H1.5V56.5312H0.5ZM0.5 64.9062V67H1.5V64.9062H0.5ZM1 67.5H2.9375V66.5H1V67.5ZM6.8125 67.5H10.6875V66.5H6.8125V67.5ZM14.5625 67.5H18.4375V66.5H14.5625V67.5ZM22.3125 67.5H26.1875V66.5H22.3125V67.5ZM30.0625 67.5H33.9375V66.5H30.0625V67.5ZM37.8125 67.5H41.6875V66.5H37.8125V67.5ZM45.5625 67.5H49.4375V66.5H45.5625V67.5ZM53.3125 67.5H57.1875V66.5H53.3125V67.5ZM61.0625 67.5H63V66.5H61.0625V67.5Z"
                                        fill="black" />
                                </svg>
                                <div class="project-activity-card-inner">
                                    <p class="project-activity-card-heading">
                                        Activity
                                    </p>
                                    <table>
                                        <th>Description</th>
                                        <th style="width: 112px;">Assigned To</th>
                                        <th style="width: 123px;">Status</th>
                                        <th style="width: 130px;">Start Date</th>
                                        <th style="width: 128px;">End Date</th>
                                        <tr>
                                            <td>outlines the details of one project, including all its phases and
                                                processes
                                                involved, in a single document. It addresses...</td>
                                            <td>John Doe</td>
                                            <td class="table-status-box">
                                                <p>In Progress</p>
                                            </td>
                                            <td>20th Aug, 2022</td>
                                            <td>18th Feb, 2023</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr class="project-page-tr-dropdown">
                            <td>
                                <input type="checkbox" name="" id=""> P1234
                            </td>
                            <td>
                                Maadi Innovative Website
                            </td>
                            <td>
                                Maadi Tech & Co. Private, Ltd.
                            </td>
                            <td>
                                20th Aug, 2022
                            </td>
                            <td>
                                18th Feb, 2023
                            </td>
                            <td class="table-status-box">
                                <select name="" id="">
                                    <option value="">In Progress</option>
                                    <option value="">To Do</option>
                                    <option value="">Done</option>
                                </select>
                            </td>
                            <td class="table-action-box">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.397436" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M9.13408 17.6H9.19895L12.3287 16.9189C12.3896 16.9088 12.4461 16.8805 12.4908 16.8378L17.7935 11.5352C17.9852 11.3438 18.137 11.1162 18.24 10.8657C18.343 10.6151 18.3952 10.3466 18.3935 10.0757C18.3942 9.52429 18.1788 8.99453 17.7935 8.60005C17.6021 8.40829 17.3745 8.25649 17.124 8.15349C16.8734 8.05048 16.6049 7.99834 16.334 8.00008C16.0616 7.99766 15.7915 8.0511 15.5405 8.15708C15.2895 8.26306 15.0629 8.41934 14.8746 8.61629L9.58812 13.9189C9.54148 13.9564 9.50751 14.0074 9.49081 14.0649L8.80976 17.1946C8.80059 17.25 8.80462 17.3068 8.82153 17.3603C8.83843 17.4138 8.86774 17.4626 8.90707 17.5027C8.96695 17.5638 9.04854 17.5988 9.13408 17.6ZM16.334 8.64872C17.1132 8.64866 17.7449 9.28027 17.7449 10.0594L17.7448 10.0757C17.7474 10.2594 17.7129 10.4417 17.6432 10.6117C17.5735 10.7817 17.4702 10.9359 17.3394 11.0649L15.3449 9.05409C15.475 8.92478 15.6293 8.82242 15.7991 8.75286C15.9688 8.6833 16.1506 8.64791 16.334 8.64872ZM14.8908 9.52439L16.8854 11.519L12.2638 16.1243L10.2692 14.1459L14.8908 9.52439ZM10.0097 14.7946L11.6151 16.4L9.55568 16.8541L10.0097 14.7946ZM19.4313 19.3513H8.56651C8.38739 19.3513 8.24219 19.4965 8.24219 19.6757C8.24219 19.8548 8.38739 20 8.56651 20H19.4313C19.6104 20 19.7556 19.8548 19.7556 19.6757C19.7556 19.4965 19.6104 19.3513 19.4313 19.3513Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12" height="12" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.374" y="1.19236" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M18.1974 11.659C18.0568 11.659 17.922 11.7148 17.8227 11.8142C17.7233 11.9136 17.6675 12.0484 17.6675 12.1889V18.1192C17.6523 18.3871 17.5318 18.6382 17.3323 18.8178C17.1328 18.9973 16.8704 19.0908 16.6023 19.0778H12.3736C12.1055 19.0908 11.8432 18.9973 11.6437 18.8178C11.4442 18.6382 11.3237 18.3871 11.3085 18.1192V12.1889C11.3085 12.0484 11.2527 11.9136 11.1533 11.8142C11.0539 11.7148 10.9191 11.659 10.7786 11.659C10.638 11.659 10.5033 11.7148 10.4039 11.8142C10.3045 11.9136 10.2487 12.0484 10.2487 12.1889V18.1192C10.2638 18.6683 10.4959 19.189 10.8942 19.5673C11.2925 19.9457 11.8245 20.1507 12.3736 20.1376H16.6023C17.1515 20.1507 17.6835 19.9457 18.0818 19.5673C18.48 19.189 18.7122 18.6683 18.7273 18.1192V12.1889C18.7273 12.0484 18.6715 11.9136 18.5721 11.8142C18.4727 11.7148 18.3379 11.659 18.1974 11.659ZM18.7273 10.0692H16.6076V9.00941C16.6076 8.86886 16.5518 8.73408 16.4524 8.6347C16.353 8.53532 16.2183 8.47949 16.0777 8.47949H12.8982C12.7577 8.47949 12.6229 8.53532 12.5235 8.6347C12.4242 8.73408 12.3683 8.86886 12.3683 9.00941V10.0692H10.2487C10.1081 10.0692 9.97334 10.1251 9.87396 10.2244C9.77458 10.3238 9.71875 10.4586 9.71875 10.5991C9.71875 10.7397 9.77458 10.8745 9.87396 10.9739C9.97334 11.0732 10.1081 11.1291 10.2487 11.1291H18.7273C18.8678 11.1291 19.0026 11.0732 19.102 10.9739C19.2014 10.8745 19.2572 10.7397 19.2572 10.5991C19.2572 10.4586 19.2014 10.3238 19.102 10.2244C19.0026 10.1251 18.8678 10.0692 18.7273 10.0692ZM13.4281 10.0692V9.53932H15.5478V10.0692H13.4281Z"
                                            fill="#B7A194" />
                                        <path
                                            d="M13.9583 16.9581V13.2487C13.9583 13.1081 13.9024 12.9733 13.8031 12.874C13.7037 12.7746 13.5689 12.7188 13.4284 12.7188C13.2878 12.7188 13.153 12.7746 13.0536 12.874C12.9543 12.9733 12.8984 13.1081 12.8984 13.2487V16.9581C12.8984 17.0986 12.9543 17.2334 13.0536 17.3328C13.153 17.4321 13.2878 17.488 13.4284 17.488C13.5689 17.488 13.7037 17.4321 13.8031 17.3328C13.9024 17.2334 13.9583 17.0986 13.9583 16.9581ZM16.0779 16.9581V13.2487C16.0779 13.1081 16.0221 12.9733 15.9227 12.874C15.8233 12.7746 15.6886 12.7188 15.548 12.7188C15.4075 12.7188 15.2727 12.7746 15.1733 12.874C15.0739 12.9733 15.0181 13.1081 15.0181 13.2487V16.9581C15.0181 17.0986 15.0739 17.2334 15.1733 17.3328C15.2727 17.4321 15.4075 17.488 15.548 17.488C15.6886 17.488 15.8233 17.4321 15.9227 17.3328C16.0221 17.2334 16.0779 17.0986 16.0779 16.9581Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12.7179" height="12.7179" fill="white"
                                                transform="translate(8.12891 7.94922)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>
                        <tr class="project-activity-card">
                            <td colspan="10" class="">
                                <svg class="project-activity-card-dir-arrow" width="64" height="71" viewBox="0 0 64 71"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 67H0.5V67.5H1V67ZM63.3536 67.3536C63.5488 67.1583 63.5488 66.8417 63.3536 66.6464L60.1716 63.4645C59.9763 63.2692 59.6597 63.2692 59.4645 63.4645C59.2692 63.6597 59.2692 63.9763 59.4645 64.1716L62.2929 67L59.4645 69.8284C59.2692 70.0237 59.2692 70.3403 59.4645 70.5355C59.6597 70.7308 59.9763 70.7308 60.1716 70.5355L63.3536 67.3536ZM0.5 0V2.09375H1.5V0H0.5ZM0.5 6.28125V10.4688H1.5V6.28125H0.5ZM0.5 14.6562V18.8438H1.5V14.6562H0.5ZM0.5 23.0312V27.2188H1.5V23.0312H0.5ZM0.5 31.4062V35.5938H1.5V31.4062H0.5ZM0.5 39.7812V43.9688H1.5V39.7812H0.5ZM0.5 48.1562V52.3438H1.5V48.1562H0.5ZM0.5 56.5312V60.7188H1.5V56.5312H0.5ZM0.5 64.9062V67H1.5V64.9062H0.5ZM1 67.5H2.9375V66.5H1V67.5ZM6.8125 67.5H10.6875V66.5H6.8125V67.5ZM14.5625 67.5H18.4375V66.5H14.5625V67.5ZM22.3125 67.5H26.1875V66.5H22.3125V67.5ZM30.0625 67.5H33.9375V66.5H30.0625V67.5ZM37.8125 67.5H41.6875V66.5H37.8125V67.5ZM45.5625 67.5H49.4375V66.5H45.5625V67.5ZM53.3125 67.5H57.1875V66.5H53.3125V67.5ZM61.0625 67.5H63V66.5H61.0625V67.5Z"
                                        fill="black" />
                                </svg>
                                <div class="project-activity-card-inner">
                                    <p class="project-activity-card-heading">
                                        Activity
                                    </p>
                                    <table>
                                        <th>Description</th>
                                        <th style="width: 112px;">Assigned To</th>
                                        <th style="width: 123px;">Status</th>
                                        <th style="width: 130px;">Start Date</th>
                                        <th style="width: 128px;">End Date</th>
                                        <tr>
                                            <td>outlines the details of one project, including all its phases and
                                                processes
                                                involved, in a single document. It addresses...</td>
                                            <td>John Doe</td>
                                            <td class="table-status-box">
                                                <p>In Progress</p>
                                            </td>
                                            <td>20th Aug, 2022</td>
                                            <td>18th Feb, 2023</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr class="project-page-tr-dropdown">
                            <td>
                                <input type="checkbox" name="" id=""> P1234
                            </td>
                            <td>
                                Maadi Innovative Website
                            </td>
                            <td>
                                Maadi Tech & Co. Private, Ltd.
                            </td>
                            <td>
                                20th Aug, 2022
                            </td>
                            <td>
                                18th Feb, 2023
                            </td>
                            <td class="table-status-box">
                                <select name="" id="">
                                    <option value="">In Progress</option>
                                    <option value="">To Do</option>
                                    <option value="">Done</option>
                                </select>
                            </td>
                            <td class="table-action-box">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.397436" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M9.13408 17.6H9.19895L12.3287 16.9189C12.3896 16.9088 12.4461 16.8805 12.4908 16.8378L17.7935 11.5352C17.9852 11.3438 18.137 11.1162 18.24 10.8657C18.343 10.6151 18.3952 10.3466 18.3935 10.0757C18.3942 9.52429 18.1788 8.99453 17.7935 8.60005C17.6021 8.40829 17.3745 8.25649 17.124 8.15349C16.8734 8.05048 16.6049 7.99834 16.334 8.00008C16.0616 7.99766 15.7915 8.0511 15.5405 8.15708C15.2895 8.26306 15.0629 8.41934 14.8746 8.61629L9.58812 13.9189C9.54148 13.9564 9.50751 14.0074 9.49081 14.0649L8.80976 17.1946C8.80059 17.25 8.80462 17.3068 8.82153 17.3603C8.83843 17.4138 8.86774 17.4626 8.90707 17.5027C8.96695 17.5638 9.04854 17.5988 9.13408 17.6ZM16.334 8.64872C17.1132 8.64866 17.7449 9.28027 17.7449 10.0594L17.7448 10.0757C17.7474 10.2594 17.7129 10.4417 17.6432 10.6117C17.5735 10.7817 17.4702 10.9359 17.3394 11.0649L15.3449 9.05409C15.475 8.92478 15.6293 8.82242 15.7991 8.75286C15.9688 8.6833 16.1506 8.64791 16.334 8.64872ZM14.8908 9.52439L16.8854 11.519L12.2638 16.1243L10.2692 14.1459L14.8908 9.52439ZM10.0097 14.7946L11.6151 16.4L9.55568 16.8541L10.0097 14.7946ZM19.4313 19.3513H8.56651C8.38739 19.3513 8.24219 19.4965 8.24219 19.6757C8.24219 19.8548 8.38739 20 8.56651 20H19.4313C19.6104 20 19.7556 19.8548 19.7556 19.6757C19.7556 19.4965 19.6104 19.3513 19.4313 19.3513Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12" height="12" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.374" y="1.19236" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M18.1974 11.659C18.0568 11.659 17.922 11.7148 17.8227 11.8142C17.7233 11.9136 17.6675 12.0484 17.6675 12.1889V18.1192C17.6523 18.3871 17.5318 18.6382 17.3323 18.8178C17.1328 18.9973 16.8704 19.0908 16.6023 19.0778H12.3736C12.1055 19.0908 11.8432 18.9973 11.6437 18.8178C11.4442 18.6382 11.3237 18.3871 11.3085 18.1192V12.1889C11.3085 12.0484 11.2527 11.9136 11.1533 11.8142C11.0539 11.7148 10.9191 11.659 10.7786 11.659C10.638 11.659 10.5033 11.7148 10.4039 11.8142C10.3045 11.9136 10.2487 12.0484 10.2487 12.1889V18.1192C10.2638 18.6683 10.4959 19.189 10.8942 19.5673C11.2925 19.9457 11.8245 20.1507 12.3736 20.1376H16.6023C17.1515 20.1507 17.6835 19.9457 18.0818 19.5673C18.48 19.189 18.7122 18.6683 18.7273 18.1192V12.1889C18.7273 12.0484 18.6715 11.9136 18.5721 11.8142C18.4727 11.7148 18.3379 11.659 18.1974 11.659ZM18.7273 10.0692H16.6076V9.00941C16.6076 8.86886 16.5518 8.73408 16.4524 8.6347C16.353 8.53532 16.2183 8.47949 16.0777 8.47949H12.8982C12.7577 8.47949 12.6229 8.53532 12.5235 8.6347C12.4242 8.73408 12.3683 8.86886 12.3683 9.00941V10.0692H10.2487C10.1081 10.0692 9.97334 10.1251 9.87396 10.2244C9.77458 10.3238 9.71875 10.4586 9.71875 10.5991C9.71875 10.7397 9.77458 10.8745 9.87396 10.9739C9.97334 11.0732 10.1081 11.1291 10.2487 11.1291H18.7273C18.8678 11.1291 19.0026 11.0732 19.102 10.9739C19.2014 10.8745 19.2572 10.7397 19.2572 10.5991C19.2572 10.4586 19.2014 10.3238 19.102 10.2244C19.0026 10.1251 18.8678 10.0692 18.7273 10.0692ZM13.4281 10.0692V9.53932H15.5478V10.0692H13.4281Z"
                                            fill="#B7A194" />
                                        <path
                                            d="M13.9583 16.9581V13.2487C13.9583 13.1081 13.9024 12.9733 13.8031 12.874C13.7037 12.7746 13.5689 12.7188 13.4284 12.7188C13.2878 12.7188 13.153 12.7746 13.0536 12.874C12.9543 12.9733 12.8984 13.1081 12.8984 13.2487V16.9581C12.8984 17.0986 12.9543 17.2334 13.0536 17.3328C13.153 17.4321 13.2878 17.488 13.4284 17.488C13.5689 17.488 13.7037 17.4321 13.8031 17.3328C13.9024 17.2334 13.9583 17.0986 13.9583 16.9581ZM16.0779 16.9581V13.2487C16.0779 13.1081 16.0221 12.9733 15.9227 12.874C15.8233 12.7746 15.6886 12.7188 15.548 12.7188C15.4075 12.7188 15.2727 12.7746 15.1733 12.874C15.0739 12.9733 15.0181 13.1081 15.0181 13.2487V16.9581C15.0181 17.0986 15.0739 17.2334 15.1733 17.3328C15.2727 17.4321 15.4075 17.488 15.548 17.488C15.6886 17.488 15.8233 17.4321 15.9227 17.3328C16.0221 17.2334 16.0779 17.0986 16.0779 16.9581Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12.7179" height="12.7179" fill="white"
                                                transform="translate(8.12891 7.94922)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>
                        <tr class="project-activity-card">
                            <td colspan="10" class="">
                                <svg class="project-activity-card-dir-arrow" width="64" height="71" viewBox="0 0 64 71"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 67H0.5V67.5H1V67ZM63.3536 67.3536C63.5488 67.1583 63.5488 66.8417 63.3536 66.6464L60.1716 63.4645C59.9763 63.2692 59.6597 63.2692 59.4645 63.4645C59.2692 63.6597 59.2692 63.9763 59.4645 64.1716L62.2929 67L59.4645 69.8284C59.2692 70.0237 59.2692 70.3403 59.4645 70.5355C59.6597 70.7308 59.9763 70.7308 60.1716 70.5355L63.3536 67.3536ZM0.5 0V2.09375H1.5V0H0.5ZM0.5 6.28125V10.4688H1.5V6.28125H0.5ZM0.5 14.6562V18.8438H1.5V14.6562H0.5ZM0.5 23.0312V27.2188H1.5V23.0312H0.5ZM0.5 31.4062V35.5938H1.5V31.4062H0.5ZM0.5 39.7812V43.9688H1.5V39.7812H0.5ZM0.5 48.1562V52.3438H1.5V48.1562H0.5ZM0.5 56.5312V60.7188H1.5V56.5312H0.5ZM0.5 64.9062V67H1.5V64.9062H0.5ZM1 67.5H2.9375V66.5H1V67.5ZM6.8125 67.5H10.6875V66.5H6.8125V67.5ZM14.5625 67.5H18.4375V66.5H14.5625V67.5ZM22.3125 67.5H26.1875V66.5H22.3125V67.5ZM30.0625 67.5H33.9375V66.5H30.0625V67.5ZM37.8125 67.5H41.6875V66.5H37.8125V67.5ZM45.5625 67.5H49.4375V66.5H45.5625V67.5ZM53.3125 67.5H57.1875V66.5H53.3125V67.5ZM61.0625 67.5H63V66.5H61.0625V67.5Z"
                                        fill="black" />
                                </svg>
                                <div class="project-activity-card-inner">
                                    <p class="project-activity-card-heading">
                                        Activity
                                    </p>
                                    <table>
                                        <th>Description</th>
                                        <th style="width: 112px;">Assigned To</th>
                                        <th style="width: 123px;">Status</th>
                                        <th style="width: 130px;">Start Date</th>
                                        <th style="width: 128px;">End Date</th>
                                        <tr>
                                            <td>outlines the details of one project, including all its phases and
                                                processes
                                                involved, in a single document. It addresses...</td>
                                            <td>John Doe</td>
                                            <td class="table-status-box">
                                                <p>In Progress</p>
                                            </td>
                                            <td>20th Aug, 2022</td>
                                            <td>18th Feb, 2023</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr class="project-page-tr-dropdown">
                            <td>
                                <input type="checkbox" name="" id=""> P1234
                            </td>
                            <td>
                                Maadi Innovative Website
                            </td>
                            <td>
                                Maadi Tech & Co. Private, Ltd.
                            </td>
                            <td>
                                20th Aug, 2022
                            </td>
                            <td>
                                18th Feb, 2023
                            </td>
                            <td class="table-status-box">
                                <select name="" id="">
                                    <option value="">In Progress</option>
                                    <option value="">To Do</option>
                                    <option value="">Done</option>
                                </select>
                            </td>
                            <td class="table-action-box">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.397436" y="0.397436" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M9.13408 17.6H9.19895L12.3287 16.9189C12.3896 16.9088 12.4461 16.8805 12.4908 16.8378L17.7935 11.5352C17.9852 11.3438 18.137 11.1162 18.24 10.8657C18.343 10.6151 18.3952 10.3466 18.3935 10.0757C18.3942 9.52429 18.1788 8.99453 17.7935 8.60005C17.6021 8.40829 17.3745 8.25649 17.124 8.15349C16.8734 8.05048 16.6049 7.99834 16.334 8.00008C16.0616 7.99766 15.7915 8.0511 15.5405 8.15708C15.2895 8.26306 15.0629 8.41934 14.8746 8.61629L9.58812 13.9189C9.54148 13.9564 9.50751 14.0074 9.49081 14.0649L8.80976 17.1946C8.80059 17.25 8.80462 17.3068 8.82153 17.3603C8.83843 17.4138 8.86774 17.4626 8.90707 17.5027C8.96695 17.5638 9.04854 17.5988 9.13408 17.6ZM16.334 8.64872C17.1132 8.64866 17.7449 9.28027 17.7449 10.0594L17.7448 10.0757C17.7474 10.2594 17.7129 10.4417 17.6432 10.6117C17.5735 10.7817 17.4702 10.9359 17.3394 11.0649L15.3449 9.05409C15.475 8.92478 15.6293 8.82242 15.7991 8.75286C15.9688 8.6833 16.1506 8.64791 16.334 8.64872ZM14.8908 9.52439L16.8854 11.519L12.2638 16.1243L10.2692 14.1459L14.8908 9.52439ZM10.0097 14.7946L11.6151 16.4L9.55568 16.8541L10.0097 14.7946ZM19.4313 19.3513H8.56651C8.38739 19.3513 8.24219 19.4965 8.24219 19.6757C8.24219 19.8548 8.38739 20 8.56651 20H19.4313C19.6104 20 19.7556 19.8548 19.7556 19.6757C19.7556 19.4965 19.6104 19.3513 19.4313 19.3513Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12" height="12" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1.374" y="1.19236" width="26.2308" height="26.2308" rx="7.55128"
                                        stroke="#D8D8D8" stroke-width="0.794872" />
                                    <g clip-path="url(#clip0_0_1)">
                                        <path
                                            d="M18.1974 11.659C18.0568 11.659 17.922 11.7148 17.8227 11.8142C17.7233 11.9136 17.6675 12.0484 17.6675 12.1889V18.1192C17.6523 18.3871 17.5318 18.6382 17.3323 18.8178C17.1328 18.9973 16.8704 19.0908 16.6023 19.0778H12.3736C12.1055 19.0908 11.8432 18.9973 11.6437 18.8178C11.4442 18.6382 11.3237 18.3871 11.3085 18.1192V12.1889C11.3085 12.0484 11.2527 11.9136 11.1533 11.8142C11.0539 11.7148 10.9191 11.659 10.7786 11.659C10.638 11.659 10.5033 11.7148 10.4039 11.8142C10.3045 11.9136 10.2487 12.0484 10.2487 12.1889V18.1192C10.2638 18.6683 10.4959 19.189 10.8942 19.5673C11.2925 19.9457 11.8245 20.1507 12.3736 20.1376H16.6023C17.1515 20.1507 17.6835 19.9457 18.0818 19.5673C18.48 19.189 18.7122 18.6683 18.7273 18.1192V12.1889C18.7273 12.0484 18.6715 11.9136 18.5721 11.8142C18.4727 11.7148 18.3379 11.659 18.1974 11.659ZM18.7273 10.0692H16.6076V9.00941C16.6076 8.86886 16.5518 8.73408 16.4524 8.6347C16.353 8.53532 16.2183 8.47949 16.0777 8.47949H12.8982C12.7577 8.47949 12.6229 8.53532 12.5235 8.6347C12.4242 8.73408 12.3683 8.86886 12.3683 9.00941V10.0692H10.2487C10.1081 10.0692 9.97334 10.1251 9.87396 10.2244C9.77458 10.3238 9.71875 10.4586 9.71875 10.5991C9.71875 10.7397 9.77458 10.8745 9.87396 10.9739C9.97334 11.0732 10.1081 11.1291 10.2487 11.1291H18.7273C18.8678 11.1291 19.0026 11.0732 19.102 10.9739C19.2014 10.8745 19.2572 10.7397 19.2572 10.5991C19.2572 10.4586 19.2014 10.3238 19.102 10.2244C19.0026 10.1251 18.8678 10.0692 18.7273 10.0692ZM13.4281 10.0692V9.53932H15.5478V10.0692H13.4281Z"
                                            fill="#B7A194" />
                                        <path
                                            d="M13.9583 16.9581V13.2487C13.9583 13.1081 13.9024 12.9733 13.8031 12.874C13.7037 12.7746 13.5689 12.7188 13.4284 12.7188C13.2878 12.7188 13.153 12.7746 13.0536 12.874C12.9543 12.9733 12.8984 13.1081 12.8984 13.2487V16.9581C12.8984 17.0986 12.9543 17.2334 13.0536 17.3328C13.153 17.4321 13.2878 17.488 13.4284 17.488C13.5689 17.488 13.7037 17.4321 13.8031 17.3328C13.9024 17.2334 13.9583 17.0986 13.9583 16.9581ZM16.0779 16.9581V13.2487C16.0779 13.1081 16.0221 12.9733 15.9227 12.874C15.8233 12.7746 15.6886 12.7188 15.548 12.7188C15.4075 12.7188 15.2727 12.7746 15.1733 12.874C15.0739 12.9733 15.0181 13.1081 15.0181 13.2487V16.9581C15.0181 17.0986 15.0739 17.2334 15.1733 17.3328C15.2727 17.4321 15.4075 17.488 15.548 17.488C15.6886 17.488 15.8233 17.4321 15.9227 17.3328C16.0221 17.2334 16.0779 17.0986 16.0779 16.9581Z"
                                            fill="#B7A194" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_0_1">
                                            <rect width="12.7179" height="12.7179" fill="white"
                                                transform="translate(8.12891 7.94922)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>
                        <tr class="project-activity-card">
                            <td colspan="10" class="">
                                <svg class="project-activity-card-dir-arrow" width="64" height="71" viewBox="0 0 64 71"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 67H0.5V67.5H1V67ZM63.3536 67.3536C63.5488 67.1583 63.5488 66.8417 63.3536 66.6464L60.1716 63.4645C59.9763 63.2692 59.6597 63.2692 59.4645 63.4645C59.2692 63.6597 59.2692 63.9763 59.4645 64.1716L62.2929 67L59.4645 69.8284C59.2692 70.0237 59.2692 70.3403 59.4645 70.5355C59.6597 70.7308 59.9763 70.7308 60.1716 70.5355L63.3536 67.3536ZM0.5 0V2.09375H1.5V0H0.5ZM0.5 6.28125V10.4688H1.5V6.28125H0.5ZM0.5 14.6562V18.8438H1.5V14.6562H0.5ZM0.5 23.0312V27.2188H1.5V23.0312H0.5ZM0.5 31.4062V35.5938H1.5V31.4062H0.5ZM0.5 39.7812V43.9688H1.5V39.7812H0.5ZM0.5 48.1562V52.3438H1.5V48.1562H0.5ZM0.5 56.5312V60.7188H1.5V56.5312H0.5ZM0.5 64.9062V67H1.5V64.9062H0.5ZM1 67.5H2.9375V66.5H1V67.5ZM6.8125 67.5H10.6875V66.5H6.8125V67.5ZM14.5625 67.5H18.4375V66.5H14.5625V67.5ZM22.3125 67.5H26.1875V66.5H22.3125V67.5ZM30.0625 67.5H33.9375V66.5H30.0625V67.5ZM37.8125 67.5H41.6875V66.5H37.8125V67.5ZM45.5625 67.5H49.4375V66.5H45.5625V67.5ZM53.3125 67.5H57.1875V66.5H53.3125V67.5ZM61.0625 67.5H63V66.5H61.0625V67.5Z"
                                        fill="black" />
                                </svg>
                                <div class="project-activity-card-inner">
                                    <p class="project-activity-card-heading">
                                        Activity
                                    </p>
                                    <table>
                                        <th>Description</th>
                                        <th style="width: 112px;">Assigned To</th>
                                        <th style="width: 123px;">Status</th>
                                        <th style="width: 130px;">Start Date</th>
                                        <th style="width: 128px;">End Date</th>
                                        <tr>
                                            <td>outlines the details of one project, including all its phases and
                                                processes
                                                involved, in a single document. It addresses...</td>
                                            <td>John Doe</td>
                                            <td class="table-status-box">
                                                <p>In Progress</p>
                                            </td>
                                            <td>20th Aug, 2022</td>
                                            <td>18th Feb, 2023</td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>