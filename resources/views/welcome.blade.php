<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ config('app.name') }}</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


		<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
				<div class="px-3 py-3 lg:px-5 lg:pl-3">
						<div class="flex items-center justify-between">
								<div class="flex items-center justify-start rtl:justify-end">
										<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
												type="button"
												class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
												<span class="sr-only">Open sidebar</span>
												<svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
														xmlns="http://www.w3.org/2000/svg">
														<path clip-rule="evenodd" fill-rule="evenodd"
																d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
														</path>
												</svg>
										</button>
										<a href="https://flowbite.com" class="ms-2 flex md:me-24">
												<img src="https://flowbite.com/docs/images/logo.svg" class="me-3 h-8" alt="FlowBite Logo" />
												<span
														class="self-center whitespace-nowrap text-xl font-semibold dark:text-white sm:text-2xl">Flowbite</span>
										</a>
								</div>
								<div class="flex items-center">
										<div class="ms-3 flex items-center">
												<div>
														<button type="button"
																class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
																aria-expanded="false" data-dropdown-toggle="dropdown-user">
																<span class="sr-only">Open user menu</span>
																<img class="h-8 w-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
																		alt="user photo">
														</button>
												</div>
												<div
														class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
														id="dropdown-user">
														<div class="px-4 py-3" role="none">
																<p class="text-sm text-gray-900 dark:text-white" role="none">
																		Neil Sims
																</p>
																<p class="truncate text-sm font-medium text-gray-900 dark:text-gray-300" role="none">
																		neil.sims@flowbite.com
																</p>
														</div>
														<ul class="py-1" role="none">
																<li>
																		<a href="#"
																				class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
																				role="menuitem">Dashboard</a>
																</li>
																<li>
																		<a href="#"
																				class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
																				role="menuitem">Settings</a>
																</li>
																<li>
																		<a href="#"
																				class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
																				role="menuitem">Earnings</a>
																</li>
																<li>
																		<a href="#"
																				class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
																				role="menuitem">Sign out</a>
																</li>
														</ul>
												</div>
										</div>
								</div>
						</div>
				</div>
		</nav>

		<aside id="logo-sidebar"
				class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-20 transition-transform dark:border-gray-700 dark:bg-gray-800 sm:translate-x-0"
				aria-label="Sidebar">
				<div class="h-full overflow-y-auto bg-white px-3 pb-4 dark:bg-gray-800">
						<ul class="space-y-2 font-medium">
								<li>
										<a href="#"
												class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
												<svg
														class="h-5 w-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
														aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
														<path
																d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
														<path
																d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
												</svg>
												<span class="ms-3">Dashboard</span>
										</a>
								</li>
								<li>
										<a href="#"
												class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
												<svg
														class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
														aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
														<path
																d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
												</svg>
												<span class="ms-3 flex-1 whitespace-nowrap">Kanban</span>
												<span
														class="ms-3 inline-flex items-center justify-center rounded-full bg-gray-100 px-2 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">Pro</span>
										</a>
								</li>
								<li>
										<a href="#"
												class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
												<svg
														class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
														aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
														<path
																d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
												</svg>
												<span class="ms-3 flex-1 whitespace-nowrap">Inbox</span>
												<span
														class="ms-3 inline-flex h-3 w-3 items-center justify-center rounded-full bg-blue-100 p-3 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">3</span>
										</a>
								</li>
								<li>
										<a href="#"
												class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
												<svg
														class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
														aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
														<path
																d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
												</svg>
												<span class="ms-3 flex-1 whitespace-nowrap">Users</span>
										</a>
								</li>
								<li>
										<a href="#"
												class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
												<svg
														class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
														aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
														<path
																d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
												</svg>
												<span class="ms-3 flex-1 whitespace-nowrap">Products</span>
										</a>
								</li>
								<li>
										<a href="#"
												class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
												<svg
														class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
														aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
														<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
												</svg>
												<span class="ms-3 flex-1 whitespace-nowrap">Sign In</span>
										</a>
								</li>
								<li>
										<a href="#"
												class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
												<svg
														class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
														aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
														<path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
														<path
																d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
														<path
																d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
												</svg>
												<span class="ms-3 flex-1 whitespace-nowrap">Sign Up</span>
										</a>
								</li>
						</ul>
				</div>
		</aside>

		{{-- Main content here --}}
		<div class="p-4 sm:ml-64">
				<div class="mt-14 rounded-lg p-4">
						<div class="flex items-start gap-2.5">
								<img class="h-8 w-8 rounded-full"
										src="data:image/png;base64,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"
										alt="Jese image">
								<div
										class="leading-1.5 flex w-full max-w-[320px] flex-col rounded-e-xl rounded-es-xl border-gray-200 bg-gray-100 p-4 dark:bg-gray-700">
										<div class="flex items-center space-x-2 rtl:space-x-reverse">
												<span class="text-sm font-semibold text-gray-900 dark:text-white">Polibatam</span>
												<span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
										</div>
										<p class="py-2.5 text-sm font-normal text-gray-900 dark:text-white">PBLog ==
												Polibatam Goblog</p>
										<span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
								</div>
								<button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
										data-dropdown-placement="bottom-start"
										class="inline-flex items-center self-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50 dark:bg-gray-900 dark:text-white dark:hover:bg-gray-800 dark:focus:ring-gray-600"
										type="button">
										<svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
												fill="currentColor" viewBox="0 0 4 15">
												<path
														d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
										</svg>
								</button>
								<div id="dropdownDots"
										class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700">
										<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
												<li>
														<a href="#"
																class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reply</a>
												</li>
												<li>
														<a href="#"
																class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Forward</a>
												</li>
												<li>
														<a href="#"
																class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Copy</a>
												</li>
												<li>
														<a href="#"
																class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
												</li>
												<li>
														<a href="#"
																class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
												</li>
										</ul>
								</div>
						</div>
				</div>
		</div>
		{{-- Main content --}}
</body>

</html>
