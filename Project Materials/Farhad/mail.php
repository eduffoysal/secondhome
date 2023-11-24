<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../../output/./output.css">
    <title>Mail</title>
</head>
<body class="bg-slate-100 text-slate-800">
    
    <!-- start: Mail -->
    <section>
        <div class="max-w-7xl mx-auto flex">
            <!-- start: Sidebar -->
            <div class="sidebar w-64 flex-shrink-0 max-h-screen overflow-y-auto p-4 md:pr-0 fixed md:static left-0 top-0 z-50 bg-slate-100 md:bg-transparent h-full">
                <a href="#" class="flex items-center mb-4">
                    <i class="ri-flashlight-fill text-2xl text-indigo-500 mr-1"></i>
                    <span class="text-lg font-bold">Logo</span>
                </a>
                <button type="button" class="py-2.5 px-4 rounded-md bg-indigo-500 text-white font-medium flex items-center w-full justify-center hover:bg-indigo-600 mb-4"><i class="ri-edit-line mr-2"></i>Compose</button>
                <div class="mb-4">
                    <ul>
                        <li class="group mb-1 active">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-inbox-line text-lg mr-3"></i>
                                <span>Inbox</span>
                                <div class="ml-auto w-4 h-4 rounded-full bg-indigo-200 text-indigo-500 text-[10px] font-bold flex items-center justify-center">12</div>
                            </a>
                        </li>
                        <li class="group mb-1">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-user-follow-line text-lg mr-3"></i>
                                <span>Friends</span>
                            </a>
                        </li>
                        <li class="group mb-1">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-draft-line text-lg mr-3"></i>
                                <span>Draft</span>
                            </a>
                        </li>
                        <li class="group mb-1">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-spam-2-line text-lg mr-3"></i>
                                <span>Spam</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="px-4 mb-2 flex items-center justify-between">
                        <div class="text-[12px] font-semibold uppercase text-slate-400">Labels</div>
                        <button type="button" class="w-6 h-6 flex items-center justify-center rounded-full hover:bg-slate-200 text-slate-400 hover:text-slate-500"><i class="ri-add-line"></i></button>
                    </div>
                    <ul>
                        <li class="group mb-1">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-inbox-line text-lg mr-3"></i>
                                <span>Inbox</span>
                                <div class="ml-auto w-4 h-4 rounded-full bg-indigo-200 text-indigo-500 text-[10px] font-bold flex items-center justify-center">12</div>
                            </a>
                        </li>
                        <li class="group mb-1">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-user-follow-line text-lg mr-3"></i>
                                <span>Friends</span>
                            </a>
                        </li>
                        <li class="group mb-1">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-draft-line text-lg mr-3"></i>
                                <span>Draft</span>
                            </a>
                        </li>
                        <li class="group mb-1">
                            <a href="#" class="py-1.5 px-4 flex items-center text-slate-500 font-medium text-sm hover:text-slate-800 rounded-md group-[.active]:bg-slate-200 group-[.active]:text-slate-800">
                                <i class="ri-spam-2-line text-lg mr-3"></i>
                                <span>Spam</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-overlay fixed top-0 left-0 bg-black/50 z-40 w-full h-full"></div>
            <!-- end: Sidebar -->
            <!-- start: Main -->
            <main class="w-full p-4 min-w-0 h-screen flex flex-col">
                <!-- start: Navbar -->
                <div class="py-1 px-4 bg-white rounded-lg shadow-sm shadow-black/5 flex items-center mb-4">
                    <button type="button" class="sidebar-toggle w-8 h-8 flex-shrink-0 rounded-full flex md:hidden items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400 mr-4"><i class="ri-menu-line"></i></button>
                    <form action="" class="flex items-center max-w-xs w-full">
                        <i class="ri-search-line text-slate-400 flex-shrink-0 mr-2"></i>
                        <input type="text" class="py-2 outline-transparent w-full" placeholder="Search...">
                    </form>
                    <ul class="ml-auto flex items-center flex-shrink-0">
                        <li class="mr-2">
                            <div class="dropdown group">
                                <button type="button" class="dropdown-toggle w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400 group-[.active]:bg-slate-100 group-[.active]:text-slate-500"><i class="ri-notification-3-line"></i></button>
                                <div class="dropdown-menu z-30 bg-white pb-2 rounded-md shadow-sm shadow-black/5 border border-slate-100 hidden group-[.active]:block w-[calc(100vw-32px)] md:max-w-xs md:w-full max-h-72 overflow-y-auto">
                                    <div class="py-3 px-4 bg-white text-sm font-semibold text-slate-400 shadow-sm shadow-black/5 sticky top-0 left-0">Notifications</div>
                                    <ul>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex items-center py-1.5 px-4 hover:bg-slate-100">
                                                <img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2">
                                                <div class="min-w-0">
                                                    <div class="text-sm font-medium">John Doe</div>
                                                    <p class="truncate text-slate-400 text-[12px]">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, laborum.</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown group">
                                <button type="button" class="dropdown-toggle flex items-center"><img src="https://placehold.co/32x32" alt="" class="rounded-full w-8 h-8 object-cover flex-shrink-0 mr-2"></button>
                                <ul class="dropdown-menu z-30 bg-white py-2 rounded-md shadow-sm shadow-black/5 border border-slate-100 hidden group-[.active]:block min-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-slate-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-user-4-line text-base mr-3"></i>
                                            <span>Accounts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-slate-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-settings-3-line text-base mr-3"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-slate-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-question-line text-base mr-3"></i>
                                            <span>Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-rose-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-logout-circle-line text-base mr-3"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end: Navbar -->
                <!-- start: Content -->
                <div class="bg-white rounded-lg shadow-sm shadow-black/5 h-full overflow-auto">
                    <div class="py-3 px-4 flex items-center shadow-sm shadow-black/5 bg-white sticky top-0 left-0 min-w-[540px]">
                        <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                        <div class="flex items-center mx-4">
                            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-restart-line"></i></button>
                            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-open-line"></i></button>
                            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-archive-line"></i></button>
                            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-spam-2-line"></i></button>
                            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-delete-bin-line"></i></button>
                            <div class="dropdown group">
                                <button type="button" class="dropdown-toggle w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400 group-[.active]:bg-slate-100 group-[.active]:text-slate-500"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu z-30 bg-white py-2 rounded-md shadow-sm shadow-black/5 border border-slate-100 hidden group-[.active]:block min-w-[140px]">
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-slate-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-user-4-line text-base mr-3"></i>
                                            <span>Accounts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-slate-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-settings-3-line text-base mr-3"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-slate-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-question-line text-base mr-3"></i>
                                            <span>Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center py-1.5 px-4 text-rose-500 hover:bg-slate-100 text-sm">
                                            <i class="ri-logout-circle-line text-base mr-3"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ml-auto flex items-center">
                            <div class="text-[12px] font-medium text-slate-400 mr-2">1-50 of 357</div>
                            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-arrow-left-s-line"></i></button>
                            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-arrow-right-s-line"></i></button>
                        </div>
                    </div>
                    <ul class="min-w-[540px]">
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione reiciendis sequi voluptate error, odio nisi explicabo sunt officiis vel est.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-slate-400 mr-3"><i class="ri-attachment-line"></i></div>
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">3 days ago</div>
                            </div>
                        </li>
                        <li class="flex items-center hover:bg-slate-50 py-2 px-4">
                            <input type="checkbox" class="appearance-none w-4 h-4 flex-shrink-0 rounded border border-slate-300 bg-white checked:bg-indigo-500 checked:border-indigo-500 cursor-pointer checked:bg-checkbox">
                            <button type="button" class="text-slate-400 hover:text-yellow-500 mx-4"><i class="ri-star-line"></i></button>
                            <div class="w-32 flex-shrink-0 tooltip group">
                                <a href="#" class="tooltip-toggle text-sm font-semibold">John Doe</a>
                                <div class="tooltip-menu z-20 hidden group-[.active]:block bg-white rounded-md border border-slate-100 shadow-sm shadow-black/5 max-w-xs w-full">
                                    <div class="flex items-center py-2 px-4 border-b border-b-slate-100">
                                        <img src="https://placehold.co/64x64" alt="" class="rounded-full w-16 h-16 object-cover flex-shrink-0 mr-3">
                                        <div class="truncate">
                                            <div class="text-xl truncate">John Doe</div>
                                            <div class="text-sm text-slate-400 truncate">johndoe@email.com</div>
                                        </div>
                                    </div>
                                    <div class="py-2 px-4 flex items-center">
                                        <a href="#" class="py-2 px-4 rounded-md bg-indigo-50 text-indigo-500 text-sm font-medium hover:bg-indigo-500 hover:text-white mr-2">View Profile</a>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-mail-line"></i></button>
                                        <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center hover:bg-slate-100 hover:text-slate-500 text-slate-400"><i class="ri-phone-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm truncate min-w-0 mr-4">
                                <span class="font-medium">Lorem ipsum dolor sit.</span>
                                <span>- Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                            </p>
                            <div class="flex items-center ml-auto">
                                <div class="text-[12px] font-medium text-slate-400 whitespace-nowrap">18 Sep</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end: Content -->
            </main>
            <!-- end: Main -->
        </div>
    </section>
    <!-- end: Mail -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../dist/js/scriptt.js"></script>
</body>
</html>