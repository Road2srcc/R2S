<template>
    <div class="mock-tests-container">
        <h2 class="text-2xl font-bold mb-4">Mock Tests</h2>
        <div class="grid grid-cols-2 gap-4">
            <!-- BST -->
            <div class="mock-card">
                <div class="mock-card-content">
                    <h3 class="mock-title">{{ mockTests[0].name }}</h3>
                    <inertia-link :href="route('pricing')">
                        <span class="qt-btn qt-btn-sm qt-btn-primary">
                            {{ __('Unlock Exam') }} →
                        </span>
                    </inertia-link>
                </div>
            </div>

            <!-- Economics -->
            <div class="mock-card">
                <div class="mock-card-content">
                    <h3 class="mock-title">{{ mockTests[1].name }}</h3>
                    <inertia-link :href="route('pricing')">
                        <span class="qt-btn qt-btn-sm qt-btn-primary">
                            {{ __('Unlock Exam') }} →
                        </span>
                    </inertia-link>
                </div>
            </div>

            <!-- English -->
            <div class="mock-card">
                <div class="mock-card-content">
                    <h3 class="mock-title">{{ mockTests[2].name }}</h3>
                    <inertia-link :href="route('pricing')">
                        <span class="qt-btn qt-btn-sm qt-btn-primary">
                            {{ __('Unlock Exam') }} →
                        </span>
                    </inertia-link>
                </div>
            </div>

            <!-- Maths -->
            <div class="mock-card">
                <div class="mock-card-content">
                    <h3 class="mock-title">{{ mockTests[3].name }}</h3>
                    <inertia-link :href="route('pricing')">
                        <span class="qt-btn qt-btn-sm qt-btn-primary">
                            {{ __('Unlock Exam') }} →
                        </span>
                    </inertia-link>
                </div>
            </div>

            <!-- Applied Maths -->
            <div class="mock-card">
                <div class="mock-card-content">
                    <h3 class="mock-title">{{ mockTests[4].name }}</h3>
                    <inertia-link :href="route('pricing')">
                        <span class="qt-btn qt-btn-sm qt-btn-primary">
                            {{ __('Unlock Exam') }} →
                        </span>
                    </inertia-link>
                </div>
            </div>

            <!-- General Test -->
            <div class="mock-card">
                <div class="mock-card-content">
                    <h3 class="mock-title">{{ mockTests[5].name }}</h3>
                    <inertia-link :href="route('pricing')">
                        <span class="qt-btn qt-btn-sm qt-btn-primary">
                            {{ __('Unlock Exam') }} →
                        </span>
                    </inertia-link>
                </div>
            </div>

            <!-- Accountancy -->
            <div class="mock-card">
                <div class="mock-card-content">
                    <h3 class="mock-title">{{ mockTests[6].name }}</h3>
                    <inertia-link :href="route('pricing')">
                        <span class="qt-btn qt-btn-sm qt-btn-primary">
                            {{ __('Unlock Exam') }} →
                        </span>
                    </inertia-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            mockTests: [
                { name: 'BST', isUnlocked: false },
                { name: 'Economics', isUnlocked: false },
                { name: 'English', isUnlocked: false },
                { name: 'Maths', isUnlocked: false },
                { name: 'Applied Maths', isUnlocked: false },
                { name: 'General Test', isUnlocked: false },
                { name: 'Accountancy', isUnlocked: false },
            ],
        };
    },
};
</script>

<style scoped>
.mock-tests-container {
    @apply p-6;
}

.mock-card {
    @apply bg-white rounded-lg shadow-md p-4 flex flex-col items-center text-center;
    transition: transform 0.2s ease-in-out;
}

.mock-card:hover {
    transform: scale(1.05);
}

.mock-icon {
    @apply w-12 h-12 mb-2;
}

.mock-title {
    @apply text-lg font-semibold mb-2;
}

.qt-btn-primary {
    @apply text-blue-600 px-4 py-1 rounded-lg;
    font-size: 0.875rem; /* Matches the small font size of the button in the image */
    display: inline-flex;
    align-items: center;
    gap: 0.25rem; /* Space between "Unlock Exam" and the arrow */
}

.qt-btn-primary:hover {
    @apply text-blue-800;
}

/* Remove the secondary button style since all buttons are now "Unlock Exam" */
.qt-btn-secondary {
    @apply text-blue-600 px-4 py-1 rounded-lg;
    font-size: 0.875rem;
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
}

.qt-btn-secondary:hover {
    @apply text-blue-800;
}
</style>