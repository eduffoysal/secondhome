<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <link rel="stylesheet" href="../../output/./output.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lilita+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../output/./output.css">
        <link rel="stylesheet" href="stylee.css">

<style>

.container{
    @apply max-w-[1480px] mx-auto px-3;
}

.transition-default{
    @apply transition-all duration-300 ease-in-out;
}


/* page top */
.page-top{
    @apply bg-white h-[60px] border-b-[1px] border-solid border-black/10 flex items-stretch;
}
.navbar{
    @apply h-full flex justify-between w-auto items-center;
}
.navbar-l{
    @apply flex items-center h-full;
}
.navbar-r{
    @apply flex items-center;
}
.navbar-brand{
    @apply me-6 lg:me-10 my-auto font-lilita relative after:absolute after:content-[''] after:w-[6px] after:h-[6px] after:-right-2 after:bottom-2 after:rounded-full after:bg-persian-rose text-3xl;
}
.nav-list{
    @apply fixed flex flex-col left-0 top-0 bg-white h-full z-10 w-[240px] pt-16 pb-10 px-3 shadow-nav lg:relative lg:bg-transparent lg:h-auto lg:flex-row lg:shadow-none lg:left-auto lg:top-auto lg:w-auto lg:pt-0 lg:pb-0 lg:px-0;
}
.navbar-hide-btn{
    @apply absolute right-3 top-3 lg:hidden;
}
.navbar-hide-btn img{
    @apply w-[28px] opacity-90;
}
.navbar-show-btn{
    @apply lg:hidden cursor-pointer;
}
.navbar-show-btn img{
    @apply w-[20px];
}

.nav-item{
    @apply mb-4 lg:mx-5 lg:flex lg:items-center lg:mb-0;
}
.nav-item.active{
    @apply border-b-[3px] border-solid border-medium-blue;
}
.nav-link{
    @apply font-bold text-slate-grey transition-default hover:text-gunmetal;
}
.nav-icon-btns{
    @apply flex items-center;
}
.nav-icon-btn{
    @apply mx-2 xs:mx-3;
}
.nav-icon-btn img{
    @apply w-[24px] opacity-90;
}
.nav-profile-btn{
    @apply ms-3 flex items-center;
}
.profile-btn-img{
    @apply w-[32px] rounded-full overflow-hidden me-1;
}
.profile-btn-icon{
    @apply w-[24px];
}

/* page content */
.page-content{
    min-height: calc(100vh - 60px);
    @apply py-6 px-1 bg-light-white lg:px-4;
}
.content-head{
    @apply pt-2 pb-4 flex justify-between items-center mb-4;
}
.content-head-title{
    @apply text-3xl font-bold text-gunmetal;
}
.content-head-btn{
    @apply bg-medium-blue text-white py-2 px-5 rounded-md hover:bg-gunmetal transition-default;
}
.content-tab-head{
    @apply flex flex-col lg:flex-row lg:items-stretch justify-between border-b-[1px] border-solid border-black/10 pb-4;
}
.tab-btns{
    @apply flex items-stretch h-full flex-wrap mb-3 lg:mb-0;
}
.tab-btn-item{
    @apply mb-5 me-6 lg:mb-0 lg:me-7 flex items-center;
}
.tab-btn-item.active{
    @apply relative after:absolute after:content-[''] after:left-0 after:w-full after:-bottom-2 lg:after:-bottom-4 after:h-[3px] after:bg-medium-blue;
}
.tab-btn-link{
    @apply text-slate-grey font-medium;
}
.tab-r{
    @apply flex items-center;
}
.tab-r-btn{
    @apply flex items-center justify-center border-solid border-[1.5px] border-black/20 py-[6px] lg:py-2 px-4 rounded-lg hover:border-slate-grey transition-default w-1/2 md:w-auto;
}
.tab-r-btn-icon{
    @apply w-[16px];
}
.tab-r-btn-text{
    @apply ms-2 text-davy-grey font-medium;
}

.content-tab-body{
    @apply mt-5 grid xl:grid-cols-4 xl:gap-x-[24px];
}
.tab-body-block{
    @apply bg-flash-white rounded-lg py-5 px-3;
}
.tab-body-list{
    @apply grid md:grid-cols-2 lg:grid-cols-3 gap-x-4 xl:grid-cols-1 xl:gap-x-0;
}
.tab-body-item{
    @apply rounded-lg bg-white shadow-tab-item p-4 border-solid border-[1px] border-black/5 mb-5 cursor-pointer hover:shadow-tab-item-hover transition-default hover:bg-sky-50;
}
.body-item-head{
    @apply flex justify-between mb-6;
}
.body-item-head-title{
    @apply text-gunmetal font-semibold text-xl opacity-90;
}
.body-item-head-btn{
    @apply w-[28px] h-[28px] flex items-center justify-center rounded-md bg-white border-solid border-[1.5px] border-black/10 hover:bg-gunmetal transition-default;
}
.body-item-head-btn img{
    @apply w-[16px];
}

.item-top{
    @apply flex items-center justify-between;
}
.item-top-title{
    @apply flex items-center;
}
.checkbox-wrapper{
    @apply relative me-7 block;
}
.checkbox-wrapper input{
    @apply opacity-0 relative cursor-pointer h-[18px] w-[18px] z-10;
}
.checkbox-wrapper .checkmark{
    @apply absolute top-1/2 -translate-y-1/2 left-0 h-[18px] w-[18px] z-0 border-solid border-[2px] border-slate-grey rounded-md bg-white;
}
.checkbox-wrapper input:checked ~ .checkmark{
    @apply after:absolute after:top-1/2 after:left-1/2 after:-translate-y-1/2 after:-translate-x-1/2 after:content-[''] after:bg-blue after:w-[7px] after:h-[7px] after:rounded-full;
}

.item-top-title p{
    @apply font-semibold text-gunmetal;
}
.item-top-btn{
    @apply border-solid border-[1.5px] border-black/10 w-[28px] h-[28px] flex items-center justify-center rounded-md;
}
.item-top-btn img{
    @apply w-[16px];
}
.item-body{
    @apply my-1;
}
.item-body-text{
    @apply py-3 mb-2 leading-[1.4] font-medium text-black/70 text-[15px];
}


/* badges */
.badge-brown{
    @apply bg-light-brown text-brown;
}
.badge-green{
    @apply bg-light-green text-green;
}
.badge-blue{
    @apply bg-light-blue text-blue;
}
.badge-purple{
    @apply bg-light-purple text-purple;
}
.badge-pine-green{
    @apply bg-[#e9ecf2] text-black/60;
}
.badge-group{
    @apply flex flex-wrap;
}
span[class^='badge']{
    @apply text-[13px] font-bold py-1 inline-block rounded-md me-[6px] mb-[6px] px-3;
}
.item-comments{
    @apply my-3 flex items-center;
}
.item-avatar{
    @apply flex items-center -space-x-2 me-3;
}
.item-avatar img{
    @apply w-[26px] h-[26px] rounded-full -space-x-5 ring-2 ring-white;
}
.item-comments-text{
    @apply flex items-center;
}
.item-comments-text p{
    @apply text-[14px] text-davy-grey me-1 font-semibold;
}
.item-comments-text img{
    @apply w-[18px];
}
.item-progress{
    @apply flex;
}
.progress-bar-item{
    @apply flex items-center;
}
.progress-bar{
    @apply h-2 bg-[#e9ecf2] w-[80px] rounded-lg overflow-hidden flex items-stretch;
}
.progress-fill{
    @apply bg-pigment-green w-[50%];
}
.progress-val{
    @apply text-slate-grey text-xs font-bold ms-3;
}

.item-progress .badge-flash-white{
    @apply ms-4;
}

</style>

    </head>
    <body>

        <div class="main-wrapper">
            <div class="page-top">
                <div class="container">
                    <!-- navbar -->
                    <div class="navbar">
                        <div class="navbar-l">
                            <a href="#" class="navbar-brand">B</a>
                            <ul class="nav-list -translate-x-full lg:translate-x-0 transition-default">
                                <button class="navbar-hide-btn" type="button">
                                    <img src="../../assets/icons/close-icon.svg" alt="">
                                </button>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Starts</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="#" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Planning</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Teams</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Calendar</a>
                                </li>
                            </ul>
                            <div class="navbar-show-btn" type="button">
                                <img src="../../assets/icons/menu-icon.svg" alt="">
                            </div>
                        </div>

                        <div class="navbar-r">
                            <div class="nav-icon-btns">
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/search-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/grid-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/plus-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/folder-icon.svg" alt="">
                                </button>
                                <button class="nav-icon-btn">
                                    <img src="../../assets/icons/bell-icon.svg" alt="">
                                </button>
                            </div>

                            <button class="nav-profile-btn">
                                <div class="profile-btn-img">
                                    <img src="../../assets/images/avatar.jpg" alt="">
                                </div>
                                <img src="../../assets/icons/chevron-down.svg" alt="" class="profile-btn-icon">
                            </button>
                        </div>
                    </div>
                    <!-- end of navbar -->
                </div>
            </div>

            <div class="page-content">
                <div class="container">
                    <div class="content-head">
                        <h3 class="content-head-title">Tasks Board</h3>
                        <button class="content-head-btn">Show Backlog</button>
                    </div>

                    <div class="content-tab">
                        <div class="content-tab-head">
                            <div class="tab-l">
                                <ul class="tab-btns">
                                    <li class="tab-btn-item active">
                                        <button class="tab-btn-link" type="button">Overview</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Tasks</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Milestones</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Messages</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Files</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Time</button>
                                    </li>
                                    <li class="tab-btn-item">
                                        <button class="tab-btn-link" type="button">Comments</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-r">
                                <button class="tab-r-btn">
                                    <img src="../../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                    <span class="tab-r-btn-text">Full screens</span>
                                </button>
                                <button class="tab-r-btn ms-3">
                                    <img src="../../assets/icons/funnel-icon.svg" class="tab-r-btn-icon" alt="">
                                    <span class="tab-r-btn-text">Filters</span>
                                </button>
                            </div>
                        </div>

                        <div class="content-tab-body">
                            <!-- ### tab block 1 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">Research</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 1 ### -->

                            <!-- ### tab block 2 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">In Review</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 2 ### -->

                            <!-- ### tab block 3 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">Development</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 3 ### -->

                            <!-- ### tab block 4 ### -->
                            <div class="tab-body-block">
                                <div class="body-item-head">
                                    <h4 class="body-item-head-title">Design</h4>
                                    <button class="body-item-head-btn group">
                                        <img src="../assets/icons/plus-icon-alt.svg" alt="" class="group-hover:invert">
                                    </button>
                                </div>
                                <!-- tab body list -->
                                <div class="tab-body-list">
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                    <!-- tab item -->
                                    <div class="tab-body-item">
                                        <div class="item-top">
                                            <div class="item-top-title">
                                                <div class="checkbox-wrapper">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </div>
                                                <p>Company Page</p>
                                            </div>
                                            <button class="item-top-btn">
                                                <img src="../assets/icons/dots-icon.svg" alt="">
                                            </button>
                                        </div>
                                        <div class="item-body">
                                            <p class="item-body-text">Improve the rendering of the page in the cart on mobile devices.</p>
                                            <div class="badge-group">
                                                <span class="badge-brown">Optimalization</span>
                                                <span class="badge-blue">New Project</span>
                                                <span class="badge-green">Design</span>
                                            </div>

                                            <div class="item-comments">
                                                <div class="item-avatar">
                                                    <img src="../assets/images/person-1.jpg" alt="">
                                                    <img src="../assets/images/person-3.jpg" alt="">
                                                </div>
                                                <div class="item-comments-text">
                                                    <p>14 Comments</p>
                                                    <img src="../assets/icons/comment-icon.svg" alt="">
                                                </div>
                                            </div>

                                            <div class="item-progress">
                                                <div class="progress-bar-item">
                                                    <div class="progress-bar">
                                                        <div class="progress-fill"></div>
                                                    </div>
                                                    <span class="progress-val">50%</span>
                                                </div>
                                                <span class="badge-flash-white">2h 30m</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tab item -->
                                </div>
                                <!-- end of tab body list -->
                            </div>
                            <!-- ### end of tab block 4 ### -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="../../dist/js/scripta.js"></script>
    </body>
</html>