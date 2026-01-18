<template>
    <app-layout>
        <template #header>
            <div class="flex items-center">
                <back-button />
                <h1 class="app-heading">{{ quiz.title }} {{ __('Results') }}</h1>
            </div>
        </template>


        <div class="w-full mt-8">
            <progress-navigator :steps="steps"></progress-navigator>
        </div>

        <div class="mx-auto w-[93%] py-8">
            <!-- Performance Spotlight Section -->
            <div class="performanceSpotlight my-5 flex h-fit gap-5 flex-col lg:flex-row">
                <!-- Your Performance Card -->
                <div class="yourPerformance w-full min-w-[350px] rounded-xl bg-white p-5">
                    <p class="text-lg font-bold mb-3">{{ __('Your Performance') }}</p>
                    <div class="flex flex-col gap-3">
                        <!-- Rank & Score Row -->
                        <div class="flex gap-3">
                            <div class="rank border-borderGrey w-full rounded-2xl border p-5">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" class="mb-4">
                                    <rect width="25" height="25" rx="12.5" fill="#FFF4E6"></rect>
                                    <path d="M12.5 7.29l1.45 2.94c.11.22.32.37.57.4l3.24.47c.62.09.87.86.42 1.3l-2.34 2.29a.83.83 0 0 0-.24.73l.55 3.23a.83.83 0 0 1-1.2.88l-2.9-1.52a.83.83 0 0 0-.77 0l-2.9 1.52a.83.83 0 0 1-1.2-.88l.55-3.23a.83.83 0 0 0-.24-.73l-2.34-2.29a.83.83 0 0 1 .42-1.3l3.24-.47a.83.83 0 0 0 .57-.4l1.45-2.94a.83.83 0 0 1 1.5 0z" fill="#FFB800"></path>
                                </svg>
                                <p class="text-sm text-black/35">{{ __('Rank') }}</p>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-3xl font-semibold">#{{ session.results.rank }}</span>
                                </div>
                                <p class="text-xs text-black/50 mt-1">{{ __('out of') }} {{ session.results.total_participants }} {{ __('participants') }}</p>
                            </div>
                            <div class="rank border-borderGrey w-full rounded-2xl border p-5">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" class="mb-4">
                                    <rect width="25" height="25" rx="12.5" fill="#E3F6FF"></rect>
                                    <path d="M17.16 9.17a.83.83 0 0 0-1.17 0L11 14.35l-2.17-2.18a.83.83 0 1 0-1.18 1.18l2.67 2.67a.83.83 0 0 0 1.17 0l5.67-5.67a.83.83 0 0 0 0-1.18z" fill="#7DD6FF"></path>
                                </svg>
                                <p class="text-sm text-black/35">{{ __('Score') }}</p>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-3xl font-semibold">{{ session.results.score < 0 ? 0 : session.results.score }}</span>
                                    <span class="text-xl">/</span>
                                    <span class="font-semibold">{{ session.results.total_marks }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mock Spotlight Card -->
                <div class="mockSpotlight w-full rounded-xl bg-white p-5">
                    <p class="text-lg font-bold mb-3">{{ __('Mock Spotlight') }}</p>
                    <div class="flex flex-col md:flex-row gap-3">
                        <div class="Analytics_positive rank flex w-full flex-col rounded-2xl border-2 border-green-200 p-5">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: rgb(10, 176, 110);" class="mb-4">
                                <path d="M18.3 8.59L19.21 7.69C19.3983 7.5017 19.5041 7.2463 19.5041 6.98C19.5041 6.7137 19.3983 6.4583 19.21 6.27C19.0217 6.0817 18.7663 5.97591 18.5 5.97591C18.2337 5.97591 17.9783 6.0817 17.79 6.27L16.89 7.18C15.4886 6.09585 13.7669 5.50764 11.995 5.50764C10.2232 5.50764 8.50147 6.09585 7.10003 7.18L6.19003 6.26C6.0004 6.0717 5.74373 5.96644 5.47649 5.96737C5.20925 5.96831 4.95333 6.07537 4.76503 6.265C4.57672 6.45463 4.47146 6.7113 4.4724 6.97854C4.47334 7.24578 4.5804 7.5017 4.77003 7.69L5.69003 8.6C4.59304 9.99755 3.99782 11.7233 4.00003 13.5C3.99676 14.7754 4.29849 16.0331 4.88005 17.1683C5.46161 18.3034 6.30614 19.283 7.34322 20.0254C8.38029 20.7679 9.57985 21.2516 10.8418 21.4362C12.1038 21.6208 13.3917 21.5011 14.598 21.0869C15.8043 20.6727 16.8941 19.9761 17.7764 19.0552C18.6588 18.1342 19.3082 17.0157 19.6705 15.7928C20.0328 14.5699 20.0974 13.2781 19.859 12.0251C19.6206 10.7722 19.0861 9.5944 18.3 8.59ZM12 19.5C10.8133 19.5 9.6533 19.1481 8.6666 18.4888C7.67991 17.8295 6.91087 16.8925 6.45675 15.7961C6.00262 14.6997 5.8838 13.4933 6.11531 12.3295C6.34683 11.1656 6.91827 10.0965 7.75739 9.25736C8.5965 8.41824 9.6656 7.8468 10.8295 7.61529C11.9934 7.38378 13.1998 7.5026 14.2961 7.95672C15.3925 8.41085 16.3296 9.17988 16.9888 10.1666C17.6481 11.1533 18 12.3133 18 13.5C18 15.0913 17.3679 16.6174 16.2427 17.7426C15.1174 18.8679 13.5913 19.5 12 19.5ZM10 4.5H14C14.2652 4.5 14.5196 4.39464 14.7071 4.20711C14.8947 4.01957 15 3.76522 15 3.5C15 3.23478 14.8947 2.98043 14.7071 2.79289C14.5196 2.60536 14.2652 2.5 14 2.5H10C9.73481 2.5 9.48046 2.60536 9.29292 2.79289C9.10538 2.98043 9.00003 3.23478 9.00003 3.5C9.00003 3.76522 9.10538 4.01957 9.29292 4.20711C9.48046 4.39464 9.73481 4.5 10 4.5ZM13 10.5C13 10.2348 12.8947 9.98043 12.7071 9.79289C12.5196 9.60536 12.2652 9.5 12 9.5C11.7348 9.5 11.4805 9.60536 11.2929 9.79289C11.1054 9.98043 11 10.2348 11 10.5V12.39C10.7736 12.5925 10.614 12.859 10.5423 13.1542C10.4707 13.4495 10.4904 13.7595 10.5988 14.0433C10.7072 14.3271 10.8992 14.5712 11.1494 14.7435C11.3996 14.9158 11.6962 15.008 12 15.008C12.3038 15.008 12.6004 14.9158 12.8507 14.7435C13.1009 14.5712 13.2929 14.3271 13.4013 14.0433C13.5097 13.7595 13.5294 13.4495 13.4577 13.1542C13.3861 12.859 13.2265 12.5925 13 12.39V10.5Z" fill="currentColor"></path>
                            </svg>
                            <p class="text-sm text-black/35">{{ __('Question Trap') }}</p>
                            <p class="text-2xl font-semibold">{{ avgTimePerQuestion }}</p>
                        </div>
                        <div class="Analytics_positive rank flex w-full flex-col rounded-2xl border-2 border-pink-200 p-5">
                            <svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: rgb(211, 118, 121);" class="mb-4">
                                <path d="M16.6125 17.2375L16.25 17.6125V14.375C16.25 14.0435 16.1183 13.7256 15.8839 13.4911C15.6495 13.2567 15.3315 13.125 15 13.125C14.6685 13.125 14.3505 13.2567 14.1161 13.4911C13.8817 13.7256 13.75 14.0435 13.75 14.375V17.6125L13.3875 17.2375C13.1521 17.0021 12.8329 16.8699 12.5 16.8699C12.1671 16.8699 11.8479 17.0021 11.6125 17.2375C11.3771 17.4729 11.2449 17.7922 11.2449 18.125C11.2449 18.4579 11.3771 18.7771 11.6125 19.0125L14.1125 21.5125C14.2314 21.6263 14.3716 21.7155 14.525 21.775C14.6746 21.8412 14.8364 21.8753 15 21.8753C15.1636 21.8753 15.3254 21.8412 15.475 21.775C15.6284 21.7155 15.7686 21.6263 15.8875 21.5125L18.3875 19.0125C18.6229 18.7771 18.7551 18.4579 18.7551 18.125C18.7551 17.7922 18.6229 17.4729 18.3875 17.2375C18.1521 17.0021 17.8329 16.8699 17.5 16.8699C17.1671 16.8699 16.8479 17.0021 16.6125 17.2375ZM23.75 6.87503H15.9L15.5 5.62503C15.2407 4.89157 14.7597 4.25691 14.1236 3.80898C13.4876 3.36105 12.7279 3.12203 11.95 3.12503H6.25C5.25544 3.12503 4.30161 3.52012 3.59835 4.22338C2.89509 4.92664 2.5 5.88047 2.5 6.87503V23.125C2.5 24.1196 2.89509 25.0734 3.59835 25.7767C4.30161 26.4799 5.25544 26.875 6.25 26.875H23.75C24.7446 26.875 25.6984 26.4799 26.4017 25.7767C27.1049 25.0734 27.5 24.1196 27.5 23.125V10.625C27.5 9.63047 27.1049 8.67664 26.4017 7.97338C25.6984 7.27012 24.7446 6.87503 23.75 6.87503ZM25 23.125C25 23.4565 24.8683 23.7745 24.6339 24.0089C24.3995 24.2433 24.0815 24.375 23.75 24.375H6.25C5.91848 24.375 5.60054 24.2433 5.36612 24.0089C5.1317 23.7745 5 23.4565 5 23.125V6.87503C5 6.54351 5.1317 6.22557 5.36612 5.99114C5.60054 5.75672 5.91848 5.62503 6.25 5.62503H11.95C12.2121 5.62435 12.4677 5.70605 12.6808 5.85858C12.8939 6.01111 13.0536 6.22675 13.1375 6.47503L13.8125 8.52503C13.8964 8.7733 14.0561 8.98895 14.2692 9.14148C14.4823 9.294 14.7379 9.3757 15 9.37503H23.75C24.0815 9.37503 24.3995 9.50672 24.6339 9.74114C24.8683 9.97557 25 10.2935 25 10.625V23.125Z" fill="currentColor"></path>
                            </svg>
                            <p class="text-sm text-black/35">{{ __('Percentile') }}</p>
                            <p class="text-2xl font-semibold">{{ percentileDisplay }}</p>
                        </div>
                        <div class="Analytics_positive rank flex w-full flex-col rounded-2xl border-2 border-emerald-200 p-5">
                            <svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: rgb(10, 176, 110);" class="mb-4">
                                <path d="M15 2.5a12.5 12.5 0 1 0 0 25 12.5 12.5 0 0 0 0-25zm0 22.5a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm5-11.25h-10a1.25 1.25 0 1 0 0 2.5h10a1.25 1.25 0 1 0 0-2.5z" fill="currentColor"></path>
                            </svg>
                            <p class="text-sm text-black/35">{{ __('Negative Marks') }}</p>
                            <p class="text-2xl font-semibold">-{{ session.results.marks_deducted }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Note Section -->
            <div class="note flex w-full flex-col rounded-xl bg-white my-5 p-5">
                <p class="text-lg font-bold mb-2">{{ __('Note') }}</p>
                <div class="gap-2 text-base">
                    <span>{{ __('Your score could have been') }} <b>{{ scoreWithoutNegativeMarking }}</b> {{ __('without negative marks') }}</span>
                    <span v-if="session.results.percentile" class="ml-2 whitespace-nowrap rounded-md bg-green-50 px-2 py-0.5 text-sm font-medium text-green-700">{{ __('Percentile:') }} {{ session.results.percentile }}%</span>
                </div>
            </div>

            <!-- Green Flags and Attempts Section -->
            <div class="greenflagsWithAttempts flex flex-col lg:flex-row gap-5 my-5">
                <!-- Green Flags -->
                <div class="greenFlags w-full lg:w-1/3 rounded-xl bg-white p-5">
                    <div class="mb-4 flex items-center">
                        <svg class="w-5 h-5 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <p class="font-bold">{{ __('Performance Tips') }}</p>
                    </div>
                    <div class="space-y-2 text-sm">
                        <p><span class="font-semibold">{{ __('Question Trap:') }}</span> {{ __('Spend less than 2 minutes per question') }}</p>
                        <p><span class="font-semibold">{{ __('Accuracy:') }}</span> {{ __('Target above 70% correct answers') }}</p>
                        <p><span class="font-semibold">{{ __('Negative Marking:') }}</span> {{ __('Keep negative marks under 10% of total') }}</p>
                    </div>
                </div>
                
                <!-- Attempts Table -->
                <div class="Attempts flex-1 rounded-xl bg-white p-5">
                    <div class="overflow-x-auto">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="border-b">
                                    <th class="px-3 py-3 text-left text-sm font-medium text-gray-500"></th>
                                    <th scope="col" class="px-4 py-3 text-sm font-medium text-green-600">
                                        <span class="hidden md:inline-block">{{ __('Correct') }}</span>
                                        <span class="inline-block md:hidden">✅</span>
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-sm font-medium text-red-600">
                                        <span class="hidden md:inline-block">{{ __('Wrong') }}</span>
                                        <span class="inline-block md:hidden">❌</span>
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-sm font-medium text-amber-400">
                                        <span class="hidden md:inline-block">{{ __('Missed') }}</span>
                                        <span class="inline-block md:hidden">⚪</span>
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-sm font-medium text-gray-500">{{ __('Accuracy') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-50">
                                    <td scope="row" class="py-2 pl-3 text-left font-medium">{{ __('Total') }}</td>
                                    <td class="px-4 py-2 text-right text-slate-600">{{ session.results.correct_answered_questions }}</td>
                                    <td class="px-4 py-2 text-right text-slate-600">{{ session.results.wrong_answered_questions }}</td>
                                    <td class="px-4 py-2 text-right text-slate-600">{{ session.results.unanswered_questions }}</td>
                                    <td class="px-4 py-2 text-right">
                                        <span class="px-2 py-1 font-medium rounded-full bg-blue-50 text-blue-700">{{ session.results.accuracy }}%</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Detailed Metrics Section -->
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                        {{ session.results.total_questions }} {{ __('Questions') }}
                    </h2>
                    <div class="flex gap-4 sm:justify-center items-center">
                        <div class="w-28">
                            <doughnut-chart id="status" :key="'status'" :chart-data="statusChartData" :element-text="totalAnswered"/>
                        </div>
                        <div class="flex flex-col gap-2 justify-center">
                            <div class="flex gap-2 items-center text-xs">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session.results.correct_answered_questions }} {{ __('Correct') }}
                            </div>
                            <div class="flex gap-2 items-center text-xs">
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session.results.wrong_answered_questions }} {{ __('Wrong') }}
                            </div>
                            <div class="flex gap-2 items-center text-xs">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session.results.unanswered_questions }} {{ __('Unanswered') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ session.results.total_duration }} {{ __('Minutes') }}
                    </h2>
                    <div class="flex gap-4 sm:justify-center items-center">
                        <div class="w-28">
                            <doughnut-chart id="time_spent" :key="'time_spent'" :chart-data="timeSpentChartData" :element-text="totalTimeSpent"/>
                        </div>
                        <div class="flex flex-col gap-2 justify-center">
                            <div class="flex gap-2 items-center text-xs">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session.results.time_taken_for_correct_answered.detailed_readable }} {{ __('Correct') }}
                            </div>
                            <div class="flex gap-2 items-center text-xs">
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session.results.time_taken_for_wrong_answered.detailed_readable }} {{ __('Wrong') }}
                            </div>
                            <div class="flex gap-2 items-center text-xs">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                {{ session.results.time_taken_for_other.detailed_readable }} {{ __('Other') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-lg font-bold text-gray-800 dark:text-gray-100 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        {{ __('Total Scored Marks') }}
                    </h2>
                    <div class="w-full flex gap-4 sm:justify-center items-center">
                        <table class="w-full table-auto">
                            <tbody>
                            <tr>
                                <td class="border border-emerald-500 px-4 py-2 text-emerald-600 text-sm">{{ __('Marks Earned') }}</td>
                                <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium text-sm text-right">{{ session.results.marks_earned }}</td>
                            </tr>
                            <tr class="bg-emerald-200">
                                <td class="border border-emerald-500 px-4 py-2 text-emerald-600 text-sm">{{ __('Negative Marks') }}</td>
                                <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium text-sm text-right">-{{ session.results.marks_deducted }}</td>
                            </tr>
                            <tr>
                                <td class="border border-emerald-500 px-4 py-2 text-emerald-600 text-sm">{{ __('Total Marks') }}</td>
                                <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium text-sm text-right">{{ session.results.score }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Time Analysis Charts Section -->
            <!-- Question Time Analysis (Full Width) -->
            <div class="quanitativeAbility my-5 rounded-xl bg-white shadow-sm border border-gray-100">
                <div class="flex items-center justify-between px-6 pt-6">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        {{ __('Question Time Breakdown') }}
                    </h2>
                </div>
                <div class="p-6">
                    <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-lg p-4 border border-red-100">
                        <div class="h-80 w-full">
                            <bar-chart :chart-data="questionTimeChartDataComputed" :options="questionTimeChartOptions" />
                        </div>
                    </div>
                    <p class="mt-4 text-xs text-gray-500 text-center flex items-center justify-center">
                        <svg class="w-4 h-4 mr-1 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>
                        {{ __('Time spent per question (seconds)') }}
                    </p>
                </div>
            </div>

            <!-- Performance Trend Chart (Full Width) -->
            <div class="my-5 rounded-xl bg-white shadow-sm border border-gray-100">
                <div class="flex items-center justify-between px-6 pt-6 pb-2">
                    <h2 class="text-xl font-bold text-gray-800 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        {{ __('Performance Trend') }}
                    </h2>
                </div>
                <div class="p-6">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-lg p-4 border border-blue-100">
                        <div class="h-90 w-full">
                            <line-chart :chart-data="progressChartDataComputed" :options="progressChartOptions" />
                        </div>
                    </div>
                    <p class="mt-4 text-xs text-gray-500 text-center flex items-center justify-center">
                        <svg class="w-4 h-4 mr-1 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                        {{ __('Your score progression across multiple attempts') }}
                    </p>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import DoughnutChart from "@/Charts/DoughnutChart";
    import BarChart from "@/Charts/BarChart";
    import LineChart from "@/Charts/LineChart";
    import RewardsBadge from "@/Components/RewardsBadge";
    import BackButton from "@/Components/BackButton";
    import ProgressNavigator from "@/Components/Stepper/ProgressNavigator";

    export default {
        components: {
            AppLayout,
            DoughnutChart,
            BarChart,
            LineChart,
            RewardsBadge,
            BackButton,
            ProgressNavigator
        },
        props: {
            quiz: Object,
            session: Object,
            steps: Array,
            historicalAttempts: {
                type: Array,
                default: () => []
            }
        },
        data() {
            return {
                loading: false,
                statusChartData: {
                    labels: ['Correct', 'Wrong', 'Unanswered'],
                    datasets: [{
                        label: 'Status',
                        data: [
                            this.session.results.correct_answered_questions,
                            this.session.results.wrong_answered_questions,
                            this.session.results.unanswered_questions
                        ],
                        backgroundColor: [
                            'rgb(52, 211, 153)',
                            'rgb(248, 113, 113)',
                            'rgb(156, 163, 175)'
                        ],
                        hoverOffset: 4
                    }]
                },
                timeSpentChartData: {
                    labels: ['Correct', 'Wrong', 'Other'],
                    datasets: [{
                        label: 'Time Spent',
                        data: [
                            this.session.results.time_taken_for_correct_answered.seconds,
                            this.session.results.time_taken_for_wrong_answered.seconds,
                            this.session.results.time_taken_for_other.seconds],
                        backgroundColor: [
                            'rgb(52, 211, 153)',
                            'rgb(248, 113, 113)',
                            'rgb(156, 163, 175)'
                        ],
                        hoverOffset: 4
                    }]
                },
                questionTimeChartOptions: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 12,
                                fontColor: '#6B7280',
                                callback: function(value) {
                                    return value + 's';
                                }
                            },
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0.05)',
                                zeroLineColor: 'rgba(0, 0, 0, 0.1)'
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Time (seconds)',
                                fontSize: 13,
                                fontColor: '#374151'
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontSize: 12,
                                fontColor: '#6B7280'
                            },
                            gridLines: {
                                display: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Questions',
                                fontSize: 13,
                                fontColor: '#374151'
                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleFontSize: 13,
                        bodyFontSize: 12,
                        cornerRadius: 6,
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'Time: ' + tooltipItem.yLabel + ' seconds';
                            }
                        }
                    }
                },
                topicPerformanceChartOptions: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                max: 100,
                                fontSize: 12,
                                fontColor: '#6B7280',
                                callback: function(value) {
                                    return value + '%';
                                }
                            },
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0.05)',
                                zeroLineColor: 'rgba(0, 0, 0, 0.1)'
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Accuracy (%)',
                                fontSize: 13,
                                fontColor: '#374151'
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontSize: 11,
                                fontColor: '#6B7280'
                            },
                            gridLines: {
                                display: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Topics',
                                fontSize: 13,
                                fontColor: '#374151'
                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleFontSize: 13,
                        bodyFontSize: 12,
                        cornerRadius: 6,
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'Accuracy: ' + tooltipItem.yLabel + '%';
                            }
                        }
                    }
                },
                progressChartOptions: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                fontSize: 12,
                                fontColor: '#6B7280'
                            },
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0.05)',
                                zeroLineColor: 'rgba(0, 0, 0, 0.1)'
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Score',
                                fontSize: 13,
                                fontColor: '#374151'
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontSize: 12,
                                fontColor: '#6B7280'
                            },
                            gridLines: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Attempts',
                                fontSize: 13,
                                fontColor: '#374151'
                            }
                        }]
                    },
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            fontSize: 13,
                            fontColor: '#374151',
                            padding: 15,
                            usePointStyle: true
                        }
                    },
                    tooltips: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        titleFontSize: 13,
                        bodyFontSize: 12,
                        cornerRadius: 6,
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'Score: ' + tooltipItem.yLabel;
                            }
                        }
                    },
                    elements: {
                        point: {
                            radius: 4,
                            hoverRadius: 6,
                            backgroundColor: 'rgb(59, 130, 246)',
                            borderColor: '#fff',
                            borderWidth: 2
                        }
                    }
                }
            }
        },
        metaInfo() {
            return {
                title: this.title
            }
        },
        computed: {
            title() {
                return this.quiz.title + ' '+this.__('Results')+' - ' + this.$page.props.general.app_name;
            },
            totalAnswered() {
                return this.session.results.answered_questions+'/'+this.session.results.total_questions+' '+this.__('Answered');
            },
            totalTimeSpent() {
                return this.session.results.total_time_taken.detailed_readable +' '+this.__('Spent');
            },
            avgTimePerQuestion() {
                if (this.session.results.answered_questions === 0) return '0:00';
                const avgSeconds = Math.floor(this.session.results.total_time_taken.seconds / this.session.results.answered_questions);
                const minutes = Math.floor(avgSeconds / 60);
                const seconds = avgSeconds % 60;
                return `${minutes}:${seconds.toString().padStart(2, '0')}`;
            },
            scoreWithoutNegativeMarking() {
                return this.session.results.marks_earned;
            },
            percentileDisplay() {
                if (this.session.results.percentile !== undefined && this.session.results.percentile !== null) {
                    return this.session.results.percentile.toFixed(1) + '%';
                }
                return 'N/A';
            },
            questionTimeChartDataComputed() {
                const breakdown = this.session.results.question_time_breakdown || [];
                return {
                    labels: breakdown.map((q, index) => 'Q' + (q.sno || q.question_number || index + 1)),
                    datasets: [{
                        label: 'Time (seconds)',
                        data: breakdown.map(q => q.time_taken),
                        backgroundColor: breakdown.map(q => {
                            if (q.time_taken > 120) return 'rgb(239, 68, 68)'; // Red - too slow
                            if (q.time_taken > 60) return 'rgb(251, 191, 36)'; // Yellow - moderate
                            return 'rgb(34, 197, 94)'; // Green - fast
                        })
                    }]
                };
            },
            topicPerformanceChartDataComputed() {
                const topics = this.session.results.topic_performance || [];
                return {
                    labels: topics.map(t => t.topic_name),
                    datasets: [{
                        label: 'Accuracy %',
                        data: topics.map(t => t.accuracy),
                        backgroundColor: topics.map(t => {
                            if (t.accuracy >= 80) return 'rgba(34, 197, 94, 0.7)'; // Green - excellent
                            if (t.accuracy >= 60) return 'rgba(251, 191, 36, 0.7)'; // Yellow - good
                            return 'rgba(239, 68, 68, 0.7)'; // Red - needs improvement
                        }),
                        borderColor: topics.map(t => {
                            if (t.accuracy >= 80) return 'rgb(34, 197, 94)';
                            if (t.accuracy >= 60) return 'rgb(251, 191, 36)';
                            return 'rgb(239, 68, 68)';
                        }),
                        borderWidth: 2
                    }]
                };
            },
            progressChartDataComputed() {
                // Use historical attempts if available
                if (this.historicalAttempts && this.historicalAttempts.length > 0) {
                    return {
                        labels: this.historicalAttempts.map(a => `Attempt ${a.attempt}`),
                        datasets: [{
                            label: 'Score',
                            data: this.historicalAttempts.map(a => a.score),
                            borderColor: 'rgb(59, 130, 246)',
                            backgroundColor: 'rgba(59, 130, 246, 0.1)',
                            fill: true,
                            tension: 0.3
                        }]
                    };
                }
                
                // Fallback to current attempt only
                return {
                    labels: ['Current Attempt'],
                    datasets: [{
                        label: 'Score',
                        data: [this.session.results.score],
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        fill: true,
                        tension: 0.3
                    }]
                };
            }
        }
    }

</script>

<style scoped>
.border-borderGrey {
    border-color: #e5e7eb;
}

.Analytics_positive {
    transition: all 0.3s ease;
}

.Analytics_positive:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}
</style>
