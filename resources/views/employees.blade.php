@extends('partial.main')

@section('content')

    <div class="body-container">
        <div class="sidebar">
            <div class="fixed-sidebar">
                <div class="sidebar-heading">
                    <img src="{{ asset('app_assets/images/admin_icon.svg')}}" alt="admin_logo">
                    <h4 class="ml-20">ADMIN</h4>
                </div>
            </div>
            <ul class="sidebar-links">
                <a href="#">
                    <li  class="sidebar-link-container">
                        <div class="sidebar-image-container">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 13H15V19H18V10L12 5.5L6 10V19H9V13ZM4 21V9L12 3L20 9V21H4Z" fill="#C4C4C4"/>
                            </svg>
                        </div>
                        <p class="ml-15">Overview</p>
                    </li>
                </a>
                <a href="#">
                    <li  class="sidebar-link-container  sidebar-link-container-active">
                        <div class="sidebar-image-container">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4916 8.23285C16.4916 10.5825 14.6184 12.4666 12.2823 12.4666C9.94618 12.4666 8.07299 10.5825 8.07299 8.23285C8.07299 5.88227 9.94618 4 12.2823 4C14.6184 4 16.4916 5.88227 16.4916 8.23285ZM12.2823 20C8.8511 20 5.92134 19.456 5.92134 17.2802C5.92134 15.1034 8.83229 14.5396 12.2823 14.5396C15.7135 14.5396 18.6432 15.0836 18.6432 17.2604C18.6432 19.4362 15.7323 20 12.2823 20ZM18.2903 8.30922C18.2903 9.50703 17.9331 10.6229 17.3063 11.5505C17.2418 11.646 17.2991 11.7748 17.4128 11.7946C17.5695 11.8216 17.7316 11.8369 17.8964 11.8414C19.5394 11.8846 21.0142 10.821 21.4216 9.21974C22.0251 6.84123 20.2531 4.7059 17.9967 4.7059C17.7513 4.7059 17.5167 4.73201 17.2884 4.77884C17.257 4.78605 17.2239 4.80046 17.206 4.82838C17.1845 4.8626 17.2006 4.90853 17.2221 4.93825C17.8999 5.8938 18.2903 7.05918 18.2903 8.30922ZM21.0115 13.5126C22.1155 13.7296 22.8417 14.1727 23.1425 14.8166C23.3968 15.3453 23.3968 15.9586 23.1425 16.4864C22.6823 17.4851 21.1986 17.8058 20.622 17.8886C20.5029 17.9066 20.4071 17.8031 20.4196 17.6833C20.7142 14.9157 18.3709 13.6035 17.7647 13.3018C17.7388 13.2883 17.7334 13.2676 17.7361 13.255C17.7379 13.246 17.7486 13.2316 17.7683 13.2289C19.0801 13.2046 20.4903 13.3847 21.0115 13.5126ZM6.77036 11.8413C6.93512 11.8368 7.09629 11.8224 7.25388 11.7945C7.36759 11.7747 7.4249 11.6459 7.36043 11.5504C6.73365 10.6228 6.37638 9.50694 6.37638 8.30913C6.37638 7.05909 6.76678 5.89371 7.4446 4.93816C7.46609 4.90844 7.48131 4.86251 7.46072 4.82829C7.44281 4.80127 7.40878 4.78596 7.37834 4.77875C7.14912 4.73192 6.91452 4.70581 6.66918 4.70581C4.41277 4.70581 2.64076 6.84114 3.24516 9.21965C3.65257 10.8209 5.1273 11.8845 6.77036 11.8413ZM6.93019 13.2545C6.93288 13.268 6.9275 13.2878 6.90243 13.3022C6.29535 13.6039 3.95208 14.9161 4.24667 17.6827C4.2592 17.8034 4.16429 17.9061 4.0452 17.889C3.46856 17.8061 1.98488 17.4855 1.52464 16.4867C1.26945 15.9581 1.26945 15.3457 1.52464 14.817C1.8255 14.1731 2.55078 13.73 3.65481 13.512C4.17683 13.385 5.58619 13.2049 6.89885 13.2292C6.91855 13.2319 6.9284 13.2464 6.93019 13.2545Z" fill="#C4C4C4"/>
                            </svg>
                        </div>
                        <p class="ml-15">Employees</p>
                    </li>
                </a>
                <a href="#">
                    <li  class="sidebar-link-container">
                        <div class="sidebar-image-container">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 8H4V6H20V8ZM20 18H4V12H20V18ZM20 4H4C2.89 4 2 4.89 2 6V18C2 18.5304 2.21071 19.0391 2.58579 19.4142C2.96086 19.7893 3.46957 20 4 20H20C20.5304 20 21.0391 19.7893 21.4142 19.4142C21.7893 19.0391 22 18.5304 22 18V6C22 4.89 21.1 4 20 4Z" fill="#C4C4C4"/>
                            </svg>
                        </div>
                        <p class="ml-15">Payments</p>
                    </li>
                </a>
                <a href="#">
                    <li  class="sidebar-link-container">
                        <div class="sidebar-image-container">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4023 13.5801C20.76 13.7701 21.036 14.0701 21.2301 14.3701C21.6083 14.9901 21.5776 15.7501 21.2097 16.4201L20.4943 17.6201C20.1162 18.2601 19.411 18.6601 18.6855 18.6601C18.3278 18.6601 17.9292 18.5601 17.6022 18.3601C17.3365 18.1901 17.0299 18.1301 16.7029 18.1301C15.6911 18.1301 14.8429 18.9601 14.8122 19.9501C14.8122 21.1001 13.872 22.0001 12.6968 22.0001H11.3069C10.1215 22.0001 9.18125 21.1001 9.18125 19.9501C9.16081 18.9601 8.31259 18.1301 7.30085 18.1301C6.96361 18.1301 6.65702 18.1901 6.40153 18.3601C6.0745 18.5601 5.66572 18.6601 5.31825 18.6601C4.58245 18.6601 3.87729 18.2601 3.49917 17.6201L2.79402 16.4201C2.4159 15.7701 2.39546 14.9901 2.77358 14.3701C2.93709 14.0701 3.24368 13.7701 3.59115 13.5801C3.87729 13.4401 4.06125 13.2101 4.23498 12.9401C4.74596 12.0801 4.43937 10.9501 3.57071 10.4401C2.55897 9.87011 2.23194 8.60011 2.81446 7.61011L3.49917 6.43011C4.09191 5.44011 5.35913 5.09011 6.38109 5.67011C7.27019 6.15011 8.425 5.83011 8.9462 4.98011C9.10972 4.70011 9.20169 4.40011 9.18125 4.10011C9.16081 3.71011 9.27323 3.34011 9.4674 3.04011C9.84553 2.42011 10.5302 2.02011 11.2763 2.00011H12.7172C13.4735 2.00011 14.1582 2.42011 14.5363 3.04011C14.7203 3.34011 14.8429 3.71011 14.8122 4.10011C14.7918 4.40011 14.8838 4.70011 15.0473 4.98011C15.5685 5.83011 16.7233 6.15011 17.6226 5.67011C18.6344 5.09011 19.9118 5.44011 20.4943 6.43011L21.179 7.61011C21.7718 8.60011 21.4447 9.87011 20.4228 10.4401C19.5541 10.9501 19.2475 12.0801 19.7687 12.9401C19.9322 13.2101 20.1162 13.4401 20.4023 13.5801ZM9.10972 12.0101C9.10972 13.5801 10.4076 14.8301 12.0121 14.8301C13.6165 14.8301 14.8838 13.5801 14.8838 12.0101C14.8838 10.4401 13.6165 9.18011 12.0121 9.18011C10.4076 9.18011 9.10972 10.4401 9.10972 12.0101Z" fill="#C4C4C4"/>
                            </svg>
                        </div>
                        <p class="ml-15">Settings</p>
                    </li>
                </a>
            </ul>
        </div>
        <div class="main-content">
            <div class="main-content-container">
                <div class="card-container">
                    <div class="search_div">
                        <img src="{{ asset('app_assets/images/search.svg')}}" alt="message_icon" class="input_icon_message">
                        <label>
                            <input placeholder="Search">
                        </label>
                    </div>
                    <div class="calendar-div flex-center flex-between">
                        <div class="flex-center">
                            <img src="{{ asset('app_assets/images/calendar.svg')}}" alt="calendar">
                            <p class="ml-10">22nd May, 2020</p>
                        </div>
                        <img src="{{ asset('app_assets/images/arrow-down.svg')}}" alt="arrow-down" class="ml-20">
                    </div>
                </div>
                <div class="content-heading">
                    <h1 class="main-heading">Employees</h1>
                    <div class="flex">
                        <button class="button_outline_blue">Bulk Upload</button>
                        <button class="button_blue ml-20">New Employee</button>
                    </div>
                </div>
                <div class="card-container">
                    <div class="card flex-center flex-justify-center">
                        <p>Total Monthly Budget:</p>
                        <h2 class="budget-heading">&nbsp; NGN 500,000</h2>
                    </div>
                </div>
                <div class="card-container">
                   <div class="card horizontal-scroll">
                       <table class="employee-table">
                           <tr>
                               <th></th>
                               <th>Employee Name</th>
                               <th>Email ID</th>
                               <th>Phone No</th>
                               <th>Budget/Month</th>
                               <th>Due Date</th>
                               <th>Status</th>
                               <th>Actions</th>
                           </tr>
                           <tr>
                               <td>
                                   <div class="option">
                                       <input type="checkbox" class="styled-checkbox styled-checkbox2" id="employee1">
                                       <label for="employee1"></label>
                                   </div>
                               </td>
                               <td><p>Olude Lekan</p></td>
                               <td><span>olalekanolude@gmail.com</span></td>
                               <td><span>08093459120</span></td>
                               <td><span>NGN 2,000</span></td>
                               <td><span>02/20/2021</span></td>
                               <td class="flex-center">
                                   <img src="{{ asset('app_assets/images/active.svg')}}" alt="active-icon">
                                   <p class="ml-10 color-green">Active</p>
                               </td>
                               <td><img src="{{ asset('app_assets/images/more.svg')}}" alt="more"></td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="option">
                                       <input type="checkbox" class="styled-checkbox styled-checkbox2" id="employee3">
                                       <label for="employee3"></label>
                                   </div>
                               </td>
                               <td><p>Olude Lekan</p></td>
                               <td><span>olalekanolude@gmail.com</span></td>
                               <td><span>08093459120</span></td>
                               <td><span>NGN 2,000</span></td>
                               <td><span>02/20/2021</span></td>
                               <td class="flex-center">
                                   <img src="{{ asset('app_assets/images/active.svg')}}" alt="active-icon">
                                   <p class="ml-10 color-green">Active</p>
                               </td>
                               <td><img src="{{ asset('app_assets/images/more.svg')}}" alt="more"></td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="option">
                                       <input type="checkbox" class="styled-checkbox styled-checkbox2" id="employee4">
                                       <label for="employee4"></label>
                                   </div>
                               </td>
                               <td><p>Olude Lekan</p></td>
                               <td><span>olalekanolude@gmail.com</span></td>
                               <td><span>08093459120</span></td>
                               <td><span>NGN 2,000</span></td>
                               <td><span>02/20/2021</span></td>
                               <td class="flex-center">
                                   <img src="{{ asset('app_assets/images/active.svg')}}" alt="active-icon">
                                   <p class="ml-10 color-green">Active</p>
                               </td>
                               <td><img src="{{ asset('app_assets/images/more.svg')}}" alt="more"></td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="option">
                                       <input type="checkbox" class="styled-checkbox styled-checkbox2" id="employee5">
                                       <label for="employee5"></label>
                                   </div>
                               </td>
                               <td><p>Olude Lekan</p></td>
                               <td><span>olalekanolude@gmail.com</span></td>
                               <td><span>08093459120</span></td>
                               <td><span>NGN 2,000</span></td>
                               <td><span>02/20/2021</span></td>
                               <td class="flex-center">
                                   <img src="{{ asset('app_assets/images/active.svg')}}" alt="active-icon">
                                   <p class="ml-10 color-green">Active</p>
                               </td>
                               <td><img src="{{ asset('app_assets/images/more.svg')}}" alt="more"></td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="option">
                                       <input type="checkbox" class="styled-checkbox styled-checkbox2" id="employee6">
                                       <label for="employee6"></label>
                                   </div>
                               </td>
                               <td><p>Olude Lekan</p></td>
                               <td><span>olalekanolude@gmail.com</span></td>
                               <td><span>08093459120</span></td>
                               <td><span>NGN 2,000</span></td>
                               <td><span>02/20/2021</span></td>
                               <td class="flex-center">
                                   <img src="{{ asset('app_assets/images/active.svg')}}" alt="active-icon">
                                   <p class="ml-10 color-green">Active</p>
                               </td>
                               <td><img src="{{ asset('app_assets/images/more.svg')}}" alt="more"></td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="option">
                                       <input type="checkbox" class="styled-checkbox styled-checkbox2" id="employee7">
                                       <label for="employee7"></label>
                                   </div>
                               </td>
                               <td><p>Olude Lekan</p></td>
                               <td><span>olalekanolude@gmail.com</span></td>
                               <td><span>08093459120</span></td>
                               <td><span>NGN 2,000</span></td>
                               <td><span>02/20/2021</span></td>
                               <td class="flex-center">
                                   <img src="{{ asset('app_assets/images/active.svg')}}" alt="active-icon">
                                   <p class="ml-10 color-green">Active</p>
                               </td>
                               <td><img src="{{ asset('app_assets/images/more.svg')}}" alt="more"></td>
                           </tr>
                           <tr>
                               <td>
                                   <div class="option">
                                       <input type="checkbox" class="styled-checkbox styled-checkbox2" id="employee2">
                                       <label for="employee2"></label>
                                   </div>
                               </td>
                               <td><p>Olude Lekan</p></td>
                               <td><span>olalekanolude@gmail.com</span></td>
                               <td><span>08093459120</span></td>
                               <td><span>NGN 2,000</span></td>
                               <td><span>02/20/2021</span></td>
                               <td class="flex-center">
                                   <img src="{{ asset('assets/images/active.svg')}}" alt="active-icon">
                                   <p class="ml-10 color-green">Active</p>
                               </td>
                               <td><img src="{{ asset('app_assets/images/more.svg')}}" alt="more"></td>
                           </tr>
                       </table>
                   </div>
                </div>
                <div class="flex-center flex-between mt-30">
                    <div class="flex">
                        <p class="table-heading">Rows per page:</p>
                        <h6 class="table-heading ml-15 color-black flex-center">10 <img src="assets/images/drop-down.svg" class="ml-5"></h6>
                    </div>
                    <div class="flex">
                        <p class="table-heading">1-10 of 60</p>
                        <div class="flex ml-20">
                            <img src="{{ asset('app_assets/images/arrow-down.svg')}}" alt="arrow-down" class="transform-left">
                            <img src="{{ asset('app_assets/images/arrow-down.svg')}}" alt="arrow-down" class="transform-right ml-15">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('app_assets/js/script.js')}}"></script>

@endsection
