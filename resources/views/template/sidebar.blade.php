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
                    <li class=" @if($side_param == 'company') sidebar-active-page @endif">
                        <div class="sidebar-option-main ">
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
                        <div class="sidebar-option-dropdown  @if($side_param == 'company') sidebar-option-dropdown-active @endif">
                            <a href="{{route('CompaniesList')}}">
                                Companies List
                            </a>
                            <a href="{{route('CompaniesAdd')}}">
                                Add Company
                            </a>
                        </div>
                    </li>
                    <li class="@if($side_param == 'project') sidebar-active-page @endif">
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
                        <div class="sidebar-option-dropdown @if($side_param == 'project') sidebar-option-dropdown-active @endif">
                            <a href="{{route('ProjectsList')}}">
                                Projects
                            </a>
                            <a href="{{route('ProjectsCardList')}}">
                                Card View
                            </a>
                            
                            <!-- <a href="#">
                                Timeline View
                            </a> -->
                            <a href="{{route('ProjectsAdd')}}">
                                Add Project
                            </a>
                        </div>
                    </li>
                    <li class="@if($side_param == 'documents') sidebar-active-page @endif">
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
                        <div class="sidebar-option-dropdown @if($side_param == 'documents') sidebar-option-dropdown-active @endif">
                            <a href="./folders.html">
                                Folders
                            </a>
                            <a href="{{route('DocumentsList')}}">
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
                    <li class="@if($side_param == 'user') sidebar-active-page @endif">
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
                        <div class="sidebar-option-dropdown @if($side_param == 'user') sidebar-option-dropdown-active @endif ">
                            <a href="{{route('usersList')}}">
                                User List
                            </a>
                            <a href="{{route('usersAdd')}}">
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