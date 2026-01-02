<template>
    <app-layout>
        <template #header>
            <h1 class="app-heading">{{ __('Dashboard') }}</h1>
        </template>

        <div class="py-6">
            <div class="w-full gap-4 md:gap-6 flex flex-col flex-col-reverse md:flex-row">
                <div class="w-full md:w-2/3">
                    <section-header :title="'Mock Tests'"></section-header>
                    <div v-if="mockTests.length > 0" class="grid grid-cols-2 gap-4">
                        <mock-test-card v-for="mockTest in mockTests" :key="mockTest.id" :mock-test="mockTest" />

                    </div>
                    <div v-else>
                        <empty-student-card :title="__('No Mock Tests Available')">
                            <template #action>
                                <inertia-link :href="route('pricing_page')">
                                    <span class="qt-btn qt-btn-sm qt-btn-primary">{{ __('View Pricing') }}</span>
                                </inertia-link>
                            </template>
                        </empty-student-card>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout';
import MockTestCard from "@/Components/Cards/MockTestCard";
import EmptyStudentCard from "@/Components/Cards/EmptyStudentCard";
import SectionHeader from "@/Components/SectionHeader";

export default {
    components: {
        AppLayout,
        MockTestCard,
        EmptyStudentCard,
        SectionHeader
    },
    data() {
        return {
            mockTests: [
                
                { id: 2, name: "Mock 02", slug: "mock-02", isUnlocked: false },
                
            ]
        };
    },
    computed: {
        title() {
            return this.__('User Dashboard') + ' - ' + this.$page.props.general.app_name;
        }
    }
}
</script>
