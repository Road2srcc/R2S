<template>
    <app-layout>
        <template #header>
            <h1 class="app-heading">{{ __("Mocks") }}</h1>
        </template>

        <div class="py-6 pb-10 mx-auto max-w-7xl">
            <div class="w-full mt-3">
                <div class="mb-6">
                    <h2 class="text-base font-semibold text-gray-900">
                        {{ __("All Subjects") }}
                    </h2>
                    <p
                        v-if="subject && subject.name"
                        class="mt-1 text-sm text-gray-500"
                    >
                        {{ __("Selected syllabus of your choice") }}
                    </p>
                </div>

                <div class="space-y-8">
                    <div v-for="section in sections" :key="section.id">
                        <h3 class="text-sm font-semibold text-gray-800 mb-3">
                            {{ section.name }}
                        </h3>

                        <div class="relative">
                            <div
                                class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"
                            >
                                <button
                                    v-for="mock in visibleMocks(section)"
                                    :key="mock.id"
                                    type="button"
                                    class="w-full rounded-3xl border border-gray-300 bg-white p-5 text-left transition-all duration-200 hover:border-gray-400 md:px-6 md:py-6 group relative"
                                    :class="mock.is_paid && !mock.unlocked ? 'bg-gray-50' : ''"
                                    @click="onClickMock(mock)"
                                >
                                    <div
                                        class="flex h-full flex-col justify-between"
                                    >
                                        <div>
                                            <p
                                                class="text-sm font-light text-gray-600"
                                            >
                                                {{ __("Mock") }}
                                            </p>
                                            <p
                                                class="pb-2 pt-1 text-xl font-semibold md:text-xl md:leading-none"
                                                :class="
                                                    mock.is_paid && !mock.unlocked
                                                        ? 'text-gray-500'
                                                        : 'text-gray-900'
                                                "
                                            >
                                                {{ mock.title }}
                                            </p>
                                        </div>

                                        <div
                                            class="mt-auto"
                                            :class="mock.is_paid ? '' : 'pt-3'"
                                        >
                                            <p
                                                v-if="mock.is_paid && !mock.unlocked"
                                                class="flex items-center gap-1 text-xs text-gray-600 opacity-0 transition-opacity group-hover:opacity-100 md:text-sm"
                                            >
                                                {{ __("Unlock") }} →
                                            </p>
                                            <p
                                                v-else
                                                class="text-xs opacity-0 transition-all group-hover:opacity-100 md:text-sm text-blue-500"
                                            >
                                                {{ __("Attempt") }} →
                                            </p>
                                        </div>
                                    </div>

                                    <svg
                                        v-if="mock.is_paid && !mock.unlocked"
                                        class="absolute bottom-4 right-4 h-4 w-4 text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M12 17a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm6-7h-1V8a5 5 0 0 0-10 0v2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2zm-3 0H9V8a3 3 0 0 1 6 0v2z"
                                        />
                                    </svg>
                                </button>
                            </div>

                            <button
                                v-if="canLoadMore(section)"
                                type="button"
                                class="hidden lg:flex absolute -right-14 top-11 h-12 w-12 rounded-full border-2 border-gray-300 bg-white text-2xl font-semibold text-gray-700 transition-all hover:border-gray-400 hover:bg-gray-50 items-center justify-center shadow-sm"
                                :aria-label="__('Load more')"
                                @click="loadMore(section)"
                            >
                                +
                            </button>
                            <button
                                v-if="canLoadMore(section)"
                                type="button"
                                class="lg:hidden mt-4 p-2 rounded-lg mx-auto border-2 border-gray-300 bg-white text-xl font-semibold text-gray-700 transition-all hover:border-gray-400 hover:bg-gray-50 flex items-center justify-center"
                                :aria-label="__('Load more')"
                                @click="loadMore(section)"
                            >
                                {{ __("Load more") }}
                                <svg
                                    class="ltr:ml-2 rtl:mr-2 h-5 w-5 text-gray-700"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-11a1 1 0 1 0-2 0v2H7a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2V7z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div v-if="sections.length === 0" class="qt-card">
                        <div class="qt-card-body">
                            <p class="text-gray-700">
                                {{ __("No Mock Tests Available") }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout,
    },

    props: {
        subject: {
            type: Object,
            default: null,
        },
        sections: {
            type: Array,
            required: true,
        },
    },

    data() {
        return {
            visibleMocksBySectionId: {},
        };
    },

    mounted() {
        this.initVisibleCounts();
    },

    methods: {
        initVisibleCounts() {
            const next = {};
            (this.sections || []).forEach((section) => {
                next[section.id] = 4;
            });
            this.visibleMocksBySectionId = next;
        },

        visibleCount(sectionId) {
            return this.visibleMocksBySectionId?.[sectionId] ?? 4;
        },

        visibleMocks(section) {
            const count = this.visibleCount(section.id);
            return (section.mocks || []).slice(0, count);
        },

        canLoadMore(section) {
            return (section.mocks || []).length > this.visibleCount(section.id);
        },

        loadMore(section) {
            const current = this.visibleCount(section.id);
            const total = (section.mocks || []).length;
            const next = Math.min(current + 1, total);
            this.$set(this.visibleMocksBySectionId, section.id, next);
        },

        onClickMock(mock) {
            if (mock && mock.is_paid && !mock.unlocked) {
                window.open("https://docs.google.com/forms/d/e/1FAIpQLScs9gtMg5V3w24zkQ6LnsBJbEN-gX5kqN-0PqET2ALjrcZywg/viewform?usp=sharing", "_blank");
                return;
            }

            if (mock && mock.slug) {
                this.$inertia.get(
                    route("quiz_instructions", { quiz: mock.slug })
                );
            }
        },
    },

    computed: {
        title() {
            return this.__("Mocks") + " - " + this.$page.props.general.app_name;
        },
    },
};
</script>
