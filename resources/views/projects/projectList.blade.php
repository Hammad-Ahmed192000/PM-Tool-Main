@php 
 use App\Models\Companies;
 use App\Models\projectsDrawing;
 use App\Models\User;
 use Carbon\Carbon;
@endphp
@include('template.header')
<body>
    <!-- Background Layer For Filters Opening  -->
    <div class="back-transparent-layer"></div>
    <div class="content">
    @include('template.sidebar')
        <div class="right-side-content">
        @include('template.loginBar')
            <div class="page-name-heading wrap">
                <p><?=$page_title;?></p>
            </div>
            <div class="project-list-inner-outer-container">
               
                <div class="project-list-inner-container">
                    @foreach($projects as $item)
                        @foreach($item->activities as $activity)
                        <div class="project-list-card-full">
                            <p class="project-list-doing">
                               
                                @if($activity->assignedStatus == 'progress')
                                    Doing
                                @elseif($activity->assignedStatus == 'completed')
                                    Done
                                @else
                                    To Do
                                @endif
                                <a href="./addProject.html" title="Add A Project">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="33" height="33" rx="3.5" stroke="#102437"
                                            stroke-opacity="0.08" />
                                        <path d="M11.75 17H17M17 17H22.25M17 17V11.75M17 17V22.25" stroke="#181F26"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </p>
                            <div class="project-list-card-full-inner">
                                <p class="project-list-card-full-inner-heading">{{$item->name}}
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.588235" y="0.588235" width="38.8235" height="38.8235" rx="4.11765"
                                            stroke="#102437" stroke-opacity="0.08" stroke-width="1.17647" />
                                        <path
                                            d="M20 25.192L23.308 21.885L22.6 21.177L20.5 23.277V18.577H19.5V23.277L17.4 21.177L16.692 21.885L20 25.192ZM13 15.808V26.385C13 26.5643 13.0577 26.7117 13.173 26.827C13.2883 26.9423 13.4357 27 13.615 27H26.385C26.5643 27 26.7117 26.9423 26.827 26.827C26.9423 26.7117 27 26.5643 27 26.385V15.808H13ZM13.77 28C13.322 28 12.915 27.817 12.549 27.451C12.183 27.0843 12 26.6777 12 26.231V15.487C12 15.2917 12.031 15.1083 12.093 14.937C12.1557 14.765 12.249 14.6067 12.373 14.462L13.931 12.59C14.0757 12.3953 14.2567 12.2483 14.474 12.149C14.6913 12.0497 14.9247 12 15.174 12H24.788C25.0373 12 25.274 12.0497 25.498 12.149C25.7213 12.249 25.9053 12.396 26.05 12.59L27.627 14.5C27.751 14.6447 27.8443 14.8063 27.907 14.985C27.969 15.163 28 15.3497 28 15.545V26.23C28 26.6767 27.817 27.0833 27.451 27.45C27.0843 27.816 26.6777 27.999 26.231 27.999L13.77 28ZM13.38 14.808H26.6L25.27 13.212C25.2053 13.1473 25.1313 13.096 25.048 13.058C24.9647 13.0193 24.878 13 24.788 13H15.192C15.1027 13 15.016 13.0193 14.932 13.058C14.8493 13.096 14.776 13.1473 14.712 13.212L13.38 14.808Z"
                                            fill="#181F26" stroke="#181F26" />
                                    </svg>
                                </p>
                                <div class="project-list-card-full-inner-subheading">
                                    <div>
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <mask id="mask0_2_12135" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                x="0" y="0" width="22" height="24">
                                                <rect x="0.5" width="21.3818" height="24" fill="url(#pattern0)" />
                                            </mask>
                                            <g mask="url(#mask0_2_12135)">
                                                <rect x="0.5" width="21.3818" height="24" fill="#085DB7" />
                                            </g>
                                            <defs>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                    height="1">
                                                    <use xlink:href="#image0_2_12135"
                                                        transform="matrix(0.00219228 0 0 0.00195312 -0.0612245 0)" />
                                                </pattern>
                                                <image id="image0_2_12135" width="512" height="512"
                                                    xlink:href="data:image/png;base64,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aEwCHF/yTAKs01+NUioBGAWznTRAgACMPzjkXE2bBGgSYAPdwzKrQACW2e5LPGoCQAByhGTINm4BuAXQdV9KALpuPpUfQIAAEIAhg3vOtgSAAAzogtrblAC01yZqVIcAASAAOYP6kG0IAAGo01spFQEEEEAAAQQQQAABBBBAAAEEEEAAAQQQQAABBBBAAAEEEEAAAQQQQAABBBBAAAEEEEAAAQQQQAABBBBAAAEEEEAAAQQQQAABBBBAAAEEEEAAAQQQQAABBOZP4JaIuM9/DMSAGBADYuCIGPgT8x8m53uEc38U8JDHetq2zUfFahftIgbajQFfB9yxHxCAdk8snZ62EQNioPUYIAAEIFoPUvXTkYoBMSAGyscAASAABCDKn1g6K0zFgBhoPQYIAAEgAARADIgBMbDAGCAABMCJv8ATv/UrE/Vz9SwG6scAASAABIAAiAExIAYWGAMEgAA48Rd44ru6qn91hTHGrccAASAABIAAiAExIAYWGAMEgAA48Rd44rd+ZaJ+rp7FQP0YIAAEgAAQADEgBsTAAmOAABAAJ/4CT3xXV/WvrjDGuPUYIAAEgAAQADEgBsTAAmOAABAAJ/4CT/zWr0zUz9WzGKgfAwSAABAAAiAGxIAYWGAMEAAC4MRf4Inv6qr+1RXGGLceAwSAABAAAiAGxIAYWGAMEAAC4MRf4Inf+pWJ+rl6FgP1Y4AAdCwAqo4AAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCCAAAIIIIAAAggggAACCCBwJIH/D6SN4k7ExvvqAAAAAElFTkSuQmCC" />
                                            </defs>
                                        </svg>
                                    </div>
                                    @php 
                                        $company =Companies::where('id',$item->companyId)->first();
                                    @endphp
                                    {{$item->name}}
                                </div>
                                <div class="project-list-card-full-inner-date">
                                    <div>
                                        <p>Start Date</p>
                                        <p>{{$activity->startDate}}</p>
                                    </div>
                                    <div>
                                        <p>End Date</p>
                                        <p>{{$activity->endDate}}</p>
                                    </div>
                                </div>
                                <div class="project-list-card-progress-box">
                                    <p class="percentage">
                                        <!-- 0% -->
                                        @if($activity->assignedStatus == 'progress')
                                            50%
                                        @elseif($activity->assignedStatus == 'completed')
                                            100%
                                        @else
                                            0%
                                        @endif
                                    </p>
                                    <div class="project-list-card-progress-outer">
                                         <div class="project-list-card-progress-inner 
                                            @if($activity->assignedStatus == 'progress')
                                                progress-fifty-per
                                            @elseif($activity->assignedStatus == 'completed')
                                                progress-full-per
                                            @else
                                                progress-half-per
                                            @endif
                                        "></div>
                                    </div>
                                    <div class="project-list-card-task-total">
                                        <div>
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.389056 10.2636C0.346317 11.0204 0.529113 11.7729 0.914299 12.4258C1.29949 13.0786 1.86974 13.6025 2.55285 13.9311C3.23596 14.2596 4.00121 14.3781 4.75169 14.2715C5.50218 14.1648 6.20415 13.8379 6.76871 13.3321L12.7304 7.99921C12.8292 7.91078 12.8889 7.78671 12.8962 7.65428C12.9036 7.52186 12.8581 7.39193 12.7696 7.29309C12.6812 7.19425 12.5571 7.13458 12.4247 7.12721C12.2923 7.11985 12.1624 7.16539 12.0635 7.25382L6.10249 12.5874C5.53933 13.0659 4.8115 13.3053 4.07428 13.2547C3.33706 13.204 2.6488 12.8673 2.15632 12.3164C1.66385 11.7655 1.40615 11.0439 1.43819 10.3057C1.47023 9.56739 1.78948 8.87087 2.32783 8.36467L10.0276 1.47618C10.207 1.31559 10.4163 1.19193 10.6435 1.11225C10.8707 1.03257 11.1114 0.998443 11.3519 1.01181C11.5923 1.02518 11.8277 1.08579 12.0447 1.19017C12.2617 1.29455 12.456 1.44066 12.6165 1.62015C12.9396 1.98304 13.1059 2.45914 13.0789 2.94431C13.0519 3.42948 12.8339 3.88421 12.4725 4.20903L6.25953 9.7636C6.09482 9.91096 5.87832 9.98684 5.65765 9.97457C5.43699 9.9623 5.23024 9.86288 5.08288 9.69817C4.93553 9.53346 4.85964 9.31696 4.87191 9.09629C4.88418 8.87563 4.98361 8.66888 5.14832 8.52152L9.12181 4.96732C9.17206 4.92395 9.21317 4.87101 9.24275 4.81158C9.27232 4.75215 9.28976 4.68743 9.29405 4.62119C9.29835 4.55495 9.2894 4.48852 9.26775 4.42577C9.24609 4.36302 9.21215 4.30521 9.16792 4.25572C9.12368 4.20623 9.07003 4.16604 9.0101 4.1375C8.95017 4.10896 8.88515 4.09265 8.81884 4.08951C8.75254 4.08637 8.68627 4.09646 8.62391 4.11921C8.56155 4.14195 8.50434 4.17688 8.45562 4.22197L4.4821 7.77684C4.12345 8.10187 3.90792 8.55557 3.88254 9.03892C3.85716 9.52228 4.02398 9.99605 4.34661 10.3569C4.66924 10.7177 5.12149 10.9362 5.60466 10.9649C6.08783 10.9935 6.56271 10.8298 6.92568 10.5096L13.1321 4.95335C13.4094 4.70528 13.6351 4.40503 13.7963 4.06974C13.9575 3.73444 14.0512 3.37067 14.0718 2.99919C14.0925 2.62772 14.0398 2.25581 13.9167 1.90471C13.7936 1.5536 13.6026 1.23017 13.3545 0.952892C13.1065 0.675611 12.8062 0.449906 12.4709 0.288663C12.1356 0.127419 11.7719 0.0337937 11.4004 0.0131355C11.0289 -0.00752274 10.657 0.0451905 10.3059 0.168263C9.95479 0.291335 9.63137 0.482357 9.35409 0.730422L1.65433 7.61891C1.27968 7.95472 0.975055 8.36122 0.757925 8.81507C0.540794 9.26892 0.41544 9.76118 0.389056 10.2636Z"
                                                    fill="#085DB7" />
                                            </svg>
                                            @php 
                                            $drawings = projectsDrawing::where('projectId',$item->id)->get();
                                            $totalDrawing = count($drawings);
                                            @endphp
                                            {{$totalDrawing}}
                                        </div>
                                        <div>
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_2_12160)">
                                                    <path
                                                        d="M14.7804 1.74957C14.7103 1.67942 14.627 1.62377 14.5354 1.58581C14.4438 1.54785 14.3456 1.52831 14.2464 1.52832C14.1472 1.52833 14.049 1.54788 13.9574 1.58586C13.8658 1.62384 13.7825 1.6795 13.7124 1.74967L6.93487 8.52832L3.81274 5.40609C3.67112 5.26447 3.47905 5.18489 3.27876 5.18487C3.07848 5.18485 2.88639 5.26439 2.74474 5.40599C2.67459 5.4761 2.61894 5.55935 2.58097 5.65097C2.543 5.74259 2.52345 5.84079 2.52344 5.93997C2.52343 6.03915 2.54296 6.13736 2.58091 6.22899C2.61887 6.32062 2.6745 6.40387 2.74464 6.47399L6.40087 10.1304C6.471 10.2006 6.55426 10.2562 6.64591 10.2942C6.73755 10.3321 6.83577 10.3517 6.93497 10.3517C7.03416 10.3517 7.13239 10.3321 7.22403 10.2942C7.31567 10.2562 7.39893 10.2006 7.46907 10.1304L14.7806 2.81756C14.9222 2.67589 15.0017 2.4838 15.0016 2.28352C15.0016 2.08325 14.922 1.89118 14.7804 1.74957Z"
                                                        fill="#085DB7" />
                                                    <path
                                                        d="M13.1481 6.5897C12.9478 6.5897 12.7557 6.66927 12.614 6.8109C12.4724 6.95254 12.3928 7.14463 12.3928 7.34493V12.9407H1.51046V2.05831H10.1271C10.5443 2.05831 10.8824 1.72027 10.8824 1.30308C10.8824 1.10278 10.8028 0.910687 10.6612 0.769054C10.5195 0.62742 10.3274 0.547852 10.1271 0.547852H0.755231C0.554931 0.547852 0.362835 0.62742 0.221202 0.769054C0.0795688 0.910687 0 1.10278 0 1.30308L0 13.6959C0 13.8962 0.0795688 14.0883 0.221202 14.23C0.362835 14.3716 0.554931 14.4512 0.755231 14.4512H13.1481C13.5653 14.4512 13.9033 14.1131 13.9033 13.6959V7.34493C13.9033 7.14463 13.8237 6.95254 13.6821 6.8109C13.5405 6.66927 13.3484 6.5897 13.1481 6.5897Z"
                                                        fill="#085DB7" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2_12160">
                                                        <rect width="15" height="15" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            0/1
                                        </div>
                                    </div>
                                </div>
                                <div class="project-list-card-detail-expand">
                                    <p class="project-list-card-detail-expand-heading">Activity</p>
                                    <p class="project-list-card-detail-expand-description">
                                        {{$activity->description}}
                                    </p>
                                    <div class="project-list-card-detail-expand-assigned-row">
                                        <div>
                                            <p>Assigned To</p>
                                            <p>
                                            @php
                                                $user = User::where('id',$activity->assignedTo)->first();
                                            @endphp
                                            {{$user->fname}}
                                            </p>
                                        </div>
                                        <div>
                                            <p>Status</p>
                                            <p>{{$activity->assignedStatus}}</p>
                                        </div>
                                    </div>
                                    <div class="project-list-card-detail-expand-date-row">
                                        <div>
                                            <p>Start Date </p>
                                            <p>{{$activity->startDate}}</p>
                                        </div>
                                        <div>
                                            <p>End Date</p>
                                            <p>{{$activity->endDate}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-list-card-option-row">
                                    <button>View Details
                                        <svg width="11" height="14" viewBox="0 0 11 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.98216 13.1676C5.11499 13.3004 5.29513 13.375 5.48295 13.375C5.67078 13.375 5.85091 13.3004 5.98374 13.1676L9.99079 9.16057C10.0584 9.09523 10.1124 9.01707 10.1495 8.93065C10.1866 8.84423 10.2062 8.75128 10.207 8.65723C10.2078 8.56317 10.1899 8.4699 10.1543 8.38285C10.1187 8.2958 10.0661 8.21671 9.99957 8.1502C9.93306 8.0837 9.85397 8.0311 9.76692 7.99549C9.67987 7.95987 9.5866 7.94195 9.49254 7.94276C9.39849 7.94358 9.30554 7.96312 9.21912 8.00025C9.13271 8.03737 9.05454 8.09133 8.9892 8.15898L6.19129 10.9569L6.19129 1.57644C6.19129 1.38858 6.11666 1.20841 5.98382 1.07557C5.85098 0.942736 5.67082 0.868109 5.48295 0.868109C5.29509 0.868109 5.11492 0.942736 4.98209 1.07557C4.84925 1.20841 4.77462 1.38858 4.77462 1.57644L4.77462 10.9569L1.9767 8.15898C1.84311 8.02996 1.66418 7.95856 1.47846 7.96017C1.29274 7.96179 1.11508 8.03628 0.983748 8.16761C0.852417 8.29894 0.777922 8.4766 0.776308 8.66232C0.774694 8.84805 0.846091 9.02697 0.975119 9.16057L4.98216 13.1676Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                    <div>
                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 13.625C5.78859 13.625 4.60439 13.2658 3.59713 12.5928C2.58988 11.9197 1.80483 10.9631 1.34124 9.84394C0.877654 8.72474 0.756358 7.49321 0.992693 6.30507C1.22903 5.11694 1.81238 4.02557 2.66897 3.16897C3.52557 2.31238 4.61694 1.72903 5.80507 1.49269C6.99321 1.25636 8.22474 1.37765 9.34394 1.84124C10.4631 2.30483 11.4197 3.08988 12.0928 4.09713C12.7658 5.10439 13.125 6.28859 13.125 7.5C13.125 9.12445 12.4797 10.6824 11.331 11.831C10.1824 12.9797 8.62445 13.625 7 13.625ZM7 2.25C5.96165 2.25 4.94662 2.55791 4.08326 3.13479C3.2199 3.71166 2.547 4.5316 2.14964 5.49091C1.75228 6.45023 1.64831 7.50583 1.85088 8.52423C2.05345 9.54263 2.55347 10.4781 3.28769 11.2123C4.02192 11.9465 4.95738 12.4466 5.97578 12.6491C6.99418 12.8517 8.04978 12.7477 9.00909 12.3504C9.9684 11.953 10.7883 11.2801 11.3652 10.4167C11.9421 9.55339 12.25 8.53835 12.25 7.5C12.25 6.10762 11.6969 4.77226 10.7123 3.78769C9.72775 2.80313 8.39239 2.25 7 2.25Z"
                                                fill="#F1595C" />
                                            <path
                                                d="M9.00813 10.125L6.5625 7.67938V3.5625H7.4375V7.31625L9.625 9.50813L9.00813 10.125Z"
                                                fill="#F1595C" />
                                        </svg>
                                        @php
                                            $endDate = Carbon::parse($activity->endDate);
                                            $today = Carbon::now();

                                            $remainingDays = $today->diffInDays($endDate);
                                        @endphp
                                        {{$remainingDays}} days left
                                    </div>
                                </div>
                            </div>
                            <div class="project-list-full-card-add-project">

                                <!-- <a href="addProject.html">
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_2_12236" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="27" height="27">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.3823 6.96928C14.3823 6.51432 14.0134 6.14551 13.5585 6.14551C13.1035 6.14551 12.7347 6.51432 12.7347 6.96928V12.7357H6.9683C6.51335 12.7357 6.14453 13.1045 6.14453 13.5595C6.14453 14.0144 6.51335 14.3832 6.9683 14.3832H12.7347V20.1496C12.7347 20.6046 13.1035 20.9734 13.5585 20.9734C14.0134 20.9734 14.3823 20.6046 14.3823 20.1496V14.3832H20.1487C20.6036 14.3832 20.9724 14.0144 20.9724 13.5595C20.9724 13.1045 20.6036 12.7357 20.1487 12.7357H14.3823V6.96928Z"
                                                fill="#28303F" />
                                        </mask>
                                        <g mask="url(#mask0_2_12236)">
                                            <rect x="0.378906" y="0.378906" width="26.3607" height="26.3607"
                                                fill="#181F26" />
                                        </g>
                                    </svg>
                                    Add A Project
                                </a> -->
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>