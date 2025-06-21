<html>

<head>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
        onload="this.rel='stylesheet'" rel="stylesheet" />
    <meta charset="utf-8" />
    <title>Apartment Maintenance</title>
    <link href="data:image/x-icon;base64," rel="icon" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        :root {
            --primary-color: #dad740;
            --secondary-color: #f0f2f5;
            --text-primary: #111418;
            --text-secondary: #60758a;
            --border-color: #dbe0e6;
        }

        body {
            font-family: 'Inter', "Noto Sans", sans-serif;
        }

        .nav-link-active {
            color: var(--primary-color);
            font-weight: 700;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 4px;
        }

        .status-vacant {
            background-color: #e6fffa;
            color: #38a169;
            border: 1px solid #a0f0d0;
        }

        .status-occupied {
            background-color: #fff5f5;
            color: #c53030;
            border: 1px solid #fcc5c5;
        }

        .table-header-custom {
            color: var(--text-secondary);
            font-weight: 500;
        }

        .table-cell-link {
            color: var(--primary-color);
            font-weight: 500;
            cursor: pointer;
        }

        .table-cell-link:hover {
            text-decoration: underline;
        }

        .action-button {
            background-color: var(--primary-color);
            color: white;
        }

        .action-button:hover {
            background-color: #0b6acb;
        }

        .secondary-button {
            background-color: var(--secondary-color);
            color: var(--text-primary);
        }

        .secondary-button:hover {
            background-color: #e2e8f0;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[var(--border-color)] bg-white px-6 lg:px-10 py-4 shadow-sm">
                <div class="flex items-center gap-3">
                    <div class="size-6 text-[var(--primary-color)]">
                        <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M24 4H42V17.3333V30.6667H24V44H6V30.6667V17.3333H24V4Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h2 class="text-[var(--text-primary)] text-xl font-semibold leading-tight tracking-[-0.015em]">
                        Property Management</h2>
                </div>
                <nav class="hidden lg:flex items-center gap-8">
                    <a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] text-sm font-medium leading-normal"
                        href="#">Dashboard</a>
                    <a class="nav-link-active text-sm font-medium leading-normal" href="#">Units</a>
                    <a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] text-sm font-medium leading-normal"
                        href="#">Residents</a>
                    <a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] text-sm font-medium leading-normal"
                        href="#">Leases</a>
                    <a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] text-sm font-medium leading-normal"
                        href="#">Maintenance</a>
                    <a class="text-[var(--text-secondary)] hover:text-[var(--primary-color)] text-sm font-medium leading-normal"
                        href="#">Reports</a>
                </nav>
                <div class="flex items-center gap-4">
                    <button
                        class="flex items-center justify-center rounded-full h-10 w-10 hover:bg-[var(--secondary-color)] text-[var(--text-secondary)] hover:text-[var(--primary-color)] transition-colors">
                        <span class="sr-only">Notifications</span>
                        <div data-icon="Bell" data-size="24px" data-weight="regular">
                            <svg fill="currentColor" height="24px" viewBox="0 0 256 256" width="24px"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z">
                                </path>
                            </svg>
                        </div>
                    </button>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-transparent hover:border-[var(--primary-color)] transition-all"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA40AyJ172bGR6Zg2nnPFbyLw-IBEftL81JPxYwOhiB8RDUhBWSrvEpSgkyWb6YTncyeXgSYfMFNFFNDA2qwNLsrhzwWHh6Bs7gC6ql7lYhWNy4P5KjSMIUW2wFleA08nFt0GUS5GT6UQ2gWvvPUHnhK6Zr5q2RGrouA5BLChc7VQT59gV3-h0eGL-q1WVH--7hTnnSVhzBGM530KfbOeWHk9RxKCLnTU90q2pT6okJCg99iFAo3UqG5zLwq26n4UcUFtwy4lDDhDfR");'>
                    </div>
                    <button class="lg:hidden text-[var(--text-secondary)] hover:text-[var(--primary-color)]">
                        <svg fill="currentColor" height="24px" viewBox="0 0 256 256" width="24px"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                            </path>
                        </svg>
                    </button>
                </div>
            </header>
            <main class="px-6 lg:px-10 flex flex-1 justify-center py-8">
                <div class="layout-content-container flex flex-col w-full max-w-6xl">
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-6 px-1">
                        <h1 class="text-[var(--text-primary)] text-3xl font-bold leading-tight">Apartment Units</h1>
                        <button
                            class="action-button flex items-center justify-center gap-2 rounded-lg h-10 px-5 text-sm font-medium leading-normal shadow-sm transition-colors">
                            <svg fill="currentColor" height="18px" viewBox="0 0 256 256" width="18px"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z">
                                </path>
                            </svg>
                            <span class="truncate">Add New Unit</span>
                        </button>
                    </div>
                    <div class="mb-6 px-1">
                        <label class="flex flex-col min-w-40 h-12 w-full max-w-md">
                            <div
                                class="flex w-full flex-1 items-stretch rounded-lg h-full shadow-sm border border-transparent focus-within:border-[var(--primary-color)] focus-within:ring-1 focus-within:ring-[var(--primary-color)]">
                                <div
                                    class="text-[var(--text-secondary)] flex bg-[var(--secondary-color)] items-center justify-center pl-4 rounded-l-lg">
                                    <svg fill="currentColor" height="20px" viewBox="0 0 256 256" width="20px"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                        </path>
                                    </svg>
                                </div>
                                <input
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-lg text-[var(--text-primary)] focus:outline-none focus:ring-0 border-none bg-[var(--secondary-color)] h-full placeholder:text-[var(--text-secondary)] px-4 py-2 text-sm font-normal leading-normal"
                                    placeholder="Search by unit number, resident, etc." value="" />
                            </div>
                        </label>
                    </div>
                    <div class="bg-white shadow-lg rounded-xl overflow-hidden @container">
                        <div class="overflow-x-auto">
                            <table class="w-full min-w-[900px]">
                                <thead class="bg-gray-50 border-b border-[var(--border-color)]">
                                    <tr>
                                        <th
                                            class="table-header-custom px-6 py-4 text-left text-xs tracking-wider uppercase">
                                            Unit</th>
                                        <th
                                            class="table-header-custom px-6 py-4 text-left text-xs tracking-wider uppercase">
                                            Type</th>
                                        <th
                                            class="table-header-custom px-6 py-4 text-left text-xs tracking-wider uppercase">
                                            Status</th>
                                        <th
                                            class="table-header-custom px-6 py-4 text-left text-xs tracking-wider uppercase">
                                            Rent</th>
                                        <th
                                            class="table-header-custom px-6 py-4 text-left text-xs tracking-wider uppercase">
                                            Lease End Date</th>
                                        <th
                                            class="table-header-custom px-6 py-4 text-left text-xs tracking-wider uppercase">
                                            Resident</th>
                                        <th
                                            class="table-header-custom px-6 py-4 text-left text-xs tracking-wider uppercase">
                                            <span class="sr-only">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-[var(--border-color)]">
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">101</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Studio</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-vacant">Vacant</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">102</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">1
                                            Bedroom</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-occupied">Occupied</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,500</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            08/15/2024</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Olivia Bennett</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">103</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">2
                                            Bedroom</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-occupied">Occupied</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,800</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            12/31/2024</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Ethan Carter</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">104</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Studio</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-vacant">Vacant</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">105</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">1
                                            Bedroom</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-occupied">Occupied</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,500</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            06/30/2024</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Sophia Davis</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">106</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">2
                                            Bedroom</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-occupied">Occupied</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,800</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            09/01/2024</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Liam Evans</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">107</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Studio</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-vacant">Vacant</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">108</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">1
                                            Bedroom</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-occupied">Occupied</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,500</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            11/15/2024</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Ava Foster</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">109</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">2
                                            Bedroom</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-occupied">Occupied</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,800</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            07/20/2024</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Noah Green</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[var(--primary-color)]">
                                            <a class="hover:underline" href="#">110</a></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            Studio</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full status-vacant">Vacant</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            $1,200</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-[var(--text-secondary)]">
                                            N/A</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="text-[var(--primary-color)] hover:text-[#0a5cb0]"
                                                href="#">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-center">
                        <nav aria-label="Pagination">
                            <ul class="inline-flex items-center -space-x-px">
                                <li>
                                    <a class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
                                        href="#">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a aria-current="page"
                                        class="z-10 py-2 px-3 leading-tight text-[var(--primary-color)] bg-blue-50 border border-[var(--primary-color)] hover:bg-blue-100 hover:text-[#0a5cb0]"
                                        href="#">1</a>
                                </li>
                                <li>
                                    <a class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
                                        href="#">2</a>
                                </li>
                                <li>
                                    <a class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
                                        href="#">3</a>
                                </li>
                                <li>
                                    <a class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
                                        href="#">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
